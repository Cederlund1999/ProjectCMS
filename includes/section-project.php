<?php
get_header();
$getProjectImage = get_field('projectimage');
$projectImage = $getProjectImage['sizes']['large'];
$getProjectImage2 = get_field('projectimage2');
$projectImage2 = $getProjectImage2['sizes']['large'];
?>
<div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <div class="images">
            <img class="img" src="<?php echo $projectImage;?>">
            <img class="img" src="<?php echo $projectImage2;?>">
        </div>

    <?php endwhile; else: ?>
        <p>Sorry, no posts found.<p></p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>
