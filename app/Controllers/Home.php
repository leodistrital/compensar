<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Config\Services;

use App\Models\PerfilModel;

class Home extends ResourceController
{

	protected $format = 'json';

	function __construct()
	{
		// helper('local');
	}


	public function leer()
	{

		$perfilModel = new PerfilModel();
		$perfiles = $perfilModel->findAll();
		$datos = array('datos' => $perfiles);
		//dd($datos);
		return view('estructura/header') . view('estructura/body', $datos);
	}


	public function actualizar($id = null)
	{
		$model = new PerfilModel();
		$perfiles = $model->find($id);
		$datos = array('datos' => $perfiles);
		//print_r($datos);
		return view('estructura/header') . view('estructura/form', $datos);
	}

	public function apiinsertar()
	{

		$token = $this->request->getHeader('Authorization')->getValue();

		if ($this->validarToken($token) == true) {
			$model = new PerfilModel();
			$data = [
				"tipoid_per" => $this->request->getPost('tipoid_per'),
				"id_per" => $this->request->getPost('id_per'),
				"id_per" => $this->request->getPost('id_per'),
				"nom_per" => $this->request->getPost('nom_per'),
				"ape_per" => $this->request->getPost('id_per'),
				"cat_per" => $this->request->getPost('id_per'),
				"edad_per" => $this->request->getPost('id_per'),
				"car_per" => $this->request->getPost('id_per')
			];

			$model->save($data);
			return $this->respond(['data' => 'Creado'], 200);
		} else {
			return $this->respond(['msg' => 'Clave no valida'], 401);
		}
	}


	public function apiactualizar()
	{
		$model = new PerfilModel();
		$id = $this->request->getPost('id');
		$data = [
			"tipoid_per" => $this->request->getPost('tipoid_per'),
			"id_per" => $this->request->getPost('id_per'),
			"id_per" => $this->request->getPost('id_per'),
			"nom_per" => $this->request->getPost('nom_per'),
			"ape_per" => $this->request->getPost('id_per'),
			"cat_per" => $this->request->getPost('id_per'),
			"edad_per" => $this->request->getPost('id_per'),
			"car_per" => $this->request->getPost('id_per')
		];
		$res = $model->update($id, $data);
		echo json_encode(["msg" => 'Tarea actualizados', 'datos' => $res]);
	}




	public function apileer()
	{
		$perfilModel = new PerfilModel();
		$perfiles = $perfilModel->findAll();


		if (count($perfiles) > 0) {
			$datos = array('perfiles' => $perfiles);
			return $this->respond($datos, 200);
		} else {

			$response = [
				'status'   => 400,
				'code'     => 'Null',
				'messages' => [
					'Error message 1',
				]
			];
			return $this->fail($response, 400);
		}
	}


	protected function validarToken($toke)
	{
		//simulacion de seguridad
		return true;
	}

	//--------------------------------------------------------------------

}