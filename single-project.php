<?php
get_header();
?>

<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'project' );

    // the_post_navigation(
    // 	array(
    // 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'khanehZar ) . '</span> <span class="nav-title">%title</span>',
    // 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'khanehZar ) . '</span> <span class="nav-title">%title</span>',
    // 	)
    // );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->


<?php
get_footer();
?>