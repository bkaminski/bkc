<footer class="footer">
    <a href="javascript:" class="text-center" id="back-up" title="Back to Top">
        <i class="fa fa-chevron-up fa-lg text-green"></i>
    </a>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="nerdy-quote">
                    <h3 class="text-bold text-uppercase">Nerdy Quotes:</h3>
                    <span style="font-size: 2rem;"><?php echo get_nerdy_quote(); ?></span>
                </div>
            </div>
            <div class="col-md-4 bkc--info pb-4">
                <h3 class="text-uppercase text-end">Benjamin Kaminski<br> Consulting</h3>
                <p class="text-end">Smyrna, Delaware, USA<br>(302) 333-7462</p>
                <p class="text-end"><a href="contact">Contact Ben</a></p>
                <p class="text-end"><a title="My LinkedIn Profile" target="noopener" href="https://www.linkedin.com/in/kaminskiben/"><i class="fab fa-linkedin text-green fa-3x fa-fw"></i></a> <a title="My Github Profile" target="noopener" href="https://github.com/bkaminski"><i class="fab fa-github-square text-green fa-3x fa-fw"></i></a></p>
                <p class="text-end"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bk-logo-black.svg" alt="<?php echo get_bloginfo('name') ?>" width="125" class="img-fluid pb-3"></a></p>
                <br>
            </div>
        </div>
    </div>
    <div class="container text-center pt-1">
        <div class="row">
            <div class="col-md-12">
                <p class="small">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved. <br><a href="privacy-policy">Privacy</a></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
<!-- Another Custom WordPress theme by Benjamin Kaminski Consulting -->

</html>