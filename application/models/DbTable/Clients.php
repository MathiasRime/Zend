<?php

class Application_Model_DbTable_Clients extends Zend_Db_Table_Abstract
{

    protected $_name = 'clients';
    protected $_primary = 'NUM_CLI';

    
     public function ajouterClient($numcli, $nomcli, $prenomcli, $adressecli, $codevillecli, $telcli) {
        $data = array('NUM_CLI' => $numcli,
            'NOM_CLI' => $nomcli,
            'PRENOM_CLI' => $prenomcli,
            'ADRESSE_CLI' => $adressecli,
            'CODEVILLE_CLI' => $codevillecli,
            'TEL_CLI' => $telcli,
        );
        
        $this->insert($data);
}
public function modifierAppartement($numcli, $nomcli, $prenomcli, $adressecli, $codevillecli, $telcli) {
         $data = array('NUM_CLI' => $numcli,
            'NOM_CLI' => $nomcli,
            'PRENOM_CLI' => $prenomcli,
            'ADRESSE_CLI' => $adressecli,
            'CODEVILLE_CLI' => $codevillecli,
            'TEL_CLI' => $telcli,
        );
        /* @var $id type */
        $this->update($data, "NUM_CLI='" . $numcli . "'");
    }

    public function supprimerAppartement($numcli) {
        $this->delete("NUM_CLI=" . $numcli);
    }
}
