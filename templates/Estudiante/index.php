<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estudiante> $estudiante
 */
?>
<div class="estudiante index content">
    <?= $this->Html->link(__('Nuevo Estudiante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estudiante') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id Estudiante') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Contraseña') ?></th>
                    <th><?= $this->Paginator->sort('Correo') ?></th>
                    <th><?= $this->Paginator->sort('Fecha de Nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('Cédula') ?></th>
                    <th><?= $this->Paginator->sort('id Tutor') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiante as $estudiante): ?>
                <tr>
                    <td><?= $this->Number->format($estudiante->idEstudiante) ?></td>
                    <td><?= h($estudiante->nombre) ?></td>
                    <td><?= h($estudiante->contrasenia) ?></td>
                    <td><?= h($estudiante->correo) ?></td>
                    <td><?= h($estudiante->fechaNacimiento) ?></td>
                    <td><?= h($estudiante->cedula) ?></td>
                    <td><?= $this->Number->format($estudiante->idTutor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $estudiante->idEstudiante]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estudiante->idEstudiante]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $estudiante->idEstudiante], ['confirm' => __('¿Está seguro que desea eliminar al estudiante # {0}?', $estudiante->idEstudiante)]) ?>
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
