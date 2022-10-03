<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

if (!function_exists('iubenda_privacy_policy_url')) {
    /**
     * Generate the URL to Iubenda Privacy Policy page.
     */
    function iubenda_privacy_policy_url(): string
    {
        $locale = App::getLocale();
        $id = Config::get("iubenda.privacy_policy.$locale.id");
        return "https://www.iubenda.com/privacy-policy/$id";
    }
}

if (!function_exists('iubenda_cookie_policy_url')) {
    /**
     * Generate the URL to Iubenda Cookie Policy page.
     */
    function iubenda_cookie_policy_url(): string
    {
        return iubenda_privacy_policy_url().'/cookie-policy';
    }
}