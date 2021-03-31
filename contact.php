$name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        <script language="javascript" type="text/javascript">
        // Print a message
        alert('Fill all details.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        </script>
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        $mail_status = mail("sindhuaniket@gmail.com", $subject, $message, $from);
        if($mail_status){
            <script language="javascript" type="text/javascript">
            alert('Thank you for the message. We will contact you shortly.');
            </script>
        }
        else{
            <script language="javascript" type="text/javascript">
            alert('Message failed. Please, send an email to sindhuaniket@gmail.com');
        </script>
        }
    }