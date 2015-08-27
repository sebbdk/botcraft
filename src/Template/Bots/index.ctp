<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bot'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="bots index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th><?= $this->Paginator->sort('x') ?></th>
            <th><?= $this->Paginator->sort('y') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bots as $bot): ?>
        <tr>
            <td><?= $this->Number->format($bot->id) ?></td>
            <td><?= h($bot->slug) ?></td>
            <td><?= $this->Number->format($bot->x) ?></td>
            <td><?= $this->Number->format($bot->y) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bot->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bot->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bot->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
