<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7a3285c97297358bdfb77f20ef0c9768241d825baba4dc9b98b900f5dfbff77c extends Twig_Template
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
        $__internal_0a1fb3c769e548d2b33906ca436b0f8eda866996eb99b87698d0060f3b56089c = $this->env->getExtension("native_profiler");
        $__internal_0a1fb3c769e548d2b33906ca436b0f8eda866996eb99b87698d0060f3b56089c->enter($__internal_0a1fb3c769e548d2b33906ca436b0f8eda866996eb99b87698d0060f3b56089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0a1fb3c769e548d2b33906ca436b0f8eda866996eb99b87698d0060f3b56089c->leave($__internal_0a1fb3c769e548d2b33906ca436b0f8eda866996eb99b87698d0060f3b56089c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
