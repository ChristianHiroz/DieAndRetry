<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_4eaadc78ab91adbdf00dc781faa9aae003d1499f73266ccc318aa639dd94cd7e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cad32d7f01a8a8b5a7bfb5b5789bc76cb3e313b91365c0912551b9b9108a9040 = $this->env->getExtension("native_profiler");
        $__internal_cad32d7f01a8a8b5a7bfb5b5789bc76cb3e313b91365c0912551b9b9108a9040->enter($__internal_cad32d7f01a8a8b5a7bfb5b5789bc76cb3e313b91365c0912551b9b9108a9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad32d7f01a8a8b5a7bfb5b5789bc76cb3e313b91365c0912551b9b9108a9040->leave($__internal_cad32d7f01a8a8b5a7bfb5b5789bc76cb3e313b91365c0912551b9b9108a9040_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_59c22a18a5663e89abba2407671c949489faf67e4b33958fcf61e7afa7ed8e09 = $this->env->getExtension("native_profiler");
        $__internal_59c22a18a5663e89abba2407671c949489faf67e4b33958fcf61e7afa7ed8e09->enter($__internal_59c22a18a5663e89abba2407671c949489faf67e4b33958fcf61e7afa7ed8e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_59c22a18a5663e89abba2407671c949489faf67e4b33958fcf61e7afa7ed8e09->leave($__internal_59c22a18a5663e89abba2407671c949489faf67e4b33958fcf61e7afa7ed8e09_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
