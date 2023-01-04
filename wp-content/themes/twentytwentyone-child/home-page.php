<?php /* Template Name: Home page */ ?>

<?php
get_header();
?>

<div class="home-page">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>

</div>





<?php
get_footer();
?>