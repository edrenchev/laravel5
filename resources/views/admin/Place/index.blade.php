<?php

echo '<div><a href="'.route($route.'.create').'">create new</a></div><br/>';

foreach ($data as $v) {
	
	$url = route($route.'.edit', $v->id);
	
	echo <<<EOD
	<div><a href="{$url}">{$v->name}</a></div>
	<br/>
EOD;
}
?>
