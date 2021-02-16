<?php
session_start();
require 'login.php';

?>
<!Doctype html>
        <html lang="es">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <meta name="description" content="Luis Marin Web Developer">
        <meta name="author" content="">
        <title></title>
        <!-- Jquery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Questrial&family=Red+Hat+Display:wght@500;700;900&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
        <!-- Icon -->
        <link rel="icon" href="images/favicon-luis-marin.png">
        <!-- IHover -->
        <link href="css/ihover.css" rel="stylesheet">
        <!-- AOS.js -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        
        <!-- Bxslider -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- FlexSlider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
        <!-- Styles -->
        <link href="css/style.css" rel="stylesheet">
        </head>
<body class="fadeIn">
        <?php
        require_once 'template.php';
    	nav();
        ?>
        <!-- MAIN CONTAINER -->
    	<main class="container-fluid">     
     
     	  <?php hero();?>
          <?php about();?>          
    	  <?php skills();?>
    	  <?php tools();?>
    	  <?php login();?>
    	  <?php works();?>
    	  <?php contact();?>
    	  <?php footer();?>

	  </main><!-- /. FIN MAIN CONTAINER --> 
	  
	  <!-- JS Jquery -->
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- JS BxSlider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <!-- JS FlexSlider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>
    <!-- JS Modals -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <!-- JS AOS -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php  
        echo "<script type='text/JavaScript'>
            AOS.init();
        </script>"
        ;
        ?>
    <!-- JS Scripts -->
    <script type="text/javascript" src="js/script.js"></script>  

</body>
</html>