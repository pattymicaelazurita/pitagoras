<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivel $nivel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opciones') ?></h4>
            <?= $this->Html->link(__('Editar Nivel'), ['action' => 'edit', $nivel->idNivel], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Nivel'), ['action' => 'delete', $nivel->idNivel], ['confirm' => __('¿Está seguro que desea eliminar el nivel con identificador # {0}?', $nivel->idNivel), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Niveles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Nivel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nivel view content">
            <h3><?= h($nivel->idNivel) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($nivel->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Temas') ?></th>
                    <td><?= h($nivel->temas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Nivel') ?></th>
                    <td><?= $this->Number->format($nivel->idNivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ciencia') ?></th>
                    <td><?= $this->Number->format($nivel->idCiencia) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
