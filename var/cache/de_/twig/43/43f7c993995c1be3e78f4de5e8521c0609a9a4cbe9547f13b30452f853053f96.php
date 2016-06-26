<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_9c871100d475068e2a4edd49b1a649a062eb015a7bee9dc73da346e1511aa266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9c34736d1cd99c7fbeb7968708d15818106e5faf7871825c064b3be61d398ad = $this->env->getExtension("native_profiler");
        $__internal_f9c34736d1cd99c7fbeb7968708d15818106e5faf7871825c064b3be61d398ad->enter($__internal_f9c34736d1cd99c7fbeb7968708d15818106e5faf7871825c064b3be61d398ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9c34736d1cd99c7fbeb7968708d15818106e5faf7871825c064b3be61d398ad->leave($__internal_f9c34736d1cd99c7fbeb7968708d15818106e5faf7871825c064b3be61d398ad_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_0d8e72e2c4c4bcd3ad30d65195b5958dcd7dc9c1344aec0cf591655dd7a110db = $this->env->getExtension("native_profiler");
        $__internal_0d8e72e2c4c4bcd3ad30d65195b5958dcd7dc9c1344aec0cf591655dd7a110db->enter($__internal_0d8e72e2c4c4bcd3ad30d65195b5958dcd7dc9c1344aec0cf591655dd7a110db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\" style=\"width:80%; margin-left:20%; max-width:80%; background-color: black;\">
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"news\" style=\"text-align: center;\">
                ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_0d8e72e2c4c4bcd3ad30d65195b5958dcd7dc9c1344aec0cf591655dd7a110db->leave($__internal_0d8e72e2c4c4bcd3ad30d65195b5958dcd7dc9c1344aec0cf591655dd7a110db_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59657bec269f8c55131d46674500b92d1cafd28f6d3474d4a60ff249fab0542 = $this->env->getExtension("native_profiler");
        $__internal_a59657bec269f8c55131d46674500b92d1cafd28f6d3474d4a60ff249fab0542->enter($__internal_a59657bec269f8c55131d46674500b92d1cafd28f6d3474d4a60ff249fab0542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "                    <h1 style=\"color:white;\">DieAndRetry</h1>
                    <div id=\"player\" style=\"width:100%; height: 690px;\"></div>
                    <script>
                        // 2. This code loads the IFrame Player API code asynchronously.
                        var tag = document.createElement('script');

                        tag.src = \"https://www.youtube.com/iframe_api\";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        // 3. This function creates an <iframe> (and YouTube player)
                        //    after the API code downloads.
                        var player;
                        function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                height: '100%',
                                width: '690 ',
                                videoId: 'in6RVj2S84g',
                                events: {
                                    'onReady': onPlayerReady,
                                    'onStateChange': onPlayerStateChange
                                }
                            });

                            function onPlayerReady(event) {
                                event.target.playVideo();
                                player.mute();
                            }

                            // 5. The API calls this function when the player's state changes.
                            //    The function indicates that when playing a video (state=1),
                            //    the player should play for six seconds and then stop.
                            var done = false;
                            function onPlayerStateChange(event) {
                                if (event.data == YT.PlayerState.PLAYING && !done) {
                                    done = true;
                                }
                            }
                        }
                    </script>
                ";
        
        $__internal_a59657bec269f8c55131d46674500b92d1cafd28f6d3474d4a60ff249fab0542->leave($__internal_a59657bec269f8c55131d46674500b92d1cafd28f6d3474d4a60ff249fab0542_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  58 => 6,  48 => 48,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block container %}*/
/*     <div class="container" style="width:80%; margin-left:20%; max-width:80%; background-color: black;">*/
/*         <div class="row">*/
/*             <div class="col-md-12" id="news" style="text-align: center;">*/
/*                 {% block body %}*/
/*                     <h1 style="color:white;">DieAndRetry</h1>*/
/*                     <div id="player" style="width:100%; height: 690px;"></div>*/
/*                     <script>*/
/*                         // 2. This code loads the IFrame Player API code asynchronously.*/
/*                         var tag = document.createElement('script');*/
/* */
/*                         tag.src = "https://www.youtube.com/iframe_api";*/
/*                         var firstScriptTag = document.getElementsByTagName('script')[0];*/
/*                         firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);*/
/* */
/*                         // 3. This function creates an <iframe> (and YouTube player)*/
/*                         //    after the API code downloads.*/
/*                         var player;*/
/*                         function onYouTubeIframeAPIReady() {*/
/*                             player = new YT.Player('player', {*/
/*                                 height: '100%',*/
/*                                 width: '690 ',*/
/*                                 videoId: 'in6RVj2S84g',*/
/*                                 events: {*/
/*                                     'onReady': onPlayerReady,*/
/*                                     'onStateChange': onPlayerStateChange*/
/*                                 }*/
/*                             });*/
/* */
/*                             function onPlayerReady(event) {*/
/*                                 event.target.playVideo();*/
/*                                 player.mute();*/
/*                             }*/
/* */
/*                             // 5. The API calls this function when the player's state changes.*/
/*                             //    The function indicates that when playing a video (state=1),*/
/*                             //    the player should play for six seconds and then stop.*/
/*                             var done = false;*/
/*                             function onPlayerStateChange(event) {*/
/*                                 if (event.data == YT.PlayerState.PLAYING && !done) {*/
/*                                     done = true;*/
/*                                 }*/
/*                             }*/
/*                         }*/
/*                     </script>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
