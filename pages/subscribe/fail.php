<link href="css/message_style.css" rel="stylesheet">

<?php
if (isset($_GET['return']) && $_GET['return'] = 'fail') { ?>
    <!-- <div class="contact">
        <h2>Error ! Email Not sent Try again.</h2>
    </div> -->

    <div class="alert-msg">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <br><br>
                    <h2 style="color:#FF0000">SOMETHING WENT WRONG</h2>
                    <img src="img/alert-icon.png">
                    <p>Error ! Email not sent. Please try again. THANK YOU !</p>
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