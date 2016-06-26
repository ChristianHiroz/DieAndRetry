<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_210349c334f20419a644e885e1e51f02743ea7d4eaaec91f2bd4a01e97b25e15 extends Twig_Template
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
        $__internal_297d4c0bd298bece30e81614f337e49bc5e2c96cdd4c83b29123c2cbf822c9b0 = $this->env->getExtension("native_profiler");
        $__internal_297d4c0bd298bece30e81614f337e49bc5e2c96cdd4c83b29123c2cbf822c9b0->enter($__internal_297d4c0bd298bece30e81614f337e49bc5e2c96cdd4c83b29123c2cbf822c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_297d4c0bd298bece30e81614f337e49bc5e2c96cdd4c83b29123c2cbf822c9b0->leave($__internal_297d4c0bd298bece30e81614f337e49bc5e2c96cdd4c83b29123c2cbf822c9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
