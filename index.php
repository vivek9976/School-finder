<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css_style.css">
    <link rel="icon" href  = "img_logo.ico">

</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="name" style="color:#CD5C5C;">Academic Quest</h2>
            </div>

            <div class="menu">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn1 info"><a href="About.php">ABOUT</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn1 warning"><a href="service.php">SERVICE</a></button>

            </div>

            

        </div> 
        <div class="content">
            <h1>A School<br><span>Search</span> <br>Website</h1><br><br>
            <p class="par" style="color:#FEECE9;">Find Schools in your city <br> Get the seat availability status  
                <br> Find the official websites and ratings of schools</p>


				<div class="form">
					<form action = "index1.php" method="post">
						
						<input placeholder="ENTER CITY" type="text" name="city" id="city">
						
						<input placeholder="ENTER STANDARD" oninput="streamcheck()" type="text" name="standard" id="standard"><br>
						<div id="p1"></div>
						<input type="submit" value="Search" name="submitbutton">
					</form>
		
		 <div class="icons"><br><br><br>
                   
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

<script>	
function streamcheck(){
	var x= document.getElementById("standard").value;
	if (x>=11){
			document.getElementById("p1").innerHTML='<br><input placeholder="ENTER STREAM" type="text" name="stream" id="stream"><br>';
		}
	else{
			document.getElementById("p1").innerHTML ='<input type="hidden" value ="no" name="stream" id="stream"><br>';
		}
	return false;
}
</script>