<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ae7bcf3a0b5df8ec588b195d7dbae45d104e9ec9163cd0663799c0a6aac8c32b extends Twig_Template
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
        $__internal_e0b28ac1a640a250211dbf40360380b005b1bf2403a2c1b02e89787bf1111cf2 = $this->env->getExtension("native_profiler");
        $__internal_e0b28ac1a640a250211dbf40360380b005b1bf2403a2c1b02e89787bf1111cf2->enter($__internal_e0b28ac1a640a250211dbf40360380b005b1bf2403a2c1b02e89787bf1111cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e0b28ac1a640a250211dbf40360380b005b1bf2403a2c1b02e89787bf1111cf2->leave($__internal_e0b28ac1a640a250211dbf40360380b005b1bf2403a2c1b02e89787bf1111cf2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
