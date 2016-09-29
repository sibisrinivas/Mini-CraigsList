<!-- View & Controller for the main browse page -->
<?php ini_set('display_errors',0); ?>
<html>
	<head>
		<title>Craigslist</title>
		<style type="text/css">
			h2 {
				text-align:center;
				position: relative;
				left:-60px;
			}
			td {
				width:100px;
				vertical-align: none;
			}
			a {
				text-decoration: none;
			}
			#container {
				padding-top: 50px;
			}
			#addpost {
				text-align: center;
				position: relative;
				left:-100px;
			}
			#logout {
				float:right;
				position: relative;
				left: -600px;
				top:-19px;
			}
			#category-div {
				width:300px;
				float:left;
				position: relative;
				right:-50px;
			}
			#sub-category-div {
				width:300px;
				float:left;
				position: relative;
				right:-20px;
			}
			#location-div {
				width:300px;
				float:right;
				position:relative;
				left: 35px;
			}
			#region-div {
				width:300px;
				float:right;
				position:relative;
				left:-500px;
			}
			.tab {
				padding-top: 20px;				
				position: relative;
				top:50px;
				right: -40px;
				width: 900px;
			}
			.tab-header {
				width:100px;
			}
			.desc {
				width:300px;
			}
			.email {
				width:200px;
			}
			.pic {
				width:50px;
			}			
			#btn {
				position:relative;
				top:50px;
				right:250px;
			}
			#uid {
				font-style: italic;
				position: relative;
				top:15px;

			}
		</style>
	</head>
	<?php if (isset($_COOKIE['uid']) && $_COOKIE['uid']) { ?>
	<body>
		<h2>Welcome to craigslist</h2>
		<span id="uid">Hi <?php echo $_COOKIE['uid']; ?> </span>
		<div id="addpost"><a href="addnewpost.php"> Add a New Post</a></div>	
		<div id="logout"><a href ="logout.php"> Log out</a></div> 
		<form action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" method="post">
		
		<div id="container">
		Browse Post By:<br/><br/>
		<div id="category-div">
			<label>Category :</label>
			<!--Displaying all the Categories from the database-->
			<select name='category' id='category' >
			<option value="0">Select</option>
				<?php

mysql_connect('localhost', 'lamp', '1');
mysql_select_db('lamp_final_project');

$sql = "SELECT CATEGORYNAME FROM CATEGORY";
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['CATEGORYNAME'] . "'>" . $row['CATEGORYNAME'] . "</option>";
}
echo "</select>";

?>
		</div>
		<div id="sub-category-div">
		
			<label>Sub Category :</label>
			<select name='sub-category' id='sub-category' >
			<option value="0">Select</option>
			<!--Displaying all the Sub-Categories from the database-->
				<?php

mysql_connect('localhost', 'lamp', '1');
mysql_select_db('lamp_final_project');

$sql = "SELECT SUBCATEGORYNAME FROM SUBCATEGORY";
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['SUBCATEGORYNAME'] . "'>" . $row['SUBCATEGORYNAME'] . "</option>";
}
echo "</select>";

?>
		</div>

		<div id="region-div">
			<label>Region:</label> 
			
			<select name='region' id="region-id">
			<option value="0">Select</option>
			<!--Displaying all the Regions from the database-->
<?php

mysql_connect('localhost', 'lamp', '1');
mysql_select_db('lamp_final_project');

$sql = "SELECT REGIONNAME FROM REGION";
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['REGIONNAME'] . "'>" . $row['REGIONNAME'] . "</option>";
}
echo "</select>";

?>		
		</div>	

		<div id="location-div">
			<label>Location:</label> 
			
			<select name='loc' id="location">
			<option value="0">Select</option>
			<!--Displaying all the location from the database-->
<?php

mysql_connect('localhost', 'lamp', '1');
mysql_select_db('lamp_final_project');

$sql = "SELECT LOCATIONNAME FROM LOCATION";
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['LOCATIONNAME'] . "'>" . $row['LOCATIONNAME'] . "</option>";
}
echo "</select>";

