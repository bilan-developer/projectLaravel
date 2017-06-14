<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
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
     * Выборка пользователей
     *
     * @param   $query
     * @return \App\News  $news
     *
     */
    public function scopeSampleUsers()
    {
        $users = DB::table('users')->get();

         return($users);
    }

    public function getKey(){
        if (! $this->exists) {
            throw new ModelNotFoundException();
        }
        return $this->getTable() . '#' . $this->id;
    }
}
