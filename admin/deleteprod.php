<?php session_start();
include_once("../includes/dbconn.php");
include_once("adminfunctions.php");

if(isadminloggedin()){
    //do nothing stay here
}
else{
    header("location:login.php");
}
$seller=$_SESSION['farmercart_admin_id'];
$prodid="";
if (isset($_GET['prodid'])) {
	$prodid=$_GET['prodid'];
}

$sql="DELETE FROM product WHERE id=$prodid";
$result=mysqlexec($sql);
if ($result) {
	echo "Product Deleted Successfully";
}else{
	echo "Product Deletion failed";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product- Farmercart</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

</head>
<body>
<a href="viewproducts.php">
<button type="button" class="btn btn-success">Back To view Products</button>
</a>
</body>
</html>