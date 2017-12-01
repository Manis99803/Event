<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="eventrova";

	$email=$_POST["email"];
	$pass=$_POST["password"];

	$connection=mysqli_connect($servername,$username,$password,$dbname);

	$query="SELECT * FROM Details WHERE Email='$email' AND Password='$pass'";
	$result=mysqli_query($connection,$query);
	$ret=(mysqli_fetch_assoc($result));
	if(!$ret)
	{
		$flag=1;
	}
	else
	{
		$flag=0;
	}
?>
<!DOCTYPE html>
<html>
 <head>
 		<style>
 			#check
 			{
 				position: absolute;
 				left:550px;
 				bottom:1500px;
 				
 				color:white;
 				
 				font-size:25px;
 				background-color: orange;
 				border-radius:5px;
 				width:500px;
 				height:30px;

 			}
 			input:focus,select:focus,textarea:focus,button:focus
 			{
 				outline:none;
 			}
 		</style>
        <link rel="stylesheet" type="text/css" href="Login.css"></link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <title>Login</title>
    <body>
      <div id="main">
    <div id="first">
</div>
<div id="second">
<p id="container">
<a  href="Index3.html"><img id="menu" src="close-icon.png"></img></a>
       <div id="centre" >
       <form action="Login.php" method="POST">
            <input type="email" placeholder="Email-id" required name="email"><br><br><br>
            <input type="password" placeholder="Password" name="password"><br><br>
            <br><br><br><input type="submit" value="Login">
            <hr></hr><p >Or connect with:</p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-twitter"></a>
        </form>
        </td></tr></table>
	<script>
		var flag="<?php echo $flag ?>";
		flag=parseInt(flag)
		if(flag==0)
		{
			var login=document.createElement("P")
			login.id="check";
			login.innerHTML="Successfully Logged In"
			document.body.appendChild(login)
	
		}
		else
		{
			var login=document.createElement("P")
			login.id="check";
			login.innerHTML="Either your Id or Password is wrong"
			document.body.appendChild(login)
		}

	</script>
</body>
</html>