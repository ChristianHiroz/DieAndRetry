<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_21140b94baf208912e7d5f63b4b668b520dc576fe3e503e2979fffcdad7733ea extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_325cabc9a474c07a5fdd6c02d4aa5ab1af508d4ca14ef23b08b745b8d8fa8038 = $this->env->getExtension("native_profiler");
        $__internal_325cabc9a474c07a5fdd6c02d4aa5ab1af508d4ca14ef23b08b745b8d8fa8038->enter($__internal_325cabc9a474c07a5fdd6c02d4aa5ab1af508d4ca14ef23b08b745b8d8fa8038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_325cabc9a474c07a5fdd6c02d4aa5ab1af508d4ca14ef23b08b745b8d8fa8038->leave($__internal_325cabc9a474c07a5fdd6c02d4aa5ab1af508d4ca14ef23b08b745b8d8fa8038_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3b8c04ec83057385d091aa4a165368751e8614341835b215ca82054eb5d44f6f = $this->env->getExtension("native_profiler");
        $__internal_3b8c04ec83057385d091aa4a165368751e8614341835b215ca82054eb5d44f6f->enter($__internal_3b8c04ec83057385d091aa4a165368751e8614341835b215ca82054eb5d44f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3b8c04ec83057385d091aa4a165368751e8614341835b215ca82054eb5d44f6f->leave($__internal_3b8c04ec83057385d091aa4a165368751e8614341835b215ca82054eb5d44f6f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
