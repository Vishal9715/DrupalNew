<?php

/* modules/contrib/facets/templates/facets-result-item.html.twig */
class __TwigTemplate_98bcc2d479b99379889321df72412826b2061ccbc0ae564743db7e99f73bdc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        if (($context["is_active"] ?? null)) {
            // line 16
            echo "  <span class=\"facet-item__status js-facet-deactivate\">(-)</span>
";
        }
        // line 18
        echo "<span class=\"facet-item__value\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true));
        echo "</span>
";
        // line 19
        if (($context["show_count"] ?? null)) {
            // line 20
            echo "  <span class=\"facet-item__count\">(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["count"] ?? null), "html", null, true));
            echo ")</span>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/facets/templates/facets-result-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  54 => 19,  49 => 18,  45 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/facets/templates/facets-result-item.html.twig", "/var/www/html/interns-localbackup/vishal/DrupalNew/modules/contrib/facets/templates/facets-result-item.html.twig");
    }
}
