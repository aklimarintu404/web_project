<!DOCTYPE html>
<html>
<head>
	<title>edit_profile</title>
</head>
<body>
     <form action="checkeditprofile.php" method="POST">
		<br/>
		<table border ='1'   border="2" width="60%" >
			<tr>
				<td>
				<a href="homepage.php"><img src="fundraiser.png" alt="Logo"></a>
				</td>
				<td align="right" >
					 <a href = "homepage.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>
			</td>
			</tr>
			<tr>		
				<td>
				<b>Donator</b>
				<hr>
					<ul>
					<a href="homepage.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="check_data.php"><li>Check data</li></a>
					<a href="donor.php"><li>Donor</li></a>
					<a href="help_center.php"><li>Help Center</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
                    <a href="logout.php"><li>Logout</li></a>
					</ul>
				</td>
				<td width=80%> 
					<fieldset>
						<legend><b>EDIT PROFILE</b></legend>
						<table>
                            <tr>
								<td>Name</td>
								<td>:</td>
								<td><input name="name" type="text"></td>
							</tr>		
							
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input name="email" type="text">
						        <abbr title="hint: sample@example.com"><b>i</b></abbr></td>
							</tr>						
							 <tr>
								<td>Number</td>
								<td>:</td>
								<td><input name="number" type="number"></td>
							</tr>
					
							
						</table>	
						<hr/>
						
					<input type="submit" name= "submit" value="Submit">
					
				</fieldset>
				</tr>			
            
			</table>
				
    </form>		
</body>
</html
