<?php
require_once("DB/mysql.php");
//クラスの生成
$obj=new connect();
//sql文の発行
$sql = "SELECT * FROM city WHERE ID = :id";
//クラスの中の関数の呼び出し
$id = 1;
$items=$obj->target($sql,$id);
?>
<?php require_once('./component/header.php') ?>
<div class="content">
    <h2 class="midashi">本アプリについて</h2>
    <p>本アプリは自治体の防災情報を市民に伝えることを目的としています.<br>
        自治体の公助の限界を知り、災害に備えた自助の準備に役立ててください.<br>
        尚、本アプリは大学のオープンデータに関する研究の一環で作成されている為、<br>
        市の公式アプリではありません.</p>
    <h2 class="midashi"><?php echo $items[0]["city_name"];?> 防災基本情報</h2>
    <h4>南海トラフ地震発生時</h4>
    <h3>震度</h3>
    <h4>震度5強から6弱</h4>
    <h3>最大避難者数(概算)</h3>
    <h4>8262人</h4>
    <h3>建物被害</h3>
    <h4>全壊 : 418棟, 半壊 : 1052棟</h4>
    <h3>断水人口(愛知県全体の概算)</h3>
    <table class="table table-bordered">
        <tbody>
        <tr><th><h4>直後</h4></th><th><h4>1日後</h4></th><th><h4>1週間後</h4></th><th><h4>1ヶ月後</h4></th><th><h4>復旧期間</h4></th></tr>
        <tr><td><h4>約95%</h4></td><td><h4>約86%</h4></td><td><h4>約52%</h4></td><td><h4>約8%</h4></td><td><h4>6週間程度</h4></td></tr>
        </tbody>
    </table>
    <h3>停電件数(愛知県全体の概算)</h3>
    <table class="table table-bordered">
        <tbody>
        <tr><th><h4>直後</h4></th><th><h4>1日後</h4></th><th><h4>4日後</h4></th><th><h4>1週間後</h4></th><th><h4>復旧期間</h4></th></tr>
        <tr><td><h4>約89%</h4></td><td><h4>約81%</h4></td><td><h4>約1%</h4></td><td><h4>約1%</h4></td><td><h4>3週間程度</h4></td></tr>
        </tbody>
    </table>
    <h3>都市ガス供給停止(愛知県全体の概算)</h3>
    <table class="table table-bordered">
        <tbody>
        <tr><th><h4>直後</h4></th><th><h4>1日後</h4></th><th><h4>1週間後</h4></th><th><h4>1ヶ月後</h4></th><th><h4>復旧期間</h4></th></tr>
        <tr><td><h4>約9%</h4></td><td><h4>約9%</h4></td><td><h4>約7%</h4></td><td><h4>-</h4></td><td><h4>2週間程度</h4></td></tr>
        </tbody>
    </table>
    <h2 class="midashi">アプリ内のデータについて</h2>
    <h4><a href="<?php echo $items[0]["data_url"];?>"><?php echo $items[0]["city_name"];?>オープンデータ</a>を活用.</h4>
    <h4><a href="<?php echo $items[0]["disaster_url"];?>"><?php echo $items[0]["city_name"];?> 地域防災計画</a></h4>
    <br>
    <h2 class="midashi">災害発生時の情報発信サービス</h2>
    <h3>防災行政無線システム</h3>
    <h3>メール配信サービス</h3>
    <h3>Twitter <a href="https://twitter.com/_asapy_">公式アカウント</a></h3>
    <h3>Facebook <a href="https://www.facebook.com/owariasahi.asapy">公式アカウント</a></h3>
    <br>
</div>
<?php require_once('./component/footer.php') ?>
