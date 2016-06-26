<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_e459e5da40f7e0f81bca96fe3639dc907a0fc6728fff9962a7cfc13001245ef7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5efd655072845b3beb2967b749ba99b7d037ccafa3f80e9ca8e166b959355c = $this->env->getExtension("native_profiler");
        $__internal_7b5efd655072845b3beb2967b749ba99b7d037ccafa3f80e9ca8e166b959355c->enter($__internal_7b5efd655072845b3beb2967b749ba99b7d037ccafa3f80e9ca8e166b959355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5efd655072845b3beb2967b749ba99b7d037ccafa3f80e9ca8e166b959355c->leave($__internal_7b5efd655072845b3beb2967b749ba99b7d037ccafa3f80e9ca8e166b959355c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_09c0d21a40777c0a770aed9b4f501a0e7511e5d84324793720c84d6e455584e8 = $this->env->getExtension("native_profiler");
        $__internal_09c0d21a40777c0a770aed9b4f501a0e7511e5d84324793720c84d6e455584e8->enter($__internal_09c0d21a40777c0a770aed9b4f501a0e7511e5d84324793720c84d6e455584e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_09c0d21a40777c0a770aed9b4f501a0e7511e5d84324793720c84d6e455584e8->leave($__internal_09c0d21a40777c0a770aed9b4f501a0e7511e5d84324793720c84d6e455584e8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
