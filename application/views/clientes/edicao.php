<form method="POST" action="<?= site_url('Cliente/editar') ?>" onsubmit="return validarEdicaoCliente()">

        <div id="painelEdicaoCliente" class="painel">

            <div class="painelConteudo">

                <h2>Editar Cliente</h2>

                <input type="hidden" id="EdtCD_CLIENTE" name="CD_CLIENTE">

                <div class="grupo">
                    <label>CNPJ</label>
                    <input type="text" 
                           id="EdtEditarCNPJ" 
                           name="CNPJ"  
                           class="obrigatorio_edicao_cliente"
                           data-nome="o CNPJ">
                </div>

                <div class="grupo">
                    <label>Razão Social</label>
                    <input type="text" 
                           id="EdtEditarRazaoSocial" 
                           name="RAZAO_SOCIAL"
                           class="obrigatorio_edicao_cliente"
                           data-nome="a Razão Social">
                </div>

                <div class="grupo">
                    <label>Nome Fantasia</label>
                    <input type="text" 
                           id="EdtEditarNomeFantasia" 
                           name="NOME_FANTASIA"
                           class="obrigatorio_edicao_cliente"
                           data-nome="o Nome Fantasia">
                </div>

                <div class="grupo">
                    <label>Valor Faturamento</label>
                    <input type="number" step="0.01"
                        id="EdtEditarValorFaturamento"
                        name="VALOR_FATURAMENTO"
                        class="obrigatorio_edicao_cliente"
                        data-nome="o Valor de Faturamento">
                </div>

                <div class="grupo">
                    <label>Endereço</label>
                    <input type="text" 
                           id="EdtEditarEndereco" 
                           name="ENDERECO"
                           class="obrigatorio_edicao_cliente"
                           data-nome="o Endereço">
                </div>

                <div class="grupo">
                    <label>Telefone</label>
                    <input type="text" 
                           id="EdtEditarTelefone" 
                           name="TELEFONE"
                           class="obrigatorio_edicao_cliente"
                           data-nome="o Telefone">
                </div>

                <div class="botoesPainel">

                    <button class="salvar" type="submit">
                        Salvar Alterações
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