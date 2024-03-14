<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
    <title>Biblioteca - Registro</title>
</head>
<body>
<div class="container">
    <div class="registro shadow rounded p-4 m-auto mt-5">
        <div class="text-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                 class="bi bi-book-half"
                 viewBox="0 0 16 16">
                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
            </svg>
            <i class="bi bi-book-half"></i>
            <h1 class="fs-2 d-inline-block ms-1">Library - Registro</h1>
        </div>
        <form action="" method="GET">
            <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm" id="cad_nome" name="cad_nome" placeholder="">
                <label for="cad_nome">Nome Completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm" id="cad_email" name="cad_email" placeholder="">
                <label for="cad_email">Email</label>
            </div>
            <div class="row">
                <div class="form-floating mb-3 col-12 col-lg-6">
                    <input type="text" class="form-control form-control-sm" id="cad_endereco" name="cad_endereco" placeholder="">
                    <label for="cad_endereco" class="ms-2">Endereço</label>
                </div>
                <div class="form-floating mb-3 col-6 col-lg-3">
                    <input type="text" class="form-control form-control-sm" id="cad_bairro_endereco" name="cad_bairro_endereco" placeholder="">
                    <label for="cad_bairro_endereco" class="ms-2">Bairro</label>
                </div>
                <div class="form-floating mb-3 col-6 col-lg-3 ">
                    <input type="text" class="form-control form-control-sm" id="cad_num_endereco" name="cad_num_endereco" placeholder="">
                    <label for="cad_num_endereco" class="ms-2">Número</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm" id="cad_telefone" name="cad_telefone" placeholder="">
                <label for="cad_telefone">Telefone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control form-control-sm" id="cad_cpf" name="cad_cpf" placeholder="">
                <label for="cad_cpf">CPF</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control form-control-sm" id="cad_data" name="cad_data" placeholder="">
                <label for="cad_data">Data de Nascimento</label>
            </div>
            <button type="submit" class="btn btn-dark w-100 mb-3">
                Registrar
            </button>
            <p class="text-center">Já possui um cadastro? <a href="login.php" class="link-dark">Clique aqui</a></p>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>