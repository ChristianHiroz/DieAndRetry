<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_33e58b1fe73259c69f503daa8e9756f11af47ae9f0445109cbfb5fbc7b4b7ffd extends Twig_Template
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
        $__internal_d4d80f74846a30c2a4f9ed52091f70071815a89f2ab663e6cfd94f19cd7ea99d = $this->env->getExtension("native_profiler");
        $__internal_d4d80f74846a30c2a4f9ed52091f70071815a89f2ab663e6cfd94f19cd7ea99d->enter($__internal_d4d80f74846a30c2a4f9ed52091f70071815a89f2ab663e6cfd94f19cd7ea99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d4d80f74846a30c2a4f9ed52091f70071815a89f2ab663e6cfd94f19cd7ea99d->leave($__internal_d4d80f74846a30c2a4f9ed52091f70071815a89f2ab663e6cfd94f19cd7ea99d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
