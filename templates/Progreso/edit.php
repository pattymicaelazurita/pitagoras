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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $progreso->idProgreso],
                ['confirm' => __('¿Está seguro que desea eliminar el progreso con identificador # {0}?', $progreso->idProgreso), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Progresos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progreso form content">
            <?= $this->Form->create($progreso) ?>
            <fieldset>
                <legend><?= __('Editar Progreso') ?></legend>
                <?php
                    echo $this->Form->control('idNivelAlcanzado');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('puntajeActual');
                    echo $this->Form->control('idEstudiante');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
