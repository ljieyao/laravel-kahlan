<?php

use Sofa\LaravelKahlan\Env;

/*
|--------------------------------------------------------------------------
| Laravel context helpers
|--------------------------------------------------------------------------
*/

/**
 * Wrap each spec in given wrappers. Replacement for Laravel's testing traits, eg. `use DatabaseTransactions`
 *
 * @param  string|array $in
 * @param  \Closure $closure
 * @return \Kahlan\Suite
 */
function wrapEach($in, $closure)
{
    return Env::wrap($in, $closure);
}

/**
 * Wrap each spec in given wrappers. Replacement for Laravel's testing traits, eg. `use DatabaseTransactions`
 *
 * Alias for wrapEach.
 *
 * @param  string|array $wrappers
 * @param  \Closure $closure
 * @return \Kahlan\Suite
 */
function using($wrappers, $closure)
{
    return wrapEach($wrappers, $closure);
}
