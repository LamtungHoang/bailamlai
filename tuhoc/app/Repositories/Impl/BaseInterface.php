<?php 
namespace App\Repositories\Impl;
interface BaseInterface{
       public function getAll();
       public function getById($id);
       public function create($data);
       public function delete($id);
       public function update($id,$data);
}
?>