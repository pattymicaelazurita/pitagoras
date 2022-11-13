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
            <?= $this->Html->link(__('Edit Progreso'), ['action' => 'edit', $progreso->idProgreso], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Progreso'), ['action' => 'delete', $progreso->idProgreso], ['confirm' => __('Are you sure you want to delete # {0}?', $progreso->idProgreso), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Progreso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Progreso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="progreso view content">
            <h3><?= h($progreso->idProgreso) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdProgreso') ?></th>
                    <td><?= $this->Number->format($progreso->idProgreso) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdNivelAlcanzado') ?></th>
                    <td><?= $this->Number->format($progreso->idNivelAlcanzado) ?></td>
                </tr>
                <tr>
                    <th><?= __('PuntajeActual') ?></th>
                    <td><?= $this->Number->format($progreso->puntajeActual) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstudiante') ?></th>
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
