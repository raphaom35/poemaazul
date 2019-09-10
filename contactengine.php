<?php
header ('Content-type: text/html; charset=iso8859-15');

date_default_timezone_set("America/Brasilia");
$Subject = "Mensagem Web";
$Name = Trim(stripslashes($_POST['name'])); 
$Tel = Trim(stripslashes($_POST['subject'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$Tele = Trim(stripslashes($_POST['telefone']));
$EmailFrom = $Email;
$EmailTo = "contato@poemaazulcerimonias.com.br";
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

//$date= date("r");
$date =date("Y-m-d H:i:s");
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Assunto: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Telefone: ";
$Body .= $Tele;
$Body .= "\n";
$headers .= "Date: $date\n"; 
$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
if($Name or $Tel or $Email or $Message or $Tele !=""){
 // send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>",$headers);

// redirect to success page 
if ($success){
  //print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
  //echo "Email sent";
}
else{
 // echo "Email sending failed";
}
}
?>