<?php

use Phalcon\Mvc\Router;

$router = new Router();

//Remove trailing slashes automatically
$router->removeExtraSlashes(true);

//main route
$router->add("/", array(
    'controller' => 'index',
    'action' => 'index'
));

$router->add("/Produto/lista", array(
    'controller' => 'Produto',
    'action' => 'lista'
        )
);

$router->add("/Usuario/lista", array(
    'controller' => 'Usuario',
    'action' => 'lista'
        )
);
$router->add("/Marca/lista", array(
    'controller' => 'Marca',
    'action' => 'lista'
        )
);

//GET VERB - GET ELEMENT
//Get elemets of relationship. Ex: /Usuario/1/Produto
$router->addGet('/:controller/:int/([a-zA-Z0-9_-]+)', array(
    'controller' => 1,
    'action' => "list",
    'id' => 2,
    'relationship' => 3
));
//Get one element. Ex: /Usuario/2
$router->addGet('/:controller/:int', array(
    'controller' => 1,
    'action' => "get",
    'id' => 2
));
//Get all elements. Ex: /Usuario
$router->addGet('/:controller', array(
    'controller' => 1,
    'action' => "list"
));

//POST VERB - CREATE ELEMENT
//Create a new element. Ex: /Usuario
$router->addPost('/:controller', array(
    'controller' => 1,
    'action' => "save"
));

$router->addPost('/Login/autentica', array(
    'controller' => 'Login',
    'action' => "autentica"
));

//PUT VERB - UPDATE ELEMENT
//Update a new element. Ex: /Usuario
$router->addPost('/:controller/:int', array(
    'controller' => 1,
    'action' => "save",
    'id' => 2
));

//DELETE VERB - UPDATE ELEMENT
$router->addDelete('/:controller/:int', array(
    'controller' => 1,
    'action' => "delete",
    'id' => 2
));

//not founded route
$router->notFound(array(
    'controller' => 'error',
    'action' => 'page404'
));

$router->setDefaults(array(
    'controller' => 'index',
    'action' => 'index'
));

return $router;
