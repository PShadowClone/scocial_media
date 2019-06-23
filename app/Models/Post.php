<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * table name
     *
     * @var string
     */
   protected $table = 'posts';
    /**
     * table's primary key
     *
     * @var string
     */
   protected $primaryKey = 'id';
    /**
     * table columns
     * model attributes
     *
     * @var array
     */
   protected $fillable = [
       'content' ,
       'address',
       'image',
       'category_id',
       'sub_category_id',
       'user_id'
   ];

    /**
     * posts' category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   public function category(){
       return $this->belongsTo(Category::class , 'category_id' , 'id');
   }

    /**
     * posts' sub category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   public function subCategory(){
       return $this->belongsTo(Category::class , 'category_id' , 'id');
   }
}
