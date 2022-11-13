<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Progreso> $progreso
 */
?>
<div class="progreso index content">
    <?= $this->Html->link(__('Nuevo Progreso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Progreso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Progreso') ?></th>
                    <th><?= $this->Paginator->sort('id Nivel Alcanzado') ?></th>
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                    <th><?= $this->Paginator->sort('Puntaje Actual') ?></th>
                    <th><?= $this->Paginator->sort('id Estudiante') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($progreso as $progreso): ?>
                <tr>
                    <td><?= $this->Number->format($progreso->idProgreso) ?></td>
                    <td><?= $this->Number->format($progreso->idNivelAlcanzado) ?></td>
                    <td><?= h($progreso->fecha) ?></td>
                    <td><?= $this->Number->format($progreso->puntajeActual) ?></td>
                    <td><?= $this->Number->format($progreso->idEstudiante) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $progreso->idProgreso]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $progreso->idProgreso]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $progreso->idProgreso], ['confirm' => __('¿Está seguro que desea eliminar el progreso con identificador # {0}?', $progreso->idProgreso)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('previo')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('final') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>
