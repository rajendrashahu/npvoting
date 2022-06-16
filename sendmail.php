<?php
//print_r($_POST); die();
$company_email = 'info@technosales.com.np';
if (isset($_POST['btn_submit'])){
    
    $fullname = isset($_POST['fullname'])?$_POST['fullname']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $phone = isset($_POST['phone'])?$_POST['phone']:'';
    $message = isset($_POST['message'])?$_POST['message']:'';
    $terms_condition = isset($_POST['terms_condition'])?$_POST['terms_condition']:'';
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $contact_date = date('Y-m-d H:i:s');

//    $to      = $company_email;

    $to = implode(", ", [
        $email
    ]);
    $cc = implode(", ", [
        $company_email,
//        "forth@doge.com"
    ]);
//    $bcc = implode(", ", [
////        "fifth@doge.com",
////        "sixth@doge.com"
//    ]);

    $subject = 'Contact Nepal Voting Machine';
    $html = '<html><body>';
    $html .= '<div class="table" style="margin: 20px 0;">
                    <table style="width: 100%; border:1px solid #eeeeee; margin-bottom: 20px;">
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Full Name</td>
                            <td style="padding: 5px;">'.$fullname.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Email</td>
                            <td style="padding: 5px;">'.$email.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Phone</td>
                            <td style="padding: 5px;">'.$phone.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Message</td>
                            <td style="padding: 5px;">'.$message.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Terms & Conditions</td>
                            <td style="padding: 5px;">'.$terms_condition.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Contact Date</td>
                            <td style="padding: 5px;">'.$contact_date.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Register IP Address</td>
                            <td style="padding: 5px;">'.$ipAddress.'</td>
                        </tr>
                    </table>
                </div>';
    $html .= '</body></html>';

    // Carriage return type (RFC).
    $eol = "\r\n";
    $headers  = "Reply-To: Technology Sales <info@technosales.com.np>".$eol;
    $headers .= "Return-Path: Technology Sales <info@technosales.com.np>".$eol;
    $headers .= "From: Technology Sales <info@technosales.com.np>".$eol;
    $headers .= "MIME-Version: 1.0".$eol;
    $headers .= "Content-type: text/html; charset=iso-8859-1".$eol;
    $headers .= "Cc: $cc".$eol;
//    $headers .= "Bcc: $bcc".$eol;

    $headers .= "X-Priority: 3".$eol;
    $headers .= "X-Mailer: PHP".phpversion().$eol;


    $result = mail($to, $subject, $html, $headers);
    if($result == true){
        $return = "true";
        $response = "email has been sent";
        header("Location: https://www.pioneersoftech.com/npvoting/success.php?response=".$response."&return=".$return."&name=".$fullname);
        exit();
    }else{
        $return = "fail";
        $response = "email not sent";
        header("Location: https://www.pioneersoftech.com/npvoting/fail.php?response=".$response."&return=".$return);
        exit();
    }
}else{
    $return = "invalid";
    $response = "unauthentic";
    header("Location: https://www.pioneersoftech.com/npvoting/unauthentic.php?response=".$response."&return=".$return);
    exit();
}

//echo $response; die();
?>