<form method="POST" action="<?= site_url('Vendas/salvar') ?> " onsubmit="return validarCadastroVenda()">

    <div id="painelCadastro" class="painel">

        <div class="painelConteudo">

            <h2>Criar Nova Venda</h2>

            <input type="hidden" id="NR_VENDA" name="NR_VENDA">

            <div class="grupo">
                <label>Cliente</label>
                <select id="EdtEditarCD_CLIENTE" name="CD_CLIENTE">
                        <?php foreach($clientes as $cliente): ?>

                            <option value="<?= $cliente->CD_CLIENTE ?>">
                                <?= $cliente->RAZAO_SOCIAL ?>
                            </option>

                        <?php endforeach; ?>
                    </select>
            </div>

            <div class="grupo">
                <label>Valor Total</label>
                <input type="text"
                       id="EdtValorVenda"
                       name="VALOR_VENDA"
                       class="obrigatorio_cadastro_venda"
                       data-nome="o Valor Total">
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