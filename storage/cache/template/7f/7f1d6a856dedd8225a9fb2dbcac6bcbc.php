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

/* install/view/template/install/step_2.twig */
class __TwigTemplate_83e45fd384062371ee4346c976edf865 extends Template
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
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 10
        yield ($context["text_step_2"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-step-2\">
          <fieldset>
            <legend>";
        // line 14
        yield ($context["text_install_php"] ?? null);
        yield "</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>";
        // line 18
        yield ($context["text_setting"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 19
        yield ($context["text_current"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 20
        yield ($context["text_required"] ?? null);
        yield "</b></td>
                  <td class=\"w-25 text-center\"><b>";
        // line 21
        yield ($context["text_status"] ?? null);
        yield "</b></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
        // line 26
        yield ($context["text_version"] ?? null);
        yield "</td>
                  <td>";
        // line 27
        yield ($context["php_version"] ?? null);
        yield "</td>
                  <td>8.0+</td>
                  <td class=\"text-center\">
                    ";
        // line 30
        if (($context["version"] ?? null)) {
            // line 31
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 33
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 34
        yield "</td>
                </tr>
                <tr";
        // line 36
        if (($context["register_globals"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 37
        yield ($context["text_global"] ?? null);
        yield "</td>
                  <td>";
        // line 38
        if (($context["register_globals"] ?? null)) {
            // line 39
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 41
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 42
        yield "</td>
                  <td>";
        // line 43
        yield ($context["text_off"] ?? null);
        yield "</td>
                  <td class=\"text-center\">
                    ";
        // line 45
        if ( !($context["register_globals"] ?? null)) {
            // line 46
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 48
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 49
        yield "</td>
                </tr>
                <tr";
        // line 51
        if (($context["magic_quotes_gpc"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 52
        yield ($context["text_magic"] ?? null);
        yield "</td>
                  <td>";
        // line 53
        if (($context["magic_quotes_gpc"] ?? null)) {
            // line 54
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 56
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 57
        yield "</td>
                  <td>";
        // line 58
        yield ($context["text_off"] ?? null);
        yield "</td>
                  <td class=\"text-center\">
                    ";
        // line 60
        if ( !($context["error_magic_quotes_gpc"] ?? null)) {
            // line 61
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 63
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 64
        yield "</td>
                </tr>
                <tr";
        // line 66
        if ( !($context["file_uploads"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 67
        yield ($context["text_file_upload"] ?? null);
        yield "</td>
                  <td>";
        // line 68
        if (($context["file_uploads"] ?? null)) {
            // line 69
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 71
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 72
        yield "</td>
                  <td>";
        // line 73
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 74
        if (($context["file_uploads"] ?? null)) {
            // line 75
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 77
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 78
        yield "</td>
                </tr>
                <tr";
        // line 80
        if (($context["session_auto_start"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 81
        yield ($context["text_session"] ?? null);
        yield "</td>
                  <td>";
        // line 82
        if (($context["session_auto_start"] ?? null)) {
            // line 83
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 85
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 86
        yield "</td>
                  <td>";
        // line 87
        yield ($context["text_off"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 88
        if ( !($context["session_auto_start"] ?? null)) {
            // line 89
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 91
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 92
        yield "</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 98
        yield ($context["text_install_extension"] ?? null);
        yield "</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>";
        // line 102
        yield ($context["text_extension"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 103
        yield ($context["text_current"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 104
        yield ($context["text_required"] ?? null);
        yield "</b></td>
                  <td class=\"w-25 text-center\"><b>";
        // line 105
        yield ($context["text_status"] ?? null);
        yield "</b></td>
                </tr>
              </thead>
              <tbody>
                <tr";
        // line 109
        if ( !($context["db"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 110
        yield ($context["text_db"] ?? null);
        yield "</td>
                  <td>";
        // line 111
        if (($context["db"] ?? null)) {
            // line 112
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 114
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 115
        yield "</td>
                  <td>";
        // line 116
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 117
        if (($context["db"] ?? null)) {
            // line 118
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 120
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 121
        yield "</td>
                </tr>
                <tr";
        // line 123
        if ( !($context["gd"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 124
        yield ($context["text_gd"] ?? null);
        yield "</td>
                  <td>";
        // line 125
        if (($context["gd"] ?? null)) {
            // line 126
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 128
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 129
        yield "</td>
                  <td>";
        // line 130
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 131
        if (($context["gd"] ?? null)) {
            // line 132
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 134
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 135
        yield "</td>
                </tr>
                <tr";
        // line 137
        if ( !($context["curl"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 138
        yield ($context["text_curl"] ?? null);
        yield "</td>
                  <td>";
        // line 139
        if (($context["curl"] ?? null)) {
            // line 140
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 142
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 143
        yield "</td>
                  <td>";
        // line 144
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 145
        if (($context["curl"] ?? null)) {
            // line 146
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 148
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 149
        yield "</td>
                </tr>
                <tr";
        // line 151
        if ( !($context["openssl"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 152
        yield ($context["text_openssl"] ?? null);
        yield "</td>
                  <td>";
        // line 153
        if (($context["openssl"] ?? null)) {
            // line 154
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 156
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 157
        yield "</td>
                  <td>";
        // line 158
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 159
        if (($context["openssl"] ?? null)) {
            // line 160
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 162
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 163
        yield "</td>
                </tr>
                <tr";
        // line 165
        if ( !($context["zlib"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 166
        yield ($context["text_zlib"] ?? null);
        yield "</td>
                  <td>";
        // line 167
        if (($context["zlib"] ?? null)) {
            // line 168
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 170
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 171
        yield "</td>
                  <td>";
        // line 172
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 173
        if (($context["zlib"] ?? null)) {
            // line 174
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 176
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 177
        yield "</td>
                </tr>
                <tr";
        // line 179
        if ( !($context["zip"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 180
        yield ($context["text_zip"] ?? null);
        yield "</td>
                  <td>";
        // line 181
        if (($context["zip"] ?? null)) {
            // line 182
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 184
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 185
        yield "</td>
                  <td>";
        // line 186
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 187
        if (($context["zip"] ?? null)) {
            // line 188
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 190
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 191
        yield "</td>
                </tr>
                ";
        // line 193
        if ( !($context["iconv"] ?? null)) {
            // line 194
            yield "                  <tr";
            if ( !($context["mbstring"] ?? null)) {
                yield " class=\"table-danger\"";
            }
            yield ">
                    <td>";
            // line 195
            yield ($context["text_mbstring"] ?? null);
            yield "</td>
                    <td>";
            // line 196
            if (($context["mbstring"] ?? null)) {
                // line 197
                yield "                        ";
                yield ($context["text_on"] ?? null);
                yield "
                      ";
            } else {
                // line 199
                yield "                        ";
                yield ($context["text_off"] ?? null);
                yield "
                      ";
            }
            // line 200
            yield "</td>
                    <td>";
            // line 201
            yield ($context["text_on"] ?? null);
            yield "</td>
                    <td class=\"text-center\">";
            // line 202
            if (($context["mbstring"] ?? null)) {
                // line 203
                yield "                        <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                      ";
            } else {
                // line 205
                yield "                        <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                      ";
            }
            // line 206
            yield "</td>
                  </tr>
                ";
        }
        // line 209
        yield "              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 213
        yield ($context["text_install_file"] ?? null);
        yield "</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td><b>";
        // line 217
        yield ($context["text_file"] ?? null);
        yield "</b></td>
                  <td><b>";
        // line 218
        yield ($context["text_status"] ?? null);
        yield "</b></td>
                </tr>
              </thead>
              <tbody>
                <tr";
        // line 222
        if (($context["error_catalog_config"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 223
        yield ($context["catalog_config"] ?? null);
        yield "</td>
                  <td>";
        // line 224
        if ( !($context["error_catalog_config"] ?? null)) {
            // line 225
            yield "                      <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                    ";
        } else {
            // line 227
            yield "                      <span class=\"text-danger\">";
            yield ($context["error_catalog_config"] ?? null);
            yield "</span>
                    ";
        }
        // line 228
        yield "</td>
                </tr>
                <tr";
        // line 230
        if (($context["error_admin_config"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 231
        yield ($context["admin_config"] ?? null);
        yield "</td>
                  <td>";
        // line 232
        if ( !($context["error_admin_config"] ?? null)) {
            // line 233
            yield "                      <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                    ";
        } else {
            // line 235
            yield "                      <span class=\"text-danger\">";
            yield ($context["error_admin_config"] ?? null);
            yield "</span>
                    ";
        }
        // line 236
        yield "</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"";
        // line 242
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
            <div class=\"col text-end\"><button type=\"submit\" id=\"button-continue\" class=\"btn btn-primary\">";
        // line 243
        yield ($context["button_continue"] ?? null);
        yield "</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-step-2').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=install/step_2.save&language=";
        // line 255
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-step-2').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-continue').prop('disabled', true);
        },
        complete: function() {
            \$('#button-continue').prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#form-step-2').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 284
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
        return "install/view/template/install/step_2.twig";
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
        return array (  783 => 284,  751 => 255,  736 => 243,  730 => 242,  722 => 236,  716 => 235,  710 => 233,  708 => 232,  704 => 231,  698 => 230,  694 => 228,  688 => 227,  682 => 225,  680 => 224,  676 => 223,  670 => 222,  663 => 218,  659 => 217,  652 => 213,  646 => 209,  641 => 206,  637 => 205,  633 => 203,  631 => 202,  627 => 201,  624 => 200,  618 => 199,  612 => 197,  610 => 196,  606 => 195,  599 => 194,  597 => 193,  593 => 191,  589 => 190,  585 => 188,  583 => 187,  579 => 186,  576 => 185,  570 => 184,  564 => 182,  562 => 181,  558 => 180,  552 => 179,  548 => 177,  544 => 176,  540 => 174,  538 => 173,  534 => 172,  531 => 171,  525 => 170,  519 => 168,  517 => 167,  513 => 166,  507 => 165,  503 => 163,  499 => 162,  495 => 160,  493 => 159,  489 => 158,  486 => 157,  480 => 156,  474 => 154,  472 => 153,  468 => 152,  462 => 151,  458 => 149,  454 => 148,  450 => 146,  448 => 145,  444 => 144,  441 => 143,  435 => 142,  429 => 140,  427 => 139,  423 => 138,  417 => 137,  413 => 135,  409 => 134,  405 => 132,  403 => 131,  399 => 130,  396 => 129,  390 => 128,  384 => 126,  382 => 125,  378 => 124,  372 => 123,  368 => 121,  364 => 120,  360 => 118,  358 => 117,  354 => 116,  351 => 115,  345 => 114,  339 => 112,  337 => 111,  333 => 110,  327 => 109,  320 => 105,  316 => 104,  312 => 103,  308 => 102,  301 => 98,  293 => 92,  289 => 91,  285 => 89,  283 => 88,  279 => 87,  276 => 86,  270 => 85,  264 => 83,  262 => 82,  258 => 81,  252 => 80,  248 => 78,  244 => 77,  240 => 75,  238 => 74,  234 => 73,  231 => 72,  225 => 71,  219 => 69,  217 => 68,  213 => 67,  207 => 66,  203 => 64,  199 => 63,  195 => 61,  193 => 60,  188 => 58,  185 => 57,  179 => 56,  173 => 54,  171 => 53,  167 => 52,  161 => 51,  157 => 49,  153 => 48,  149 => 46,  147 => 45,  142 => 43,  139 => 42,  133 => 41,  127 => 39,  125 => 38,  121 => 37,  115 => 36,  111 => 34,  107 => 33,  103 => 31,  101 => 30,  95 => 27,  91 => 26,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  64 => 14,  57 => 10,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <h1>{{ heading_title }}</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_step_2 }}</div>
      <div class=\"card-body\">
        <form id=\"form-step-2\">
          <fieldset>
            <legend>{{ text_install_php }}</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>{{ text_setting }}</b></td>
                  <td class=\"w-25\"><b>{{ text_current }}</b></td>
                  <td class=\"w-25\"><b>{{ text_required }}</b></td>
                  <td class=\"w-25 text-center\"><b>{{ text_status }}</b></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ text_version }}</td>
                  <td>{{ php_version }}</td>
                  <td>8.0+</td>
                  <td class=\"text-center\">
                    {% if version %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if register_globals %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_global }}</td>
                  <td>{% if register_globals %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_off }}</td>
                  <td class=\"text-center\">
                    {% if not register_globals %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if magic_quotes_gpc %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_magic }}</td>
                  <td>{% if magic_quotes_gpc %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_off }}</td>
                  <td class=\"text-center\">
                    {% if not error_magic_quotes_gpc %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not file_uploads %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_file_upload }}</td>
                  <td>{% if file_uploads %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if file_uploads %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if session_auto_start %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_session }}</td>
                  <td>{% if session_auto_start %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_off }}</td>
                  <td class=\"text-center\">{% if not session_auto_start %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>{{ text_install_extension }}</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>{{ text_extension }}</b></td>
                  <td class=\"w-25\"><b>{{ text_current }}</b></td>
                  <td class=\"w-25\"><b>{{ text_required }}</b></td>
                  <td class=\"w-25 text-center\"><b>{{ text_status }}</b></td>
                </tr>
              </thead>
              <tbody>
                <tr{% if not db %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_db }}</td>
                  <td>{% if db %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if db %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not gd %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_gd }}</td>
                  <td>{% if gd %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if gd %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not curl %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_curl }}</td>
                  <td>{% if curl %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if curl %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not openssl %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_openssl }}</td>
                  <td>{% if openssl %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if openssl %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not zlib %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_zlib }}</td>
                  <td>{% if zlib %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if zlib %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not zip %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_zip }}</td>
                  <td>{% if zip %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if zip %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                {% if not iconv %}
                  <tr{% if not mbstring %} class=\"table-danger\"{% endif %}>
                    <td>{{ text_mbstring }}</td>
                    <td>{% if mbstring %}
                        {{ text_on }}
                      {% else %}
                        {{ text_off }}
                      {% endif %}</td>
                    <td>{{ text_on }}</td>
                    <td class=\"text-center\">{% if mbstring %}
                        <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                      {% else %}
                        <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                      {% endif %}</td>
                  </tr>
                {% endif %}
              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>{{ text_install_file }}</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td><b>{{ text_file }}</b></td>
                  <td><b>{{ text_status }}</b></td>
                </tr>
              </thead>
              <tbody>
                <tr{% if error_catalog_config %} class=\"table-danger\"{% endif %}>
                  <td>{{ catalog_config }}</td>
                  <td>{% if not error_catalog_config %}
                      <span class=\"text-success\">{{ text_writable }}</span>
                    {% else %}
                      <span class=\"text-danger\">{{ error_catalog_config }}</span>
                    {% endif %}</td>
                </tr>
                <tr{% if error_admin_config %} class=\"table-danger\"{% endif %}>
                  <td>{{ admin_config }}</td>
                  <td>{% if not error_admin_config %}
                      <span class=\"text-success\">{{ text_writable }}</span>
                    {% else %}
                      <span class=\"text-danger\">{{ error_admin_config }}</span>
                    {% endif %}</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a></div>
            <div class=\"col text-end\"><button type=\"submit\" id=\"button-continue\" class=\"btn btn-primary\">{{ button_continue }}</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-step-2').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=install/step_2.save&language={{ language }}',
        type: 'post',
        data: \$('#form-step-2').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-continue').prop('disabled', true);
        },
        complete: function() {
            \$('#button-continue').prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#form-step-2').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "install/view/template/install/step_2.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\install\\view\\template\\install\\step_2.twig");
    }
}
