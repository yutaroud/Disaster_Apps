<?php
if(!isset($_GET["id"])){
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    header('Location:'.$root."Disaster_App");
    exit();
}else{
    require_once("DB/mysql.php");
    //クラスの生成
    $obj=new connect();
    //sql文の発行
    $sql="SELECT * FROM owari WHERE ID = :id";
    $id = $_GET["id"];
    //クラスの中の関数の呼び出し
    $items=$obj->target($sql,$id);
    include("component/utility.php");
}
?>

<?php require_once('./component/header.php') ?>
<div class="row">
    <div class="col-xs-6">
        <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3><?php echo $items[0]["Name"] ;?></h3>
        </div>
            <div class="widget-content">
                <div class="widget big-stats-container">
                    <div class="widget-content" style="text-align:center">
                        <h4 class="bigstats"><br><?php echo $items[0]["Address"];?><br>
                            <?php echo $items[0]["Phone_number"];?></h4>
                        <div class="stat"><span class="value">
            写真
          </span> </div>
                        <br>
                        <div style="text-align:center" id="choice">
                            <a href="#" onclick="paintIt(this, '#990000')">
                                <button class="mdl-button mdl-button--raised mdl-js-button dialog-button btn btn-primary">外観</button></a>
                            <a href="javascript:document.ph01.src = '../../assets/images/taikukan.JPG'; void(0);">
                                <button class="mdl-button mdl-button--raised mdl-js-button dialog-button btn btn-primary">体育館</button></a>

                            <!-- .stat -->
                        </div>

                    </div>
                    <!-- /widget-content -->

                </div>
            </div>
        </div>
        <!-- /widget -->
        <div class="widget widget-nopad">


            <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">

            <!-- /widget-header -->
            <div class="widget widget-table action-table">
                <div class="widget-header"> <i class="icon-th-list"></i>
                    <h3>備蓄情報</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr align="center">
                            <th><h5>項目</h5></th>
                            <th><h5>品名</h5></th>
                            <th><h5>保有量</h5></th>
                            <th><h5>写真</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>飲料水</h5></td>
                            <td><h5>180L</h5></td>
                            <td style="text-align:center"><a href="water2.jpg" rel="lightbox[sample]" title="味は普通の水です">
                                    <img src="water.jpg" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>乾パン</h5></td>
                            <td><h5>256食</h5></td>
                            <td style="text-align:center"><a href="kanpan.jpg" rel="lightbox[sample]" title="意外と美味しい">
                                    <img src="kanpan_s.jpg" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>アルファ米</h5></td>
                            <td><h5>860食</h5></td>
                            <td style="text-align:center"><a href="alfa_s.jpg" rel="lightbox[sample]" title="食べるまでに時間がかかる">
                                    <img src="alfa.jpg" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>ビスケット</h5></td>
                            <td><h5>1238食</h5></td>
                            <td style="text-align:center"><a href="s_bis.JPG" rel="lightbox[sample]" title="美味しいが喉乾く" width="200" height="100">
                                    <img src="s_bis_s.JPG" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>クラッカー</h5></td>
                            <td><h5>805食</h5></td>
                            <td style="text-align:center"><a href="s_crack.JPG" rel="lightbox[sample]" title="美味しいが喉乾く" width="200" height="100">
                                    <img src="s_crack_s.JPG" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>カロリーメイト</h5></td>
                            <td><h5>50食</h5></td>
                            <td style="text-align:center"><a href="mate.jpg" rel="lightbox[sample]" title="美味しいが喉乾く" width="200" height="100">
                                    <img src="mate_s.jpg" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>
                        <tr align="center">
                            <th><h5>食料品</h5></th>
                            <td><h5>缶入りパン</h5></td>
                            <td><h5>172食</h5></td>
                            <td style="text-align:center"><a href="kandumepan.jpg" rel="lightbox[sample]" title="美味しいが喉乾く" width="200" height="100">
                                    <img src="kandumepan_s.jpg" width="75" height="75" class="hp_no7_sample"></a></td>
                        </tr>

                        </tbody>
                    </table>
                    <div style="text-align:center;">
                        <button class="mdl-button mdl-button--raised mdl-js-button dialog-button btn btn-primary" href="計算方法.png" data-featherlight="image">1人当たりの計算方法は？</button>
                    </div>
                </div>
                <!-- /widget-content -->
            </div>
            <!-- /widget-content -->
        </div>
        <!-- /widget -->
    </div>
    <div class="col-xs-6">
        <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
                <h3>施設情報と利用の仕方</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">


                <div class="shortcuts">
                    <li style="list-style:none;">
                        <p><img src="IMAGE/maru.png" alt="使用可能" width="36px" height="36px">使用できます</p><br>
                        <?php get_facility($items[0]["Equipment"],0,"#","healing","救護設備");?>
                        <?php get_facility($items[0]["Warehouse"],0,"#","local_shipping","備蓄倉庫");?>
                        <?php get_facility($items[0]["watter_supply"],0,"#","opacity","給水設備");?>
                        <?php get_facility($items[0]["Cooking"],0,"#","restaurant_menu","炊事設備");?>
                        <?php get_facility($items[0]["Power_generating"],0,"#","battery_charging_full","発電設備");?>
                        <?php get_facility($items[0]["Bathroom"],0,"#","hot_tub","風呂");?>
                        <?php get_facility($items[0]["Toilet"],0,"#","wc","トイレ");?>
                        <?php get_facility($items[0]["Other_Equipment"],0,"#","build","その他設備");?>
                    </li>
                    <hr>
                    <li style="list-style:none;">
                        <p><img src="IMAGE/batu.png" alt="使用不可" width="36px" height="36px">使用できません</p><br>
                        <?php get_facility($items[0]["Equipment"],1,"#","healing","救護設備");?>
                        <?php get_facility($items[0]["Warehouse"],1,"#","local_shipping","備蓄倉庫");?>
                        <?php get_facility($items[0]["watter_supply"],1,"#","opacity","給水設備");?>
                        <?php get_facility($items[0]["Cooking"],1,"#","restaurant_menu","炊事設備");?>
                        <?php get_facility($items[0]["Power_generating"],1,"#","battery_charging_full","発電設備");?>
                        <?php get_facility($items[0]["Bathroom"],1,"#","hot_tub","風呂");?>
                        <?php get_facility($items[0]["Toilet"],1,"#","wc","トイレ");?>
                        <?php get_facility($items[0]["Other_Equipment"],1,"#","build","その他設備");?>
                    </li>
                    </li>
                    <hr>
                    <li style="list-style:none;">
                        <p><img src="IMAGE/info.png" alt="場合による" width="36px" height="36px">場合による</p><br>


                    </li>
                </div>


                <!-- /shortcuts -->
            </div>
            <!-- /widget-content -->
        </div>
        <!-- /widget -->

        <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
                <h3>収容可能人数</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <div class="chart">
                    <h3>屋外人数 <?php echo $items[0]["Outdoor_capacity"] ;?>人</h3>
                    <div class="chart" id="chart2">
                        <h3> 屋内人数 <?php echo $items[0]["Indoor_capacity"] ;?>人</h3>
                        <br>
                    </div>
                    <!-- /area-chart -->


                </div>
                <!-- /widget-content -->
            </div>
            <div class="widget widget-nopad">
                <div class="widget-header"> <i class="icon-exclamation-sign"></i>
                    <h3>防災担当者の声</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                    <table border="1" bordercolor="#fff">
                        <tbody><tr>
                            <td><br>
                                <p><img src="IMAGE/tantou.png" alt="防災担当者の声"><br>　防災担当者</p><br>
                            </td>
                            <td>
                                尾張旭市では、備蓄の種類を増やすなど、災害時の生活を良くする工夫がされています.
                                <br><button class="mdl-button mdl-button--raised mdl-js-button dialog-button btn btn-primary" href="#">クリック</button>←このページ内の青いボタンはクリックで説明が表示されます
                            </td>
                        </tr>
                        </tbody></table>

                    <br>
                    <!-- /widget-content -->
                </div>
            </div>
            <!-- /widget -->
        </div>
    </div>
</div>
<?php require_once('./component/footer.php')?>