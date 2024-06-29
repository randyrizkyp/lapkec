<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
   use HasFactory;
   protected $fillable = [
      'conversation_id', 'psikolog_id', 'klien_id', 'penjelasan', 'makanan', 'terapi'
   ];

}