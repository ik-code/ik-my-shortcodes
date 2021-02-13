<?php


namespace IkMyShortcodes\Shortcodes;


class ShortcodeSecond
{


    /**
     * @param $atts
     * @param null $content
     * @return string
     */
    public function register($atts, $content = null)
    {

        return '<h1>ShortcodeSecond</h1>>';


    }


    public function initShortcode()
    {
        add_shortcode('ShortcodeSecond', array($this, 'register'));
    }
}