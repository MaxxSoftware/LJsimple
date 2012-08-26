<?php

/* AcmeIndexBundle:Index:success.html.twig */
class __TwigTemplate_7c95116f4141ac04bddf90407ba5cb36 extends Twig_Template
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
        echo "Результат отправки формы";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo " 
    ";
        // line 6
        if (($this->getContext($context, "message_send_result") == 1)) {
            // line 7
            echo "        Сообщение отправленно
    ";
        } else {
            // line 9
            echo "        Ошибка отправки
    ";
        }
        // line 11
        echo "    
    <br>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_userform"), "html", null, true);
        echo "\">Отправить новое</a>
    <br>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_start"), "html", null, true);
        echo "\">Вернуться на главную</a>
 
 ";
    }

    public function getTemplateName()
    {
        return "AcmeIndexBundle:Index:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  53 => 13,  49 => 11,  45 => 9,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
