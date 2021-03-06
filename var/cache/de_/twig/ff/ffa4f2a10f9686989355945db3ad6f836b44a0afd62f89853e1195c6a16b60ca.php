<?php

/* ComurImageBundle:Form:croppable_image_modal.html.twig */
class __TwigTemplate_d132e7806d9a577daa3a9b2013102f2ea439075e743a74f79182c12b176e7c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comur_image_scripts' => array($this, 'block_comur_image_scripts'),
            'comur_image_stylesheets' => array($this, 'block_comur_image_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fddeb1033324f85f0553ef6991da2326838a60bc5064bdb5e2d8272621c1667 = $this->env->getExtension("native_profiler");
        $__internal_5fddeb1033324f85f0553ef6991da2326838a60bc5064bdb5e2d8272621c1667->enter($__internal_5fddeb1033324f85f0553ef6991da2326838a60bc5064bdb5e2d8272621c1667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComurImageBundle:Form:croppable_image_modal.html.twig"));

        // line 1
        $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] = (isset($context["comur_translation_domain"]) ? $context["comur_translation_domain"] : $this->getContext($context, "comur_translation_domain"));
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('comur_image_scripts', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('comur_image_stylesheets', $context, $blocks);
        // line 34
        echo "
<div id=\"image_upload_modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3>";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Insert Image", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 40
        echo "</h3>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-pills\" id=\"image_upload_tabs\">
                    <li class=\"active\">
                        <a href=\"#upload-image\" data-toggle=\"tab\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Upload Image", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 45
        echo "</a>
                    </li>
                    <li><a href=\"#select-existing\" data-toggle=\"tab\">";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Select Existing", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 47
        echo "</a></li>
                    <li><a href=\"#crop-and-use\" data-toggle=\"tab\">";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crop and Use", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 48
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <!-- UPLOAD IMAGE -->
                    <div class=\"tab-pane active\" id=\"upload-image\">
                        <div class=\"field-error clearfix hidden\">
                            <div id=\"image_upload_widget_error\" class=\"alert alert-danger span6\">
                            </div>
                        </div>
                        <div id=\"image_upload_drop_zone\" class=\"image_upload_drop_zone\">
                            <p>";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Drop your file here", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 58
        echo "</p>
                            <p>";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("or", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 59
        echo "</p>
                        </div>
                        <div id=\"image_upload_file_container\">
                            <span class=\"btn btn-info fileinput-button\">
                                <i class=\"icon-white icon-download-alt\"></i>
                                <span> ";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Select a file...", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 64
        echo "</span>
                                <input id=\"image_upload_file\" type=\"file\" name=\"image_upload_file\">
                            </span>
                        </div>
                        <div id=\"image_file_upload_progress\" class=\"progress\">
                            <div class=\"progress-bar progress-bar-success\"></div>
                        </div>
                    </div>
                    <!-- IMAGE LIB -->
                    <div class=\"tab-pane hidden\" id=\"select-existing\">
                        <div class=\"field-error clearfix hidden\">
                            <div id=\"image_select_widget_error\" class=\"alert alert-danger span6\">
                            </div>
                        </div>
                        <div id=\"existing-images\"></div>
                        <input type=\"hidden\" id=\"selected_image\"/>
                    </div>
                    <!-- CROP IMAGE -->
                    <div class=\"tab-pane\" id=\"crop-and-use\">
                        <p>";
        // line 83
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please adjust selection to your image", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 83
        echo "</p>
                        <div class=\"image_preview\" id=\"image_preview\" style=\"z-index: 1050\">
                            <p>";
        // line 85
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please select or upload an image", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 85
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Close", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 90
        echo "</button>
                    <span class=\"btn btn-success hidden\" id=\"image_crop_go_now\">
                        <i class=\"icon-white icon icon-fullscreen\"></i>
                        ";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crop & Use !", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 94
        echo "                    </span>
                    <span class=\"btn btn-success hidden\" id=\"image_crop_cancel\">
                        <i class=\"icon-white icon icon-fullscreen\"></i>
                        ";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(),         // line 1
(isset($context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"]) ? $context["__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b"] : $this->getContext($context, "__internal_3a16bf610a20ee6cecda611b3b17be0d6dce2b3c6d3101f92856c028a9684a8b")));
        // line 98
        echo "                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    \$('#image_upload_modal').on({
        'hidden.bs.modal': destroyImageManager
    });
</script>
";
        
        $__internal_5fddeb1033324f85f0553ef6991da2326838a60bc5064bdb5e2d8272621c1667->leave($__internal_5fddeb1033324f85f0553ef6991da2326838a60bc5064bdb5e2d8272621c1667_prof);

    }

    // line 4
    public function block_comur_image_scripts($context, array $blocks = array())
    {
        $__internal_dadd82ee06c8aa988a9436b4b357ecbff4f9bf094c069b5b7b372a4f52d56a61 = $this->env->getExtension("native_profiler");
        $__internal_dadd82ee06c8aa988a9436b4b357ecbff4f9bf094c069b5b7b372a4f52d56a61->enter($__internal_dadd82ee06c8aa988a9436b4b357ecbff4f9bf094c069b5b7b372a4f52d56a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comur_image_scripts"));

        // line 5
        if (( !array_key_exists("include_jquery", $context) || (isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery")))) {
            // line 6
            echo "    <!-- The jQuery script, can be omitted if jQuery is already included -->
    <script src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/jquery.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 9
        echo "<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/jquery.color.js"), "html", null, true);
        echo "\"></script>
";
        // line 16
        if (( !array_key_exists("include_holder", $context) || (isset($context["include_holder"]) ? $context["include_holder"] : $this->getContext($context, "include_holder")))) {
            // line 17
            echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/holder/2.5.2/holder.min.js\"></script>
";
        }
        // line 19
        if (( !array_key_exists("include_bootstrap", $context) || (isset($context["include_bootstrap"]) ? $context["include_bootstrap"] : $this->getContext($context, "include_bootstrap")))) {
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 22
        echo "<!-- ComurImageBundle script. Do not remove this -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/js/comur.imagelibrary.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dadd82ee06c8aa988a9436b4b357ecbff4f9bf094c069b5b7b372a4f52d56a61->leave($__internal_dadd82ee06c8aa988a9436b4b357ecbff4f9bf094c069b5b7b372a4f52d56a61_prof);

    }

    // line 26
    public function block_comur_image_stylesheets($context, array $blocks = array())
    {
        $__internal_1e60bda87a87dad6fcba9c05aecc621d14ca0b71492bd260d8b50805c8637c85 = $this->env->getExtension("native_profiler");
        $__internal_1e60bda87a87dad6fcba9c05aecc621d14ca0b71492bd260d8b50805c8637c85->enter($__internal_1e60bda87a87dad6fcba9c05aecc621d14ca0b71492bd260d8b50805c8637c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comur_image_stylesheets"));

        // line 27
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        // line 28
        if (( !array_key_exists("include_bootstrap", $context) || (isset($context["include_bootstrap"]) ? $context["include_bootstrap"] : $this->getContext($context, "include_bootstrap")))) {
            // line 29
            echo "    <!-- The bootstrap stylesheet, can be omitted if already inclided -->
    <link rel=\"stylesheet\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/css/bootstrap.min.css"), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/comurimage/css/comur.image_bundle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_1e60bda87a87dad6fcba9c05aecc621d14ca0b71492bd260d8b50805c8637c85->leave($__internal_1e60bda87a87dad6fcba9c05aecc621d14ca0b71492bd260d8b50805c8637c85_prof);

    }

    public function getTemplateName()
    {
        return "ComurImageBundle:Form:croppable_image_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 32,  258 => 30,  255 => 29,  253 => 28,  248 => 27,  242 => 26,  233 => 23,  230 => 22,  224 => 20,  222 => 19,  218 => 17,  216 => 16,  212 => 15,  208 => 14,  204 => 13,  200 => 12,  195 => 10,  192 => 9,  187 => 7,  184 => 6,  182 => 5,  176 => 4,  158 => 98,  156 => 1,  155 => 97,  150 => 94,  148 => 1,  147 => 93,  142 => 90,  140 => 1,  139 => 90,  132 => 85,  130 => 1,  129 => 85,  125 => 83,  123 => 1,  122 => 83,  101 => 64,  99 => 1,  98 => 64,  91 => 59,  89 => 1,  88 => 59,  85 => 58,  83 => 1,  82 => 58,  70 => 48,  68 => 1,  67 => 48,  64 => 47,  62 => 1,  61 => 47,  57 => 45,  55 => 1,  54 => 45,  47 => 40,  45 => 1,  44 => 40,  36 => 34,  34 => 26,  31 => 25,  29 => 4,  26 => 3,  24 => 1,);
    }
}
/* {% trans_default_domain comur_translation_domain %}*/
/* {# trans_default_domain 'ComurImageBundle' #}*/
/* */
/* {% block comur_image_scripts %}*/
/* {% if include_jquery is not defined or include_jquery %}*/
/*     <!-- The jQuery script, can be omitted if jQuery is already included -->*/
/*     <script src="{{ asset('bundles/comurimage/js/jquery.js') }}"></script>*/
/* {% endif %}*/
/* <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->*/
/* <script src="{{ asset('bundles/comurimage/js/jquery.ui.widget.js') }}"></script>*/
/* <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->*/
/* <script src="{{ asset('bundles/comurimage/js/jquery.iframe-transport.js') }}"></script>*/
/* <script src="{{ asset('bundles/comurimage/js/jquery.fileupload.js') }}"></script>*/
/* <script src="{{ asset('bundles/comurimage/js/jquery.Jcrop.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/comurimage/js/jquery.color.js') }}"></script>*/
/* {% if include_holder is not defined or include_holder %}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.5.2/holder.min.js"></script>*/
/* {% endif %}*/
/* {% if include_bootstrap is not defined or include_bootstrap %}*/
/*     <script src="{{ asset('bundles/comurimage/js/bootstrap.min.js') }}"></script>*/
/* {% endif %}*/
/* <!-- ComurImageBundle script. Do not remove this -->*/
/* <script src="{{ asset('bundles/comurimage/js/comur.imagelibrary.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block comur_image_stylesheets %}*/
/* <link rel="stylesheet" href="{{ asset('bundles/comurimage/css/jquery.Jcrop.min.css') }}" type="text/css" />*/
/* {% if include_bootstrap is not defined or include_bootstrap %}*/
/*     <!-- The bootstrap stylesheet, can be omitted if already inclided -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/comurimage/css/bootstrap.min.css') }}" type="text/css" />*/
/* {% endif %}*/
/* <link rel="stylesheet" href="{{ asset('bundles/comurimage/css/comur.image_bundle.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* <div id="image_upload_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                 <h3>{% trans %}Insert Image{% endtrans %}</h3>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <ul class="nav nav-pills" id="image_upload_tabs">*/
/*                     <li class="active">*/
/*                         <a href="#upload-image" data-toggle="tab">{% trans %}Upload Image{% endtrans %}</a>*/
/*                     </li>*/
/*                     <li><a href="#select-existing" data-toggle="tab">{% trans %}Select Existing{% endtrans %}</a></li>*/
/*                     <li><a href="#crop-and-use" data-toggle="tab">{% trans %}Crop and Use{% endtrans %}</a></li>*/
/*                 </ul>*/
/*                 <div class="tab-content">*/
/*                     <!-- UPLOAD IMAGE -->*/
/*                     <div class="tab-pane active" id="upload-image">*/
/*                         <div class="field-error clearfix hidden">*/
/*                             <div id="image_upload_widget_error" class="alert alert-danger span6">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="image_upload_drop_zone" class="image_upload_drop_zone">*/
/*                             <p>{% trans %}Drop your file here{% endtrans %}</p>*/
/*                             <p>{% trans %}or{% endtrans %}</p>*/
/*                         </div>*/
/*                         <div id="image_upload_file_container">*/
/*                             <span class="btn btn-info fileinput-button">*/
/*                                 <i class="icon-white icon-download-alt"></i>*/
/*                                 <span> {% trans %}Select a file...{% endtrans %}</span>*/
/*                                 <input id="image_upload_file" type="file" name="image_upload_file">*/
/*                             </span>*/
/*                         </div>*/
/*                         <div id="image_file_upload_progress" class="progress">*/
/*                             <div class="progress-bar progress-bar-success"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- IMAGE LIB -->*/
/*                     <div class="tab-pane hidden" id="select-existing">*/
/*                         <div class="field-error clearfix hidden">*/
/*                             <div id="image_select_widget_error" class="alert alert-danger span6">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="existing-images"></div>*/
/*                         <input type="hidden" id="selected_image"/>*/
/*                     </div>*/
/*                     <!-- CROP IMAGE -->*/
/*                     <div class="tab-pane" id="crop-and-use">*/
/*                         <p>{% trans %}Please adjust selection to your image{% endtrans %}</p>*/
/*                         <div class="image_preview" id="image_preview" style="z-index: 1050">*/
/*                             <p>{% trans %}Please select or upload an image{% endtrans %}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button class="btn" data-dismiss="modal" aria-hidden="true">{% trans %}Close{% endtrans %}</button>*/
/*                     <span class="btn btn-success hidden" id="image_crop_go_now">*/
/*                         <i class="icon-white icon icon-fullscreen"></i>*/
/*                         {% trans %}Crop & Use !{% endtrans %}*/
/*                     </span>*/
/*                     <span class="btn btn-success hidden" id="image_crop_cancel">*/
/*                         <i class="icon-white icon icon-fullscreen"></i>*/
/*                         {% trans %}Cancel{% endtrans %}*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     $('#image_upload_modal').on({*/
/*         'hidden.bs.modal': destroyImageManager*/
/*     });*/
/* </script>*/
/* */
