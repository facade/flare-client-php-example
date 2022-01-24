<?php

require __DIR__ . '/../vendor/autoload.php';

use Facade\FlareClient\Flare;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->safeLoad();

$shouldReportErrors = $_ENV['FLARE_API_KEY'];

if ($shouldReportErrors) {
    Flare::register('YOUR-API-KEY')
        ->registerFlareHandlers();

    echo "Flare is correctly registered and will report errors!";
}

