<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table="sw_settings";
    protected $primaryKey="id";
    protected $fillable=['key_text','value_text'];
}
