<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estudiante $estudiante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Editar Estudiante'), ['action' => 'edit', $estudiante->idEstudiante], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Estudiante'), ['action' => 'delete', $estudiante->idEstudiante], ['confirm' => __('¿Está seguro que desea eliminar al estudiante # {0}?', $estudiante->idEstudiante), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Estudiantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Estudiante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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
                    <th><?= __('Contraseña') ?></th>
                    <td><?= h($estudiante->contrasenia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($estudiante->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cédula') ?></th>
                    <td><?= h($estudiante->cedula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Estudiante') ?></th>
                    <td><?= $this->Number->format($estudiante->idEstudiante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Tutor') ?></th>
                    <td><?= $this->Number->format($estudiante->idTutor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Nacimiento') ?></th>
                    <td><?= h($estudiante->fechaNacimiento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
