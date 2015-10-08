<?php

$url = route('admin.products');
echo Form::model($product, ['url' => $url.'/'.$product->id, 'method'=>'PATCH']);
echo Form::text('name', null, ['class'=>'input-name']);
echo '<br/>';
echo Form::text('group', null, ['class'=>'input-group']);
echo '<br/>';
echo Form::submit('Update product', ['class1'=>'btn-update']);
echo Form::close();


?>

create and edit items table <br/>
<br/>
1. input1<br/>
2. input2<br/>
3. input3<br/>