<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nik
 * @property int $pilihan1
 * @property int $pilihan2
 * @property int $pilihan3
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $asal_sekolah
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $no_seluler
 * @property string $tlp_rumah
 * @property string $email
 * @property string $alamat
 * @property string $created_at
 * @property string $updated_at
 * @property Prodi $prodi1
 * @property Prodi $prodi2
 * @property Prodi $prodi3
 */
class Pendaftar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pendaftar';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nik';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['pilihan1', 'pilihan2', 'pilihan3', 'nama', 'tempat_lahir', 'tanggal_lahir', 'asal_sekolah', 'jenis_kelamin', 'agama', 'no_seluler', 'tlp_rumah', 'email', 'alamat', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prodi1()
    {
        return $this->belongsTo('App\Prodi', 'pilihan1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prodi2()
    {
        return $this->belongsTo('App\Prodi', 'pilihan2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prodi3()
    {
        return $this->belongsTo('App\Prodi', 'pilihan3');
    }
}
