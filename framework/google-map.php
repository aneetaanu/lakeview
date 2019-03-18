<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header('Content-type: application/x-javascript');
global $theme_option; 
?>

// Google maps pin tooltip  
    var markers = [
        {
            "lat": '<?php echo esc_attr($theme_option['map_lat']); ?>',
           "lng": '<?php echo esc_attr($theme_option['map_long']); ?>',
          
            "description": '<?php echo esc_attr($theme_option['map_title']); ?> <br/><a href="<?php echo esc_url($theme_option['map_link']); ?>" style="color:#ef3c3c; font-weight:800;"><?php echo esc_attr($theme_option['map_getit']); ?></a>'
        }
    ];
    
    
    // Google maps main api
    window.onload = function () {
        var mapOptions = {
            center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
            zoom: 16,
            flat: true,
            scrollwheel:false,
            panControl:false,
            zoomControl:true,
            streetViewControl: false,
            mapTypeControl: false,
        
    // Google maps style    
            styles: [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"},{"gamma":"1.82"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"gamma":"1.96"},{"lightness":"-9"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"lightness":"25"},{"gamma":"1.00"},{"saturation":"-100"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#ffaa00"},{"saturation":"-43"},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"},{"hue":"#ffaa00"},{"saturation":"-70"}]},{"featureType":"road.highway.controlled_access","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":"-100"},{"lightness":"40"},{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"gamma":"0.80"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"off"}]}],
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
            var infoWindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById("map-placeholder"), mapOptions);
            for (i = 0; i < markers.length; i++) {
            var data = markers[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: '<?php echo esc_url($theme_option['map_image']['url']) ?>',
            title: data.title
            });
            (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent(data.description);
                infoWindow.open(map, marker);
              });
            })(marker, data);
        }
    };