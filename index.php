<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roux Academy Conference 2013 -- Home</title>

  <!-- Bootstrap core CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body id="home">

  <section class="container">
    <div class="content row">
       <?php include "components/php/header.php"; ?>
       <?php include "components/php/snippet-carousel.php"; ?>
      <section class="main col-lg-8">
       <?php include "components/php/article-intro.php"; ?>
       <?php include "components/php/article-abouttheartists.php"; ?>
        <?php include "components/php/article-aboutthevenue.php"; ?>
      </section>
      <!-- main -->
      <section class="sidebar col-lg-4">
        <?php include "components/php/aside-register.php"; ?>
        <?php include "components/php/aside-lastyear.php"; ?>
        <?php include "components/php/aside-accordion.php"; ?>
      </section>
      <!-- sidebar -->
    </div>
    <!-- content -->
    <?php include "components/php/footer.php"; ?>
  </section>
  <!--container-->



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="components/js/myscript.js"></script>

</body>

</html>
