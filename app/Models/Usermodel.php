<?php
namespace Models;

use Resources;

class Usermodel{

    public function __construct(){
        $this->db = new Resources\Database;
        $this->table = 'user_table';
    }

    public function create(){
        $query = "INSERT INTO $this->table () VALUES ()";
        $result = $this->db->results($query);
    }

    /*
    *@param : $limit
    *@param : $offset
    */
    public function retrive($limit,$offset){
        $query = "SELECT * FROM $this->table WHERE isvisible=0 LIMIT $limit OFFSET $offset ";
        $result = $this->db->results($query);

        return $result;
    }

    public function update(){
        $query = "UPDATE $this->table SET WHERE id=$id";
        $result = $this->db->results($query);

    }

    public function delete($id){
        $query = "UPDATE $this->table SET isvisible=0 WHERE id=$id";

        $result = $this->db->results($query);
    }
}

$sql = "INSERT INTO `litlecms_db`.`user_table` (`id`, `name`, `email`, `phone`, `date`, `company`, `address`, `city`, `zip_code`, `country`, `location`, `isvisible`) VALUES (NULL, \'andy winarko\', \'winarcooo@gmail.com\', \'085776439349\', \'Jul 29, 2015\', \'detikcom\', \'jln masjid al akhyar\', \'depok\', \'16512\', \'indonesia\', \' -0.61665, 95.48208\', \'1\');";
