<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="<?= base_url('assets/css/vendas.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>">

<title>Consulta de Vendas</title>

</head>

<body>

<div class="topo">
    Vendas
</div>


<div class="container">
    <div class="conteudo">
        <div class="titulo_consulta">

            <span>
                Consulta de Vendas
            </span>


            <div class="acoes_titulo">
                <button 
                    class="botao_nova_venda"
                    title="Nova Venda"
                    onclick="abrirPainelCadastro()">

                    Nova Venda

                </button>

                <button
                    class="botao_menu"
                    title="Retornar ao Menu"
                    onclick="window.location.href='<?= site_url('Menu/index') ?>'">
                    <i class="fa-solid fa-house"></i>
                </button>
            </div>
        </div>

        <table>


            <tr>
                <th class="titulo" style="text-align:center;">
                    Código
                </th>

                <th class="titulo">
                    Valor Total
                </th>

                <th class="titulo">
                    Cliente
                </th>

                <th class="titulo">
                    Data Criação
                </th>

                <th class="titulo"></th>
                <th class="titulo"></th>

            </tr>

            <?php foreach($vendas as $venda): ?>
            <tr>
                <td class="dados_cliente" style="text-align:center">
                    <?= $venda->NR_VENDA ?>
                </td>

                <td class="dados_cliente">
                    R$ <?= number_format($venda->VALOR_VENDA, 2, ',', '.') ?>
                </td>

                <td class="dados_cliente">
                    <?= $venda->NOME_FANTASIA ?>
                </td>

                <td class="dados_cliente">
                    <?= $venda->DT_VENDA ?>
                </td>

                <td>
                    <a 
                    class="botao_editar_cliente"
                    onclick="abrirPainelEdicao(
                        '<?= $venda->NR_VENDA ?>',
                        '<?= $venda->VALOR_VENDA ?>',
                        '<?= $venda->CD_CLIENTE ?>'
                    )">
                        Editar
                    </a>
                </td>

                <td>
                    <a 
                    href="<?= site_url('Vendas/excluir/'.$venda->NR_VENDA) ?>"
                    class="botao_excluir_cliente"
                    onclick="return confirm('Tem certeza que deseja excluir esta venda?')">
                        Deletar
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <?php $this->load->view('vendas/cadastro'); ?>
    <?php $this->load->view('vendas/edicao'); ?>


</div>

<script>


function abrirPainelCadastro()
{
    fecharTodosPaineis();
    document
        .getElementById('painelCadastro')
        .classList
        .add('ativo');
}

function fecharTodosPaineis()
{
    document
        .getElementById('painelCadastro')
        .classList
        .remove('ativo');

    document
        .getElementById('painelEdicao')
        .classList
        .remove('ativo');
}


function abrirPainelEdicao(
    nr_venda,
    valor,
    codigo_cliente
)
{
    fecharTodosPaineis();

    document
        .getElementById('EdtNR_VENDA')
        .value = nr_venda;
    document
        .getElementById('EdtEditarVALOR_VENDA')
        .value = valor;
    document
        .getElementById('EdtEditarCD_CLIENTE')
        .value = codigo_cliente;
    document
        .getElementById('painelEdicao')
        .classList
        .add('ativo');
}


function fecharPainelEdicao()
{
    document
        .getElementById('painelEdicao')
        .classList
        .remove('ativo');
}

function validarEdicaoVenda()
{
    const campos = document.querySelectorAll('.obrigatorio_edicao_venda');
    for (const campo of campos)
    {
        if (campo.value.trim() === '')
        {
            alert('Informe ' + campo.dataset.nome + '.');
            campo.focus();
            return false;
        }
    }
    return true;
}


function validarCadastroVenda()
{
    const campos = document.querySelectorAll('.obrigatorio_cadastro_venda');

    for (const campo of campos)
    {
        if (campo.value.trim() === '')
        {
            alert('Informe ' + campo.dataset.nome + '.');
            campo.focus();
            return false;
        }
    }
    return true;
}


</script>


</body>

</html>