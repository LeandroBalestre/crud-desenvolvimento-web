<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Venda_model');
        $this->load->model('Cliente_model');
        $this->load->helper('url');
    }
    
    public function consulta()
    {
        $dados['vendas'] = $this->Venda_model->listar();
        $dados['clientes'] = $this->Cliente_model->listar();
        
        $this->load->view('vendas/consulta', $dados);
    }

    public function novo()
    {
        $dados['venda'] = null;
        $this->load->view('vendas/cadastro', $dados);
    }

     public function salvar()
    {
        $dados = array(
            'VALOR_VENDA' => $this->input->post('VALOR_VENDA'),
            'CD_CLIENTE' => $this->input->post('CD_CLIENTE'),
        );

        $this->Venda_model->inserir($dados);
        redirect('Vendas/consulta');
    }

    public function excluir($cd_venda)
    {   
        $this->Venda_model->excluir($cd_venda); 
        redirect('Vendas/consulta');
    }

    public function editar()
    {
        $cd_venda = $this->input->post('NR_VENDA');

        $dados = array(
            'VALOR_VENDA' => $this->input->post('VALOR_VENDA'),
            'CD_CLIENTE' => $this->input->post('CD_CLIENTE')
        );

        $this->Venda_model->editar($cd_venda, $dados);

        redirect('Vendas/consulta');
    }

}

