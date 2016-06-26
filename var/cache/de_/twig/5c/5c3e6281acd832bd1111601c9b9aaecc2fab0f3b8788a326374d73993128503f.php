<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7e9a6ba1926b8d403e932403dc26ff5fbef7dc2a375dd7e941bb38c686ca739f extends Twig_Template
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
        $__internal_0768b7365fc75c56ceefb0dfd02c2e20fb18a49f65333438c6f54945f8b9b63a = $this->env->getExtension("native_profiler");
        $__internal_0768b7365fc75c56ceefb0dfd02c2e20fb18a49f65333438c6f54945f8b9b63a->enter($__internal_0768b7365fc75c56ceefb0dfd02c2e20fb18a49f65333438c6f54945f8b9b63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0768b7365fc75c56ceefb0dfd02c2e20fb18a49f65333438c6f54945f8b9b63a->leave($__internal_0768b7365fc75c56ceefb0dfd02c2e20fb18a49f65333438c6f54945f8b9b63a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
