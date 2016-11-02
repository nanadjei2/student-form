<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'index_number', 'programme_of_study', 'year_of_study', 'trailed_courses',
      'current_CWA', 'courses', 'signature_of_participant', 'comments', 'reasons', 'signature_and_name_of_office', 'date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];



    // public function member() {
    //   return $this->belongsTo('app/member');
    // }


    public static $rules = [
      'name' => 'required',
      'index_number' => 'required|numeric',
      'programme_of_study' => 'required|min:4',
      'year_of_study' => 'required',
      'trailed_courses' => 'required|alpha',
      'current_CWA' => 'required|numeric',
      'signature_of_participant' => 'required',
      'student_date' => 'required|date',
      'comments' => 'required',
      'reason' => 'required|alpha',
      'signature_and_name_of_office' => 'required',
      'office_date' => 'required|date'
    ];





}
