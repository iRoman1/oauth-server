<?php /**
 * @var \Cake\View\View $this
 */
?><h1><?= $authParams['client']->getName() ?> would like to access:</h1>

<ul>
    <?php foreach ($authParams['scopes'] as $scope): ?>
        <li>
            <?= $scope->getId() ?>: <?= $scope->getDescription() ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php
echo $this->Form->create(null);
echo $this->Form->control('Approve', [
    'name' => 'authorization',
    'type' => 'submit'
]);
echo $this->Form->control('Deny', [
    'name' => 'authorization',
    'type' => 'submit'
]);
echo $this->Form->end();
