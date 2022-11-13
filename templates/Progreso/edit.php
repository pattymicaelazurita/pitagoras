<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progreso $progreso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $progreso->idProgreso],
                ['confirm' => __('Are you sure you want to delete # {0}?', $progreso->idProgreso), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Progreso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progreso form content">
            <?= $this->Form->create($progreso) ?>
            <fieldset>
                <legend><?= __('Edit Progreso') ?></legend>
                <?php
                    echo $this->Form->control('idNivelAlcanzado');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('puntajeActual');
                    echo $this->Form->control('idEstudiante');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
