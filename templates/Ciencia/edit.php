<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciencium $ciencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $ciencium->idCiencia],
                ['confirm' => __('¿Está seguro que desea eliminar la ciencia # {0}?', $ciencium->idCiencia), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Ciencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciencia form content">
            <?= $this->Form->create($ciencium) ?>
            <fieldset>
                <legend><?= __('Editar Ciencia') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
