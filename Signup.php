<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="eventrova";

		$name=$_POST["name"];
		$college=$_POST["college"];
		$email=$_POST["email"];
		$pass=$_POST["password"];
		$state=$_POST["state"];
		$place=$_POST["place"];

		$connection=mysqli_connect($servername,$username,$password,$dbname);

		$query="SELECT * FROM Details WHERE Email='$email'";
		$result=mysqli_query($connection,$query);
		$bool=mysqli_fetch_assoc($result);
		if(!$bool)
			$flag=1;
		else
		{
			$flag=0;
		}
		if($flag==1)
		{
			$query="INSERT INTO Details (Name,College,Email,Password,State,Place) values ('$name','$college','$email','$pass','$state','$place')";
			$ret=mysqli_query($connection,$query);
		}
?>
<!DOCTYPE html>
<html>
 <head>
 		<style>
 			#check
 			{
 				position: absolute;
 				top:250px;
 				left:550px;
 				color:white;
 				font-weight: 20px;
 				font-size:30px;

 			}
 			#valid
 			{
 				position: relative;
 				top:200px;
 				left:500px;
 				border:4px solid white;
 				height:300px;
 				width:500px;
 			}
 			#validation
 			{
 				position: relative;
 				top:100px;
 				left:680px;
 				height:50px;
 				width:200px;
 				font-size:25px;
 				background-color:Orange;
 				box-shadow: 0 0 5px 4px black;
 			}
 			a
 			{
 				text-decoration: none;
 				color:#FDFDFD;
 			}
 			input:focus,select:focus,textarea:focus,button:focus
 			{
 				outline:none;
 			}
 		</style>
        <link rel="stylesheet" type="text/css" href="Signup.css"></link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <title>Login</title>
    <body>
     <div id="Valid">
    </div> 
<!--a  href="Index3.html"><img id="menu" src="Cross.png"></img></a-->

      		<button id="Validation"><a href="Index3.html">Button</a></button>
	<script>
			var flag=parseInt("<?php echo $flag ?>");
			if(flag==0)
			{
				var doc=document.createElement("P")
				doc.innerHTML="Oops! itseems that you have used an <br> exsisitng email id"
				doc.id="Check"
				document.body.appendChild(doc)
				var button=document.querySelector("a");
				button.innerHTML="Back"
				button.setAttribute("href","Signup.html")
			}
			else
			{
				var doc=document.createElement("P")
				doc.innerHTML="Successfully Signed In now <br> Login to look for events"
				doc.id="Check"
				document.body.appendChild(doc)
				var button=document.querySelector("a");
				button.innerHTML="Login"
				button.setAttribute("href","Login.html")
			}
			

	</script>
</body>
</html>