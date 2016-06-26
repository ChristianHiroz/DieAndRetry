<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_73ed2d07d091b4eec0a66c2cc1022ab6a11cc1cfcb27b6bd896cdcbe1cc53ba6 extends Twig_Template
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
        $__internal_cf400fbc52d3bb5edc72ef5324c500155da5f72a72b05dac55b57aee22d409e5 = $this->env->getExtension("native_profiler");
        $__internal_cf400fbc52d3bb5edc72ef5324c500155da5f72a72b05dac55b57aee22d409e5->enter($__internal_cf400fbc52d3bb5edc72ef5324c500155da5f72a72b05dac55b57aee22d409e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf400fbc52d3bb5edc72ef5324c500155da5f72a72b05dac55b57aee22d409e5->leave($__internal_cf400fbc52d3bb5edc72ef5324c500155da5f72a72b05dac55b57aee22d409e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
