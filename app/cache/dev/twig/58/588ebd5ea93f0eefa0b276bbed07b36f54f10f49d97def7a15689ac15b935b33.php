<?php

/* PracticaSIBundle:Default:index.html.twig */
class __TwigTemplate_8f79e1536444d360efa993ba649bd1f8eb2e89e57d639b0ddf45960b03a0bbb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "PracticaSIBundle:Default:index.html.twig", 3);
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
        $__internal_78f2917e7048bb3addd021a9f78c7dd9973ad19b80a3e195fca91f27f616aabb = $this->env->getExtension("native_profiler");
        $__internal_78f2917e7048bb3addd021a9f78c7dd9973ad19b80a3e195fca91f27f616aabb->enter($__internal_78f2917e7048bb3addd021a9f78c7dd9973ad19b80a3e195fca91f27f616aabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaSIBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f2917e7048bb3addd021a9f78c7dd9973ad19b80a3e195fca91f27f616aabb->leave($__internal_78f2917e7048bb3addd021a9f78c7dd9973ad19b80a3e195fca91f27f616aabb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_65c37edb56e585baf9ae3bae383c421180ac6631fe87743c12c42b1671bf0fe7 = $this->env->getExtension("native_profiler");
        $__internal_65c37edb56e585baf9ae3bae383c421180ac6631fe87743c12c42b1671bf0fe7->enter($__internal_65c37edb56e585baf9ae3bae383c421180ac6631fe87743c12c42b1671bf0fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 0)) {
            // line 10
            echo "        ";
            $this->displayParentBlock("body", $context, $blocks);
            echo "
    ";
        } else {
            // line 12
            echo "        ";
            echo twig_include($this->env, $context, "::baseUser.html.twig");
            echo "
    ";
        }
        // line 14
        echo "        <!-- Slider de index-->
                            


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
        
        $__internal_65c37edb56e585baf9ae3bae383c421180ac6631fe87743c12c42b1671bf0fe7->leave($__internal_65c37edb56e585baf9ae3bae383c421180ac6631fe87743c12c42b1671bf0fe7_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcd557b6195a5d91ca296c5972ed1f51fd201854e1851210479f30773e7a46a7 = $this->env->getExtension("native_profiler");
        $__internal_bcd557b6195a5d91ca296c5972ed1f51fd201854e1851210479f30773e7a46a7->enter($__internal_bcd557b6195a5d91ca296c5972ed1f51fd201854e1851210479f30773e7a46a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
         \$(document).ready(function(){
            \$('.slider').slider({full_width: true});
          });
    </script>
       
";
        
        $__internal_bcd557b6195a5d91ca296c5972ed1f51fd201854e1851210479f30773e7a46a7->leave($__internal_bcd557b6195a5d91ca296c5972ed1f51fd201854e1851210479f30773e7a46a7_prof);

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
        return array (  113 => 58,  107 => 57,  58 => 14,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* */
/* */
/*     {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     {% if active == 0 %}*/
/*         {{ parent() }}*/
/*     {% else %}*/
/*         {{ include('::baseUser.html.twig') }}*/
/*     {% endif %}*/
/*         <!-- Slider de index-->*/
/*                             */
/* */
/* */
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
