<?php

namespace Parkiller;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class ClienteModel extends Model  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';
    protected $primaryKey = 'ClienteId';
    public $timestamps = false;
    protected $fillable = ['SucursalId', 'TipoClienteId', 'FormaPagoId', 'Nombres', 'ApellidoPaterno', 'ApellidoMaterno', 'Estado', 'Municipio', 'Colonia', 'numExt', 'numInt', 'CP', 'Telefono', 'Email', 'Estatus'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];

    public function scopeName($query, $q) {
//        if (trim($name)) {
         return $query->where(\DB::raw('CONCAT(Nombres," ",ApellidoPaterno," ",ApellidoMaterno," ")'),'LIKE', '%'.$q.'% LIMIT 10');                           
//        }
    }
}
    