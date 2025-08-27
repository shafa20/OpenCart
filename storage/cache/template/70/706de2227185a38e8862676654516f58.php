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

/* extension/opencart/admin/view/template/report/sale_order.twig */
class __TwigTemplate_6d3c6c1163cf4663cffa5ca622cdcd09 extends Template
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
        yield "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 4
        yield ($context["text_filter"] ?? null);
        yield "</div>
      <div class=\"card-body\">
      <form id=\"form-filter\">
        <div class=\"mb-3\">
          <label for=\"input-group\" class=\"form-label\">";
        // line 8
        yield ($context["entry_group"] ?? null);
        yield "</label> <select name=\"filter_group\" id=\"input-group\" class=\"form-select\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            yield "              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 10);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 10) == ($context["filter_group"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, false, 10);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "          </select>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-order-status\" class=\"form-label\">";
        // line 15
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
          <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-select\">
            <option value=\"0\">";
        // line 17
        yield ($context["text_all_status"] ?? null);
        yield "</option>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 19
            yield "              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 19);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 19) == ($context["filter_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 19);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "          </select>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">";
        // line 24
        yield ($context["entry_date_start"] ?? null);
        yield "</label>
          <input type=\"date\" name=\"filter_date_start\" value=\"";
        // line 25
        yield ($context["filter_date_start"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_start"] ?? null);
        yield "\" id=\"input-date-start\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">";
        // line 28
        yield ($context["entry_date_end"] ?? null);
        yield "</label>
          <input type=\"date\" name=\"filter_date_end\" value=\"";
        // line 29
        yield ($context["filter_date_end"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_end"] ?? null);
        yield "\" id=\"input-date-end\" class=\"form-control\"/>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 32
        yield ($context["button_filter"] ?? null);
        yield "</button>
          <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 33
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class=\"col col-lg-9 col-md-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 41
        yield ($context["heading_title"] ?? null);
        yield "</div>
      <div id=\"sale-order\" class=\"card-body\">";
        // line 42
        yield ($context["list"] ?? null);
        yield "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#sale-order').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#sale-order').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_group = \$('#input-group').val();

    if (filter_group) {
        url += '&filter_group=' + encodeURIComponent(filter_group);
    }

    var filter_order_status_id = \$('#input-order-status').val();

    if (filter_order_status_id != 0) {
        url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    \$('#sale-order').load('index.php?route=extension/opencart/report/sale_order.list&user_token=";
        // line 80
        yield ($context["user_token"] ?? null);
        yield "' + url);
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/sale_order.twig";
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
        return array (  199 => 80,  158 => 42,  154 => 41,  143 => 33,  139 => 32,  131 => 29,  127 => 28,  119 => 25,  115 => 24,  110 => 21,  95 => 19,  91 => 18,  87 => 17,  82 => 15,  77 => 12,  62 => 10,  58 => 9,  54 => 8,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
  <div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
      <div class=\"card-body\">
      <form id=\"form-filter\">
        <div class=\"mb-3\">
          <label for=\"input-group\" class=\"form-label\">{{ entry_group }}</label> <select name=\"filter_group\" id=\"input-group\" class=\"form-select\">
            {% for group in groups %}
              <option value=\"{{ group.value }}\"{% if group.value == filter_group %} selected{% endif %}>{{ group.text }}</option>
            {% endfor %}
          </select>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-order-status\" class=\"form-label\">{{ entry_order_status }}</label>
          <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-select\">
            <option value=\"0\">{{ text_all_status }}</option>
            {% for order_status in order_statuses %}
              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == filter_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
            {% endfor %}
          </select>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">{{ entry_date_start }}</label>
          <input type=\"date\" name=\"filter_date_start\" value=\"{{ filter_date_start }}\" placeholder=\"{{ entry_date_start }}\" id=\"input-date-start\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">{{ entry_date_end }}</label>
          <input type=\"date\" name=\"filter_date_end\" value=\"{{ filter_date_end }}\" placeholder=\"{{ entry_date_end }}\" id=\"input-date-end\" class=\"form-control\"/>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
          <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class=\"col col-lg-9 col-md-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> {{ heading_title }}</div>
      <div id=\"sale-order\" class=\"card-body\">{{ list }}</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#sale-order').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#sale-order').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_group = \$('#input-group').val();

    if (filter_group) {
        url += '&filter_group=' + encodeURIComponent(filter_group);
    }

    var filter_order_status_id = \$('#input-order-status').val();

    if (filter_order_status_id != 0) {
        url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    \$('#sale-order').load('index.php?route=extension/opencart/report/sale_order.list&user_token={{ user_token }}' + url);
});
//--></script>
", "extension/opencart/admin/view/template/report/sale_order.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\report\\sale_order.twig");
    }
}
