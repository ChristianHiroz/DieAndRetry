<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_f5068218514b3a27171028433bf84dae27f417f31ffa526186200d4fba4fa014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69b5bbd640cd586aaddad0bcf56fb70e8370c5289e6e04ff3ea3d4e3b2f702a0 = $this->env->getExtension("native_profiler");
        $__internal_69b5bbd640cd586aaddad0bcf56fb70e8370c5289e6e04ff3ea3d4e3b2f702a0->enter($__internal_69b5bbd640cd586aaddad0bcf56fb70e8370c5289e6e04ff3ea3d4e3b2f702a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b5bbd640cd586aaddad0bcf56fb70e8370c5289e6e04ff3ea3d4e3b2f702a0->leave($__internal_69b5bbd640cd586aaddad0bcf56fb70e8370c5289e6e04ff3ea3d4e3b2f702a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
