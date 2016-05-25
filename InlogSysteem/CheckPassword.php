<?php

if (isset($_POST['name']))
{
$username = $_POST['name'];
$password = $_POST['pwd'];

$userData = file_get_contents('accounts.txt');
    
$inputUser = $username . "||" . $password;
    
$isItThere = strpos($userData, $inputUser); 
    
if ($isItThere == false){
    echo "$inputUser staat niet in de lijst <br>";
    session_start();
    $_SESSION['user'] = "";
    
    session_unset();
    
    session_destroy();
}
  else{
      echo "$inputUser komt voor op positie $isItThere<br>";
      session_start();
      $_SESSION['user'] = $username;
  }  
}
?>
<form action="" method="post">
    <h1> Please enter your information to login </h1>
    <p>
    <label>Login Name:</label><input type="text" name="name" />
    <label>Password:</label><input type="password" name="pwd" />
        <br/>
        <br/>
       </p>
    <input type="submit" name="submit_btn" id="submit" value="submit"/>
    <input type="reset" id="reset" value="reset"/>
</form>