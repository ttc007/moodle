<?php 
        $dsn="mysql:host=localhost;dbname=moodle";
        $username='root';
        $password='root';
        $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $db=new PDO($dsn,$username,$password,$options);

        function getCategories(){
            global $db;
            $q="select * from mdl_course_categories;";
            $statement=$db->prepare($q);
            // $statement->bindValue(':email',$email);
            $statement->execute();
            $rows=$statement->fetchAll();
            return $rows;
        }
        function getCourses($category){
            global $db;
            $q="select * from mdl_course where category=:category;";
            $statement=$db->prepare($q);
            $statement->bindValue(':category',$category);
            $statement->execute();
            $rows=$statement->fetchAll();
            return $rows;
        }
        function getAccount($email){
        global $db;
        $q="select * from  account 
        where email=:email ";
        $statement=$db->prepare($q);
        $statement->bindValue(':email',$email);
        //$statement->bindValue(':password',$password);
        $statement->execute();
        $rows=$statement->fetch();
        return $rows;
        }
?>