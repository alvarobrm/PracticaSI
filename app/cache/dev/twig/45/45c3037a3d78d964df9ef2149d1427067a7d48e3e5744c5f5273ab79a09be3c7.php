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
        $__internal_49eaf153dd4c0f175991199dde4ae23b21611daae2b17588d514a77292d7b692 = $this->env->getExtension("native_profiler");
        $__internal_49eaf153dd4c0f175991199dde4ae23b21611daae2b17588d514a77292d7b692->enter($__internal_49eaf153dd4c0f175991199dde4ae23b21611daae2b17588d514a77292d7b692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaSIBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49eaf153dd4c0f175991199dde4ae23b21611daae2b17588d514a77292d7b692->leave($__internal_49eaf153dd4c0f175991199dde4ae23b21611daae2b17588d514a77292d7b692_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f15e11fa7630ebfbcc558feb76b2ddae4a346dfd6e3156924d3a8cdc9cb81ddc = $this->env->getExtension("native_profiler");
        $__internal_f15e11fa7630ebfbcc558feb76b2ddae4a346dfd6e3156924d3a8cdc9cb81ddc->enter($__internal_f15e11fa7630ebfbcc558feb76b2ddae4a346dfd6e3156924d3a8cdc9cb81ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <i class=\"material-icons prefix\">account_circle</i>
                    <input id=\"icon_prefix\" type=\"text\" class=\"validate\" name=\"username\">
                  <label for=\"icon_prefix\">Usuario</label>
                </div>
              </div>
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        <i class=\"material-icons prefix\">vpn_key</i>
                        <input id=\"icon_prefix\" type=\"password\" class=\"validate\" name=\"password\">
                        <label for=\"icon_prefix\">Contraseña</label>
                      </div>
                </div>
                <div class=\"row\">
                    <input type=\"submit\" value=\"Entrar\" class=\"waves-effect waves-light btn col s3 offset-s2\" />
                    <p class=\"col s1\"></p>
                    <a class=\"waves-effect waves-light btn col s3\" href=\"/singup\">Registrarse</a>
                </div>
            </form>
          </div>
    </div>
    </div>
";
        
        $__internal_f15e11fa7630ebfbcc558feb76b2ddae4a346dfd6e3156924d3a8cdc9cb81ddc->leave($__internal_f15e11fa7630ebfbcc558feb76b2ddae4a346dfd6e3156924d3a8cdc9cb81ddc_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0118824f93387b78b43b064c317b8de78c3eaafebf9d62c9ad9f3f439ca0c3f2 = $this->env->getExtension("native_profiler");
        $__internal_0118824f93387b78b43b064c317b8de78c3eaafebf9d62c9ad9f3f439ca0c3f2->enter($__internal_0118824f93387b78b43b064c317b8de78c3eaafebf9d62c9ad9f3f439ca0c3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
         \$(document).ready(function() {
                \$('input#input_text, textarea#textarea1').characterCounter();
              });
    </script>
";
        
        $__internal_0118824f93387b78b43b064c317b8de78c3eaafebf9d62c9ad9f3f439ca0c3f2->leave($__internal_0118824f93387b78b43b064c317b8de78c3eaafebf9d62c9ad9f3f439ca0c3f2_prof);

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
        return array (  84 => 36,  78 => 35,  41 => 6,  35 => 5,  11 => 2,);
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
/*                     <i class="material-icons prefix">account_circle</i>*/
/*                     <input id="icon_prefix" type="text" class="validate" name="username">*/
/*                   <label for="icon_prefix">Usuario</label>*/
/*                 </div>*/
/*               </div>*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         <i class="material-icons prefix">vpn_key</i>*/
/*                         <input id="icon_prefix" type="password" class="validate" name="password">*/
/*                         <label for="icon_prefix">Contraseña</label>*/
/*                       </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <input type="submit" value="Entrar" class="waves-effect waves-light btn col s3 offset-s2" />*/
/*                     <p class="col s1"></p>*/
/*                     <a class="waves-effect waves-light btn col s3" href="/singup">Registrarse</a>*/
/*                 </div>*/
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
