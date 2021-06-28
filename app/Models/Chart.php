<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Chart extends Model{
    protected $fillable = [
        'id',
        'immagine',
        'titolo', 
        'data', 
        'quantita',
        'luogo'
    ];
   public function user(){
       return $this->belongsTo("App\Models\User");
   }
   public $timestamps=false;
}



?>