?>			
		</div>

		<input id="btn" type="submit" value="Browse"></input>
		</div>
		</form>
	<table class="tab">
			<thead/>
			<tbody class="tab-body">
			<tr class="tab-header">
			
							<td>Title</td>
								<td>Price in $</td>
								<td class='desc'>Desciption</td>
								<td class='email'>Email</td>
								<td class='category'>Category</td>
								<td class='subcategory'>Sub-category</td>
								<td class='loc'>Location</td>
								<td class='region'>Region</td>
							<tr>
			<?php
						mysql_connect("localhost", "lamp", "1") or die(mysql_error());   
						mysql_select_db("lamp_final_project") or die(mysql_error()); 
                        $location = $_POST['loc'];	
						$category = $_POST['category'];
 						$region = $_POST['region'];
						$subcategory=$_POST['sub-category'];
						switch($location)
						{
							case "San Francisco":
							$location=1 ;
							break;
							case "Sunnyvale":
							$location= 2;
							break;
							case "Santa Clara":
							$location=3 ;
							break;
							case "Chennai":
							$location= 4;
							break;
							case "Coimbatore":
							$location= 5;
							break;
							case "Bangalore":
							$location= 6;
							break;
							case "Sydney":
							$location= 7;
							break;
							case "Albury":
							$location= 8;
							break;
							case "Grafton":
							$location= 9;
							break;
						}
						switch ($category) {
 							case "Housing":
 								$category = 1;
 								break;
 							case "Electronics":
 								$category = 2;
 								break;
 							case "MotoVehicles":
 								$category = 3;
 								break;
 							default:
 								$category = 0;
 								break;
						}
						switch ($subcategory) {
 							case "apts":
							
 								$subcategory = 1;
								
 								break;
 							case "individual":
 								$subcategory = 2;
 								break;
 							case "Condominium":
 								$subcategory = 3;
 								break;
							case "Mobiles":
 								$subcategory = 4;
 								break;
							case "Camera":
 								$subcategory = 5;
 								break;
							case "Laptops":
 								$subcategory = 6;
 								break;
 							case "Car":
 								$subcategory = 7;
 								break;
 							case "Bike":
 								$subcategory = 8;
 								break;
							case "PrivateJet":
 								$subcategory = 9;
 								break;
 							default:
 								$subcategory = 0;
 								break;
						}
						switch ($region) {
 							case "United States":
 								$region = 1;
								$regionName="USA";
 								break;
 							case "India":
 								$region = 2;
 								break;
 							case "Australia":
 								$region = 3;
 								break;
 							default:
 								$region = 0;
 								break;
 						}
						//if All Post are to display - By Default/ is user selects select in all the selection list
			            if(!$region && !$category && !$subcategory &&!$location)
						{
							$query = mysql_query("SELECT TITLE, PRICE, DESCRIPTION,EMAIL,SUBCATEGORY_ID,LOCATION_ID FROM POSTS") or die(mysql_error());
							$numrows = mysql_num_rows($query);
							while ($row = mysql_fetch_array($query)) {
								switch($row["LOCATION_ID"])
								{
								case 1:
								$locationName="SanFrancisco";
								$regionName="United States";
								break;
								case 2:
								$locationName="Sunnyvale";
								$regionName="United States";
								break;
								case 3:
								$locationName="SantaClara";
								$regionName="United States";
								break;
								case 4:
								$locationName="Chennai";
								$regionName="India";
								break;
								case 5:
								$locationName="Coimbatore";
								$regionName="India";
								break;
								case 6:
								$locationName="Bangalore";
								$regionName="India";
								break;
								case 7:
								$locationName="Sydney";
								$regionName="Australia";
								break;
								case 8:
								$locationName="Albury";
								$regionName="Australia";
								break;
								case 9:
								$locationName="Grafton";
								$regionName="Australia";
								break;
								}	
							switch ($row["SUBCATEGORY_ID"]) {
 							case 1:
							
							    $categoryName = "Housing";
 								$subcategoryName = "Apartment";
								break;
							
 							case 2:
 								$subcategoryName = "Individual";
								$categoryName = "Housing";
 								break;
 							case 3:
 								$subcategoryName = "Condominium";
								$categoryName = "Housing";
 								break;
							case 4:
 								$subcategoryName = "Mobiles";
								$categoryName = "Electronics";
 								break;
							case 5:
 								$subcategoryName = "Camera";
								$categoryName = "Electronics";
 								break;
							case 6:
 								$subcategoryName = "Laptops";
								$categoryName = "Electronics";
 								break;
 							case 7:
 								$subcategoryName = "Car";
								$categoryName = "MotorVehicles";
 								break;
 							case 8:
 								$subcategoryName = "Bike";
								$categoryName = "MotorVehicles";
 								break;
							case 9:
 								$subcategoryName = "PrivateJet";
								$categoryName = "MotorVehicles";
 								break;
 						}
						
								
						echo "<tr><td>".$row["TITLE"]."</td><td>".$row["PRICE"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["EMAIL"]."</td><td>".$categoryName."</td><td>".$subcategoryName."</td><td>".$locationName."</td><td>".$regionName."</td></tr>";
								
							}
							
							
						}
					
						if($category)
						{
							
							if($category == 1)
							{
								
								$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL,
													P.LOCATION_ID,P.SUBCATEGORY_ID, C.CATEGORYNAME FROM POSTS AS P LEFT JOIN CATEGORY AS C 
													on P.SUBCATEGORY_ID = C.Category_ID 
													WHERE P.SUBCATEGORY_ID <=3") or die(mysql_error());
							}
							if($category ==2)
							{
								$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL,
													P.LOCATION_ID,P.SUBCATEGORY_ID, C.CATEGORYNAME FROM POSTS AS P LEFT JOIN CATEGORY AS C 
													on P.SUBCATEGORY_ID = C.Category_ID 
													WHERE P.SUBCATEGORY_ID >=4 AND P.SUBCATEGORY_ID <=6") or die(mysql_error());
							}
							if($category ==3)
							{
								$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL,
													P.LOCATION_ID,P.SUBCATEGORY_ID, C.CATEGORYNAME FROM POSTS AS P LEFT JOIN CATEGORY AS C 
													on P.SUBCATEGORY_ID = C.Category_ID 
													WHERE P.SUBCATEGORY_ID >=7 AND P.SUBCATEGORY_ID <=9") or die(mysql_error());
							}
							
							$numrows = mysql_num_rows($query);
							while ($row = mysql_fetch_array($query)) {
								switch($row["LOCATION_ID"])
								{
								case 1:
								$locationName="SanFrancisco";
								$regionName="United States";
								break;
								case 2:
								$locationName="Sunnyvale";
								$regionName="United States";
								break;
								case 3:
								$locationName="SantaClara";
								$regionName="United States";
								break;
								case 4:
								$locationName="Chennai";
								$regionName="India";
								break;
								case 5:
								$locationName="Coimbatore";
								$regionName="India";
								break;
								case 6:
								$locationName="Bangalore";
								$regionName="India";
								break;
								case 7:
								$locationName="Sydney";
								$regionName="Australia";
								break;
								case 8:
								$locationName="Albury";
								$regionName="Australia";
								break;
								case 9:
								$locationName="Grafton";
								$regionName="Australia";
								break;
								}	
							switch ($row["SUBCATEGORY_ID"]) {
 							case 1:
							
							    $categoryName = "Housing";
 								$subcategoryName = "Apartment";
								break;
							
 							case 2:
 								$subcategoryName = "individual";
								$categoryName = "Housing";
 								break;
 							case 3:
 								$subcategoryName = "Condominium";
								$categoryName = "Housing";
 								break;
							case 4:
 								$subcategoryName = "Mobiles";
								$categoryName = "Electronics";
 								break;
							case 5:
 								$subcategoryName = "Camera";
								$categoryName = "Electronics";
 								break;
							case 6:
 								$subcategoryName = "Laptops";
								$categoryName = "Electronics";
 								break;
 							case 7:
 								$subcategoryName = "Car";
								$categoryName = "MotorVehicles";
 								break;
 							case 8:
 								$subcategoryName = "Bike";
								$categoryName = "MotorVehicles";
 								break;
							case 9:
 								$subcategoryName = "PrivateJet";
								$categoryName = "MotorVehicles";
 								break;
 						}
						
								
						echo "<tr><td>".$row["TITLE"]."</td><td>".$row["PRICE"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["EMAIL"]."</td><td>".$categoryName."</td><td>".$subcategoryName."</td><td>".$locationName."</td><td>".$regionName."</td></tr>";
								
							}
							
							
						}
						//if browse by sub-category
						if($subcategory)
						{
						
							$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL,
													P.LOCATION_ID,P.SUBCATEGORY_ID, C.CATEGORYNAME FROM POSTS AS P LEFT JOIN CATEGORY AS C 
													on P.SUBCATEGORY_ID = C.Category_ID 
													WHERE P.SUBCATEGORY_ID = '$subcategory'") or die(mysql_error());
							$numrows = mysql_num_rows($query);
							while ($row = mysql_fetch_array($query)) {
								switch($row["LOCATION_ID"])
								{
								case 1:
								$locationName="SanFrancisco";
								$regionName="United States";
								break;
								case 2:
								$locationName="Sunnyvale";
								$regionName="United States";
								break;
								case 3:
								$locationName="SantaClara";
								$regionName="United States";
								break;
								case 4:
								$locationName="Chennai";
								$regionName="India";
								break;
								case 5:
								$locationName="Coimbatore";
								$regionName="India";
								break;
								case 6:
								$locationName="Bangalore";
								$regionName="India";
								break;
								case 7:
								$locationName="Sydney";
								$regionName="Australia";
								break;
								case 8:
								$locationName="Albury";
								$regionName="Australia";
								break;
								case 9:
								$locationName="Grafton";
								$regionName="Australia";
								break;
								}	
							switch ($row["SUBCATEGORY_ID"]) {
 							case 1:
							
							    $categoryName = "Housing";
 								$subcategoryName = "Apartment";
								break;
							
 							case 2:
 								$subcategoryName = "individual";
								$categoryName = "Housing";
 								break;
 							case 3:
 								$subcategoryName = "Condominium";
								$categoryName = "Housing";
 								break;
							case 4:
 								$subcategoryName = "Mobiles";
								$categoryName = "Electronics";
 								break;
							case 5:
 								$subcategoryName = "Camera";
								$categoryName = "Electronics";
 								break;
							case 6:
 								$subcategoryName = "Laptops";
								$categoryName = "Electronics";
 								break;
 							case 7:
 								$subcategoryName = "Car";
								$categoryName = "MotorVehicles";
 								break;
 							case 8:
 								$subcategoryName = "Bike";
								$categoryName = "MotorVehicles";
 								break;
							case 9:
 								$subcategoryName = "PrivateJet";
								$categoryName = "MotorVehicles";
 								break;
 						}
						
								
						echo "<tr><td>".$row["TITLE"]."</td><td>".$row["PRICE"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["EMAIL"]."</td><td>".$categoryName."</td><td>".$subcategoryName."</td><td>".$locationName."</td><td>".$regionName."</td></tr>";
								
							}
							
							
						}
						//if browse by location
						if($location)
						{
							$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL, P.LOCATION_ID, P.SUBCATEGORY_ID, 
													 L.LOCATIONNAME FROM POSTS AS P LEFT JOIN LOCATION AS L 
													on P.LOCATION_ID = L.LOCATION_ID 
													WHERE P.LOCATION_ID = '$location'") or die(mysql_error());
													
							$numrows = mysql_num_rows($query);
							while ($row = mysql_fetch_array($query)) {
								switch($row["LOCATION_ID"])
								{
								case 1:
								$locationName="SanFrancisco";
								$regionName="United States";
								break;
								case 2:
								$locationName="Sunnyvale";
								$regionName="United States";
								break;
								case 3:
								$locationName="SantaClara";
								$regionName="United States";
								break;
								case 4:
								$locationName="Chennai";
								$regionName="India";
								break;
								case 5:
								$locationName="Coimbatore";
								$regionName="India";
								break;
								case 6:
								$locationName="Bangalore";
								$regionName="India";
								break;
								case 7:
								$locationName="Sydney";
								$regionName="Australia";
								break;
								case 8:
								$locationName="Albury";
								$regionName="Australia";
								break;
								case 9:
								$locationName="Grafton";
								$regionName="Australia";
								break;
								}	
							switch ($row["SUBCATEGORY_ID"]) {
 							case 1:
							
							    $categoryName = "Housing";
 								$subcategoryName = "Apartment";
								break;
							
 							case 2:
 								$subcategoryName = "individual";
								$categoryName = "Housing";
 								break;
 							case 3:
 								$subcategoryName = "Condominium";
								$categoryName = "Housing";
 								break;
							case 4:
 								$subcategoryName = "Mobiles";
								$categoryName = "Electronics";
 								break;
							case 5:
 								$subcategoryName = "Camera";
								$categoryName = "Electronics";
 								break;
							case 6:
 								$subcategoryName = "Laptops";
								$categoryName = "Electronics";
 								break;
 							case 7:
 								$subcategoryName = "Car";
								$categoryName = "MotorVehicles";
 								break;
 							case 8:
 								$subcategoryName = "Bike";
								$categoryName = "MotorVehicles";
 								break;
							case 9:
 								$subcategoryName = "PrivateJet";
								$categoryName = "MotorVehicles";
 								break;
 						}
						
								
						echo "<tr><td>".$row["TITLE"]."</td><td>".$row["PRICE"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["EMAIL"]."</td><td>".$categoryName."</td><td>".$subcategoryName."</td><td>".$locationName."</td><td>".$regionName."</td></tr>";
								
							}
							
							
						}
						//if browse by region
						if($region)
						{
							if($region == 1)
							{
								$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL, P.LOCATION_ID, P.SUBCATEGORY_ID, 
													 L.LOCATIONNAME FROM POSTS AS P LEFT JOIN LOCATION AS L 
													on P.LOCATION_ID = L.LOCATION_ID 
													WHERE P.LOCATION_ID <= 3") or die(mysql_error());
							}
							if($region == 2)
							{
								$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL, P.LOCATION_ID, P.SUBCATEGORY_ID, 
													 L.LOCATIONNAME FROM POSTS AS P LEFT JOIN LOCATION AS L 
													on P.LOCATION_ID = L.LOCATION_ID 
													WHERE P.LOCATION_ID >= 4 AND P.LOCATION_ID <= 6") or die(mysql_error());
							}
							if($region == 3)
							{
								$query = mysql_query("SELECT P.TITLE, P.PRICE, P.DESCRIPTION, P.EMAIL, P.LOCATION_ID, P.SUBCATEGORY_ID, 
													 L.LOCATIONNAME FROM POSTS AS P LEFT JOIN LOCATION AS L 
													on P.LOCATION_ID = L.LOCATION_ID 
													WHERE P.LOCATION_ID >= 7 AND P.LOCATION_ID <= 9") or die(mysql_error());
							}
							
													
							$numrows = mysql_num_rows($query);
							while ($row = mysql_fetch_array($query)) {
								switch($row["LOCATION_ID"])
								{
								case 1:
								$locationName="SanFrancisco";
								$regionName="United States";
								break;
								case 2:
								$locationName="Sunnyvale";
								$regionName="United States";
								break;
								case 3:
								$locationName="SantaClara";
								$regionName="United States";
								break;
								case 4:
								$locationName="Chennai";
								$regionName="India";
								break;
								case 5:
								$locationName="Coimbatore";
								$regionName="India";
								break;
								case 6:
								$locationName="Bangalore";
								$regionName="India";
								break;
								case 7:
								$locationName="Sydney";
								$regionName="Australia";
								break;
								case 8:
								$locationName="Albury";
								$regionName="Australia";
								break;
								case 9:
								$locationName="Grafton";
								$regionName="Australia";
								break;
								}	
							switch ($row["SUBCATEGORY_ID"]) {
 							case 1:
							
							    $categoryName = "Housing";
 								$subcategoryName = "Apartment";
								break;
							
 							case 2:
 								$subcategoryName = "individual";
								$categoryName = "Housing";
 								break;
 							case 3:
 								$subcategoryName = "Condominium";
								$categoryName = "Housing";
 								break;
							case 4:
 								$subcategoryName = "Mobiles";
								$categoryName = "Electronics";
 								break;
							case 5:
 								$subcategoryName = "Camera";
								$categoryName = "Electronics";
 								break;
							case 6:
 								$subcategoryName = "Laptops";
								$categoryName = "Electronics";
 								break;
 							case 7:
 								$subcategoryName = "Car";
								$categoryName = "MotorVehicles";
 								break;
 							case 8:
 								$subcategoryName = "Bike";
								$categoryName = "MotorVehicles";
 								break;
							case 9:
 								$subcategoryName = "PrivateJet";
								$categoryName = "MotorVehicles";
 								break;
 						}
						
								
						echo "<tr><td>".$row["TITLE"]."</td><td>".$row["PRICE"]."</td><td>".$row["DESCRIPTION"]."</td><td>".$row["EMAIL"]."</td><td>".$categoryName."</td><td>".$subcategoryName."</td><td>".$locationName."</td><td>".$regionName."</td></tr>";
								
							}
							
							
						}
			?>
	</tbody>
</table>	
		
	</body>	
	<?php } else {
		//Redirect to Login Page if user is not authenticated
	echo "<script type='text/javascript'>", 
				"window.location.href='login.php' ;",
			"</script>";
	}
	?>
</html>
