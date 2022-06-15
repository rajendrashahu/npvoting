<?php
if (isset($_GET['return']) && $_GET['return'] = 'invalid'){ ?>
    <div class="contact">
        <h2>Error ! unauthentic.</h2>
    </div>
<?php }
else{
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
?>
