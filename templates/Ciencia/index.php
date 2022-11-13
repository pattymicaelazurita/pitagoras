<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ciencium> $ciencia
 */
?>
<div class="ciencia index content">
    <?= $this->Html->link(__('Nueva ciencia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ciencia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Ciencia') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ciencia as $ciencium): ?>
                <tr>
                    <td><?= $this->Number->format($ciencium->idCiencia) ?></td>
                    <td><?= h($ciencium->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $ciencium->idCiencia]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ciencium->idCiencia]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $ciencium->idCiencia], ['confirm' => __('¿Está seguro que desea eliminar la ciencia # {0}?', $ciencium->idCiencia)]) ?>
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
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>
