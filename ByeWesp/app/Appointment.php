<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable =['username','date'];

    public function getPosts($session){
        if (!$session->has('posts')){
            $this->getDummyData($session);
        }
        return $session->get('posts');
    }
    class
}
