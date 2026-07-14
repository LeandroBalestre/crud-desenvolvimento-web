<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model
{

    public function listar()
    {
        return $this->db
                    ->order_by('CD_CLIENTE')
                    ->get('CLIENTE')
                    ->result();
    }

    public function buscar($cd_cliente)
    {
        return $this->db
                    ->where('CD_CLIENTE', $cd_cliente)
                    ->get('CLIENTE')
                    ->row();
    }

    public function inserir($dados)
    {
        return $this->db
                    ->insert('CLIENTE', $dados);
    }

    public function excluir($cd_cliente)
    {
        return $this->db
                    ->where('CD_CLIENTE', $cd_cliente)
                    ->delete('CLIENTE');
    }

    public function editar($cd_cliente, $dados)
    {
        $this->db->where('CD_CLIENTE', $cd_cliente);
        return $this->db->update('CLIENTE', $dados);
    }

}