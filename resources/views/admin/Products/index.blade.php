<?php

echo '<div><a href="'.route('admin.products.create').'">create new</a></div><br/>';

foreach ($products as $product) {
	
	$url = route('admin.products.edit', $product->id);
	
	echo <<<EOD
	<div><a href="{$url}">{$product->name}</a></div>
	<br/>
EOD;
}
?>
