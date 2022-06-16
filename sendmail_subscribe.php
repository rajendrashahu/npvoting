<?php
//print_r($_POST); die();
$company_email = 'info@technosales.com.np';
if (isset($_POST['btn_subscribe'])){
    $email = isset($_POST['email'])?$_POST['email']:'';
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $request_date = date('Y-m-d H:i:s');

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

    $subject = 'Subscribe to Nepal Voting Machine';
    $html = '<html><body>';
    $html .= '<div class="table" style="margin: 20px 0;">
                    <table style="width: 100%; border:1px solid #eeeeee; margin-bottom: 20px;">
                        
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Subscribed Email</td>
                            <td style="padding: 5px;">'.$email.'</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; color: #968832; font-weight: bold;">Request Date</td>
                            <td style="padding: 5px;">'.$request_date.'</td>
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
    $headers = "From: Technology Sales <info@technosales.com.np>".$eol;
    $headers .= "Reply-To: Technology Sales <info@technosales.com.np>".$eol;
    $headers .= "Return-Path: Technology Sales <info@technosales.com.np>".$eol;
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
        header("Location: https://www.pioneersoftech.com/npvoting/success_subscribe.php?response=".$response."&return=".$return."&email=".$email);
        exit();
    }else{
        $return = "fail";
        $response = "email not sent";
        header("Location: https://www.pioneersoftech.com/npvoting/fail_subscribe.php?response=".$response."&return=".$return);
        exit();
    }
}else{
    $return = "invalid";
    $response = "unauthentic";
    header("Location: https://www.pioneersoftech.com/npvoting/unauthentic_subscribe.php?response=".$response."&return=".$return);
    exit();
}

//echo $response; die();
?>