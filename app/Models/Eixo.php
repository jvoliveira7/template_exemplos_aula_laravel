<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eixo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nome'];
}
