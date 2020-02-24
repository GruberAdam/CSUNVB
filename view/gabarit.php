<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="assets/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


</head>
<body>
<?php
echo "SESSION : ". @$_SESSION['test'] .'<br>';
echo "type :".@$_POST['register-account_type']. '<br>';
echo "email : ".@$_POST['register-email']. '<br>';
echo "password :". @$_POST['register-password'];
?>

<div class="container">

    <header>
        <div class="row banner">
            <img class="col-2" src="/assets/images/logo.png">
            <a href="index.php" class="col-10 text-center mt-5 text-decoration-none"><h1>CSU-NVB</h1></a>

            <!-- Changes action if connected -->
            <a href="
            <?php if (isset($_SESSION['mail'])) : ?>
            ?action=logout
            <?php else : ?>
            ?action=login
            <?php endif; ?>
            " class="btn btn-primary m-1 pull-right">

                <!-- Write Logout if connected -->
                <?php if (isset($_SESSION['mail'])) : ?>
                    Logout
                <?php else: ?>
                    Login
                <?php endif; ?>
            </a>
        </div>
    </header>

    <div>
        <?= $content; ?>
    </div>

</body>
</html>
