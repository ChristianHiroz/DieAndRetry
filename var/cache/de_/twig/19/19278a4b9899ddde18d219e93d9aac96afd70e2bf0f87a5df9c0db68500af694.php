<?php

/* JMSTranslationBundle::base.html.twig */
class __TwigTemplate_125adacf14da0575dfd15592090cf7a7efdfbe273dce7f409a3b92c793d10856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'topjavascripts' => array($this, 'block_topjavascripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b9719114f398ece2dae1d2c3e9aaafa73c6ba744f1ef5fe9cc66a357e71b66e = $this->env->getExtension("native_profiler");
        $__internal_6b9719114f398ece2dae1d2c3e9aaafa73c6ba744f1ef5fe9cc66a357e71b66e->enter($__internal_6b9719114f398ece2dae1d2c3e9aaafa73c6ba744f1ef5fe9cc66a357e71b66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jmstranslation/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jmstranslation/css/layout.css"), "html", null, true);
        echo "\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('topjavascripts', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div class=\"topbar\">
            <div class=\"topbar-inner\">
                <div class=\"container\">
                    <h3><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("jms_translation_index");
        echo "\" class=\"logo\">JMSTranslationBundle UI</a></h3>
                    
                </div>
            </div>
        </div>
        <div class=\"container\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>

        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>";
        
        $__internal_6b9719114f398ece2dae1d2c3e9aaafa73c6ba744f1ef5fe9cc66a357e71b66e->leave($__internal_6b9719114f398ece2dae1d2c3e9aaafa73c6ba744f1ef5fe9cc66a357e71b66e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b09bbb03c5a6491d1ca4542d8f2749b8185588a58a0ef595f4adc7a1f1cff15d = $this->env->getExtension("native_profiler");
        $__internal_b09bbb03c5a6491d1ca4542d8f2749b8185588a58a0ef595f4adc7a1f1cff15d->enter($__internal_b09bbb03c5a6491d1ca4542d8f2749b8185588a58a0ef595f4adc7a1f1cff15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JMSTranslationBundle UI";
        
        $__internal_b09bbb03c5a6491d1ca4542d8f2749b8185588a58a0ef595f4adc7a1f1cff15d->leave($__internal_b09bbb03c5a6491d1ca4542d8f2749b8185588a58a0ef595f4adc7a1f1cff15d_prof);

    }

    // line 9
    public function block_topjavascripts($context, array $blocks = array())
    {
        $__internal_c0b44e6c54077e277bb8ff55b6da5816e4aa2c2eceaded62f260157cdefa45ca = $this->env->getExtension("native_profiler");
        $__internal_c0b44e6c54077e277bb8ff55b6da5816e4aa2c2eceaded62f260157cdefa45ca->enter($__internal_c0b44e6c54077e277bb8ff55b6da5816e4aa2c2eceaded62f260157cdefa45ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topjavascripts"));

        
        $__internal_c0b44e6c54077e277bb8ff55b6da5816e4aa2c2eceaded62f260157cdefa45ca->leave($__internal_c0b44e6c54077e277bb8ff55b6da5816e4aa2c2eceaded62f260157cdefa45ca_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a41c033769b559d9563b7cad69bb646308bed11b3b3365b1a8b2c37530dd31ad = $this->env->getExtension("native_profiler");
        $__internal_a41c033769b559d9563b7cad69bb646308bed11b3b3365b1a8b2c37530dd31ad->enter($__internal_a41c033769b559d9563b7cad69bb646308bed11b3b3365b1a8b2c37530dd31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a41c033769b559d9563b7cad69bb646308bed11b3b3365b1a8b2c37530dd31ad->leave($__internal_a41c033769b559d9563b7cad69bb646308bed11b3b3365b1a8b2c37530dd31ad_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c176c851f86fc5d3019c7160e4d3275c9d7da201f5706be366c1a955136ffe84 = $this->env->getExtension("native_profiler");
        $__internal_c176c851f86fc5d3019c7160e4d3275c9d7da201f5706be366c1a955136ffe84->enter($__internal_c176c851f86fc5d3019c7160e4d3275c9d7da201f5706be366c1a955136ffe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jmstranslation/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jmstranslation/js/trunk8.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/jmstranslation/js/jms.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c176c851f86fc5d3019c7160e4d3275c9d7da201f5706be366c1a955136ffe84->leave($__internal_c176c851f86fc5d3019c7160e4d3275c9d7da201f5706be366c1a955136ffe84_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  127 => 26,  122 => 25,  116 => 24,  105 => 21,  94 => 9,  82 => 5,  74 => 29,  72 => 24,  68 => 22,  66 => 21,  57 => 15,  50 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}JMSTranslationBundle UI{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset("bundles/jmstranslation/css/bootstrap.css") }}" />*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset("bundles/jmstranslation/css/layout.css") }}" />*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block topjavascripts %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div class="topbar">*/
/*             <div class="topbar-inner">*/
/*                 <div class="container">*/
/*                     <h3><a href="{{ path("jms_translation_index") }}" class="logo">JMSTranslationBundle UI</a></h3>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*         <script language="javascript" type="text/javascript" src="{{ asset("bundles/jmstranslation/js/jquery.js") }}"></script>*/
/*         <script language="javascript" type="text/javascript" src="{{ asset("bundles/jmstranslation/js/trunk8.js") }}"></script>*/
/*             <script type="text/javascript" src="{{ asset("/bundles/jmstranslation/js/jms.js") }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
