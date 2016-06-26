<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_419d387e6e7206b076339c3c7d27ce051d341f57c3f2d873d47721db03a16cb6 extends Twig_Template
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
        $__internal_6938aa9ec5670e4d6c68894a98af1220e59963232714fb02ac2e490ca0f1ee3a = $this->env->getExtension("native_profiler");
        $__internal_6938aa9ec5670e4d6c68894a98af1220e59963232714fb02ac2e490ca0f1ee3a->enter($__internal_6938aa9ec5670e4d6c68894a98af1220e59963232714fb02ac2e490ca0f1ee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6938aa9ec5670e4d6c68894a98af1220e59963232714fb02ac2e490ca0f1ee3a->leave($__internal_6938aa9ec5670e4d6c68894a98af1220e59963232714fb02ac2e490ca0f1ee3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
