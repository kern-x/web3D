<?php

define('ROOT_PATH', '/web2');

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/web2/':
        require __DIR__ . '/../app/controllers/HomeController.php';
        (new HomeController())->index();
        break;
    case '/web2/model':
        require __DIR__ . '../app/controllers/ModelController.php';
        (new ModelController())->index();
        break;
    case '/web2/about':
        require __DIR__ . '/../app/controllers/AboutController.php';
        (new AboutController())->index();
        break;
    case '/web2/contact':
        require __DIR__ . '/../app/controllers/ContactController.php';
        (new ContactController())->index();
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo '404 Not dsdsFound';
        break;
}
