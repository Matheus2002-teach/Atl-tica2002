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
        <h1 class="mb-5 text-center fonte-secundaria">Cadastro</h1>

            <!-- Name input -->
            <div class="form-outline mb-4">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="name" placeholder="Preencha com seu nome completo" name="nome" pattern="[A-Za-z].{10,}" required>
                <div class="valid-feedback">Valido</div>
                <div class="invalid-feedback">Preencha este campo</div>
            </div>
            

            <!-- Matricula input -->
            <div class="form-outline mb-4">
                <label for="matricula" class="form-label">Matrícula</label>
                <input type="text" id="matricula" placeholder="Preencha com sua matricula" class="form-control" name="matricula" pattern="[0-9]{11}" required>
                <div class="valid-feedback">Valido</div>
                <div class="invalid-feedback">Preencha este campo</div>
            </div>

            <!-- Curso input -->
            <div class="form-outline mb-4">
            <label for="curso" class="form-label">Curso</label>
            <select required class="form-select" name="curso" aria-label="Default select example">
                <option  value="" selected="">Selecionar curso</option>
                <option value="2">Engenharia de Computação</option>
                <option value="1">Engenharia de Controle e Automação</option>
              </select>
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Preencha este campo</div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" placeholder="Preencha com seu email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" required>
                <div class="valid-feedback">Valido</div>
                <div class="invalid-feedback">Preencha este campo</div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="senha">Senha</label>
                <input type="password" id="senha" placeholder="Preencha com sua senha" class="form-control" name="senha" pattern=".{8,}" title="Eight or more characters" required>
                <div class="valid-feedback">Valido</div>
                <div class="invalid-feedback">Preencha este campo</div>
            </div>

            <!-- Repeat Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="repeteSenha">Confirmar senha</label>
                <input type="password" id="repeteSenha" placeholder="Preencha com sua senha" class="form-control" name="repeteSenha" pattern=".{8,}" title="Eight or more characters" required>
                <div class="valid-feedback">Valido</div>
                <div class="invalid-feedback">Preencha este campo</div>
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked-aria-describedby="registerCheckHelpText" name="registerCheck" required >
                <label class="form-check-label fonte-arial" for="registerCheck">Eu li e concordo com os termos</label>
                <div class="valid-feedback">Valido</div>
                <div class="invalid-feedback">Marque esta caixa de seleção para continuar.</div>
            </div>

            <!-- Submit button -->
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

    <script>
        (() => {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
    </script>

    <?php 
    include('rodape.html'); 
?>
