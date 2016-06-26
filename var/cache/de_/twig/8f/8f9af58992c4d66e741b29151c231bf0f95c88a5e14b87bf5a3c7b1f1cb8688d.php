<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_b551d0b3c73dc83a335d66436545a6fc75f8de6b4ca99f85f569b57a0f47fac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_555a1cc7efe43785ae56c9847c467139f4dc8040b308083ea8452c34194242bb = $this->env->getExtension("native_profiler");
        $__internal_555a1cc7efe43785ae56c9847c467139f4dc8040b308083ea8452c34194242bb->enter($__internal_555a1cc7efe43785ae56c9847c467139f4dc8040b308083ea8452c34194242bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_555a1cc7efe43785ae56c9847c467139f4dc8040b308083ea8452c34194242bb->leave($__internal_555a1cc7efe43785ae56c9847c467139f4dc8040b308083ea8452c34194242bb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6f7102acc94532a47b17bfb6b80d8e567a273d310869b917abe8495feb3a2e0b = $this->env->getExtension("native_profiler");
        $__internal_6f7102acc94532a47b17bfb6b80d8e567a273d310869b917abe8495feb3a2e0b->enter($__internal_6f7102acc94532a47b17bfb6b80d8e567a273d310869b917abe8495feb3a2e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_6f7102acc94532a47b17bfb6b80d8e567a273d310869b917abe8495feb3a2e0b->leave($__internal_6f7102acc94532a47b17bfb6b80d8e567a273d310869b917abe8495feb3a2e0b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
