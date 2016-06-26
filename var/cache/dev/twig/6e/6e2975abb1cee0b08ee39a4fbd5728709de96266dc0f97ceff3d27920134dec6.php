<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_4b5ed1b4072afc2237af4b8d34fd57da41edac01865b95959255625cb682499e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2254fe8ba66bcf1a4650e086642af2bff22e7dc0ba36cc214910028484f55ecf = $this->env->getExtension("native_profiler");
        $__internal_2254fe8ba66bcf1a4650e086642af2bff22e7dc0ba36cc214910028484f55ecf->enter($__internal_2254fe8ba66bcf1a4650e086642af2bff22e7dc0ba36cc214910028484f55ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2254fe8ba66bcf1a4650e086642af2bff22e7dc0ba36cc214910028484f55ecf->leave($__internal_2254fe8ba66bcf1a4650e086642af2bff22e7dc0ba36cc214910028484f55ecf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
