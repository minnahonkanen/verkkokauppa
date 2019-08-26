<button type='button' id='btn-sort-a' class="button round secondary small sort">Järjestä nimen mukaan</button>
<button type='button' id='btn-sort-b' class="button round secondary small sort">Järjestä tuotenumeron mukaan</button>
<div id="cakesDiv" class="frontpage-view content">

    <?php foreach ($products as $product): ?>
    <div class="cake">
        <ul id="cakeList" class="pricing-table">
            <li class="title"><?= $product->title ?></li>
            <li class="price"><?= $this->Number->currency($product->price, 'EUR') ?></li>
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
    </div>
    <?php endforeach; ?>
</div>
