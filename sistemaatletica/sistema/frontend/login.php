<?php 
    include('cabecalho.php'); 
?>

<main>
<section class="back-padrao vh-100 fonte-padrao">


  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-bg-dark shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">

        <form method="post" action="../backend/efetuarLogin.php">

            <h1 class="mb-5 text-center fonte-secundaria">Login</h1>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Email</label>
                <input type="email" id="loginName" class="form-control" name="email"/>
            </div>

             <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="loginPassword">Senha</label>
                <input type="password" id="loginPassword" class="form-control" name="senha" />
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Lembrar Senha </label>
            </div>

            <div class="card-body text-center">
            <button class="btn btn-primary btn-lg btn-block " type="submit">Login</button>

            <div class="text-center my-3" style="font-family:Arial, Helvetica, sans-serif;">
                <p>Não é membro? <a href="cadastro.php">Registre-se</a></p>
            </div>

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
