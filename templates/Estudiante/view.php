<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estudiante'), ['action' => 'edit', $estudiante->idEstudiante], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estudiante'), ['action' => 'delete', $estudiante->idEstudiante], ['confirm' => __('Are you sure you want to delete # {0}?', $estudiante->idEstudiante), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estudiante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estudiante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estudiante view content">
            <h3><?= h($estudiante->idEstudiante) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($estudiante->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrasenia') ?></th>
                    <td><?= h($estudiante->contrasenia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($estudiante->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cedula') ?></th>
                    <td><?= h($estudiante->cedula) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEstudiante') ?></th>
                    <td><?= $this->Number->format($estudiante->idEstudiante) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTutor') ?></th>
                    <td><?= $this->Number->format($estudiante->idTutor) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($estudiante->fechaNacimiento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
