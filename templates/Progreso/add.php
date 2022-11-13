<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progreso $progreso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Lista de Progresos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progreso form content">
            <?= $this->Form->create($progreso) ?>
            <fieldset>
                <legend><?= __('Agregar Progreso') ?></legend>
                <?php
                    echo $this->Form->control('idNivelAlcanzado');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('puntajeActual');
                    echo $this->Form->control('idEstudiante');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Agregar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
