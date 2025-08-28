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

/* adminstat/view/template/report/sales_payments_details.twig */
class __TwigTemplate_876a6456452fa4e64933c85ce3038e44 extends Template
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
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center justify-content-between\">
        <div class=\"d-flex align-items-center gap-2\">
          <span class=\"fw-semibold\">";
        // line 17
        yield ($context["text_top_payment_methods"] ?? null);
        yield "</span>
        </div>
        <div class=\"d-flex align-items-center gap-2\">
          <input type=\"date\" id=\"input-date-start\" class=\"form-control form-control-sm\" value=\"";
        // line 20
        yield ($context["date_start"] ?? null);
        yield "\">
          <input type=\"date\" id=\"input-date-end\" class=\"form-control form-control-sm\" value=\"";
        // line 21
        yield ($context["date_end"] ?? null);
        yield "\">
          <button id=\"button-apply\" class=\"btn btn-primary btn-sm\">";
        // line 22
        yield ($context["button_filter"] ?? null);
        yield "</button>
          <a class=\"btn btn-light btn-sm\" href=\"";
        // line 23
        yield ($context["back_url"] ?? null);
        yield "\">";
        yield ($context["text_back"] ?? null);
        yield "</a>
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 25
        yield ($context["text_export"] ?? null);
        yield "</button>
            <ul class=\"dropdown-menu dropdown-menu-end\">
              <li><a class=\"dropdown-item\" id=\"link-export-csv\" href=\"";
        // line 27
        yield ($context["export_csv_url"] ?? null);
        yield "\">CSV</a></li>
              <li><a class=\"dropdown-item\" id=\"link-export-xls\" href=\"";
        // line 28
        yield ($context["export_xls_url"] ?? null);
        yield "\">XLS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"card-body p-0\">
        <div class=\"table-responsive\">
          <table class=\"table table-striped mb-0\">
            <thead>
              <tr>
                <th>";
        // line 38
        yield ($context["column_interval"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 39
        yield ($context["column_orders"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 40
        yield ($context["column_total"] ?? null);
        yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 44
        if (($context["rows"] ?? null)) {
            // line 45
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 46
                yield "                  <tr>
                    <td>";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, false, 47);
                yield "</td>
                    <td class=\"text-end\">";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "orders", [], "any", false, false, false, 48);
                yield "</td>
                    <td class=\"text-end\">";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 49);
                yield "</td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "              ";
        } else {
            // line 53
            yield "                <tr>
                  <td colspan=\"3\" class=\"text-center text-muted p-4\">No data</td>
                </tr>
              ";
        }
        // line 57
        yield "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
(function(){
  const qs = new URLSearchParams(window.location.search);
  const btnApply = document.getElementById('button-apply');
  const dateStart = document.getElementById('input-date-start');
  const dateEnd = document.getElementById('input-date-end');
  const linkCsv = document.getElementById('link-export-csv');
  const linkXls = document.getElementById('link-export-xls');

  function rebuildUrls(){
    const params = new URLSearchParams({
      route: 'report/sales|detailsPayments',
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value
    });
    return window.location.pathname + '?' + params.toString();
  }

  function buildExportUrl(kind){
    const params = new URLSearchParams({
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value
    });
    const route = kind === 'csv' ? 'report/sales|exportPaymentsCsv' : 'report/sales|exportPaymentsXls';
    return window.location.pathname + '?' + 'route=' + route + '&' + params.toString();
  }

  btnApply.addEventListener('click', function(){
    window.location = rebuildUrls();
  });

  function refreshExportLinks(){
    linkCsv.href = buildExportUrl('csv');
    linkXls.href = buildExportUrl('xls');
  }
  refreshExportLinks();
})();
</script>
";
        // line 105
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
        return "adminstat/view/template/report/sales_payments_details.twig";
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
        return array (  227 => 105,  177 => 57,  171 => 53,  168 => 52,  159 => 49,  155 => 48,  151 => 47,  148 => 46,  143 => 45,  141 => 44,  134 => 40,  130 => 39,  126 => 38,  113 => 28,  109 => 27,  104 => 25,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  79 => 17,  70 => 10,  59 => 8,  55 => 7,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
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
      <div class=\"card-header d-flex align-items-center justify-content-between\">
        <div class=\"d-flex align-items-center gap-2\">
          <span class=\"fw-semibold\">{{ text_top_payment_methods }}</span>
        </div>
        <div class=\"d-flex align-items-center gap-2\">
          <input type=\"date\" id=\"input-date-start\" class=\"form-control form-control-sm\" value=\"{{ date_start }}\">
          <input type=\"date\" id=\"input-date-end\" class=\"form-control form-control-sm\" value=\"{{ date_end }}\">
          <button id=\"button-apply\" class=\"btn btn-primary btn-sm\">{{ button_filter }}</button>
          <a class=\"btn btn-light btn-sm\" href=\"{{ back_url }}\">{{ text_back }}</a>
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">{{ text_export }}</button>
            <ul class=\"dropdown-menu dropdown-menu-end\">
              <li><a class=\"dropdown-item\" id=\"link-export-csv\" href=\"{{ export_csv_url }}\">CSV</a></li>
              <li><a class=\"dropdown-item\" id=\"link-export-xls\" href=\"{{ export_xls_url }}\">XLS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"card-body p-0\">
        <div class=\"table-responsive\">
          <table class=\"table table-striped mb-0\">
            <thead>
              <tr>
                <th>{{ column_interval }}</th>
                <th class=\"text-end\">{{ column_orders }}</th>
                <th class=\"text-end\">{{ column_total }}</th>
              </tr>
            </thead>
            <tbody>
              {% if rows %}
                {% for row in rows %}
                  <tr>
                    <td>{{ row.label }}</td>
                    <td class=\"text-end\">{{ row.orders }}</td>
                    <td class=\"text-end\">{{ row.total }}</td>
                  </tr>
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"3\" class=\"text-center text-muted p-4\">No data</td>
                </tr>
              {% endif %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
(function(){
  const qs = new URLSearchParams(window.location.search);
  const btnApply = document.getElementById('button-apply');
  const dateStart = document.getElementById('input-date-start');
  const dateEnd = document.getElementById('input-date-end');
  const linkCsv = document.getElementById('link-export-csv');
  const linkXls = document.getElementById('link-export-xls');

  function rebuildUrls(){
    const params = new URLSearchParams({
      route: 'report/sales|detailsPayments',
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value
    });
    return window.location.pathname + '?' + params.toString();
  }

  function buildExportUrl(kind){
    const params = new URLSearchParams({
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value
    });
    const route = kind === 'csv' ? 'report/sales|exportPaymentsCsv' : 'report/sales|exportPaymentsXls';
    return window.location.pathname + '?' + 'route=' + route + '&' + params.toString();
  }

  btnApply.addEventListener('click', function(){
    window.location = rebuildUrls();
  });

  function refreshExportLinks(){
    linkCsv.href = buildExportUrl('csv');
    linkXls.href = buildExportUrl('xls');
  }
  refreshExportLinks();
})();
</script>
{{ footer }}
", "adminstat/view/template/report/sales_payments_details.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\adminstat\\view\\template\\report\\sales_payments_details.twig");
    }
}
