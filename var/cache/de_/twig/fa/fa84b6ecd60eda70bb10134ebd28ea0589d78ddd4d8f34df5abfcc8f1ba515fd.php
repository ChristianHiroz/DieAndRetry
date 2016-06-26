<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09d45048d523c850e4c89401dfd7a5dc5f256c94167e249e9cb62260d56480d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6a8523022e9194f4c66cd363352fd3fc6de1d986d12425bf4db1251279fa23a = $this->env->getExtension("native_profiler");
        $__internal_b6a8523022e9194f4c66cd363352fd3fc6de1d986d12425bf4db1251279fa23a->enter($__internal_b6a8523022e9194f4c66cd363352fd3fc6de1d986d12425bf4db1251279fa23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a8523022e9194f4c66cd363352fd3fc6de1d986d12425bf4db1251279fa23a->leave($__internal_b6a8523022e9194f4c66cd363352fd3fc6de1d986d12425bf4db1251279fa23a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_871e6d38e6d30d8c6a3ab8d8df5d9203a604ac3aa4ae91c96aae6e1a507b2a26 = $this->env->getExtension("native_profiler");
        $__internal_871e6d38e6d30d8c6a3ab8d8df5d9203a604ac3aa4ae91c96aae6e1a507b2a26->enter($__internal_871e6d38e6d30d8c6a3ab8d8df5d9203a604ac3aa4ae91c96aae6e1a507b2a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_871e6d38e6d30d8c6a3ab8d8df5d9203a604ac3aa4ae91c96aae6e1a507b2a26->leave($__internal_871e6d38e6d30d8c6a3ab8d8df5d9203a604ac3aa4ae91c96aae6e1a507b2a26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9d9efa3e27d7ce797d6786905ce2addccdadce78f3740b9edca57785cec25e = $this->env->getExtension("native_profiler");
        $__internal_ab9d9efa3e27d7ce797d6786905ce2addccdadce78f3740b9edca57785cec25e->enter($__internal_ab9d9efa3e27d7ce797d6786905ce2addccdadce78f3740b9edca57785cec25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ab9d9efa3e27d7ce797d6786905ce2addccdadce78f3740b9edca57785cec25e->leave($__internal_ab9d9efa3e27d7ce797d6786905ce2addccdadce78f3740b9edca57785cec25e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
