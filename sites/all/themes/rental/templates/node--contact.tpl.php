<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    var lat = 44.9833;
    var long = -93.2667;
    // Create an array of styles.
    var styles = [
            {
                stylers: [
                    { saturation: -85 }
                ]
            },{
                featureType: 'road',
                elementType: 'geometry',
                stylers: [
                    { hue: "#002bff" },
                    { visibility: 'simplified' }
                ]
            },{
                featureType: 'road',
                elementType: 'labels',
                stylers: [
                    { visibility: 'off' }
                ]
            }
        ];


    function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
            center: new google.maps.LatLng(lat, long),
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(map_canvas, map_options);
        minneapolis = new google.maps.LatLng(lat, long);

        marker = new google.maps.Marker({
            position: minneapolis,
            map: map,
            title: "KapaSoft Web Solutions!"
        });
        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        styledMap = new google.maps.StyledMapType(styles,
            {name: 'Styled Map'});
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="container wrapper center-content basic-page">
<div class="divider"> </div>

<div id="map span6">
    <h3>We are...</h3><br>
<!--    <div class="border">-->
        <div id="map_canvas" class="span10"></div>
<!--    </div>-->
</div>
<div class="clearfix"></div>
<div class="divider"> </div>
<section  class="section section-padded ">
    <script type="text/javascript" src="http://kapasoft.com/repos/backbone/contact/main/contact.min.js"></script>
    <div class="container-fluid contact-us-section">
        <h3>Conctact us...</h3><br>
        <div class="row-fluid">
            <div class="span8" id="app-contact" >
            </div>
            <div class="span4 contact-details">
                <ul class="icons">
                    <li>
                        <h4>
                            <i class="icon-map-marker"></i>
                            Address
                        </h4>
                        <p>
                            Minneapolis, MN
                            <br>
                            US
                        </p>
                    </li>
                    <br>
                    <li>
                        <h4>
                            <i class="icon-pencil"></i>
                            Contact details
                        </h4>
                        <p>
                            Phone: (201)-903-BACK(2225)
                            <br>
                            Email: contact@wantmybucksback.com
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="divider2"> </div>
</div>

