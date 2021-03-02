<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->employees_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->employees_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employees_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($employee->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Las Name') ?></th>
                    <td><?= h($employee->las_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office') ?></th>
                    <td><?= h($employee->Office) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($employee->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employees Id') ?></th>
                    <td><?= $this->Number->format($employee->employees_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
