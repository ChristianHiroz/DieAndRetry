<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7f91394da773a4a573ad13931ddd30457e9786d07ed788c79c970a53e5d520b8 extends Twig_Template
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
        $__internal_855f621a9e5f61f64d5feda87f55b038f200bc17b366214d2f523490f1934d1d = $this->env->getExtension("native_profiler");
        $__internal_855f621a9e5f61f64d5feda87f55b038f200bc17b366214d2f523490f1934d1d->enter($__internal_855f621a9e5f61f64d5feda87f55b038f200bc17b366214d2f523490f1934d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_855f621a9e5f61f64d5feda87f55b038f200bc17b366214d2f523490f1934d1d->leave($__internal_855f621a9e5f61f64d5feda87f55b038f200bc17b366214d2f523490f1934d1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
