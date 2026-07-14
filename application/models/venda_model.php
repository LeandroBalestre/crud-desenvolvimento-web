<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda_model extends CI_Model
{

    public function listar()
    {
        return $this->db
                    ->select('VENDAS.*, CLIENTE.NOME_FANTASIA')
                    ->from('VENDAS')
                    ->join(
                        'CLIENTE',
                        'CLIENTE.CD_CLIENTE = VENDAS.CD_CLIENTE',
                        'left'
                    )
                    ->order_by('VENDAS.NR_VENDA')
                    ->get()
                    ->result();
    }

    public function buscar($cd_venda)
    {
        return $this->db
                    ->where('NR_VENDA', $cd_venda)
                    ->get('VENDAS')
                    ->row();
    }

    public function inserir($dados)
    {
        return $this->db
                    ->insert('VENDAS', $dados);
    }

    public function excluir($cd_venda)
    {
        return $this->db
                    ->where('NR_VENDA', $cd_venda)
                    ->delete('VENDAS');
    }

    public function editar($nr_venda, $dados)
    {
        return $this->db
                    ->where('NR_VENDA', $nr_venda)
                    ->update('VENDAS', $dados);
    }
    public function possuiVendas($cd_cliente)
    {
        return $this->db
                    ->where('CD_CLIENTE', $cd_cliente)
                    ->count_all_results('VENDAS');
    }

}