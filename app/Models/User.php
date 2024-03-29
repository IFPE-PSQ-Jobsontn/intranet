<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;

class User extends Authenticatable implements TableInterface
{

    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * A list of headers to be used when a table is displayed
     *
     * @return array
     */
    public function getTableHeaders()
    {
        return ['ID', trans('labels.name'),trans('labels.email')];
    }

    /**
     * Get the value for a given header. Note that this will be the value
     * passed to any callback functions that are being used.
     *
     * @param string $header
     * @return mixed
     */
    public function getValueForHeader($header)
    {
        switch ($header){
            case 'ID':
                return $this->id;
            case trans('labels.name'):
                return $this->name;
            case trans('labels.email'):
                return $this->email;
        }
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function hasPermission(Permission $permission){
        $retorno = false;
        $roles = $permission->roles;
        foreach ($roles as $role){
            if ($this->roles->contains('name', $role->name)) $retorno = true;
        }
        return $retorno;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

}
