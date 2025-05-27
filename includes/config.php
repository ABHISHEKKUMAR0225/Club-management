<?php
// Configuration file for GEC Vaishali Sports Club website

// Error reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone setting
date_default_timezone_set('Asia/Kolkata');

// Website configuration
define('SITE_NAME', 'GEC Vaishali Sports Club');
define('SITE_URL', 'http://localhost:5000');
define('SITE_EMAIL', 'sports@gecvaishali.ac.in');

// Sports information
$sports_info = [
    'cricket' => [
        'name' => 'Cricket',
        'head' => 'Saquib Pathan',
        'icon' => 'fas fa-baseball-ball',
        'color' => 'primary',
        'description' => 'Our cricket team represents the spirit of determination and teamwork.'
    ],
    'football' => [
        'name' => 'Football',
        'head' => 'Tarang Kohli',
        'icon' => 'fas fa-futbol',
        'color' => 'success',
        'description' => 'Football at GEC Vaishali is more than just a game - it\'s a passion.'
    ],
    'badminton' => [
        'name' => 'Badminton',
        'head' => 'Abhishek Sharma',
        'icon' => 'fas fa-table-tennis',
        'color' => 'warning',
        'description' => 'Badminton requires precision, agility, and mental focus.'
    ],
    'volleyball' => [
        'name' => 'Volleyball',
        'head' => 'Anish Bumrah',
        'icon' => 'fas fa-volleyball-ball',
        'color' => 'danger',
        'description' => 'Volleyball is all about teamwork, communication, and quick reflexes.'
    ]
];

// Faculty information
$faculty_info = [
    'name' => 'Nishant Nilay',
    'position' => 'Faculty In-charge',
    'email' => 'nishant.nilay@gecvaishali.ac.in'
];

// Contact information
$contact_info = [
    'address' => 'Government Engineering College, Vaishali, Bihar, India',
    'email' => SITE_EMAIL,
    'phone' => '+91 XXX XXX XXXX',
    'office_hours' => 'Monday - Friday: 9:00 AM - 5:00 PM'
];

// Security functions
function sanitize_input($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function generate_csrf_token() {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Helper functions
function get_current_page() {
    return basename($_SERVER['PHP_SELF']);
}

function is_active_page($page) {
    return get_current_page() === $page ? 'active' : '';
}

function format_date($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}

function get_sports_data() {
    global $sports_info;
    return $sports_info;
}

function get_faculty_data() {
    global $faculty_info;
    return $faculty_info;
}

function get_contact_data() {
    global $contact_info;
    return $contact_info;
}

// Initialize session for CSRF protection
if (!isset($_SESSION)) {
    session_start();
}

// Generate CSRF token
$csrf_token = generate_csrf_token();
?>
