<?php

/* AcmeIndexBundle:Index:index.html.twig */
class __TwigTemplate_0b264dd5931b77dcc6792f3c33517605 extends Twig_Template
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
        echo "Главная страница";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <p>Поздравляем! Вы зашли на страницу отправик почты самому себе.</p> 
    <p>Для отправик формы нажмите <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_userform"), "html", null, true);
        echo "\">Отправить форму</a></p>
 
 ";
    }

    public function getTemplateName()
    {
        return "AcmeIndexBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
