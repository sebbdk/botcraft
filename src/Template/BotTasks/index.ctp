<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bot Task'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bots'), ['controller' => 'Bots', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bot'), ['controller' => 'Bots', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="botTasks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('bot_id') ?></th>
            <th><?= $this->Paginator->sort('executed') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($botTasks as $botTask): ?>
        <tr>
            <td><?= h($botTask->id) ?></td>
            <td>
                <?= $botTask->has('bot') ? $this->Html->link($botTask->bot->slug, ['controller' => 'Bots', 'action' => 'view', $botTask->bot->id]) : '' ?>
            </td>
            <td><?= h($botTask->executed) ?></td>
            <td><?= h($botTask->created) ?></td>
            <td><?= h($botTask->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $botTask->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $botTask->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $botTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $botTask->id)]) ?>
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
