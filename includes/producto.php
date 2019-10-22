<?php
class Producto
{
	function get(){
		$sql = "SELECT * FROM libro";
		global $cnx;
		return $cnx->query($sql);
	}
	
	function getById($id){
		$sql = "SELECT * FROM libro WHERE id=$id";
		global $cnx;
		return $cnx->query($sql);
	}
}