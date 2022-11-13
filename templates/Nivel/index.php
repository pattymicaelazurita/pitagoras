<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nivel> $nivel
 */
?>
<div class="nivel index content">
    <?= $this->Html->link(__('Nuevo Nivel'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nivel') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Nivel') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Temas') ?></th>
                    <th><?= $this->Paginator->sort('id Ciencia') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
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
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $nivel->idNivel]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $nivel->idNivel]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $nivel->idNivel], ['confirm' => __('¿Está seguro que desea eliminar el nivel con identificador # {0}?', $nivel->idNivel)]) ?>
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
