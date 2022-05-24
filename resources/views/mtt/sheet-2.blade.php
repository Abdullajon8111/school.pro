<canvas id="chart-sheet-2-4" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-sheet-2-4').getContext('2d'), {
            type: 'line',
            data: {
                labels: [
                    'Toshkent viloyati', 'Qashqadaryo viloyati', 'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati',
                    'Farg‘ona viloyati', 'Samarqand viloyati', 'Namangan viloyati', 'Xorazm viloyati',
                    'Sirdaryo viloyati', 'Navoiy viloyati', 'Surxondaryo viloyati', 'Jizzax viloyati',
                    'Buxoro viloyati', 'Toshkent shahri'
                ],
                datasets: [{
                    label: "Hududda 3-7 yoshli bolalar soni: (2,564,275 ta)",
                    data: [212851, 296449, 153464, 265481, 303619, 340974, 242389, 152421, 68153, 80671, 0, 120008, 136758, 191040],
                    backgroundColor: [
                        'rgba(83,123,196 ,0.5)',
                        'rgba(245,55,148, 0.6)',
                    ],
                    borderColor: 'rgba(151, 187, 205, 0)',
                    highlightFill: 'rgba(187, 151, 205, 0.25)',
                    highlightStroke: 'rgba(151, 187, 205, 0.25)',
                    borderWidth: 1,
                    fill: true,
                }, {
                    label: "Qamrab olingan bolalar soni (1,891,108 ta)",
                    data: [147965, 158403, 119044, 202167, 251402, 230268, 177518, 114399, 53226, 68614, 0, 91763, 120418, 155921],
                    backgroundColor: [
                        'rgba(83,123,196 ,0.7)',
                        'rgba(245,55,148,0.6)',
                    ],
                    borderColor: 'rgba(151, 187, 205, 0)',
                    highlightFill: 'rgba(151, 187, 205, 0.25)',
                    highlightStroke: 'rgba(151, 187, 205, 0.25)',
                    borderWidth: 1,
                    fill: true,
                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Respublikada 3-7 yoshli bolalarni maktabgacha taʼlimga qamrab olish holati'
                    },
                }
            },
        });
    </script>
@endpush
