<?php
//print_r($_POST); die();
if (isset($_POST['btn_submit'])){
    $to      = 'rjn.s2009@gmail.com';
    $subject = 'Contact from Nepal Voting';
    $message = 'hello test';
    $headers = 'From: info@pioneersoftech.com'."\r\n".
        'Reply-To: info@pioneersoftech.com'."\r\n".
        'X-Mailer: PHP/' . phpversion();
    $result = mail($to, $subject, $message, $headers);
    if($result == true){
        $return = "true";
        $response = "email has been sent";
        header("Location: https://www.pioneersoftech.com/npvoting/success.php?response=".$response."&return=".$return);
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