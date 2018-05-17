<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property Prodi[] $prodis
 */
class Fakultas extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nama'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodis()
    {
        return $this->hasMany('App\Prodi', 'fakultas');
    }
}
