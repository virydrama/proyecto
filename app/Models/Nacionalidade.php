<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nacionalidade
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Autore[] $autores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nacionalidade extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function autores()
    {
        return $this->hasMany('App\Models\Autore', 'id_nacionalidad', 'id');
    }
    

}
