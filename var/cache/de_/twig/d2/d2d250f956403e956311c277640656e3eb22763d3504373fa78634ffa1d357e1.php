<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8aea263ca814215a6b468f38b464085ebdaa585038fc14e600b8fb28c58f89cb extends Twig_Template
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
        $__internal_4652bca80697fa5883bf9d62956577c25e7ce5812b745e424bc4a6e18e0f191a = $this->env->getExtension("native_profiler");
        $__internal_4652bca80697fa5883bf9d62956577c25e7ce5812b745e424bc4a6e18e0f191a->enter($__internal_4652bca80697fa5883bf9d62956577c25e7ce5812b745e424bc4a6e18e0f191a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"refresh\" content=\"1; URL=";
        // line 5
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
</head>
<body>
";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "</body>
</html>
";
        
        $__internal_4652bca80697fa5883bf9d62956577c25e7ce5812b745e424bc4a6e18e0f191a->leave($__internal_4652bca80697fa5883bf9d62956577c25e7ce5812b745e424bc4a6e18e0f191a_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72e2b91f1864842a880616c608e8b8ab2ae945d1a5abafe5cdc54efc135ffca3 = $this->env->getExtension("native_profiler");
        $__internal_72e2b91f1864842a880616c608e8b8ab2ae945d1a5abafe5cdc54efc135ffca3->enter($__internal_72e2b91f1864842a880616c608e8b8ab2ae945d1a5abafe5cdc54efc135ffca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "    Bienvenue ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " ! Redirection....
";
        
        $__internal_72e2b91f1864842a880616c608e8b8ab2ae945d1a5abafe5cdc54efc135ffca3->leave($__internal_72e2b91f1864842a880616c608e8b8ab2ae945d1a5abafe5cdc54efc135ffca3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  46 => 8,  37 => 11,  35 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="refresh" content="1; URL={{ path('index') }}">*/
/* </head>*/
/* <body>*/
/* {% block fos_user_content %}*/
/*     Bienvenue {{ user.username }} ! Redirection....*/
/* {% endblock fos_user_content %}*/
/* </body>*/
/* </html>*/
/* */
