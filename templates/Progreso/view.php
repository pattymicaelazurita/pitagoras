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
            <?= $this->Html->link(__('Editar Progreso'), ['action' => 'edit', $progreso->idProgreso], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Progreso'), ['action' => 'delete', $progreso->idProgreso], ['confirm' => __('¿Está seguro que desea eliminar el progreso con identificador # {0}?', $progreso->idProgreso), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Progresos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Progreso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progreso view content">
            <h3><?= h($progreso->idProgreso) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Progreso') ?></th>
                    <td><?= $this->Number->format($progreso->idProgreso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Nivel Alcanzado') ?></th>
                    <td><?= $this->Number->format($progreso->idNivelAlcanzado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntaje Actual') ?></th>
                    <td><?= $this->Number->format($progreso->puntajeActual) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Estudiante') ?></th>
                    <td><?= $this->Number->format($progreso->idEstudiante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($progreso->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
