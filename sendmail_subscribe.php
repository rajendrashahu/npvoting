<?php
//print_r($_POST); die();
$company_email = 'rjn.s2009@gmail.com';
if (isset($_POST['btn_subscribe'])){
    $email = isset($_POST['email'])?$_POST['email']:'';
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $request_date = date('Y-m-d H:i:s');

//    $to      = $company_email;

    $to = implode(", ", [
        $company_email,
        $email
    ]);
    $cc = implode(", ", [
//        "third@doge.com",
//        "forth@doge.com"
    ]);
    $bcc = implode(", ", [
//        "fifth@doge.com",
//        "sixth@doge.com"
    ]);

    $subject = 'Subscribe from Nepal Voting';
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
    $headers  = "Reply-To: Rajendra Shahu <rjn.s2009@gmail.com>".$eol;
    $headers .= "Return-Path: Rajendra Shahu <rjn.s2009@gmail.com>".$eol;
    $headers .= "From: Rajendra Shahu <rjn.s2009@gmail.com>".$eol;
    $headers .= "MIME-Version: 1.0".$eol;
    $headers .= "Content-type: text/html; charset=iso-8859-1".$eol;
    $headers .= "Cc: $cc".$eol;
    $headers .= "Bcc: $bcc".$eol;

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