<?php

namespace IkMyShortcodes\Shortcodes;

class ShortcodeHappyDay
{

    /**
     * @param $atts
     * @param null $content
     * @return string
     */
    public function register($atts, $content = null)
    {

        return 'Happy day is' . date("d/m/Y");

    }


    public function initShortcode()
    {
        add_shortcode('happy_day', array($this, 'register'));
    }

}