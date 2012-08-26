<?php

/* AcmeIndexBundle:Index:form.html.twig */
class __TwigTemplate_e5c0b3fcc36394e365963a67dd8815a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeIndexBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeIndexBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Заполните форму";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "   <div class=\"main\"> 
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_userform"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "  
            <input type=\"submit\" value=\"Отправить письмо\" />
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeIndexBundle:Index:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  39 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
