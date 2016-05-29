<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/flaticon.css">
    <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
</head>
<style>
    html{
        height: 100%;
    }
    .map-wrap{
        position: relative
    }
    #map{ 
        position:absolute; 
        top:0; bottom:0; 
        width:100%;
        height: 100vh;
    }
    ul.map-popup{
        position: relative;
        left: 10px;
        list-style: none;
        padding: 0px;
        display: inline-block;
        margin-bottom: 0;
    }
    ul.map-popup li>a{
        text-align: center;
    }
    ul.map-popup a{
    }
    li.li-title{
        font-size: 12px;
        color: #ff938a;
        border-bottom: 1px solid #d5d5d5;
    }
    img.img-popup{
        float: left;
    }
    .filter-ui {
  background:#fff;
  position:absolute;
  top:10px;
  right:10px;
  z-index:100;
  padding:10px;
  border-radius:3px;
  }
    .legend-ui{
    background:#fff;
    position:absolute;
    bottom:10px;
  right:10px;
  z-index:100;
  padding:10px;
  border-radius:3px;
    }
</style>
<body>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 no-padding left-nav-wrap">
                    <div class="left-nav">
                        <p>SIPUT
                        <a href="<?php echo base_url() ?>javascript:" id="afif" class="afif-aktif"><i class="fa fa-bars"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-xs-7 no-padding">
                    <div class="center-nav">
                        <div class="search-nav">
                            <input type="text" placeholder="search">
                        </div>
                    </div>
                </div>
                <a href="" data-target="#" data-toggle="dropdown">
                <div class="col-xs-3 no-padding dropdown fif">
                    <div class="right-nav">
                        <ul class="">
                           <li class="user-photo">
                                <img src="<?php echo base_url() ?>/assets/img/logo-dinas-pendidikan.png" height="40" width="40">
                            </li>
                            <li class="user-name" data-toggle="dropdown">
                                Dinas Pendidikan Kota Malang<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row row-wrap">
            <!--left-menu-->
            <div class="col-xs-2 left-menu2">
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
            </div>
            <!--content-->
            <div class="col-xs-10 content2">
                <nav id='filters' class='filter-ui'></nav>
                <div class="legend-ui">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quod ex unde mollitia recusandae. Sunt tempore officiis, nulla doloribus incidunt consequuntur nam ab tenetur dignissimos eos rerum soluta animi porro.
                </div>
                <div class="map-wrap">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-xs-12 footer">
                <div class="footer-inner">
                   <span>2016&copy;SIPUT by</span>
                   <a href="<?php echo base_url() ?>">TechnoCode</a>
                    <img src="<?php echo base_url() ?>assets/img/logo50.png" height="30" width="30">
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mapbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mpsi.map.js"></script>
    <script>
L.mapbox.accessToken = 'pk.eyJ1IjoiYWZpZm5hbmR5YSIsImEiOiJjaW9tbTNzNGIwMDRodTJseXJjNzVzaHEzIn0.gwFIGj5rUbuTinqSnRvWDA';
var geojson = [
{
    "type": "Feature",
    "geometry": {
      "type": "Point",
      "coordinates": [112.633719, -7.977854]
    },
    "properties": {
      "title": "SMPN 1 Malang",
      "description": "1714 14th St NW, Washington DC",
      "marker-color": "#48cfad",
      "marker-size": "large",
      "marker-symbol": "college",
      "image": "assets/img/logo-smp/50x50/50x50_smp1.png",
    }
  },
  {
    "type": "Feature",
    "geometry": {
      "type": "Point",
      "coordinates": [112.634835,-7.976703]
    },
    "properties": {
      "title": "Mapbox SFaaaaaaaa",
      "description": "155 9th St, San Francisco",
      "marker-color": "#fc4353",
      "marker-size": "large",
      "marker-symbol": "college",
      "marker-color": "#ed5565",
      "image": "assets/img/logo-smp/50x50/50x50_smp1.png",
    }
  }
];
    
var map = L.mapbox.map('map', 'afifnandya.07ji72gf').setView([-7.977, 112.634], 18);
//map.legendControl.addLegend(document.getElementById('legend-ui').innerHTML);
var myLayer = L.mapbox.featureLayer().addTo(map);  
var filters = document.getElementById('filters');
        
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;
    var popupContent =  '<img src="<?php echo base_url() ?>' + feature.properties.image + '" class="img-popup">'+
                        '<ul class="map-popup"><li class="li-title">SMPN 1 </li><li>Skor Kualitas : 88</li><li><a target="_blank" class="popup" href="<?php echo base_url() ?>' + feature.properties.title + '">'+'Detail</a></li></ul>';
    marker.bindPopup(popupContent,{
        closeButton: true,
        minWidth: 170
    });
}); 
myLayer.setGeoJSON(geojson);
myLayer.on('ready', function() {
  var typesObj = {}, types = [];
  var features = map.featureLayer.getGeoJSON().features;
  for (var i = 0; i < features.length; i++) {
    typesObj[features[i].properties['marker-symbol']] = true;
  }
  for (var k in typesObj) types.push(k);

  var checkboxes = [];
  // Create a filter interface.
  for (var i = 0; i < types.length; i++) {
    // Create an an input checkbox and label inside.
    var item = filters.appendChild(document.createElement('div'));
    var checkbox = item.appendChild(document.createElement('input'));
    var label = item.appendChild(document.createElement('label'));
    checkbox.type = 'checkbox';
    checkbox.id = types[i];
    checkbox.checked = true;
    // create a label to the right of the checkbox with explanatory text
    label.innerHTML = types[i];
    label.setAttribute('for', types[i]);
    // Whenever a person clicks on this checkbox, call the update().
    checkbox.addEventListener('change', update);
    checkboxes.push(checkbox);
  }

  // This function is called whenever someone clicks on a checkbox and changes
  // the selection of markers to be displayed.
  function update() {
    var enabled = {};
    // Run through each checkbox and record whether it is checked. If it is,
    // add it to the object of types to display, otherwise do not.
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) enabled[checkboxes[i].id] = true;
    }
    myLayer.setFilter(function(feature) {
      // If this symbol is in the list, return true. if not, return false.
      // The 'in' operator in javascript does exactly that: given a string
      // or number, it says if that is in a object.
      // 2 in { 2: true } // true
      // 2 in { } // false
      return (feature.properties['marker-symbol'] in enabled);
    });
  }
});
myLayer.on('mouseover', function(e) {
    e.layer.openPopup();
});
//myLayer.on('mouseout', function(e) {
//    e.layer.closePopup();
//}); 
</script>
    <script>
        $('#afif').click(function(e){
            e.preventDefault();
            if($('#afif').hasClass('afif-aktif')){
                $('.left-nav-wrap').animate({width:'10%'});
                $('.left-menu').animate({width:'10%'});
                $('.content').animate({width:'90%'});
                $('#afif').removeClass('afif-aktif');
            }
            else{
                $('.left-nav-wrap').animate({width:'16.66666667%'});
                $('.left-menu').animate({width:'16.66666667%'});
    $('.content').animate({width:'83.33333333%'});
    $('#afif').addClass('afif-aktif');   
            }
});
    </script>
</body>

</html>