<?php
get_header();

?>
<div>
    <div class="projectPosts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php $image = get_field('image');
            $backgroundImage = $image['sizes']['large']; ?>
        <div class="projectCards">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $backgroundImage?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo the_title();?></h5>
                    <p class="card-text"><?php echo the_excerpt();?></p>
                    <a href="<?php echo the_permalink();?>" class="btn btn-primary">Go to project</a>
                </div>
            </div>
        </div>

<?php
        endwhile; else: ?>
            <p>Sorry, no posts found.<p></p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>

