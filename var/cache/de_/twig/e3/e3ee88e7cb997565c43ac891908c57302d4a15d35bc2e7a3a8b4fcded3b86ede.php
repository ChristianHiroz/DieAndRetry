<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_86bd56344d74dc886008c3136e9cca2bf82c33413b1af7f50e0ed8fd0e50fa67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84398b60809ef4a4fc98d8cdc129ece9fde4e089723ad065ef9ac381fb60b93b = $this->env->getExtension("native_profiler");
        $__internal_84398b60809ef4a4fc98d8cdc129ece9fde4e089723ad065ef9ac381fb60b93b->enter($__internal_84398b60809ef4a4fc98d8cdc129ece9fde4e089723ad065ef9ac381fb60b93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84398b60809ef4a4fc98d8cdc129ece9fde4e089723ad065ef9ac381fb60b93b->leave($__internal_84398b60809ef4a4fc98d8cdc129ece9fde4e089723ad065ef9ac381fb60b93b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
