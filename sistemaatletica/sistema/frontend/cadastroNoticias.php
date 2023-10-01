<?php 
    include('cabecalho.php'); 
?>

<main>
<section class="back-padrao fonte-padrao">

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-bg-dark shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 ">
                        
    <form class="needs-validation" method="post" action="../backend/cadastrarUsuario.php" novalidate>
        <h1 class="mb-5 text-center fonte-secundaria">Cadastro de Notícias</h1>

            <!-- Imagem input -->
            <div class="form-outline mb-4">
            <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

            </div>
            

            <!-- Titulo input -->
            <div class="form-outline mb-4">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" placeholder="Título" class="form-control" name="titulo">

            </div>

            <!-- Descricao input -->
            <div class="form-outline mb-4">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="dedscricao" id="descricao" placeholder="Descreva" class="form-control" name="descricao">
            </div>

            <!-- Data input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="data">Data</label>
                <input type="date" id="data" placeholder="Data" class="form-control" name="data">
        
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
            </div>

    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php 
    include('rodape.html'); 
?>