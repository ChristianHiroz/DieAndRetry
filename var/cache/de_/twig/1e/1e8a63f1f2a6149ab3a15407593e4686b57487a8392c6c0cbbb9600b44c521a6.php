<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_ceb88b802e5ea15ca4c60814976fb395ed9b131d7682ac0c9653389754205b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0601386e4cf64139134ccbf11c3996280f32726c5ca134f22fc8a5c3002136ca = $this->env->getExtension("native_profiler");
        $__internal_0601386e4cf64139134ccbf11c3996280f32726c5ca134f22fc8a5c3002136ca->enter($__internal_0601386e4cf64139134ccbf11c3996280f32726c5ca134f22fc8a5c3002136ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0601386e4cf64139134ccbf11c3996280f32726c5ca134f22fc8a5c3002136ca->leave($__internal_0601386e4cf64139134ccbf11c3996280f32726c5ca134f22fc8a5c3002136ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
