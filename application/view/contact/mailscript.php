<?php

//if "email" variable is filled out, send email
if (isset($_POST['email']))  {

    //Email information
    $admin_email = "99033673@mydavinci.nl";
    $email = $_POST['email'];
    $subject = 'comment on the website';
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    //send email
    mail($admin_email, "$subject", $comment, "From:" . $email . "", $name);

    //Email response
    echo "Thank you for contacting us!";
} else {
    echo "No mail send or a error accrued";
}