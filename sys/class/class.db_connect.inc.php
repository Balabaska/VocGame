<?php

class DB_connect {

    protected $dbo;

    protected function __construct($db=NULL) {

        if (is_object($dbo)) {

            $this->db=$dbo;

        }

        else {

            $dsn = "mysql: host=" . DB_HOST . ";dbname=" . DB_NAME;

            try {

                $this->db = new PDO($dsn,DB_USER,DB_PASS);

            }
            catch(Exception $e)
            {

                die($e->getMessage());

            }
        }
    }
}
?>