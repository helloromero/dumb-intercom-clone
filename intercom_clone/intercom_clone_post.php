<?php

echo "false";
exit();

if(isset($_POST['email_data'])){

     // check if e-mail is empty
     $email_test = $_POST['email_data'];
     $email_test = str_replace(' ', '', $email_test);
     if( $email_test == "" ) {
          echo "false";
          exit();
     }

     // post email data
     $client_email = $_POST['email_data'];

     // subject line
     $email_subject = "New Customer E-Mail";

     // build body line
     $email_body = "New Customer E-Mail: " . $client_email; 

     // send e-mail address
     $to = "email@email.com";

     // e-mail sent from
     $headers = "From: website@url.com \r\n";

     // Reply-To header that is broken in PHP but still needed
     $headers .= "Reply-To: $client_email \r\n";

     // send email email
     if ( mail($to, $email_subject, $email_body, $headers) ){
          echo "true";
     }else{
          echo "false";
     }

}else{    
     echo "false";
}

// header('Location: index.html');
?>