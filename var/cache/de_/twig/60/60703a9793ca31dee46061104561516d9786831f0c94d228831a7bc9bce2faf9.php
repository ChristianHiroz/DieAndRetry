<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_fac9c2f5d8987c0d0c025e9346bb49ba03907b087798a8ea3ed0eeab9d073187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e418164e2223bef8c944f5982d94a360f7cffe11204defc49e4c736c39381a62 = $this->env->getExtension("native_profiler");
        $__internal_e418164e2223bef8c944f5982d94a360f7cffe11204defc49e4c736c39381a62->enter($__internal_e418164e2223bef8c944f5982d94a360f7cffe11204defc49e4c736c39381a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e418164e2223bef8c944f5982d94a360f7cffe11204defc49e4c736c39381a62->leave($__internal_e418164e2223bef8c944f5982d94a360f7cffe11204defc49e4c736c39381a62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
