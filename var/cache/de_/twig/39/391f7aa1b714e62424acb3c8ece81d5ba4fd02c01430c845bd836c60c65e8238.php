<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_15eeb1f946c7e9d2bf4ea8362e10b2ca291a866c603b89ae177de0377ec8a27a extends Twig_Template
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
        $__internal_c16c7f11e52a353106ba8d52d681a06ac6aeb88dbc06355c2ee8362f6843f790 = $this->env->getExtension("native_profiler");
        $__internal_c16c7f11e52a353106ba8d52d681a06ac6aeb88dbc06355c2ee8362f6843f790->enter($__internal_c16c7f11e52a353106ba8d52d681a06ac6aeb88dbc06355c2ee8362f6843f790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c16c7f11e52a353106ba8d52d681a06ac6aeb88dbc06355c2ee8362f6843f790->leave($__internal_c16c7f11e52a353106ba8d52d681a06ac6aeb88dbc06355c2ee8362f6843f790_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
