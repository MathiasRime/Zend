<?php

class ClientsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $clients = new Application_Model_DbTable_Clients();
        $this->view->Lesclients = $clients->fetchAll();
    }

    public function ajouterAction()
    {
        // action body
    }

    public function modifierAction()
    {
        // action body
    }

    public function supprimerAction()
    {
        // action body
    }


}







