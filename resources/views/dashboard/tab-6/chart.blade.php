<canvas id="chart-6" width="400" height="400"></canvas>

@push('after_scripts')
    <script>
        const ctx6 = document.getElementById('chart-6').getContext('2d');
        const chart6 = new Chart(ctx6, {
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
                    data: [138, 74, 22, 117, 136, 34, 32, 185, 207, 41, 43, 69, 9, 0],
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
