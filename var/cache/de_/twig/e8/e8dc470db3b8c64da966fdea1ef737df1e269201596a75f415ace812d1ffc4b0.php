<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_20bdea8e692ac91916952610deb25cea880670f2807adbfb66604cf1e2c5792e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afd39b1a7fb64ec3f22f4d51b67e242afaa75bd5e95cc42743cdfbc9ea618ca3 = $this->env->getExtension("native_profiler");
        $__internal_afd39b1a7fb64ec3f22f4d51b67e242afaa75bd5e95cc42743cdfbc9ea618ca3->enter($__internal_afd39b1a7fb64ec3f22f4d51b67e242afaa75bd5e95cc42743cdfbc9ea618ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd39b1a7fb64ec3f22f4d51b67e242afaa75bd5e95cc42743cdfbc9ea618ca3->leave($__internal_afd39b1a7fb64ec3f22f4d51b67e242afaa75bd5e95cc42743cdfbc9ea618ca3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9da776ed9fda9a5ba704e434efdfa598128fa9d0b924a85f0bd9cd7b2c3a37e6 = $this->env->getExtension("native_profiler");
        $__internal_9da776ed9fda9a5ba704e434efdfa598128fa9d0b924a85f0bd9cd7b2c3a37e6->enter($__internal_9da776ed9fda9a5ba704e434efdfa598128fa9d0b924a85f0bd9cd7b2c3a37e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9da776ed9fda9a5ba704e434efdfa598128fa9d0b924a85f0bd9cd7b2c3a37e6->leave($__internal_9da776ed9fda9a5ba704e434efdfa598128fa9d0b924a85f0bd9cd7b2c3a37e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
