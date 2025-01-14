<?php

namespace Dotlogics\Grapesjs\App\Editor;

class EditorCanvas
{
    public array $styles = [];
    public array $scripts = [];

    function __construct()
    {
        $this->styles = config('grapesjs.styles');
        $this->scripts = config('grapesjs.scripts');
    }

    public function mergeStyles($styles)
    {
        $this->styles = array_merge($this->styles, $styles);
        
        return $this;
    }

    public function mergeScripts($scripts)
    {
        $this->scripts = array_merge($this->scripts, $scripts);

        return $this;
    }
}
