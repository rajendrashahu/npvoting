<?php
if ($_GET['return'] = 'fail') { ?>
    <div class="contact">
        <!-- Error Alert -->
        <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
            <i class="bi-exclamation-octagon-fill"></i>
            <strong class="mx-2">Error!</strong> A problem has been occurred while submitting your data.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
<?php } else {
    header("Location: https://www.pioneersoftech.com/npvoting");
    exit();
}
?>