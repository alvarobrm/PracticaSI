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
        $__internal_3c70fb5504cc8497ee008c05513b608cd95965edbd385b86779e3857dbd68209 = $this->env->getExtension("native_profiler");
        $__internal_3c70fb5504cc8497ee008c05513b608cd95965edbd385b86779e3857dbd68209->enter($__internal_3c70fb5504cc8497ee008c05513b608cd95965edbd385b86779e3857dbd68209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaSIBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c70fb5504cc8497ee008c05513b608cd95965edbd385b86779e3857dbd68209->leave($__internal_3c70fb5504cc8497ee008c05513b608cd95965edbd385b86779e3857dbd68209_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b3edbeba359063622b98f68f33bbf45bf84c5eda45eff3b1fc014c2df162dff = $this->env->getExtension("native_profiler");
        $__internal_8b3edbeba359063622b98f68f33bbf45bf84c5eda45eff3b1fc014c2df162dff->enter($__internal_8b3edbeba359063622b98f68f33bbf45bf84c5eda45eff3b1fc014c2df162dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b3edbeba359063622b98f68f33bbf45bf84c5eda45eff3b1fc014c2df162dff->leave($__internal_8b3edbeba359063622b98f68f33bbf45bf84c5eda45eff3b1fc014c2df162dff_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b243b251823458e95483c6b13472fc7b33596555b940a054fec279df7a9d2109 = $this->env->getExtension("native_profiler");
        $__internal_b243b251823458e95483c6b13472fc7b33596555b940a054fec279df7a9d2109->enter($__internal_b243b251823458e95483c6b13472fc7b33596555b940a054fec279df7a9d2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b243b251823458e95483c6b13472fc7b33596555b940a054fec279df7a9d2109->leave($__internal_b243b251823458e95483c6b13472fc7b33596555b940a054fec279df7a9d2109_prof);

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
