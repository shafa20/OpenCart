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

/* adminstat/view/template/sale/returns_form.twig */
class __TwigTemplate_46e3f3d53a868e4258c6b0ddbd15db30 extends Template
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
        <button type=\"button\" id=\"button-save\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-order\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 25
        yield ($context["text_order_id"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-order\">";
        // line 27
        if (($context["order_id"] ?? null)) {
            yield "<a href=\"";
            yield ($context["order_edit"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["order_id"] ?? null);
            yield "</a>";
        }
        yield "</div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-order\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-customer\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 36
        yield ($context["text_customer"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 38
        if (($context["customer_id"] ?? null)) {
            // line 39
            yield "                    <div id=\"value-customer\"><a href=\"";
            yield ($context["customer_edit"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</a></div>
                  ";
        } else {
            // line 41
            yield "                    <div id=\"value-customer\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</div>
                  ";
        }
        // line 43
        yield "                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <section class=\"form-control p-0 border rounded\" style=\"min-height: 64px;\">
              <div class=\"lead p-2\"><strong>";
        // line 50
        yield ($context["text_date_added"] ?? null);
        yield "</strong>
                <br/>
                <div>";
        // line 52
        yield ($context["date_added"] ?? null);
        yield "</div>
              </div>
            </section>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>";
        // line 60
        yield ($context["column_product"] ?? null);
        yield "</th>
              <th>";
        // line 61
        yield ($context["column_model"] ?? null);
        yield "</th>
              <th class=\"text-end\" style=\"width: 1px;\">";
        // line 62
        yield ($context["column_quantity"] ?? null);
        yield "</th>
            </tr>
          </thead>
          <tbody id=\"return-product\">
            ";
        // line 66
        if (($context["product_id"] ?? null)) {
            // line 67
            yield "              <tr>
                <td><a href=\"";
            // line 68
            yield ($context["product_edit"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["product"] ?? null);
            yield "</a></td>
                <td>";
            // line 69
            yield ($context["model"] ?? null);
            yield "</td>
                <td class=\"text-end\">";
            // line 70
            yield ($context["quantity"] ?? null);
            yield "</td>
              </tr>
            ";
        } else {
            // line 73
            yield "              <tr>
                <td colspan=\"3\" class=\"text-center\">";
            // line 74
            yield ($context["text_no_results"] ?? null);
            yield "</td>
              </tr>
            ";
        }
        // line 77
        yield "          </tbody>
          <tfoot>
            <tr>
              <td colspan=\"2\"></td>
              <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
            </tr>
          </tfoot>
        </table>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <form id=\"form-return-reason\" class=\"form-floating\">
              <select name=\"return_reason_id\" id=\"input-return-reason\" class=\"form-select\">
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 90
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 90);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 90) == ($context["return_reason_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 90);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "              </select>
              <label for=\"input-return-reason\">";
        // line 93
        yield ($context["entry_reason"] ?? null);
        yield "</label>
            </form>
            <div id=\"error-return-reason\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"col mb-3\">
            <form id=\"form-opened\" class=\"form-floating\">
              <select name=\"opened\" id=\"input-opened\" class=\"form-select\">
                <option value=\"1\"";
        // line 100
        if (($context["opened"] ?? null)) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_opened"] ?? null);
        yield "</option>
                <option value=\"0\"";
        // line 101
        if ( !($context["opened"] ?? null)) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_unopened"] ?? null);
        yield "</option>
              </select>
              <label for=\"input-opened\">";
        // line 103
        yield ($context["entry_opened"] ?? null);
        yield "</label>
            </form>
          </div>
          <div class=\"col mb-3\">
            <form id=\"form-return-action\" class=\"form-floating\">
              <select name=\"return_action_id\" id=\"input-return-action\" class=\"form-select\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_action"]) {
            // line 110
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 110);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 110) == ($context["return_action_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_action"], "name", [], "any", false, false, false, 110);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "              </select>
              <label for=\"input-return-action\">";
        // line 113
        yield ($context["entry_action"] ?? null);
        yield "</label>
            </form>
          </div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <form id=\"form-comment\" class=\"form-floating\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 120
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\" style=\"min-height: 100px;\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
              <label for=\"input-comment\">";
        // line 121
        yield ($context["entry_comment"] ?? null);
        yield "</label>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 128
        yield ($context["text_history"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div id=\"history\">";
        // line 130
        yield ($context["history"] ?? null);
        yield "</div>
        <fieldset>
          <form id=\"form-history\">
            <legend>";
        // line 133
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
            <div class=\"row mb-3\">
              <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 135
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-select\">
                  ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 139
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 139);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 139) == ($context["return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 139);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 145
        yield ($context["entry_notify"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"notify\" value=\"0\"/> <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 153
        yield ($context["entry_comment"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 155
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 159
        yield ($context["button_history_add"] ?? null);
        yield "</button>
            </div>
            <input type=\"hidden\" name=\"return_id\" value=\"";
        // line 161
        yield ($context["return_id"] ?? null);
        yield "\" id=\"input-return-id\"/>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-order\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 172
        yield ($context["text_return"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-order\" data-oc-target=\"#section-order\">
          <div class=\"mb-3\">
            <label for=\"input-order-id\" class=\"form-label\">";
        // line 178
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"order_id\" value=\"";
        // line 179
        yield ($context["order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\"/>
            <input type=\"hidden\" name=\"date_ordered\" value=\"";
        // line 180
        yield ($context["date_ordered"] ?? null);
        yield "\" id=\"input-date-ordered\"/>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-order\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 183
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 194
        yield ($context["text_customer"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 200
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <input type=\"text\" value=\"";
        // line 201
        yield ($context["firstname"] ?? null);
        yield " ";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 202
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 206
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"firstname\" value=\"";
        // line 207
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 211
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"lastname\" value=\"";
        // line 212
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 216
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"email\" value=\"";
        // line 217
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 220
        if (($context["config_telephone_required"] ?? null)) {
            yield " required";
        }
        yield "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 221
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"telephone\" value=\"";
        // line 222
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 226
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 237
        yield ($context["text_product"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product\" data-oc-target=\"#section-product\">
          <div class=\"mb-3 required\">
            <label for=\"input-return\" class=\"form-label\">";
        // line 243
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <select name=\"product_id\" id=\"input-return\" class=\"form-select\">
              ";
        // line 245
        if (($context["product_id"] ?? null)) {
            // line 246
            yield "                <option value=\"";
            yield ($context["product_id"] ?? null);
            yield "\">";
            yield ($context["product"] ?? null);
            yield "</option>
              ";
        } else {
            // line 248
            yield "                <option value=\"0\">";
            yield ($context["text_select"] ?? null);
            yield "</option>
              ";
        }
        // line 250
        yield "            </select>
            <input type=\"hidden\" name=\"product\" value=\"";
        // line 251
        yield ($context["product"] ?? null);
        yield "\" id=\"input-product\"/>
            <div id=\"error-product\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-model\" class=\"form-label\">";
        // line 255
        yield ($context["entry_model"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"model\" value=\"";
        // line 256
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
            <div id=\"error-model\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">";
        // line 260
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"quantity\" value=\"";
        // line 261
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
            <div id=\"error-quantity\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 265
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var products = [];

\$('#form-order').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.autocomplete&user_token=";
        // line 281
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-order').button('loading');
        },
        complete: function() {
            \$('#button-order').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                \$('#form-order').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['order_id']) {
                \$('#output-order').html('<a href=\"index.php?route=sale/order.form&user_token=";
        // line 302
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + json['order_id'] + '\" target=\"_blank\">' + json['order_id'] + '</a>');

                \$('#input-date-ordered').val(json['date_added']);
                \$('#input-customer').val(json['firstname'] + ' ' + json['lastname']);
                \$('#input-customer-id').val(json['customer_id']);
                \$('#input-firstname').val(json['firstname']);
                \$('#input-lastname').val(json['lastname']);
                \$('#input-email').val(json['email']);
                \$('#input-telephone').val(json['telephone']);

                \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 312
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + json['customer_id'] + '\" target=\"_blank\">' + json['firstname'] + ' ' + json['lastname'] + '</a>');

                html = '<option value=\"0\">";
        // line 314
        yield ($context["text_select"] ?? null);
        yield "</option>';

                for (i = 0; i < json['products'].length; i++) {
                    html += '<option value=\"' + i + '\"' + (json['products'][i]['product_id'] == \$('#input-product-id').val() ? ' selected' : '') + '>' + json['products'][i]['name'] + '</option>';
                }

                \$('#input-return').html(html);

                products = json['products'];
            }

            \$('#modal-order').modal('hide');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 336
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
        \$('#input-customer-id').val(item['value']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);
    }
});

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var customer_id = \$('#input-customer-id').val();

    if (customer_id) {
        \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 369
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + customer_id + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
    } else {
        \$('#output-customer').html(\$('#input-firstname').val() + ' ' + \$('#input-lastname').val());
    }

    \$('#modal-customer').modal('hide');
});

\$('#input-return').on('change', function(e) {
    if (products[this.value]) {
       \$('#input-product').val(products[this.value]['name']);
       \$('#input-model').val(products[this.value]['model']);
    }
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    html  = '<tr>';

    if (\$('#input-return').val()) {
        html += '<td><a href=\"index.php?route=catalog/product.form&user_token=";
        // line 390
        yield ($context["user_token"] ?? null);
        yield "&product_id=' + \$('#input-return').val() + '\" target=\"_blank\">' + \$('#input-product').val() + '</a></td>';
        html += '<td>' + \$('#input-model').val() + '</td>';
        html += '<td class=\"text-end\">' + \$('#input-quantity').val() + '</td>';
    } else {
        html += '<td colspan=\"3\" class=\"text-center\">";
        // line 394
        yield ($context["text_no_results"] ?? null);
        yield "</td>';
    }

    html += '</tr>';

    \$('#return-product').html(html);

    \$('#modal-product').modal('hide');
});

\$('#button-save').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/returns.save&user_token=";
        // line 408
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-order, #form-customer, #form-product, #form-return-reason, #form-opened, #form-return-action, #form-comment, #input-return-status, #input-return-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }

                // Highlight any invalid fields
                \$('.is-invalid').parents('form').each(function(index, element) {
                    \$(\$(element).attr('data-oc-target')).addClass('is-invalid');
                });
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['return_id']) {
                    \$('#input-return-id').val(json['return_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/returns.addHistory&user_token=";
        // line 467
        yield ($context["user_token"] ?? null);
        yield "&return_id=' + \$('#input-return-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#history').load('index.php?route=sale/returns.history&user_token=";
        // line 486
        yield ($context["user_token"] ?? null);
        yield "&return_id=' + \$('#input-return-id').val());

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 499
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
        return "adminstat/view/template/sale/returns_form.twig";
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
        return array (  899 => 499,  883 => 486,  861 => 467,  799 => 408,  782 => 394,  775 => 390,  751 => 369,  715 => 336,  690 => 314,  685 => 312,  672 => 302,  648 => 281,  629 => 265,  620 => 261,  616 => 260,  607 => 256,  603 => 255,  596 => 251,  593 => 250,  587 => 248,  579 => 246,  577 => 245,  572 => 243,  563 => 237,  549 => 226,  540 => 222,  536 => 221,  530 => 220,  522 => 217,  518 => 216,  509 => 212,  505 => 211,  496 => 207,  492 => 206,  485 => 202,  477 => 201,  473 => 200,  464 => 194,  450 => 183,  444 => 180,  438 => 179,  434 => 178,  425 => 172,  411 => 161,  406 => 159,  399 => 155,  394 => 153,  383 => 145,  377 => 141,  362 => 139,  358 => 138,  352 => 135,  347 => 133,  341 => 130,  336 => 128,  326 => 121,  320 => 120,  310 => 113,  307 => 112,  292 => 110,  288 => 109,  279 => 103,  270 => 101,  262 => 100,  252 => 93,  249 => 92,  234 => 90,  230 => 89,  216 => 77,  210 => 74,  207 => 73,  201 => 70,  197 => 69,  191 => 68,  188 => 67,  186 => 66,  179 => 62,  175 => 61,  171 => 60,  160 => 52,  155 => 50,  146 => 43,  138 => 41,  128 => 39,  126 => 38,  121 => 36,  103 => 27,  98 => 25,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" id=\"button-save\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-order\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_order_id }}</strong>
                  <br/>
                  <div id=\"output-order\">{% if order_id %}<a href=\"{{ order_edit }}\" target=\"_blank\">{{ order_id }}</a>{% endif %}</div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-order\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-customer\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_customer }}</strong>
                  <br/>
                  {% if customer_id %}
                    <div id=\"value-customer\"><a href=\"{{ customer_edit }}\" target=\"_blank\">{{ firstname }} {{ lastname }}</a></div>
                  {% else %}
                    <div id=\"value-customer\">{{ firstname }} {{ lastname }}</div>
                  {% endif %}
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <section class=\"form-control p-0 border rounded\" style=\"min-height: 64px;\">
              <div class=\"lead p-2\"><strong>{{ text_date_added }}</strong>
                <br/>
                <div>{{ date_added }}</div>
              </div>
            </section>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>{{ column_product }}</th>
              <th>{{ column_model }}</th>
              <th class=\"text-end\" style=\"width: 1px;\">{{ column_quantity }}</th>
            </tr>
          </thead>
          <tbody id=\"return-product\">
            {% if product_id %}
              <tr>
                <td><a href=\"{{ product_edit }}\" target=\"_blank\">{{ product }}</a></td>
                <td>{{ model }}</td>
                <td class=\"text-end\">{{ quantity }}</td>
              </tr>
            {% else %}
              <tr>
                <td colspan=\"3\" class=\"text-center\">{{ text_no_results }}</td>
              </tr>
            {% endif %}
          </tbody>
          <tfoot>
            <tr>
              <td colspan=\"2\"></td>
              <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
            </tr>
          </tfoot>
        </table>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <form id=\"form-return-reason\" class=\"form-floating\">
              <select name=\"return_reason_id\" id=\"input-return-reason\" class=\"form-select\">
                {% for return_reason in return_reasons %}
                  <option value=\"{{ return_reason.return_reason_id }}\"{% if return_reason.return_reason_id == return_reason_id %} selected{% endif %}>{{ return_reason.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-return-reason\">{{ entry_reason }}</label>
            </form>
            <div id=\"error-return-reason\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"col mb-3\">
            <form id=\"form-opened\" class=\"form-floating\">
              <select name=\"opened\" id=\"input-opened\" class=\"form-select\">
                <option value=\"1\"{% if opened %} selected{% endif %}>{{ text_opened }}</option>
                <option value=\"0\"{% if not opened %} selected{% endif %}>{{ text_unopened }}</option>
              </select>
              <label for=\"input-opened\">{{ entry_opened }}</label>
            </form>
          </div>
          <div class=\"col mb-3\">
            <form id=\"form-return-action\" class=\"form-floating\">
              <select name=\"return_action_id\" id=\"input-return-action\" class=\"form-select\">
                {% for return_action in return_actions %}
                  <option value=\"{{ return_action.return_action_id }}\"{% if return_action.return_action_id == return_action_id %} selected{% endif %}>{{ return_action.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-return-action\">{{ entry_action }}</label>
            </form>
          </div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <form id=\"form-comment\" class=\"form-floating\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\" style=\"min-height: 100px;\">{{ comment }}</textarea>
              <label for=\"input-comment\">{{ entry_comment }}</label>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_history }}</div>
      <div class=\"card-body\">
        <div id=\"history\">{{ history }}</div>
        <fieldset>
          <form id=\"form-history\">
            <legend>{{ text_history_add }}</legend>
            <div class=\"row mb-3\">
              <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
              <div class=\"col-sm-10\">
                <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-select\">
                  {% for return_status in return_statuses %}
                    <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                  {% endfor %}
                </select>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_notify }}</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"notify\" value=\"0\"/> <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
              <div class=\"col-sm-10\">
                <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
            </div>
            <input type=\"hidden\" name=\"return_id\" value=\"{{ return_id }}\" id=\"input-return-id\"/>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-order\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_return }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-order\" data-oc-target=\"#section-order\">
          <div class=\"mb-3\">
            <label for=\"input-order-id\" class=\"form-label\">{{ entry_order_id }}</label>
            <input type=\"text\" name=\"order_id\" value=\"{{ order_id }}\" placeholder=\"{{ entry_order_id }}\" id=\"input-order-id\" class=\"form-control\"/>
            <input type=\"hidden\" name=\"date_ordered\" value=\"{{ date_ordered }}\" id=\"input-date-ordered\"/>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-order\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_customer }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
            <input type=\"text\" value=\"{{ firstname }} {{ lastname }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
            <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
            <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3{% if config_telephone_required %} required{% endif %}\">
            <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label>
            <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_product }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product\" data-oc-target=\"#section-product\">
          <div class=\"mb-3 required\">
            <label for=\"input-return\" class=\"form-label\">{{ entry_product }}</label>
            <select name=\"product_id\" id=\"input-return\" class=\"form-select\">
              {% if product_id %}
                <option value=\"{{ product_id }}\">{{ product }}</option>
              {% else %}
                <option value=\"0\">{{ text_select }}</option>
              {% endif %}
            </select>
            <input type=\"hidden\" name=\"product\" value=\"{{ product }}\" id=\"input-product\"/>
            <div id=\"error-product\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-model\" class=\"form-label\">{{ entry_model }}</label>
            <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
            <div id=\"error-model\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">{{ entry_quantity }}</label>
            <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
            <div id=\"error-quantity\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var products = [];

\$('#form-order').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.autocomplete&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-order').button('loading');
        },
        complete: function() {
            \$('#button-order').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                \$('#form-order').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['order_id']) {
                \$('#output-order').html('<a href=\"index.php?route=sale/order.form&user_token={{ user_token }}&order_id=' + json['order_id'] + '\" target=\"_blank\">' + json['order_id'] + '</a>');

                \$('#input-date-ordered').val(json['date_added']);
                \$('#input-customer').val(json['firstname'] + ' ' + json['lastname']);
                \$('#input-customer-id').val(json['customer_id']);
                \$('#input-firstname').val(json['firstname']);
                \$('#input-lastname').val(json['lastname']);
                \$('#input-email').val(json['email']);
                \$('#input-telephone').val(json['telephone']);

                \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token={{ user_token }}&customer_id=' + json['customer_id'] + '\" target=\"_blank\">' + json['firstname'] + ' ' + json['lastname'] + '</a>');

                html = '<option value=\"0\">{{ text_select }}</option>';

                for (i = 0; i < json['products'].length; i++) {
                    html += '<option value=\"' + i + '\"' + (json['products'][i]['product_id'] == \$('#input-product-id').val() ? ' selected' : '') + '>' + json['products'][i]['name'] + '</option>';
                }

                \$('#input-return').html(html);

                products = json['products'];
            }

            \$('#modal-order').modal('hide');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
        \$('#input-customer-id').val(item['value']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);
    }
});

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var customer_id = \$('#input-customer-id').val();

    if (customer_id) {
        \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token={{ user_token }}&customer_id=' + customer_id + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
    } else {
        \$('#output-customer').html(\$('#input-firstname').val() + ' ' + \$('#input-lastname').val());
    }

    \$('#modal-customer').modal('hide');
});

\$('#input-return').on('change', function(e) {
    if (products[this.value]) {
       \$('#input-product').val(products[this.value]['name']);
       \$('#input-model').val(products[this.value]['model']);
    }
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    html  = '<tr>';

    if (\$('#input-return').val()) {
        html += '<td><a href=\"index.php?route=catalog/product.form&user_token={{ user_token }}&product_id=' + \$('#input-return').val() + '\" target=\"_blank\">' + \$('#input-product').val() + '</a></td>';
        html += '<td>' + \$('#input-model').val() + '</td>';
        html += '<td class=\"text-end\">' + \$('#input-quantity').val() + '</td>';
    } else {
        html += '<td colspan=\"3\" class=\"text-center\">{{ text_no_results }}</td>';
    }

    html += '</tr>';

    \$('#return-product').html(html);

    \$('#modal-product').modal('hide');
});

\$('#button-save').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/returns.save&user_token={{ user_token }}',
        type: 'post',
        data: \$('#form-order, #form-customer, #form-product, #form-return-reason, #form-opened, #form-return-action, #form-comment, #input-return-status, #input-return-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }

                // Highlight any invalid fields
                \$('.is-invalid').parents('form').each(function(index, element) {
                    \$(\$(element).attr('data-oc-target')).addClass('is-invalid');
                });
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['return_id']) {
                    \$('#input-return-id').val(json['return_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/returns.addHistory&user_token={{ user_token }}&return_id=' + \$('#input-return-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#history').load('index.php?route=sale/returns.history&user_token={{ user_token }}&return_id=' + \$('#input-return-id').val());

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "adminstat/view/template/sale/returns_form.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\adminstat\\view\\template\\sale\\returns_form.twig");
    }
}
