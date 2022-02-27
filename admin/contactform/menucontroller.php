<?php

    require_once 'database.php';
    class MenuController{
        public $db;

        public function __construct(){
            $this->db = new database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from contactform');

            return $query->fetchAll();
        }


        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO contactform (username, lastname, email, number, textarea)
            VALUES(:username, :lastname, :email, :number, :textarea)');
            $query->bindParam(':username', $request['username']);
            $query->bindParam(':lastname', $request['lastname']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':number', $request['number']);
            $query->bindParam(':textarea', $request['textarea']);
            $query->execute();

            // return header('Location: menuDashboard.php');

        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * from contactform Where id = :id');

            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE contactform SET username = :username,
             lastname = :lastname, email = :email, number = :number, textarea = :textarea Where id = :id');
            $query->bindParam(':username', $request['username']);
            $query->bindParam(':lastname', $request['lastname']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':number', $request['number']);
            $query->bindParam(':textarea', $request['textarea']);
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: menuDashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from contactform WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: menuDashboard.php');
        }
    }

?>