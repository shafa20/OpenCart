<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/opencart/admin/view/template/shipping/weight.twig */
class __TwigTemplate_df209bf7e10feef5c2968166bccad56b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-shipping\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-shipping\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 24
            yield "              <li class=\"nav-item\"><a href=\"#tab-geo-zone";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 24);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 24);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['geo_zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row mb-3\">
                <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 30
        yield ($context["entry_tax_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_weight_tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                    <option value=\"0\">";
        // line 33
        yield ($context["text_none"] ?? null);
        yield "</option>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 35
            yield "                      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 35);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 35) == ($context["shipping_weight_tax_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 35);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tax_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 41
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"shipping_weight_status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"shipping_weight_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 45
        if (($context["shipping_weight_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 50
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"shipping_weight_sort_order\" value=\"";
        // line 52
        yield ($context["shipping_weight_sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 57
            yield "              <div class=\"tab-pane\" id=\"tab-geo-zone";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 57);
            yield "\">
                <div class=\"row mb-3\">
                  <label for=\"input-rate-";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 59);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_rate"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"shipping_weight_";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61);
            yield "_rate\" rows=\"5\" placeholder=\"";
            yield ($context["entry_rate"] ?? null);
            yield "\" id=\"input-rate-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61);
            yield "\" class=\"form-control\">";
            yield (((($_v0 = ($context["shipping_weight_geo_zone_rate"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61)] ?? null) : null)) ? ((($_v1 = ($context["shipping_weight_geo_zone_rate"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61)] ?? null) : null)) : (""));
            yield "</textarea>
                    <div class=\"form-text text-muted\">";
            // line 62
            yield ($context["help_rate"] ?? null);
            yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 66
            yield ($context["entry_status"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"shipping_weight_";
            // line 69
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 69);
            yield "_status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"shipping_weight_";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 70);
            yield "_status\" value=\"1\" id=\"input-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 70);
            yield "\" class=\"form-check-input\"";
            if ((($_v2 = ($context["shipping_weight_geo_zone_status"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 70)] ?? null) : null)) {
                yield " checked";
            }
            yield "/>
                    </div>
                  </div>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['geo_zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 82
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/shipping/weight.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  259 => 82,  251 => 76,  233 => 70,  229 => 69,  223 => 66,  216 => 62,  206 => 61,  199 => 59,  193 => 57,  189 => 56,  180 => 52,  175 => 50,  165 => 45,  158 => 41,  152 => 37,  137 => 35,  133 => 34,  129 => 33,  123 => 30,  117 => 26,  106 => 24,  102 => 23,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-shipping\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-shipping\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            {% for geo_zone in geo_zones %}
              <li class=\"nav-item\"><a href=\"#tab-geo-zone{{ geo_zone.geo_zone_id }}\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ geo_zone.name }}</a></li>
            {% endfor %}
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row mb-3\">
                <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">{{ entry_tax_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_weight_tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                    <option value=\"0\">{{ text_none }}</option>
                    {% for tax_class in tax_classes %}
                      <option value=\"{{ tax_class.tax_class_id }}\"{% if tax_class.tax_class_id == shipping_weight_tax_class_id %} selected{% endif %}>{{ tax_class.title }}</option>
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"shipping_weight_status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"shipping_weight_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if shipping_weight_status %} checked{% endif %}/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"shipping_weight_sort_order\" value=\"{{ shipping_weight_sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            {% for geo_zone in geo_zones %}
              <div class=\"tab-pane\" id=\"tab-geo-zone{{ geo_zone.geo_zone_id }}\">
                <div class=\"row mb-3\">
                  <label for=\"input-rate-{{ geo_zone.geo_zone_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_rate }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"shipping_weight_{{ geo_zone.geo_zone_id }}_rate\" rows=\"5\" placeholder=\"{{ entry_rate }}\" id=\"input-rate-{{ geo_zone.geo_zone_id }}\" class=\"form-control\">{{ shipping_weight_geo_zone_rate[geo_zone.geo_zone_id] ? shipping_weight_geo_zone_rate[geo_zone.geo_zone_id] }}</textarea>
                    <div class=\"form-text text-muted\">{{ help_rate }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"shipping_weight_{{ geo_zone.geo_zone_id }}_status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"shipping_weight_{{ geo_zone.geo_zone_id }}_status\" value=\"1\" id=\"input-status-{{ geo_zone.geo_zone_id }}\" class=\"form-check-input\"{% if shipping_weight_geo_zone_status[geo_zone.geo_zone_id] %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
              </div>
            {% endfor %}
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "extension/opencart/admin/view/template/shipping/weight.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\shipping\\weight.twig");
    }
}
