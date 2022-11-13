<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tutor->idTutor],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->idTutor), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tutor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tutor form content">
            <?= $this->Form->create($tutor) ?>
            <fieldset>
                <legend><?= __('Edit Tutor') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('contrasenia');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('cedula');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
