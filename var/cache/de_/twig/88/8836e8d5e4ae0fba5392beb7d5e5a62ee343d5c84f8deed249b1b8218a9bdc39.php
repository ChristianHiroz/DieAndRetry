<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_186b26c3d3b26fc6e9907a060db57a9b68e401ecfb5e5f7377d560ab4cffea8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98dfcd6e8cca94064d07a2a113f0b53573d9521ceed6e8ce6000b74e14f6f8ab = $this->env->getExtension("native_profiler");
        $__internal_98dfcd6e8cca94064d07a2a113f0b53573d9521ceed6e8ce6000b74e14f6f8ab->enter($__internal_98dfcd6e8cca94064d07a2a113f0b53573d9521ceed6e8ce6000b74e14f6f8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98dfcd6e8cca94064d07a2a113f0b53573d9521ceed6e8ce6000b74e14f6f8ab->leave($__internal_98dfcd6e8cca94064d07a2a113f0b53573d9521ceed6e8ce6000b74e14f6f8ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e574c726d893268d07d4ef40243e8db4c1b347b94ed7a44f14fe2e9b031ea493 = $this->env->getExtension("native_profiler");
        $__internal_e574c726d893268d07d4ef40243e8db4c1b347b94ed7a44f14fe2e9b031ea493->enter($__internal_e574c726d893268d07d4ef40243e8db4c1b347b94ed7a44f14fe2e9b031ea493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e574c726d893268d07d4ef40243e8db4c1b347b94ed7a44f14fe2e9b031ea493->leave($__internal_e574c726d893268d07d4ef40243e8db4c1b347b94ed7a44f14fe2e9b031ea493_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
