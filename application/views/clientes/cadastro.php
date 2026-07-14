<form method="POST" action="<?= site_url('Cliente/salvar') ?>" onsubmit="return validarCadastroCliente()">

    <div id="painelCadastroCliente" class="painel">

        <div class="painelConteudo">

            <h2>Cadastro de Cliente</h2>

            <input type="hidden" id="CD_CLIENTE" name="CD_CLIENTE">


            <div class="grupo">
                <label>CNPJ</label>
                <input type="text"
                       id="EdtCNPJ"
                       name="CNPJ"
                       class="obrigatorio_cadastro_cliente"
                       data-nome="o CNPJ">
            </div>


            <div class="grupo">
                <label>Razão Social</label>
                <input type="text"
                       id="EdtRazaoSocial"
                       name="RAZAO_SOCIAL"
                       class="obrigatorio_cadastro_cliente"
                       data-nome="a Razão Social">
            </div>


            <div class="grupo">
                <label>Nome Fantasia</label>
                <input type="text"
                       id="EdtNomeFantasia"
                       name="NOME_FANTASIA"
                       class="obrigatorio_cadastro_cliente"
                       data-nome="o Nome Fantasia">
            </div>


            <div class="grupo">
                <label>Valor Faturamento</label>
                <input type="number"
                       step="0.01"
                       id="EdtValorFaturamento"
                       name="VALOR_FATURAMENTO"
                       class="obrigatorio_cadastro_cliente"
                       data-nome="o Valor de Faturamento">
            </div>


            <div class="grupo">
                <label>Endereço</label>
                <input type="text"
                       id="EdtEndereco"
                       name="ENDERECO"
                       class="obrigatorio_cadastro_cliente"
                       data-nome="o Endereço">
            </div>


            <div class="grupo">
                <label>Telefone</label>
                <input type="text"
                       id="EdtTelefone"
                       name="TELEFONE"
                       class="obrigatorio_cadastro_cliente"
                       data-nome="o Telefone">
            </div>


            <div class="botoesPainel">

                <button class="salvar" type="submit">
                    Salvar
                </button>


                <button class="cancelar"
                        type="button"
                        onclick="fecharTodosPaineis()">
                    Cancelar
                </button>

            </div>

        </div>

    </div>

</form>