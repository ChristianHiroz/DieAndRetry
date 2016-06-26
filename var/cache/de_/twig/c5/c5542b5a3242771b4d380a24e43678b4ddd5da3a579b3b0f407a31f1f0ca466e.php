<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_b650485b91dda1f5c71131ab7e269a90961a4ebb1bfa8cde7da11392243c657f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_076f3adac6afd0a44bab95c2b41d5f8379f6f2e030bc9080332fb97079cb2968 = $this->env->getExtension("native_profiler");
        $__internal_076f3adac6afd0a44bab95c2b41d5f8379f6f2e030bc9080332fb97079cb2968->enter($__internal_076f3adac6afd0a44bab95c2b41d5f8379f6f2e030bc9080332fb97079cb2968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_076f3adac6afd0a44bab95c2b41d5f8379f6f2e030bc9080332fb97079cb2968->leave($__internal_076f3adac6afd0a44bab95c2b41d5f8379f6f2e030bc9080332fb97079cb2968_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52ed222bcb5f76a610463b9971015dc689f11353bcb63cdbb4c9daffd15f50f4 = $this->env->getExtension("native_profiler");
        $__internal_52ed222bcb5f76a610463b9971015dc689f11353bcb63cdbb4c9daffd15f50f4->enter($__internal_52ed222bcb5f76a610463b9971015dc689f11353bcb63cdbb4c9daffd15f50f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_52ed222bcb5f76a610463b9971015dc689f11353bcb63cdbb4c9daffd15f50f4->leave($__internal_52ed222bcb5f76a610463b9971015dc689f11353bcb63cdbb4c9daffd15f50f4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
