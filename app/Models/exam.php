<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $fillable = ['task_name', 'task_details', 'created_date', 'category', 'owner'];
}
