<?php

use Phalcon\Session\Adapter\Files as Session;

class LoginController extends RestController {

    public $session;

    public function indexAction() {
        
    }

    public function autenticaAction() {

        $jsondata = file_get_contents('http://localhost/rest-api/Usuario/');

        $users = json_decode($jsondata, true);

        $flag = false;
        $cod = 0;
        if ($this->request->isPost()) {
            $login = $this->request->getPost('email');
            $senha = $this->request->getPost('senha');

            foreach ($users as $key => $value) {
                if ($login == $value['usua_email'] && $senha == $value['usua_senha'] && $value['usua_habilitado'] == 1) {
                    $flag = true;
                    $cod = $value['usua_codigo'];
                }
            }

            if ($flag) {
                session_destroy();
                $this->session = new Session();
                $this->session->start();
                $this->session->set("cod_user", $cod);
                $this->session->set("situation", 'loged');
                $this->response->redirect('Produto/lista');
            } else {
                $this->response->redirect();
            }
        }
    }

}
