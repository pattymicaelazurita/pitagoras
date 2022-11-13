<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tutor> $tutor
 */
?>
<div class="tutor index content">
    <?= $this->Html->link(__('New Tutor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tutor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTutor') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('contrasenia') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('cedula') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tutor as $tutor): ?>
                <tr>
                    <td><?= $this->Number->format($tutor->idTutor) ?></td>
                    <td><?= h($tutor->nombre) ?></td>
                    <td><?= h($tutor->contrasenia) ?></td>
                    <td><?= h($tutor->correo) ?></td>
                    <td><?= h($tutor->fechaNacimiento) ?></td>
                    <td><?= h($tutor->cedula) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tutor->idTutor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tutor->idTutor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tutor->idTutor], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->idTutor)]) ?>
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
