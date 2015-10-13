<?php

echo '<div><a href="'.route($route).'">back</a></div>';
echo '<br/>';
echo Form::text('name', null, ['class'=>'input-name']);

//echo '<button class="btn btn-primary" onclick="history.go(-1)">« Back</button>';
echo '<br/>';
echo Form::submit('Update product', ['class1'=>'btn-update']);