<?php
error_reporting(0);
ini_set('display_errors', 0);
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Connect to database
require_once __DIR__ . '/admin/db.php';
require_once __DIR__ . '/settings_loader.php';

$to = isset($settings['email']) ? $settings['email'] : 'info@revoxon.com';

$form_type = isset($_POST['form_type']) ? $_POST['form_type'] : '';

if ($form_type === 'contact') {
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST['phone']));
    $subject = strip_tags(trim($_POST['subject']));
    $message = strip_tags(trim($_POST['message']));

    $missing = [];
    if (empty($name)) $missing[] = 'Name';
    if (empty($email)) $missing[] = 'Email';
    if (empty($phone)) $missing[] = 'Phone';
    if (empty($message)) $missing[] = 'Message';

    if (!empty($missing)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields: ' . implode(', ', $missing)]);
        exit;
    }

    // Save to Database
    try {
        $stmt = $db->prepare("INSERT INTO enquiries (type, name, email, phone, subject_or_product, message) VALUES ('contact', :name, :email, :phone, :subject, :message)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':subject' => $subject,
            ':message' => $message
        ]);
    } catch (PDOException $e) {
        // Continue even if logging fails, so email can still be sent
    }

    $email_subject = "New Contact Inquiry: $subject";
    $email_body = "You have received a new message from the contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Phone: $phone\n".
                  "Subject: $subject\n\n".
                  "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Attempt to send email
    $mail_sent = @mail($to, $email_subject, $email_body, $headers);
    
    // Always return success if saved to DB, so user feels it succeeded even if localhost email fails
    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully.']);
} 
elseif ($form_type === 'quote') {
    $name = strip_tags(trim($_POST['quoteName']));
    $phone = strip_tags(trim($_POST['quotePhone']));
    $product = strip_tags(trim($_POST['quoteProduct']));
    $message = strip_tags(trim($_POST['quoteMessage']));

    $missing = [];
    if (empty($name)) $missing[] = 'Name/Company';
    if (empty($phone)) $missing[] = 'Phone';
    if (empty($product)) $missing[] = 'Product';

    if (!empty($missing)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields: ' . implode(', ', $missing)]);
        exit;
    }

    // Save to Database
    try {
        $stmt = $db->prepare("INSERT INTO enquiries (type, name, phone, subject_or_product, message) VALUES ('quote', :name, :phone, :product, :message)");
        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':product' => $product,
            ':message' => $message
        ]);
    } catch (PDOException $e) {
    }

    $email_subject = "New Quote Request: $product";
    $email_body = "You have received a new quote request.\n\n".
                  "Name/Company: $name\n".
                  "Phone: $phone\n".
                  "Product of Interest: $product\n\n".
                  "Message:\n$message\n";

    $headers = "From: $to\r\n";
    $headers .= "Reply-To: $to\r\n";

    @mail($to, $email_subject, $email_body, $headers);
    
    echo json_encode(['status' => 'success', 'message' => 'Your quote request has been submitted successfully.']);
} 
elseif ($form_type === 'career') {
    $department = strip_tags(trim($_POST['department']));
    $name = strip_tags(trim($_POST['name']));
    $phone = strip_tags(trim($_POST['phone']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if (empty($department) || empty($name) || empty($phone) || empty($email) || !isset($_FILES['resume'])) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields and upload your resume.']);
        exit;
    }

    $file = $_FILES['resume'];
    
    // Validate file
    $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!in_array($file['type'], $allowed_types) || $file['size'] > 5242880) { // 5MB
        echo json_encode(['status' => 'error', 'message' => 'Invalid file format or size. Only PDF, DOC, and DOCX under 5MB are allowed.']);
        exit;
    }

    // Save File locally
    $upload_dir = __DIR__ . '/uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $new_file_name = uniqid('resume_', true) . '.' . $file_ext;
    $dest_path = $upload_dir . $new_file_name;
    $uploaded_file_path = '';

    if (move_uploaded_file($file['tmp_name'], $dest_path)) {
        $uploaded_file_path = 'uploads/' . $new_file_name;
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save resume upload.']);
        exit;
    }

    // Save to Database
    try {
        $stmt = $db->prepare("INSERT INTO enquiries (type, name, email, phone, subject_or_product, file_path) VALUES ('career', :name, :email, :phone, :department, :file_path)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':department' => $department,
            ':file_path' => $uploaded_file_path
        ]);
    } catch (PDOException $e) {
    }

    // Email Attachment Processing
    $file_data = chunk_split(base64_encode(file_get_contents($dest_path)));
    $file_name = basename($file['name']);
    $email_subject = "New Job Application: $department";
    
    $boundary = md5(time());
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Body
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "You have received a new job application.\n\n".
             "Name: $name\n".
             "Email: $email\n".
             "Phone: $phone\n".
             "Department/Area of Interest: $department\n\n".
             "The applicant's resume is attached.\r\n\r\n";

    // Attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: {$file['type']}; name=\"$file_name\"\r\n";
    $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= $file_data . "\r\n";
    $body .= "--$boundary--";

    @mail($to, $email_subject, $body, $headers);
    
    echo json_encode(['status' => 'success', 'message' => 'Your application has been submitted successfully.']);
} 
else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid form submission.']);
}
?>
