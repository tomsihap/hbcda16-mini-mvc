<?php

require __DIR__ . '/src/controller/PagesController.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$pages = [
    "/about" => "about",
    "/bye"  => "sayBye",
];

$requestedPath = $request->getPathInfo();

$foundRequestedFile = null;

foreach($pages as $page => $file) {
    if ($requestedPath === $page) {
        $foundRequestedFile = $file;
    }
}

if ($foundRequestedFile) {
    PagesController::$foundRequestedFile();
}
else {
    $response = new Response('Oups !', 404);
    $response->send();
}
