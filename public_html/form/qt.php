<?php
include "../classes/class.phpmailer.php"; // include the class name
	if(isset($_POST['email'])){
    
     $email = $_POST["email"];
     $nome = $_POST['nome'];
     $universidade = $_POST['universidade'];
     $nestudante = $_POST['nestudante'];
     $nmembro = $_POST['nmembro'];
     $pack = $_POST['pack'];
     $dias = $_POST['dias'];
     $arduino = $_POST['arduino'];
     $obs = $_POST['obs'];
        
         $email_message = "Esta mensagem e' enviada automaticamente: <br/><br/>" ."<b>Nome:</b> " .$nome ."<br/><b>Email: </b>" .$email ."<br/><b>Universidade/Curso: </b>" .$universidade ."<br/><b>Numero de Estudante: </b>" .$nestudante ."<br/><b>Numero de Membro do IEEE: </b>" .$nmembro ."<br/><b>Pack escolhido: </b>" .$pack ."<br/><b>A que dias vais: </b>" .$dias ."<br/><b>Tens algum Arduino? </b>" .$arduino ."<br/><b>Mensagem:</b> " .$obs;
        
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
$mail->Subject = "Inscricao no QT";
$mail->Body = "Mensagem";
$mail->MsgHTML($email_message);
$mail->AddAddress("francisco.m.tavares@ieee.org");
//$mail->addCC('');
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    echo "Obrigado.. Inscricao registada. Aguarda pelo nosso contacto.\n";
    echo "Tens 5 dias para efectuar o pagamento. Verifica os metodos de pagamento.";

}

    }
        
?>
