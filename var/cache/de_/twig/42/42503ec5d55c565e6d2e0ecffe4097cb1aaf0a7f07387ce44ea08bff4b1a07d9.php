<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_142d8c4556e5439aa4d247f78ef2609c832057eb4578c987e785016ab5aa71ff extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c099c0360ca1ea462814f0f4297abbc9b9e9fc0dcac522b04affc6c476ed6880 = $this->env->getExtension("native_profiler");
        $__internal_c099c0360ca1ea462814f0f4297abbc9b9e9fc0dcac522b04affc6c476ed6880->enter($__internal_c099c0360ca1ea462814f0f4297abbc9b9e9fc0dcac522b04affc6c476ed6880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c099c0360ca1ea462814f0f4297abbc9b9e9fc0dcac522b04affc6c476ed6880->leave($__internal_c099c0360ca1ea462814f0f4297abbc9b9e9fc0dcac522b04affc6c476ed6880_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02439d6dff84a597cc8caf25e9b77d2df27cf12c59662cb8ae2249fa6bcfc42b = $this->env->getExtension("native_profiler");
        $__internal_02439d6dff84a597cc8caf25e9b77d2df27cf12c59662cb8ae2249fa6bcfc42b->enter($__internal_02439d6dff84a597cc8caf25e9b77d2df27cf12c59662cb8ae2249fa6bcfc42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_02439d6dff84a597cc8caf25e9b77d2df27cf12c59662cb8ae2249fa6bcfc42b->leave($__internal_02439d6dff84a597cc8caf25e9b77d2df27cf12c59662cb8ae2249fa6bcfc42b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
