<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

#[Fillable(['place', 'time', 'pay'])]
class Submission extends Model
{
    public $timestamps = false;
    protected $fillable = ['place', 'time', 'pay'];
}
