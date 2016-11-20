<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RessourcesController
{

    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $this->container->view->render($response, 'pages/ressources.twig');
    }

    public function getConnection() {
        $dbhost="127.0.0.1";
        $dbuser="root";
        $dbpass="merci";
        $dbname="Hydra";
        $dbh = new \PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }

    public function store(RequestInterface $request, ResponseInterface $response)
    {
        $sql = "INSERT INTO Ressources (link, description, Categories_id, name) VALUES (:link, :description, :Categories_id, :nom)";
        //echo $sql;die();
        try {
            $db = $this->getConnection();
            $stmt = $db->prepare($sql);

            $stmt->bindParam("link", $_POST['link']);
            $stmt->bindParam("description", $_POST['description']);
            $stmt->bindParam("Categories_id", $_POST['Categories_id']);
            $stmt->bindParam("nom", $_POST['name']);

            $stmt->execute();
            //return $response->withRedirect('/rest-of-web');
            //$ressource->id = $db->lastInsertId();
            //$db = null;
            //echo "succes";
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }

    }
}