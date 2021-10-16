<?php
/** @var \DVCampus\Catalog\Model\Product\Entity $product */
?>
<div class="product-page">
    <img src="/product-placeholder.png" alt="<?= $product->getName() ?>" width="300"/>
    <h1><?= $product->getName() ?></h1>
    <p><?= $product->getDescription() ?></p>
    <span>$<?= $product->getPrice() ?></span>
    <button type="button">Add To Cart</button>
</div>