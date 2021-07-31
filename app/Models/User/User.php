<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $casts=['id'=>'int'];
    private $id;
    private $name;
    private $pass;
    
    public function User($id,$name,$pass){
        $this->id=$id;
        $this->name=$name;
        $this->pass=$pass;
    }
    public function getId(){return $this->id;}
    public function getName(){return $this->name;}
    public function getPass(){return $this->pass;}
    
    // public function userCheck($name,$pass){
    //     if($name!="" && $pass!=""){return true;}
    //     else return false;
    // }
    
    // public function generateId(){
    //     $id = mt_rand(10000000,99999999);
    //     return $id;
    // }
    
    // public function tableInsert($id,$name,$pass){
    //     DB::table('users')->insert([
    //         'id'=>$id,
    //         'name'=>$name,
    //         'pass'=>$pass
    //     ]);
    // }
}
