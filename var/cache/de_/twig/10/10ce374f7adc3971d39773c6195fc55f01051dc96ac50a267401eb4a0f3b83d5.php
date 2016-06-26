<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_31f0a6a60cde3a20d74d2eaa43c9301b80a9ed685190916a779f393a2727b373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dc937960ee0a86a0fb3e544136893d56a03e6f74e0b17e94df27ee806ede316 = $this->env->getExtension("native_profiler");
        $__internal_7dc937960ee0a86a0fb3e544136893d56a03e6f74e0b17e94df27ee806ede316->enter($__internal_7dc937960ee0a86a0fb3e544136893d56a03e6f74e0b17e94df27ee806ede316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc937960ee0a86a0fb3e544136893d56a03e6f74e0b17e94df27ee806ede316->leave($__internal_7dc937960ee0a86a0fb3e544136893d56a03e6f74e0b17e94df27ee806ede316_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_08be76dc63f87d1eeced83a6c026da37c98e51519ab762c5f3b9fb3c3838abbe = $this->env->getExtension("native_profiler");
        $__internal_08be76dc63f87d1eeced83a6c026da37c98e51519ab762c5f3b9fb3c3838abbe->enter($__internal_08be76dc63f87d1eeced83a6c026da37c98e51519ab762c5f3b9fb3c3838abbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_08be76dc63f87d1eeced83a6c026da37c98e51519ab762c5f3b9fb3c3838abbe->leave($__internal_08be76dc63f87d1eeced83a6c026da37c98e51519ab762c5f3b9fb3c3838abbe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
