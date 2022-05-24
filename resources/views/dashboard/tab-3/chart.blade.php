<canvas id="chart-dashboard-3" width="400" height="400"></canvas>

@push('after_scripts')
<script>
    const ctxDashboard3 = document.getElementById('chart-dashboard-3').getContext('2d');
    new Chart(ctxDashboard3, {
        type: 'bar',
        data: {
            labels: [
                'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                'Namangan viloyati', 'Samarqand viloyati', 'Surxondaryo viloyati',
                'Sirdaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', 'Toshkent shahri'
            ],
            datasets: [{
                label: 'maktablar',
                data: [346, 758, 520, 534, 1187, 300, 705, 1266, 1266, 316, 813, 934, 536, 306],
                backgroundColor: '#7c69ef',
                borderColor: 'rgba(151, 187, 205, 0.8)',
                highlightFill: 'rgba(151, 187, 205, 0.75)',
                highlightStroke: 'rgba(151, 187, 205, 1)',
                borderWidth: 1
            }]
        },

        options: {
            indexAxis: 'x',
            elements: {
                bar: {
                    borderWidth: 2,
                },
                disable: false
            },
            plugins: {
                legend: {
                    display: false,
                },
            },
            responsive: true,
            maintainAspectRatio: false
        },
    });
</script>
@endpush
