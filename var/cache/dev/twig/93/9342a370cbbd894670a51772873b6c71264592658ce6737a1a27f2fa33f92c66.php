<?php

/* default/form.html.twig */
class __TwigTemplate_d298d110f879ad14c9391a121806fb6eeaa92da4553d0499c3f8d4a5b1e71299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/form.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2a0888bab60bbe182418c4d5f43ad72f118d95ca61f7102ee5d53985d252104 = $this->env->getExtension("native_profiler");
        $__internal_d2a0888bab60bbe182418c4d5f43ad72f118d95ca61f7102ee5d53985d252104->enter($__internal_d2a0888bab60bbe182418c4d5f43ad72f118d95ca61f7102ee5d53985d252104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a0888bab60bbe182418c4d5f43ad72f118d95ca61f7102ee5d53985d252104->leave($__internal_d2a0888bab60bbe182418c4d5f43ad72f118d95ca61f7102ee5d53985d252104_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_0fdc7570217249d48111d7bd4c214d7cb141c4b05861b66850dc413c109d77b3 = $this->env->getExtension("native_profiler");
        $__internal_0fdc7570217249d48111d7bd4c214d7cb141c4b05861b66850dc413c109d77b3->enter($__internal_0fdc7570217249d48111d7bd4c214d7cb141c4b05861b66850dc413c109d77b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <div class=\"status-post\"></div>
  <form method=\"POST\" name=\"vdm\">
    <input type=\"text\" class=\"input input-pseudo\" placeholder=\"Votre pseudo\" name=\"champ-pseudo\">
    <input type=\"text\" class=\"input input-title\" placeholder=\"Titre de la VDM\" name=\"champ-titre\">
    <textarea type=\"text\" class=\"input input-content\" placeholder=\"Contenu\" rows=\"4\" name=\"champ-content\"></textarea>
    <input type=\"submit\" value=\"Poster une VDM\" id=\"butn-submit\">
  </form>
";
        
        $__internal_0fdc7570217249d48111d7bd4c214d7cb141c4b05861b66850dc413c109d77b3->leave($__internal_0fdc7570217249d48111d7bd4c214d7cb141c4b05861b66850dc413c109d77b3_prof);

    }

    public function getTemplateName()
    {
        return "default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block container %}*/
/*   <div class="status-post"></div>*/
/*   <form method="POST" name="vdm">*/
/*     <input type="text" class="input input-pseudo" placeholder="Votre pseudo" name="champ-pseudo">*/
/*     <input type="text" class="input input-title" placeholder="Titre de la VDM" name="champ-titre">*/
/*     <textarea type="text" class="input input-content" placeholder="Contenu" rows="4" name="champ-content"></textarea>*/
/*     <input type="submit" value="Poster une VDM" id="butn-submit">*/
/*   </form>*/
/* {% endblock %}*/
/* */
