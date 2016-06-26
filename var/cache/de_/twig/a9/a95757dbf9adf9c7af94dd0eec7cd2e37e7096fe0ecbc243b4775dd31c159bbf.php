<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_7210c1318f956118b348169f48e4310f8beaebdb63eb15524e7af4e35285bc31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adad939eb4c12df5dae07bd079881db27459a59c5c30b2b419056b95a39a4e3f = $this->env->getExtension("native_profiler");
        $__internal_adad939eb4c12df5dae07bd079881db27459a59c5c30b2b419056b95a39a4e3f->enter($__internal_adad939eb4c12df5dae07bd079881db27459a59c5c30b2b419056b95a39a4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adad939eb4c12df5dae07bd079881db27459a59c5c30b2b419056b95a39a4e3f->leave($__internal_adad939eb4c12df5dae07bd079881db27459a59c5c30b2b419056b95a39a4e3f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
