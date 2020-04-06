<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Apple Nhật Việt</title> 

    <!-- Load font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <!-- Jquery -->
	<script src="libs/Jquery/Jquery.min.js"></script>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>


    <!-- css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/topnav.css">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/trangchu.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <?php require_once('components/commonPage.php')?>
<body>
    <?php addTopNav(); ?>

    <section>
		<?php 
            addHeader(); 
            addHome();
		?>
	</section>

    <div class="footer">
		<?php addFooter(); ?>
	</div>

    <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
	<i class="fa fa-arrow-down" id="goto-bot-page" onclick="gotoBot()"></i>
</body>
</html>
<?php
//require_once('Connection.php');
//
//$connection = new Connection();
//// $conn = mysqli_connect($host, $user, $pass);
//
//if ($connection->checkConnect()) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected to MySQL successfully! \n";
//
//$sql = 'Select * from `news`.`posts`';
//
//$result = $connection->getConnection()->query($sql);
//if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//        echo "title: " . $row["post_title"] . " - Body: " . $row["post_body"] . "<br>";
//    }
//}
//
//$connection->disconnect();
