<?php 
/** * The base configuration for WordPress */ 

/** ================= DATABASE ================= */ 
define('DB_NAME', 'btl'); // Database đã tạo trong phpMyAdmin 
define('DB_USER', 'root'); // XAMPP mặc định 
define('DB_PASSWORD', ''); // XAMPP thường để trống 
define('DB_HOST', 'localhost'); // Chuyển về localhost để đồng bộ với URL bên dưới

/** Charset */ 
define('DB_CHARSET', 'utf8mb4'); 
define('DB_COLLATE', ''); 

/** ================= PERFORMANCE & MEMORY ================= */
// Ép WordPress nâng mức giới hạn sử dụng RAM để xử lý nạp ảnh nặng mà không bị trắng trang
define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '1024M');

/** ================= SECURITY KEYS ================= */ 
/* WordPress yêu cầu có key */ 
define('AUTH_KEY', 'btl-auth-key-123456'); 
define('SECURE_AUTH_KEY', 'btl-secure-auth-key-123456'); 
define('LOGGED_IN_KEY', 'btl-logged-in-key-123456'); 
define('NONCE_KEY', 'btl-nonce-key-123456'); 
define('AUTH_SALT', 'btl-auth-salt-123456'); 
define('SECURE_AUTH_SALT', 'btl-secure-auth-salt-123456'); 
define('LOGGED_IN_SALT', 'btl-logged-in-salt-123456'); 
define('NONCE_SALT', 'btl-nonce-salt-123456'); 

/** ================= TABLE PREFIX ================= */ 
$table_prefix = 'wp_'; 

/** ================= URL OVERRIDE ================= */ 
define('WP_HOME', 'http://localhost/BTL_DT'); 
define('WP_SITEURL', 'http://localhost/BTL_DT'); 

/** ================= DEBUG ================= */ 
define('WP_DEBUG', true);          // Bật chế độ ghi nhận lỗi
define('WP_DEBUG_DISPLAY', false); // ÉP KHÔNG CHO IN LỖI RA MÀN HÌNH GIAO DIỆN
define('WP_DEBUG_LOG', true);  

/** ================= ABS PATH ================= */ 
if (!defined('ABSPATH')) { 
    define('ABSPATH', __DIR__ . '/'); 
} 
require_once ABSPATH . 'wp-settings.php';
