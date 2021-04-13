<?php
use Workerman\Worker;

require_once __DIR__ . '/../vendor/autoload.php';

$wsWorker = new Worker('websocket://0.0.0.0:2346');
$wsWorker->count = 4;

$wsWorker->onConnect = function ($connection) {
    echo "Новое подключение \n";
};

$wsWorker->onMessage = function ($connection, $data) use ($wsWorker) {
    foreach($wsWorker->connections as $clientConnection) {
        $clientConnection->send($data);
    }
};

$wsWorker->onClose = function ($connection) {
    echo "Отключение от сервера\n";
};

Worker::runAll();
?>