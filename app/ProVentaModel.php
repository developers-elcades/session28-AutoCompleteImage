<?php

namespace Market;

use Illuminate\Database\Eloquent\Model;

class ProVentaModel extends Model
{

   protected $table= 'producto_venta';
   protected $primarykey = 'id';
   public $timestamps = false;

   protected  $fillable= [
      'id', 'products_id', 'venta'
   ];


   public function products()
   {
      // hasmany - tiene muchas
      return $this->belongsto(Product::class);
   }


}
