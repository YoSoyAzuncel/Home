<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['name'])&&!empty($_POST['email'])&& !empty($_POST['msg'])){

        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email,$name,$msg,$header);
        if($mail){
            echo "<h4>Mail enviado!</h4>";
        }
    }
    // Aquí va el código que se ejecutará al enviar el formulario
   
}
?>