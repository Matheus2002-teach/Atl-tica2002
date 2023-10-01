<?php
class Evento{
    private $conn;
    private $tabela = "Evento";

    public $foto_path;
    public $descrocao;
    public $nome;
    public $data;
    public $aberto;
    public $link;
    public $fk_membros;

    public function __construct($conexao){
        $this->conn = $conexao;
    }

    public function getPosts($conn){
        $query = "select * from Evento order by data desc;";
        $result = $conn->query($query);
        mysqli_close($this->conn);
        return $result;
    }
}
?>