<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "mangel3457@gmail.com";
    $subject = "Nuevo mensaje de contacto - Sud Americana Maquinaria";
    
    $email_content = "Nombre: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Mensaje:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    if(mail($to, $subject, $email_content, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor intente nuevamente.";
    }
}
?>