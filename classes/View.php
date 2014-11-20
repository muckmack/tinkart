<?php

class View {

    protected $template;

    protected $properties = [];

    public function __construct($template)
    {
        $this->template = 'templates/' . $template . '.php';
    }

    public function render()
    {
        ob_start();

        extract($this->properties);

        include($this->template);

        return ob_get_clean();
    }

    public function set($key, $value = null)
    {
        if (is_array($key))
        {
            foreach($key as $k => $v)
            {
                $this->set($k, $v);
            }

            return $this;
        }

        $this->properties[$key] = $value;

        return $this;
    }

    public function __toString()
    {
        return $this->render();
    }

    public static function make($template)
    {
        return new static($template);
    }

} 