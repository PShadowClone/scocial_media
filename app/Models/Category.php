<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * table name
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * table columns
     * model attributes
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * category's posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(){
        return $this->hasMany(Post::class , 'category_id' , 'id');
    }
}
