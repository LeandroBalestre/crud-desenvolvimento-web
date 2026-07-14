<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= base_url('assets/css/cliente.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>">

<title>Consulta de Clientes</title>

</head>

<body>

<div class="topo">
    Clientes
</div>

    <div class="container">

        <div class="conteudo">

            <div class="titulo_consulta">

        <span>Consulta de Clientes</span>

        <div class="acoes_titulo">

            <button 
                class="botao_nova_venda" 
                title="Novo Cliente" 
                onclick="abrirPainelCadastro()">
                Novo Cliente
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
                <th class="titulo" style="text-align:center;">Código</th>
                <th class="titulo">Nome</th>
                <th class="titulo">CNPJ</th>
                <th class="titulo">Endereço</th>
                <th class="titulo">Telefone</th>
                <th class="titulo">Valor Faturamento</th>
                <th class="titulo"></th>
                <th class="titulo"></th>
            </tr>

            <?php foreach($clientes as $cliente): ?>

                <tr>
                    <td class="dados_cliente" style="text-align:center"><?= $cliente->CD_CLIENTE ?></td>
                    <td class="dados_cliente"><?= $cliente->RAZAO_SOCIAL ?></td>
                    <td class="dados_cliente"><?= $cliente->CNPJ ?></td>
                    <td class="dados_cliente"><?= $cliente->ENDERECO ?></td>
                    <td class="dados_cliente"><?= $cliente->TELEFONE ?></td>
                    <td class="dados_cliente"> R$ <?= number_format($cliente->VALOR_FATURAMENTO, 2, ',', '.') ?></td>

                    <td>              
                        <a class="botao_editar_cliente"
                           onclick="abrirPainelEdicao(
                                '<?= $cliente->CD_CLIENTE ?>',
                                '<?= $cliente->CNPJ ?>',
                                '<?= $cliente->RAZAO_SOCIAL ?>',
                                '<?= $cliente->NOME_FANTASIA ?>',
                                '<?= $cliente->VALOR_FATURAMENTO ?>',
                                '<?= $cliente->ENDERECO ?>',
                                '<?= $cliente->TELEFONE ?>'
                            )">
                             Editar
                        </a>
                    </td>

                    <td>              
                        <a href="<?= site_url('Cliente/excluir/'.$cliente->CD_CLIENTE) ?>"
                           class="botao_excluir_cliente"
                           onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                           Deletar
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>

     <?php $this->load->view('clientes/cadastro'); ?>

    <?php $this->load->view('clientes/edicao'); ?>

</div>

<script> 

function abrirPainelCadastro() 
{
    fecharTodosPaineis();

    document
        .getElementById('painelCadastroCliente')
        .classList
        .add('ativo');
}

function fecharTodosPaineis()
{
    document
        .getElementById('painelCadastroCliente')
        .classList
        .remove('ativo');

    document
        .getElementById('painelEdicaoCliente')
        .classList
        .remove('ativo');
}

function abrirPainelEdicao(
    codigo,
    cnpj,
    razaoSocial,
    nomeFantasia,
    valor,
    endereco,
    telefone
)
{

    document.getElementById('EdtCD_CLIENTE').value = codigo;
    document.getElementById('EdtEditarCNPJ').value = cnpj;
    document.getElementById('EdtEditarRazaoSocial').value = razaoSocial;
    document.getElementById('EdtEditarNomeFantasia').value = nomeFantasia;
    document.getElementById('EdtEditarValorFaturamento').value = valor;
    document.getElementById('EdtEditarEndereco').value = endereco;
    document.getElementById('EdtEditarTelefone').value = telefone;

    document
        .getElementById('painelEdicaoCliente')
        .classList
        .add('ativo');
}

function validarEdicaoCliente()
{
    const campos = document.querySelectorAll('.obrigatorio_edicao_cliente');

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

function validarCadastroCliente()
{
    const campos = document.querySelectorAll('.obrigatorio_cadastro_cliente');

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

