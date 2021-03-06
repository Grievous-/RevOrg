<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vitality - Multipurpose Bootstrap 4 One Page Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this theme -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="device-mockups/device-mockups.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this theme -->
    <!-- Uncomment the color scheme you want to use! Red is chosen by default! -->
    <link href="css/vitality-red.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/vitality-aqua.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-blue.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-green.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-orange.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-pink.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-purple.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-tan.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-turquoise.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/vitality-yellow.css" rel="stylesheet" type="text/css"> -->

    <!-- build:remove:dist -->
    <!-- Style Switcher CSS - Demo Purposes Only! -->
    <link id="changeable-colors" rel="stylesheet" href="css/vitality-tan.css">
    <link href="demo/style-switcher.css" rel="stylesheet">
    <!-- /build -->
    <!-- favicon -->
    <link rel="icon" href="img_rev_org/main.jpg" type="image/png" />

  </head>

  <body id="page-top">
    @yield('content')

    @stack('_js_stack')
  </body>

</html>
