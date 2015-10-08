<?php

$url = route('admin.products');

echo '<div><a href="'.route('admin.products.create').'">create new</a></div><br/>';

foreach ($products as $product) {
	echo <<<EOD
	<div><a href="$url/{$product->id}/edit">{$product->name}</a></div>
	<br/>
EOD;
}
?>
