<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_6a29dfc60dd851818c3b0b629a7491936188ebfde24c843bc00a940912cfe41a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5695f2576a0ed9bce8c0edfca5baec9fe494f9b2404dd59428077cf3e69313fc = $this->env->getExtension("native_profiler");
        $__internal_5695f2576a0ed9bce8c0edfca5baec9fe494f9b2404dd59428077cf3e69313fc->enter($__internal_5695f2576a0ed9bce8c0edfca5baec9fe494f9b2404dd59428077cf3e69313fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5695f2576a0ed9bce8c0edfca5baec9fe494f9b2404dd59428077cf3e69313fc->leave($__internal_5695f2576a0ed9bce8c0edfca5baec9fe494f9b2404dd59428077cf3e69313fc_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2385f2f65ed63fcdf5ccd7e696e8d6e45b88f34d917614862cbdfd5822c68d86 = $this->env->getExtension("native_profiler");
        $__internal_2385f2f65ed63fcdf5ccd7e696e8d6e45b88f34d917614862cbdfd5822c68d86->enter($__internal_2385f2f65ed63fcdf5ccd7e696e8d6e45b88f34d917614862cbdfd5822c68d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_2385f2f65ed63fcdf5ccd7e696e8d6e45b88f34d917614862cbdfd5822c68d86->leave($__internal_2385f2f65ed63fcdf5ccd7e696e8d6e45b88f34d917614862cbdfd5822c68d86_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_1ec04dc1e9cb068d42794fe3154adf12fded89113da88cbbff0e5ee6207e8734 = $this->env->getExtension("native_profiler");
        $__internal_1ec04dc1e9cb068d42794fe3154adf12fded89113da88cbbff0e5ee6207e8734->enter($__internal_1ec04dc1e9cb068d42794fe3154adf12fded89113da88cbbff0e5ee6207e8734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1ec04dc1e9cb068d42794fe3154adf12fded89113da88cbbff0e5ee6207e8734->leave($__internal_1ec04dc1e9cb068d42794fe3154adf12fded89113da88cbbff0e5ee6207e8734_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_e24d8c517be9c36410eb8526333d60c5216f39e0ffc5d9c04f311efb37ba4a84 = $this->env->getExtension("native_profiler");
        $__internal_e24d8c517be9c36410eb8526333d60c5216f39e0ffc5d9c04f311efb37ba4a84->enter($__internal_e24d8c517be9c36410eb8526333d60c5216f39e0ffc5d9c04f311efb37ba4a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e24d8c517be9c36410eb8526333d60c5216f39e0ffc5d9c04f311efb37ba4a84->leave($__internal_e24d8c517be9c36410eb8526333d60c5216f39e0ffc5d9c04f311efb37ba4a84_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_20888cbc9279f1bf3e4024b166c0e3bdeeea55af4469b53d9da44833dc9118dd = $this->env->getExtension("native_profiler");
        $__internal_20888cbc9279f1bf3e4024b166c0e3bdeeea55af4469b53d9da44833dc9118dd->enter($__internal_20888cbc9279f1bf3e4024b166c0e3bdeeea55af4469b53d9da44833dc9118dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_20888cbc9279f1bf3e4024b166c0e3bdeeea55af4469b53d9da44833dc9118dd->leave($__internal_20888cbc9279f1bf3e4024b166c0e3bdeeea55af4469b53d9da44833dc9118dd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
