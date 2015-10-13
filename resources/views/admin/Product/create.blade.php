
<?php 
	if(count($errors) > 0) {
		foreach ($errors->all() as $error) {
			echo <<<EOD
	<div>{$error}</div>
EOD;
		}
		
	}
?>

<?=Form::open(['route' => $route.'.store']);?>

@include($route.'.form')

<?=Form::close();?>

create and edit items table <br/>
<br/>
1. input1<br/>
2. input2<br/>
3. input3<br/>