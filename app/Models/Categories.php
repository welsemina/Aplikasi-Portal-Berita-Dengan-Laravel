<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model

{

    use HasFactory;


    protected $table = 'categories';

    protected $fillable = ['name'];


    public function news()

    {

        return $this->hasMany(News::class, 'category_id');

    }

}