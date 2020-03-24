<?php

/* catalog/product_form.twig */
class __TwigTemplate_97452dc62cb4fba48b3543431d7be5103960d14fd44d73e4d87789c2f140f606 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-product-filter\" data-toggle=\"tab\">Tab Product Filter</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_recurring"]) ? $context["tab_recurring"] : null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_discount"]) ? $context["tab_discount"] : null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                  <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 52
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                        ";
            // line 55
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 56
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                        ";
            }
            // line 57
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 60
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 62
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                        ";
            // line 69
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 70
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                        ";
            }
            // line 71
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 74
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 76
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 80
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 82
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 86
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 88
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 96
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 98
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 99
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 100
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                  ";
        }
        // line 101
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 104
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 106
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 110
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 112
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 116
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 118
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 122
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 124
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 128
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 130
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 134
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 136
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 140
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 142
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 146
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 148
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 152
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 155
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>


                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 159
            echo "                      ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["tax_class_id"]) ? $context["tax_class_id"] : null))) {
                // line 160
                echo "

                        <option value=\"";
                // line 162
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>


                      ";
            } else {
                // line 166
                echo "

                        <option value=\"";
                // line 168
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>


                      ";
            }
            // line 172
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 179
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 181
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 185
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 187
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 191
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 196
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 197
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 199
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 200
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>


                    ";
        } else {
            // line 204
            echo "

                      <option value=\"1\">";
            // line 206
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 207
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>


                    ";
        }
        // line 211
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 217
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 223
            echo "                      ";
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 224
                echo "

                        <option value=\"";
                // line 226
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>


                      ";
            } else {
                // line 230
                echo "

                        <option value=\"";
                // line 232
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>


                      ";
            }
            // line 236
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 243
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 245
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 246
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 247
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 249
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 250
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 251
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 252
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 253
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 255
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 256
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 257
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 261
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 264
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 270
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 274
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 277
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 280
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 286
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 292
            echo "                      ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 293
                echo "

                        <option value=\"";
                // line 295
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>


                      ";
            } else {
                // line 299
                echo "

                        <option value=\"";
                // line 301
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>


                      ";
            }
            // line 305
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 312
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 314
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 318
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 324
            echo "                      ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 325
                echo "

                        <option value=\"";
                // line 327
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>


                      ";
            } else {
                // line 331
                echo "

                        <option value=\"";
                // line 333
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>


                      ";
            }
            // line 337
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 344
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 349
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 350
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 352
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 353
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>


                    ";
        } else {
            // line 357
            echo "

                      <option value=\"1\">";
            // line 359
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 360
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>


                    ";
        }
        // line 364
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 370
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 372
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 378
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 380
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 384
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 386
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 388
            echo "                      <div id=\"product-category";
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_category"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 389
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 395
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 397
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 399
            echo "                      <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 400
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 406
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 409
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 410
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 411
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\"/>
                            ";
                // line 412
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                          ";
            } else {
                // line 414
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\"/>
                            ";
                // line 415
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                          ";
            }
            // line 416
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 422
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 424
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 426
            echo "                      <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 427
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 433
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 435
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 437
            echo "                      <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 438
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 449
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 450
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 456
        $context["attribute_row"] = 0;
        // line 457
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 458
            echo "                      <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 459
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 461
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 463
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 464
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 466
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
            // line 467
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 473
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 483
        $context["option_row"] = 0;
        // line 484
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 485
            echo "                      <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "</a></li>
                      ";
            // line 486
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 487
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 489
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 494
        $context["option_row"] = 0;
        // line 495
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 496
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 497
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 498
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\" value=\"";
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 500
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 502
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\" id=\"input-required";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\">


                              ";
            // line 505
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 506
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 508
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                                <option value=\"0\">";
                // line 509
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>


                              ";
            } else {
                // line 513
                echo "

                                <option value=\"1\">";
                // line 515
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 516
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>


                              ";
            }
            // line 520
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 525
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 526
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 527
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 529
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 533
            echo "                        ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 534
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 535
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 537
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 541
            echo "                        ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 542
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 543
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 545
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 549
            echo "                        ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 550
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 551
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 554
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 560
            echo "                        ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 561
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 562
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 565
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 571
            echo "                        ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 572
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 573
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 576
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 582
            echo "                        ";
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 583
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 584
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 587
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 588
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 589
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 590
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 591
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 592
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 598
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 599
                    echo "                                  <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 600
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 603
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 604
                        echo "
                                          ";
                        // line 605
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 606
                            echo "
                                            ";
                            // line 607
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 608
                                echo "

                                              <option value=\"";
                                // line 610
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>


                                            ";
                            } else {
                                // line 614
                                echo "

                                              <option value=\"";
                                // line 616
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>


                                            ";
                            }
                            // line 620
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 621
                        echo "                                        ";
                    }
                    // line 622
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 624
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 625
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 626
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 629
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 630
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 632
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 633
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>


                                        ";
                    } else {
                        // line 637
                        echo "

                                          <option value=\"1\">";
                        // line 639
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 640
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>


                                        ";
                    }
                    // line 644
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 647
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 650
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 651
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 657
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 663
                    echo "                                        ";
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 664
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 670
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 676
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 678
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 679
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 682
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 683
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 689
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 695
                    echo "                                        ";
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 696
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 702
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 708
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 710
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 711
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 714
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 715
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 721
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 727
                    echo "                                        ";
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 728
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 734
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 740
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 742
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 743
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 745
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                    // line 746
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 747
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 752
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 757
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">


                            ";
                // line 760
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 761
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 762
                        echo "

                                <option value=\"";
                        // line 764
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 768
                    echo "                            ";
                }
                // line 769
                echo "

                          </select>
                        ";
            }
            // line 772
            echo " </div>
                      ";
            // line 773
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 774
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 783
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 784
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 790
        $context["recurring_row"] = 0;
        // line 791
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 792
            echo "                      <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 793
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 796
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 797
                echo "                              ";
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 798
                    echo "

                                <option value=\"";
                    // line 800
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>


                              ";
                } else {
                    // line 804
                    echo "

                                <option value=\"";
                    // line 806
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>


                              ";
                }
                // line 810
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 811
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 814
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 817
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 818
                echo "                              ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 819
                    echo "

                                <option value=\"";
                    // line 821
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                              ";
                } else {
                    // line 825
                    echo "

                                <option value=\"";
                    // line 827
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                              ";
                }
                // line 831
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 832
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 835
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 837
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
            // line 838
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 844
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 855
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 856
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 857
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 858
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 859
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 860
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 866
        $context["discount_row"] = 0;
        // line 867
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 868
            echo "                      <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 869
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 870
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 871
                echo "                              ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 872
                    echo "                                <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                              ";
                } else {
                    // line 874
                    echo "                                <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                              ";
                }
                // line 876
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 877
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 878
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 879
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 880
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 883
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 889
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 893
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 895
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
            // line 896
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 897
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 902
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 913
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 914
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 915
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 916
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 917
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 923
        $context["special_row"] = 0;
        // line 924
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 925
            echo "                      <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 926
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 929
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 930
                echo "                              ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 931
                    echo "

                                <option value=\"";
                    // line 933
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                              ";
                } else {
                    // line 937
                    echo "

                                <option value=\"";
                    // line 939
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                              ";
                }
                // line 943
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 944
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 947
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 948
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 951
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 957
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 961
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 963
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
            // line 964
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 965
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 970
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 981
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 986
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 995
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 996
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1002
        $context["image_row"] = 0;
        // line 1003
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1004
            echo "                      <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1005
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1006
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1007
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1009
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 1010
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1016
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1024
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1026
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1033
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1034
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1040
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1041
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1042
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\" value=\"";
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1051
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1056
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1057
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1061
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1062
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1063
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                        <td class=\"text-left\">";
            // line 1064
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1065
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1067
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 1068
                    echo "                              <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                            ";
                }
                // line 1070
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1073
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1083
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1084
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1088
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1089
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1090
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1091
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1095
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1096
                echo "                              ";
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 1097
                    echo "

                                <option value=\"";
                    // line 1099
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>


                              ";
                } else {
                    // line 1103
                    echo "

                                <option value=\"";
                    // line 1105
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>


                              ";
                }
                // line 1109
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1110
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1115
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1138
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1143
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1165
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1194
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1223
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1252
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1278
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1282
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1285
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1287
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1288
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1302
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1327
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1332
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1355
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1357
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1358
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1364
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1365
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1371
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1372
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1378
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1379
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1385
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1386
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1392
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1393
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1399
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1400
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1409
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1410
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1411
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1412
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1413
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1414
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1423
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1451
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1456
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1461
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1471
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1478
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1480
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1481
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1487
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1492
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1497
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1498
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1509
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1514
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1515
            echo "\t  html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1517
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1518
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1519
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1520
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1521
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1522
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1523
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1537
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1542
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1543
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1545
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1546
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1547
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1548
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1549
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1550
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1556
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1565
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1569
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1570
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1571
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1581
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1588
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1590
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1594
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1595
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1597
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1600
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1612
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1617
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1622
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>
";
        // line 1632
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3629 => 1632,  3616 => 1622,  3608 => 1617,  3600 => 1612,  3585 => 1600,  3580 => 1597,  3569 => 1595,  3565 => 1594,  3559 => 1590,  3548 => 1588,  3544 => 1587,  3535 => 1581,  3522 => 1571,  3518 => 1570,  3512 => 1569,  3505 => 1565,  3493 => 1556,  3484 => 1550,  3480 => 1549,  3476 => 1548,  3472 => 1547,  3468 => 1546,  3465 => 1545,  3454 => 1543,  3450 => 1542,  3442 => 1537,  3425 => 1523,  3421 => 1522,  3417 => 1521,  3413 => 1520,  3409 => 1519,  3405 => 1518,  3402 => 1517,  3391 => 1515,  3387 => 1514,  3379 => 1509,  3365 => 1498,  3361 => 1497,  3353 => 1492,  3345 => 1487,  3336 => 1481,  3332 => 1480,  3327 => 1478,  3317 => 1471,  3304 => 1461,  3296 => 1456,  3288 => 1451,  3257 => 1423,  3245 => 1414,  3241 => 1413,  3237 => 1412,  3233 => 1411,  3229 => 1410,  3225 => 1409,  3213 => 1400,  3209 => 1399,  3200 => 1393,  3196 => 1392,  3187 => 1386,  3183 => 1385,  3174 => 1379,  3170 => 1378,  3161 => 1372,  3157 => 1371,  3148 => 1365,  3144 => 1364,  3135 => 1358,  3131 => 1357,  3126 => 1355,  3100 => 1332,  3092 => 1327,  3064 => 1302,  3047 => 1288,  3044 => 1287,  3027 => 1285,  3023 => 1284,  3018 => 1282,  3011 => 1278,  2982 => 1252,  2950 => 1223,  2918 => 1194,  2886 => 1165,  2861 => 1143,  2853 => 1138,  2828 => 1115,  2818 => 1110,  2812 => 1109,  2803 => 1105,  2799 => 1103,  2790 => 1099,  2786 => 1097,  2783 => 1096,  2779 => 1095,  2772 => 1091,  2768 => 1090,  2765 => 1089,  2761 => 1088,  2754 => 1084,  2750 => 1083,  2738 => 1073,  2725 => 1070,  2719 => 1068,  2717 => 1067,  2697 => 1065,  2693 => 1064,  2689 => 1063,  2686 => 1062,  2682 => 1061,  2675 => 1057,  2671 => 1056,  2663 => 1051,  2655 => 1045,  2644 => 1042,  2640 => 1041,  2637 => 1040,  2633 => 1039,  2625 => 1034,  2621 => 1033,  2609 => 1026,  2602 => 1024,  2591 => 1016,  2584 => 1011,  2578 => 1010,  2576 => 1009,  2569 => 1007,  2561 => 1006,  2547 => 1005,  2542 => 1004,  2537 => 1003,  2535 => 1002,  2526 => 996,  2522 => 995,  2506 => 986,  2498 => 981,  2484 => 970,  2477 => 965,  2471 => 964,  2469 => 963,  2462 => 961,  2451 => 957,  2438 => 951,  2428 => 948,  2420 => 947,  2415 => 944,  2409 => 943,  2400 => 939,  2396 => 937,  2387 => 933,  2383 => 931,  2380 => 930,  2376 => 929,  2370 => 926,  2365 => 925,  2360 => 924,  2358 => 923,  2349 => 917,  2345 => 916,  2341 => 915,  2337 => 914,  2333 => 913,  2319 => 902,  2312 => 897,  2306 => 896,  2304 => 895,  2297 => 893,  2286 => 889,  2273 => 883,  2263 => 880,  2255 => 879,  2247 => 878,  2244 => 877,  2238 => 876,  2230 => 874,  2222 => 872,  2219 => 871,  2215 => 870,  2211 => 869,  2206 => 868,  2201 => 867,  2199 => 866,  2190 => 860,  2186 => 859,  2182 => 858,  2178 => 857,  2174 => 856,  2170 => 855,  2156 => 844,  2149 => 839,  2143 => 838,  2141 => 837,  2134 => 835,  2129 => 832,  2123 => 831,  2114 => 827,  2110 => 825,  2101 => 821,  2097 => 819,  2094 => 818,  2090 => 817,  2084 => 814,  2079 => 811,  2073 => 810,  2064 => 806,  2060 => 804,  2051 => 800,  2047 => 798,  2044 => 797,  2040 => 796,  2034 => 793,  2029 => 792,  2024 => 791,  2022 => 790,  2013 => 784,  2009 => 783,  1993 => 774,  1991 => 773,  1988 => 772,  1982 => 769,  1979 => 768,  1967 => 764,  1963 => 762,  1958 => 761,  1956 => 760,  1950 => 757,  1940 => 752,  1933 => 747,  1927 => 746,  1925 => 745,  1918 => 743,  1908 => 742,  1904 => 740,  1896 => 734,  1888 => 728,  1885 => 727,  1877 => 721,  1869 => 715,  1867 => 714,  1859 => 711,  1849 => 710,  1845 => 708,  1837 => 702,  1829 => 696,  1826 => 695,  1818 => 689,  1810 => 683,  1808 => 682,  1800 => 679,  1790 => 678,  1786 => 676,  1778 => 670,  1770 => 664,  1767 => 663,  1759 => 657,  1751 => 651,  1749 => 650,  1741 => 647,  1736 => 644,  1729 => 640,  1725 => 639,  1721 => 637,  1714 => 633,  1710 => 632,  1706 => 630,  1704 => 629,  1696 => 626,  1686 => 625,  1678 => 624,  1674 => 622,  1671 => 621,  1665 => 620,  1656 => 616,  1652 => 614,  1643 => 610,  1639 => 608,  1637 => 607,  1634 => 606,  1630 => 605,  1627 => 604,  1625 => 603,  1617 => 600,  1612 => 599,  1608 => 598,  1599 => 592,  1595 => 591,  1591 => 590,  1587 => 589,  1583 => 588,  1579 => 587,  1573 => 584,  1570 => 583,  1567 => 582,  1552 => 576,  1544 => 573,  1541 => 572,  1538 => 571,  1523 => 565,  1515 => 562,  1512 => 561,  1509 => 560,  1494 => 554,  1486 => 551,  1483 => 550,  1480 => 549,  1467 => 545,  1460 => 543,  1457 => 542,  1454 => 541,  1441 => 537,  1434 => 535,  1431 => 534,  1428 => 533,  1415 => 529,  1408 => 527,  1405 => 526,  1403 => 525,  1396 => 520,  1389 => 516,  1385 => 515,  1381 => 513,  1374 => 509,  1370 => 508,  1366 => 506,  1364 => 505,  1356 => 502,  1349 => 500,  1330 => 498,  1325 => 497,  1320 => 496,  1317 => 495,  1315 => 494,  1307 => 489,  1304 => 488,  1298 => 487,  1296 => 486,  1285 => 485,  1280 => 484,  1278 => 483,  1265 => 473,  1258 => 468,  1252 => 467,  1250 => 466,  1243 => 464,  1240 => 463,  1218 => 461,  1214 => 460,  1202 => 459,  1197 => 458,  1192 => 457,  1190 => 456,  1181 => 450,  1177 => 449,  1166 => 440,  1157 => 438,  1150 => 437,  1146 => 436,  1142 => 435,  1135 => 433,  1129 => 429,  1120 => 427,  1113 => 426,  1109 => 425,  1105 => 424,  1098 => 422,  1092 => 418,  1084 => 416,  1079 => 415,  1074 => 414,  1069 => 412,  1064 => 411,  1062 => 410,  1059 => 409,  1055 => 408,  1050 => 406,  1044 => 402,  1035 => 400,  1028 => 399,  1024 => 398,  1020 => 397,  1013 => 395,  1007 => 391,  998 => 389,  991 => 388,  987 => 387,  983 => 386,  976 => 384,  965 => 380,  958 => 378,  947 => 372,  942 => 370,  934 => 364,  927 => 360,  923 => 359,  919 => 357,  912 => 353,  908 => 352,  904 => 350,  902 => 349,  894 => 344,  886 => 338,  880 => 337,  871 => 333,  867 => 331,  858 => 327,  854 => 325,  851 => 324,  847 => 323,  839 => 318,  830 => 314,  825 => 312,  817 => 306,  811 => 305,  802 => 301,  798 => 299,  789 => 295,  785 => 293,  782 => 292,  778 => 291,  770 => 286,  759 => 280,  751 => 277,  743 => 274,  736 => 270,  725 => 264,  719 => 261,  713 => 257,  708 => 256,  705 => 255,  700 => 253,  697 => 252,  694 => 251,  689 => 250,  686 => 249,  681 => 247,  678 => 246,  676 => 245,  671 => 243,  663 => 237,  657 => 236,  648 => 232,  644 => 230,  635 => 226,  631 => 224,  628 => 223,  624 => 222,  614 => 217,  606 => 211,  599 => 207,  595 => 206,  591 => 204,  584 => 200,  580 => 199,  576 => 197,  574 => 196,  566 => 191,  557 => 187,  550 => 185,  541 => 181,  536 => 179,  528 => 173,  522 => 172,  513 => 168,  509 => 166,  500 => 162,  496 => 160,  493 => 159,  489 => 158,  483 => 155,  477 => 152,  468 => 148,  463 => 146,  454 => 142,  449 => 140,  440 => 136,  433 => 134,  424 => 130,  417 => 128,  408 => 124,  401 => 122,  392 => 118,  385 => 116,  376 => 112,  369 => 110,  360 => 106,  353 => 104,  348 => 101,  342 => 100,  340 => 99,  334 => 98,  329 => 96,  323 => 92,  306 => 88,  297 => 86,  284 => 82,  277 => 80,  264 => 76,  257 => 74,  252 => 71,  246 => 70,  244 => 69,  234 => 68,  227 => 66,  212 => 62,  205 => 60,  200 => 57,  194 => 56,  192 => 55,  182 => 54,  175 => 52,  169 => 50,  165 => 49,  162 => 48,  145 => 46,  141 => 45,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-product-filter" data-toggle="tab">Tab Product Filter</a></li>*/
/*             <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>*/
/*             <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>*/
/*             <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                   <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">{% for language in languages %}*/
/*                   <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product_description[{{ language.language_id }}][name]" value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                         {% if error_name[language.language_id] %}*/
/*                           <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                         {% endif %} </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="product_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product_description[{{ language.language_id }}][meta_title]" value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control"/>*/
/*                         {% if error_meta_title[language.language_id] %}*/
/*                           <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                         {% endif %} </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="product_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="product_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-tag{{ language.language_id }}"><span data-toggle="tooltip" title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product_description[{{ language.language_id }}][tag]" value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}" placeholder="{{ entry_tag }}" id="input-tag{{ language.language_id }}" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control"/>*/
/*                   {% if error_model %}*/
/*                     <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}" id="input-sku" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}" id="input-upc" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}" id="input-ean" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}" id="input-jan" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}" id="input-isbn" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}" id="input-mpn" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-location">{{ entry_location }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="location" value="{{ location }}" placeholder="{{ entry_location }}" id="input-location" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="tax_class_id" id="input-tax-class" class="form-control">*/
/*                     <option value="0">{{ text_none }}</option>*/
/* */
/* */
/*                     {% for tax_class in tax_classes %}*/
/*                       {% if tax_class.tax_class_id == tax_class_id %}*/
/* */
/* */
/*                         <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="minimum" value="{{ minimum }}" placeholder="{{ entry_minimum }}" id="input-minimum" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-subtract">{{ entry_subtract }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="subtract" id="input-subtract" class="form-control">*/
/* */
/* */
/*                     {% if subtract %}*/
/* */
/* */
/*                       <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                       <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                     {% else %}*/
/* */
/* */
/*                       <option value="1">{{ text_yes }}</option>*/
/*                       <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                     {% endif %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/* */
/* */
/*                     {% for stock_status in stock_statuses %}*/
/*                       {% if stock_status.stock_status_id == stock_status_id %}*/
/* */
/* */
/*                         <option value="{{ stock_status.stock_status_id }}" selected="selected">{{ stock_status.name }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if shipping %}*/
/*                       <input type="radio" name="shipping" value="1" checked="checked"/>*/
/*                       {{ text_yes }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="shipping" value="1"/>*/
/*                       {{ text_yes }}*/
/*                     {% endif %} </label> <label class="radio-inline"> {% if not shipping %}*/
/*                       <input type="radio" name="shipping" value="0" checked="checked"/>*/
/*                       {{ text_no }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="shipping" value="0"/>*/
/*                       {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date_available }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control"/> <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="length" value="{{ length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="length_class_id" id="input-length-class" class="form-control">*/
/* */
/* */
/*                     {% for length_class in length_classes %}*/
/*                       {% if length_class.length_class_id == length_class_id %}*/
/* */
/* */
/*                         <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/* */
/* */
/*                     {% for weight_class in weight_classes %}*/
/*                       {% if weight_class.weight_class_id == weight_class_id %}*/
/* */
/* */
/*                         <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/* */
/* */
/*                     {% if status %}*/
/* */
/* */
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/* */
/* */
/*                     {% else %}*/
/* */
/* */
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* */
/* */
/*                     {% endif %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="manufacturer" value="{{ manufacturer }}" placeholder="{{ entry_manufacturer }}" id="input-manufacturer" class="form-control"/> <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control"/>*/
/*                   <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_category in product_categories %}*/
/*                       <div id="product-category{{ product_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ product_category.name }}*/
/*                         <input type="hidden" name="product_category[]" value="{{ product_category.category_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control"/>*/
/*                   <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_filter in product_filters %}*/
/*                       <div id="product-filter{{ product_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                         <input type="hidden" name="product_filter[]" value="{{ product_filter.filter_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if store.store_id in product_store %}*/
/*                             <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" checked="checked"/>*/
/*                             {{ store.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="product_store[]" value="{{ store.store_id }}"/>*/
/*                             {{ store.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control"/>*/
/*                   <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_download in product_downloads %}*/
/*                       <div id="product-download{{ product_download.download_id }}"><i class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                         <input type="hidden" name="product_download[]" value="{{ product_download.download_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control"/>*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                       <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                         <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_attribute }}</td>*/
/*                       <td class="text-left">{{ entry_text }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set attribute_row = 0 %}*/
/*                     {% for product_attribute in product_attributes %}*/
/*                       <tr id="attribute-row{{ attribute_row }}">*/
/*                         <td class="text-left" style="width: 40%;"><input type="text" name="product_attribute[{{ attribute_row }}][name]" value="{{ product_attribute.name }}" placeholder="{{ entry_attribute }}" class="form-control"/> <input type="hidden" name="product_attribute[{{ attribute_row }}][attribute_id]" value="{{ product_attribute.attribute_id }}"/></td>*/
/*                         <td class="text-left">{% for language in languages %}*/
/*                             <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span> <textarea name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                             </div>*/
/*                           {% endfor %}</td>*/
/*                         <td class="text-right"><button type="button" onclick="$('#attribute-row{{ attribute_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set attribute_row = attribute_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="{{ button_attribute_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="option">*/
/*                     {% set option_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                       <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}</a></li>*/
/*                       {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li>*/
/*                       <input type="text" name="option" value="" placeholder="{{ entry_option }}" id="input-option" class="form-control"/>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content"> {% set option_row = 0 %}*/
/*                     {% set option_value_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                       <div class="tab-pane" id="tab-option{{ option_row }}">*/
/*                         <input type="hidden" name="product_option[{{ option_row }}][product_option_id]" value="{{ product_option.product_option_id }}"/> <input type="hidden" name="product_option[{{ option_row }}][name]" value="{{ product_option.name }}"/> <input type="hidden" name="product_option[{{ option_row }}][option_id]" value="{{ product_option.option_id }}"/> <input type="hidden" name="product_option[{{ option_row }}][type]" value="{{ product_option.type }}"/>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="product_option[{{ option_row }}][required]" id="input-required{{ option_row }}" class="form-control">*/
/* */
/* */
/*                               {% if product_option.required %}*/
/* */
/* */
/*                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                 <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="1">{{ text_yes }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/* */
/* */
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         {% if product_option.type == 'text' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'textarea' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <textarea name="product_option[{{ option_row }}][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control">{{ product_option.value }}</textarea>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'file' %}*/
/*                           <div class="form-group" style="display: none;">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'date' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-3">*/
/*                               <div class="input-group date">*/
/*                                 <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'time' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <div class="input-group time">*/
/*                                 <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'datetime' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <div class="input-group datetime">*/
/*                                 <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                           <div class="table-responsive">*/
/*                             <table id="option-value{{ option_row }}" class="table table-striped table-bordered table-hover">*/
/*                               <thead>*/
/*                                 <tr>*/
/*                                   <td class="text-left">{{ entry_option_value }}</td>*/
/*                                   <td class="text-right">{{ entry_quantity }}</td>*/
/*                                   <td class="text-left">{{ entry_subtract }}</td>*/
/*                                   <td class="text-right">{{ entry_price }}</td>*/
/*                                   <td class="text-right">{{ entry_option_points }}</td>*/
/*                                   <td class="text-right">{{ entry_weight }}</td>*/
/*                                   <td></td>*/
/*                                 </tr>*/
/*                               </thead>*/
/*                               <tbody>*/
/* */
/*                                 {% for product_option_value in product_option.product_option_value %}*/
/*                                   <tr id="option-value-row{{ option_value_row }}">*/
/*                                     <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]" class="form-control">*/
/* */
/* */
/*                                         {% if option_values[product_option.option_id] %}*/
/* */
/*                                           {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                                             {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/* */
/* */
/*                                               <option value="{{ option_value.option_value_id }}" selected="selected">{{ option_value.name }}</option>*/
/* */
/* */
/*                                             {% else %}*/
/* */
/* */
/*                                               <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/* */
/* */
/*                                             {% endif %}*/
/*                                           {% endfor %}*/
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]" value="{{ product_option_value.product_option_value_id }}"/></td>*/
/*                                     <td class="text-right"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]" value="{{ product_option_value.quantity }}" placeholder="{{ entry_quantity }}" class="form-control"/></td>*/
/*                                     <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.subtract %}*/
/* */
/* */
/*                                           <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                           <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="1">{{ text_yes }}</option>*/
/*                                           <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select></td>*/
/*                                     <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.price_prefix == '+' %}*/
/* */
/* */
/*                                           <option value="+" selected="selected">+</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="+">+</option>*/
/* */
/* */
/*                                         {% endif %}*/
/*                                         {% if product_option_value.price_prefix == '-' %}*/
/* */
/* */
/*                                           <option value="-" selected="selected">-</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="-">-</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]" value="{{ product_option_value.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                                     <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.points_prefix == '+' %}*/
/* */
/* */
/*                                           <option value="+" selected="selected">+</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="+">+</option>*/
/* */
/* */
/*                                         {% endif %}*/
/*                                         {% if product_option_value.points_prefix == '-' %}*/
/* */
/* */
/*                                           <option value="-" selected="selected">-</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="-">-</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]" value="{{ product_option_value.points }}" placeholder="{{ entry_points }}" class="form-control"/></td>*/
/*                                     <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.weight_prefix == '+' %}*/
/* */
/* */
/*                                           <option value="+" selected="selected">+</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="+">+</option>*/
/* */
/* */
/*                                         {% endif %}*/
/*                                         {% if product_option_value.weight_prefix == '-' %}*/
/* */
/* */
/*                                           <option value="-" selected="selected">-</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="-">-</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]" value="{{ product_option_value.weight }}" placeholder="{{ entry_weight }}" class="form-control"/></td>*/
/*                                     <td class="text-right"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                                   </tr>*/
/*                                   {% set option_value_row = option_value_row + 1 %}*/
/*                                 {% endfor %}*/
/*                               </tbody>*/
/* */
/*                               <tfoot>*/
/*                                 <tr>*/
/*                                   <td colspan="6"></td>*/
/*                                   <td class="text-left"><button type="button" onclick="addOptionValue('{{ option_row }}');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                                 </tr>*/
/*                               </tfoot>*/
/*                             </table>*/
/*                           </div>*/
/*                           <select id="option-values{{ option_row }}" style="display: none;">*/
/* */
/* */
/*                             {% if option_values[product_option.option_id] %}*/
/*                               {% for option_value in option_values[product_option.option_id] %}*/
/* */
/* */
/*                                 <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/* */
/* */
/*                               {% endfor %}*/
/*                             {% endif %}*/
/* */
/* */
/*                           </select>*/
/*                         {% endif %} </div>*/
/*                       {% set option_row = option_row + 1 %}*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_recurring }}</td>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set recurring_row = 0 %}*/
/*                     {% for product_recurring in product_recurrings %}*/
/*                       <tr id="recurring-row{{ recurring_row }}">*/
/*                         <td class="text-left"><select name="product_recurring[{{ recurring_row }}][recurring_id]" class="form-control">*/
/* */
/* */
/*                             {% for recurring in recurrings %}*/
/*                               {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/* */
/* */
/*                                 <option value="{{ recurring.recurring_id }}" selected="selected">{{ recurring.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                         <td class="text-left"><select name="product_recurring[{{ recurring_row }}][customer_group_id]" class="form-control">*/
/* */
/* */
/*                             {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#recurring-row{{ recurring_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set recurring_row = recurring_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="{{ button_recurring_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-discount">*/
/*               <div class="table-responsive">*/
/*                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_quantity }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set discount_row = 0 %}*/
/*                     {% for product_discount in product_discounts %}*/
/*                       <tr id="discount-row{{ discount_row }}">*/
/*                         <td class="text-left"><select name="product_discount[{{ discount_row }}][customer_group_id]" class="form-control">*/
/*                             {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                               {% else %}*/
/*                                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                           </select></td>*/
/*                         <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][quantity]" value="{{ product_discount.quantity }}" placeholder="{{ entry_quantity }}" class="form-control"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][priority]" value="{{ product_discount.priority }}" placeholder="{{ entry_priority }}" class="form-control"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][price]" value="{{ product_discount.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_discount[{{ discount_row }}][date_start]" value="{{ product_discount.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_discount[{{ discount_row }}][date_end]" value="{{ product_discount.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#discount-row{{ discount_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set discount_row = discount_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="6"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="{{ button_discount_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-special">*/
/*               <div class="table-responsive">*/
/*                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set special_row = 0 %}*/
/*                     {% for product_special in product_specials %}*/
/*                       <tr id="special-row{{ special_row }}">*/
/*                         <td class="text-left"><select name="product_special[{{ special_row }}][customer_group_id]" class="form-control">*/
/* */
/* */
/*                             {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                         <td class="text-right"><input type="text" name="product_special[{{ special_row }}][priority]" value="{{ product_special.priority }}" placeholder="{{ entry_priority }}" class="form-control"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_special[{{ special_row }}][price]" value="{{ product_special.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_special[{{ special_row }}][date_start]" value="{{ product_special.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_special[{{ special_row }}][date_end]" value="{{ product_special.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#special-row{{ special_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set special_row = special_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="5"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="{{ button_special_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="image" value="{{ image }}" id="input-image"/></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set image_row = 0 %}*/
/*                     {% for product_image in product_images %}*/
/*                       <tr id="image-row{{ image_row }}">*/
/*                         <td class="text-left"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ product_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="product_image[{{ image_row }}][image]" value="{{ product_image.image }}" id="input-image{{ image_row }}"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_image[{{ image_row }}][sort_order]" value="{{ product_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control"/></td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set image_row = image_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="{{ button_image_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="points" value="{{ points }}" placeholder="{{ entry_points }}" id="input-points" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_reward }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% for customer_group in customer_groups %}*/
/*                       <tr>*/
/*                         <td class="text-left">{{ customer_group.name }}</td>*/
/*                         <td class="text-right"><input type="text" name="product_reward[{{ customer_group.customer_group_id }}][points]" value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}" class="form-control"/></td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for store in stores %}*/
/*                       <tr>*/
/*                         <td class="text-left">{{ store.name }}</td>*/
/*                         <td class="text-left">{% for language in languages %}*/
/*                             <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span> <input type="text" name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control"/>*/
/*                             </div>*/
/*                             {% if error_keyword[store.store_id][language.language_id] %}*/
/*                               <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                             {% endif %}*/
/*                           {% endfor %}</td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for store in stores %}*/
/*                       <tr>*/
/*                         <td class="text-left">{{ store.name }}</td>*/
/*                         <td class="text-left"><select name="product_layout[{{ store.store_id }}]" class="form-control">*/
/*                             <option value=""></option>*/
/* */
/* */
/*                             {% for layout in layouts %}*/
/*                               {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/* */
/* */
/*                                 <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet"/>*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet"/>*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*   <script type="text/javascript"><!--*/
/*   // Manufacturer*/
/*   $('input[name=\'manufacturer\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  json.unshift({*/
/* 					  manufacturer_id: 0,*/
/* 					  name: '{{ text_none }}'*/
/* 				  });*/
/* */
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['manufacturer_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'manufacturer\']').val(item['label']);*/
/* 		  $('input[name=\'manufacturer_id\']').val(item['value']);*/
/* 	  }*/
/*   });*/
/* */
/*   // Category*/
/*   $('input[name=\'category\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['category_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'category\']').val('');*/
/* */
/* 		  $('#product-category' + item['value']).remove();*/
/* */
/* 		  $('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Filter*/
/*   $('input[name=\'filter\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['filter_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'filter\']').val('');*/
/* */
/* 		  $('#product-filter' + item['value']).remove();*/
/* */
/* 		  $('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Downloads*/
/*   $('input[name=\'download\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['download_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'download\']').val('');*/
/* */
/* 		  $('#product-download' + item['value']).remove();*/
/* */
/* 		  $('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Related*/
/*   $('input[name=\'related\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['product_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'related\']').val('');*/
/* */
/* 		  $('#product-related' + item['value']).remove();*/
/* */
/* 		  $('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var attribute_row = {{ attribute_row }};*/
/* */
/*   function addAttribute() {*/
/* 	  html = '<tr id="attribute-row' + attribute_row + '">';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/* 	  html += '  <td class="text-left">';*/
/*     {% for language in languages %}*/
/* 	  html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*     {% endfor %}*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#attribute tbody').append(html);*/
/* */
/* 	  attributeautocomplete(attribute_row);*/
/* */
/* 	  attribute_row++;*/
/*   }*/
/* */
/*   function attributeautocomplete(attribute_row) {*/
/* 	  $('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/* 		  'source': function(request, response) {*/
/* 			  $.ajax({*/
/* 				  url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 				  dataType: 'json',*/
/* 				  success: function(json) {*/
/* 					  response($.map(json, function(item) {*/
/* 						  return {*/
/* 							  category: item.attribute_group,*/
/* 							  label: item.name,*/
/* 							  value: item.attribute_id*/
/* 						  }*/
/* 					  }));*/
/* 				  }*/
/* 			  });*/
/* 		  },*/
/* 		  'select': function(item) {*/
/* 			  $('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/* 			  $('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/* 		  }*/
/* 	  });*/
/*   }*/
/* */
/*   $('#attribute tbody tr').each(function(index, element) {*/
/* 	  attributeautocomplete(index);*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var option_row = {{ option_row }};*/
/* */
/*   $('input[name=\'option\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  category: item['category'],*/
/* 						  label: item['name'],*/
/* 						  value: item['option_id'],*/
/* 						  type: item['type'],*/
/* 						  option_value: item['option_value']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  html = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* 		  html += '	<div class="form-group">';*/
/* 		  html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/* 		  html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/* 		  html += '	      <option value="1">{{ text_yes }}</option>';*/
/* 		  html += '	      <option value="0">{{ text_no }}</option>';*/
/* 		  html += '	  </select></div>';*/
/* 		  html += '	</div>';*/
/* */
/* 		  if (item['type'] == 'text') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'textarea') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'file') {*/
/* 			  html += '	<div class="form-group" style="display: none;">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'date') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'time') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'datetime') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/* 			  html += '<div class="table-responsive">';*/
/* 			  html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/* 			  html += '  	 <thead>';*/
/* 			  html += '      <tr>';*/
/* 			  html += '        <td class="text-left">{{ entry_option_value }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/* 			  html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_price }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_option_points }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_weight }}</td>';*/
/* 			  html += '        <td></td>';*/
/* 			  html += '      </tr>';*/
/* 			  html += '  	 </thead>';*/
/* 			  html += '  	 <tbody>';*/
/* 			  html += '    </tbody>';*/
/* 			  html += '    <tfoot>';*/
/* 			  html += '      <tr>';*/
/* 			  html += '        <td colspan="6"></td>';*/
/* 			  html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/* 			  html += '      </tr>';*/
/* 			  html += '    </tfoot>';*/
/* 			  html += '  </table>';*/
/* 			  html += '</div>';*/
/* */
/* 			  html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/* 			  for (i = 0; i < item['option_value'].length; i++) {*/
/* 				  html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/* 			  }*/
/* */
/* 			  html += '  </select>';*/
/* 			  html += '</div>';*/
/* 		  }*/
/* */
/* 		  $('#tab-option .tab-content').append(html);*/
/* */
/* 		  $('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/* 		  $('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/* 		  $('[data-toggle=\'tooltip\']').tooltip({*/
/* 			  container: 'body',*/
/* 			  html: true*/
/* 		  });*/
/* */
/* 		  $('.date').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickTime: false*/
/* 		  });*/
/* */
/* 		  $('.time').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickDate: false*/
/* 		  });*/
/* */
/* 		  $('.datetime').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickDate: true,*/
/* 			  pickTime: true*/
/* 		  });*/
/* */
/* 		  option_row++;*/
/* 	  }*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var option_value_row = {{ option_value_row }};*/
/* */
/*   function addOptionValue(option_row) {*/
/* 	  html = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/* 	  html += $('#option-values' + option_row).html();*/
/* 	  html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/* 	  html += '    <option value="1">{{ text_yes }}</option>';*/
/* 	  html += '    <option value="0">{{ text_no }}</option>';*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#option-value' + option_row + ' tbody').append(html);*/
/* 	  $('[rel=tooltip]').tooltip();*/
/* */
/* 	  option_value_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var discount_row = {{ discount_row }};*/
/* */
/*   function addDiscount() {*/
/* 	  html = '<tr id="discount-row' + discount_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#discount tbody').append(html);*/
/* */
/* 	  $('.date').datetimepicker({*/
/* 		  pickTime: false*/
/* 	  });*/
/* */
/* 	  discount_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var special_row = {{ special_row }};*/
/* */
/*   function addSpecial() {*/
/* 	  html = '<tr id="special-row' + special_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#special tbody').append(html);*/
/* */
/* 	  $('.date').datetimepicker({*/
/* 		  language: '{{ datepicker }}',*/
/* 		  pickTime: false*/
/* 	  });*/
/* */
/* 	  special_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var image_row = {{ image_row }};*/
/* */
/*   function addImage() {*/
/* 	  html = '<tr id="image-row' + image_row + '">';*/
/* 	  html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#images tbody').append(html);*/
/* */
/* 	  image_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var recurring_row = {{ recurring_row }};*/
/* */
/*   function addRecurring() {*/
/* 	  html = '<tr id="recurring-row' + recurring_row + '">';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/*     {% for recurring in recurrings %}*/
/* 	  html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '    </select>';*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '    <select>';*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/* 	  html += '  </td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#tab-recurring table tbody').append(html);*/
/* */
/* 	  recurring_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickTime: false*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickDate: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickDate: true,*/
/* 	  pickTime: true*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('#language a:first').tab('show');*/
/*   $('#option a:first').tab('show');*/
/*   //--></script>*/
/* </div>*/
/* {{ footer }} */
/* */
