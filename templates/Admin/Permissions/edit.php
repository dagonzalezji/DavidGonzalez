<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permission->permision_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permission->permision_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="permissions form content">
            <?= $this->Form->create($permission) ?>
            <fieldset>
                <legend><?= __('Edit Permission') ?></legend>
                <?php
                    echo $this->Form->control('id_user');
                    echo $this->Form->control('id_report');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
