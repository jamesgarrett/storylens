 <?php
/*
Template Name: frontpage
*/
?>

    <?php get_header(); ?>

    <style>
    .footer-main{margin-top:0px;}
    .navbar-default{background-color: transparent;border-color:transparent;}
    .intro-header{
    background-size: cover;
    height: 100vh;
    background-position: bottom;}
    .spacer{display:none;}
    </style>
    <!-- Header -->
    <div class="intro-header" id="background-slider">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-lg-offset-8">
                    
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

<?php get_footer(); ?>

<script src="<? bloginfo('stylesheet_directory'); ?>/js/background-slide.js"></script>

