<?php

class IndexController {

    public function homeAction() {
        require_once('./view/header.php');
        require_once('./view/horizontal_nav_bar.php');
        require_once('home.php');
        require_once('./view/aside.php');
        require_once('./view/footer.php');
    }

    public function guitarsAction() {
        require_once('./view/header.php');
        require_once('./view/horizontal_nav_bar.php');
        require_once('./products/Guitars/guitars.php');
        require_once('./view/aside.php');
        require_once('./view/footer.php');
    }

    public function shippingAction() {
        require_once('./view/header.php');
        require_once('./view/horizontal_nav_bar.php');
        require_once('./shipping.php');
        require_once('./view/aside.php');
        require_once('./view/footer.php');
    }

    public function supportAction() {
        require_once('./view/header.php');
        require_once('./view/horizontal_nav_bar.php');
        require_once('./support.php');
        require_once('./view/aside.php');
        require_once('./view/footer.php');
    }

    public function productAction() {
        require_once('./view/header.php');
        require_once('./view/horizontal_nav_bar.php');
        require_once('./products/product_list.php');
        require_once('./view/aside.php');
        require_once('./view/footer.php');
    }
}

$action = $_GET['action'] ?? 'home';

$controller = new IndexController();

if ($action === 'home') {
    $controller->homeAction();
} elseif ($action === 'guitars') {
    $controller->guitarsAction();
} elseif ($action === 'shipping') {
    $controller->shippingAction();
} elseif ($action === 'support') {
    $controller->supportAction();
} elseif ($action === 'product') {
    $controller->productAction();
} else {
    $controller->homeAction();
}
?>