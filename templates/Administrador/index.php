<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Administrador> $administrador
 */
?>
<div class="administrador index content">
    <?= $this->Html->link(__('New Administrador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Administrador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idAdministrador') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('contrasenia') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($administrador as $administrador): ?>
                <tr>
                    <td><?= $this->Number->format($administrador->idAdministrador) ?></td>
                    <td><?= h($administrador->nombre) ?></td>
                    <td><?= h($administrador->contrasenia) ?></td>
                    <td><?= h($administrador->correo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $administrador->idAdministrador]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrador->idAdministrador]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrador->idAdministrador], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->idAdministrador)]) ?>
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
