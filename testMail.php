 <?php
 $headers = 'From:noreply@spotaplace.com' . "\r\n"; // Set from headers  
 $to = "iamezell@gmail.com";
 $subject = "testing mail"; 
 $message = "hello this is just a test!";
 $returned = mail($to, $subject, $message, $headers, '-f ezell@spotaplace.com'); // Send our email 
 error_log($returned); 
