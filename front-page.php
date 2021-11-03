<?php
$title = get_field('title');
$desc = get_field('desc');
$getImage = get_field('image');
$image = $getImage['sizes']['large'];
$link = get_field('imageLink');
get_header();
?>
<h1><?php echo $title;?></h1>
<div><?php echo $desc;?></div>
<a href="<?php echo $link;?>"><img src ="<?php echo $image;?>"></a>

<?php
get_footer();