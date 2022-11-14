<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Editar Administrador'), ['action' => 'edit', $administrador->idAdministrador], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Administrador'), ['action' => 'delete', $administrador->idAdministrador], ['confirm' => __('¿Está seguro que desea eliminar al administrador # {0}?', $administrador->idAdministrador), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Administradores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Administrador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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
                    <th><?= __('Contraseña') ?></th>
                    <td><?= h($administrador->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($administrador->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Administrador') ?></th>
                    <td><?= $this->Number->format($administrador->idAdministrador) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
