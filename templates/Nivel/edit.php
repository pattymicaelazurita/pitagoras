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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $nivel->idNivel],
                ['confirm' => __('¿Está seguro que desea eliminar el nivel con identificador # {0}?', $nivel->idNivel), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Niveles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nivel form content">
            <?= $this->Form->create($nivel) ?>
            <fieldset>
                <legend><?= __('Editar Nivel') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('temas');
                    echo $this->Form->control('idCiencia');
                ?>
            </fieldset>
            <?= $this->Form->button(__('actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
