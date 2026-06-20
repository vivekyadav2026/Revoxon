<?php
// Include DB connection
require_once __DIR__ . '/admin/db.php';

$settings = [];

try {
    $stmt = $db->query("SELECT key, value FROM settings");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $settings[$row['key']] = $row['value'];
    }
} catch (PDOException $e) {
    // Fail-safe fallbacks
    $settings = [
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
}
?>
