<canvas id="chart-9" width="400" height="400"></canvas>

@push('after_scripts')
    <script>
        const ctx9 = document.getElementById('chart-9').getContext('2d');
        const chart9 = new Chart(ctx9, {
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
                    data: [
                        1, 3, 4, 1,
                        0, 2, 0, 1, 1,
                        0, 2, 0, 3, 11
                    ],
                    backgroundColor: '#7c69ef',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1
                }]
            },

            options: {
                indexAxis: 'y',
                elements: {
                    bar: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
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
