<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciencium $ciencium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ciencium'), ['action' => 'edit', $ciencium->idCiencia], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ciencium'), ['action' => 'delete', $ciencium->idCiencia], ['confirm' => __('Are you sure you want to delete # {0}?', $ciencium->idCiencia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ciencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ciencium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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
                    <th><?= __('IdCiencia') ?></th>
                    <td><?= $this->Number->format($ciencium->idCiencia) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
