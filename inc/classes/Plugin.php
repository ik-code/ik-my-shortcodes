<?php


namespace IkMyShortcodes;

class Plugin
{
    /**
     * @var array
     */
    private $shortcodes;

    /**
     * Plugin constructor.
     */
    public function __construct()
    {
        $this->shortcodes = array();
    }

    /**
     * @param $shortcode
     */
    public function addShortcode($shortcode)
    {
        array_push($this->shortcodes, $shortcode);
    }


    private function registerShortcodes(){
        if(count($this->shortcodes)){
            foreach ($this->shortcodes as $shortcode){
                $shortcode->initShortcode();
            }
        }
    }

    public function init()
    {
        $this->registerShortcodes();
    }

}