<?php

/* JMSTranslationBundle:Translate:index.html.twig */
class __TwigTemplate_5cfd968c9d57e6a012c9dfd6f497dcdb79de3ae047f00faa9b96eb68af111d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JMSTranslationBundle::base.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMSTranslationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23870c0719505a6f98ddc94126e9eb6c8a50077582923cb5f948a8be25a511f6 = $this->env->getExtension("native_profiler");
        $__internal_23870c0719505a6f98ddc94126e9eb6c8a50077582923cb5f948a8be25a511f6->enter($__internal_23870c0719505a6f98ddc94126e9eb6c8a50077582923cb5f948a8be25a511f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle:Translate:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23870c0719505a6f98ddc94126e9eb6c8a50077582923cb5f948a8be25a511f6->leave($__internal_23870c0719505a6f98ddc94126e9eb6c8a50077582923cb5f948a8be25a511f6_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b34359daae85c18077c0f5002d0e3a2bc836e69f007ad3a85e24bb94e8852788 = $this->env->getExtension("native_profiler");
        $__internal_b34359daae85c18077c0f5002d0e3a2bc836e69f007ad3a85e24bb94e8852788->enter($__internal_b34359daae85c18077c0f5002d0e3a2bc836e69f007ad3a85e24bb94e8852788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = ";
        // line 6
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("jms_translation_update_message", array("config" => (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")), "domain" => (isset($context["selectedDomain"]) ? $context["selectedDomain"] : $this->getContext($context, "selectedDomain")), "locale" => (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")))));
        echo ";
        var isWritable        = ";
        // line 7
        echo ((((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === true)) ? ("true") : ("false"));
        echo ";
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
";
        
        $__internal_b34359daae85c18077c0f5002d0e3a2bc836e69f007ad3a85e24bb94e8852788->leave($__internal_b34359daae85c18077c0f5002d0e3a2bc836e69f007ad3a85e24bb94e8852788_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_e921eeac297c97c62784ce56f5de46d79587d89e673daee8dd816fc2bf9aeb81 = $this->env->getExtension("native_profiler");
        $__internal_e921eeac297c97c62784ce56f5de46d79587d89e673daee8dd816fc2bf9aeb81->enter($__internal_e921eeac297c97c62784ce56f5de46d79587d89e673daee8dd816fc2bf9aeb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <form id=\"config\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 19
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "\"";
            if (($context["config"] == (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>
    
        <select name=\"domain\" class=\"span3\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : $this->getContext($context, "domains")));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\"";
            if (($context["domain"] == (isset($context["selectedDomain"]) ? $context["selectedDomain"] : $this->getContext($context, "selectedDomain")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>
        
        <select name=\"locale\" class=\"span2\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 31
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"";
            if (($context["locale"] == (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </select>
    </form>
    
    ";
        // line 36
        if (((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === false)) {
            // line 37
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 41
        echo "    
    ";
        // line 42
        if (("xliff" != (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")))) {
            // line 43
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format. 
        
        <br /><br />
        
        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) ? $context["selectedLocale"] : $this->getContext($context, "selectedLocale")), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) ? $context["selectedConfig"] : $this->getContext($context, "selectedConfig")), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 52
        echo "
    <h2>Available Messages</h2>
    
    ";
        // line 55
        if ( !twig_test_empty((isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")))) {
            // line 56
            echo "    <h3>New Messages</h3>
    ";
            // line 57
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 57)->display(array_merge($context, array("messages" => (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")))));
            // line 58
            echo "    ";
        }
        // line 59
        echo "    
    ";
        // line 60
        if ( !twig_test_empty((isset($context["existingMessages"]) ? $context["existingMessages"] : $this->getContext($context, "existingMessages")))) {
            // line 61
            echo "    <h3>Existing Messages</h3>
    ";
            // line 62
            $this->loadTemplate("JMSTranslationBundle:Translate:messages.html.twig", "JMSTranslationBundle:Translate:index.html.twig", 62)->display(array_merge($context, array("messages" => (isset($context["existingMessages"]) ? $context["existingMessages"] : $this->getContext($context, "existingMessages")))));
            // line 63
            echo "    ";
        }
        // line 64
        echo "
";
        
        $__internal_e921eeac297c97c62784ce56f5de46d79587d89e673daee8dd816fc2bf9aeb81->leave($__internal_e921eeac297c97c62784ce56f5de46d79587d89e673daee8dd816fc2bf9aeb81_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 64,  207 => 63,  205 => 62,  202 => 61,  200 => 60,  197 => 59,  194 => 58,  192 => 57,  189 => 56,  187 => 55,  182 => 52,  174 => 49,  166 => 43,  164 => 42,  161 => 41,  155 => 38,  152 => 37,  150 => 36,  145 => 33,  130 => 31,  126 => 30,  121 => 27,  106 => 25,  102 => 24,  97 => 21,  82 => 19,  78 => 18,  73 => 16,  70 => 15,  64 => 14,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "JMSTranslationBundle::base.html.twig" %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script language="javascript" type="text/javascript">*/
/*         var updateMessagePath = {{ path("jms_translation_update_message", {"config": selectedConfig, "domain": selectedDomain, "locale": selectedLocale})|json_encode|raw }};*/
/*         var isWritable        = {{ isWriteable is sameas(true) ? 'true' : 'false' }};*/
/*         var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);*/
/* */
/*         JMS.ready();*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <form id="config" action="{{ path("jms_translation_index") }}" method="get">*/
/*         <select name="config" class="span3">*/
/*             {% for config in configs %}*/
/*             <option value="{{ config }}"{% if config == selectedConfig %} selected="selected"{% endif %}>{{ config }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     */
/*         <select name="domain" class="span3">*/
/*             {% for domain in domains %}*/
/*             <option value="{{ domain }}"{% if domain == selectedDomain %} selected="selected"{% endif %}>{{ domain }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         */
/*         <select name="locale" class="span2">*/
/*             {% for locale in locales %}*/
/*             <option value="{{ locale }}"{% if locale == selectedLocale %} selected="selected"{% endif %}>{{ locale }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </form>*/
/*     */
/*     {% if isWriteable is sameas(false) %}*/
/*     <div class="alert-message error">*/
/*         The translation file "<strong>{{ file }}</strong>" is not writable.*/
/*     </div>*/
/*     {% endif %}*/
/*     */
/*     {% if "xliff" != format %}*/
/*     <div class="alert-message warning">*/
/*         Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format. */
/*         */
/*         <br /><br />*/
/*         */
/*         However, you can easily convert your existing translation files to the XLIFF format by running:<br />*/
/*         <code>php app/console translation:extract {{ selectedLocale }} --config={{ selectedConfig }} --output-format=xliff</code>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <h2>Available Messages</h2>*/
/*     */
/*     {% if newMessages is not empty %}*/
/*     <h3>New Messages</h3>*/
/*     {% include "JMSTranslationBundle:Translate:messages.html.twig" with {"messages": newMessages} %}*/
/*     {% endif %}*/
/*     */
/*     {% if existingMessages is not empty %}*/
/*     <h3>Existing Messages</h3>*/
/*     {% include "JMSTranslationBundle:Translate:messages.html.twig" with {"messages": existingMessages} %}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
