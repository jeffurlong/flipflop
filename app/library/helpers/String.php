<?php namespace Helpers;

use Carbon\Carbon;

class String
{
    public static function subdomain($max = 2)
    {
        if (isset($_SERVER['SERVER_NAME']))
        {
            $segments = explode('.', $_SERVER['SERVER_NAME']);

            return (count($segments) > $max and $segments[0] !== 'www') ? $segments[0] : null;
        }
    }

    public static function request()
    {
        if (isset($_SERVER['REQUEST_URI']))
        {
            $request = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

            return implode('_', $request);
        }
    }

    public static function date($dt, $format ='M d Y')
    {
        $date = Carbon::parse($dt);

        if ($date->diffInDays(Carbon::now()) < 7)
        {
            return $date->diffForHumans();
        }
        else
        {
            return $date->format($format);
        }
    }

    public static function age($dob)
    {
        return ( ! $dob) ? Lang::get('helpers.na') : date_diff(date_create(), date_create($dob))->y;
    }

    public static function possessive($string)
    {
        return ends_with($string, 's') ? $string."'" : $string."'s";
    }
}
