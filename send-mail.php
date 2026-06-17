<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

$to = 'info@revoxon.com'; // Recipient email address

$form_type = isset($_POST['form_type']) ? $_POST['form_type'] : '';

if ($form_type === 'contact') {
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST['phone']));
    $subject = strip_tags(trim($_POST['subject']));
    $message = strip_tags(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
        exit;
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

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send mail. Please check SMTP settings.']);
    }
} 
elseif ($form_type === 'quote') {
    $name = strip_tags(trim($_POST['quoteName']));
    $phone = strip_tags(trim($_POST['quotePhone']));
    $product = strip_tags(trim($_POST['quoteProduct']));
    $message = strip_tags(trim($_POST['quoteMessage']));

    if (empty($name) || empty($phone) || empty($product)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
        exit;
    }

    $email_subject = "New Quote Request: $product";
    $email_body = "You have received a new quote request.\n\n".
                  "Name/Company: $name\n".
                  "Phone: $phone\n".
                  "Product of Interest: $product\n\n".
                  "Message:\n$message\n";

    $headers = "From: info@revoxon.com\r\n";
    $headers .= "Reply-To: info@revoxon.com\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Your quote request has been submitted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send mail. Please check SMTP settings.']);
    }
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

    $file_name = basename($file['name']);
    $file_data = chunk_split(base64_encode(file_get_contents($file['tmp_name'])));

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

    if (mail($to, $email_subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Your application has been submitted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send mail. Please check SMTP settings.']);
    }
} 
else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid form submission.']);
}
?>
