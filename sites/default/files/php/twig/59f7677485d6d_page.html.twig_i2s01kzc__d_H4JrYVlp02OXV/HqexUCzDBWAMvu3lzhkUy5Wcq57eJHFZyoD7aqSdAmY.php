<?php

/* themes/bhagya fixd/page.html.twig */
class __TwigTemplate_fecbc8f9aab3ce2111f3c942a2d86a2fec76b16e5cc942c51353619478b8a53b extends Twig_Template
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
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array()), "html", null, true));
        echo "
        </ul>

        <div class=\"clearfix\"> </div>
       </div>
       <!---->
         <div class=\"cart box_1\">
         ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_login", array()), "html", null, true));
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "frontimage", array()), "html", null, true));
        echo "
   </div>
</div>
<!---->



<div class=\"welcome\">
   <div class=\"container\">
     <div class=\"col-md-3 welcome-left\">
       ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
        echo "
     </div>
     <div class=\"col-md-9 welcome-right\">
       ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar2", array()), "html", null, true));
        echo "
     </div>
   </div>
   <div class=\"container\" style=\"padding-left: 400px\">
     <div class=\"col-md-8\">
       ";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "solr_search", array()), "html", null, true));
        echo "
     </div>
   </div>  
</div>
<!---->

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facet1", array()), "html", null, true));
        echo "
  </div>
  
  <div class=\"col-md-2\">
    ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facet2", array()), "html", null, true));
        echo "
  </div>

  <div class=\"col-md-2\">
    ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facet3", array()), "html", null, true));
        echo "
  </div>

  <div class=\"col-md-3\">
    ";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "facet4", array()), "html", null, true));
        echo "
  </div>

</div>

<!--->
<div class=\"bride-grids\">
   <div class=\"container\">
  
     ";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images", array()), "html", null, true));
        echo "
   </div>
</div>
<!---->
<div class=\"featured\">
  
      ";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "arrival_heading", array()), "html", null, true));
        echo "
   
   
      ";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "new_arrivals", array()), "html", null, true));
        echo "
   
   
      ";
        // line 114
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "classification_heading", array()), "html", null, true));
        echo "
   
   
     ";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "classification", array()), "html", null, true));
        echo "  

 
   
   </div>
</div>

<div class=\"container\" >
     <div class=\"col-md-12\">
       ";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_region", array()), "html", null, true));
        echo "
     </div>
</div>  




<div class=\"footer\">
   <div class=\"container\">
     <div class=\"ftr-grids\">
       <div class=\"col-md-3 ftr-grid\">
         ";
        // line 137
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_us", array()), "html", null, true));
        echo "
       </div>
       <div class=\"col-md-3 ftr-grid\">
         ";
        // line 140
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "important_links", array()), "html", null, true));
        echo "
       </div>
       <div class=\"col-md-3 ftr-grid\">
         ";
        // line 143
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "more_information", array()), "html", null, true));
        echo "
       </div>
       <div class=\"col-md-3 ftr-grid\">
         ";
        // line 146
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertisements", array()), "html", null, true));
        echo "
       </div>
       
       <div class=\"clearfix\"></div>
     </div>   
   </div>
</div>


<!---->

 <div class=\"copywrite\">
        <div class=\"col-md-12 ftr-grid\">
         ";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom1", array()), "html", null, true));
        echo "
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
        return array (  263 => 159,  247 => 146,  241 => 143,  235 => 140,  229 => 137,  215 => 126,  203 => 117,  197 => 114,  191 => 111,  185 => 108,  176 => 102,  164 => 93,  157 => 89,  150 => 85,  143 => 81,  132 => 73,  124 => 68,  118 => 65,  105 => 55,  86 => 39,  76 => 32,  43 => 1,);
    }

    public function getSource()
    {
        return "
 
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
           {{ page.main_navigation}}
        </ul>

        <div class=\"clearfix\"> </div>
       </div>
       <!---->
         <div class=\"cart box_1\">
         {{ page.user_login }}
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
      {{ page.frontimage }}
   </div>
</div>
<!---->



<div class=\"welcome\">
   <div class=\"container\">
     <div class=\"col-md-3 welcome-left\">
       {{ page.sidebar }}
     </div>
     <div class=\"col-md-9 welcome-right\">
       {{ page.sidebar2 }}
     </div>
   </div>
   <div class=\"container\" style=\"padding-left: 400px\">
     <div class=\"col-md-8\">
       {{ page.solr_search }}
     </div>
   </div>  
</div>
<!---->

<div class=\"row\">
  <div class=\"col-md-3\">
    {{ page.facet1 }}
  </div>
  
  <div class=\"col-md-2\">
    {{ page.facet2 }}
  </div>

  <div class=\"col-md-2\">
    {{ page.facet3 }}
  </div>

  <div class=\"col-md-3\">
    {{ page.facet4 }}
  </div>

</div>

<!--->
<div class=\"bride-grids\">
   <div class=\"container\">
  
     {{ page.images }}
   </div>
</div>
<!---->
<div class=\"featured\">
  
      {{ page.arrival_heading }}
   
   
      {{ page.new_arrivals }}
   
   
      {{ page.classification_heading }}
   
   
     {{ page.classification}}  

 
   
   </div>
</div>

<div class=\"container\" >
     <div class=\"col-md-12\">
       {{ page.main_region }}
     </div>
</div>  




<div class=\"footer\">
   <div class=\"container\">
     <div class=\"ftr-grids\">
       <div class=\"col-md-3 ftr-grid\">
         {{ page.contact_us }}
       </div>
       <div class=\"col-md-3 ftr-grid\">
         {{ page.important_links }}
       </div>
       <div class=\"col-md-3 ftr-grid\">
         {{ page.more_information }}
       </div>
       <div class=\"col-md-3 ftr-grid\">
         {{ page.advertisements  }}
       </div>
       
       <div class=\"clearfix\"></div>
     </div>   
   </div>
</div>


<!---->

 <div class=\"copywrite\">
        <div class=\"col-md-12 ftr-grid\">
         {{ page.footer_bottom1 }}
       </div>
       
  </div> 
</div>    
";
    }
}
