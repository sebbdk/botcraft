<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Bot'), ['action' => 'edit', $bot->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bot'), ['action' => 'delete', $bot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bot->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bots'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bot'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bots view large-10 medium-9 columns">
    <h2><?= h($bot->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($bot->slug) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($bot->id) ?></p>
            <h6 class="subheader"><?= __('X') ?></h6>
            <p><?= $this->Number->format($bot->x) ?></p>
            <h6 class="subheader"><?= __('Y') ?></h6>
            <p><?= $this->Number->format($bot->y) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Inventory') ?></h6>
            <?= $this->Text->autoParagraph(h($bot->inventory)) ?>
        </div>
    </div>
</div>
