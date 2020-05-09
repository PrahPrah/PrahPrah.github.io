<?php

if(isset($_POST["submit"])) {
  $name=$_POST["name"];
  $mail=$_POST["mail"];
  $message=$_POST["message"];

  $mailTo="frankie.gallagher@hotmail.com";
  $headers= "From: ".$mail;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, "subject",$txt, $headers);
  header("Location: index.php?mailsend");
}

?>
