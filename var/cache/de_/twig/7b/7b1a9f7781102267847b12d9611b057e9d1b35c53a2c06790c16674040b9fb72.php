<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_38ffaf9f37706bf9a2d7bee06ca88405b8661a38b32bd2fdff4a1ac701fd4f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_804b68e0be2acdb0d5d98975e4d99943ca06a9f9f2cee6571db0238a7aa4d030 = $this->env->getExtension("native_profiler");
        $__internal_804b68e0be2acdb0d5d98975e4d99943ca06a9f9f2cee6571db0238a7aa4d030->enter($__internal_804b68e0be2acdb0d5d98975e4d99943ca06a9f9f2cee6571db0238a7aa4d030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804b68e0be2acdb0d5d98975e4d99943ca06a9f9f2cee6571db0238a7aa4d030->leave($__internal_804b68e0be2acdb0d5d98975e4d99943ca06a9f9f2cee6571db0238a7aa4d030_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
