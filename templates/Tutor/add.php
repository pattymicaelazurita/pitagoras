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
            <?= $this->Html->link(__('Lista de Tutores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tutor form content">
            <?= $this->Form->create($tutor) ?>
            <fieldset>
                <legend><?= __('Agregar Tutor') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('password');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('cedula');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Agregar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
