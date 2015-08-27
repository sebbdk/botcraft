<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Bot Tasks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bots'), ['controller' => 'Bots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bot'), ['controller' => 'Bots', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="botTasks form large-10 medium-9 columns">
    <?= $this->Form->create($botTask) ?>
    <fieldset>
        <legend><?= __('Add Bot Task') ?></legend>
        <?php
            echo $this->Form->input('bot_id', ['options' => $bots]);
            echo $this->Form->input('command');
            echo $this->Form->input('executed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
