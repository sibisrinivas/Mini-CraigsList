<?php
//Preparing the database connection
$user = "lamp"; 
$password = "1"; 
$host = "localhost"; 
$dbase = "lamp_final_project"; 
$table = "posts"; 
$sub_category= $_POST['subCategory'];
$location= $_POST['loc'];
$title= $_POST['title'];
$price= $_POST['price'];
$description= $_POST['description'];
$time=date_create();
$email= $_POST['email'];
$image= "";
$image2= "";
$image3= "";
$image4= "";
$timestamp=date_format($time, 'Y-m-d H:i:s');
$email= $_POST['email'];
$sub_category_id=0;
$location_id=0;
//Sub Category Classification
if($sub_category == "apts")
{
	$sub_category_id=1;
}
elseif($sub_category == "individual")
{
	$sub_category_id=2;
}
elseif($sub_category == "Condominium")
{
	$sub_category_id=3;
}
elseif($sub_category == "Mobiles")
{
	$sub_category_id=4;
}
elseif($sub_category == "Camera")
{
	$sub_category_id=5;
}
elseif($sub_category == "Laptops")
{
	$sub_category_id=6;
}
elseif($sub_category == "Car")
{
	$sub_category_id=7;
}
elseif($sub_category == "Bike")
{
	$sub_category_id=8;
}
elseif($sub_category == "PrivateJet")
{
	$sub_category_id=9;
}
//Location Classification
if($location == "San Francisco")
{
	$location_id=1;
}
elseif($location == "Sunnyvale")
{
	$location_id=2;
}
elseif($location == "Santa Clara")
{
	$location_id=3;
}
elseif($location == "Chennai")
{
	$location_id=4;
}
elseif($location == "Coimbatore")
{
	$location_id=5;
}
elseif($location == "Bangalore")
{
	$location_id=6;
}
elseif($location == "Sydney")
{
	$location_id=7;
}
elseif($location == "Albury")
{
	$location_id=8;
}
elseif($location == "Grafton")
{
	$location_id=9;
}
//Inserting values into Database
$dbc= mysqli_connect($host,$user,$password, $dbase) 
or die("Unable to select database");
$query= "INSERT INTO $table  ". "VALUES ('','$title',$price,'$description','$email','1','$timestamp','$image','$image2','$image3','$image4',$sub_category_id,$location_id)";
echo $query;
if(mysqli_query ($dbc, $query) or die ("Error querying database"))
{
	echo "<script type='text/javascript'>", 
				"window.location.href='index.php' ;",
			 "</script>";
}

mysqli_close($dbc);

?>