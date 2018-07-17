<header class="navbar navbar-fixed-top navbar-inverse">

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