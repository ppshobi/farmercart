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
$catid="";
if (isset($_GET['catid'])) {
	$catid=$_GET['catid'];
}

$sql="DELETE FROM category WHERE id=$catid";
$result=mysqlexec($sql);
if ($result) {
	echo "CategoryDeleted Successfully";
}else{
	echo "CategoryDeletion failed";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Category Farmercart</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

</head>
<body>
<a href="viewcategory.php">
<button type="button" class="btn btn-success">Back To view Category</button>
</a>
</body>
</html>