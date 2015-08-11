<!DOCTYPE html>
<!--<html>
<head>
  <title></title>
  <style type="text/css">
  #popupbox{
	  margin: 0; 
	  margin-left: 40%; 
	  margin-right: 40%;
	  margin-top: 50px; 
	  padding-top: 10px; 
	  width: 20%; 
	  height: 150px; 
	  /*position: absolute; */
	  background: #FBFBF0; 
	  border: solid #000000 2px; 
	  z-index: 9; 
	  font-family: arial; 
	  visibility: hidden; 
  }
  </style>
  <script language="JavaScript" type="text/javascript">
  function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; 
    }
  }
  </script>
</head>
<body>

<div id="popupbox"> 
<form name="login" action="" method="post">
<center>Username:</center>
<center><input name="username" size="14" /></center>
<center>Password:</center>
<center><input name="password" type="password" size="14" /></center>
<center><input type="submit" name="submit" value="login" /></center>
</form>
<br />
<center><a href="javascript:login('hide');">close</a></center> 
</div> 

<p><a href="javascript:login('show');">login</a></p>
</body>
</html>-->
<html>
<body>
<?php
   $viewer = getenv( "HTTP_USER_AGENT" );
	echo $viewer."<br/><br/>";
   $browser = "An unidentified browser";
   if( preg_match( "/MSIE/i", "$viewer" ) )
   {
      $browser = "Internet Explorer";
   }
   else if(  preg_match( "/Netscape/i", "$viewer" ) )
   {
      $browser = "Netscape";
   }
   else if(  preg_match( "/Mozilla/i", "$viewer" ) )
   {
      $browser = "Mozilla";
   }
   $platform = "An unidentified OS!";
   if( preg_match( "/Windows/i", "$viewer" ) )
   {
      $platform = "Windows!";
   }
   else if ( preg_match( "/Linux/i", "$viewer" ) )
   {
      $platform = "Linux!";
   }
   echo("You are using $browser on $platform <br/><br/>");
?>
</body>
</html>

<?php
 /* srand( microtime() * 1000000 );
  $num = rand( 1, 4 );

echo $num;
   
  switch( $num ) 
  {
  case 1: $image_file = "spark1/images/banner1.png";
          break;
  case 2: $image_file = "spark1/images/banner2.png";
          break;
  case 3: $image_file = "spark1/images/banner3.png";
          break;
  case 4: $image_file = "spark1/images/logo.png";
          break;
  }
  echo "Random Image : <img src=$image_file />";*/
?>

<?php
 /* if( $_POST["name"] || $_POST["age"] )
  {
     echo "Welcome ". $_POST['name']. "<br />";
     echo "You are ". $_POST['age']. " years old.";
     exit();
  }*/
?>
<!--
<html>
<body>
  <form action="<?php $_PHP_SELF ?>" method="POST">
  Name: <input type="text" name="name" />
  Age: <input type="text" name="age" />
  <input type="submit" />
  </form>
</body>
</html>

-->



<?php
  if( $_POST["location"] )
  {
     $location = $_POST["location"];
     header( "Location:$location" );
     exit();
  }
?>
<html>
<body>
   <p>Choose a site to visit :</p>
   <form action="<?php $_PHP_SELF ?>" method="POST">
   <select name="location">
      <option value="http://w3c.org">
            World Wise Web Consortium
      </option>
      <option value="http://www.google.com">
            Google Search Page
      </option>
   </select>
   <input type="submit" />
   </form>
</body>
</html>



