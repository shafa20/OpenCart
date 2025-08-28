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

/* adminstat/view/template/report/sales.twig */
class __TwigTemplate_c976825e0a11322064ce244574b46822 extends Template
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
      <form id=\"filter-form\" class=\"float-end d-flex gap-2 align-items-center\">
        <input type=\"date\" name=\"date_start\" value=\"";
        // line 6
        yield ($context["date_start"] ?? null);
        yield "\" class=\"form-control form-control-sm\" />
        <input type=\"date\" name=\"date_end\" value=\"";
        // line 7
        yield ($context["date_end"] ?? null);
        yield "\" class=\"form-control form-control-sm\" />
        <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
        // line 8
        yield ($context["button_filter"] ?? null);
        yield "</button>
        <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 9
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-light btn-sm\">
          <i class=\"fa-solid fa-rotate\"></i>
        </button>
      </form>
      <h1>";
        // line 13
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row g-3 mb-3\">
      <div class=\"col-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <span>";
        // line 26
        yield ($context["text_total_sales"] ?? null);
        yield "</span>
            <a href=\"";
        // line 27
        yield ($context["details_url"] ?? null);
        yield "\" class=\"small text-decoration-none\">";
        yield ($context["text_view_details"] ?? null);
        yield "</a>
          </div>
          <div class=\"card-body\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
              <div class=\"d-flex align-items-baseline gap-3\">
                <div class=\"fw-bold fs-3\" id=\"kpi-total\">";
        // line 32
        yield ($context["kpi_revenue_formatted"] ?? null);
        yield "</div>
                <div class=\"text-success fw-semibold\">";
        // line 33
        yield ($context["kpi_revenue_percent"] ?? null);
        yield "%</div>
              </div>
              <i class=\"fa-solid fa-sack-dollar fa-2x text-primary\"></i>
            </div>
            <div style=\"height: 350px;\">
              <canvas id=\"salesChart\" height=\"200\" data-chart-url=\"";
        // line 38
        yield ($context["chart_url"] ?? null);
        yield "\"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-4\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"text-muted small\">Orders</div>
            <div class=\"fw-bold fs-4\">";
        // line 47
        yield ($context["kpi_orders"] ?? null);
        yield "</div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-4\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"text-muted small\">Average Order Value</div>
            <div class=\"fw-bold fs-4\">";
        // line 55
        yield ($context["kpi_aov_formatted"] ?? null);
        yield "</div>
          </div>
        </div>
      </div>
      ";
        // line 60
        yield "    </div>
    <div class=\"row g-3 mb-3\">
      <div class=\"col-12 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <span>";
        // line 65
        yield ($context["text_refunds"] ?? null);
        yield "</span>
            <a href=\"#\" class=\"small text-decoration-none\">";
        // line 66
        yield ($context["text_view_details"] ?? null);
        yield "</a>
          </div>
          <div class=\"card-body\">
            <canvas id=\"refundsChart\" height=\"120\" data-chart-url=\"";
        // line 69
        yield ($context["refunds_chart_url"] ?? null);
        yield "\"></canvas>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <span>";
        // line 76
        yield ($context["text_top_payment_methods"] ?? null);
        yield "</span>
            <a href=\"";
        // line 77
        yield ($context["payments_details_url"] ?? null);
        yield "\" class=\"small text-decoration-none\">";
        yield ($context["text_view_details"] ?? null);
        yield "</a>
          </div>
          <div class=\"card-body\" style=\"min-height: 150px;\">
            <div id=\"topPayments\" data-url=\"";
        // line 80
        yield ($context["top_payments_url"] ?? null);
        yield "\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>


<script type=\"text/javascript\">
  (function() {
    document.getElementById('filter-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const params = new URLSearchParams(window.location.search);
      params.set('date_start', this.date_start.value);
      params.set('date_end', this.date_end.value);
      window.location = window.location.pathname + '?' + params.toString();
    });
  })();
</script>
";
        // line 103
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
        return "adminstat/view/template/report/sales.twig";
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
        return array (  221 => 103,  195 => 80,  187 => 77,  183 => 76,  173 => 69,  167 => 66,  163 => 65,  156 => 60,  149 => 55,  138 => 47,  126 => 38,  118 => 33,  114 => 32,  104 => 27,  100 => 26,  90 => 18,  79 => 16,  75 => 15,  70 => 13,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <form id=\"filter-form\" class=\"float-end d-flex gap-2 align-items-center\">
        <input type=\"date\" name=\"date_start\" value=\"{{ date_start }}\" class=\"form-control form-control-sm\" />
        <input type=\"date\" name=\"date_end\" value=\"{{ date_end }}\" class=\"form-control form-control-sm\" />
        <button type=\"submit\" class=\"btn btn-primary btn-sm\">{{ button_filter }}</button>
        <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-light btn-sm\">
          <i class=\"fa-solid fa-rotate\"></i>
        </button>
      </form>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row g-3 mb-3\">
      <div class=\"col-12\">
        <div class=\"card\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <span>{{ text_total_sales }}</span>
            <a href=\"{{ details_url }}\" class=\"small text-decoration-none\">{{ text_view_details }}</a>
          </div>
          <div class=\"card-body\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
              <div class=\"d-flex align-items-baseline gap-3\">
                <div class=\"fw-bold fs-3\" id=\"kpi-total\">{{ kpi_revenue_formatted }}</div>
                <div class=\"text-success fw-semibold\">{{ kpi_revenue_percent }}%</div>
              </div>
              <i class=\"fa-solid fa-sack-dollar fa-2x text-primary\"></i>
            </div>
            <div style=\"height: 350px;\">
              <canvas id=\"salesChart\" height=\"200\" data-chart-url=\"{{ chart_url }}\"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-4\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"text-muted small\">Orders</div>
            <div class=\"fw-bold fs-4\">{{ kpi_orders }}</div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-4\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"text-muted small\">Average Order Value</div>
            <div class=\"fw-bold fs-4\">{{ kpi_aov_formatted }}</div>
          </div>
        </div>
      </div>
      {# Removed separate sales chart card since it's merged above #}
    </div>
    <div class=\"row g-3 mb-3\">
      <div class=\"col-12 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <span>{{ text_refunds }}</span>
            <a href=\"#\" class=\"small text-decoration-none\">{{ text_view_details }}</a>
          </div>
          <div class=\"card-body\">
            <canvas id=\"refundsChart\" height=\"120\" data-chart-url=\"{{ refunds_chart_url }}\"></canvas>
          </div>
        </div>
      </div>
      <div class=\"col-12 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <span>{{ text_top_payment_methods }}</span>
            <a href=\"{{ payments_details_url }}\" class=\"small text-decoration-none\">{{ text_view_details }}</a>
          </div>
          <div class=\"card-body\" style=\"min-height: 150px;\">
            <div id=\"topPayments\" data-url=\"{{ top_payments_url }}\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>


<script type=\"text/javascript\">
  (function() {
    document.getElementById('filter-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const params = new URLSearchParams(window.location.search);
      params.set('date_start', this.date_start.value);
      params.set('date_end', this.date_end.value);
      window.location = window.location.pathname + '?' + params.toString();
    });
  })();
</script>
{{ footer }}
", "adminstat/view/template/report/sales.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\adminstat\\view\\template\\report\\sales.twig");
    }
}
