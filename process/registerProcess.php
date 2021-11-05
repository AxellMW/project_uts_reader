<?php
    include('../db.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    $name       = strtolower(stripslashes($_POST['name']));
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $code       = md5($email.date('Y-m-d'));

    
    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar");</script>';
        echo'<script>window.location= "../page/registerPage.php"</script>';

    }else {
        echo '<script>alert("Silahkan Cek Email Anda untuk Verifikasi...")</script>';
        $sql = "INSERT INTO users (name,password,email,phone,verif_code)
        VALUES('$name','$password','$email','$phone','$code')";
        $query = mysqli_query($con,$sql);
    
    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     * This uses traditional id & password authentication - look at the gmail_xoauth.phps
     * example to see how to use XOAUTH2.
     * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
     */

    //Import PHPMailer classes into the global namespace


    $email_pengirim = "websiteuts1@gmail.com";
    $body = "Hi,".$name."<br>Please verif your email before access our website : <br> https://websiteutsweb.000webhostapp.com/process/confirmEmail.php?code=".$code;
    $subjek="Verifikasi Email";
    $email_tujuan=$email;

<<<<<<< HEAD
    $mail = new PHPMailer();
=======
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'allitemssss1@gmail.com
    ';

    //Password to use for SMTP authentication
    $mail->Password = 'petakumpet123';

    //Set who the message is to be sent from
    //Note that with gmail you can only use your account address (same as `Username`)
    //or predefined aliases that you have configured within your account.
    //Do not use user-submitted addresses in here
    $mail->setFrom('no-reply@well.com', 'Customer');

    //Set an alternative reply-to address
    //This is a good place to put user-submitted addresses
    // $mail->addReplyTo('replyto@example.com', 'First Last');

    //Set who the message is to be sent to
    $mail->addAddress($email, $name);

    //Set the subject line
    $mail->Subject = 'Verification Account';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $body = "Hi,".$name."<br>Please verif your email before access our website : <br> http://localhost/project_uts_onlineReader-1/process/confirmEmail.php?code=".$code;
    $mail->Body = $body;
    //Replace the plain text body with one created manually
    $mail->AltBody = 'Verification Account';
>>>>>>> efd877c94bc47b018ab33d01af516dd3c4c536fd

    $mail->IsHTML(true);    // set email format to HTML
    $mail->IsSMTP();   // we are going to use SMTP
    $mail->SMTPAuth   = true; // enabled SMTP authentication
    $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
    $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
    $mail->Port       = 465;                   // SMTP port to connect to GMail
    $mail->Username   = $email_pengirim;  // alamat email kamu
    $mail->Password   = "websiteutscobacoba1";            // password GMail
    $mail->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
    $mail->Subject    = $subjek;
    $mail->Body       = $body;
    $mail->AddAddress($email_tujuan);

    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: '. $mail->ErrorInfo;
    } else {
        echo 'Register sukses silahkan login !';
        echo'<script>window.location= "../index.php"</script>';
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

}

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.

?>