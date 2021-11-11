<?php
$title = get_field('title');
$desc = get_field('desc');
$getImage = get_field('image');
$image = $getImage['sizes']['large'];
$link = get_field('imageLink');
get_header();
?>
<div class=title-text>
<h1><?php echo $title;?></h1>
<p><?php echo $desc;?></p>
</div>
<div class="images">
<a href="<?php echo $link;?>"><img class="img"src ="<?php echo $image;?>"></a>
</div>
</div>
<?php
get_footer();