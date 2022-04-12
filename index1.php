

<?php

error_reporting(0);
ini_set('display_errors', 0);

echo '
	<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css_style1.css">
    <link rel="icon" href  = "img_logo.ico">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="name" style="color:#CD5C5C;">Academic Quest</h2>
            </div>

            <div class="menu">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn1 success"><a style="background:#ff7200;"
				href="index.php">HOME</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                

            </div>
		</div>
';

$city=$_POST['city'];
$standard=$_POST['standard'];
$stream=$_POST['stream'];

/*Database connection part*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "schoolsearch";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($stream=="no"){
		$sql = "Select school_name,rating,deadline,link,`$standard` from schools where City='$city' AND `$standard`>0 order by rating Desc;";
	}
	else{
		$standard=$standard."-".$stream;
		$sql = "Select school_name,rating,deadline,link,`$standard` from schools where City='$city' AND `$standard`>0 order by rating Desc;";
	}
	
//	echo $sql;
	
	$result=mysqli_query($conn,$sql);
	
	if ($result==NULL){
		$rownum=0;
	}
	else{
		$rownum = mysqli_num_rows($result);
	}
	
	//echo'<br><br><br><br><br>';
	if ($rownum==0){
		echo '<br><br><br><br><br><br><br><br><br><h1 style="text-align: center; font-size: 50px; color: red;">No Schools Available :(</h1>';
	}
	
	else{
		echo '<br><br><br><br><br><br>';

		if ($city=='Delhi'or $city=='delhi' or $city=='DELHI'){
			echo'<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d224170.46061386983!2d77.03490519845552!3d28.609871659952926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdelhi%20schools!5e0!3m2!1sen!2sin!4v1645938228581!5m2!1sen!2sin" width="65%" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe></center>';
		}
		if ($city=='Mumbai' or $city=='mumbai' or $city=='MUMBAI'){
			echo'<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d241362.8711080276!2d72.66443945678883!3d19.050769206454383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smumbai%20schools!5e0!3m2!1sen!2sin!4v1645934485986!5m2!1sen!2sin" width="65%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>';
		}
		if ($city=='Chennai' or $city=='chennai' or $city=='CHENNAI'){
			echo'<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124389.23645196336!2d80.16952204264243!3d13.025249249718906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1schennai%20schools%20!5e0!3m2!1sen!2sin!4v1645941285697!5m2!1sen!2sin" width="65%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>';
		}
		if ($city=='Kolkata' or $city=='kolkata' or $city=='KOLKATA'){
			echo '<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58955.79144117061!2d88.34071549186847!3d22.551524009439397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKolkata%20schools!5e0!3m2!1sen!2sin!4v1645939775952!5m2!1sen!2sin" width="65%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>';
		}
		echo'<br><br><br><br><br>';

		while($row = mysqli_fetch_array($result)){
			echo '<center><div class="form">';
			echo '<br>School: '.'<b>'.$row["school_name"].'</b>';
			echo "<br> ";
			echo 'Rating: '.'<div style="color:#FFB72B; background-color:#7882A4; width:60%;">'.$row["rating"].'</div>';
			echo 'Vacancy: '.$row["$standard"];
			echo "<br>";
			echo 'Admn deadline :'.$row["deadline"];
			echo "<br>";
			$link= '<a href="'.$row['link'].'">'.$row['link'].'</a>';//</td></td> ';
			echo 'Link: '.$link;
			echo '</div></center> ';
			echo '<br><br>';
		}

	}
echo '
        </div>
</html>
';
?>