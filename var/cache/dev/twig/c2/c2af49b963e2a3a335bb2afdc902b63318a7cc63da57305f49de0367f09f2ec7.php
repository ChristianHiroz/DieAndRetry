<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_0549aebd14d27fd1bac2e7a5e15236e53363fe6a42899fbab951369df4d350ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beb45c21759684a16715c04dd63ad6e251d4e118a42507e432faec9bfc142ff7 = $this->env->getExtension("native_profiler");
        $__internal_beb45c21759684a16715c04dd63ad6e251d4e118a42507e432faec9bfc142ff7->enter($__internal_beb45c21759684a16715c04dd63ad6e251d4e118a42507e432faec9bfc142ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "
        <title>
        ";
        // line 81
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 101
        echo "        </title>
    </head>
    <body ";
        // line 103
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 107
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 188
        echo "
        ";
        // line 189
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 327
        echo "    </div>

    ";
        // line 329
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 330
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 336
            echo "    ";
        }
        // line 337
        echo "
    </body>
</html>
";
        
        $__internal_beb45c21759684a16715c04dd63ad6e251d4e118a42507e432faec9bfc142ff7->leave($__internal_beb45c21759684a16715c04dd63ad6e251d4e118a42507e432faec9bfc142ff7_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_d898b85a4cfd34dfaf94c225887759d2863caebd2eb0cc153400e951f69a7e9d = $this->env->getExtension("native_profiler");
        $__internal_d898b85a4cfd34dfaf94c225887759d2863caebd2eb0cc153400e951f69a7e9d->enter($__internal_d898b85a4cfd34dfaf94c225887759d2863caebd2eb0cc153400e951f69a7e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_d898b85a4cfd34dfaf94c225887759d2863caebd2eb0cc153400e951f69a7e9d->leave($__internal_d898b85a4cfd34dfaf94c225887759d2863caebd2eb0cc153400e951f69a7e9d_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_73d4ce9cb3b19db10ba11b4b380b9b5978b19de9dddd470d9187a333ee3923c8 = $this->env->getExtension("native_profiler");
        $__internal_73d4ce9cb3b19db10ba11b4b380b9b5978b19de9dddd470d9187a333ee3923c8->enter($__internal_73d4ce9cb3b19db10ba11b4b380b9b5978b19de9dddd470d9187a333ee3923c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_73d4ce9cb3b19db10ba11b4b380b9b5978b19de9dddd470d9187a333ee3923c8->leave($__internal_73d4ce9cb3b19db10ba11b4b380b9b5978b19de9dddd470d9187a333ee3923c8_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df0983075980a68f68278b1a0d4d426846ee5de91abad888cedb1e9643c885ef = $this->env->getExtension("native_profiler");
        $__internal_df0983075980a68f68278b1a0d4d426846ee5de91abad888cedb1e9643c885ef->enter($__internal_df0983075980a68f68278b1a0d4d426846ee5de91abad888cedb1e9643c885ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_df0983075980a68f68278b1a0d4d426846ee5de91abad888cedb1e9643c885ef->leave($__internal_df0983075980a68f68278b1a0d4d426846ee5de91abad888cedb1e9643c885ef_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a8b63d32eaa5384b18f075d87118d63f319f958a2de4b0bfb752f63ed34a68f = $this->env->getExtension("native_profiler");
        $__internal_8a8b63d32eaa5384b18f075d87118d63f319f958a2de4b0bfb752f63ed34a68f->enter($__internal_8a8b63d32eaa5384b18f075d87118d63f319f958a2de4b0bfb752f63ed34a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_STICKYFORMS: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                };

                // http://getbootstrap.com/getting-started/#support-ie10-width
                if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                    var msViewportStyle = document.createElement('style');
                    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            </script>

            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 60
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
            ";
        // line 63
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 66
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 68
        echo "
            ";
        // line 70
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 71
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 72
            echo "
                ";
            // line 74
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 75
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 77
            echo "            ";
        }
        // line 78
        echo "        ";
        
        $__internal_8a8b63d32eaa5384b18f075d87118d63f319f958a2de4b0bfb752f63ed34a68f->leave($__internal_8a8b63d32eaa5384b18f075d87118d63f319f958a2de4b0bfb752f63ed34a68f_prof);

    }

    // line 81
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_b3b8e74d8dcca8457f4c8e19a11fc3c657026bec4e673dd82d2f45fef703cb18 = $this->env->getExtension("native_profiler");
        $__internal_b3b8e74d8dcca8457f4c8e19a11fc3c657026bec4e673dd82d2f45fef703cb18->enter($__internal_b3b8e74d8dcca8457f4c8e19a11fc3c657026bec4e673dd82d2f45fef703cb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 84
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 85
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 87
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 88
                echo "                    -
                    ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 90
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 91
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 92
                            echo "                                &gt;
                            ";
                        }
                        // line 94
                        echo "
                            ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 97
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                ";
            }
            // line 99
            echo "            ";
        }
        // line 100
        echo "        ";
        
        $__internal_b3b8e74d8dcca8457f4c8e19a11fc3c657026bec4e673dd82d2f45fef703cb18->leave($__internal_b3b8e74d8dcca8457f4c8e19a11fc3c657026bec4e673dd82d2f45fef703cb18_prof);

    }

    // line 103
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_d94f22d16e3a73a9227dda41f7ed25d55107114783bcfb0f8491c5896115bfdc = $this->env->getExtension("native_profiler");
        $__internal_d94f22d16e3a73a9227dda41f7ed25d55107114783bcfb0f8491c5896115bfdc->enter($__internal_d94f22d16e3a73a9227dda41f7ed25d55107114783bcfb0f8491c5896115bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_d94f22d16e3a73a9227dda41f7ed25d55107114783bcfb0f8491c5896115bfdc->leave($__internal_d94f22d16e3a73a9227dda41f7ed25d55107114783bcfb0f8491c5896115bfdc_prof);

    }

    // line 107
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_fc2fa322289a5187e7f450014c4bedaf4b6ae1173c4ad1ee55b04b511c7605d5 = $this->env->getExtension("native_profiler");
        $__internal_fc2fa322289a5187e7f450014c4bedaf4b6ae1173c4ad1ee55b04b511c7605d5->enter($__internal_fc2fa322289a5187e7f450014c4bedaf4b6ae1173c4ad1ee55b04b511c7605d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 108
        echo "            <header class=\"main-header\">
                ";
        // line 109
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 116
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 128
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 186
        echo "            </header>
        ";
        
        $__internal_fc2fa322289a5187e7f450014c4bedaf4b6ae1173c4ad1ee55b04b511c7605d5->leave($__internal_fc2fa322289a5187e7f450014c4bedaf4b6ae1173c4ad1ee55b04b511c7605d5_prof);

    }

    // line 109
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_256b68ff800931d5dcc5c00535fa5d037fc4818bb1b822743a334a4a6af59161 = $this->env->getExtension("native_profiler");
        $__internal_256b68ff800931d5dcc5c00535fa5d037fc4818bb1b822743a334a4a6af59161->enter($__internal_256b68ff800931d5dcc5c00535fa5d037fc4818bb1b822743a334a4a6af59161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 110
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_256b68ff800931d5dcc5c00535fa5d037fc4818bb1b822743a334a4a6af59161->leave($__internal_256b68ff800931d5dcc5c00535fa5d037fc4818bb1b822743a334a4a6af59161_prof);

    }

    // line 116
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3fcaebc32b611630579883035b868676978efdff2df5a4507ddc5857ad0178af = $this->env->getExtension("native_profiler");
        $__internal_3fcaebc32b611630579883035b868676978efdff2df5a4507ddc5857ad0178af->enter($__internal_3fcaebc32b611630579883035b868676978efdff2df5a4507ddc5857ad0178af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 117
        echo "                    ";
        ob_start();
        // line 118
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 119
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 120
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 122
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 123
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 125
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 127
        echo "                ";
        
        $__internal_3fcaebc32b611630579883035b868676978efdff2df5a4507ddc5857ad0178af->leave($__internal_3fcaebc32b611630579883035b868676978efdff2df5a4507ddc5857ad0178af_prof);

    }

    // line 128
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_bbf689a45e551ceb0c24c82b1fb0061e348d48ada855e4f9520cb010cf8de5bc = $this->env->getExtension("native_profiler");
        $__internal_bbf689a45e551ceb0c24c82b1fb0061e348d48ada855e4f9520cb010cf8de5bc->enter($__internal_bbf689a45e551ceb0c24c82b1fb0061e348d48ada855e4f9520cb010cf8de5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 129
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 135
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 162
        echo "                        </div>

                        ";
        // line 164
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 184
        echo "                    </nav>
                ";
        
        $__internal_bbf689a45e551ceb0c24c82b1fb0061e348d48ada855e4f9520cb010cf8de5bc->leave($__internal_bbf689a45e551ceb0c24c82b1fb0061e348d48ada855e4f9520cb010cf8de5bc_prof);

    }

    // line 135
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_5e056a06b34abb80734dde1d375200b9f7e301e24e8422e2a96e18efd6f6ab95 = $this->env->getExtension("native_profiler");
        $__internal_5e056a06b34abb80734dde1d375200b9f7e301e24e8422e2a96e18efd6f6ab95->enter($__internal_5e056a06b34abb80734dde1d375200b9f7e301e24e8422e2a96e18efd6f6ab95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 136
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 137
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 138
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 139
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 140
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 141
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 142
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 143
                            echo "                                                            <li>
                                                                ";
                            // line 144
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 145
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 147
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 149
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 151
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 153
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                                                ";
                }
                // line 155
                echo "                                            ";
            } else {
                // line 156
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 158
            echo "                                        </ol>
                                    ";
        }
        // line 160
        echo "                                </div>
                            ";
        
        $__internal_5e056a06b34abb80734dde1d375200b9f7e301e24e8422e2a96e18efd6f6ab95->leave($__internal_5e056a06b34abb80734dde1d375200b9f7e301e24e8422e2a96e18efd6f6ab95_prof);

    }

    // line 164
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_eecabfe6eb0c15233b17d3590703d2dc39fc8d4dfe7acf9ab7d8cd7ecaa849de = $this->env->getExtension("native_profiler");
        $__internal_eecabfe6eb0c15233b17d3590703d2dc39fc8d4dfe7acf9ab7d8cd7ecaa849de->enter($__internal_eecabfe6eb0c15233b17d3590703d2dc39fc8d4dfe7acf9ab7d8cd7ecaa849de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 165
        echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        ";
        // line 171
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 171)->display($context);
        // line 172
        echo "                                    </li>
                                    <li class=\"dropdown user-menu\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-user\">
                                            ";
        // line 178
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 178)->display($context);
        // line 179
        echo "                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        ";
        
        $__internal_eecabfe6eb0c15233b17d3590703d2dc39fc8d4dfe7acf9ab7d8cd7ecaa849de->leave($__internal_eecabfe6eb0c15233b17d3590703d2dc39fc8d4dfe7acf9ab7d8cd7ecaa849de_prof);

    }

    // line 189
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_901156f53fe3ecd09076093147b9ea68e803f294fecf580bf326b94934258154 = $this->env->getExtension("native_profiler");
        $__internal_901156f53fe3ecd09076093147b9ea68e803f294fecf580bf326b94934258154->enter($__internal_901156f53fe3ecd09076093147b9ea68e803f294fecf580bf326b94934258154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 190
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 226
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 228
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 325
        echo "            </div>
        ";
        
        $__internal_901156f53fe3ecd09076093147b9ea68e803f294fecf580bf326b94934258154->leave($__internal_901156f53fe3ecd09076093147b9ea68e803f294fecf580bf326b94934258154_prof);

    }

    // line 190
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e7e962c8e42c79c074d95e176f9ad40e4699a561ed716aafaab116f7271fb698 = $this->env->getExtension("native_profiler");
        $__internal_e7e962c8e42c79c074d95e176f9ad40e4699a561ed716aafaab116f7271fb698->enter($__internal_e7e962c8e42c79c074d95e176f9ad40e4699a561ed716aafaab116f7271fb698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 191
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 193
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 223
        echo "                    </section>
                </aside>
            ";
        
        $__internal_e7e962c8e42c79c074d95e176f9ad40e4699a561ed716aafaab116f7271fb698->leave($__internal_e7e962c8e42c79c074d95e176f9ad40e4699a561ed716aafaab116f7271fb698_prof);

    }

    // line 193
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_6df73ad79a766db2f04464ed69cd98094539d1755f64a2a165cf6c3c2dc5aabc = $this->env->getExtension("native_profiler");
        $__internal_6df73ad79a766db2f04464ed69cd98094539d1755f64a2a165cf6c3c2dc5aabc->enter($__internal_6df73ad79a766db2f04464ed69cd98094539d1755f64a2a165cf6c3c2dc5aabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 194
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 208
        echo "
                            ";
        // line 209
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 210
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 215
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 222
        echo "                        ";
        
        $__internal_6df73ad79a766db2f04464ed69cd98094539d1755f64a2a165cf6c3c2dc5aabc->leave($__internal_6df73ad79a766db2f04464ed69cd98094539d1755f64a2a165cf6c3c2dc5aabc_prof);

    }

    // line 194
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_4d836d74aa59382e7068c929149691d2f2cc97cbcfc18514baed12a14963b542 = $this->env->getExtension("native_profiler");
        $__internal_4d836d74aa59382e7068c929149691d2f2cc97cbcfc18514baed12a14963b542->enter($__internal_4d836d74aa59382e7068c929149691d2f2cc97cbcfc18514baed12a14963b542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 195
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 196
            echo "                                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 207
        echo "                            ";
        
        $__internal_4d836d74aa59382e7068c929149691d2f2cc97cbcfc18514baed12a14963b542->leave($__internal_4d836d74aa59382e7068c929149691d2f2cc97cbcfc18514baed12a14963b542_prof);

    }

    // line 209
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_d0eaa3d681b7032735e966df43b8e60df38c3971ba5b7a3d6bb575776ea8b981 = $this->env->getExtension("native_profiler");
        $__internal_d0eaa3d681b7032735e966df43b8e60df38c3971ba5b7a3d6bb575776ea8b981->enter($__internal_d0eaa3d681b7032735e966df43b8e60df38c3971ba5b7a3d6bb575776ea8b981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_d0eaa3d681b7032735e966df43b8e60df38c3971ba5b7a3d6bb575776ea8b981->leave($__internal_d0eaa3d681b7032735e966df43b8e60df38c3971ba5b7a3d6bb575776ea8b981_prof);

    }

    // line 210
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_117eeb206476e120f29d1d558b134febfbefe6df61511680dff2d2327560bb3a = $this->env->getExtension("native_profiler");
        $__internal_117eeb206476e120f29d1d558b134febfbefe6df61511680dff2d2327560bb3a->enter($__internal_117eeb206476e120f29d1d558b134febfbefe6df61511680dff2d2327560bb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 211
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 212
            echo "                                    ";
            echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                                ";
        }
        // line 214
        echo "                            ";
        
        $__internal_117eeb206476e120f29d1d558b134febfbefe6df61511680dff2d2327560bb3a->leave($__internal_117eeb206476e120f29d1d558b134febfbefe6df61511680dff2d2327560bb3a_prof);

    }

    // line 215
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_360631d73e47c32bfedb2eeb5a701d4d7d1bc927a5794fce3156f05a2fdcd0bf = $this->env->getExtension("native_profiler");
        $__internal_360631d73e47c32bfedb2eeb5a701d4d7d1bc927a5794fce3156f05a2fdcd0bf->enter($__internal_360631d73e47c32bfedb2eeb5a701d4d7d1bc927a5794fce3156f05a2fdcd0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 216
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 217
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 220
        echo "                                </p>
                            ";
        
        $__internal_360631d73e47c32bfedb2eeb5a701d4d7d1bc927a5794fce3156f05a2fdcd0bf->leave($__internal_360631d73e47c32bfedb2eeb5a701d4d7d1bc927a5794fce3156f05a2fdcd0bf_prof);

    }

    // line 217
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_3c594c2df2165d4a44428d55cb7070bd41a532dd5ee525e6a2375234c9657f4b = $this->env->getExtension("native_profiler");
        $__internal_3c594c2df2165d4a44428d55cb7070bd41a532dd5ee525e6a2375234c9657f4b->enter($__internal_3c594c2df2165d4a44428d55cb7070bd41a532dd5ee525e6a2375234c9657f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 218
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_3c594c2df2165d4a44428d55cb7070bd41a532dd5ee525e6a2375234c9657f4b->leave($__internal_3c594c2df2165d4a44428d55cb7070bd41a532dd5ee525e6a2375234c9657f4b_prof);

    }

    // line 228
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5422fb52bbab6c2bda47fa9dc6c989aab2f1372b4574577020274dd6343fd108 = $this->env->getExtension("native_profiler");
        $__internal_5422fb52bbab6c2bda47fa9dc6c989aab2f1372b4574577020274dd6343fd108->enter($__internal_5422fb52bbab6c2bda47fa9dc6c989aab2f1372b4574577020274dd6343fd108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 229
        echo "                    <section class=\"content-header\">

                        ";
        // line 231
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 285
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 288
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 323
        echo "                    </section>
                ";
        
        $__internal_5422fb52bbab6c2bda47fa9dc6c989aab2f1372b4574577020274dd6343fd108->leave($__internal_5422fb52bbab6c2bda47fa9dc6c989aab2f1372b4574577020274dd6343fd108_prof);

    }

    // line 231
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_6d73587e8069a72c7be5f8e8eb0b6679f0bde0cb1b6d9c04622eb0d974eacdc5 = $this->env->getExtension("native_profiler");
        $__internal_6d73587e8069a72c7be5f8e8eb0b6679f0bde0cb1b6d9c04622eb0d974eacdc5->enter($__internal_6d73587e8069a72c7be5f8e8eb0b6679f0bde0cb1b6d9c04622eb0d974eacdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 232
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 284
        echo "                        ";
        
        $__internal_6d73587e8069a72c7be5f8e8eb0b6679f0bde0cb1b6d9c04622eb0d974eacdc5->leave($__internal_6d73587e8069a72c7be5f8e8eb0b6679f0bde0cb1b6d9c04622eb0d974eacdc5_prof);

    }

    // line 232
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_196ac6c6d5b1656658bf94d8be3fb6cf58106ba8ad1f4a19139605508b17698b = $this->env->getExtension("native_profiler");
        $__internal_196ac6c6d5b1656658bf94d8be3fb6cf58106ba8ad1f4a19139605508b17698b->enter($__internal_196ac6c6d5b1656658bf94d8be3fb6cf58106ba8ad1f4a19139605508b17698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 233
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 234
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 236
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 243
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 246
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 247
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 249
            echo "                                                </div>

                                                ";
            // line 251
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 252
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 253
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 254
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 256
                echo "                                                    </div>
                                                ";
            }
            // line 258
            echo "
                                                ";
            // line 259
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 275
            echo "
                                                ";
            // line 276
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 277
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 279
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 283
        echo "                            ";
        
        $__internal_196ac6c6d5b1656658bf94d8be3fb6cf58106ba8ad1f4a19139605508b17698b->leave($__internal_196ac6c6d5b1656658bf94d8be3fb6cf58106ba8ad1f4a19139605508b17698b_prof);

    }

    // line 236
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_893ab270afacb0673a00e022871610caaa2e83fc97194f0a497d470da6296d82 = $this->env->getExtension("native_profiler");
        $__internal_893ab270afacb0673a00e022871610caaa2e83fc97194f0a497d470da6296d82->enter($__internal_893ab270afacb0673a00e022871610caaa2e83fc97194f0a497d470da6296d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 237
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 238
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 239
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 242
        echo "                                            ";
        
        $__internal_893ab270afacb0673a00e022871610caaa2e83fc97194f0a497d470da6296d82->leave($__internal_893ab270afacb0673a00e022871610caaa2e83fc97194f0a497d470da6296d82_prof);

    }

    // line 259
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_d26efdcb827734e78adf92adcc0bddfce5994ce74583070bcfcc0e6b3520eb2f = $this->env->getExtension("native_profiler");
        $__internal_d26efdcb827734e78adf92adcc0bddfce5994ce74583070bcfcc0e6b3520eb2f->enter($__internal_d26efdcb827734e78adf92adcc0bddfce5994ce74583070bcfcc0e6b3520eb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 260
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 261
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 262
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 263
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 266
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 270
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 272
            echo "                                                        </ul>
                                                    ";
        }
        // line 274
        echo "                                                ";
        
        $__internal_d26efdcb827734e78adf92adcc0bddfce5994ce74583070bcfcc0e6b3520eb2f->leave($__internal_d26efdcb827734e78adf92adcc0bddfce5994ce74583070bcfcc0e6b3520eb2f_prof);

    }

    // line 288
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_482d3873a992dbb8ee1ad35a8dba618fc30f07b9eb6da7e0ddc8b02a4a6df49c = $this->env->getExtension("native_profiler");
        $__internal_482d3873a992dbb8ee1ad35a8dba618fc30f07b9eb6da7e0ddc8b02a4a6df49c->enter($__internal_482d3873a992dbb8ee1ad35a8dba618fc30f07b9eb6da7e0ddc8b02a4a6df49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 289
        echo "
                            ";
        // line 290
        $this->displayBlock('notice', $context, $blocks);
        // line 293
        echo "
                            ";
        // line 294
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 295
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 297
        echo "
                            ";
        // line 298
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 299
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 301
        echo "
                            ";
        // line 302
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 303
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 305
        echo "
                            ";
        // line 306
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 307
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 309
        echo "
                            ";
        // line 310
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 311
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 312
                echo "                                    <div class=\"row\">
                                        ";
                // line 313
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 316
            echo "
                                <div class=\"row\">
                                    ";
            // line 318
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 322
        echo "                        ";
        
        $__internal_482d3873a992dbb8ee1ad35a8dba618fc30f07b9eb6da7e0ddc8b02a4a6df49c->leave($__internal_482d3873a992dbb8ee1ad35a8dba618fc30f07b9eb6da7e0ddc8b02a4a6df49c_prof);

    }

    // line 290
    public function block_notice($context, array $blocks = array())
    {
        $__internal_959e362ca80f275ae86a08bf68fc07dd2d6fc8991df0d38d0cf33a66fd32591b = $this->env->getExtension("native_profiler");
        $__internal_959e362ca80f275ae86a08bf68fc07dd2d6fc8991df0d38d0cf33a66fd32591b->enter($__internal_959e362ca80f275ae86a08bf68fc07dd2d6fc8991df0d38d0cf33a66fd32591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 291
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 291)->display($context);
        // line 292
        echo "                            ";
        
        $__internal_959e362ca80f275ae86a08bf68fc07dd2d6fc8991df0d38d0cf33a66fd32591b->leave($__internal_959e362ca80f275ae86a08bf68fc07dd2d6fc8991df0d38d0cf33a66fd32591b_prof);

    }

    // line 330
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_7b04b2d40ce2b399c9973dd102e388563c2729810cdcf14d412224ce189c646b = $this->env->getExtension("native_profiler");
        $__internal_7b04b2d40ce2b399c9973dd102e388563c2729810cdcf14d412224ce189c646b->enter($__internal_7b04b2d40ce2b399c9973dd102e388563c2729810cdcf14d412224ce189c646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 331
        echo "            ";
        // line 332
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_7b04b2d40ce2b399c9973dd102e388563c2729810cdcf14d412224ce189c646b->leave($__internal_7b04b2d40ce2b399c9973dd102e388563c2729810cdcf14d412224ce189c646b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1171 => 332,  1169 => 331,  1163 => 330,  1156 => 292,  1153 => 291,  1147 => 290,  1140 => 322,  1133 => 318,  1129 => 316,  1123 => 313,  1120 => 312,  1117 => 311,  1115 => 310,  1112 => 309,  1106 => 307,  1104 => 306,  1101 => 305,  1095 => 303,  1093 => 302,  1090 => 301,  1084 => 299,  1082 => 298,  1079 => 297,  1073 => 295,  1071 => 294,  1068 => 293,  1066 => 290,  1063 => 289,  1057 => 288,  1050 => 274,  1046 => 272,  1040 => 270,  1033 => 266,  1028 => 264,  1025 => 263,  1023 => 262,  1020 => 261,  1017 => 260,  1011 => 259,  1004 => 242,  998 => 239,  995 => 238,  992 => 237,  986 => 236,  979 => 283,  973 => 279,  967 => 277,  965 => 276,  962 => 275,  960 => 259,  957 => 258,  953 => 256,  938 => 254,  934 => 253,  931 => 252,  929 => 251,  925 => 249,  919 => 247,  917 => 246,  912 => 243,  910 => 236,  906 => 234,  903 => 233,  897 => 232,  890 => 284,  887 => 232,  881 => 231,  873 => 323,  871 => 288,  866 => 285,  864 => 231,  860 => 229,  854 => 228,  846 => 218,  840 => 217,  832 => 220,  830 => 217,  827 => 216,  821 => 215,  814 => 214,  808 => 212,  805 => 211,  799 => 210,  787 => 209,  780 => 207,  766 => 198,  760 => 196,  757 => 195,  751 => 194,  744 => 222,  741 => 215,  738 => 210,  736 => 209,  733 => 208,  730 => 194,  724 => 193,  715 => 223,  713 => 193,  709 => 191,  703 => 190,  695 => 325,  693 => 228,  689 => 226,  686 => 190,  680 => 189,  669 => 179,  667 => 178,  659 => 172,  657 => 171,  649 => 165,  643 => 164,  635 => 160,  631 => 158,  625 => 156,  622 => 155,  619 => 154,  605 => 153,  599 => 151,  595 => 149,  589 => 147,  581 => 145,  579 => 144,  576 => 143,  573 => 142,  555 => 141,  552 => 140,  550 => 139,  547 => 138,  545 => 137,  542 => 136,  536 => 135,  528 => 184,  526 => 164,  522 => 162,  520 => 135,  512 => 129,  506 => 128,  499 => 127,  495 => 125,  489 => 123,  486 => 122,  478 => 120,  476 => 119,  471 => 118,  468 => 117,  462 => 116,  451 => 112,  447 => 110,  441 => 109,  433 => 186,  430 => 128,  427 => 116,  425 => 109,  422 => 108,  416 => 107,  404 => 103,  397 => 100,  394 => 99,  391 => 98,  377 => 97,  372 => 95,  369 => 94,  365 => 92,  362 => 91,  359 => 90,  342 => 89,  339 => 88,  336 => 87,  330 => 85,  328 => 84,  322 => 82,  316 => 81,  309 => 78,  306 => 77,  300 => 75,  297 => 74,  294 => 72,  289 => 71,  286 => 70,  283 => 68,  277 => 66,  274 => 65,  272 => 64,  270 => 63,  267 => 62,  258 => 60,  254 => 59,  240 => 48,  236 => 46,  230 => 45,  222 => 44,  214 => 43,  206 => 42,  202 => 40,  196 => 39,  189 => 37,  180 => 35,  175 => 34,  169 => 33,  159 => 28,  153 => 27,  141 => 25,  131 => 337,  128 => 336,  125 => 330,  123 => 329,  119 => 327,  117 => 189,  114 => 188,  112 => 107,  105 => 103,  101 => 101,  99 => 81,  95 => 79,  93 => 39,  90 => 38,  88 => 33,  85 => 32,  83 => 27,  78 => 25,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% set _preview              = block('preview') %}*/
/* {% set _form                 = block('form') %}*/
/* {% set _show                 = block('show') %}*/
/* {% set _list_table           = block('list_table') %}*/
/* {% set _list_filters         = block('list_filters') %}*/
/* {% set _tab_menu             = block('tab_menu') %}*/
/* {% set _content              = block('content') %}*/
/* {% set _title                = block('title') %}*/
/* {% set _breadcrumb           = block('breadcrumb') %}*/
/* {% set _actions              = block('actions') %}*/
/* {% set _navbar_title         = block('navbar_title') %}*/
/* {% set _list_filters_actions = block('list_filters_actions') %}*/
/* */
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/*             {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}*/
/*                     <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},*/
/*                     USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                 };*/
/* */
/*                 // http://getbootstrap.com/getting-started/#support-ie10-width*/
/*                 if (navigator.userAgent.match(/IEMobile\/10\.0/)) {*/
/*                     var msViewportStyle = document.createElement('style');*/
/*                     msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));*/
/*                     document.querySelector('head').appendChild(msViewportStyle);*/
/*                 }*/
/*             </script>*/
/* */
/*             {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}*/
/*                 <script src="{{ asset(javascript) }}"></script>*/
/*             {% endfor %}*/
/* */
/*             {% set locale = app.request.locale %}*/
/*             {# localize moment #}*/
/*             {% if locale[:2] != 'en' %}*/
/*                 <script src="{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*             {% endif %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if sonata_admin.adminPool.getOption('use_select2') %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/* */
/*     <div class="wrapper">*/
/* */
/*         {% block sonata_header %}*/
/*             <header class="main-header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% spaceless %}*/
/*                         <a class="logo" href="{{ path('sonata_admin_dashboard') }}">*/
/*                             {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                                 <img src="{{ asset(sonata_admin.adminPool.titlelogo) }}" alt="{{ sonata_admin.adminPool.title }}">*/
/*                             {% endif %}*/
/*                             {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                                 <span>{{ sonata_admin.adminPool.title }}</span>*/
/*                             {% endif %}*/
/*                         </a>*/
/*                     {% endspaceless %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     <nav class="navbar navbar-static-top" role="navigation">*/
/*                         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                         </a>*/
/* */
/*                         <div class="navbar-left">*/
/*                             {% block sonata_breadcrumb %}*/
/*                                 <div class="hidden-xs">*/
/*                                     {% if _breadcrumb is not empty or action is defined %}*/
/*                                         <ol class="nav navbar-top-links breadcrumb">*/
/*                                             {% if _breadcrumb is empty %}*/
/*                                                 {% if action is defined %}*/
/*                                                     {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}*/
/*                                                         {% if not loop.last  %}*/
/*                                                             <li>*/
/*                                                                 {% if menu.uri is not empty %}*/
/*                                                                     <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                 {% else %}*/
/*                                                                     {{ menu.label }}*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {{ _breadcrumb|raw }}*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endblock sonata_breadcrumb %}*/
/*                         </div>*/
/* */
/*                         {% block sonata_top_nav_menu %}*/
/*                             <div class="navbar-custom-menu">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li class="dropdown">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                             <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                         </a>*/
/*                                         {% include sonata_admin.adminPool.getTemplate('add_block') %}*/
/*                                     </li>*/
/*                                     <li class="dropdown user-menu">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                             <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu dropdown-user">*/
/*                                             {% include sonata_admin.adminPool.getTemplate('user_block') %}*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </nav>*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             {% block sonata_left_side %}*/
/*                 <aside class="main-sidebar">*/
/*                     <section class="sidebar">*/
/*                         {% block sonata_side_nav %}*/
/*                             {% block sonata_sidebar_search %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     <form action="{{ path('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                         <div class="input-group custom-search-form">*/
/*                                             <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-flat" type="submit">*/
/*                                                         <i class="fa fa-search"></i>*/
/*                                                     </button>*/
/*                                                 </span>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_sidebar_search %}*/
/* */
/*                             {% block side_bar_before_nav %} {% endblock %}*/
/*                             {% block side_bar_nav %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}*/
/*                                 {% endif %}*/
/*                             {% endblock side_bar_nav %}*/
/*                             {% block side_bar_after_nav %}*/
/*                                 <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px">*/
/*                                     {% block side_bar_after_nav_content %}*/
/*                                         <a href="https://sonata-project.org" rel="noreferrer" target="_blank">sonata project</a>*/
/*                                     {% endblock %}*/
/*                                 </p>*/
/*                             {% endblock %}*/
/*                         {% endblock sonata_side_nav %}*/
/*                     </section>*/
/*                 </aside>*/
/*             {% endblock sonata_left_side %}*/
/* */
/*             <div class="content-wrapper">*/
/*                 {% block sonata_page_content %}*/
/*                     <section class="content-header">*/
/* */
/*                         {% block sonata_page_content_header %}*/
/*                             {% block sonata_page_content_nav %}*/
/*                                 {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}*/
/*                                     <nav class="navbar navbar-default" role="navigation">*/
/*                                         <div class="container-fluid">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <a class="navbar-brand" href="#">{{ _navbar_title|raw }}</a>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/* */
/*                                             <div class="navbar-collapse">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}*/
/*                                                     <div class="nav navbar-right btn-group">*/
/*                                                         {% for mode, settings in admin.listModes %}*/
/*                                                             <a href="{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}" class="btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}"><i class="{{ settings.class }}"></i></a>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {% block sonata_admin_content_actions_wrappers %}*/
/*                                                     {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                         {% if _actions|split('</a>')|length > 2 %}*/
/*                                                             <li class="dropdown sonata-actions">*/
/*                                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                                 <ul class="dropdown-menu" role="menu">*/
/*                                                                     {{ _actions|raw }}*/
/*                                                                 </ul>*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             {{ _actions|raw }}*/
/*                                                         {% endif %}*/
/*                                                         </ul>*/
/*                                                     {% endif %}*/
/*                                                 {% endblock sonata_admin_content_actions_wrappers %}*/
/* */
/*                                                 {% if _list_filters_actions is not empty %}*/
/*                                                     {{ _list_filters_actions|raw }}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </nav>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_page_content_nav %}*/
/*                         {% endblock sonata_page_content_header %}*/
/*                     </section>*/
/* */
/*                     <section class="content">*/
/*                         {% block sonata_admin_content %}*/
/* */
/*                             {% block notice %}*/
/*                                 {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                             {% endblock notice %}*/
/* */
/*                             {% if _preview is not empty %}*/
/*                                 <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _content is not empty %}*/
/*                                 <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _show is not empty %}*/
/*                                 <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _form is not empty %}*/
/*                                 <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                 {% if _list_filters|trim %}*/
/*                                     <div class="row">*/
/*                                         {{ _list_filters|raw }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                                 <div class="row">*/
/*                                     {{ _list_table|raw }}*/
/*                                 </div>*/
/* */
/*                             {% endif %}*/
/*                         {% endblock sonata_admin_content %}*/
/*                     </section>*/
/*                 {% endblock sonata_page_content %}*/
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </div>*/
/* */
/*     {% if sonata_admin.adminPool.getOption('use_bootlint') %}*/
/*         {% block bootlint %}*/
/*             {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}*/
/*             <script type="text/javascript">*/
/*                 javascript:(function(){var s=document.createElement("script");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src="https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js";document.body.appendChild(s)})();*/
/*             </script>*/
/*         {% endblock %}*/
/*     {% endif %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
