<?php
if (isset($_GET['return']) && $_GET['return'] = 'true'){ ?>
    <div class="contact">
        <div class="m-4">
            <!-- Success Alert -->
            <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <i class="bi-check-circle-fill"></i>
                <strong class="mx-2">Success!</strong> Your message has been sent successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    <?php } else {
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
    ?>