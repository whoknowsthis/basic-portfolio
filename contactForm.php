<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $mailFrom = $_POST["mail"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $emailTo = "tedabrenica03@gmail.com";
        $header = "From: My portfolio: ". $mailFrom;
        $personalizeText = "You recieve an email from " . $name . ".\n\n" . $message;
        mail($emailTo, $subject, $personalizeText, $header);

        header("Location: index.html?mail=sent");
    }