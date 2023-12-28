<?php 

// 4 - Criação do Crud
namespace app\models;

class Crud extends Connections {
 	
	public function create() {

		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

		$conn = $this->connect();
		$sql = "INSERT INTO tb_pessoa VALUES(default, :nome, :email)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':email', $email);

		$stmt->execute();

		return $stmt;
	}

	public function read() {

		$conn = $this->connect();
		$sql = "SELECT * FROM tb_pessoa ORDER BY nome";

		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$result = $stmt->fetchAll();
		return $result;
		
	}

	public function update() {
		// 14 - Atualizando o UPDATE
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

		$conn = $this->connect();
		$sql = "UPDATE tb_pessoa SET nome = :nome, email = :email WHERE id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':email', $email);

		$stmt->execute();

		return $stmt;
	}

	// 16 - Atualizando o DELETE
	public function delete() {
		$id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

		$conn = $this->connect();
		$sql = "DELETE FROM tb_pessoa WHERE id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		return $stmt;
	}

	// 8 - criação do método Consulta
	public function editForm() {

		// $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

		// 12 - Decriptografar
		$id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

		$conn = $this->connect();
		$sql = "SELECT * FROM tb_pessoa WHERE id = :id";

		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

		$result = $stmt->fetchAll();
		return $result;
	}
 	
}

?>