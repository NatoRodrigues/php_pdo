<?php 

namespace app\models;

require '../bootstrap.php';

abstract class Models
{   
    protected $connection;
    protected $table;

    public function __construct(){
        $this->connection = Connection::connect();
    }

    public function find($id){
        $sql_statement = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->connection->prepare($sql_statement);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function all(){
        $sql_statement = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($sql_statement);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create($data){
        // Supondo que $data seja um array associativo com os campos e valores a serem inseridos
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql_statement = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $stmt = $this->connection->prepare($sql_statement);
        $stmt->execute(array_values($data));
        return $this->connection->lastInsertId();
    }

    public function update($id, $data){
        // Supondo que $data seja um array associativo com os campos e valores a serem atualizados
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "{$key} = ?";
        }
        $set = implode(', ', $set);

        $sql_statement = "UPDATE {$this->table} SET {$set} WHERE id = ?";
        $stmt = $this->connection->prepare($sql_statement);
        $stmt->execute(array_merge(array_values($data), [$id]));
        return $stmt->rowCount();
    }

    public function delete($id){
        $sql_statement = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($sql_statement);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }
}


?>