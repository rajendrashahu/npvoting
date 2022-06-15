<?php
if (isset($_GET['return']) && $_GET['return'] = 'true'){ ?>
    <div class="contact">
        <h2>Success ! Thank you for you contact.</h2>
    </div>
<?php }
else{
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
?>
