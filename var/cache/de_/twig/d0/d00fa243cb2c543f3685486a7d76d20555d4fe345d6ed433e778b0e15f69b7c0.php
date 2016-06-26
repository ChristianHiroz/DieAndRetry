<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_67f5e1db76f5e1a6904aefc69643506a95bae8741633d2b1648b04f72f30a0d9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1d7b9bfbe6713c9fcd9554121e955ab16f217cb92dc1f0edec60dd4d759b721 = $this->env->getExtension("native_profiler");
        $__internal_d1d7b9bfbe6713c9fcd9554121e955ab16f217cb92dc1f0edec60dd4d759b721->enter($__internal_d1d7b9bfbe6713c9fcd9554121e955ab16f217cb92dc1f0edec60dd4d759b721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d7b9bfbe6713c9fcd9554121e955ab16f217cb92dc1f0edec60dd4d759b721->leave($__internal_d1d7b9bfbe6713c9fcd9554121e955ab16f217cb92dc1f0edec60dd4d759b721_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7e7365f965a3ee59c983edb8e9b328db71c24e7559206aba86af0e05135b7170 = $this->env->getExtension("native_profiler");
        $__internal_7e7365f965a3ee59c983edb8e9b328db71c24e7559206aba86af0e05135b7170->enter($__internal_7e7365f965a3ee59c983edb8e9b328db71c24e7559206aba86af0e05135b7170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_7e7365f965a3ee59c983edb8e9b328db71c24e7559206aba86af0e05135b7170->leave($__internal_7e7365f965a3ee59c983edb8e9b328db71c24e7559206aba86af0e05135b7170_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
