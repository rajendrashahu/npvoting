
<!DOCTYPE html>
<html lang="en">
<title>Nepal Voting Machine : Certification</title>
<?php include_once("includes/meta.php") ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<body>
<?php include_once("includes/topnav.php") ?>
<?php include_once("includes/navigation.php") ?>

<?php include_once("pages/certification/certification_list.php") ?>

<?php include_once("includes/newsletter_subscription.php") ?>
<?php include_once("includes/footer.php") ?>
</body>

<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>

</html>