<?php
/**
 * Created by PhpStorm.
 * User: yuki
 * Date: 2018/06/04
 * Time: 20:25
 */

//require
require_once __DIR__.'/vendor/autoload.php';

//for .env
use Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__);
$dotenv->load(); //.envが無いとエラーになる

//for monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//ログにつくprefixを与えてインスタンス作成
$log = new Logger('MONOLOG_TEST');
//ログレベルをDEBUG（最も低い）に設定
$handler = new StreamHandler('./app.log',Logger::DEBUG);
$log->pushHandler($handler);


//利用 ///////////////////////////////////

//.env
//変数名が他の環境変数と被らないように注意
$name = getenv('TEST_NAME');
$GMAP_APIKEY = getenv('GOOGLEMAPS_APYKEY');
//monolog
//$log->addDebug('でばっぐ');
//$log->addInfo('いんふぉ');
//$log->addWarning('わーにんぐ');
//$log->addError('えらー');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="./JS/map.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./CSS/index.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?=$GMAP_APIKEY?>&callback=initMap" defer></script>
    <title>防災啓発アプリ</title>
</head>
<body>
<?php require_once('./component/header.php') ?>
<div id="map" style="height:500px"></div>
<?php require_once('./component/footer.php')?>
</body>
</html>

