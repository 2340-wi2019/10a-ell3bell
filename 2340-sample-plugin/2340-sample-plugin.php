<?php

    /*
        Plugin Name: 2340 Sample Plugin
        Plugin URI: https://faculty.mccneb.edu/grosas/
        Description: A sample plugin for INFO 2340.
        Version: 1.0
        Author: Guillermo J. Rosas
        Author URI: https://faculty.mccneb.edu/grosas/
        License: GPL
    */

    add_shortcode("wittyquote", "get_quote");

    function get_quote($atts) {
        $quotes = array (
            "Ask and you shall receive.",
            "If you do not have anything nice to say, do not say anything at all.",
            "If at first you don't succeed, try, try again.",
            "Practice makes perfect!",
            "Where there is a will, there is a way."
        );

        return $quotes[array_rand($quotes)];
    }