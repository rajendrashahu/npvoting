<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        // $().ready(function() {
        //     $("#subscribe_form").validate({
        //         rules: {
        //             email: {
        //                 required: true,
        //                 email: true
        //             }
        //         },
        //     });
        // });
        function checkSubscribe() {
            $("#subscribe_form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
            });
        }
    </script>

    <link rel="stylesheet" href="css/style.css">
</head>