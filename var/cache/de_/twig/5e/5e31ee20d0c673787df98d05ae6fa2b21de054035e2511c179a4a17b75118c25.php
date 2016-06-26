<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_62d523fd16f1fb5be9ebe7f5cc5560647c29bc281d5f606115deef9adf00660b extends Twig_Template
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
        $__internal_159caa791e785f9a727270b77c22714c7732e8f8c8d9e96002c480af7fde3599 = $this->env->getExtension("native_profiler");
        $__internal_159caa791e785f9a727270b77c22714c7732e8f8c8d9e96002c480af7fde3599->enter($__internal_159caa791e785f9a727270b77c22714c7732e8f8c8d9e96002c480af7fde3599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_159caa791e785f9a727270b77c22714c7732e8f8c8d9e96002c480af7fde3599->leave($__internal_159caa791e785f9a727270b77c22714c7732e8f8c8d9e96002c480af7fde3599_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
