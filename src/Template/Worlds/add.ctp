<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Worlds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schematics'), ['controller' => 'Schematics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schematic'), ['controller' => 'Schematics', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="worlds form large-10 medium-9 columns">
    <?= $this->Form->create($world) ?>
    <fieldset>
        <legend><?= __('Add World') ?></legend>
        <?php
            echo $this->Form->input('slug');
            echo $this->Form->input('schematic_id', ['options' => $schematics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
