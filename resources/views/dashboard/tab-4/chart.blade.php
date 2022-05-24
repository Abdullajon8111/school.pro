<canvas id="chart-4" width="400" height="400"></canvas>

@push('after_scripts')
    <script>
        const ctx4 = document.getElementById('chart-4').getContext('2d');
        const chart4 = new Chart(ctx4, {
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
                    data: [57, 72, 65, 35, 61, 36, 68, 60, 50, 29, 56, 92, 57, 53],
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
