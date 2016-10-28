<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <!-- Introduction -->
    <section id="intro" class="main">
       <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <?php get_template_part( 'wpis-portfolio' ); ?>
        
        <?php endwhile ?>
        <?php endif; ?>
        <?php the_posts_pagination(); ?>
    </section>
</div>

<?php get_footer(); ?>		