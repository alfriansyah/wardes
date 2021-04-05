<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple menu left</title>

    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap/css/bootsrap337.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/slider/css/BootSideMenu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/leaflet/leaflet.css">

    <style type="text/css">
        .user {
            padding: 5px;
            margin-bottom: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<br><br><br><br><br><br>


<div class="container ">
    <div class="row">
        <div class="col-md-6">
            data
        </div>
        <div class="col-md-6" id="mapid" style="height: 500px;width:500px;"></div>
    </div>
</div>

    


<!--Test -->
<div id="test" ></div>
<!--/Test -->

<script src="<?= base_url()?>assets/plugins/bootstrap/js/w3.js"></script>
<script src="<?= base_url()?>assets/plugins/jquery/jquery.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url()?>assets/slider/js/BootSideMenu.js"></script>
<script src="<?= base_url()?>assets/leaflet/leaflet.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        w3.includeHTML(init);
    });

    function init() {
        $('#test').BootSideMenu({
            side: "left"
        });
    }

    var map = L.map('mapid').setView([51.505, -0.09], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();
    
    setInterval(function(){
    map.setZoom(0);
    setTimeout(function(){
        map.setZoom(1);
    }, 2000);
}, 400000);
</script>
</body>
</html>

