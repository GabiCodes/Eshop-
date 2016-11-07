<div class="row">

    <?php foreach($products as $product) : ?>
        <?php  $product_id = "?product_id=". $product['id'] ."&page=product_details"; ?>
        <div class="col-xs-4">
            <a href=<?php echo $product_id; ?>>
            <div class="jumbotron topprdimg" id="topproductcard">
            <div class="row"><?php echo $product['name']; ?></div>
            <div class="row">
                <img src=<?php echo "./media/product/" . $product['product_id'] . "/" . $product['filename'] ?>>
            </div>
                <div class="row">
            <div class="price"><?php echo $product['price']; ?> CZK</div>
                </div>
        </div>
            </a>
        </div>
    <?php endforeach; ?>

</div>