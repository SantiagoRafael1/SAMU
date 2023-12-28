<?php

// 5 - preparação cadastro e consulta

namespace app\controllers;

/*class Site {
	public function home() {
		require_once __DIR__ .'/../views/home.php';
	}


	public function consulta() {
		require_once __DIR__ .'/../views/consulta.php';
	}

	public function galeria($foto) {
		$photo = $foto;
		require_once __DIR__ .'/../views/galeria.php';
	}

	public function cadastro() {
		require_once __DIR__ .'/../views/cadastro.php';
	}
}*/

use app\models\Crud;

class Site extends Crud {
	public function home() {
		require_once __DIR__ .'/../views/home.php';
	}


	public function consulta() {
		$consulta = $this->read();
		require_once __DIR__ .'/../views/consulta.php';
	}

	public function galeria($foto) {
		$photo = $foto;
		require_once __DIR__ .'/../views/galeria.php';
	}

	public function cadastro() {
		$cadastro = $this->create();
		require_once __DIR__ .'/../views/cadastro.php';
	}

	// 8 - criação do método Editar
	public function editar() {
		$editarForm = $this->editForm();
		require_once __DIR__ .'/../views/editar.php';
	}

	// 15 - criação do método Alterar
	public function alterar() {
		$alterar = $this->update();
		header("location:?router=Site/consulta/");
	}

	// 17 - criação do método confirma Delete
	public function confirmaDelete() {
		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
		require_once __DIR__ .'/../views/confirmaDelete.php';
	}

	// 19 - criação do método Delete
	public function deletar() {
		$deletar = $this->delete();
		header("location:?router=Site/consulta/");
	}
}

?>