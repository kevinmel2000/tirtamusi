<?php


class Kualitas_air_m extends MY_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] = 'kualitas_air';
		$this->data['primary_key'] = 'id_kualitas';
	}
}