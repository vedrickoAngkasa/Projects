
$(document).ready(function () {

    initMap();

    
});




function initMap() {
    var marker = null;
    var myLatlng = { lat: -34.397, lng: 150.644 };

    const latXML = [-33, -36, -37];
    const lngXML = [144, 146, 149];

    const images = [ "Images/1.jpg" , "Images/2.png", "Images/3.jpg"    ]

      


    var longWeb = document.getElementById("long");
    var latWeb = document.getElementById("lat");


    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        zoomControl: true,

        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
        },

        streetViewControl: true,

        streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
        },

        mapTypeControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        },

    });


    google.maps.event.addListener(map, 'click', function (event) {


        marker = new google.maps.Marker({
            position: event.latLng,

        });

        longWeb.value = event.latLng.lng();
        latWeb.value = event.latLng.lat();

        latXMl.push(event.latLng.lat());
        lngXMl.push(event.latLng.lng());
        marker.setMap(map);


    });




    for (var i = 0; i < latXML.length; i++) {

        new google.maps.Marker({
            position: { lat: latXML[i], lng: lngXML[i] },
            map,
            label: {
                color: 'white',
                fontWeight: 'bold',
                text: 'Hi there',
            },
            icon: {
                labelOrigin: new google.maps.Point(40, 80),
                url: images[i],
                scaledSize: new google.maps.Size(70, 70),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(11, 40),
            }
        });

    }


}