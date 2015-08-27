<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Schematic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Worlds'), ['controller' => 'Worlds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New World'), ['controller' => 'Worlds', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="schematics index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($schematics as $schematic): ?>
        <tr>
            <td><?= h($schematic->id) ?></td>
            <td><?= h($schematic->slug) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $schematic->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schematic->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schematic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schematic->id)]) ?>
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
