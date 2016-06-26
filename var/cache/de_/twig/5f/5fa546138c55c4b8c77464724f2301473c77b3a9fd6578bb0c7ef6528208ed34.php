<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_67da69468079855f22fff826090ec0a776aa5d26f1724c2ff455334b64f1cd9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7dafca44ef862acd700ddd52a9d3996adfdf790fe544072b9fcc02de15181121 = $this->env->getExtension("native_profiler");
        $__internal_7dafca44ef862acd700ddd52a9d3996adfdf790fe544072b9fcc02de15181121->enter($__internal_7dafca44ef862acd700ddd52a9d3996adfdf790fe544072b9fcc02de15181121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dafca44ef862acd700ddd52a9d3996adfdf790fe544072b9fcc02de15181121->leave($__internal_7dafca44ef862acd700ddd52a9d3996adfdf790fe544072b9fcc02de15181121_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fdc6ae34bdff4601f373e2c95e27bd3c27ba9c88b5736799c21ddc221826dcf = $this->env->getExtension("native_profiler");
        $__internal_2fdc6ae34bdff4601f373e2c95e27bd3c27ba9c88b5736799c21ddc221826dcf->enter($__internal_2fdc6ae34bdff4601f373e2c95e27bd3c27ba9c88b5736799c21ddc221826dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2fdc6ae34bdff4601f373e2c95e27bd3c27ba9c88b5736799c21ddc221826dcf->leave($__internal_2fdc6ae34bdff4601f373e2c95e27bd3c27ba9c88b5736799c21ddc221826dcf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81e0e23f387d2fd85ee012d9ee87cbbb1eb01733f2ef7d1a99a4f4b87b7ad5d4 = $this->env->getExtension("native_profiler");
        $__internal_81e0e23f387d2fd85ee012d9ee87cbbb1eb01733f2ef7d1a99a4f4b87b7ad5d4->enter($__internal_81e0e23f387d2fd85ee012d9ee87cbbb1eb01733f2ef7d1a99a4f4b87b7ad5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81e0e23f387d2fd85ee012d9ee87cbbb1eb01733f2ef7d1a99a4f4b87b7ad5d4->leave($__internal_81e0e23f387d2fd85ee012d9ee87cbbb1eb01733f2ef7d1a99a4f4b87b7ad5d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f8d51e88f4656aed820412e7d60c3a77758b8b2b53c543c9e100390a6149ab5 = $this->env->getExtension("native_profiler");
        $__internal_6f8d51e88f4656aed820412e7d60c3a77758b8b2b53c543c9e100390a6149ab5->enter($__internal_6f8d51e88f4656aed820412e7d60c3a77758b8b2b53c543c9e100390a6149ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f8d51e88f4656aed820412e7d60c3a77758b8b2b53c543c9e100390a6149ab5->leave($__internal_6f8d51e88f4656aed820412e7d60c3a77758b8b2b53c543c9e100390a6149ab5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
