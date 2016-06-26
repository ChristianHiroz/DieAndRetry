<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_9537d582c2c66f2dcec90739cec3aedece9a7433d93ab6e4227d2d8e2703a47f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce549a3006a5cffa4ab9c00e2ef5a2c29e733f0da907670d81d940d234779ac7 = $this->env->getExtension("native_profiler");
        $__internal_ce549a3006a5cffa4ab9c00e2ef5a2c29e733f0da907670d81d940d234779ac7->enter($__internal_ce549a3006a5cffa4ab9c00e2ef5a2c29e733f0da907670d81d940d234779ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce549a3006a5cffa4ab9c00e2ef5a2c29e733f0da907670d81d940d234779ac7->leave($__internal_ce549a3006a5cffa4ab9c00e2ef5a2c29e733f0da907670d81d940d234779ac7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
