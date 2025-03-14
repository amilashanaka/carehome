<?php

// side menu
$side_menu = array();

array_push($side_menu, array('name' => 'Dashboard', 'icon' => 'fas fa-tachometer-alt', 'url' => '/', 'active' => 'active', 'menu' => 'menu-open', 'submenu' => ''));
array_push($side_menu, array('name' => 'Events', 'icon' => ' fas fa-cube', 'url' => '#', 'active' => '', 'menu' => '', 'submenu' => array(array('name' => 'List', 'icon' => 'fas fa-list', 'url' => 'event_list'),)));
array_push($side_menu, array('name' => 'Testimonial', 'icon' => 'fas fa-comments', 'url' => '#', 'active' => '', 'menu' => '', 'submenu' => array(array('name' => 'List', 'icon' => 'fas fa-list', 'url' => 'testimonial_list'))));
array_push($side_menu, array('name' => 'About', 'icon' => 'fas fa-info-circle', 'url' => 'about', 'active' => '', 'menu' => '', 'submenu' => ''));
array_push($side_menu, array('name' => 'News', 'icon' => 'fas fa-newspaper', 'url' => '#', 'active' => '', 'menu' => '', 'submenu' => array(array('name' => 'List', 'icon' => 'fas fa-list', 'url' => 'news_list'))));
array_push($side_menu, array('name' => 'Faq', 'icon' => 'fas fa-lightbulb', 'url' => 'faq', 'active' => '', 'menu' => '', 'submenu' => ''));
array_push($side_menu, array('name' => 'Settings', 'icon' => 'fas fa-cog', 'url' => '#', 'active' => '', 'menu' => '', 'submenu' => array(array('name' => 'System', 'icon' => 'fas fa-cog', 'url' => 'settings'), array('name' => 'Sliders', 'icon' => 'fa fa-image', 'url' => 'slider_list'))));
//Logout button
array_push($side_menu, array('name' => 'Log Out', 'icon' => ' fas  fa-sign-out-alt', 'url' => 'javascript:logout()', 'active' => '', 'menu' => '', 'submenu' => ''));


?>






<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 " style="opacity: .8">
        <span class="brand-text font-weight-light"> <?= $setting->getSettings('f1') ?></span>
    </a><!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                if (is_array($side_menu)) {
                    foreach ($side_menu as $item) {
                ?>
                        <li class="nav-item has-treeview  <?= $item['menu'] ?>">
                            <a href="<?= $item['url'] ?>" class="nav-link  <?= $item['active'] ?>">
                                <i class="nav-icon  <?= $item['icon'] ?>"></i>
                                <p>
                                    <?= $item['name'] ?>
                                    <?= is_array($item['submenu']) ? '<i class="right fas fa-angle-left"></i>' : '' ?>
                                </p>
                            </a>
                            <?php if (is_array($item['submenu'])) {
                                foreach ($item['submenu']  as $sub_item) { ?>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= $sub_item['url'] ?>" class="nav-link" style="font-size: 13px;">
                                                <i class="nav-icon <?= $sub_item['icon'] ?>"></i>
                                                <p><?= $sub_item['name'] ?></p>
                                            </a>
                                        </li>
                                    </ul>
                            <?php }
                            }  ?>
                        </li>
                <?php }
                } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>