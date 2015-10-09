<?php

echo Form::text('name', null, ['class'=>'input-name']);
echo '<br/>';
echo Form::text('group', null, ['class'=>'input-group']);
echo '<br/>';
echo Form::submit('Update product', ['class1'=>'btn-update']);