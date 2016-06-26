<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_da3d3bda5763f5cdff04eda8b13713ef4df5024888c8474154f50e149a7737b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
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
        $__internal_7e1fdd9232f37085cdf50035095074b4271c70397f379a672bb6e234b96c9ef0 = $this->env->getExtension("native_profiler");
        $__internal_7e1fdd9232f37085cdf50035095074b4271c70397f379a672bb6e234b96c9ef0->enter($__internal_7e1fdd9232f37085cdf50035095074b4271c70397f379a672bb6e234b96c9ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1fdd9232f37085cdf50035095074b4271c70397f379a672bb6e234b96c9ef0->leave($__internal_7e1fdd9232f37085cdf50035095074b4271c70397f379a672bb6e234b96c9ef0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc50fdfb2771f0abbcf6c7f31daba1cd78a6546bd1939266e20407cc13a05f11 = $this->env->getExtension("native_profiler");
        $__internal_dc50fdfb2771f0abbcf6c7f31daba1cd78a6546bd1939266e20407cc13a05f11->enter($__internal_dc50fdfb2771f0abbcf6c7f31daba1cd78a6546bd1939266e20407cc13a05f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"info\">
        </div>
    </div>
    <div class=\"form\">
        <h2 style=\"font-size: 24px;\">DieAndRetry</h2>
        <div class=\"thumbnail\"><img src=\"http://i.imgur.com/ZCQGy2u.png\"/></div>

        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "email")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "username")));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "password")));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "champ", "placeholder" => "confirm password")));
        echo "
        <div>
            <input class=\"bouton\" style=\"margin-bottom:150px;\"type=\"submit\" value=\"Register\" />
        </div>
        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <span>Made with <i class=\"fa fa-heart\"></i> by Formora</span>
    </div>
";
        
        $__internal_dc50fdfb2771f0abbcf6c7f31daba1cd78a6546bd1939266e20407cc13a05f11->leave($__internal_dc50fdfb2771f0abbcf6c7f31daba1cd78a6546bd1939266e20407cc13a05f11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  40 => 6,  34 => 5,  11 => 1,);
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
/* */
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*         {{ form_widget(form.email, {'attr' : {'class' : 'champ', 'placeholder' : 'email'}}) }}*/
/*         {{ form_widget(form.username, {'attr' : {'class' : 'champ', 'placeholder' : 'username'}}) }}*/
/*         {{ form_widget(form.plainPassword.first, {'attr' : {'class' : 'champ', 'placeholder' : 'password'}}) }}*/
/*         {{ form_widget(form.plainPassword.second, {'attr' : {'class' : 'champ', 'placeholder' : 'confirm password'}}) }}*/
/*         <div>*/
/*             <input class="bouton" style="margin-bottom:150px;"type="submit" value="Register" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* */
/*         <span>Made with <i class="fa fa-heart"></i> by Formora</span>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
