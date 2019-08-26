<div class="content">
    <h3>Lisää uusi tuote</h3>
    <?php
        echo $this->Form->create($product);
        echo $this->Form->control('title', ['label' => 'Tuotteen nimi']);
        echo $this->Form->control('description', ['label' => 'Anna tuotekuvaus'], ['rows' => '3']);
        echo $this->Form->control('price', ['label' => 'Hinta (€)']);
        echo $this->Form->control('product_number', ['label' => 'Tuotenumero (6 merkkiä)']);
        echo $this->Form->button('Tallenna tuote', ['class' => 'button round secondary small save']);
        echo $this->Form->end();
    ?>
</div>
