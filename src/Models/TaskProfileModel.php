<?php namespace Bantenprov\TaskProfile\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The TaskProfileModel class.
 *
 * @package Bantenprov\TaskProfile
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskProfileModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'task_profile';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
