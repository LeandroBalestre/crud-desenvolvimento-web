<form method="POST" action="<?= site_url('Vendas/editar') ?> " onsubmit="return validarEdicaoVenda()">

        <div id="painelEdicao" class="painel">

            <div class="painelConteudo">

                <h2>Editar Venda</h2>

                <input type="hidden" id="EdtNR_VENDA" name="NR_VENDA">

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
                           id="EdtEditarVALOR_VENDA" 
                           name="VALOR_VENDA"
                           class="obrigatorio_edicao_venda"
                           data-nome="o Valor Total">
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