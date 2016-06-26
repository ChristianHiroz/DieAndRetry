<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5b79bc273dff0c9cf29602f89b24fa32b66d61939b096688cbaa77b674bdd667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6ba862df47cc01ca318b38b850d3793c81b43aa7741ad6615faba8bea555c04 = $this->env->getExtension("native_profiler");
        $__internal_b6ba862df47cc01ca318b38b850d3793c81b43aa7741ad6615faba8bea555c04->enter($__internal_b6ba862df47cc01ca318b38b850d3793c81b43aa7741ad6615faba8bea555c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18574c5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18574c5_0") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/applogin_reset_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "18574c5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18574c5_1") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/applogin_style_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "18574c5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18574c5") : $this->env->getExtension('asset')->getAssetUrl("css/compiled/applogin.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    </head>
    <body>
    ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_b6ba862df47cc01ca318b38b850d3793c81b43aa7741ad6615faba8bea555c04->leave($__internal_b6ba862df47cc01ca318b38b850d3793c81b43aa7741ad6615faba8bea555c04_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a94f193b8e83d2e038d93c3da225525503497445902ebf2f937f191dec5bed94 = $this->env->getExtension("native_profiler");
        $__internal_a94f193b8e83d2e038d93c3da225525503497445902ebf2f937f191dec5bed94->enter($__internal_a94f193b8e83d2e038d93c3da225525503497445902ebf2f937f191dec5bed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        
        $__internal_a94f193b8e83d2e038d93c3da225525503497445902ebf2f937f191dec5bed94->leave($__internal_a94f193b8e83d2e038d93c3da225525503497445902ebf2f937f191dec5bed94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  72 => 17,  63 => 19,  61 => 17,  53 => 11,  33 => 9,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         {% stylesheets*/
/*         'bundles/user/css/reset.css'*/
/*         'bundles/user/css/style.css'*/
/*         filter='cssrewrite' output='css/compiled/applogin.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>*/
/*         <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>*/
/*         <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>*/
/*     </head>*/
/*     <body>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/*     </body>*/
/* </html>*/
/* */
