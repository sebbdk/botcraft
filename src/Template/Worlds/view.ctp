<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit World'), ['action' => 'edit', $world->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete World'), ['action' => 'delete', $world->id], ['confirm' => __('Are you sure you want to delete # {0}?', $world->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Worlds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New World'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schematics'), ['controller' => 'Schematics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schematic'), ['controller' => 'Schematics', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="worlds view large-10 medium-9 columns">
    <h2><?= h($world->slug) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($world->id) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($world->slug) ?></p>
            <h6 class="subheader"><?= __('Schematic') ?></h6>
            <p><?= $world->has('schematic') ? $this->Html->link($world->schematic->slug, ['controller' => 'Schematics', 'action' => 'view', $world->schematic->id]) : '' ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($world->created) ?></p>
        </div>
    </div>
</div>
