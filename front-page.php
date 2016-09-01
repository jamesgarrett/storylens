 <?php
/*
Template Name: frontpage
*/
?>

    <?php get_header(); ?>

    <?php if ( is_user_logged_in() ) { ?>
        
        <style>
            .footer-main{margin-top:0px;}
            .navbar-default{background-color: transparent;border-color:transparent;}
            .intro-header{
            background-size: cover;
            height: 100vh;
            background-position: bottom;}
            .spacer{display:none;}
            body{background-color: #000;}
        </style>
            <!-- Header -->
            <div class="intro-header" id="background-slider">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-8"></div>
                    </div>
                </div>
                <!-- /.container -->
            </div>

        <script src="<? bloginfo('stylesheet_directory'); ?>/js/background-slide.js"></script>

    <?php } else {  ?>

        <style>
        .footer-main{margin-top:0px;}
        .navbar-default{background-color: transparent;border-color:transparent;}
        .intro-header{
        background-size: cover;
        height: 100vh;
        background-position: bottom;
        color:#222;}
        .spacer{display:none;}
        #main-nav{display:none;}
        .footer-nav{display:none;}
        body{background-color: #fff;}
        </style>

        <!-- Header -->
        <div class="intro-header" style="padding:25vh 0;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        
                       <?php get_template_part('logo') ?>
                        
                       
                       <h4> We apologize for any inconvenience as we finalize our brand new website! </h4>
                       <h4> Please check back soon for exciting updates. <br> In the meantime find us on <a href="https://vimeo.com/storylenspictures">Vimeo</a>. </h4>
                        
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>

    <? } ?>

<?php get_footer(); ?>

