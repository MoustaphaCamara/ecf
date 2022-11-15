<?php
get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <main>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </main>
    <?php endwhile; ?>
<?php else : ?>
    <h1>Pas de pages à afficher</h1>
<?php endif; ?>

<?php
get_footer();
?>