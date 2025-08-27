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

/* extension/opencart/admin/view/template/report/customer_activity.twig */
class __TwigTemplate_3dcf41d90597a45bd50d75323410dcf8 extends Template
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
          <label for=\"input-customer\" class=\"form-label\">";
        // line 8
        yield ($context["entry_customer"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 9
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
          <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">";
        // line 13
        yield ($context["entry_date_start"] ?? null);
        yield "</label>
          <input type=\"date\" name=\"filter_date_start\" value=\"";
        // line 14
        yield ($context["filter_date_start"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_start"] ?? null);
        yield "\" id=\"input-date-start\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">";
        // line 17
        yield ($context["entry_date_end"] ?? null);
        yield "</label>
          <input type=\"date\" name=\"filter_date_end\" value=\"";
        // line 18
        yield ($context["filter_date_end"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_end"] ?? null);
        yield "\" id=\"input-date-end\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-ip\" class=\"form-label\">";
        // line 21
        yield ($context["entry_ip"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 22
        yield ($context["filter_ip"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ip"] ?? null);
        yield "\" id=\"input-ip\" class=\"form-control\"/>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 25
        yield ($context["button_filter"] ?? null);
        yield "</button>
          <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 26
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
        // line 34
        yield ($context["heading_title"] ?? null);
        yield "</div>
      <div id=\"customer-activity\" class=\"card-body\">";
        // line 35
        yield ($context["list"] ?? null);
        yield "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer-activity').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#customer-activity').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#customer-activity').load('index.php?route=extension/opencart/report/customer_activity.list&user_token=";
        // line 73
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 79
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
    }
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
        return "extension/opencart/admin/view/template/report/customer_activity.twig";
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
        return array (  172 => 79,  163 => 73,  122 => 35,  118 => 34,  107 => 26,  103 => 25,  95 => 22,  91 => 21,  83 => 18,  79 => 17,  71 => 14,  67 => 13,  58 => 9,  54 => 8,  47 => 4,  42 => 1,);
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
          <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
          <input type=\"text\" name=\"filter_customer\" value=\"{{ filter_customer }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
          <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">{{ entry_date_start }}</label>
          <input type=\"date\" name=\"filter_date_start\" value=\"{{ filter_date_start }}\" placeholder=\"{{ entry_date_start }}\" id=\"input-date-start\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">{{ entry_date_end }}</label>
          <input type=\"date\" name=\"filter_date_end\" value=\"{{ filter_date_end }}\" placeholder=\"{{ entry_date_end }}\" id=\"input-date-end\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-ip\" class=\"form-label\">{{ entry_ip }}</label>
          <input type=\"text\" name=\"filter_ip\" value=\"{{ filter_ip }}\" placeholder=\"{{ entry_ip }}\" id=\"input-ip\" class=\"form-control\"/>
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
      <div id=\"customer-activity\" class=\"card-body\">{{ list }}</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer-activity').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#customer-activity').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#customer-activity').load('index.php?route=extension/opencart/report/customer_activity.list&user_token={{ user_token }}' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
    }
});
//--></script>
", "extension/opencart/admin/view/template/report/customer_activity.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\report\\customer_activity.twig");
    }
}
