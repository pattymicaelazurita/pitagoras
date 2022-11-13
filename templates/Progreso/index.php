<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Progreso> $progreso
 */
?>
<div class="progreso index content">
    <?= $this->Html->link(__('New Progreso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Progreso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idProgreso') ?></th>
                    <th><?= $this->Paginator->sort('idNivelAlcanzado') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('puntajeActual') ?></th>
                    <th><?= $this->Paginator->sort('idEstudiante') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $progreso->idProgreso]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $progreso->idProgreso]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $progreso->idProgreso], ['confirm' => __('Are you sure you want to delete # {0}?', $progreso->idProgreso)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
