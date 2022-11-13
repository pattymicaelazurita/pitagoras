<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tutor'), ['action' => 'edit', $tutor->idTutor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tutor'), ['action' => 'delete', $tutor->idTutor], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->idTutor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tutor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tutor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tutor view content">
            <h3><?= h($tutor->idTutor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tutor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrasenia') ?></th>
                    <td><?= h($tutor->contrasenia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($tutor->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cedula') ?></th>
                    <td><?= h($tutor->cedula) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTutor') ?></th>
                    <td><?= $this->Number->format($tutor->idTutor) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($tutor->fechaNacimiento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
