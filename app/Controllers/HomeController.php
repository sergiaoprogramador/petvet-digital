<?php

namespace App\Controllers;

use Slim\Views\Twig as View;
use Curl\Curl;
use Exception;

// Models
use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Servico;

// Cria os controladores
class HomeController extends Controller
{
    // Acessa Login
    public function inicio($request, $response)
    {
        $vars = [
            'page' => [
            'title' => 'PetVet Digital - Inicio',
            'description' => 'Faça o login'
            ]
        ];

        return $this->view->render($response, 'inicio.twig', $vars);
    }

    // Acessa Meus Dados
    public function home($request, $response, $args)
    {
        $vars = [
            'page' => [
            'title' => 'PetVet Digital - Home'
            ]
        ];
        
        return $this->view->render($response, 'home.twig', $vars);
    }

    // Acessa Solicitações de Serviços
    public function consulta($request, $response, $args)
    {
        $vars = [
            'page' => [
            'title' => 'PetVet Digital - Solicite seu Serviço',
            'description' => 'Solicitações de Serviços'
            ],
        ];
        
        return $this->view->render($response, 'consulta.twig', $vars);
    }

    public function login($request, $response, $args)
    {
        $vars = [
            'page' =>[
                'title'=> 'PetVet Digital - Faça Login',
                'description' => 'Login'
            ]
        ];

        return $this->view->render($response, 'login.twig', $vars);
    }

    // Acessa Alterar Senha Central
    public function alterarSenha($request, $response, $args)
    {
        $vars = [
            'page' => [
            'title' => 'Central de Atendimento - Alterar Senha Central',
            'description' => 'Alterar Senha Central',
            'alterarSenha' => 'ativado'
            ],
            'pageAtual' => 1
        ];

        return $this->view->render($response, 'alterarSenha.twig', $vars);
    }
}