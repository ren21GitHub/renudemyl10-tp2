<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPost extends Model
{
    use HasFactory;

    protected $table = 'posts';//this will refer to table name posts in the database, even if the model name is not singular of the tablename in the database.
}
