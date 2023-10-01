<?php 
class Usuario{
    private $conn;
    private $tabela = "Usuario";

    public $nome;
    public $email;
    public $senha;
    public $matricula;
    public $fk_Curso_id;

    public function __construct($conexao){
        $this->conn = $conexao;
    }

    public function novoUsuario(){
        $query = "insert into " . $this->tabela . "(matricula, nome, email, senha, fk_Curso_id) values ('" . $this->matricula . "', '" . $this->nome . "', '" . $this->email . "', '" . md5($this->senha) . "', '" . $this->fk_Curso_id . "')";
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Erro ao preparar a consulta: " . $conn->error);
        }
        if($stmt->execute()){
            mysqli_close($this->conn);
            return true;
        }
        mysqli_close($this->conn);
        return false;
    }

    public function getUsuario($email, $senha) {
        $query = "select * from " . $this->tabela . " where email = '" . $email . "' and senha = '" . md5($senha) . "'";
        $result = $this->conn->query($query);
        if ($result->num_rows == 0) {
            echo "No rows found, nothing to print so am exiting";
            return false;
        }
        $row = $result->fetch_assoc();

        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->senha = $row['senha'];
        $this->matricula = $row['matricula'];
        $this->fk_Curso_id = $row['fk_Curso_id'];
    
        session_start();
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['matricula'] = $row['matricula'];
        $_SESSION['curso'] = $row['curso'];
        
        mysqli_close($this->conn);

        return true;
    }


/*
        // Função para inserir um novo usuário no banco de dados
        function insertUsuario($matricula, $nome, $email, $senha, $fk_Curso_id) {
            global $conn;
            $sql = "INSERT INTO Usuario (matricula, nome, email, senha, fk_Curso_id) VALUES ('$matricula', '$nome', '$email', '$senha', $fk_Curso_id)";
            if (mysqli_query($conn, $sql)) {
                return true;
            } else {
                return false;
            }
        }

                
        // Função para atualizar um usuário existente no banco de dados
        function updateUsuario($matricula, $nome, $email, $senha, $fk_Curso_id) {
            global $conn;
            $sql = "UPDATE Usuario SET nome='$nome', email='$email', senha='$senha', fk_Curso_id=$fk_Curso_id WHERE matricula='$matricula'";
            if (mysqli_query($conn, $sql)) {
                return true;
            } else {
                return false;
            }
        }

        // Função para excluir um usuário do banco de dados
        function deleteUsuario($matricula) {
            global $conn;
            $sql = "DELETE FROM Usuario WHERE matricula='$matricula'";
            if (mysqli_query($conn, $sql)) {
                return true;
            } else {
                return false;
            }
        }


        */        
    }

?>