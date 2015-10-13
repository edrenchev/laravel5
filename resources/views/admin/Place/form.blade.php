<?php

echo '<div><a href="'.route($route).'">back</a></div>';
echo '<br/>';

echo Form::text('lat', null, ['class'=>'input-name']);
echo '<br/>';
echo Form::text('lng', null, ['class'=>'input-name']);
echo '<br/>';
echo Form::text('name', null, ['class'=>'input-name']);
echo '<br/>';
echo Form::text('address', null, ['class'=>'input-name']);
echo '<br/>';

if(isset($data)) {
	echo $data->updated_at . '<br/>';
	echo $data->created_at;
}

//echo '<button class="btn btn-primary" onclick="history.go(-1)">« Back</button>';
echo '<br/>';
echo Form::submit('Update product', ['class1'=>'btn-update']);