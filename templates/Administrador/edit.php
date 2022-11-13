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
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $administrador->idAdministrador],
                ['confirm' => __('¿Está seguro que desea eliminar al administrador # {0}?', $administrador->idAdministrador), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Administradores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="administrador form content">
            <?= $this->Form->create($administrador) ?>
            <fieldset>
                <legend><?= __('Editar Administrador') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('contrasenia');
                    echo $this->Form->control('correo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Actualizar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
