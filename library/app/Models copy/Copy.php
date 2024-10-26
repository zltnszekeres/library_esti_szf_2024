<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    protected $primaryKey = 'copy_id';
    /** @use HasFactory<\Database\Factories\CopyFactory> */
    
    //autoincrement értékeket ide nem írunk!
    protected $fillable = [
        'book_id',
        'user_id',
    ];
}
