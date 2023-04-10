<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autore
 *
 * @property $id
 * @property $nombre
 * @property $fecha_nac
 * @property $id_nacionalidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @property Nacionalidade $nacionalidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'fecha_nac' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fecha_nac','id_nacionalidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'id_autor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nacionalidade()
    {
        return $this->hasOne('App\Models\Nacionalidade', 'id', 'id_nacionalidad');
    }
    

}
