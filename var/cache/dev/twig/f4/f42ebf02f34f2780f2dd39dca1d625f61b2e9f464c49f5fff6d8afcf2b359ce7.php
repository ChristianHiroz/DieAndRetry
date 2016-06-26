<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ff79406b2c10e46cfb9db52cfb557a6685818c6cdffa64c07ce9159d28aad6b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_1d46cbb97dd2e9d435e8fc16b458f117abd99d0fb9c72330884365cba49d45bb = $this->env->getExtension("native_profiler");
        $__internal_1d46cbb97dd2e9d435e8fc16b458f117abd99d0fb9c72330884365cba49d45bb->enter($__internal_1d46cbb97dd2e9d435e8fc16b458f117abd99d0fb9c72330884365cba49d45bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d46cbb97dd2e9d435e8fc16b458f117abd99d0fb9c72330884365cba49d45bb->leave($__internal_1d46cbb97dd2e9d435e8fc16b458f117abd99d0fb9c72330884365cba49d45bb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_897c69ed7ffa2e12e241715dc8aa7097a719a5f893d9ba7a99ddd8eb4a3c37fc = $this->env->getExtension("native_profiler");
        $__internal_897c69ed7ffa2e12e241715dc8aa7097a719a5f893d9ba7a99ddd8eb4a3c37fc->enter($__internal_897c69ed7ffa2e12e241715dc8aa7097a719a5f893d9ba7a99ddd8eb4a3c37fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"info\">
        </div>
    </div>
    <div class=\"form\">
        <h2 style=\"font-size: 24px;\">DieAndRetry</h2>
        <div class=\"thumbnail\"><img src=\"http://i.imgur.com/ZCQGy2u.png\"/></div>
        <form class=\"login-form\" style=\"margin-bottom: 100px;\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <input class=\"champ\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"username\"/>

            <input class=\"champ\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"password\"/>

            <label for=\"remember_me\">Se souvenir de moi</label>
            <input style=\"margin-bottom: 15px;\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

            <input class=\"bouton\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\" />
            <p class=\"message\">Not registered? <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Create an account</a></p>
        </form>

        <span>Made with <i class=\"fa fa-heart\"></i> by Formora</span>
    </div>
";
        
        $__internal_897c69ed7ffa2e12e241715dc8aa7097a719a5f893d9ba7a99ddd8eb4a3c37fc->leave($__internal_897c69ed7ffa2e12e241715dc8aa7097a719a5f893d9ba7a99ddd8eb4a3c37fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  58 => 16,  53 => 14,  49 => 13,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="container">*/
/*         <div class="info">*/
/*         </div>*/
/*     </div>*/
/*     <div class="form">*/
/*         <h2 style="font-size: 24px;">DieAndRetry</h2>*/
/*         <div class="thumbnail"><img src="http://i.imgur.com/ZCQGy2u.png"/></div>*/
/*         <form class="login-form" style="margin-bottom: 100px;" action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <input class="champ" type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="username"/>*/
/* */
/*             <input class="champ" type="password" id="password" name="_password" required="required" placeholder="password"/>*/
/* */
/*             <label for="remember_me">Se souvenir de moi</label>*/
/*             <input style="margin-bottom: 15px;" type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* */
/*             <input class="bouton" type="submit" id="_submit" name="_submit" value="Login" />*/
/*             <p class="message">Not registered? <a href="{{ path('fos_user_registration_register') }}">Create an account</a></p>*/
/*         </form>*/
/* */
/*         <span>Made with <i class="fa fa-heart"></i> by Formora</span>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
