<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_2377bded55e953d437b003ce8e7d543c0ab818e9805f30007676fbdb3740d4c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac6778563d06a36e9dd4d90d8d3a272761583852066041ce12b3dfd9b72d34a = $this->env->getExtension("native_profiler");
        $__internal_eac6778563d06a36e9dd4d90d8d3a272761583852066041ce12b3dfd9b72d34a->enter($__internal_eac6778563d06a36e9dd4d90d8d3a272761583852066041ce12b3dfd9b72d34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_eac6778563d06a36e9dd4d90d8d3a272761583852066041ce12b3dfd9b72d34a->leave($__internal_eac6778563d06a36e9dd4d90d8d3a272761583852066041ce12b3dfd9b72d34a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5f21ef9dd668afecb2a763f04b767813a48d6288359025a31f667ceba07d218a = $this->env->getExtension("native_profiler");
        $__internal_5f21ef9dd668afecb2a763f04b767813a48d6288359025a31f667ceba07d218a->enter($__internal_5f21ef9dd668afecb2a763f04b767813a48d6288359025a31f667ceba07d218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_5f21ef9dd668afecb2a763f04b767813a48d6288359025a31f667ceba07d218a->leave($__internal_5f21ef9dd668afecb2a763f04b767813a48d6288359025a31f667ceba07d218a_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_264411b85925d381f00f2884d3f2731069a7cd47e2c3622c0e22ba20fb521e9b = $this->env->getExtension("native_profiler");
        $__internal_264411b85925d381f00f2884d3f2731069a7cd47e2c3622c0e22ba20fb521e9b->enter($__internal_264411b85925d381f00f2884d3f2731069a7cd47e2c3622c0e22ba20fb521e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_264411b85925d381f00f2884d3f2731069a7cd47e2c3622c0e22ba20fb521e9b->leave($__internal_264411b85925d381f00f2884d3f2731069a7cd47e2c3622c0e22ba20fb521e9b_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e26db79a07d3633ef503d592fad4658f846a3c929ccd176357a3ca6d929a392f = $this->env->getExtension("native_profiler");
        $__internal_e26db79a07d3633ef503d592fad4658f846a3c929ccd176357a3ca6d929a392f->enter($__internal_e26db79a07d3633ef503d592fad4658f846a3c929ccd176357a3ca6d929a392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e26db79a07d3633ef503d592fad4658f846a3c929ccd176357a3ca6d929a392f->leave($__internal_e26db79a07d3633ef503d592fad4658f846a3c929ccd176357a3ca6d929a392f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
