
<?php 
    $recipient = "Kelly";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "1493 SW 2nd Ave, Portland, OR 97201";
    $upper_east_side_address = "20 East Bank Drive, Manhattan, NY 10021";
    $downtown_order = "30 Cups";
    $northwest_order = "500 Cups";
    $south_order = "1000 Cups";
    $upper_east_side_order = "40 Cups";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <link href='http://fonts.googleapis.com/css?family=Crushed|Codystar|Stalemate|Henny+Penny|Snowburst+One|Fontdiner+Swanky|Monofett|Slackey|Mountains+of+Christmas|Megrim|Chelsea+Market|Sancreek|Griffy' rel='stylesheet' type='text/css'>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all">
    <title>Order Form</title>
</head>

<body>
<div id="letter_head">
    <h1>The Brew Coffeehouse</h1>
</div>
<div class="form_letter">
    <p>Hi <?php echo $recipient; ?>, </p><br>
    <p>Just making my weekly order. Details are below.</p><br>
    <div .container>
    <table class="weekly_order">
        <tr class="title">
            <th class="order">Order</th>
            <th class="address">Address</th>
        </tr>    
        <tr>
            <td class="order"><?php echo $downtown_order; ?></td>
            <td class="address"><?php echo $downtown_address; ?></td>
        </tr>
        <tr>
            <td class="order"><?php echo $northwest_order; ?></td>
            <td class="address"><?php echo $northwest_address; ?></td>
        </tr>
        <tr>
            <td class="order"><?php echo $south_order; ?></td>
            <td class="address"><?php echo $south_address; ?></td> 
        </tr>
        <tr>
            <td class="order"><?php echo $upper_east_side_order; ?></td>
            <td class="address"><?php echo $upper_east_side_address; ?></td>
        </tr>

    </table>    
    <br><p>Thanks,</p>
    <p>Diane</p>
</div>
</body>
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</html>