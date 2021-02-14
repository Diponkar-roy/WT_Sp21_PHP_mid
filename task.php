<html>
	<head></head>
	<body>
		<?php
		$uname= "";
		$err_uname="";
		$password="";
		$err_password="";
		if ($_SERVER['REQUEST_METHOD'] =="POST")
		{
			if(empty($_POST["uname"]))
			{
				$err_name="*Username required";
			}
			else if (strlen($_POST["uname"])<6)
			{
				$err_name="*Username should be at least 6 characters*";
			}
			else
			{
				$uname=$_POST["uname"];
			}
			if(empty($_POST["*pass"]));
			{
				$err_password= "*Password Required";
			}
			else{
			$password = $_post["pass"];
		}
		}
		?>
		
		
		<form action="submitted.php" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" name="uname"></td>
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" name="pass"></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
					     <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games</td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
	</body>
</html>
