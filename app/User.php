<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'email', 'email_google', 'email_facebook', 'email_github', 'email_twitter', 'email_linkedin', 'email_verified_at', 'password', 'remember_token', 'status', 'users_group_id'
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

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Reference Table users_group. [ 0..1 <---> 1..1 ]
     *
     * @return UsersGroup
     */
    public function akses()
    {
      return $this->hasOne('App\UsersGroup','users_group_id','users_group_id');
    }

    /**
     * Reference Table users_group. [ 0..1 <---> 1..1 ]
     *
     * @return array
     */
    public static function profile()
    {
      $passwordHasChange = false;

      if(\Hash::check(request('oldPassword'),auth()->user()->password)) {
        if (request('newPassword')==request('confirmPassword') && request('newPassword') && request('confirmPassword')) {
          User::find(auth()->user()->id)->update([
            "password"=> bcrypt(request('newPassword'))
          ]);  

          $passwordHasChange = true;

          self::findAndReplaceEmail(['email_google', 'email_facebook', 'email_twitter', 'email_github', 'email_linkedin']);
        }

        if ($passwordHasChange) {
          return ['error' => false, 'messages' => 'Password & Email Anda Berhasil Diperbarui!'];
        } else {
          return ['error' => true, 'messages' => 'Password Baru & Konfirmasi Password Tidak Sama!'];
        }
      }
      return ['error' => true, 'messages' => 'Password Lama Anda Salah !'];
    }


    /**
     * Update Password.
     *
     * @return array
     */
    public static function findAndReplaceEmail($field){

      $id = auth()->user()->id;

      foreach ($field as $data) {
        $checkEmail[$data] = User::where($data, request($data))->count();
        if ($checkEmail==0)
          User::find($id)->update([$data => request($data)]);
      }

      return $checkEmail;
    }

  }
