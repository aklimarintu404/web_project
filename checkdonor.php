<?php
session_start();
if(isset($_POST['submit']))
{
	  $amount = $_POST['amount'];
		$card = $_POST['card'];
		
	   
	   
	   if(empty( $amount)||empty($card))
	   {
		   echo "null submission";
	   }
       else
	   {
		   echo "done";
		}
		  // $user = [
                
                // 'amount'=>$amount,
                // 'card'=>$card,
				
              // ];
    
          // setcookie('amount', $amount, time()+36000, '/');
          // setcookie('card', $card, time()+36000, '/');
		
		// header('location:check_data.php');
	   
  
	}
	else{
	  header("location: login.php");
	}
?>

