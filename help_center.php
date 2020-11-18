

<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	
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
			Thank you for believing us.<br>
			If you have any problems you can contact us.
			<h4>Number</h4><a href="number.php">01829561585</a><br><br>
			
			You can also messaging us through email.
		<h4>Email</h4><a href="email.php">faiyaz@gmail.com</a>
			
			</tr>			
            
    </table>
	</form>
</body>
</html>

