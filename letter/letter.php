<?php 
	$friend_name = $_GET["recipient"];
	$friends_so = $_GET["so"];
	$friends_pet = "Edna";
    $signed = $_GET["signed"];
?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/styles.css" rel="stylesheet" type="text/css" href="">
    <title>Greetings!</title>
</head>
<body>
    <h1>Greetings From Afar</h1>
    <p>Dear <?php echo $friend_name; ?>,</p>
    <p>How are you? I hope that you are having a nice weekend with <?php echo $friends_so; ?>. I'm vacationing in the mountains of Tibet while I learn programming! </p>
    <p><?php echo $friend_name; ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
    <p>Looking forward to seeing you soon and getting to say hi to <?php echo $friends_pet; ?>. I'll bring you back a souvenir. </p>
    <p>Cheers,</p>
    <p> <?php echo $signed; ?></p>
</body>
</html>