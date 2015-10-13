<?php

echo '<div><a href="'.route('admin.group.create').'">create new</a></div><br/>';

foreach ($data as $v) {
	
	$url = route('admin.group.edit', $v->id);
	
	echo <<<EOD
	<div><a href="{$url}">{$v->name}</a></div>
	<br/>
EOD;
}
?>
