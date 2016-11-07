<link rel="stylesheet" type="text/css" href="css/style.css">

<ul id="product_details">
   

<?php foreach($product as $product) : ?>
    
    <?php //var_dump($category); ?>
    <li>
        <?php echo $product['name']; ?>
    </li>
    <li>
        <?php echo $product['description']; ?>
    </li>
    <li>
        <?php echo $product["price"]." CZK"; ?>
    </li>
<?php endforeach; ?>
</ul>