<canvas id="chart-ak-3" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ak-3').getContext('2d'), {
            type: 'line',
            data: {
                labels: [
                    'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                    'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                    'Namangan viloyati', 'Samarqand viloyati', 'Sirdaryo viloyati',
                    'Surxondaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', '	Toshkent shahri'
                ],
                datasets: [{
                    label: "pedagoklar soni",
                    data: [2268, 2480, 1771, 1024, 2130, 723, 1457, 3363, 703, 1818, 2192, 3175, 1406, 961],
                    backgroundColor: [
                        '#4dc9f6',
                        '#f67019',
                        '#f53794',
                        '#537bc4',
                        '#acc236',
                        '#166a8f',
                        '#00a950',
                        '#58595b',
                        '#8549ba'
                    ],
                    borderColor: 'rgba(151, 187, 205, 1)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    fill: true
                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'педагоклар сони'
                    },
                }
            },
        });
    </script>
@endpush
