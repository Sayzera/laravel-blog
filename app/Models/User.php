<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function create($user) {
        DB::table('users')->insert($user);
    }

    static public function profil_data($userid) {
        return DB::table('users')->where('id',$userid)->get()[0];
    }

    static public function profil_update($request,$id) {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
            ],
            [
                'name.required' => 'isim alanı boş bırakılamaz',
                'email.required'=> 'Email alanı boş bırakılamaz'
            ]
            );

        if(empty($request->password)) {
            $request->password = DB::table('users')->where('id',$id)->get()[0]->password;
        } else {
            $request->password = Hash::make($request->password);
        }

        DB::table('users')->where('id',$id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]
        );

       return back()
        ->with('success','Değişiklikler başarıyla kayıt edildi');

    }

}
