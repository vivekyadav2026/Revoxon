<?php
// SQLite Database Path
$db_file = __DIR__ . '/database.sqlite';

try {
    $db = new PDO("sqlite:" . $db_file);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create Tables if they don't exist
    $db->exec("CREATE TABLE IF NOT EXISTS settings (
        key TEXT PRIMARY KEY,
        value TEXT
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS enquiries (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        type TEXT,
        name TEXT,
        email TEXT,
        phone TEXT,
        subject_or_product TEXT,
        message TEXT,
        file_path TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS admins (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT UNIQUE,
        password TEXT
    )");
    
    // Create Gallery Table
    $db->exec("CREATE TABLE IF NOT EXISTS gallery (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        category TEXT,
        image_path TEXT,
        title TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
    
    // Create Jobs Table
    $db->exec("CREATE TABLE IF NOT EXISTS jobs (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        department TEXT,
        location TEXT,
        type TEXT,
        experience TEXT,
        description TEXT,
        requirements TEXT,
        status TEXT DEFAULT 'active',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
    
    // Insert default settings if empty
    $stmt = $db->query("SELECT COUNT(*) FROM settings");
    if ($stmt->fetchColumn() == 0) {
        $default_settings = [
            'phone1' => '+91 98257 06253',
            'phone2' => '+91 94608 61021',
            'phone3' => '+91 82009 45366',
            'email' => 'info@revoxon.com',
            'email_sales' => 'sales@revoxon.com',
            'whatsapp' => '9460861021',
            'address' => '338/01, Majara Chokdi, NH-48, Vill & Ta – Tajpur, Prantij, Sabarkantha, Gujarat - 383205',
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'instagram' => '#'
        ];
        
        $insert = $db->prepare("INSERT OR IGNORE INTO settings (key, value) VALUES (:key, :value)");
        foreach ($default_settings as $key => $val) {
            $insert->execute([':key' => $key, ':value' => $val]);
        }
    }
    
    // Insert default admin user if empty
    $stmt = $db->query("SELECT COUNT(*) FROM admins");
    if ($stmt->fetchColumn() == 0) {
        $username = 'admin';
        $password = password_hash('admin123', PASSWORD_DEFAULT);
        
        $insert = $db->prepare("INSERT INTO admins (username, password) VALUES (:username, :password)");
        $insert->execute([':username' => $username, ':password' => $password]);
    }

    // Populate Default Gallery if empty
    $stmt = $db->query("SELECT COUNT(*) FROM gallery");
    if ($stmt->fetchColumn() == 0) {
        $db->beginTransaction();
        
        // Brand Showcase Defaults
        $brand_images = [
            "all_pipes_range_branded.jpeg" => "Revoxon Complete Pipes Range",
            "column_pipes_branded.jpeg" => "Revoxon Column Pipes",
            "hdpe_pipes_branded.jpeg" => "Revoxon HDPE Pipes",
            "cpvc_pipes_branded.jpeg" => "Revoxon CPVC Pipes",
            "upvc_pipes_branded.jpeg" => "Revoxon UPVC Pipes",
            "swr_pipes_branded.jpeg" => "Revoxon SWR Pipes",
            "agri_pipes_branded_2.jpeg" => "Revoxon Agriculture Pipes",
            "agri_pipes_branded.jpeg" => "Revoxon Agriculture Pipes Range",
            "all_products_branded.jpeg" => "Revoxon Complete Product Range",
            "swr_fittings_branded.jpeg" => "Revoxon SWR Fittings",
            "all_products_branded_2.jpeg" => "Revoxon All Products Collection",
            "cpvc_fittings_branded.jpeg" => "Revoxon CPVC Fittings",
            "upvc_fittings_branded.jpeg" => "Revoxon UPVC Fittings",
            "pvc_adhesive_branded.jpeg" => "Revoxon PVC Adhesive",
            "tshirt_navy_branded.jpeg" => "Revoxon Team Uniform",
            "tshirt_blue_branded.jpeg" => "Revoxon Brand Merchandise",
            "chemicals_branded.jpeg" => "Revoxon Construction Chemicals",
            "chemicals_branded_2.jpeg" => "Revoxon Chemicals Range",
            "chemicals_grid_branded.jpeg" => "Revoxon Chemical Products",
            "casing_pipes_branded.jpeg" => "Revoxon Casing Pipes",
            "casing_pipes_branded_2.jpeg" => "Revoxon Casing Pipes Range"
        ];
        
        $insert_gall = $db->prepare("INSERT INTO gallery (category, image_path, title) VALUES (:category, :image_path, :title)");
        foreach ($brand_images as $filename => $title) {
            $insert_gall->execute([
                ':category' => 'brand',
                ':image_path' => 'assets/images/product_with_company_name/' . $filename,
                ':title' => $title
            ]);
        }
        
        // Plant Infrastructure Defaults (gallery_1.jpeg to gallery_45.jpeg)
        for ($i = 1; $i <= 45; $i++) {
            $insert_gall->execute([
                ':category' => 'plant',
                ':image_path' => 'assets/images/gallery_' . $i . '.jpeg',
                ':title' => 'Infrastructure Glimpse ' . $i
            ]);
        }
        
        $db->commit();
    }
    
    // Populate Default Jobs if empty
    $stmt = $db->query("SELECT COUNT(*) FROM jobs");
    if ($stmt->fetchColumn() == 0) {
        $insert_job = $db->prepare("INSERT INTO jobs (title, department, location, type, experience, description, requirements) VALUES (:title, :department, :location, :type, :experience, :description, :requirements)");
        
        $insert_job->execute([
            ':title' => 'Sales Executive',
            ':department' => 'Sales & Marketing',
            ':location' => 'Gujarat Region',
            ':type' => 'Full Time',
            ':experience' => '2-5 Years',
            ':description' => 'We are seeking an energetic Sales Executive to expand our dealer network and drive business growth in Gujarat.',
            ':requirements' => 'Prior experience in building materials or PVC pipe sales is preferred. Excellent communication and negotiation skills.'
        ]);
        
        $insert_job->execute([
            ':title' => 'Production Supervisor',
            ':department' => 'Production & Operations',
            ':location' => 'Prantij Plant',
            ':type' => 'Full Time',
            ':experience' => '3-6 Years',
            ':description' => 'Supervise shift production of PVC and UPVC pipes, ensuring compliance with quality standards and safety procedures.',
            ':requirements' => 'Diploma or Degree in CIPET/Mechanical. Technical knowledge of pipe extrusion processes is required.'
        ]);
    }
    
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
