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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $estudiante->idEstudiante],
                ['confirm' => __('¿Está seguro que desea eliminar al estudiante # {0}?', $estudiante->idEstudiante), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Estudiantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudiante form content">
            <?= $this->Form->create($estudiante) ?>
            <fieldset>
                <legend><?= __('Editar Estudiante') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('password');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('cedula');
                    echo $this->Form->control('idTutor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
