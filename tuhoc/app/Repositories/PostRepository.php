<?php 
namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PostRepository extends BaseRepository{
       public function getTable()
       {
              return 'posts';
              
       }
       public function create($data)
       {
              DB::table($this->table)->insert($data);
       }
       public function update($id, $data)
       {
              DB::table($this->table)->where('id',$id)->update($data);
       }
}
?>