<!-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script> -->
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
                    <h2 style="color:#0fad00">Your Subscription has been Successfully sent to Nepal Voting Machine !</h2>
                    <img src="img/download.png">
                    <h3>Dear, <?php echo isset($_GET['email'])?$_GET['email']:''; ?></h3>
                    <p style="font-size:20px;color:#5C5C5C;">Thank you for verifying your E-mail. We have sent you an email with the details</p>
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