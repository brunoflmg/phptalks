<?php

/**
 * This class provides static methods that return pieces of data specific to
 * your app
 */
class AppInfo
{
    /**
     * @return the appID for this app
     */
    public static function appID()
    {
        // return getenv('FACEBOOK_APP_ID');
        return '503156733052897';
    }

    /**
     * @return the appSecret for this app
     */
    public static function appSecret()
    {
        // return getenv('FACEBOOK_SECRET');
        return '499376073a0ebf70ee2b2321dd3b875e';
    }

    /**
     * @return the url
     */
    public static function getUrl($path = '/')
    {
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)
            || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
        ) {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }

        return $protocol . $_SERVER['HTTP_HOST'] . $path;
    }
}
