<?php 
    include('cabecalho.php'); 
?>

<main>
    <div class="container px-5 mx-auto p-2">
        <h1 class="text-center fs-3 fw-bold titulo">Competições</h1>
    </div>

    <div>
        <img class="img-fluid d-none d-xl-block w-100" src="assets/Desktop/banner-padrao-desktop.jpeg" alt="banner">
        <img class="img-fluid d-none d-md-block d-xl-none w-100" src="assets/Tablet/banner-padrao-tablet.jpeg" alt="banner">
        <img class="img-fluid d-md-none w-100" src="assets/Mobile/banner-padrao-mobile.jpeg" alt="banner">    
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
                                    <h5 class="card-title text-center">Nome Competicao</h5>
                                </div>

                                <div class="p-1">
                                    <p class="card-text">Descricao: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis interdum est. Sed orci metus, viverra eget leo ac, vehicula consequat lorem. Nunc nibh odio, sagittis mollis magna porta, fermentum hendrerit velit. Vivamus condimentum ipsum at velit blandit, sed euismod elit consequat. </p>
                                </div>

                                <div class="p-1">
                                    <p class="card-text text-center"><small class="text-muted">Inscrições ate dia 14/09 </small></p>    
                                </div>  
                                
                                <a class="btn btn-primary align-items-center" href="form-comp.php" role="button">Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="back-azul d-flex align-items-center">

        <div class="container mx-auto">
            <div class="card my-5">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <img src="assets/camp-peteca.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6 col-lg-8 d-flex align-items-center">
                        <div class="card-body mx-auto d-flex flex-column align-items-center">

                                <div class="p-1">
                                    <h5 class="card-title text-center">Nome Competicao</h5>
                                </div>

                                <div class="p-1">
                                    <p class="card-text">Descricao: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis interdum est. Sed orci metus, viverra eget leo ac, vehicula consequat lorem. Nunc nibh odio, sagittis mollis magna porta, fermentum hendrerit velit. Vivamus condimentum ipsum at velit blandit, sed euismod elit consequat. </p>
                                </div>

                                <div class="p-1">
                                    <p class="card-text text-center"><small class="text-muted">Inscrições ate dia 14/09 </small></p>    
                                </div>  
                                
                                <a class="btn btn-primary align-items-center" href="form-comp.php" role="button">Link</a>
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