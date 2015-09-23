<?php

class ProdutoController extends RestController {

    public function indexAction() {
        
    }

    public function listaAction() {
        $util = new Util();
        if (!$util->isLogged()) {
            $this->response->redirect('');
        }
    }

}
