<?php
// Class AutoLoader implements
declare(strict_types=1);
spl_autoload_register(function ($class) {
    $file = __DIR__ . "/$class.php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        die("Error: Class file '$file' not found!"); // Debugging message
    }
});
require_once "config.php";

// Database instance
$database = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

// Controllers initialized
$auth = new AuthController($database);
$user = new UserController($database);
$admin = new AdminController($database);
$testimonial = new TestimonialController($database);
// $log = new LogController($database);
$signals = new SignalController($database);
$devices = new UserDeviceController($database);
$project = new ProjectController($database);
$product = new ProductController($database);
$vedio  = new VedioController($database);
$work = new WorkController($database);
$setting = new SettingController($database);
$about = new AboutController($database);
$news = new NewsController($database);
$faq = new FaqController($database);
$gallery = new GalleryController($database);

// Event Management
$event = new EventController($database);  // Event management added

// Database controller
$db = new DbController($database);

// Debugging function
function dd($res) {
    var_dump($res);
    exit;
}
