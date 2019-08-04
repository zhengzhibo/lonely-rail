<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    <a href="mailto:<?php $this->user->mail(); ?>"><?php $this->user->mail(); ?></a>
</footer>

<?php $this->footer(); ?>
</body>
</html>
