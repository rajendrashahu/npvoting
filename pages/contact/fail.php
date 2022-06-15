<?php
if (isset($_GET['return']) && $_GET['return'] = 'fail'){ ?>
    <div class="contact">
        <h2>Error ! Email Not sent Try again.</h2>
    </div>
<?php }
else{
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
?>
