<?php

/* ::base.html.twig */
class __TwigTemplate_38a387829628acd863af275f7811989ecffad07fb37648fd6dcbf1b1b364d0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d93cd798fed44b604ffc40f9155d868923cab330dfbb1c21ddffa6ed287370e = $this->env->getExtension("native_profiler");
        $__internal_1d93cd798fed44b604ffc40f9155d868923cab330dfbb1c21ddffa6ed287370e->enter($__internal_1d93cd798fed44b604ffc40f9155d868923cab330dfbb1c21ddffa6ed287370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\">
        <!--jQuery-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <!-- Compiled and minified JavaScript -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <!--Icons-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
        
        $__internal_1d93cd798fed44b604ffc40f9155d868923cab330dfbb1c21ddffa6ed287370e->leave($__internal_1d93cd798fed44b604ffc40f9155d868923cab330dfbb1c21ddffa6ed287370e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0ab647f0853435da153cb2eb24cf208a26f7d1cd7241dbe13c12a64cff260b4 = $this->env->getExtension("native_profiler");
        $__internal_a0ab647f0853435da153cb2eb24cf208a26f7d1cd7241dbe13c12a64cff260b4->enter($__internal_a0ab647f0853435da153cb2eb24cf208a26f7d1cd7241dbe13c12a64cff260b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a0ab647f0853435da153cb2eb24cf208a26f7d1cd7241dbe13c12a64cff260b4->leave($__internal_a0ab647f0853435da153cb2eb24cf208a26f7d1cd7241dbe13c12a64cff260b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cfe78aaefadbe19871eeb648347a3d821c8eb19668a7d755a0464ff225343b6 = $this->env->getExtension("native_profiler");
        $__internal_1cfe78aaefadbe19871eeb648347a3d821c8eb19668a7d755a0464ff225343b6->enter($__internal_1cfe78aaefadbe19871eeb648347a3d821c8eb19668a7d755a0464ff225343b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1cfe78aaefadbe19871eeb648347a3d821c8eb19668a7d755a0464ff225343b6->leave($__internal_1cfe78aaefadbe19871eeb648347a3d821c8eb19668a7d755a0464ff225343b6_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fa19424f74c4e53d1b7aec935aae2036d2d3e835eca4f8f714d17c2af4d3dd9 = $this->env->getExtension("native_profiler");
        $__internal_3fa19424f74c4e53d1b7aec935aae2036d2d3e835eca4f8f714d17c2af4d3dd9->enter($__internal_3fa19424f74c4e53d1b7aec935aae2036d2d3e835eca4f8f714d17c2af4d3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            <nav>
            <div class=\"nav-wrapper\">
              <a href=\"#!\" class=\"brand-logo\">Logo</a>
              <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
              <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"sass.html\">Mi carro</a></li>
                <li><a href=\"badges.html\">Components</a></li>
                <li><a href=\"collapsible.html\">Javascript</a></li>
                <li><a href=\"/login\">Acceso</a></li>

              </ul>
              <ul class=\"side-nav\" id=\"mobile-demo\">
                <li><a href=\"sass.html\">Mi carro</a></li>
                <li><a href=\"badges.html\">Components</a></li>
                <li><a href=\"collapsible.html\">Javascript</a></li>
                <li><a href=\"mobile.html\">Acceso</a></li>
              </ul>
            </div>
      </nav>
        ";
        
        $__internal_3fa19424f74c4e53d1b7aec935aae2036d2d3e835eca4f8f714d17c2af4d3dd9->leave($__internal_3fa19424f74c4e53d1b7aec935aae2036d2d3e835eca4f8f714d17c2af4d3dd9_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef10cafc7b84361f9d100b4a9c370c904d4811340392ce854693a0c9fe2addb3 = $this->env->getExtension("native_profiler");
        $__internal_ef10cafc7b84361f9d100b4a9c370c904d4811340392ce854693a0c9fe2addb3->enter($__internal_ef10cafc7b84361f9d100b4a9c370c904d4811340392ce854693a0c9fe2addb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script>
                 \$(\".button-collapse\").sideNav();
                 \$(document).ready(function(){
                     \$(\".dropdown-button\").dropdown();
                 });

            </script>
        ";
        
        $__internal_ef10cafc7b84361f9d100b4a9c370c904d4811340392ce854693a0c9fe2addb3->leave($__internal_ef10cafc7b84361f9d100b4a9c370c904d4811340392ce854693a0c9fe2addb3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  125 => 42,  99 => 22,  93 => 21,  82 => 6,  70 => 5,  61 => 51,  58 => 42,  56 => 21,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!-- Compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">*/
/*         <!--jQuery-->*/
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*         <!-- Compiled and minified JavaScript -->*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>*/
/* */
/*         <!--Let browser know website is optimized for mobile-->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*         <!--Icons-->*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <nav>*/
/*             <div class="nav-wrapper">*/
/*               <a href="#!" class="brand-logo">Logo</a>*/
/*               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*               <ul class="right hide-on-med-and-down">*/
/*                 <li><a href="sass.html">Mi carro</a></li>*/
/*                 <li><a href="badges.html">Components</a></li>*/
/*                 <li><a href="collapsible.html">Javascript</a></li>*/
/*                 <li><a href="/login">Acceso</a></li>*/
/* */
/*               </ul>*/
/*               <ul class="side-nav" id="mobile-demo">*/
/*                 <li><a href="sass.html">Mi carro</a></li>*/
/*                 <li><a href="badges.html">Components</a></li>*/
/*                 <li><a href="collapsible.html">Javascript</a></li>*/
/*                 <li><a href="mobile.html">Acceso</a></li>*/
/*               </ul>*/
/*             </div>*/
/*       </nav>*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script>*/
/*                  $(".button-collapse").sideNav();*/
/*                  $(document).ready(function(){*/
/*                      $(".dropdown-button").dropdown();*/
/*                  });*/
/* */
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
