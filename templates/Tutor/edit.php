<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $tutor->idTutor],
                ['confirm' => __('¿Está seguro que quiere eliminar al tutor # {0}?', $tutor->idTutor), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Tutores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tutor form content">
            <?= $this->Form->create($tutor) ?>
            <fieldset>
                <legend><?= __('Editar Tutor') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('password');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('cedula');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
