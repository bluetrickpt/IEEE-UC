<?php
include "classes/class.phpmailer.php"; // include the class name
	if(isset($_POST['email'])){
    
     $email = $_POST["email"];
     $nome = $_POST['nome'];
     $telemovel = $_POST['telemovel'];   
     $obs = $_POST['obs'];
    $conheciment = $_POST['conheciment'];
         $universidade = $_POST['universidade'];
         $email_message = "Esta mensagem é enviada automaticamente: <br/><br/>" ."<b>Nome:</b> " .$nome ."<br/><b>Email: </b>" .$email ."<br/><b>Telemovel:</b> " .$telemovel . "<br/><b>Conhecimentos de Latex: </b>" .$conheciment ."<br/><b>Universidade: </b>" .$universidade ."<br/><b>Mensagem:</b> " .$obs;
        
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "form.sbuc@gmail.com";
$mail->Password = "bigstudentbranch";
$mail->SetFrom($email);
$mail->Subject = "Contact Form";
$mail->Body = "Mensagem";
$mail->MsgHTML($email_message);
$mail->AddAddress("urbanomiguel.g.nunes@ieee.org");
//$mail->addCC('');
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
	echo "A sua mensagem foi enviada com sucesso!";
}

    }
        
?>
