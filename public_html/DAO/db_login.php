<?php

/**
 * @author Jason
 */
class db_login {

    private $db_host = 'localhost';
    private $db_database = 'jcarcam1_ImageUploadService';
    private $db_username = 'root';
    private $db_password = '9AkumaDesu';

    public function getDbLocalHost() {
        return $this->db_host;
    }

    public function getDatabase() {
        return $this->db_database;
    }

    public function getDbUsername() {
        return $this->db_username;
    }

    public function getDbPassword() {
        return $this->db_password;
    }

}

?>
