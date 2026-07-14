<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/menu.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>">
    <title>Sistema Mamba</title>
</head>

<body>

    <div class="topo">
        <div class="logo">
            Mamba Gestão
        </div>
    </div>

    <div class="conteudo">

        <div class="titulo">
            Bem-vindo ao Sistema
        </div>

        <div class="subtitulo">
            Escolha um módulo para prosseguir.
        </div>

        <div class="cards">

            <div class="card" 
            onclick="window.location.href='<?= site_url('Cliente/consulta') ?>'">

                <div class="icone">
                    <i class="fa-regular fa-user"></i>
                </div>

                <div class="tituloCard">
                    Clientes
                </div>

                <div class="texto">
                    Cadastro, consulta, edição e gerenciamento de clientes.
                </div>

            </div>

            <div class="card"
            onclick="window.location.href='<?= site_url('Vendas/consulta') ?>'">

                <div class="icone">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                </div>

                <div class="tituloCard">
                    Vendas
                </div>

                <div class="texto">
                    Emissão, consulta, edição e gerenciamento de vendas.
                </div>

            </div>

        </div>

    </div>

</body>

</html>
