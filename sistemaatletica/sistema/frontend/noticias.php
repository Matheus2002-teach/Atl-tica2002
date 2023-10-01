<?php 
    include('cabecalho.php'); 
?>

<main>
<div class="container px-5 mx-auto p-2">
        <h1 class="text-center fs-3 fw-bold titulo">Notícias</h1>
    </div>

    <div>
        <img class="img-fluid" src="/frontend/assets/banner.jpg" alt="banner">    
    </div>
    
    <div class="back-branco d-flex align-items-center">

        <div class="container mx-auto">
            <div class="card my-5">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <img src="assets/camp-peteca.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6 col-lg-8 d-flex align-items-center">
                        <div class="card-body mx-auto d-flex flex-column align-items-center">

                                <div class="p-1">
                                    <h5 class="card-title text-center">Noticia 1</h5>
                                </div>

                                <div class="p-1">
                                    <p class="card-text">Descricao: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis interdum est. Sed orci metus, viverra eget leo ac, vehicula consequat lorem. Nunc nibh odio, sagittis mollis magna porta, fermentum hendrerit velit. Vivamus condimentum ipsum at velit blandit, sed euismod elit consequat. </p>
                                </div>

                                <div class="p-1">
                                    <p class="card-text text-side "><small class="text-side">Postado dia 14/09 </small></p>    
                                </div>  
    
                                <a class="btn btn-primary " href="cadastroNoticias.php" role="button">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="back-azul d-flex align-items-center">

<div class="container mx-auto">
<div class="card my-5 back-azul">
        <div class="row back-azul">
            <div class="col-md-6 col-lg-4">
                <img src="assets/camp-peteca.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6 col-lg-8 d-flex align-items-center">
                <div class="card-body mx-auto d-flex flex-column align-items-center">

                        <div class="p-1">
                            <h5 class="card-title text-center">Noticia 2</h5>
                        </div>

                        <div class="p-1">
                            <p class="card-text">Descricao: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis interdum est. Sed orci metus, viverra eget leo ac, vehicula consequat lorem. Nunc nibh odio, sagittis mollis magna porta, fermentum hendrerit velit. Vivamus condimentum ipsum at velit blandit, sed euismod elit consequat. </p>
                        </div>

                        <div class="p-1">
                            <p class="card-text text-side "><small class="text-side">Postado dia 14/09 </small></p>    
                        </div>  

                        <a class="btn btn-dark " href="cadastroNoticias.php" role="button">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

    
</main>

<?php 
    include('rodape.html'); 
?>