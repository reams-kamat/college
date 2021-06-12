<?php 

    if(isset($_POST['sumit']))
    {
       $Name = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['subject'];
       $Phn = $_POST['phn'];
       $Msg = $_POST['message'];
       $to = "reams.kamat@gmail.com";

        if(!isset($_SESSION['captcha'])){
      require('recaptcha/src/autoload.php');    
      $recaptcha = new \ReCaptcha\ReCaptcha('6LevO1IUAAAAAFCCiOHERRXjh3VrHa5oywciMKcw', new \ReCaptcha\RequestMethod\SocketPost());
      $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

      if (!$resp->isSuccess()){
          $_SESSION['error'] = 'Please answer recaptcha correctly';
          header('location: signup.php'); 
          exit(); 
        } 
        else{
          $_SESSION['captcha'] = time() + (10*60);
        }

    }

       if(empty($Name) || empty($Phn)|| empty($Email) || empty($Subject) || empty($Msg)){
             header('location:support.php?error');
         }

         elseif (!preg_match("/^[a-zA-Z ]*$/",$Name)){
               header("location:support.php?invalid_name");
          }
        elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
               header("location:support.php?invalid_email");
          }
       else
       {

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:support.php?success");
           }
       }
    }
    else
    {
        header("location:support.php");
    }
?>