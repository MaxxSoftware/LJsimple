<?php

/* AcmeIndexBundle:Index:email.txt.twig */
class __TwigTemplate_20ccd7ca898a1921d0caa4829766373c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "message"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo "   
   ";
            // line 2
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AcmeIndexBundle:Index:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  17 => 1,);
    }
}
