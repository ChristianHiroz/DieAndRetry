<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_b8cce5195d20ff1bca360c1124ea450b04f23a2ee80376d56d2af5cc329b7e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63ead24045b32a47f65df86976135deb201e5d8e469617a04a2d00bf50750eb1 = $this->env->getExtension("native_profiler");
        $__internal_63ead24045b32a47f65df86976135deb201e5d8e469617a04a2d00bf50750eb1->enter($__internal_63ead24045b32a47f65df86976135deb201e5d8e469617a04a2d00bf50750eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ead24045b32a47f65df86976135deb201e5d8e469617a04a2d00bf50750eb1->leave($__internal_63ead24045b32a47f65df86976135deb201e5d8e469617a04a2d00bf50750eb1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
