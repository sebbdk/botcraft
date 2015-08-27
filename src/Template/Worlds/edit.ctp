<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $world->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $world->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Worlds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schematics'), ['controller' => 'Schematics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schematic'), ['controller' => 'Schematics', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="worlds form large-10 medium-9 columns">
    <?= $this->Form->create($world) ?>
    <fieldset>
        <legend><?= __('Edit World') ?></legend>
        <?php
            echo $this->Form->input('slug');
            echo $this->Form->input('schematic_id', ['options' => $schematics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
