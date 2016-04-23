<?php

/* PracticaSIBundle:Default:login.html.twig */
class __TwigTemplate_3f8e7eca91c73aafa2db91c7a23251e7942f098c6a6382e1dfdc04c6896da850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "PracticaSIBundle:Default:login.html.twig", 2);
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
        $__internal_ff6444df616f8182cf660bccf150619a697dbfdffbd32315b5d5d98a15713b45 = $this->env->getExtension("native_profiler");
        $__internal_ff6444df616f8182cf660bccf150619a697dbfdffbd32315b5d5d98a15713b45->enter($__internal_ff6444df616f8182cf660bccf150619a697dbfdffbd32315b5d5d98a15713b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaSIBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff6444df616f8182cf660bccf150619a697dbfdffbd32315b5d5d98a15713b45->leave($__internal_ff6444df616f8182cf660bccf150619a697dbfdffbd32315b5d5d98a15713b45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f954ed269eec0bd2233feb83dd1a9de633f7cec5a143fdb19eb0617d8b90793 = $this->env->getExtension("native_profiler");
        $__internal_9f954ed269eec0bd2233feb83dd1a9de633f7cec5a143fdb19eb0617d8b90793->enter($__internal_9f954ed269eec0bd2233feb83dd1a9de633f7cec5a143fdb19eb0617d8b90793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
    <div class=\"login col s6 offset-s3\">
        <div class=\"row\">
            <form class=\"col s12\" action=\"/zona_usuario\" method=\"POST\" >
              <div class=\"row\">
                <div class=\"input-field col s12\">
                    <input id=\"icon_prefix\" type=\"text\" class=\"validate\" name=\"username\">
                  <label for=\"icon_prefix\">Usuario</label>
                </div>
              </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        <input id=\"icon_prefix\" type=\"password\" class=\"validate\" name=\"password\">
                        <label for=\"icon_prefix\">Contraseña</label>
                      </div>
                </div>
                <input type=\"submit\" value=\"Entrar\" class=\"waves-effect waves-light btn\" />
                <a class=\"waves-effect waves-light btn\">Registrarse</a>
            </form>
          </div>
    </div>
    </div>
";
        
        $__internal_9f954ed269eec0bd2233feb83dd1a9de633f7cec5a143fdb19eb0617d8b90793->leave($__internal_9f954ed269eec0bd2233feb83dd1a9de633f7cec5a143fdb19eb0617d8b90793_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0759a31cad8ead7c042d5fadacd73ae26c2e7dcf4f38e9f8e5850e3475ebed54 = $this->env->getExtension("native_profiler");
        $__internal_0759a31cad8ead7c042d5fadacd73ae26c2e7dcf4f38e9f8e5850e3475ebed54->enter($__internal_0759a31cad8ead7c042d5fadacd73ae26c2e7dcf4f38e9f8e5850e3475ebed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
         \$(document).ready(function() {
                \$('input#input_text, textarea#textarea1').characterCounter();
              });
    </script>
";
        
        $__internal_0759a31cad8ead7c042d5fadacd73ae26c2e7dcf4f38e9f8e5850e3475ebed54->leave($__internal_0759a31cad8ead7c042d5fadacd73ae26c2e7dcf4f38e9f8e5850e3475ebed54_prof);

    }

    public function getTemplateName()
    {
        return "PracticaSIBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  73 => 30,  41 => 6,  35 => 5,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div class="row">*/
/*     <div class="login col s6 offset-s3">*/
/*         <div class="row">*/
/*             <form class="col s12" action="/zona_usuario" method="POST" >*/
/*               <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     <input id="icon_prefix" type="text" class="validate" name="username">*/
/*                   <label for="icon_prefix">Usuario</label>*/
/*                 </div>*/
/*               </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         <input id="icon_prefix" type="password" class="validate" name="password">*/
/*                         <label for="icon_prefix">Contraseña</label>*/
/*                       </div>*/
/*                 </div>*/
/*                 <input type="submit" value="Entrar" class="waves-effect waves-light btn" />*/
/*                 <a class="waves-effect waves-light btn">Registrarse</a>*/
/*             </form>*/
/*           </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*          $(document).ready(function() {*/
/*                 $('input#input_text, textarea#textarea1').characterCounter();*/
/*               });*/
/*     </script>*/
/* {% endblock %}*/
