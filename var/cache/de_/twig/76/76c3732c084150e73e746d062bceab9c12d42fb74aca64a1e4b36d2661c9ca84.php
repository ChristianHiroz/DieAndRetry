<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_28e9d67b6d671b313288ef6b940aee507cce8d7d9ce135230088f5f1e7fc5ab2 extends Twig_Template
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
        $__internal_2ff3ac56849e961f8fefea6c93e73b08e92647f014450a547afe24f2da0f8bff = $this->env->getExtension("native_profiler");
        $__internal_2ff3ac56849e961f8fefea6c93e73b08e92647f014450a547afe24f2da0f8bff->enter($__internal_2ff3ac56849e961f8fefea6c93e73b08e92647f014450a547afe24f2da0f8bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2ff3ac56849e961f8fefea6c93e73b08e92647f014450a547afe24f2da0f8bff->leave($__internal_2ff3ac56849e961f8fefea6c93e73b08e92647f014450a547afe24f2da0f8bff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
