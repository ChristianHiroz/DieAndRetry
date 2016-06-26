<?php

/* @JMSTranslation/base.html.twig */
class __TwigTemplate_c44f22b5ba9162e41a358b515133af4123dae27a46602ddc65cf59b643719757 extends Twig_Template
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
        $__internal_582afe996c42fc782fbbfbdc888bd39a9d3e8d4ab032f66e2f2774c27949da4d = $this->env->getExtension("native_profiler");
        $__internal_582afe996c42fc782fbbfbdc888bd39a9d3e8d4ab032f66e2f2774c27949da4d->enter($__internal_582afe996c42fc782fbbfbdc888bd39a9d3e8d4ab032f66e2f2774c27949da4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JMSTranslation/base.html.twig"));

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
        
        $__internal_582afe996c42fc782fbbfbdc888bd39a9d3e8d4ab032f66e2f2774c27949da4d->leave($__internal_582afe996c42fc782fbbfbdc888bd39a9d3e8d4ab032f66e2f2774c27949da4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb978e840466addbc5ea271b358a2e547ef37eabb5ceadedb7baf3da10a05d5f = $this->env->getExtension("native_profiler");
        $__internal_fb978e840466addbc5ea271b358a2e547ef37eabb5ceadedb7baf3da10a05d5f->enter($__internal_fb978e840466addbc5ea271b358a2e547ef37eabb5ceadedb7baf3da10a05d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JMSTranslationBundle UI";
        
        $__internal_fb978e840466addbc5ea271b358a2e547ef37eabb5ceadedb7baf3da10a05d5f->leave($__internal_fb978e840466addbc5ea271b358a2e547ef37eabb5ceadedb7baf3da10a05d5f_prof);

    }

    // line 9
    public function block_topjavascripts($context, array $blocks = array())
    {
        $__internal_5d6d8c3a8ce644fb25d5cdf5459616022d2c0da65f4b3489425cc3c2e93063b0 = $this->env->getExtension("native_profiler");
        $__internal_5d6d8c3a8ce644fb25d5cdf5459616022d2c0da65f4b3489425cc3c2e93063b0->enter($__internal_5d6d8c3a8ce644fb25d5cdf5459616022d2c0da65f4b3489425cc3c2e93063b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topjavascripts"));

        
        $__internal_5d6d8c3a8ce644fb25d5cdf5459616022d2c0da65f4b3489425cc3c2e93063b0->leave($__internal_5d6d8c3a8ce644fb25d5cdf5459616022d2c0da65f4b3489425cc3c2e93063b0_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_36322315b714c3ba881b51b318639082fa860bc90093342dc400fb05e1b4ba79 = $this->env->getExtension("native_profiler");
        $__internal_36322315b714c3ba881b51b318639082fa860bc90093342dc400fb05e1b4ba79->enter($__internal_36322315b714c3ba881b51b318639082fa860bc90093342dc400fb05e1b4ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36322315b714c3ba881b51b318639082fa860bc90093342dc400fb05e1b4ba79->leave($__internal_36322315b714c3ba881b51b318639082fa860bc90093342dc400fb05e1b4ba79_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ffe8017fcf42f09e09b1a33a212d1fd3d0459e4324795cfda58ba5bfe95be27 = $this->env->getExtension("native_profiler");
        $__internal_9ffe8017fcf42f09e09b1a33a212d1fd3d0459e4324795cfda58ba5bfe95be27->enter($__internal_9ffe8017fcf42f09e09b1a33a212d1fd3d0459e4324795cfda58ba5bfe95be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9ffe8017fcf42f09e09b1a33a212d1fd3d0459e4324795cfda58ba5bfe95be27->leave($__internal_9ffe8017fcf42f09e09b1a33a212d1fd3d0459e4324795cfda58ba5bfe95be27_prof);

    }

    public function getTemplateName()
    {
        return "@JMSTranslation/base.html.twig";
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
