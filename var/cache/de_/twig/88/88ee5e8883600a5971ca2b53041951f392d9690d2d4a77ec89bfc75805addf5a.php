<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_331ebd32ec8e1602ffe16afaae0c5e6e411bf78c3382411bd046ee27200215f7 extends Twig_Template
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
        $__internal_824a1be50238a913f96dacf9c27aba1ffd17bd12ba01502890bb35fa93de1af3 = $this->env->getExtension("native_profiler");
        $__internal_824a1be50238a913f96dacf9c27aba1ffd17bd12ba01502890bb35fa93de1af3->enter($__internal_824a1be50238a913f96dacf9c27aba1ffd17bd12ba01502890bb35fa93de1af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_824a1be50238a913f96dacf9c27aba1ffd17bd12ba01502890bb35fa93de1af3->leave($__internal_824a1be50238a913f96dacf9c27aba1ffd17bd12ba01502890bb35fa93de1af3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
