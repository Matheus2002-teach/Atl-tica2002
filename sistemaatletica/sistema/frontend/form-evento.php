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

    <form action="" method="post">
        <h1 class="mb-5 text-center fonte-secundaria">Cadastro de Eventos</h1>

        
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="mb-3">
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" class="form-control" placeholder="Nome Evento" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Descricao</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class=" mb-3 ">
                        <div class="input-group date" id="datepicker">
                            <span class="input-group-text">Data</span>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                </div>

                <div class=" mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Link</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                </div>

                <script type="text/javascript">
                    $(function() {
                        $('#datepicker').datepicker();
                    });
                </script>


            </div>
        
    </form>
    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</main>

<?php 
    include('rodape.html'); 
?>

