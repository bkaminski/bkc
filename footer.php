<footer class="footer">
    <a href="javascript:" class="text-center" id="back-up" title="Back to Top">
        <i class="fa fa-chevron-up fa-lg text-green"></i>
    </a>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4 bkc--info">
                <h3>Benjamin Kaminski<br> Consulting</h3>
                <p>Smyrna, Delaware, USA<br>
                    (302) 333-7462</p>
                <p><a href="contact">Contact</a> | <a href="privacy-policy">Privacy</a></p>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bk-logo-black.svg" alt="<?php echo get_bloginfo('name') ?>" width="125" class="img-fluid pb-3">
                </a>
                <br>
                <a target="noopener" href="https://www.linkedin.com/in/kaminskiben/"><i class="fab fa-linkedin text-green fa-3x fa-fw"></i></a> <a target="noopener" href="https://github.com/bkaminski"><i class="fab fa-github-square text-green fa-3x fa-fw"></i></a>
            </div>
            <div class="col-md-4 pb-4">
                <div id="btcData"></div>
                <div class="text-center pt-4">
                    <code class="text-white">I enjoy Bitcoin donations!</code>
                    <br>
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bkcbtcqr.png" alt="Bitcoin QR Code" class="img-fluid">
                    <br>
                    <code class="text-green">3EWgQDw5X4zvPiJLeadQHQhtd7TStLDtWQ</code>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <h3>Nerdy Quotes</h3>
                <?php echo get_template_part('parts/page', 'nerdy-quotes'); ?>
            </div>
        </div>
    </div>
    <div class="container text-center pt-5">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
<!-- Another Custom WordPress theme by Benjamin Kaminski Consulting -->

</html>