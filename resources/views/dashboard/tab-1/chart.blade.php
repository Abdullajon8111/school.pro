<canvas id="chart-dashboard-1" width="400" height="400"></canvas>

@push('after_scripts')
<script>
    const ctxDashboard = document.getElementById('chart-dashboard-1').getContext('2d');
    new Chart(ctxDashboard, {
        type: 'bar',
        data: {
            labels: [
                'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                'Namangan viloyati', 'Samarqand viloyati', 'Surxondaryo viloyati',
                'Sirdaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', '	Toshkent shahri'
            ],
            datasets: [{
                label: 'maktablar',
                data: [726, 767, 537, 553, 1217, 368, 712, 1267, 933, 318, 884, 959, 549, 340],
                backgroundColor: '#7c69ef',
                borderColor: 'rgba(151, 187, 205, 0.8)',
                highlightFill: 'rgba(151, 187, 205, 0.75)',
                highlightStroke: 'rgba(151, 187, 205, 1)',
                borderWidth: 1
            }]
        },

        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,

            elements: {
                bar: {
                    borderWidth: 2,
                }
            },
            plugins: {
                legend: {
                    display: false,
                    position: 'right',
                },
            }
        },
    });
</script>
@endpush
