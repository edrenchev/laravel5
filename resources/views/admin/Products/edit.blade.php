

<?=Form::model($product, ['route' => ['admin.products.update',$product->id], 'method'=>'PATCH']);?>
@include('admin.products.form')
<?=Form::close();?>
<br/>
<?=deleteBtn(['admin.products.destroy',$product->id], 'DELETE');?>

create and edit items table <br/>
<br/>
1. input1<br/>
2. input2<br/>
3. input3<br/>

<?php 

// var_dump($errors);
?>