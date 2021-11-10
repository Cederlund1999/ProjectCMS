<?php
$title = get_field('title');
$text = get_field('text');
$getImage1 = get_field('image');
$getImage2 = get_field('image2');
$image1 = $getImage1['sizes']['large'];
$image2 = $getImage2['sizes']['large'];
get_header();?>
<div class=title-text>
    <h1><?php echo $title;?></h1>
    <p><?php echo $text;?></p>
</div>
<div class="images">
    <img class="img"src ="<?php echo $image1;?>">
    <img class="img"src ="<?php echo $image2;?>">
</div>
<?php
get_footer();


