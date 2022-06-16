<link href="css/message_style.css" rel="stylesheet">

<?php
if (isset($_GET['return']) && $_GET['return'] = 'true') { ?>
    <!-- <div class="contact">
        <h2>Success ! Thank you for you contact.</h2>
    </div> -->

    <div class="alert-msg">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <br><br>
                    <h2 style="color:#0fad00">Success</h2>
                    <img src="img/download.png">
                    <h3>Dear, Keshav Khatri</h3>
                    <p>Thank you for verifying your E-mail. We have sent you an email with your details</p>
                    <a href="https://www.pioneersoftech.com/npvoting" class="btn btn-success"> Get Back To Home </a>
                    <br><br>
                </div>

            </div>
        </div>

    </div>

<?php } else {
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
?>