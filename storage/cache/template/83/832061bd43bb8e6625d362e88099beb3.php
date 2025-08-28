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

/* adminstat/view/template/report/sales_details.twig */
class __TwigTemplate_8a2f2b8487bd1c0176732783573be378 extends Template
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
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center justify-content-between\">
        <div class=\"d-flex align-items-center gap-2\">
          <span class=\"fw-semibold\">";
        // line 18
        yield ($context["text_total_sales"] ?? null);
        yield "</span>
          <select id=\"interval\" class=\"form-select form-select-sm\" style=\"width:auto;\">
            <option value=\"day\"   ";
        // line 20
        yield (((($context["interval"] ?? null) == "day")) ? ("selected") : (""));
        yield ">";
        yield ($context["text_day"] ?? null);
        yield "</option>
            <option value=\"month\" ";
        // line 21
        yield (((($context["interval"] ?? null) == "month")) ? ("selected") : (""));
        yield ">";
        yield ($context["text_month"] ?? null);
        yield "</option>
            <option value=\"year\"  ";
        // line 22
        yield (((($context["interval"] ?? null) == "year")) ? ("selected") : (""));
        yield ">";
        yield ($context["text_year"] ?? null);
        yield "</option>
          </select>
        </div>
        <div class=\"d-flex align-items-center gap-2\">
          <input type=\"date\" id=\"input-date-start\" class=\"form-control form-control-sm\" value=\"";
        // line 26
        yield ($context["date_start"] ?? null);
        yield "\">
          <input type=\"date\" id=\"input-date-end\" class=\"form-control form-control-sm\" value=\"";
        // line 27
        yield ($context["date_end"] ?? null);
        yield "\">
          <button id=\"button-apply\" class=\"btn btn-primary btn-sm\">";
        // line 28
        yield ($context["button_filter"] ?? null);
        yield "</button>
          <a class=\"btn btn-light btn-sm\" href=\"";
        // line 29
        yield ($context["back_url"] ?? null);
        yield "\">";
        yield ($context["text_back"] ?? null);
        yield "</a>
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 31
        yield ($context["text_export"] ?? null);
        yield "</button>
            <ul class=\"dropdown-menu dropdown-menu-end\">
              <li><a class=\"dropdown-item\" id=\"link-export-csv\" href=\"";
        // line 33
        yield ($context["export_csv_url"] ?? null);
        yield "\">CSV</a></li>
              <li><a class=\"dropdown-item\" id=\"link-export-xls\" href=\"";
        // line 34
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
        // line 44
        yield ($context["column_interval"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 45
        yield ($context["column_orders"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 46
        yield ($context["column_total"] ?? null);
        yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 50
        if (($context["rows"] ?? null)) {
            // line 51
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 52
                yield "                  <tr>
                    <td>";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, false, 53);
                yield "</td>
                    <td class=\"text-end\">";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "orders", [], "any", false, false, false, 54);
                yield "</td>
                    <td class=\"text-end\">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 55);
                yield "</td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "              ";
        } else {
            // line 59
            yield "                <tr>
                  <td colspan=\"3\" class=\"text-center text-muted p-4\">No data</td>
                </tr>
              ";
        }
        // line 63
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
  const intervalSel = document.getElementById('interval');
  const btnApply = document.getElementById('button-apply');
  const dateStart = document.getElementById('input-date-start');
  const dateEnd = document.getElementById('input-date-end');
  const linkCsv = document.getElementById('link-export-csv');
  const linkXls = document.getElementById('link-export-xls');

  function rebuildUrls(){
    const params = new URLSearchParams({
      route: 'report/sales|details',
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value,
      interval: intervalSel.value
    });
    const base = window.location.pathname + '?' + params.toString();
    return base;
  }

  function buildExportUrl(kind){
    const params = new URLSearchParams({
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value,
      interval: intervalSel.value
    });
    const route = kind === 'csv' ? 'report/sales|exportCsv' : 'report/sales|exportXls';
    return window.location.pathname + '?' + 'route=' + route + '&' + params.toString();
  }

  intervalSel.addEventListener('change', function(){
    window.location = rebuildUrls();
  });

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
        // line 119
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
        return "adminstat/view/template/report/sales_details.twig";
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
        return array (  256 => 119,  198 => 63,  192 => 59,  189 => 58,  180 => 55,  176 => 54,  172 => 53,  169 => 52,  164 => 51,  162 => 50,  155 => 46,  151 => 45,  147 => 44,  134 => 34,  130 => 33,  125 => 31,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  97 => 22,  91 => 21,  85 => 20,  80 => 18,  71 => 11,  60 => 9,  56 => 8,  50 => 5,  42 => 1,);
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
          <span class=\"fw-semibold\">{{ text_total_sales }}</span>
          <select id=\"interval\" class=\"form-select form-select-sm\" style=\"width:auto;\">
            <option value=\"day\"   {{ interval == 'day'   ? 'selected' : '' }}>{{ text_day }}</option>
            <option value=\"month\" {{ interval == 'month' ? 'selected' : '' }}>{{ text_month }}</option>
            <option value=\"year\"  {{ interval == 'year'  ? 'selected' : '' }}>{{ text_year }}</option>
          </select>
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
  const intervalSel = document.getElementById('interval');
  const btnApply = document.getElementById('button-apply');
  const dateStart = document.getElementById('input-date-start');
  const dateEnd = document.getElementById('input-date-end');
  const linkCsv = document.getElementById('link-export-csv');
  const linkXls = document.getElementById('link-export-xls');

  function rebuildUrls(){
    const params = new URLSearchParams({
      route: 'report/sales|details',
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value,
      interval: intervalSel.value
    });
    const base = window.location.pathname + '?' + params.toString();
    return base;
  }

  function buildExportUrl(kind){
    const params = new URLSearchParams({
      user_token: qs.get('user_token'),
      date_start: dateStart.value,
      date_end: dateEnd.value,
      interval: intervalSel.value
    });
    const route = kind === 'csv' ? 'report/sales|exportCsv' : 'report/sales|exportXls';
    return window.location.pathname + '?' + 'route=' + route + '&' + params.toString();
  }

  intervalSel.addEventListener('change', function(){
    window.location = rebuildUrls();
  });

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
", "adminstat/view/template/report/sales_details.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\adminstat\\view\\template\\report\\sales_details.twig");
    }
}
