<!DOCTYPE html>
<html lang="en">
<head>
    <title>Taurus</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/ico" href="http://aqvatarius.com/themes/taurus_v12/html/favicon.ico"/>

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />

    <script type='text/javascript' src='<?php echo asset("js/plugins/jquery/jquery.min.js") ?>'></script>
    <script type='text/javascript' src='<?php echo asset("js/plugins/jquery/jquery-ui.min.js") ?>'></script>
    <script type='text/javascript' src='<?php echo asset("js/plugins/jquery/jquery-migrate.min.js") ?>'></script>
    <script type='text/javascript' src='<?php echo asset("js/plugins/jquery/globalize.js") ?>'></script>
    <script type='text/javascript' src='<?php echo asset("js/plugins/bootstrap/bootstrap.min.js") ?>'></script>

    <script type='text/javascript' src='<?php echo asset("js/plugins/uniform/jquery.uniform.min.js") ?>'></script>

    <script type='text/javascript' src='<?php echo asset("js/plugins.js") ?>'></script>
    <script type='text/javascript' src='<?php echo asset("js/actions.js") ?>'></script>
    <script type='text/javascript' src='<?php echo asset("js/settings.js") ?>'></script>
</head>
<body class="bg-default bg-light">

<div class="container">

    <div class="block-error">
        <div class="row">
            <div class="col-md-12">
                <div class="error-logo"><img src="<?php echo asset("img/logob.png") ?>"/></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="error-code">
                    ERROR: 404 Not found
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="error-text">Oh, the page you'r looking for can't be found</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-default btn-clean btn-block" onClick="document.location.href = 'index.html';">Back to dashboard</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-default btn-clean btn-block" onClick="history.back();">Previous page</button>
            </div>
        </div>
    </div>

</div>

</body>
</html>
