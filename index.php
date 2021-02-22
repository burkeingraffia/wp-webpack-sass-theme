<?php get_header(); ?>
<section id="main-content" class="main-content-archive">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>