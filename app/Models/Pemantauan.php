<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemantauan extends Model
{
   use HasFactory;
   protected $fillable = [
      'klien_id', 'perasaan', 'polatidur', 'masalah', 'terapi', 'tanggal'
   ];

}