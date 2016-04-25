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
        $__internal_7e57f5b1ccd602da754329c69352ff50869189bec636e20d188c369d132b3046 = $this->env->getExtension("native_profiler");
        $__internal_7e57f5b1ccd602da754329c69352ff50869189bec636e20d188c369d132b3046->enter($__internal_7e57f5b1ccd602da754329c69352ff50869189bec636e20d188c369d132b3046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaSIBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e57f5b1ccd602da754329c69352ff50869189bec636e20d188c369d132b3046->leave($__internal_7e57f5b1ccd602da754329c69352ff50869189bec636e20d188c369d132b3046_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5508943c576a9c318c97b85982cdc5707b070fb913c0177644c83d26176aae8d = $this->env->getExtension("native_profiler");
        $__internal_5508943c576a9c318c97b85982cdc5707b070fb913c0177644c83d26176aae8d->enter($__internal_5508943c576a9c318c97b85982cdc5707b070fb913c0177644c83d26176aae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_include($this->env, $context, "::baseUser.html.twig", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
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

    <div class=\"content\">
        <h3>Ofertas</h3>
        <hr>
    </div>
                            


    Hello World!

";
        
        $__internal_5508943c576a9c318c97b85982cdc5707b070fb913c0177644c83d26176aae8d->leave($__internal_5508943c576a9c318c97b85982cdc5707b070fb913c0177644c83d26176aae8d_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76324e991ebdcedd10f6cf8873d64e3a98e1a8a26efaf9c86d521f744d1d7d59 = $this->env->getExtension("native_profiler");
        $__internal_76324e991ebdcedd10f6cf8873d64e3a98e1a8a26efaf9c86d521f744d1d7d59->enter($__internal_76324e991ebdcedd10f6cf8873d64e3a98e1a8a26efaf9c86d521f744d1d7d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
         \$(document).ready(function(){
            \$('.slider').slider({full_width: true});
          });
    </script>
       
";
        
        $__internal_76324e991ebdcedd10f6cf8873d64e3a98e1a8a26efaf9c86d521f744d1d7d59->leave($__internal_76324e991ebdcedd10f6cf8873d64e3a98e1a8a26efaf9c86d521f744d1d7d59_prof);

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
        return array (  117 => 62,  111 => 61,  58 => 14,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  35 => 7,  11 => 3,);
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
/*         {{ include('::baseUser.html.twig', {'admin':admin}) }}*/
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
/* */
/*     <div class="content">*/
/*         <h3>Ofertas</h3>*/
/*         <hr>*/
/*     </div>*/
/*                             */
/* */
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
