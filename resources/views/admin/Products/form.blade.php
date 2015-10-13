<?php

$groupSelect = array(''=>'');

foreach ($groups as $group) {
	$groupSelect[$group->id] = $group->name;
}

echo '<div><a href="'.route($route).'">back</a></div>';
echo '<br/>';
echo Form::text('name', null, ['class'=>'input-name']);

echo '<br/>';
// echo Form::text('group', null, ['class'=>'input-group']);
echo Form::select('group', $groupSelect, null);
echo '<br/>';
echo Form::submit('Update product', ['class1'=>'btn-update']);