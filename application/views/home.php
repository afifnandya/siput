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
    .left-menu2{
        width: 16.66666667%;
        z-index: 10000;
        position: absolute;
        left: -100%;
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
   <?php var_dump($map_sekolah)?>
    <!-- nav -->
    <?php $this->load->view('nav')?>
    <!-- end nav -->
    <div class="container-fluid">
       <!--left-menu-->
            <div class="left-menu2">
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
                <p class="menu-item"><i class="fa fa-building-o"></i>Sekolah</p>
            </div>
        <div class="row row-wrap">
            <!--content-->
            <div class="col-xs-12 content2">
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
    <?php foreach($map_sekolah as $sekolah){ ?>
    {
    "type": "Feature",
    "geometry": {
      "type": "Point",
      "coordinates": [<?php echo $sekolah['longitude']?>, <?php echo $sekolah['latitude']?>]
    },
    "properties": {
      "title": "<?php echo $sekolah['Nama_sekolah']?>",
      "description": "<?php echo $sekolah['Nama_sekolah']?>",
      "marker-color": "<?php echo $sekolah['marker_color']?>",
      "marker-size": "large",
      "marker-symbol": "college",
      "image": "assets/img/logo-smp/50x50/<?php echo $sekolah['Logo']?>",
      "id" : "<?php echo $sekolah['Id_sekolah']?>",
      "skor": "<?php echo $sekolah['Skor_total']?>",
    }
  },
    <?php } ?>
];
    
var map = L.mapbox.map('map', 'afifnandya.07ji72gf').setView([-7.977, 112.634], 18);
//map.legendControl.addLegend(document.getElementById('legend-ui').innerHTML);
var myLayer = L.mapbox.featureLayer().addTo(map);  
var filters = document.getElementById('filters');
        
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;
    var popupContent =  '<img src="<?php echo base_url() ?>' + feature.properties.image + '" class="img-popup">'+
                        '<ul class="map-popup"><li class="li-title">'+feature.properties.title+'</li><li>Skor Kualitas :'+ feature.properties.skor+'</li><li><a class="popup" href="<?php echo site_url('sekolah')."/" ?>' + feature.properties.id + '">'+'Detail</a></li></ul>';
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
//        if($('#toggle-nav').hasClass('toggle-nav-aktif')){
//                $('.left-menu2').css('width','0%');
//                $('.content2').css('width','100%');
//            }
        $('#toggle-nav').click(function(e){
            e.preventDefault();
            if($('#toggle-nav').hasClass('toggle-nav-aktif')){
//                $('.left-menu2').animate({width:'16.66666667%'});
                $('.left-menu2').animate({left:'0'},{ duration: "slow",easing: "swing" });
                $('#toggle-nav').removeClass('toggle-nav-aktif');
            }
            else{
//                $('.left-menu2').animate({width:'0%'});
                $('.left-menu2').animate({left:'-100%'},{ duration: "slow",easing: "swing" });
                $('#toggle-nav').addClass('toggle-nav-aktif');   
            }
});
    </script>
</body>

</html>