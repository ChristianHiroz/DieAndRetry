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
        $__internal_2d1aa8ede31322cf125776674b9edba254dec7811e653df16181afd0f5ba71ca = $this->env->getExtension("native_profiler");
        $__internal_2d1aa8ede31322cf125776674b9edba254dec7811e653df16181afd0f5ba71ca->enter($__internal_2d1aa8ede31322cf125776674b9edba254dec7811e653df16181afd0f5ba71ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1aa8ede31322cf125776674b9edba254dec7811e653df16181afd0f5ba71ca->leave($__internal_2d1aa8ede31322cf125776674b9edba254dec7811e653df16181afd0f5ba71ca_prof);

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
