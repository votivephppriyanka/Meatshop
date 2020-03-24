<?php

/* common/footer.twig */
class __TwigTemplate_2d9a594b01e4ca08d8e16784633b635485762f63096dc87c41b35eef3ea0f4f3 extends Twig_Template
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
        // line 1
        echo "<footer>
  <div class=\"container\">
    <a href=\"https://www.opencartarab.com\" target=\"_blank\">";
        // line 3
        echo (isset($context["text_project_arab"]) ? $context["text_project_arab"] : null);
        echo "</a>|<a href=\"http://www.opencart.com\" target=\"_blank\">";
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://docs.opencart.com/en-gb/introduction/\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"http://forum.opencart.com\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br />
  </div>
</footer>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <a href="https://www.opencartarab.com" target="_blank">{{text_project_arab}}</a>|<a href="http://www.opencart.com" target="_blank">{{ text_project }}</a>|<a href="http://docs.opencart.com/en-gb/introduction/" target="_blank">{{ text_documentation }}</a>|<a href="http://forum.opencart.com" target="_blank">{{ text_support }}</a><br />*/
/*   </div>*/
/* </footer>*/
/* </body></html>*/
/* */
