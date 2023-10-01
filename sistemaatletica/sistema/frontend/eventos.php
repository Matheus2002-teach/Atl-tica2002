<?php 
    include('cabecalho.php'); 
?>

<?php
    echo '<main>
    <div class= " container px-5 mx-auto p-2 cor-azul fonte-arial cor-azul ">
        <h1 class="text-center">EVENTOS</h1>
    </div>

    <div>
        <img class="img-fluid d-none d-xl-block w-100" src="assets/Desktop/banner-padrao-desktop.jpeg" alt="banner">
        <img class="img-fluid d-none d-md-block d-xl-none w-100" src="assets/Tablet/banner-padrao-tablet.jpeg" alt="banner">
        <img class="img-fluid d-md-none w-100" src="assets/Mobile/banner-padrao-mobile.jpeg" alt="banner">    
    </div>';
    $in_bd = include_once '../backend/banco.php';
    $banco = new BancoDados();
	$conn = $banco->getConexao();
    $in_eve = include_once '../backend/eventos.php';
    $evento = new Evento();
    $result = $evento->getPosts($conn);
    if ($result->num_rows == 0) {
        return false;
    }
    $row = $result->fetch_assoc();
    for ($i = 0; $i < $result->num_rows; $i++) {
        if($i%2==0){
            echo '<div class="back-branco d-flex align-items-center">
            <div class="container mx-auto">
                <div class="card my-5">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <img src="' . $row['foto_path'] . '" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6 col-lg-8 d-flex align-items-center">
                            <div class="card-body mx-auto d-flex flex-column align-items-center">
    
                                    <div class="p-1">
                                        <h5 class="card-title text-center">' . $row['nome'] . '</h5>
                                    </div>
    
                                    <div class="p-1">
                                        <p class="card-text">Descricao:' . $row['descricao'] . '</p>
                                    </div>
    
                                    <div class="p-1">
                                        <p class="card-text text-side "><small class="text-side">DIA ' . $row['data'] . ' </small></p>    
                                    </div>  
        
                                    <a class="btn btn-primary align-items-center" href="'. $row['link'] .'" role="button">Acesse Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }else{
            echo '<div class="back-azul d-flex align-items-center back-azul">
   
            <div class="container mx-auto back-azul">
                <div class="card my-5 back-azul border-0">
                    <div class="row back-azul">
                    <div class="col-md-6 col-lg-4">
                    <img src="' . $row['foto_path'] . '" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6 col-lg-8 d-flex align-items-center">
                    <div class="card-body mx-auto d-flex flex-column align-items-center">

                            <div class="p-1">
                                <h5 class="card-title text-center">' . $row['nome'] . '</h5>
                            </div>

                            <div class="p-1">
                                <p class="card-text">Descricao:' . $row['descricao'] . '</p>
                            </div>

                            <div class="p-1">
                                <p class="card-text text-side "><small class="text-side">DIA ' . $row['data'] . ' </small></p>    
                            </div>  

                            <a class="btn btn-primary align-items-center" href="'. $row['link'] .'" role="button">Acesse Aqui</a>
                    </div>
                </div>
                    </div>
                </div>
            </div> 
        </div>';
        }
        $row = $result->fetch_assoc();
    }
    echo '</main>';
    /*
    <?php 
   2     include('cabecalho.html'); 
 ?>
 
 <main>
     <div class="container px-5 mx-auto p-2">
         <h1 class="text-center fs-3 fw-bold titulo">Eventos</h1>
     </div>
 
       <div>
           <img class="img-fluid d-none d-xl-block w-100" src="/frontend/assets/kids.jpg" alt="banner">
           <img class="img-fluid d-none d-md-block d-xl-none w-100" src="/projeto/sistema/frontend/assets/Mobile/banner-padrao-mobile.jpeg" alt="banner">
           <img class="img-fluid d-md-none w-100" src="/projeto/sistema/frontend/assets/Tablet/banner-padrao-tablet.jpeg" alt="banner">    
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
                                       <h5 class="card-title text-center">Nome Evento</h5>
                                   </div>
   
                                   <div class="p-1">
                                       <p class="card-text">Descricao: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis interdum est. Sed orci metus, viverra eget leo ac, vehicula consequat lorem. Nunc nibh odio, sagittis mollis magna porta, fermentum hendrerit velit. Vivamus condimentum ipsum at velit blandit, sed euismod elit consequat. </p>
                                   </div>
   
                                   <div class="p-1">
                                       <p class="card-text text-side "><small class="text-side">DIA 14/09 </small></p>    
                                   </div>  
       
                                   <a class="btn btn-primary align-items-center" href="form-comp.php" role="button">Acesse Aqui</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   
       <div class="back-azul d-flex align-items-center back-azul">
   
           <div class="container mx-auto back-azul">
               <div class="card my-5 back-azul border-0">
                   <div class="row back-azul">
                       <div class="col-md-6 col-lg-4">
                           <img src="assets/camp-peteca.jpg" class="img-fluid rounded-start" alt="...">
                       </div>
                       <div class="col-md-6 col-lg-8 d-flex align-items-center back-azul border-0">
                           <div class="card-body mx-auto d-flex flex-column align-items-center">
   
                                   <div class="p-1 cor-branco">
                                       <h5 class="card-title text-center cor-branco">Nome Evento</h5>
                                   </div>
   
                                   <div class="p-1 cor-branco">
                                       <p class="card-text">Descricao: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis interdum est. Sed orci metus, viverra eget leo ac, vehicula consequat lorem. Nunc nibh odio, sagittis mollis magna porta, fermentum hendrerit velit. Vivamus condimentum ipsum at velit blandit, sed euismod elit consequat. </p>
                                   </div>
   
                                   <div class="p-1 cor-branco align-items-left">
                                       <p class="card-text-left  text-side">DIA 14/09 </p>    
                                   </div>  
                                   
                                   <a class="btn btn-dark " href="form-comp.php" role="button">Acesse Aqui</a>
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

*/
?>

<?php 
    include('rodape.html'); 
?>
