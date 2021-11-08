<?php
$title = get_field('title');
$text = get_field('text');
$getImage1 = get_field('image');
$getImage2 = get_field('image2');
$image1 = $getImage1['sizes']['large'];
$image2 = $getImage2['sizes']['large'];
get_header();?>

    <h1><?php echo $title;?></h1>
    <div><?php echo $text;?></div>
    <img src ="<?php echo $image1;?>">
    <img src ="<?php echo $image2;?>">

<?php
get_footer();


