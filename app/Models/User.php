<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $casts=['user_id'=>'int'];
    private $user_id;
    private $user_name;
    private $user_pass;
    
    public function User($user_id,$user_name,$user_pass)
    {
        $this->user_id=$user_id;
        $this->user_name=$user_name;
        $this->user_pass=$user_pass;
    }
    
    public function getUserId()
    {
        return $this->user_id;
    }
    
    public function getUserName()
    {
        return $this->user_name;
    }
    
    public function getUserPass()
    {
        return $this->user_pass;
    }
    
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
