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

/* extension/opencart/admin/view/template/payment/bank_transfer.twig */
class __TwigTemplate_14f0fcf41f3fbf2a18ee8d4f75a1b436 extends Template
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
        <button type=\"submit\" form=\"form-payment\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-payment\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 22
            yield "            <div class=\"row mb-3 required\">
              <label for=\"input-bank";
            // line 23
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 23);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_bank"] ?? null);
            yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\">
                  <span class=\"input-group-text\"><img src=\"";
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 26);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 26);
            yield "\"/></span> <textarea name=\"payment_bank_transfer_bank_";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26);
            yield "\" cols=\"80\" rows=\"10\" placeholder=\"";
            yield ($context["entry_bank"] ?? null);
            yield "\" id=\"input-bank-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26);
            yield "\" class=\"form-control\">";
            yield (((($_v0 = ($context["payment_bank_transfer_bank"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26)] ?? null) : null)) ? ((($_v1 = ($context["payment_bank_transfer_bank"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26)] ?? null) : null)) : (""));
            yield "</textarea>
                </div>
                <div id=\"error-bank-";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            yield "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "          <div class=\"row mb-3\">
            <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 33
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_bank_transfer_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 37
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 37);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 37) == ($context["payment_bank_transfer_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 37);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">";
        // line 43
        yield ($context["entry_geo_zone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_bank_transfer_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                <option value=\"0\">";
        // line 46
        yield ($context["text_all_zones"] ?? null);
        yield "</option>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 48
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 48);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 48) == ($context["payment_bank_transfer_geo_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 48);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['geo_zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 54
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"payment_bank_transfer_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"payment_bank_transfer_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 58
        if (($context["payment_bank_transfer_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 63
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_bank_transfer_sort_order\" value=\"";
        // line 65
        yield ($context["payment_bank_transfer_sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 73
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
        return "extension/opencart/admin/view/template/payment/bank_transfer.twig";
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
        return array (  241 => 73,  228 => 65,  223 => 63,  213 => 58,  206 => 54,  200 => 50,  185 => 48,  181 => 47,  177 => 46,  171 => 43,  165 => 39,  150 => 37,  146 => 36,  140 => 33,  137 => 32,  127 => 28,  112 => 26,  104 => 23,  101 => 22,  97 => 21,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-payment\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
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
        <form id=\"form-payment\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          {% for language in languages %}
            <div class=\"row mb-3 required\">
              <label for=\"input-bank{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_bank }}</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\">
                  <span class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></span> <textarea name=\"payment_bank_transfer_bank_{{ language.language_id }}\" cols=\"80\" rows=\"10\" placeholder=\"{{ entry_bank }}\" id=\"input-bank-{{ language.language_id }}\" class=\"form-control\">{{ payment_bank_transfer_bank[language.language_id] ? payment_bank_transfer_bank[language.language_id] }}</textarea>
                </div>
                <div id=\"error-bank-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endfor %}
          <div class=\"row mb-3\">
            <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_bank_transfer_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                {% for order_status in order_statuses %}
                  <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == payment_bank_transfer_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">{{ entry_geo_zone }}</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_bank_transfer_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                <option value=\"0\">{{ text_all_zones }}</option>
                {% for geo_zone in geo_zones %}
                  <option value=\"{{ geo_zone.geo_zone_id }}\"{% if geo_zone.geo_zone_id == payment_bank_transfer_geo_zone_id %} selected{% endif %}>{{ geo_zone.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"payment_bank_transfer_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"payment_bank_transfer_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if payment_bank_transfer_status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_bank_transfer_sort_order\" value=\"{{ payment_bank_transfer_sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "extension/opencart/admin/view/template/payment/bank_transfer.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\payment\\bank_transfer.twig");
    }
}
