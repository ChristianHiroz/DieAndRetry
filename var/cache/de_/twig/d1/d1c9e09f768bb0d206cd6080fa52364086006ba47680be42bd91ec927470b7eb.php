<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2191b4323f99032b0c46010987fc9c865bf333053527312f850ea386ac77ded4 extends Twig_Template
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
        $__internal_ac388863fd9c2490e3889762a65b0eb58b579ff63ebd51a6ffaad7b388394bcb = $this->env->getExtension("native_profiler");
        $__internal_ac388863fd9c2490e3889762a65b0eb58b579ff63ebd51a6ffaad7b388394bcb->enter($__internal_ac388863fd9c2490e3889762a65b0eb58b579ff63ebd51a6ffaad7b388394bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac388863fd9c2490e3889762a65b0eb58b579ff63ebd51a6ffaad7b388394bcb->leave($__internal_ac388863fd9c2490e3889762a65b0eb58b579ff63ebd51a6ffaad7b388394bcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
