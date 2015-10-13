
<?php 
	if(count($errors) > 0) {
		foreach ($errors->all() as $error) {
			echo <<<EOD
	<div>{$error}</div>
EOD;
		}
		
	}
?>

<?=Form::model($data, ['route' => [$route.'.update',$data->id], 'method'=>'PATCH']);?>
@include($route.'.form')
<?=Form::close();?>
<br/>
<?=deleteBtn([$route.'.destroy',$data->id], 'DELETE');?>

create and edit items table <br/>
<br/>
1. input1<br/>
2. input2<br/>
3. input3<br/>

<?php 

// var_dump($errors);
?>