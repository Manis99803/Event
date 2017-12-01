<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="eventrova";

		$event_name=$_POST["Event"];
		$event_type=$_POST["Event_type"];
		$location=$_POST["Location"];
		$event_link=$_POST["website"];
		$state=$_POST["State"];
		$date=$_POST["Date"];
		$description=$_POST["Description"];

		$connection=mysqli_connect($servername,$username,$password,$dbname);

		$query="SELECT * FROM Create_Event WHERE Event_Link='$event_link' AND Event_Name='$event_name";
		$ret=mysqli_query($connection,$query);
		$result=mysqli_fetch_assoc($ret);
		if($result)
		{
			$flag=1;

		}
		else
		{
				$flag=0;
				$query="INSERT INTO Create_Event (Event_Name,Event_type,Location,Event_Link,State,Event_Date,Description) values ('$event_name','$event_type','$location','$event_link','$state','$date','$description')";
				$ret=mysqli_query($connection,$query);
		}

?>
<!DOCTYPE html>
<html>
 <head>
 		<style>
 			#Check
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
 		</style>
        <link rel="stylesheet" type="text/css" href="Login.css"></link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <title>Login</title>
    <body>
     <div id="valid">
    </div> 


      		<button id="validation"><a href="Index3.html">Button</a></button>
	<script>
			var flag=parseInt("<?php echo $flag ?>")
			
			if(flag==1)
			{
				var doc=document.createElement("P")
				doc.innerHTML="Oops! itseems that you are trying to<br>  create an event which has been created already"
				doc.id="Check"
				document.body.appendChild(doc)
				var button=document.querySelector("a");
				button.innerHTML="Back"
				button.setAttribute("href","Event.html")
			}
			else
			{
				var doc=document.createElement("P")
				doc.innerHTML="Thanks for Letting us know about the <br>event we will post this on our website<br>"
				doc.id="Check"
				document.body.appendChild(doc)
				var button=document.querySelector("a");
				button.innerHTML="Home"
				
			}
			

	</script>
</body>
</html>