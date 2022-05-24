<canvas id="chart-5" height="400"></canvas>

@push('after_scripts')
    <script>
        const ctx5 = document.getElementById('chart-5').getContext('2d');
        const chart5 = new Chart(ctx5, {
            type: 'radar',
            data: {
                labels: [
                    'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                    'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                    'Namangan viloyati', 'Samarqand viloyati', 'Surxondaryo viloyati',
                    'Sirdaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', 'Toshkent shahri'
                ],
                datasets: [{
                    label: 'Shahar',
                    data: [51, 103, 58, 74, 107, 41, 148, 108, 28, 35, 145, 158, 67, 340],
                    backgroundColor: '#166a8f',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1
                }, {
                    label: 'Tuman',
                    data: [160, 144, 61, 48, 88, 66, 134, 117, 160, 44, 94, 86, 57, 0],
                    backgroundColor: '#f53794',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1
                }, {
                    label: 'Qishloq',
                    data: [489, 520, 413, 374, 843, 188, 423, 951, 681, 237, 613, 667, 417, 0],
                    backgroundColor: '#4dc9f6',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    hidden: true
                }, {
                    label: 'Olis hududlarda',
                    data: [26, 0, 5, 57, 179, 73, 7, 91, 64, 2, 32, 48, 8, 0],
                    backgroundColor: '#8549ba',
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
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Umumiy o‘rta ta’lim maktablarining joylashuvga ko’ra turlari (Hududlar kesimida)'
                    }
                }
            },
        });
    </script>
@endpush
