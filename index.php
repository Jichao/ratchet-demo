<?php
/**
 * Created by PhpStorm.
 * User: jcyangzh
 * Date: 16/8/14
 * Time: 下午9:52
 */
require "./vendor/autoload.php";
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;
//include("./src/Chat.php");
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    2333
);
$server->run();
