<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c46df9c6105d8d3d332071e945d588f07c6d98ae6505bc44bf782a06292d62cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f28ddea4ba3f6fa8f9d1b0d7e42850c677e443bc4cf77a1f26f05d846998f22 = $this->env->getExtension("native_profiler");
        $__internal_6f28ddea4ba3f6fa8f9d1b0d7e42850c677e443bc4cf77a1f26f05d846998f22->enter($__internal_6f28ddea4ba3f6fa8f9d1b0d7e42850c677e443bc4cf77a1f26f05d846998f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f28ddea4ba3f6fa8f9d1b0d7e42850c677e443bc4cf77a1f26f05d846998f22->leave($__internal_6f28ddea4ba3f6fa8f9d1b0d7e42850c677e443bc4cf77a1f26f05d846998f22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_267bd8d8a10940f0e3f2516f374bdf71b97c464462822f29db4b56aeae48c3c2 = $this->env->getExtension("native_profiler");
        $__internal_267bd8d8a10940f0e3f2516f374bdf71b97c464462822f29db4b56aeae48c3c2->enter($__internal_267bd8d8a10940f0e3f2516f374bdf71b97c464462822f29db4b56aeae48c3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_267bd8d8a10940f0e3f2516f374bdf71b97c464462822f29db4b56aeae48c3c2->leave($__internal_267bd8d8a10940f0e3f2516f374bdf71b97c464462822f29db4b56aeae48c3c2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3caea5f91ce4e14579cc14cec75b9ea8fff0a3b41299363954e072dcadb2fc2e = $this->env->getExtension("native_profiler");
        $__internal_3caea5f91ce4e14579cc14cec75b9ea8fff0a3b41299363954e072dcadb2fc2e->enter($__internal_3caea5f91ce4e14579cc14cec75b9ea8fff0a3b41299363954e072dcadb2fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3caea5f91ce4e14579cc14cec75b9ea8fff0a3b41299363954e072dcadb2fc2e->leave($__internal_3caea5f91ce4e14579cc14cec75b9ea8fff0a3b41299363954e072dcadb2fc2e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca34de9bdd3b3c6a651543ed9ae6410f46c355b40014584a0b0c8be00009d88d = $this->env->getExtension("native_profiler");
        $__internal_ca34de9bdd3b3c6a651543ed9ae6410f46c355b40014584a0b0c8be00009d88d->enter($__internal_ca34de9bdd3b3c6a651543ed9ae6410f46c355b40014584a0b0c8be00009d88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ca34de9bdd3b3c6a651543ed9ae6410f46c355b40014584a0b0c8be00009d88d->leave($__internal_ca34de9bdd3b3c6a651543ed9ae6410f46c355b40014584a0b0c8be00009d88d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
