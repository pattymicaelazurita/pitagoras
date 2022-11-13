<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciencium $ciencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Editar Ciencia'), ['action' => 'edit', $ciencium->idCiencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Ciencia'), ['action' => 'delete', $ciencium->idCiencia], ['confirm' => __('¿Está seguro que desea eliminar la ciencia # {0}?', $ciencium->idCiencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Ciencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Ciencia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciencia view content">
            <h3><?= h($ciencium->idCiencia) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($ciencium->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ciencia') ?></th>
                    <td><?= $this->Number->format($ciencium->idCiencia) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
