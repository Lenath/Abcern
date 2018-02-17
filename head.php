<head>
    <!-- TYTUŁ STRONY -->
    <title><?php echo $res["title"]; ?></title>
    <!-- OPIS STRONY -->
    <meta name="description" content="<?php echo $res["description"]; ?>">
    <!-- SŁOWA KLUCZOWE -->
    <meta name="keywords" content="<?php echo $res["keywords"]; ?>">
    <!-- AUTOR -->
    <meta name="author" content="Klaudia Szal, Shonx">
    <!-- STYLE -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- CZCIONKA -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <!-- IKONY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Jquerry do scrollowania-->
    <script>
    $(document).ready(function() { 
 
        $('a[href^="#"]').on('click', function(event) {
        
            var target = $( $(this).attr('href') );
        
            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
     });
    </script>
</head>