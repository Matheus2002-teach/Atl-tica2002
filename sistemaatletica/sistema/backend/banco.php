<?php

//Banco de dados
class BancoDados{
    public function getConexao(){
        $servername = "localhost";
        $username = "atleticalinceonl_atleticalinceon";
        $password = "p4nT3Ra01118";
        $dbname = "atleticalinceonl_banco";
        
        // Cria uma conexão com o banco de dados
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Verifica se a conexão foi bem sucedida
        if (!$conn) {
            die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
        }

        //mysqli_close($conn);
        return $conn;
    }
}

/*
// Função para obter todos os cursos do banco de dados
function getCursos() {
    global $conn;
    $sql = "SELECT * FROM Curso";
    $result = mysqli_query($conn, $sql);
    $cursos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $cursos;
}

// Função para obter um curso específico do banco de dados
function getCurso($id) {
    global $conn;
    $sql = "SELECT * FROM Curso WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $curso = mysqli_fetch_assoc($result);
    return $curso;
}

// Função para inserir um novo curso no banco de dados
function insertCurso($id, $nome) {
    global $conn;
    $sql = "INSERT INTO Curso (id, nome) VALUES ($id, '$nome')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para atualizar um curso existente no banco de dados
function updateCurso($id, $nome) {
    global $conn;
    $sql = "UPDATE Curso SET nome='$nome' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para excluir um curso do banco de dados
function deleteCurso($id) {
    global $conn;
    $sql = "DELETE FROM Curso WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para obter todos os posts do banco de dados
function getPosts() {
    global $conn;
    $sql = "SELECT * FROM Post";
    $result = mysqli_query($conn, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}

// Função para obter um post específico do banco de dados
function getPost($id) {
    global $conn;
    $sql = "SELECT * FROM Post WHERE id_post = $id";
    $result = mysqli_query($conn, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}

// Função para inserir um novo post no banco de dados
function insertPost($id_post, $path_pasta_fotos, $path_arquivo_texto, $link_inscricao, $fk_Membro_matricula) {
    global $conn;
    $sql = "INSERT INTO Post (id_post, path_pasta_fotos, path_arquivo_texto, link_inscricao, fk_Membro_matricula) VALUES ($id_post, '$path_pasta_fotos', '$path_arquivo_texto', '$link_inscricao', $fk_Membro_matricula)";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para atualizar um post existente no banco de dados
function updatePost($id_post, $path_pasta_fotos, $path_arquivo_texto, $link_inscricao, $fk_Membro_matricula) {
    global $conn;
    $sql = "UPDATE Post SET path_pasta_fotos='$path_pasta_fotos', path_arquivo_texto='$path_arquivo_texto', link_inscricao='$link_inscricao', fk_Membro_matricula=$fk_Membro_matricula WHERE id_post=$id_post";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para excluir um post do banco de dados
function deletePost($id_post) {
    global $conn;
    $sql = "DELETE FROM Post WHERE id_post=$id_post";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para obter todos os membros do banco de dados
function getMembros() {
    global $conn;
    $sql = "SELECT * FROM Membro";
    $result = mysqli_query($conn, $sql);
    $membros = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $membros;
}

// Função para obter um membro específico do banco de dados
function getMembro($matricula) {
    global $conn;
    $sql = "SELECT * FROM Membro WHERE matricula = $matricula";
    $result = mysqli_query($conn, $sql);
    $membro = mysqli_fetch_assoc($result);
    return $membro;
}

// Função para inserir um novo membro no banco de dados
function insertMembro($matricula, $nome, $email, $senha, $foto_path, $fk_Curso_id) {
    global $conn;
    $sql = "INSERT INTO Membro (matricula, nome, email, senha, foto_path, fk_Curso_id) VALUES ($matricula, '$nome', '$email', '$senha', '$foto_path', $fk_Curso_id)";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para atualizar um membro existente no banco de dados
function updateMembro($matricula, $nome, $email, $senha, $foto_path, $fk_Curso_id) {
    global $conn;
    $sql = "UPDATE Membro SET nome='$nome', email='$email', senha='$senha', foto_path='$foto_path', fk_Curso_id=$fk_Curso_id WHERE matricula=$matricula";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para excluir um membro do banco de dados
function deleteMembro($matricula) {
    global $conn;
    $sql = "DELETE FROM Membro WHERE matricula=$matricula";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para obter todos os produtos do banco de dados
function getProdutos() {
    global $conn;
    $sql = "SELECT * FROM Produto";
    $result = mysqli_query($conn, $sql);
    $produtos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $produtos;
}

// Função para obter um produto específico do banco de dados
function getProduto($id_produto) {
    global $conn;
    $sql = "SELECT * FROM Produto WHERE id_produto = $id_produto";
    $result = mysqli_query($conn, $sql);
    $produto = mysqli_fetch_assoc($result);
    return $produto;
}

// Função para inserir um novo produto no banco de dados
function insertProduto($id_produto, $nome, $path_fotos, $link_loja, $fk_Membro_matricula) {
    global $conn;
    $sql = "INSERT INTO Produto (id_produto, nome, path_fotos, link_loja, fk_Membro_matricula) VALUES ($id_produto, '$nome', '$path_fotos', '$link_loja', $fk_Membro_matricula)";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para atualizar um produto existente no banco de dados
function updateProduto($id_produto, $nome, $path_fotos, $link_loja, $fk_Membro_matricula) {
    global $conn;
    $sql = "UPDATE Produto SET nome='$nome', path_fotos='$path_fotos', link_loja='$link_loja', fk_Membro_matricula=$fk_Membro_matricula WHERE id_produto=$id_produto";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Função para excluir um produto do banco de dados
function deleteProduto($id_produto) {
    global $conn;
    $sql = "DELETE FROM Produto WHERE id_produto=$id_produto";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
*/

?>
