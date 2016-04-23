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
        $__internal_affcb3ed449f1e5b8e0c7f55a49c7842ae76ebe4f24aa6c82ad9011bcf549cfa = $this->env->getExtension("native_profiler");
        $__internal_affcb3ed449f1e5b8e0c7f55a49c7842ae76ebe4f24aa6c82ad9011bcf549cfa->enter($__internal_affcb3ed449f1e5b8e0c7f55a49c7842ae76ebe4f24aa6c82ad9011bcf549cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_affcb3ed449f1e5b8e0c7f55a49c7842ae76ebe4f24aa6c82ad9011bcf549cfa->leave($__internal_affcb3ed449f1e5b8e0c7f55a49c7842ae76ebe4f24aa6c82ad9011bcf549cfa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29e834ac4c45668d66ec33f335fb9f1592ecd95b73175b227089ec141da533d5 = $this->env->getExtension("native_profiler");
        $__internal_29e834ac4c45668d66ec33f335fb9f1592ecd95b73175b227089ec141da533d5->enter($__internal_29e834ac4c45668d66ec33f335fb9f1592ecd95b73175b227089ec141da533d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_29e834ac4c45668d66ec33f335fb9f1592ecd95b73175b227089ec141da533d5->leave($__internal_29e834ac4c45668d66ec33f335fb9f1592ecd95b73175b227089ec141da533d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02421b6c01653cd972e9eee0ee62cbc2d7cbb969fb61818764c358134f029403 = $this->env->getExtension("native_profiler");
        $__internal_02421b6c01653cd972e9eee0ee62cbc2d7cbb969fb61818764c358134f029403->enter($__internal_02421b6c01653cd972e9eee0ee62cbc2d7cbb969fb61818764c358134f029403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_02421b6c01653cd972e9eee0ee62cbc2d7cbb969fb61818764c358134f029403->leave($__internal_02421b6c01653cd972e9eee0ee62cbc2d7cbb969fb61818764c358134f029403_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_adcdd2c671ab2c4d05bd6ebe7bfe497b74b644dc97ae4deb58eef7d807e89c24 = $this->env->getExtension("native_profiler");
        $__internal_adcdd2c671ab2c4d05bd6ebe7bfe497b74b644dc97ae4deb58eef7d807e89c24->enter($__internal_adcdd2c671ab2c4d05bd6ebe7bfe497b74b644dc97ae4deb58eef7d807e89c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_adcdd2c671ab2c4d05bd6ebe7bfe497b74b644dc97ae4deb58eef7d807e89c24->leave($__internal_adcdd2c671ab2c4d05bd6ebe7bfe497b74b644dc97ae4deb58eef7d807e89c24_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d8e6a766e364fce48abdf427f1028f58b9b7bd22e0b06704e82513f7ce6c868 = $this->env->getExtension("native_profiler");
        $__internal_0d8e6a766e364fce48abdf427f1028f58b9b7bd22e0b06704e82513f7ce6c868->enter($__internal_0d8e6a766e364fce48abdf427f1028f58b9b7bd22e0b06704e82513f7ce6c868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script>
                 \$(\".button-collapse\").sideNav();
            </script>
        ";
        
        $__internal_0d8e6a766e364fce48abdf427f1028f58b9b7bd22e0b06704e82513f7ce6c868->leave($__internal_0d8e6a766e364fce48abdf427f1028f58b9b7bd22e0b06704e82513f7ce6c868_prof);

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
        return array (  131 => 43,  125 => 42,  99 => 22,  93 => 21,  82 => 6,  70 => 5,  61 => 47,  58 => 42,  56 => 21,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
