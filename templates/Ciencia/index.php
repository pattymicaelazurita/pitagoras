<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ciencium> $ciencia
 */
?>
<div class="ciencia index content">
    <?= $this->Html->link(__('New Ciencium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ciencia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCiencia') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ciencia as $ciencium): ?>
                <tr>
                    <td><?= $this->Number->format($ciencium->idCiencia) ?></td>
                    <td><?= h($ciencium->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ciencium->idCiencia]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ciencium->idCiencia]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciencium->idCiencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ciencium->idCiencia)]) ?>
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
