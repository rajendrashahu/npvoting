<?php
if (isset($_GET['return']) && $_GET['return'] = 'invalid'){ ?>
    <div class="contact">
        <!-- Warning Alert -->
        <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
            <i class="bi-exclamation-triangle-fill"></i>
            <strong class="mx-2">Warning!</strong> There was a problem with your network connection.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
<?php } else {
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
?>