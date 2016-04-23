<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a2655329ade9278722e08821894eb4f985a99a867aca14c30d6ca3699e827b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb7de1ce7213d076b229db508775cad715267af6ef050e74f020a17818c2fdd8 = $this->env->getExtension("native_profiler");
        $__internal_eb7de1ce7213d076b229db508775cad715267af6ef050e74f020a17818c2fdd8->enter($__internal_eb7de1ce7213d076b229db508775cad715267af6ef050e74f020a17818c2fdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb7de1ce7213d076b229db508775cad715267af6ef050e74f020a17818c2fdd8->leave($__internal_eb7de1ce7213d076b229db508775cad715267af6ef050e74f020a17818c2fdd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79c0ae6f422d6640b0feef97b05b5e8a13514a7d48fcdb57053880eb844a24bc = $this->env->getExtension("native_profiler");
        $__internal_79c0ae6f422d6640b0feef97b05b5e8a13514a7d48fcdb57053880eb844a24bc->enter($__internal_79c0ae6f422d6640b0feef97b05b5e8a13514a7d48fcdb57053880eb844a24bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79c0ae6f422d6640b0feef97b05b5e8a13514a7d48fcdb57053880eb844a24bc->leave($__internal_79c0ae6f422d6640b0feef97b05b5e8a13514a7d48fcdb57053880eb844a24bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_679c2e3118a058473b5420e17a81c2aa9f38f7809639a0a29cf0b7812d3cc470 = $this->env->getExtension("native_profiler");
        $__internal_679c2e3118a058473b5420e17a81c2aa9f38f7809639a0a29cf0b7812d3cc470->enter($__internal_679c2e3118a058473b5420e17a81c2aa9f38f7809639a0a29cf0b7812d3cc470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_679c2e3118a058473b5420e17a81c2aa9f38f7809639a0a29cf0b7812d3cc470->leave($__internal_679c2e3118a058473b5420e17a81c2aa9f38f7809639a0a29cf0b7812d3cc470_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_77779d2a069123b89798a9c4c03b9e30a8ab94c77fd6d0252e9f08b613fa34ef = $this->env->getExtension("native_profiler");
        $__internal_77779d2a069123b89798a9c4c03b9e30a8ab94c77fd6d0252e9f08b613fa34ef->enter($__internal_77779d2a069123b89798a9c4c03b9e30a8ab94c77fd6d0252e9f08b613fa34ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_77779d2a069123b89798a9c4c03b9e30a8ab94c77fd6d0252e9f08b613fa34ef->leave($__internal_77779d2a069123b89798a9c4c03b9e30a8ab94c77fd6d0252e9f08b613fa34ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
