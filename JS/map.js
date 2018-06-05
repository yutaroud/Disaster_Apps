//<![CDATA[

var map;
var marker = [];
var data = [
    {
        name: '浅草駅',
        lat: 35.710894,
        lng: 139.797794
    }, {
        name: '日本橋',
        lat: 35.682663,
        lng: 139.774841
    },{
        name: 'スカイツリー',
        lat: 35.710359,
        lng: 139.810733
    },  {
        name: '羽田空港',
        lat: 35.550250,
        lng: 139.786438
    }
];
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 35.600981, lng: 139.811556} ,
        zoom: 10
    });
    for (var i = 0; i < data.length; i++) {
        markerLatLng = {lat: data[i]['lat'], lng: data[i]['lng']};
        marker[i] = new google.maps.Marker({
            position: markerLatLng,
            map: map
        });
    }
}//]]>