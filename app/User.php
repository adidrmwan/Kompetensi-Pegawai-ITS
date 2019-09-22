<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 
        'nip',
        'jabatan_sekarang',
        'jabatan_impian', 
        'tmt_jabatan', 
        'masa_kerja', 
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sertifikats()
    {
        return $this->hasMany('App\Models\Sertifikat', 'user_id');
    }

    public function jabatanSekarang()
    {
        return $this->hasOne('App\Models\Jabatan' , 'id' , 'jabatan_sekarang');
    }

    public function jabatanImpian()
    {
        return $this->hasOne('App\Models\Jabatan', 'id', 'jabatan_impian');
    }

    public function rumpun()
    {
        return $this->hasOne('App\Rumpun', 'id');
    }

    public function tipe_pelatihans()
    {
        return $this->belongsToMany('App\Models\JenisSertifikat', 'sertifikat');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function employee()
    {
        return $this->where('users.id', '!=', '1')
                    ->where('users.id', '!=', '3')
                    ->join('role_user', 'role_user.user_id', '=', 'users.id')
                    ->join('roles', 'roles.id', '=', 'role_user.role_id')
                    ->select(['users.id', 'users.name as name', 'users.email','users.nip','users.jabatan','users.unit_kerja','users.kelas_jabatan'])->get();
    }
    /*
    * Method untuk menambahkan role (hak akses) baru pada user
    */ 
    public function putRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereName($role)->first();
        }
        return $this->roles()->attach($role);
    }
    /*
    * Method untuk menghapus role (hak akses) pada user
    */ 
    public function forgetRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereName($role)->first();
        }
        return $this->roles()->detach($role);
    }
    /*
    * Method untuk mengecek apakah user yang sedang login punya hak akses untuk mengakses page sesuai rolenya
    */ 
    public function hasRole($roleName)
    {
        foreach ($this->roles as $role)
        {
            if ($role->name === $roleName) return true;
        }
            return false;
    }
}
