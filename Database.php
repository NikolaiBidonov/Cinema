<?php 

class DataBase
{
    const DATABASE = 'users.db';
    private $pdo;


    public function connect()
    {
        
        $this->pdo = new PDO('sqlite:' . __DIR__ . '/db/' . $this::DATABASE);
        
        return $this->pdo;
    }

    public function createTable() 
    {
        $this->pdo->query("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        cookie_id TEXT
        )");

        $this->pdo->query("CREATE TABLE IF NOT EXISTS form_data (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        userId INTEGER,
        name TEXT,
        email TEXT,
        phone TEXT,
        present TEXT,
        comment TEXT
        )");
    }

    public function insertRecord($dataUsers, $dataForm) 
    {
        $sql = "INSERT INTO users (cookie_id) VALUES (:id)";
        $request = $this->pdo->prepare($sql);
        if ($request){
            $request->execute($dataUsers);
        }

        $sql2 = "INSERT INTO form_data 
        (userId, name, phone, email, present, comment)
        VALUES (:id, :name, :phone, :email, :present, :comment)";
        $request2 = $this->pdo->prepare($sql2);
        if ($request2) {
            $request2->execute($dataForm);
        }
    }

    public function showRecords($filter)
    {
        if (isset($filter) && $filter){
        $sql = "SELECT * FROM form_data WHERE name=" . "'" . $filter . "'" . " ORDER by id DESC";}
        else {
            $sql = "SELECT * FROM form_data ORDER by id DESC";}
        
        $request = $this->pdo->prepare($sql);
        if ($request) {
            $request->execute();
        }
        return $request;
    }

}