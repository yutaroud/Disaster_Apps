<?php
    require_once("DB/mysql.php");
    //クラスの生成
    $obj=new connect();
    //sql文の発行
    $sql="SELECT * FROM owari";
    //クラスの中の関数の呼び出し
    $items=$obj->select($sql);
?>

<?php require_once('./component/header.php') ?>
<div id="map" style="height:500px"></div>

<!-- googlemap用のJavascript -->
<script>
function initMap() {
var data = [];
<?php foreach ($items as $item) :?>
    data.push({
        id:<?php echo $item["ID"];?> ,
        name: '<?php echo $item["Name"];?>',
        lat:<?php echo $item["Latitude"]; ?>,
        lng:<?php echo $item["Longitude"];?>
    });
<?php endforeach;?>
var center = {lat: 35.236114,lng:137.018578};
var openedInfowindow = '';
var mapOptions = {
zoom: 12,
center: center,
scrollwheel: false
};
var map = new google.maps.Map(document.getElementById('map'), mapOptions);
var marker = [];
var infowindow = [];

var dppx = window.devicePixelRatio;
if (dppx >= 2) {
var imgPath = '../img/l/';
} else {
var imgPath = '../img/s/';
}
for (var i =0; i < 1000; i++){
var image = {
url: imgPath + data[i].ico,
scaledSize: new google.maps.Size(26,42)
};
marker[i] = new google.maps.Marker({
position: { lat: data[i].lat, lng: data[i].lng },
map: map//,
//icon: image
});
var content = '<div class="info"><h1>' + data[i].name + '</h1><p>'+ '</p>' + '<a href=' + 'discription.php' + '?id='+ data[i].id + '>詳細</a>' + '</div>';
infowindow[i] = new google.maps.InfoWindow({
content: content,
maxWidth: 200
});
markerClick(i);
infowindow[i].addListener('closeclick', function() {
openedInfowindow = '';
});
}
function markerClick(n) {
marker[n].addListener('click', function() {
if (openedInfowindow !== infowindow[n]) {
if (openedInfowindow) {
openedInfowindow.close();
}
openedInfowindow = infowindow[n];
infowindow[n].open(map, marker[n]);
}
});
}
var timeoutID;
window.onresize = function() {
if (timeoutID) clearTimeout(timeoutID);
timeoutID = setTimeout(function() {
map.panTo(center);
}, 200);
}
}
</script>

<?php require_once('./component/footer.php')?>
