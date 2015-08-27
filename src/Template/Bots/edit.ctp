<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bot->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bots'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bots form large-10 medium-9 columns">
    <?= $this->Form->create($bot) ?>
    <fieldset>
        <legend><?= __('Edit Bot') ?></legend>
        <?php
            echo $this->Form->input('slug');
            echo $this->Form->input('x');
            echo $this->Form->input('y');
            echo $this->Form->input('inventory');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
