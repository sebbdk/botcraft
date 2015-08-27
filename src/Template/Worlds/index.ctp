<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New World'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schematics'), ['controller' => 'Schematics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schematic'), ['controller' => 'Schematics', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="worlds index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th><?= $this->Paginator->sort('schematic_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($worlds as $world): ?>
        <tr>
            <td><?= h($world->id) ?></td>
            <td><?= h($world->slug) ?></td>
            <td>
                <?= $world->has('schematic') ? $this->Html->link($world->schematic->slug, ['controller' => 'Schematics', 'action' => 'view', $world->schematic->id]) : '' ?>
            </td>
            <td><?= h($world->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $world->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $world->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $world->id], ['confirm' => __('Are you sure you want to delete # {0}?', $world->id)]) ?>
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
