<?php namespace Bantenprov\TaskProfile\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\TaskProfile\Facades\TaskProfile;
use Bantenprov\TaskProfile\Models\TaskProfileModel;

/**
 * The TaskProfileController class.
 *
 * @package Bantenprov\TaskProfile
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskProfileController extends Controller
{
    public function demo()
    {
        return TaskProfile::welcome();
    }
}
