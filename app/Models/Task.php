<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'status'];
}
