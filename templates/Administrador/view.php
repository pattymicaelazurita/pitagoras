<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Administrador'), ['action' => 'edit', $administrador->idAdministrador], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Administrador'), ['action' => 'delete', $administrador->idAdministrador], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->idAdministrador), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Administrador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Administrador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="administrador view content">
            <h3><?= h($administrador->idAdministrador) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($administrador->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrasenia') ?></th>
                    <td><?= h($administrador->contrasenia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($administrador->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdAdministrador') ?></th>
                    <td><?= $this->Number->format($administrador->idAdministrador) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
