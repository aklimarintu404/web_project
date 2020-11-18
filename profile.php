<?php

session_start();
$name = $_COOKIE['name'];
$email = $_COOKIE['email'];

?>



<!DOCTYPE html>
<html>
<head>
    
    <title>profile</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="homepage.php"><img src="fundraiser.png" alt="Logo"></a>
            </td>

            <td align="right">

                <a href="profile.php"><?=$name?></a> 
                
            </td>


        </tr>

        <tr>
            
            <td>
                <b>Donetor</b><hr>
                
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
                <legend><b>PROFILE</b></legend>
                <table>
                   
                    <tr>
                        <td>Name</td>
						<td>:</td>
                            <td><?=$name?></td>
					</tr>
					
							<tr>
                    <td>Email</td>
						<td>:</td>
                   <td><?=$email?></td>
				   </tr>
                   
                    
                      </td>
                  
                    <tr><td colspan="2"><hr></td></tr>
                    <tr><td colspan="2"><a href="edit_profile.php">Edit Profile</a></td></tr>
                </table>
                </fieldset>
                
            </td>
            
        </tr>

       

    </table>
    
</body>
</html>