<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nivel> $nivel
 */
?>
<div class="nivel index content">
    <?= $this->Html->link(__('New Nivel'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nivel') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idNivel') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('temas') ?></th>
                    <th><?= $this->Paginator->sort('idCiencia') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nivel as $nivel): ?>
                <tr>
                    <td><?= $this->Number->format($nivel->idNivel) ?></td>
                    <td><?= h($nivel->nombre) ?></td>
                    <td><?= h($nivel->temas) ?></td>
                    <td><?= $this->Number->format($nivel->idCiencia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nivel->idNivel]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nivel->idNivel]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nivel->idNivel], ['confirm' => __('Are you sure you want to delete # {0}?', $nivel->idNivel)]) ?>
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
