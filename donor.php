<?php
session_start();
	
?>




<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	<form action="checkdonor.php" method="POST">
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="fundraiser.png" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
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
								<td>Amount</td>
								<td>:</td><hr>
								<td><input name="amount" type="number"></td>
							</tr>		
							
							<tr>
								<td>Credit Card Number</td>
								<td>:</td>
								<td><input name="card" type="number"> </td>
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
