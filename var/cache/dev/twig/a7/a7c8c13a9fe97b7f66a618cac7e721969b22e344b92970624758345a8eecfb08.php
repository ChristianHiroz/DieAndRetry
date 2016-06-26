<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_000cc754197ca4f09942654ae350ac942c1e7f846cbb6007f994013649932fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df74e19106dfc9e4822711cfd9882644e1c145df88a3f9cbc1107a299793e8f5 = $this->env->getExtension("native_profiler");
        $__internal_df74e19106dfc9e4822711cfd9882644e1c145df88a3f9cbc1107a299793e8f5->enter($__internal_df74e19106dfc9e4822711cfd9882644e1c145df88a3f9cbc1107a299793e8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df74e19106dfc9e4822711cfd9882644e1c145df88a3f9cbc1107a299793e8f5->leave($__internal_df74e19106dfc9e4822711cfd9882644e1c145df88a3f9cbc1107a299793e8f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9e5ac235b5d8609f5a693cdb69e6ff62bdec483046ad9ac774b0371aae25035 = $this->env->getExtension("native_profiler");
        $__internal_a9e5ac235b5d8609f5a693cdb69e6ff62bdec483046ad9ac774b0371aae25035->enter($__internal_a9e5ac235b5d8609f5a693cdb69e6ff62bdec483046ad9ac774b0371aae25035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9e5ac235b5d8609f5a693cdb69e6ff62bdec483046ad9ac774b0371aae25035->leave($__internal_a9e5ac235b5d8609f5a693cdb69e6ff62bdec483046ad9ac774b0371aae25035_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea3890c9a1cbe04d310822642292c37c87e42bdf9221212681600bdb609250cb = $this->env->getExtension("native_profiler");
        $__internal_ea3890c9a1cbe04d310822642292c37c87e42bdf9221212681600bdb609250cb->enter($__internal_ea3890c9a1cbe04d310822642292c37c87e42bdf9221212681600bdb609250cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea3890c9a1cbe04d310822642292c37c87e42bdf9221212681600bdb609250cb->leave($__internal_ea3890c9a1cbe04d310822642292c37c87e42bdf9221212681600bdb609250cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bf4f3898aadff8559907cc06b2b029340b805509119f3d5052075f110ef5fec = $this->env->getExtension("native_profiler");
        $__internal_2bf4f3898aadff8559907cc06b2b029340b805509119f3d5052075f110ef5fec->enter($__internal_2bf4f3898aadff8559907cc06b2b029340b805509119f3d5052075f110ef5fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2bf4f3898aadff8559907cc06b2b029340b805509119f3d5052075f110ef5fec->leave($__internal_2bf4f3898aadff8559907cc06b2b029340b805509119f3d5052075f110ef5fec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
