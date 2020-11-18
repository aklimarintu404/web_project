<?php
session_start();
if(isset($_POST['submit']))
{
		$currentPass = $_POST['curPass'];
		$newPass = $_POST['newPass'];
		$confPass =$_POST['confPass'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>password</title>
</head>
<body>
     <form action="chekChangePass.php" method="POST">
		<br/>
		<table border ='1'   border="2" width="60%" >
			<tr>
				<td>
				<h2>FundraiserBD</h2>
				</td>
				<td align="right" >
				<a href = "homepage.php" name="password" > <?php echo $_COOKIE['uname']; ?></a>
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
				
				</td>
				<td width=80%> 
					<fieldset>
						<legend><b>Security System</b></legend>
						<table>
                            <tr>
								<td>Current Password</td>
								<td>:</td>
								<td><input name="password" type="password"></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td>:</td>
								<td><input name="password" type="password"></td>
							</tr>
							<tr>
								<td>Retry New Password</td>
								<td>:</td>
								<td><input name="password" type="password"></td>
							</tr>
							</table>
							<hr>
							
			              <input type="submit" name="submit" value="Submit">
						   </fieldset>
				</tr>			
			</table>		
    </form>		
</body>
</html

