<?php namespace Bantenprov\TaskProfile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The TaskProfile facade.
 *
 * @package Bantenprov\TaskProfile
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskProfile extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'task-profile';
    }
}
