<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_1fcc54b9dcc4575a4ed8197948c026a83c6095905011e12d441060b2abc408b7 extends Twig_Template
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
        $__internal_f5636bd62f976033b62a84752000568232d32db8984498b1db49c95f1f9f174e = $this->env->getExtension("native_profiler");
        $__internal_f5636bd62f976033b62a84752000568232d32db8984498b1db49c95f1f9f174e->enter($__internal_f5636bd62f976033b62a84752000568232d32db8984498b1db49c95f1f9f174e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f5636bd62f976033b62a84752000568232d32db8984498b1db49c95f1f9f174e->leave($__internal_f5636bd62f976033b62a84752000568232d32db8984498b1db49c95f1f9f174e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
