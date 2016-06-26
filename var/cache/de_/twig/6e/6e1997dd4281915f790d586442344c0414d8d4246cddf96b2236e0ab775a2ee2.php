<?php

/* GuildBundle:Guild:index.html.twig */
class __TwigTemplate_e419ac21a593304b6b21b6fa77e7918d27a1a077462697f4d055d49642d33d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GuildBundle:Guild:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a36b8edd474246382c06344efceba64ea905fbcdbf21d8a9749005631d947737 = $this->env->getExtension("native_profiler");
        $__internal_a36b8edd474246382c06344efceba64ea905fbcdbf21d8a9749005631d947737->enter($__internal_a36b8edd474246382c06344efceba64ea905fbcdbf21d8a9749005631d947737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuildBundle:Guild:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36b8edd474246382c06344efceba64ea905fbcdbf21d8a9749005631d947737->leave($__internal_a36b8edd474246382c06344efceba64ea905fbcdbf21d8a9749005631d947737_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acffcaaa565359d5dc3dd95d3339ff70070e5290ef9beaaa4ca288ccbfec6be5 = $this->env->getExtension("native_profiler");
        $__internal_acffcaaa565359d5dc3dd95d3339ff70070e5290ef9beaaa4ca288ccbfec6be5->enter($__internal_acffcaaa565359d5dc3dd95d3339ff70070e5290ef9beaaa4ca288ccbfec6be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_acffcaaa565359d5dc3dd95d3339ff70070e5290ef9beaaa4ca288ccbfec6be5->leave($__internal_acffcaaa565359d5dc3dd95d3339ff70070e5290ef9beaaa4ca288ccbfec6be5_prof);

    }

    public function getTemplateName()
    {
        return "GuildBundle:Guild:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
