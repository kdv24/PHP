
<?php 
    $date = $_GET["date"];
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
    <title>Specials Record</title>
</head>

<body>
  <div class="page-header">
    <div class="container">
      <h1>The Brew </h1>
      <h3>. . . a coffeehouse</h3>
    </div>
  </div>    

  <div class="letter">
    <h2 class="small-header">Weekly Specials</h2>
    <h3>Specials for the week of <?php echo $date; ?> were: <br></h3>
      <h4>Sunday</h4>
        <p><?php echo $sundaySpecialFood; ?>, <?php echo $sundaySpecialDrink; ?>, <?php echo $sundaySpecialCoffee; ?></p>
      <h4>Monday</h4>
        <p><?php echo $mondaySpecialFood; ?>, <?php echo $mondaySpecialDrink; ?>, <?php echo $mondaySpecialCoffee; ?></p>
      <h4>Tuesday</h4>
        <p><?php echo $tuesdaySpecialFood; ?>, <?php echo $tuesdaySpecialDrink; ?>, <?php echo $tuesdaySpecialCoffee; ?></p>
      <h4>Wednesday</h4>
        <p><?php echo $wednesdaySpecialFood; ?>, <?php echo $wednesdaySpecialDrink; ?>, <?php echo $wednesdaySpecialCoffee; ?></p>
      <h4>Thursday</h4>
        <p><?php echo $thursdaySpecialFood; ?>,<?php echo $thursdaySpecialDrink; ?>, <?php echo $thursdaySpecialCoffee; ?></p>
      <h4>Friday</h4>
        <p><?php echo $fridaySpecialFood; ?>, <?php echo $fridaySpecialDrink; ?>, <?php echo $fridaySpecialCoffee; ?></p>        
      <h4>Saturday</h4>
        <p><?php echo $saturdaySpecialFood; ?>, <?php echo $saturdaySpecialDrink; ?>, <?php echo $saturdaySpecialCoffee; ?></p>  
  </div> 

</body>
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>

</html>