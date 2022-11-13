<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivel $nivel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Lista de Niveles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nivel form content">
            <?= $this->Form->create($nivel) ?>
            <fieldset>
                <legend><?= __('Agregar Nivel') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('temas');
                    echo $this->Form->control('idCiencia');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Agregar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
