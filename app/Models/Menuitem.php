<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Menuitem extends Model{
use HasFactory;
protected $fillable = ['target_type','target_id','menu_id','depth'];
}
