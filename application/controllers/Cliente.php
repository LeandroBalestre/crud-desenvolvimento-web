<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->helper('url');
    }

    public function consulta()
    {
        $dados['clientes'] = $this->Cliente_model->listar();
        $this->load->view('clientes/consulta', $dados);
    }

    public function novo()
    {
        $dados['cliente'] = null;
        $this->load->view('clientes/cadastro', $dados);
    }

     public function salvar()
    {
        $dados = array(
            'CNPJ' => $this->input->post('CNPJ'),
            'RAZAO_SOCIAL' => $this->input->post('RAZAO_SOCIAL'),
            'NOME_FANTASIA' => $this->input->post('NOME_FANTASIA'),
            'VALOR_FATURAMENTO' => $this->input->post('VALOR_FATURAMENTO'),
            'ENDERECO' => $this->input->post('ENDERECO'),
            'TELEFONE' => $this->input->post('TELEFONE')
        );

        $this->Cliente_model->inserir($dados);
        redirect('Cliente/consulta');
    }

    public function excluir($cd_cliente)
        {
            $this->load->model('Venda_model');

            if ($this->Venda_model->possuiVendas($cd_cliente) > 0)
            {
                echo "
                <script>
                    alert('Não é possível excluir este cliente, pois existem vendas vinculadas.');
                    window.location.href = '" . site_url('Cliente/consulta') . "';
                </script>";
                return;
            }

            $this->Cliente_model->excluir($cd_cliente);

            redirect('Cliente/consulta');
        }

    public function editar()
    {
        $cd_cliente = $this->input->post('CD_CLIENTE');

        $dados = array(
            'CNPJ'               => $this->input->post('CNPJ'),
            'RAZAO_SOCIAL'       => $this->input->post('RAZAO_SOCIAL'),
            'NOME_FANTASIA'      => $this->input->post('NOME_FANTASIA'),
            'VALOR_FATURAMENTO'  => $this->input->post('VALOR_FATURAMENTO'),
            'ENDERECO'           => $this->input->post('ENDERECO'),
            'TELEFONE'           => $this->input->post('TELEFONE')
        );

        $this->Cliente_model->editar($cd_cliente, $dados);

        redirect('Cliente/consulta');
    }

}

