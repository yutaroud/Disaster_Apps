    <?php require('./log.php') ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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

            <!-- link_to "防災啓発マップ", {:action => "map"}, {id: "logo"} -->
            <a href="./index.php">防災啓発マップ</a>
    </header>

    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">

                <ul id="pc">
                    <li class="active">
                        <a href="./home.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">import_contacts</i><span>ホーム</span> </a>
                    </li>

                    <li>
                        <a id="selected" href="http://mdg.main.jp/tomit/asahi/map.html" onclick="shitei_on();return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><span>指定避難所</span></a>
                    </li>
                    <li>
                        <a href="http://mdg.main.jp/tomit/asahi/map3.html" onclick="ittoki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">directions_run</i><span>一時避難場所</span></a>
                    </li>
                    <li>
                        <a href="http://mdg.main.jp/tomit/asahi/map4.html" onclick="kouminkan_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">wb_cloudy</i><span>風水害時避難場所</span></a>
                    </li>
                    <li>
                        <a href="http://mdg.main.jp/tomit/asahi/map5.html" onclick="kyusui_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">opacity</i><span>応急時給水場所</span></a>
                    </li>
                    <li>
                        <a href="http://mdg.main.jp/tomit/asahi/map6.html" onclick="aed_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">healing</i><span>AED設置場所</span></a>
                    </li>
                    <li>
                        <a href="http://mdg.main.jp/tomit/asahi/map7.html" onclick="jihanki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_drink</i><span>災害用自販機</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

        <div class="gnav">
            <ul>
                <li>
                    <a href="../../maps/home"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">import_contacts</i><span>ホーム</span> </a>
                </li>
                <li>
                    <a class="" id="selected" href="http://mdg.main.jp/tomit/asahi/map.html" onclick="shitei_on();return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i><span>指定避難所</span></a>
                </li>
                <li>
                    <a class="" href="http://mdg.main.jp/tomit/asahi/map3.html" onclick="ittoki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">directions_run</i><span>一時避難所</span></a>
                </li>
                <li>
                    <a class="" href="http://mdg.main.jp/tomit/asahi/map4.html" onclick="kouminkan_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">wb_cloudy</i><span>風水害時避難所</span></a>
                </li>
                <li>
                    <a class="" href="http://mdg.main.jp/tomit/asahi/map5.html" onclick="kyusui_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">opacity</i><span>応急時給水所</span></a>
                </li>
                <li>
                    <a class="" href="http://mdg.main.jp/tomit/asahi/map6.html" onclick="aed_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">healing</i><span>AED設置所</span></a>
                </li>
                <li>
                    <a class="" href="http://mdg.main.jp/tomit/asahi/map7.html" onclick="jihanki_on(); return false;"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_drink</i><span>災害用自販機</span></a>
                </li>
            </ul>
        </div>