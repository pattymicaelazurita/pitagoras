<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
   
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Lista de Estudiantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudiante form content">
            <?= $this->Form->create($estudiante) ?>
            <fieldset>
                <legend><?= __('Agregar Estudiante') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('password');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('cedula');
                    echo $this->Form->control('idTutor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Agregar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
