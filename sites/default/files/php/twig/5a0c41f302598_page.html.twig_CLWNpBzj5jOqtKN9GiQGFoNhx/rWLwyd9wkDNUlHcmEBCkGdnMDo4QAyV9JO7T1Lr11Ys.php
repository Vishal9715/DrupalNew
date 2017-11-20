<?php

/* themes/bhagya fixd/page.html.twig */
class __TwigTemplate_72b86452b161095cea533ddddb1e98be1432d6c0403fb353eadb72fb6e56706a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "
 
<!--header--> 


<div class=\"top_bg\">
  <div class=\"container\">
    <div class=\"header_top-sec\">
      <div class=\"top_right\">
        
      </div>
      <div class=\"top_left\">
        
      </div>
        <div class=\"clearfix\"> </div>
    </div>
  </div>
</div>

 

<div class=\"header-top\">
   <div class=\"header-bottom\">
     <div class=\"container\">      
        <div class=\"logo\">
          <a href=\"index.html\"><h1>Market Place</h1></a>
        </div>
       <!---->
       <div class=\"top-nav\">
        
        <ul class=\"nav nav-pills\">
           ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_navigation", array()), "html", null, true));
        echo "
        </ul>

        <div class=\"clearfix\"> </div>
       </div>
       <!---->
         <div class=\"cart box_1\">
         ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "user_login", array()), "html", null, true));
        echo "
        <div class=\"clearfix\"> </div>
       </div> 

       <div class=\"clearfix\"> </div>
       <!---->       
       </div>
      <div class=\"clearfix\"> </div>
    </div>
</div>
<!---->



<div class=\"banner\">
   <div class=\"container\">
      ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "frontimage", array()), "html", null, true));
        echo "
   </div>
</div>
<!---->



<div class=\"welcome\">
   <div class=\"container\">
     <div class=\"col-md-3 welcome-left\">
       ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
        echo "
     </div>
     <div class=\"col-md-9 welcome-right\">
       ";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar2", array()), "html", null, true));
        echo "
     </div>
   </div>
   <div class=\"container\" style=\"padding-left: 400px\">
     <div class=\"col-md-8\">
       ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "solr_search", array()), "html", null, true));
        echo "
     </div>
   </div>  
</div>
<!---->

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "facet1", array()), "html", null, true));
        echo "
  </div>
  
  <div class=\"col-md-2\">
    ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "facet2", array()), "html", null, true));
        echo "
  </div>

  <div class=\"col-md-2\">
    ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "facet3", array()), "html", null, true));
        echo "
  </div>

  <div class=\"col-md-3\">
    ";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "facet4", array()), "html", null, true));
        echo "
  </div>

</div>

<!--->
<div class=\"bride-grids\">
   <div class=\"container\">
  
     ";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "images", array()), "html", null, true));
        echo "
   </div>
</div>
<!---->
<div class=\"featured\">
  
      ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "arrival_heading", array()), "html", null, true));
        echo "
   
   
      ";
        // line 111
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "new_arrivals", array()), "html", null, true));
        echo "
   
   
      ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "classification_heading", array()), "html", null, true));
        echo "
   
   
     ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "classification", array()), "html", null, true));
        echo "  

 
   
   </div>
</div>

<div class=\"container\" >
     <div class=\"col-md-12\">
       ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_region", array()), "html", null, true));
        echo "
     </div>
</div>  




<!---->
 <div class=\"copywrite\">
 <div class=\"container\">
        
        <div class=\"col-md-4\">
         ";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom1", array()), "html", null, true));
        echo "
        </div>
        <div class=\"col-md-5\">
         ";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom2", array()), "html", null, true));
        echo "
        </div>
        <div class=\"col-md-3\">
         ";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom3", array()), "html", null, true));
        echo "
        </div>
 </div>      
 </div>  
</div>    
";
    }

    public function getTemplateName()
    {
        return "themes/bhagya fixd/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 144,  236 => 141,  230 => 138,  215 => 126,  203 => 117,  197 => 114,  191 => 111,  185 => 108,  176 => 102,  164 => 93,  157 => 89,  150 => 85,  143 => 81,  132 => 73,  124 => 68,  118 => 65,  105 => 55,  86 => 39,  76 => 32,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bhagya fixd/page.html.twig", "/var/www/html/interns-localbackup/vishal/DrupalNew/themes/bhagya fixd/page.html.twig");
    }
}
