<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_dae7e6480c302302194090d3fafba2a7cc3e2f1b6766fe0a03c77684031bb09f extends Twig_Template
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
        $__internal_3c1341c448f205408753244c64a29808c00c05493d422bc4c17f5fe945e8d164 = $this->env->getExtension("native_profiler");
        $__internal_3c1341c448f205408753244c64a29808c00c05493d422bc4c17f5fe945e8d164->enter($__internal_3c1341c448f205408753244c64a29808c00c05493d422bc4c17f5fe945e8d164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3c1341c448f205408753244c64a29808c00c05493d422bc4c17f5fe945e8d164->leave($__internal_3c1341c448f205408753244c64a29808c00c05493d422bc4c17f5fe945e8d164_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
