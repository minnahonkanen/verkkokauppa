<div>
    <h3>Kirjaudu sisään</h3>
    <?= $this->Form->create() ?>
    <?= $this->Form->control('email', ['label' => 'Sähköpostiosoite']) ?>
    <?= $this->Form->control('password', ['label' => 'Salasana']) ?>
    <?= $this->Form->button('Kirjaudu sisään', ['class' => 'button round secondary small save']); ?>
    <?= $this->Form->end() ?>
</div>
