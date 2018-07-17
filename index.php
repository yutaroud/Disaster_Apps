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
<header class="navbar navbar-fixed-top navbar-inverse">

    <div class="container">
        <!-- link_to "防災啓発マップ", {:action => "map"}, {id: "logo"} -->
        <a href="./index.php">防災啓発マップ</a>
        <div id="nav-drawer">
            <input id="nav-input" type="checkbox" class="nav-unshown">
            <label id="nav-open" for="nav-input"><span></span></label>
            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
            <div id="nav-content">
                <ul>
                    <li class="active">
                        <a href="../../"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">import_contacts</i><span>ホーム</span> </a>
                    </li>

                    <li>
                        <a class="mdl-navigation__link" id="selected" href="http://mdg.main.jp/tomit/asahi/map.html" onclick="shitei_on();return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><span>指定避難所</span></a>
                    </li>
                    <li class="subnavbar-open-right">
                        <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map3.html" onclick="ittoki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">directions_run</i><span>一時避難場所</span></a>
                    </li>
                    <li>
                        <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map4.html" onclick="kouminkan_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">wb_cloudy</i><span>風水害時避難場所</span></a>
                    </li>
                    <li>
                        <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map5.html" onclick="kyusui_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">opacity</i><span>応急時給水場所</span></a>
                    </li>
                    <li class="subnavbar-open-right">
                        <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map6.html" onclick="aed_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">healing</i><span>AED設置場所</span></a>
                    </li>
                    <li>
                        <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map7.html" onclick="jihanki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_drink</i><span>災害用自販機</span></a>
                    </li>
                    <li>
                        <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map8.html" onclick="all_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i><span>全表示</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</header>
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">

            <ul id="pc">
                <li class="active">
                    <a href="../../maps/home"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">import_contacts</i><span>ホーム</span> </a>
                </li>

                <li>
                    <a class="mdl-navigation__link" id="selected" href="http://mdg.main.jp/tomit/asahi/map.html" onclick="shitei_on();return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><span>指定避難所</span></a>
                </li>
                <li class="subnavbar-open-right">
                    <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map3.html" onclick="ittoki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">directions_run</i><span>一時避難場所</span></a>
                </li>
                <li>
                    <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map4.html" onclick="kouminkan_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">wb_cloudy</i><span>風水害時避難場所</span></a>
                </li>
                <li>
                    <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map5.html" onclick="kyusui_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">opacity</i><span>応急時給水場所</span></a>
                </li>
                <li class="subnavbar-open-right">
                    <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map6.html" onclick="aed_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">healing</i><span>AED設置場所</span></a>
                </li>
                <li>
                    <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map7.html" onclick="jihanki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_drink</i><span>災害用自販機</span></a>
                </li>
                <li>
                    <a class="mdl-navigation__link" href="http://mdg.main.jp/tomit/asahi/map8.html" onclick="all_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i><span>全表示</span></a>
                </li>


            </ul>
        </div>
    </div>
</div>
<div class="container">
<div id="map" style="height:360px"></div>
</div>
<footer class="footer">
    <small>
        <a href="https://railstutorial.jp/">安田遠藤浦田研究室</a>
        by <a href="http://www.michaelhartl.com/">渡辺優樹</a>
    </small>
    <nav>
        <ul>
            <li>"test"</li>

        </ul>
    </nav>
</footer>
</body>
</html>

