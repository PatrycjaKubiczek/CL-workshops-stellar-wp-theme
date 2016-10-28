<div class="spotlight">
    <div class="content">
        <header class="major">
            <h2>Wpis porfolio <?php the_title(); ?></h2>
        </header>
        <strong>Wykonano w czasie: <?php echo(types_render_field('czas-wykonania'));
            ?>
            Typ projektu: <?php echo(types_render_field('typ-projektu'));
            ?>
            , <?php echo(types_render_field('odnosnik'));
            ?></strong>
        <p>
            <?php the_content(); ?>
        </p>
        <ul class="actions">
            <li><a href="<?php the_permalink(); ?>" class="button">Learn More</a></li>
        </ul>
    </div>
</div>