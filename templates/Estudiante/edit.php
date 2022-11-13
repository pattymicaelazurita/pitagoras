<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estudiante->idEstudiante],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estudiante->idEstudiante), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estudiante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudiante form content">
            <?= $this->Form->create($estudiante) ?>
            <fieldset>
                <legend><?= __('Edit Estudiante') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('contrasenia');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('cedula');
                    echo $this->Form->control('idTutor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
