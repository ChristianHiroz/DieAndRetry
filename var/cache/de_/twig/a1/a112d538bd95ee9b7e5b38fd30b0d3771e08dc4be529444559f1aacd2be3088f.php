<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_072c2181266ce136bcc7e5ba4e98a72008a4f8e956963a4c997521130bad174c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e250e7d3c72ac83b5b2abe37a31e119fb58e0c754bc2c79112c69169a3926591 = $this->env->getExtension("native_profiler");
        $__internal_e250e7d3c72ac83b5b2abe37a31e119fb58e0c754bc2c79112c69169a3926591->enter($__internal_e250e7d3c72ac83b5b2abe37a31e119fb58e0c754bc2c79112c69169a3926591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e250e7d3c72ac83b5b2abe37a31e119fb58e0c754bc2c79112c69169a3926591->leave($__internal_e250e7d3c72ac83b5b2abe37a31e119fb58e0c754bc2c79112c69169a3926591_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_726c5b699c48a602e851f0ad91f2c5d633f9fac490b7e23fb46bcdc39f91e7d1 = $this->env->getExtension("native_profiler");
        $__internal_726c5b699c48a602e851f0ad91f2c5d633f9fac490b7e23fb46bcdc39f91e7d1->enter($__internal_726c5b699c48a602e851f0ad91f2c5d633f9fac490b7e23fb46bcdc39f91e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_726c5b699c48a602e851f0ad91f2c5d633f9fac490b7e23fb46bcdc39f91e7d1->leave($__internal_726c5b699c48a602e851f0ad91f2c5d633f9fac490b7e23fb46bcdc39f91e7d1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_f7c9a6580ee6620e3bbc08adf1896b63e25a4500da9d7fffc2131bdd38d2811c = $this->env->getExtension("native_profiler");
        $__internal_f7c9a6580ee6620e3bbc08adf1896b63e25a4500da9d7fffc2131bdd38d2811c->enter($__internal_f7c9a6580ee6620e3bbc08adf1896b63e25a4500da9d7fffc2131bdd38d2811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_f7c9a6580ee6620e3bbc08adf1896b63e25a4500da9d7fffc2131bdd38d2811c->leave($__internal_f7c9a6580ee6620e3bbc08adf1896b63e25a4500da9d7fffc2131bdd38d2811c_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_10c66dc063f6647850213f4c1d986d991fd0f014ea7ff1d51eb3f116a85c844c = $this->env->getExtension("native_profiler");
        $__internal_10c66dc063f6647850213f4c1d986d991fd0f014ea7ff1d51eb3f116a85c844c->enter($__internal_10c66dc063f6647850213f4c1d986d991fd0f014ea7ff1d51eb3f116a85c844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_10c66dc063f6647850213f4c1d986d991fd0f014ea7ff1d51eb3f116a85c844c->leave($__internal_10c66dc063f6647850213f4c1d986d991fd0f014ea7ff1d51eb3f116a85c844c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
