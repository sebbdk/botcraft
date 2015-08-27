<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Schematic'), ['action' => 'edit', $schematic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schematic'), ['action' => 'delete', $schematic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schematic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schematics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schematic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Worlds'), ['controller' => 'Worlds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New World'), ['controller' => 'Worlds', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="schematics view large-10 medium-9 columns">
    <h2><?= h($schematic->slug) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($schematic->id) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($schematic->slug) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Schematic') ?></h6>
            <?= $this->Text->autoParagraph(h($schematic->schematic)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Worlds') ?></h4>
    <?php if (!empty($schematic->worlds)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Schematic Id') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($schematic->worlds as $worlds): ?>
        <tr>
            <td><?= h($worlds->id) ?></td>
            <td><?= h($worlds->slug) ?></td>
            <td><?= h($worlds->schematic_id) ?></td>
            <td><?= h($worlds->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Worlds', 'action' => 'view', $worlds->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Worlds', 'action' => 'edit', $worlds->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Worlds', 'action' => 'delete', $worlds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $worlds->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
