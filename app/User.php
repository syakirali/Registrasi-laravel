<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Support\Facades\DB;

/**
 * @property string $email
 * @property string $password
 * @property string $token
 */
class User extends Authenticatable
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'email';

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
    // public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['password', 'token'];

    public function getRememberToken()
    {
        return $this->token;
    }

    public function setRememberToken($value)
    {
        $this->token = $value;
    }

    public function getRememberTokenName()
    {
        return 'token';
    }


    //
    // /**
    //  * Get the name of the unique identifier for the user.
    //  *
    //  * @return string
    //  */
    // public function getAuthIdentifierName()
    // {
    //     return $this->$primaryKey;
    // }
    //
    // /**
    //  * Get the unique identifier for the user.
    //  *
    //  * @return mixed
    //  */
    // public function getAuthIdentifier()
    // {
    //     return $this->$primaryKey;
    // }
    //
    // /**
    //  * Get the password for the user.
    //  *
    //  * @return string
    //  */
    // public function getAuthPassword()
    // {
    //     return 'password';
    // }
    //
    // /**
    //  * Get the token value for the "remember me" session.
    //  *
    //  * @return string
    //  */
    // public function getRememberToken()
    // {
    //     return 'token';
    // }
    //
    // /**
    //  * Set the token value for the "remember me" session.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setRememberToken($value)
    // {
    //
    // }
    //
    // /**
    //  * Get the column name for the "remember me" token.
    //  *
    //  * @return string
    //  */
    // public function getRememberTokenName()
    // {
    //     return 'token';
    // }
    //
    // public function newQuery(){
    //     return DB::table('users');
    // }
}
