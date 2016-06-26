<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5707738bd53e0967e4fb0c38c0d473bfc931f96644aea5b92034f8caa9fcd9d4 extends Twig_Template
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
        $__internal_5ee484510cbbd2f76dd2dcb4c6128f207e9da5b8eaa6bfabd7790874f5d26d05 = $this->env->getExtension("native_profiler");
        $__internal_5ee484510cbbd2f76dd2dcb4c6128f207e9da5b8eaa6bfabd7790874f5d26d05->enter($__internal_5ee484510cbbd2f76dd2dcb4c6128f207e9da5b8eaa6bfabd7790874f5d26d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5ee484510cbbd2f76dd2dcb4c6128f207e9da5b8eaa6bfabd7790874f5d26d05->leave($__internal_5ee484510cbbd2f76dd2dcb4c6128f207e9da5b8eaa6bfabd7790874f5d26d05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
