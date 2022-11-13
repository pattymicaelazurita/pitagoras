<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivel $nivel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Nivel'), ['action' => 'edit', $nivel->idNivel], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Nivel'), ['action' => 'delete', $nivel->idNivel], ['confirm' => __('Are you sure you want to delete # {0}?', $nivel->idNivel), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Nivel'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Nivel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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
                    <th><?= __('IdNivel') ?></th>
                    <td><?= $this->Number->format($nivel->idNivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCiencia') ?></th>
                    <td><?= $this->Number->format($nivel->idCiencia) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
