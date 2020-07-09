<?php

namespace App;

use App\Model\Kabupaten;
use App\Model\Provinsi;
use App\Model\Registrant;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
        'gender',
        'phone_number',
        'born_place',
        'born_date',
        'stay_address',
        'id_kabupaten',
        'id_provinsi',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function kabupaten() {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }

    public function provinsi() {
        return $this->belongsTo(Provinsi::class, 'id_provinsi', 'id');
    }

    public function hasRegistrant() {
        return $this->hasOne(Registrant::class, 'user_id', 'id');
    }

//    public function roles()
//    {
//        return $this->belongsToMany(Role::class, 'role_users')->withTimestamps();
//    }
//
//    public function isAdmin()
//    {
//        return $this->hasRole('super-admin');
//    }
//
//    public function hasRole(string $name) : bool
//    {
//        return $this->roles()->where('name', $name)->count();
//    }
//
//    public function hasPrivileges(string $role, string $privilege, string $id_feature)
//    {
//        $roles = $this->roles()->where('name', $role)->with(['privileges' => function ($query) use ($privilege, $id_feature) {
//            $query->where('privilege', '=', $privilege)->where('slug', $id_feature);
//        }])->whereHas('privileges')->first();
//        return isset($roles->privileges) ? count($roles->privileges) : 0;
//    }
}
