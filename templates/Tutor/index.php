<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tutor> $tutor
 */
?>
<div class="tutor index content">
    <?= $this->Html->link(__('Nuevo Tutor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tutor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Tutor') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Contraseña') ?></th>
                    <th><?= $this->Paginator->sort('Correo') ?></th>
                    <th><?= $this->Paginator->sort('Fecha de Nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('Cédula') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
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
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $tutor->idTutor]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tutor->idTutor]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $tutor->idTutor], ['confirm' => __('¿Está seguro que quiere eliminar al tutor # {0}?', $tutor->idTutor)]) ?>
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
