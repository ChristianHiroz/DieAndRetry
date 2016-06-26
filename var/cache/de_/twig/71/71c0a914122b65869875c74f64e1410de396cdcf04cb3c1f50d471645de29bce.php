<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_88b599ba05f53bb21efbdc031c84e007688a2c7b74038b959ad8cfe1fad86717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bff02691aea1758155ac6fc50541e273f7a8d244ef5033984d9cc4126c0f14f6 = $this->env->getExtension("native_profiler");
        $__internal_bff02691aea1758155ac6fc50541e273f7a8d244ef5033984d9cc4126c0f14f6->enter($__internal_bff02691aea1758155ac6fc50541e273f7a8d244ef5033984d9cc4126c0f14f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff02691aea1758155ac6fc50541e273f7a8d244ef5033984d9cc4126c0f14f6->leave($__internal_bff02691aea1758155ac6fc50541e273f7a8d244ef5033984d9cc4126c0f14f6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
