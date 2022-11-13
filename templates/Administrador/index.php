<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Administrador> $administrador
 */
?>
<div class="administrador index content">
    <?= $this->Html->link(__('Nuevo Administrador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Administrador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Administrador') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Contraseña') ?></th>
                    <th><?= $this->Paginator->sort('Correo') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
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
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $administrador->idAdministrador]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $administrador->idAdministrador]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $administrador->idAdministrador], ['confirm' => __('¿Está seguro que desea eliminar al administrador # {0}?', $administrador->idAdministrador)]) ?>
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
