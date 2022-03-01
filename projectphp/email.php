<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "nischaltuladhar15@gmail.com";
         $subject = "Milxa milxa";
         
         $message = "<b>Sahi milxa.</b>";
         $message .= "<h1>Ximmaita SMTP.</h1>";
         
         $header = "From:timrock1@live.com \r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>