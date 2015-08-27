<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Bot Task'), ['action' => 'edit', $botTask->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bot Task'), ['action' => 'delete', $botTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $botTask->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bot Tasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bot Task'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bots'), ['controller' => 'Bots', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bot'), ['controller' => 'Bots', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="botTasks view large-10 medium-9 columns">
    <h2><?= h($botTask->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($botTask->id) ?></p>
            <h6 class="subheader"><?= __('Bot') ?></h6>
            <p><?= $botTask->has('bot') ? $this->Html->link($botTask->bot->slug, ['controller' => 'Bots', 'action' => 'view', $botTask->bot->id]) : '' ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($botTask->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($botTask->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Executed') ?></h6>
            <p><?= $botTask->executed ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Command') ?></h6>
            <?= $this->Text->autoParagraph(h($botTask->command)) ?>
        </div>
    </div>
</div>
