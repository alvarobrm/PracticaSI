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
        $__internal_2daeb3396a53674f5582496605257b529e5ccda61fa27c2e0696e4bcf6ef1893 = $this->env->getExtension("native_profiler");
        $__internal_2daeb3396a53674f5582496605257b529e5ccda61fa27c2e0696e4bcf6ef1893->enter($__internal_2daeb3396a53674f5582496605257b529e5ccda61fa27c2e0696e4bcf6ef1893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

        <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/practica.css"), "html", null, true);
        echo ">
    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_2daeb3396a53674f5582496605257b529e5ccda61fa27c2e0696e4bcf6ef1893->leave($__internal_2daeb3396a53674f5582496605257b529e5ccda61fa27c2e0696e4bcf6ef1893_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc723930ef9a4780d12e5c9f78acc1ab3f20938c0e1d9fd4b37838664a25e13d = $this->env->getExtension("native_profiler");
        $__internal_cc723930ef9a4780d12e5c9f78acc1ab3f20938c0e1d9fd4b37838664a25e13d->enter($__internal_cc723930ef9a4780d12e5c9f78acc1ab3f20938c0e1d9fd4b37838664a25e13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc723930ef9a4780d12e5c9f78acc1ab3f20938c0e1d9fd4b37838664a25e13d->leave($__internal_cc723930ef9a4780d12e5c9f78acc1ab3f20938c0e1d9fd4b37838664a25e13d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e887092ed1a8a85c9942fb345d4ea7d74a903de69c1d8cb57952608279fdcd4 = $this->env->getExtension("native_profiler");
        $__internal_0e887092ed1a8a85c9942fb345d4ea7d74a903de69c1d8cb57952608279fdcd4->enter($__internal_0e887092ed1a8a85c9942fb345d4ea7d74a903de69c1d8cb57952608279fdcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e887092ed1a8a85c9942fb345d4ea7d74a903de69c1d8cb57952608279fdcd4->leave($__internal_0e887092ed1a8a85c9942fb345d4ea7d74a903de69c1d8cb57952608279fdcd4_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3aca2c146ad3275845216c9dc852894e04b088a9da93a4f2bed7942f253ed0 = $this->env->getExtension("native_profiler");
        $__internal_aa3aca2c146ad3275845216c9dc852894e04b088a9da93a4f2bed7942f253ed0->enter($__internal_aa3aca2c146ad3275845216c9dc852894e04b088a9da93a4f2bed7942f253ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "            <ul id=\"dropdown2\" class=\"dropdown-content\">
                <li><a href=\"/categorias/2\">Ordenadores</a></li>
                <li><a href=\"/categorias/1\">Moviles</a></li>
                <li><a href=\"/categorias/3\">Accesorios</a></li>
            </ul>

            <nav>
            <div class=\"nav-wrapper lime accent-2\">
              <a href=\"/\" class=\"brand-logo\">Logo</a>
              <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
              <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"sass.html\">Mi carro</a></li>
                <li><a href=\"collapsible.html\">Javascript</a></li>
                <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Categorías<i class=\"material-icons right\">arrow_drop_down</i></li>

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
        
        $__internal_aa3aca2c146ad3275845216c9dc852894e04b088a9da93a4f2bed7942f253ed0->leave($__internal_aa3aca2c146ad3275845216c9dc852894e04b088a9da93a4f2bed7942f253ed0_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66e6f00d97d97a2e5a3472bd1336501a315e20c178864f5ffde0b6a2bdf8bb1d = $this->env->getExtension("native_profiler");
        $__internal_66e6f00d97d97a2e5a3472bd1336501a315e20c178864f5ffde0b6a2bdf8bb1d->enter($__internal_66e6f00d97d97a2e5a3472bd1336501a315e20c178864f5ffde0b6a2bdf8bb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            <script>
                 \$(\".button-collapse\").sideNav();
                 \$(document).ready(function(){
                     \$(\".dropdown-button\").dropdown();
                 });

            </script>
        ";
        
        $__internal_66e6f00d97d97a2e5a3472bd1336501a315e20c178864f5ffde0b6a2bdf8bb1d->leave($__internal_66e6f00d97d97a2e5a3472bd1336501a315e20c178864f5ffde0b6a2bdf8bb1d_prof);

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
        return array (  144 => 53,  138 => 52,  105 => 25,  99 => 24,  88 => 6,  76 => 5,  67 => 61,  64 => 52,  62 => 24,  56 => 21,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
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
/* */
/*         <link rel="stylesheet" href={{ asset('bundles/framework/css/practica.css') }}>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <ul id="dropdown2" class="dropdown-content">*/
/*                 <li><a href="/categorias/2">Ordenadores</a></li>*/
/*                 <li><a href="/categorias/1">Moviles</a></li>*/
/*                 <li><a href="/categorias/3">Accesorios</a></li>*/
/*             </ul>*/
/* */
/*             <nav>*/
/*             <div class="nav-wrapper lime accent-2">*/
/*               <a href="/" class="brand-logo">Logo</a>*/
/*               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*               <ul class="right hide-on-med-and-down">*/
/*                 <li><a href="sass.html">Mi carro</a></li>*/
/*                 <li><a href="collapsible.html">Javascript</a></li>*/
/*                 <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categorías<i class="material-icons right">arrow_drop_down</i></li>*/
/* */
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
