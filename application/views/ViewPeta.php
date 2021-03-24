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

    <style type="text/css">
        .user {
            padding: 5px;
            margin-bottom: 5px;
            text-align: center;
        }
    </style>
</head>
<body>


<div class="container">

    <!--Example content-->
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-jsfiddle"></span> How to</div>
                <div class="panel-body">
                    <p class="lead">The menu is on the left.</p>
                    <pre>$(document).ready(function () {
                            $('#test').BootSideMenu({
                                side: "left"
                            });
                        });
                    </pre>
                    <p class="lead"> By default it remembers its last status and push the body while it slide. To
                        disable these features use the options:</p>
                    <pre>remember:false</pre>
                    <pre>pushBody:false</pre>

                    <!-- <p>Watch this changes in the <a href="2-simple-right.html">next example</a>.</p> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--Test -->
<div id="test" ></div>
<!--/Test -->

<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="<?= base_url()?>assets/plugins/jquery/jquery.js"></script>
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<script src="<?= base_url()?>assets/slider/js/BootSideMenu.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        w3.includeHTML(init);
    });

    function init() {
        $('#test').BootSideMenu({
            side: "left"
        });
    }
</script>
</body>
</html>

