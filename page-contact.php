<?php
$title = get_field('title');
$text = get_field('text');
$linkedIn = get_field('linkedin');
$facebook = get_field('facebook');
$twitter = get_field('twitter');
get_header();?>
    <div class=title-text>
    <h1> <?php echo $title; ?></h1>
    <p><?php echo $text; ?> </p>
    </div>

    <div class="contactLinks">
    <a href="<?php echo $linkedIn;?>" class="social-icon si-rounded si-small si-linkedin">
        <h1 class="bi bi-linkedin"></h1>
    </a>
    <a href="<?php echo $facebook;?>" class="social-icon si-rounded si-small si-linkedin">
        <h1 class="bi bi-facebook"></h1>
    </a>
    <a href="<?php echo $twitter;?>" class="social-icon si-rounded si-small si-linkedin">
        <h1 class="bi bi-twitter"></h1>
    </a>
    </div>
<?php
get_footer();