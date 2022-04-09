<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function setNameAttr($value){
        $this->attributes['name'] = strtolower($value);
    }
    public function getSlugAttribute(){
        return str_replace(" ", "%", $this->name);
    }
}
