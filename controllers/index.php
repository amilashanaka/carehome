<?php
// Class AutoLoader implements
declare(strict_types=1);
spl_autoload_register(function ($class) {
    include_once  __DIR__ . "/$class.php";
});
require_once "config.php";
// Db instant
$database = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
// Controllers intialized
$auth = new AuthController($database);
$user = new UserController($database);
$admin = new AdminController($database);
$blog = new BlogController($database);
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

// Db controller 
$db = new DbController($database);



function dd($res){
var_dump($res);
exit;
}