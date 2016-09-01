<!-- Footer -->
<div class="spacer" style="margin-top:50px;"></div>
    <footer class="container-fluid" style="text-align:center;">
        <div class="col-md-6 col-md-offset-3">
            <?php get_template_part('logo-footer') ?>
            <?php if ( is_user_logged_in() ) { ?>
            <ul class="list-inline footer-nav">
                <? wp_list_pages('exclude=56,89,88,108,106&title_li='); ?>
                <li><a href="<?php echo wp_logout_url( $redirect ); ?>">Logout</a></li>
            </ul>
            <?php } else {  ?>
            <ul class="list-inline">
                <li><a href="/wp-login.php">Login</a></li>
                <!-- <li><a href="http://storylens.org/wp-login.php?action=register">Register</a></li> -->
            </ul>
            <? } ?>
            <div class="copyright text-muted small"><br>STORYLENS PICTURES <?php echo date('Y'); ?>. <br>  All Rights Reserved</div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="<? bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>

</body>

</html>