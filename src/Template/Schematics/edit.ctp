<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schematic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schematic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schematics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Worlds'), ['controller' => 'Worlds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New World'), ['controller' => 'Worlds', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="schematics form large-10 medium-9 columns">
    <?= $this->Form->create($schematic) ?>
    <fieldset>
        <legend><?= __('Edit Schematic') ?></legend>
        <?php
            echo $this->Form->input('slug');
            echo $this->Form->input('schematic');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
