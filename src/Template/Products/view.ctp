<div class="single-product">
<h3>Tarkemmat tuotetiedot</h3>
<ul class="pricing-table">
    <li class="title"><?= h($product->title) ?></li>
    <li class="price"><?= h($product->price) ?></li>
    <li class="description">
        <?= $this->Text->truncate($product->description, 120, ['ellipsis' => '...', 'exact' => false]) ?>
        <br />
        <br />
        <?= $this->Html->link('Lue lisää', ['action' => 'view', $product->slug]) ?>
        <br />
        <a href="#" class="button round secondary small buy">Lisää koriin</a>
    </li>
    <li class="bullet-item product-number">Tuotenro. <?= $product->product_number ?></li>
</ul>
    <?= $this->Html->link(
        '<span class="fas fa-arrow-left"></span>&nbsp;Palaa takaisin</span>',
        ['controller' => 'Products', 'action' => 'index'],
        ['escape' => false]
    ) ?>
</div>
