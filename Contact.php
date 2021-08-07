<?php
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        $email_from = 'deeppatel8904@email.com';

        $email_subject = "new from submission";

        $email_body = "User Name : $name. \n".
                        "user Email: $visitor_email. \n".
                            "user message : $message. \n ";

        $to = "pateldeep8904@gmail.com";

        $headers = "from: $email_from \r\n";
        $headers .= "Replay to : $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("location : Contact.html");

?>

