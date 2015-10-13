<?php

$groupSelect = array(''=>'');

foreach ($groups as $group) {
	$groupSelect[$group->id] = $group->name;
}

$placeSelect = array(''=>'');
foreach ($places as $v) {
	$placeSelect[$v->id] = $v->name;
}

echo '<div><a href="'.route($route).'">back</a></div>';
echo '<br/>';

echo '<br/>';
echo Form::text('name', null, ['class'=>'input-name']);
echo '<br/>';
echo Form::select('group', $groupSelect, null);
echo '<br/>';
echo Form::select('place_id', $placeSelect, null);
echo '<br/>';

if(isset($data)) {
	echo $data->updated_at . '<br/>';
	echo $data->created_at;
}

//echo '<button class="btn btn-primary" onclick="history.go(-1)">« Back</button>';
echo '<br/>';
echo Form::submit('Update product', ['class1'=>'btn-update']);