<?php namespace Bantenprov\TaskProfile\Http\Middleware;

use Closure;

/**
 * The TaskProfileMiddleware class.
 *
 * @package Bantenprov\TaskProfile
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskProfileMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
