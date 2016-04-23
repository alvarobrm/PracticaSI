<?php

/* PracticaSIBundle:Default:index.html.twig */
class __TwigTemplate_8f79e1536444d360efa993ba649bd1f8eb2e89e57d639b0ddf45960b03a0bbb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "PracticaSIBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e973d5b3a75e5b884a899e105e561b2e7e8eef479c4a04e1ec171bc7bbd38bf5 = $this->env->getExtension("native_profiler");
        $__internal_e973d5b3a75e5b884a899e105e561b2e7e8eef479c4a04e1ec171bc7bbd38bf5->enter($__internal_e973d5b3a75e5b884a899e105e561b2e7e8eef479c4a04e1ec171bc7bbd38bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaSIBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e973d5b3a75e5b884a899e105e561b2e7e8eef479c4a04e1ec171bc7bbd38bf5->leave($__internal_e973d5b3a75e5b884a899e105e561b2e7e8eef479c4a04e1ec171bc7bbd38bf5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e8a88613cc61b6d1f25a740cd6ee65339d766deb3a64107a6aa4b28bdfaba60 = $this->env->getExtension("native_profiler");
        $__internal_3e8a88613cc61b6d1f25a740cd6ee65339d766deb3a64107a6aa4b28bdfaba60->enter($__internal_3e8a88613cc61b6d1f25a740cd6ee65339d766deb3a64107a6aa4b28bdfaba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <!-- Slider de index-->
                            
                            
        <div class=\"slider\">
            <ul class=\"slides\">
              <li>
                <img src=\"http://lorempixel.com/580/250/nature/1\"> <!-- random image -->
                <div class=\"caption center-align\">
                  <h3>This is our big Tagline!</h3>
                  <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src=\"http://lorempixel.com/580/250/nature/2\"> <!-- random image -->
                <div class=\"caption left-align\">
                  <h3>Left Aligned Caption</h3>
                  <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src=\"http://lorempixel.com/580/250/nature/3\"> <!-- random image -->
                <div class=\"caption right-align\">
                  <h3>Right Aligned Caption</h3>
                  <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src=\"http://lorempixel.com/580/250/nature/4\"> <!-- random image -->
                <div class=\"caption center-align\">
                  <h3>This is our big Tagline!</h3>
                  <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>
                            
        <h3>Ofertas</h3>
        <hr>

    Hello World!

";
        
        $__internal_3e8a88613cc61b6d1f25a740cd6ee65339d766deb3a64107a6aa4b28bdfaba60->leave($__internal_3e8a88613cc61b6d1f25a740cd6ee65339d766deb3a64107a6aa4b28bdfaba60_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cf5a301bf5454239e7c30df098d196e315da7b11defd5cdafc299fadb915911 = $this->env->getExtension("native_profiler");
        $__internal_6cf5a301bf5454239e7c30df098d196e315da7b11defd5cdafc299fadb915911->enter($__internal_6cf5a301bf5454239e7c30df098d196e315da7b11defd5cdafc299fadb915911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
         \$(document).ready(function(){
            \$('.slider').slider({full_width: true});
          });
    </script>
       
";
        
        $__internal_6cf5a301bf5454239e7c30df098d196e315da7b11defd5cdafc299fadb915911->leave($__internal_6cf5a301bf5454239e7c30df098d196e315da7b11defd5cdafc299fadb915911_prof);

    }

    public function getTemplateName()
    {
        return "PracticaSIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 50,  94 => 49,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/*   */
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     {{ parent() }}*/
/*         <!-- Slider de index-->*/
/*                             */
/*                             */
/*         <div class="slider">*/
/*             <ul class="slides">*/
/*               <li>*/
/*                 <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->*/
/*                 <div class="caption center-align">*/
/*                   <h3>This is our big Tagline!</h3>*/
/*                   <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>*/
/*                 </div>*/
/*               </li>*/
/*               <li>*/
/*                 <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->*/
/*                 <div class="caption left-align">*/
/*                   <h3>Left Aligned Caption</h3>*/
/*                   <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>*/
/*                 </div>*/
/*               </li>*/
/*               <li>*/
/*                 <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->*/
/*                 <div class="caption right-align">*/
/*                   <h3>Right Aligned Caption</h3>*/
/*                   <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>*/
/*                 </div>*/
/*               </li>*/
/*               <li>*/
/*                 <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->*/
/*                 <div class="caption center-align">*/
/*                   <h3>This is our big Tagline!</h3>*/
/*                   <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*                             */
/*         <h3>Ofertas</h3>*/
/*         <hr>*/
/* */
/*     Hello World!*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*          $(document).ready(function(){*/
/*             $('.slider').slider({full_width: true});*/
/*           });*/
/*     </script>*/
/*        */
/* {% endblock %}*/
