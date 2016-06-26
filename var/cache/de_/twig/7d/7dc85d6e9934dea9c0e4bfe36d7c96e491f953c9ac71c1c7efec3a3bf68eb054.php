<?php

/* JMSTranslationBundle:Translate:messages.html.twig */
class __TwigTemplate_923edcde71c444b331d1536fb5026aa88665a2e0a15bea1d412cb777ea49f5c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_423071ba609131f630c96b1ff85455e2c0ba8a07a8d493e5211bb02c35a09e80 = $this->env->getExtension("native_profiler");
        $__internal_423071ba609131f630c96b1ff85455e2c0ba8a07a8d493e5211bb02c35a09e80->enter($__internal_423071ba609131f630c96b1ff85455e2c0ba8a07a8d493e5211bb02c35a09e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JMSTranslationBundle:Translate:messages.html.twig"));

        // line 1
        echo "    <table>
        <thead>
            <tr>
                <th width=\"20%\">ID</th>
                <th width=\"40%\">Translation</th>
                <th width=\"40%\">Additional Information</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["message"]) {
            // line 11
            echo "            <tr>
                <td>
                    <a class=\"jms-translation-anchor\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" />
                    <p><abbr title=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["id"], 0, 25), "html", null, true);
            if ((twig_length_filter($this->env, $context["id"]) > 25)) {
                echo "...";
            }
            echo "</abbr></p>
                </td>
                <td>
                    <textarea data-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" class=\"span6\"";
            if (((isset($context["isWriteable"]) ? $context["isWriteable"] : $this->getContext($context, "isWriteable")) === false)) {
                echo " readonly=\"readonly\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "localeString", array()), "html", null, true);
            echo "</textarea></td>
                <td>
                    ";
            // line 19
            if ( !twig_test_empty($this->getAttribute($context["message"], "meaning", array()))) {
                // line 20
                echo "                        <h6>Meaning</h6>
                        <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "meaning", array()), "html", null, true);
                echo "</p>
                    ";
            }
            // line 23
            echo "
                    ";
            // line 24
            if ($this->getAttribute((isset($context["alternativeMessages"]) ? $context["alternativeMessages"] : null), $context["id"], array(), "array", true, true)) {
                // line 25
                echo "                        <h6>Alternative Translations</h6>
                        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["alternativeMessages"]) ? $context["alternativeMessages"] : $this->getContext($context, "alternativeMessages")), $context["id"], array(), "array"));
                foreach ($context['_seq'] as $context["locale"] => $context["altMessage"]) {
                    // line 27
                    echo "                        <p>
                            <strong>";
                    // line 28
                    echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                    echo ":</strong> <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["altMessage"], "localeString", array()), "html", null, true);
                    echo "</pre>
                        </p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['altMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    ";
            }
            // line 32
            echo "
                    ";
            // line 33
            if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "sources", array())) > 0)) {
                // line 34
                echo "                        <h6>Sources</h6>
                        <ul>
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "sources", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                    // line 37
                    echo "                            <li title=\"";
                    echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                    echo "\" class=\"jms-sources-list-item truncate-left\">";
                    echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                        </ul>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if (((( !twig_test_empty($this->getAttribute($context["message"], "desc", array())) && ($this->getAttribute(            // line 43
$context["message"], "localeString", array()) != $this->getAttribute($context["message"], "desc", array()))) && (            // line 44
$context["id"] != $this->getAttribute($context["message"], "desc", array()))) && ( !$this->getAttribute($this->getAttribute(            // line 45
(isset($context["alternativeMessages"]) ? $context["alternativeMessages"] : null), $context["id"], array(), "array", false, true), (isset($context["sourceLanguage"]) ? $context["sourceLanguage"] : $this->getContext($context, "sourceLanguage")), array(), "array", true, true) || ($this->getAttribute($this->getAttribute($this->getAttribute(            // line 46
(isset($context["alternativeMessages"]) ? $context["alternativeMessages"] : $this->getContext($context, "alternativeMessages")), $context["id"], array(), "array"), (isset($context["sourceLanguage"]) ? $context["sourceLanguage"] : $this->getContext($context, "sourceLanguage")), array(), "array"), "localeString", array()) != $this->getAttribute($context["message"], "desc", array()))))) {
                // line 47
                echo "                        <h6>Description</h6>
                        <p>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "desc", array()), "html", null, true);
                echo "</p>
                    ";
            }
            // line 50
            echo "                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"3\">No messages found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
";
        
        $__internal_423071ba609131f630c96b1ff85455e2c0ba8a07a8d493e5211bb02c35a09e80->leave($__internal_423071ba609131f630c96b1ff85455e2c0ba8a07a8d493e5211bb02c35a09e80_prof);

    }

    public function getTemplateName()
    {
        return "JMSTranslationBundle:Translate:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  159 => 53,  152 => 50,  147 => 48,  144 => 47,  142 => 46,  141 => 45,  140 => 44,  139 => 43,  138 => 42,  135 => 41,  131 => 39,  120 => 37,  116 => 36,  112 => 34,  110 => 33,  107 => 32,  104 => 31,  93 => 28,  90 => 27,  86 => 26,  83 => 25,  81 => 24,  78 => 23,  73 => 21,  70 => 20,  68 => 19,  57 => 17,  46 => 14,  42 => 13,  38 => 11,  33 => 10,  22 => 1,);
    }
}
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="20%">ID</th>*/
/*                 <th width="40%">Translation</th>*/
/*                 <th width="40%">Additional Information</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for id, message in messages %}*/
/*             <tr>*/
/*                 <td>*/
/*                     <a class="jms-translation-anchor" id="{{ id }}" />*/
/*                     <p><abbr title="{{ id }}">{{ id|slice(0, 25) }}{% if id|length > 25 %}...{% endif %}</abbr></p>*/
/*                 </td>*/
/*                 <td>*/
/*                     <textarea data-id="{{ id }}" class="span6"{% if isWriteable is sameas(false) %} readonly="readonly"{% endif %}>{{ message.localeString }}</textarea></td>*/
/*                 <td>*/
/*                     {% if message.meaning is not empty %}*/
/*                         <h6>Meaning</h6>*/
/*                         <p>{{ message.meaning }}</p>*/
/*                     {% endif %}*/
/* */
/*                     {% if alternativeMessages[id] is defined %}*/
/*                         <h6>Alternative Translations</h6>*/
/*                         {% for locale, altMessage in alternativeMessages[id] %}*/
/*                         <p>*/
/*                             <strong>{{ locale }}:</strong> <pre>{{ altMessage.localeString }}</pre>*/
/*                         </p>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% if message.sources|length > 0 %}*/
/*                         <h6>Sources</h6>*/
/*                         <ul>*/
/*                         {% for source in message.sources %}*/
/*                             <li title="{{ source }}" class="jms-sources-list-item truncate-left">{{ source }}</li>*/
/*                         {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/* */
/*                     {% if message.desc is not empty*/
/*                             and message.localeString != message.desc*/
/*                             and id != message.desc*/
/*                             and (alternativeMessages[id][sourceLanguage] is not defined*/
/*                                  or alternativeMessages[id][sourceLanguage].localeString != message.desc) %}*/
/*                         <h6>Description</h6>*/
/*                         <p>{{ message.desc }}</p>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             {% else %}*/
/*             <tr>*/
/*                 <td colspan="3">No messages found</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
