<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1a0c76c27f7a0a230440162a9e9c59fbc235aed99bea226572830e80245797a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10bee7b2069b4256b0b1705a792e3e981df06be29f8876c54327e38b717f3a03 = $this->env->getExtension("native_profiler");
        $__internal_10bee7b2069b4256b0b1705a792e3e981df06be29f8876c54327e38b717f3a03->enter($__internal_10bee7b2069b4256b0b1705a792e3e981df06be29f8876c54327e38b717f3a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10bee7b2069b4256b0b1705a792e3e981df06be29f8876c54327e38b717f3a03->leave($__internal_10bee7b2069b4256b0b1705a792e3e981df06be29f8876c54327e38b717f3a03_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_110142a3ad88fdb3df092d87a74ab755fa4f7c79794bd6945979b2515d7c56c7 = $this->env->getExtension("native_profiler");
        $__internal_110142a3ad88fdb3df092d87a74ab755fa4f7c79794bd6945979b2515d7c56c7->enter($__internal_110142a3ad88fdb3df092d87a74ab755fa4f7c79794bd6945979b2515d7c56c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_110142a3ad88fdb3df092d87a74ab755fa4f7c79794bd6945979b2515d7c56c7->leave($__internal_110142a3ad88fdb3df092d87a74ab755fa4f7c79794bd6945979b2515d7c56c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_133ad1d2bfa91df882cd0aa3251ade0c0a3e047e7b60fcab4dbb7e6a601afaec = $this->env->getExtension("native_profiler");
        $__internal_133ad1d2bfa91df882cd0aa3251ade0c0a3e047e7b60fcab4dbb7e6a601afaec->enter($__internal_133ad1d2bfa91df882cd0aa3251ade0c0a3e047e7b60fcab4dbb7e6a601afaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_133ad1d2bfa91df882cd0aa3251ade0c0a3e047e7b60fcab4dbb7e6a601afaec->leave($__internal_133ad1d2bfa91df882cd0aa3251ade0c0a3e047e7b60fcab4dbb7e6a601afaec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_caccb7f30b38201588f2ce4dbe0fbbbd7d2bdf37971bb4d6db98742fc1bcb3fa = $this->env->getExtension("native_profiler");
        $__internal_caccb7f30b38201588f2ce4dbe0fbbbd7d2bdf37971bb4d6db98742fc1bcb3fa->enter($__internal_caccb7f30b38201588f2ce4dbe0fbbbd7d2bdf37971bb4d6db98742fc1bcb3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_caccb7f30b38201588f2ce4dbe0fbbbd7d2bdf37971bb4d6db98742fc1bcb3fa->leave($__internal_caccb7f30b38201588f2ce4dbe0fbbbd7d2bdf37971bb4d6db98742fc1bcb3fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
