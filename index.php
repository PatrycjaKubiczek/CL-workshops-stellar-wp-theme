<?php get_header(); ?>

<!-- Main -->
<div id="main">

    <!-- Introduction -->
    <section id="intro" class="main">
       <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="spotlight">
            <div class="content">
                <header class="major">
                    <h2><?php the_title(); ?></h2>
                </header>
                <p><?php the_content(); ?></p>
                <ul class="actions">
                    <li><a href="<?php the_permalink(); ?>" class="button">Learn More</a></li>
                </ul>
            </div>
            <span class="image"><?php the_post_thumbnail([500,300]); ?></span>
        </div>
        <?php endwhile ?>
        <?php endif; ?>
        <?php the_posts_pagination(); ?>

<!-- First Section -->
<section id="first" class="main special">
    <header class="major">
        <h2>Magna veroeros</h2>
    </header>
    
    <ul class="features">
       <?php 
        $args = ['post_type' => 'wpis-portfolio',
                'post_per_page' => 6
                ];
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <?php get_template_part( 'portfolioindex' ); ?>

        <?php endwhile ?> 
        
        
<!--
        <li>
            <span class="icon major style3 fa-copy"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class="icon major style5 fa-diamond"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
-->
    </ul>
    <footer class="major">
        <ul class="actions">
            <li><a href="generic.html" class="button">Learn More</a></li>
        </ul>
    </footer>
</section>
</section>
</div>
<?php get_footer(); ?>		