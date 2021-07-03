<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/12.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color: grey;
		padding:50px;
		border:2px ridge whitesmoke;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Narasimha"){
				 var arr=["Praneeth","Girish","Sanjay","Saleem","Sanjana","Joseph","Nisha","Manikanta","Anand"];
				 }
				 else if(a==="Praneeth"){
					var arr=["Narasimha","Girish","Sanjay","Saleem","Sanjana","Joseph","Nisha","Manikanta","Anand"];
				 }
				 else if(a==="Girish"){
					var arr=["Narasimha","Praneeth","Sanjay","Saleem","Sanjana","Joseph","Nisha","Manikanta","Anand"];
				}
				else if(a==="Sanjay"){
					var arr=["Narasimha","Praneeth","Girish","Saleem","Sanjana","Joseph","Nisha","Manikanta","Anand"];
				}
				else if(a==="Saleem"){
					var arr=["Narasimha","Praneeth","Girish","Sanjay","Sanjana","Joseph","Nisha","Manikanta","Anand"];
				 }
				 else if(a==="Sanjana"){
					var arr=["Narasimha","Praneeth","Girish","Sanjay","Saleem","Joseph","Nisha","Manikanta","Anand"];
				 }
				 else if(a==="Joseph"){
					var arr=["Narasimha","Praneeth","Girish","Sanjay","Saleem","Sanjana","Nisha","Manikanta","Anand"];
				 }
				 else if(a==="Nisha"){
					var arr=["Narasimha","Praneeth","Girish","Sanjay","Saleem","Sanjana","Joseph","Manikanta","Anand"];
				 }
				 else if(a==="Manikanta"){
					var arr=["Narasimha","Praneeth","Girish","Sanjay","Saleem","Sanjana","Joseph","Nisha","Anand"];
				 }
				 else if(a==="Anand"){
					var arr=["Narasimha","Praneeth","Girish","Sanjay","Saleem","Sanjana","Joseph","Nisha","Manikanta"];
				 }

                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="color: antiquewhite;"> <B> SENDER NAME  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Narasimha">Narasimha</option>
			<option value="Praneeth">Praneeth</option>
			<option value="Girish">Girish</option>
			<option value="Sanjay">Sanjay</option>
			<option value="Saleem">Saleem</option>
			<option value="Sanjana">Sanjana</option>
			<option value="Joseph">Joseph</option>
			<option value="Nisha">Nisha</option>
			<option value="Manikanta">Manikanta</option>
			<option value="Anand">Anand</option>
		</select><br><br>
		<label for="receiver" align="left" style="color: antiquewhite;"> <B> RECEIVER NAME :&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
		<option  selected>Select Name</option>
			<option value="Narasimha">Narasimha</option>
			<option value="Praneeth">Praneeth</option>
			<option value="Girish">Girish</option>
			<option value="Sanjay">Sanjay</option>
			<option value="Saleem">Saleem</option>
			<option value="Sanjana">Sanjana</option>
			<option value="Joseph">Joseph</option>
			<option value="Nisha">Nisha</option>
			<option value="Manikanta">Manikanta</option>
			<option value="Anand">Anand</option>
		</select><br><br>
		<label for="transfer" align="left" style="color: antiquewhite;">AMOUNT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; </label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='yellowgreen'"onMouseOut="this.style.color='darkblue'"type="submit" name="submit" value="Transfer" style="background-color: transparent;height:40px; width:100px">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover" style="color: white;">HOME</button>
	</a>
</div>
</body>
</html>