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
        $__internal_bba60bbb0ddeb81a03a13c049ede1efdb6d6a1d9a57739c2b31db0df15718952 = $this->env->getExtension("native_profiler");
        $__internal_bba60bbb0ddeb81a03a13c049ede1efdb6d6a1d9a57739c2b31db0df15718952->enter($__internal_bba60bbb0ddeb81a03a13c049ede1efdb6d6a1d9a57739c2b31db0df15718952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bba60bbb0ddeb81a03a13c049ede1efdb6d6a1d9a57739c2b31db0df15718952->leave($__internal_bba60bbb0ddeb81a03a13c049ede1efdb6d6a1d9a57739c2b31db0df15718952_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32a46612dcf153b57d99d25bff66b13f7022f5e01c0eae056090b0618c437083 = $this->env->getExtension("native_profiler");
        $__internal_32a46612dcf153b57d99d25bff66b13f7022f5e01c0eae056090b0618c437083->enter($__internal_32a46612dcf153b57d99d25bff66b13f7022f5e01c0eae056090b0618c437083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32a46612dcf153b57d99d25bff66b13f7022f5e01c0eae056090b0618c437083->leave($__internal_32a46612dcf153b57d99d25bff66b13f7022f5e01c0eae056090b0618c437083_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc97e0112dea84d7eb6d4e308deda2c657596f0a62903bd3e150e2b7f019a10f = $this->env->getExtension("native_profiler");
        $__internal_bc97e0112dea84d7eb6d4e308deda2c657596f0a62903bd3e150e2b7f019a10f->enter($__internal_bc97e0112dea84d7eb6d4e308deda2c657596f0a62903bd3e150e2b7f019a10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc97e0112dea84d7eb6d4e308deda2c657596f0a62903bd3e150e2b7f019a10f->leave($__internal_bc97e0112dea84d7eb6d4e308deda2c657596f0a62903bd3e150e2b7f019a10f_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_088c6bc6fdc4ade89398d4ce410cc2987c5873d5df1097fec93eefb177acf881 = $this->env->getExtension("native_profiler");
        $__internal_088c6bc6fdc4ade89398d4ce410cc2987c5873d5df1097fec93eefb177acf881->enter($__internal_088c6bc6fdc4ade89398d4ce410cc2987c5873d5df1097fec93eefb177acf881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            <nav>
            <div class=\"nav-wrapper\">
              <a href=\"/\" class=\"brand-logo\">Logo</a>
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
        
        $__internal_088c6bc6fdc4ade89398d4ce410cc2987c5873d5df1097fec93eefb177acf881->leave($__internal_088c6bc6fdc4ade89398d4ce410cc2987c5873d5df1097fec93eefb177acf881_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ce76ff32826f586253177a28ca9a9ba331b39545f199021c9b2474e009c84f1 = $this->env->getExtension("native_profiler");
        $__internal_5ce76ff32826f586253177a28ca9a9ba331b39545f199021c9b2474e009c84f1->enter($__internal_5ce76ff32826f586253177a28ca9a9ba331b39545f199021c9b2474e009c84f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script>
                 \$(\".button-collapse\").sideNav();
                 \$(document).ready(function(){
                     \$(\".dropdown-button\").dropdown();
                 });

            </script>
        ";
        
        $__internal_5ce76ff32826f586253177a28ca9a9ba331b39545f199021c9b2474e009c84f1->leave($__internal_5ce76ff32826f586253177a28ca9a9ba331b39545f199021c9b2474e009c84f1_prof);

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
/*               <a href="/" class="brand-logo">Logo</a>*/
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
