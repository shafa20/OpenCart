document.addEventListener('DOMContentLoaded', function () {
  if (typeof Chart === 'undefined') {
    console.warn('Chart.js not loaded. Ensure view/javascript/vendor/chart.umd.min.js exists and is enqueued.');
  }

  // Sales chart
  const salesCanvas = document.getElementById('salesChart');
  const salesUrl = salesCanvas ? salesCanvas.getAttribute('data-chart-url') : null;
  const refreshBtn = document.getElementById('button-refresh');
  let salesChartInstance = null;

  function renderLineChart(canvas, dataset, existingInstanceRef) {
    if (!canvas || typeof Chart === 'undefined') return existingInstanceRef;
    const ctx = canvas.getContext('2d');
    if (existingInstanceRef) existingInstanceRef.destroy();
    return new Chart(ctx, {
      type: 'line',
      data: dataset,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: { mode: 'index', intersect: false },
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
      }
    });
  }

  async function fetchJson(url) {
    const res = await fetch(url, { credentials: 'same-origin' });
    if (!res.ok) throw new Error('HTTP ' + res.status);
    return res.json();
  }

  async function loadSalesChart() {
    if (!salesUrl) return;
    try {
      const json = await fetchJson(salesUrl);
      salesChartInstance = renderLineChart(salesCanvas, json, salesChartInstance);
    } catch (e) {
      console.error('Failed to load sales chart', e);
    }
  }

  // Refunds chart
  const refundsCanvas = document.getElementById('refundsChart');
  const refundsUrl = refundsCanvas ? refundsCanvas.getAttribute('data-chart-url') : null;
  let refundsChartInstance = null;

  async function loadRefundsChart() {
    if (!refundsUrl) return;
    try {
      const json = await fetchJson(refundsUrl);
      refundsChartInstance = renderLineChart(refundsCanvas, json, refundsChartInstance);
    } catch (e) {
      console.error('Failed to load refunds chart', e);
    }
  }

  // Top payment methods list
  const topPaymentsEl = document.getElementById('topPayments');
  const topPaymentsUrl = topPaymentsEl ? topPaymentsEl.getAttribute('data-url') : null;

  async function loadTopPayments() {
    if (!topPaymentsUrl || !topPaymentsEl) return;
    try {
      const list = await fetchJson(topPaymentsUrl);
      if (!Array.isArray(list)) return;
      // Simple list rendering
      topPaymentsEl.innerHTML = list.map(item => `
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="text-truncate">${item.name || 'Unknown'}</div>
          <div class="fw-semibold">${item.total_formatted || item.total}</div>
        </div>
        <div class="progress mb-2" style="height:6px;">
          <div class="progress-bar bg-success" role="progressbar" style="width:${computePercent(item.total, list)}%"></div>
        </div>
      `).join('');
    } catch (e) {
      console.error('Failed to load top payments', e);
    }
  }

  function computePercent(value, list) {
    const sum = list.reduce((acc, it) => acc + (parseFloat(it.total) || 0), 0) || 1;
    return Math.min(100, Math.round((parseFloat(value || 0) / sum) * 100));
  }

  if (refreshBtn) refreshBtn.addEventListener('click', function() {
    loadSalesChart();
    loadRefundsChart();
    loadTopPayments();
  });

  // initial
  loadSalesChart();
  loadRefundsChart();
  loadTopPayments();
});
