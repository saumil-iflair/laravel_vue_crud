<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestParent extends Model
{
    use HasFactory;
    protected $fillable =['user_name'];
    protected $table ='test_parents';

    public function child()
    {
        return $this->hasMany('App\Models\TestChild','parent_id','id');
    }
}
