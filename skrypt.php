<?php
  if (isset($_REQUEST['email']))  {
  

  $admin_email = "lukaszrozdzynskii@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $message = $_REQUEST['message'];
  
  mail($admin_email, $name, $message, "From:" . $email);

  echo "Dziękuje za kontakt !";
  }
  
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Temat: <input name="subject" type="text" /><br />
  Wiadomość:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Wyślij" />
  </form>
  
<?php
  }
?>