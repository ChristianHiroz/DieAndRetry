<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_b3c071d450a8fdb5968f0a7d86ad7a8bd910255022bcd894999d353d4edad98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4610fdbfb53e8f8d7eafcb760dbffa6b42d6983d93ffa7a91557f9f94ea0cc4 = $this->env->getExtension("native_profiler");
        $__internal_f4610fdbfb53e8f8d7eafcb760dbffa6b42d6983d93ffa7a91557f9f94ea0cc4->enter($__internal_f4610fdbfb53e8f8d7eafcb760dbffa6b42d6983d93ffa7a91557f9f94ea0cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_f4610fdbfb53e8f8d7eafcb760dbffa6b42d6983d93ffa7a91557f9f94ea0cc4->leave($__internal_f4610fdbfb53e8f8d7eafcb760dbffa6b42d6983d93ffa7a91557f9f94ea0cc4_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_8ee2bc9c73ceb41463b415dd33a9cc4a4ee734087868c346a9011a611830c019 = $this->env->getExtension("native_profiler");
        $__internal_8ee2bc9c73ceb41463b415dd33a9cc4a4ee734087868c346a9011a611830c019->enter($__internal_8ee2bc9c73ceb41463b415dd33a9cc4a4ee734087868c346a9011a611830c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_8ee2bc9c73ceb41463b415dd33a9cc4a4ee734087868c346a9011a611830c019->leave($__internal_8ee2bc9c73ceb41463b415dd33a9cc4a4ee734087868c346a9011a611830c019_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_07bcccfc77f43b5f4199d80647d440faf98223dd709dbb3904ce43c0acaee623 = $this->env->getExtension("native_profiler");
        $__internal_07bcccfc77f43b5f4199d80647d440faf98223dd709dbb3904ce43c0acaee623->enter($__internal_07bcccfc77f43b5f4199d80647d440faf98223dd709dbb3904ce43c0acaee623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_07bcccfc77f43b5f4199d80647d440faf98223dd709dbb3904ce43c0acaee623->leave($__internal_07bcccfc77f43b5f4199d80647d440faf98223dd709dbb3904ce43c0acaee623_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
