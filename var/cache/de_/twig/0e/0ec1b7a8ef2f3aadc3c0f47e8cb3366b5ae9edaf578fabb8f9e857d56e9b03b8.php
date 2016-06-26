<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_14b564e80e2bb984e43d0e068f53f0aebc30f5887743a32d6a3d93beb063a553 extends Twig_Template
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
        $__internal_226a83d57d61ee3635f678d229899343dbead48e1d4468b23e695d378cf254ac = $this->env->getExtension("native_profiler");
        $__internal_226a83d57d61ee3635f678d229899343dbead48e1d4468b23e695d378cf254ac->enter($__internal_226a83d57d61ee3635f678d229899343dbead48e1d4468b23e695d378cf254ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_226a83d57d61ee3635f678d229899343dbead48e1d4468b23e695d378cf254ac->leave($__internal_226a83d57d61ee3635f678d229899343dbead48e1d4468b23e695d378cf254ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
