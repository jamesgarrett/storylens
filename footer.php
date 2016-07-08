<!-- Footer -->
<div class="spacer" style="margin-top:50px;"></div>
    <footer class="container-fluid" style="text-align:center;">
        <div class="col-md-6 col-md-offset-3">
            <img src="<? bloginfo('stylesheet_directory'); ?>/img/storylens-logo-2.svg" alt="SLP logo">
            <ul class="list-inline">
                <? wp_list_pages('exclude=56&title_li='); ?>
            </ul>
            <div class="copyright text-muted small"><br>STORYLENS PICTURES <?php echo date('Y'); ?>. <br>  All Rights Reserved</div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="<? bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>

</body>

</html>