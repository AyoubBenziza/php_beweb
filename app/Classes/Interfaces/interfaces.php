<?php
// Declaration de l'interface 'Template'
interface Template
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implémentation de l'interface
// Ceci va fonctionner
class WorkingTemplate implements Template
{
    public $vars = [];

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
        var_dump($this->vars);
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

// Ceci ne fonctionnera pas
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (Template::getHtml)
// class BadTemplate implements Template
// {
//     private $vars = [];

//     public function setVariable($name, $var)
//     {
//         $this->vars[$name] = $var;
//     }
// }

?>