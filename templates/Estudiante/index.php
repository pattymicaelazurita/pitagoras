<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estudiante> $estudiante
 */
?>
<div class="estudiante index content">
    <?= $this->Html->link(__('New Estudiante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estudiante') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEstudiante') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('contrasenia') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('cedula') ?></th>
                    <th><?= $this->Paginator->sort('idTutor') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estudiante->idEstudiante]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estudiante->idEstudiante]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estudiante->idEstudiante], ['confirm' => __('Are you sure you want to delete # {0}?', $estudiante->idEstudiante)]) ?>
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
