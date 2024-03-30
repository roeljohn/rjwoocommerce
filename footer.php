<?php
/**
 * Similarly, footer.php in a file in the WordPress page hierarchy is used to build 
 * the footer section of a WordPress theme and called in the footer section of all the template files. 
 * The footer.php generally contains the copyright information, calls to JS files, widget areas that 
 * commonly have site navigation.
 */

?>
<footer class="py-3 my-4 border-top">
    <div class="container d-flex flex-wrap justify-content-between align-items-center ">
        <?php 
            get_template_part( 'template-parts/footer/footer-copyright' );

            get_template_part( 'template-parts/footer/footer-social' );
        ?>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>