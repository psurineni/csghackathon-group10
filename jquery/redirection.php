<?php
ob_start();

session_start();

require('connect.php');

if (isset($_POST['name'])){

    $name = $_POST['name'];

    $query = "SELECT * FROM `meetings` WHERE name='$name'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    $count = mysqli_num_rows($result);

    if ($count == 1){

        $_SESSION['name'] = $name;

    }else{

        $fmsg = "Invalid name.";

    }

}
?>
<html>
<head>
<script src="dist/sweetalert.min.js"></script>
 <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
</html>
<?php

if (isset($_SESSION['name'])){

    $name = $_SESSION['name'];

    //header("Location: multibot_gui_with_chatlog.php");
		header("Location: StartBot.php");


}else {

echo "<script>

alert('cant find you on database');	

	</script>";

} 
ob_end_flush(); 
?>