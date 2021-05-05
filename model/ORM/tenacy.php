<?php

require_once './model/ORM/tools/sqlCommand.php';
require_once './core/methods.php';


class Tenacy extends sqlCommand {

    public static $sql = array(); 
    public static $stmt;

    /* ORM */

    /**
     *
     * Querys -> tipos de consultas
     * 
    */

    public static function all($table) {

        array_push( self::$sql , "SELECT * FROM $table" );
        return new static;
    }

    public static function where($col,$data) {

        array_push(self::$sql,"WHERE $col = '$data'");
        return new static;
    }

    public static function andWhere($col,$data) {

        array_push(self::$sql,"AND $col = '$data'");
        return new static;
    }

    public static function whereCond($col,$condition,$data) {

        array_push(self::$sql,"WHERE $col $condition $data");
        return new static; 
    }

    public static function whereIn($col,$array) {

        $cleanArr = implode("','",$array);

        $sql_Id = "'$cleanArr'";

        array_push(self::$sql,"WHERE $col IN (".$sql_Id.") ");

        return new static;
    }

    public static function whereInStr($col,$str) {

        array_push(self::$sql,"WHERE $col IN (".$str.") ");

        return new static;
    }

    public static function auth() {
        array_push(self::$sql,"WHERE email = '$_POST[email]' AND password = '$_POST[password]' ");
        return new static;
    }

    public static function find($table,$id) {
        array_push(self::$sql,"SELECT * FROM $table WHERE id = '$id'");
        return new static;
    }

    public static function join($table1,$table2,$col1,$col2) {

        array_push(self::$sql ,"INNER JOIN $table2
                                ON $table1.$col1 = $table2.$col2");
        
        return new static;
    }

    

    public static function test($table,$table2) {
        
        array_push(self::$sql,'');
       
        

        // "SELECT * FROM $table
        // INNER JOIN $table2 USING(id);
        // ");

        return new static;
    }
    

    public static function statement() {

        $sql = implode(' ',self::$sql);
        self::$stmt = self::StaticConnect()->query($sql);
        self::$sql = [];
    }


    /*
    *
    * ORDENES -> Order
    *
    */

    public function orderBy($col,$order)
    {
        array_push(self::$sql,"ORDER BY $col $order");
        return $this;
    }

    public function paginate($start,$limit) {

        array_push(self::$sql , "LIMIT $start,$limit");

        return $this;
    }

    public static function counting($col,$table) {

        array_push(self::$sql,"SELECT count($col) AS $col from $table");

        return new static;
    }

    public function limit($limit) {

        array_push(self::$sql , "LIMIT $limit");

        return $this;
    }
    
    /*
    *
    * Responses -> tipos de respuestas
    *
    */

    public function json() {

        self::statement();
        // $rslt = self::$stmt->fetchAll(PDO::FETCH_ASSOC);
        // $rslt = self::$stmt->fetchAll(PDO::FETCH_OBJ);
        $rslt = self::$stmt->fetch();
        return json_encode($rslt);
    }

    public function get() {

        self::statement();
        return self::$stmt->fetchAll(PDO::FETCH_OBJ);
        // return $rslt = self::$stmt->fetch();;
    }

    /*
    *
    * store -> procedimientos de store , update , delete
    *
    */

    
    public static function create($table)
    {
        if (isset($_POST['password'])) {

            $_POST['password'] = tCrypt($_POST['password']);
        }   

        self::$sql = "insert into $table(".self::stringKeys().") 
                      values (".self::valueKeys().")";
        self::storeStmt();
    }


    public static function storeStmt() {

        // print_r(self::$sql);

        $stmt = self::StaticConnect()->prepare(self::$sql);
        self::bindValues($stmt);

        $stmt->execute();
    }

    


    public static function update($table,$col,$id) {

        $dataSet = self::dataSet();
        self::$sql = "UPDATE $table SET $dataSet WHERE $col = $id";
        self::updateStmt(arrayInArr($_POST));
        
    }

    public static function delete($table,$col,$id) {

        self::$sql = "DELETE FROM $table WHERE $col = :$col";
        $stmt = self::StaticConnect()->prepare(self::$sql);
        $stmt->bindParam(':'.$col,$id,PDO::PARAM_INT);
        $stmt->execute();
        return new static;
    }

    

    public static function updateStmt($params) {

        $stmt = self::StaticConnect()->prepare(self::$sql);
        self::bindValues($stmt);
        $stmt->execute($params);
    }

    public static function deleteStmt() {

        $stmt = self::StaticConnect()->prepare(self::$sql);
        $stmt->execute();
    } 
}