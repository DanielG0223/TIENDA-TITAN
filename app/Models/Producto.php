<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
 use HasFactory;
 protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'categoria_id'];
 public function clases()
 {
 return $this->belongsTo(Clases::class); // Un producto pertenece a una categoria
 }

 public function compras()
 {
return $this->belongsToMany(Compras::class)->withPivot('cantidad', 'precio'); // Un producto puede estar en varios pedidos
 }

}

