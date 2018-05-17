<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $fakultas
 * @property string $nama
 * @property string $jenjang
 * @property string $akreditasi
 * @property Fakulta $fakulta
 * @property Pendaftar[] $pendaftars
 * @property Pendaftar[] $pendaftars
 * @property Pendaftar[] $pendaftars
 */
class Prodi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prodi';

    /**
     * @var array
     */
    protected $fillable = ['fakultas', 'nama', 'jenjang', 'akreditasi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fakultas()
    {
        return $this->belongsTo('App\Fakultas', 'fakultas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pendaftars1()
    {
        return $this->hasMany('App\Pendaftar', 'pilihan1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pendaftars2()
    {
        return $this->hasMany('App\Pendaftar', 'pilihan2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pendaftars3()
    {
        return $this->hasMany('App\Pendaftar', 'pilihan3');
    }
}
