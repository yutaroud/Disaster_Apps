function initMap() {
    var data = [
        {lat:35.710894,lng:139.797794,name:'浅草'}
    ];
    data.push({lat:35.682663,lng:139.774841,name:'日本橋'});

    var center = {lat: 35.550250,lng:139.786438};
    var openedInfowindow = '';
    var mapOptions = {
        zoom: 10,
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
        var content = '<div class="info"><h1>' + data[i].name + '</h1><p>'+ '</p>' + '<a href=' + '"map.php' + '">詳細</a>' + '</div>';
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