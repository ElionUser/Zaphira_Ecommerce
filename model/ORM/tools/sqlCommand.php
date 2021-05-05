<?php

    require_once './model/ORM/tools/toolsSentence.php';

    class sqlCommand extends toolsSentence {

        /* Ejecuta la sentencia slq create */ 

        public function sqlCreate($_tb) {

            $sql = "insert into $_tb(".$this->stringKeys().") values (".$this->valueKeys().")";
            $stmt = self::StaticConnect()->prepare($sql);
            $this->bindValues($stmt);
            $stmt->execute(); 
        }

        

    }
?>