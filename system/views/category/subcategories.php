<?php

?>
<link rel="stylesheet" type="text/css" href="css/style.css">


<ul id="subcategories">
   <?php //var_dump($categories);?>
    <?php foreach($categories as $category) : ?>
    <?php $cat_id = "?cat_id=". $category['id'] ."&page=product_list"; ?>
        <?php //var_dump($category); ?>
        <li>
           <a href=<?php echo $cat_id; ?>><?php echo $category['name']; ?></a>
        </li>
    <?php endforeach; ?>
</ul>
