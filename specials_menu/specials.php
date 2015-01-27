
<?php 
    $sundaySpecialFood = $_GET["sundaySpecialFood"];
    $sundaySpecialDrink = $_GET["sundaySpecialDrink"];
    $sundaySpecialCoffee = $_GET["sundaySpecialCoffee"];
    $mondaySpecialFood = $_GET["mondaySpecialFood"];
    $mondaySpecialDrink = $_GET["mondaySpecialDrink"];
    $mondaySpecialCoffee = $_GET["mondaySpecialCoffee"];
    $tuesdaySpecialFood = $_GET["tuesdaySpecialFood"];
    $tuesdaySpecialDrink = $_GET["tuesdaySpecialDrink"];
    $tuesdaySpecialCoffee = $_GET["tuesdaySpecialCoffee"];
    $wednesdaySpecialFood = $_GET["wednesdaySpecialFood"];
    $wednesdaySpecialDrink = $_GET["wednesdaySpecialDrink"];
    $wednesdaySpecialCoffee = $_GET["wednesdaySpecialCoffee"];
    $thursdaySpecialFood = $_GET["thursdaySpecialFood"];
    $thursdaySpecialDrink = $_GET["thursdaySpecialDrink"];
    $thursdaySpecialCoffee = $_GET["thursdaySpecialCoffee"];
    $fridaySpecialFood = $_GET["fridaySpecialFood"];
    $fridaySpecialDrink = $_GET["fridaySpecialDrink"];
    $fridaySpecialCoffee = $_GET["fridaySpecialCoffee"];
    $saturdaySpecialFood = $_GET["saturdaySpecialFood"];
    $saturdaySpecialDrink = $_GET["saturdaySpecialDrink"];
    $saturdaySpecialCoffee = $_GET["saturdaySpecialCoffee"];
?>

<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Crushed|Codystar|Stalemate|Henny+Penny|Snowburst+One|Fontdiner+Swanky|Monofett|Slackey|Mountains+of+Christmas|Megrim|Chelsea+Market|Sancreek|Griffy' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <title>Specials Menu</title>
</head>

<body>
  <div class="page-header">
    <div class="container">
      <h1>The Brew </h1>
      <h3>. . . a coffeehouse</h3>
    </div>
  </div>    




<section id="specials">
    <div class="container">
      <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="index.html">Home</a></li>
          <li role="presentation"><a href="menu.html">Menu</a></li>
          <li role="presentation"><a href="specials.php">Specials</a></li>
      </ul>
    </div>  

      <div class="container">  
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="sunday caption">
                <h3>Sunday</h3>
                <p> <?php echo $sundaySpecialFood; ?> <br> <?php echo $sundaySpecialDrink; ?> <br> <?php echo $sundaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="monday caption">
               <h3>Monday</h3>
                <p> <?php echo $mondaySpecialFood; ?> <br> <?php echo $mondaySpecialDrink; ?> <br> <?php echo $mondaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>

    <div class="clearfix visible-xs-block"></div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="tuesday caption">
               <h3>Tuesday</h3>
                <p> <?php echo $tuesdaySpecialFood; ?> <br> <?php echo $tuesdaySpecialDrink; ?> <br> <?php echo $tuesdaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="wednesday caption">
                <h3>Wednesday</h3>
                <p> <?php echo $wednesdaySpecialFood; ?> <br> <?php echo $wednesdaySpecialDrink; ?> <br> <?php echo $wednesdaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>


          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="thursday caption">
                <h3>Thursday</h3>
                <p> <?php echo $thursdaySpecialFood; ?> <br> <?php echo $thursdaySpecialDrink; ?> <br> <?php echo $thursdaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="friday caption">
               <h3>Friday</h3>
                <p> <?php echo $fridaySpecialFood; ?> <br> <?php echo $fridaySpecialDrink; ?> <br> <?php echo $fridaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="saturday caption">
               <h3>Saturday</h3>
                <p> <?php echo $saturdaySpecialFood; ?> <br> <?php echo $saturdaySpecialDrink; ?> <br> <?php echo $saturdaySpecialCoffee; ?> </p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail">
              <div class="enjoy caption">
                <h1>Enjoy!</h1>
              </div>
            </div>
          </div>
        </div>
      </div>  
</section>

</body>
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>

</html>