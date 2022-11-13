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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ciencium->idCiencia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ciencium->idCiencia), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ciencia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciencia form content">
            <?= $this->Form->create($ciencium) ?>
            <fieldset>
                <legend><?= __('Edit Ciencium') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
