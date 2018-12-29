<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
    *The atributes that are mass assignable.
    *
    *@var array
    */
    protected $fillable = ['name'];

    /**
     * 
     * Get user that owns the task.
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
