<?php
/*
 * @author ervin
 *   */
function deleteBtn ($routeParam, $label) {
	$form = Form::open(['route' => $routeParam, 'method'=>'DELETE']);
	$form .= Form::submit($label, ['class1'=>'btn-delete']);
	return $form.Form::close();
}