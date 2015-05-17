<?php
$cakeDescription = 'Inicio | Aquaservicios';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
        <!--<?= $this->fetch('title') ?> -->
    </title>
 
  
    <?= $this->html->script('jquery.lightbox.js') ?>
    <?= $this->Html->css('touchTouch.css') ?>
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <?= $this->html->script('jquery.min.js') ?>
    <?= $this->html->script('jquery.ui.totop.js') ?>
    <?= $this->html->script('responsiveslides.min.js') ?>
    <?= $this->html->script('touchTouch.jquery.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />
 
    </head>
<body>
    <header>
     <div class="header">
     <div class="container">
         <div class="logo">
             <a href="index.html"><img src="/images/logo.jpg" alt=""/></a>
         </div> 
         <div class="top-menu">  
             <span class="menu"></span>
             <ul>
                <li><a class="active" href="/Index/">Inicio</a></li>
                <li><a href="/About/">Nosotros</a></li>
                <!--<li><a href="project.html">Proyectos</a></li>-->                 
                <li><a href="/Services/">Servicios</a></li>
                <li><a href="/Contacts/">Contacto</a></li>
             </ul> 
          </div>
          <!-- script-for-menu -->
         <script>                   
                    $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle("slow" , function(){
                        });
                    });
         </script>
         <!-- script-for-menu -->   
         <div class="clearfix"></div>
     </div>
</div>  
</header>

<?= $this->fetch('content') ?>    


    <footer>
        <div class="footer">
             <div class="container">         
                 <p>Copyright © 2015 Aquaservicios All rights reserved | Design by <a href="http://www.prollux.com">Prollux</a></p>
                 <div class="social">                           
                        <a href="#"><i class="facebook"></i></a>
                        <a href="#"><i class="twitter"></i></a>
                        <a href="#"><i class="dribble"></i></a> 
                        <a href="#"><i class="google"></i></a>  
                        <a href="#"><i class="youtube"></i></a> 
                 </div>
                 <div class="clearfix"></div>
             </div>
        </div>
    </footer>
</body>   
</html>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        manualControls: '#slider3-pager',
      });
    });

       $(document).ready(function(){
         $().UItoTop({ easingType: 'easeOutQuart' });
         $("#toTop").remove();
       });  
        
        $(function(){
  
  // Initialize the gallery
  $('.works a.gal').touchTouch();
 });  
</script>


