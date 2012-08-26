<?php

/* AcmeIndexBundle::base.html.twig */
class __TwigTemplate_a6bfcd959927a13d71e0e01f382a3681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>      
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "        <div id=\"clear\"></div>
        <div id=\"footer\">
            ";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "        </div>        
    </body>
   
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "My Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "                &copy; Копирайты тут 2012 by <a href=\"#\">Я</a>.
            ";
    }

    public function getTemplateName()
    {
        return "AcmeIndexBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  71 => 13,  66 => 10,  61 => 9,  55 => 6,  48 => 16,  46 => 13,  42 => 11,  39 => 10,  37 => 9,  31 => 6,  27 => 5,  21 => 1,);
    }
}
