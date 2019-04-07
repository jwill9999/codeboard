<?php

namespace App;

use App\Project;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
   *  @var array
   */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * a User has many projects $user->projects
     *
     * @return void
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'owner_id');
    }
}
