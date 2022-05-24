<canvas id="chart-otm-3" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-otm-3').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Universitetlar', 'Institutlar', 'Akademiyalar',
                    'Filiallar', 'Konservatoriya', 'Chet el OTM filiallari',
                    "Nodavlat oliy ta'lim muassasalari"
                ],

                datasets: [{
                    label: "Respublika bo'yicha oliy ta’lim muassasalari soni (turlari bo'yicha)",
                    data: [32, 45, 3, 28, 1, 28, 24],
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
                    borderColor: 'rgba(151, 187, 205, 0)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1
                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'left',
                    },
                    title: {
                        display: true,
                        text: "Respublika bo'yicha oliy ta’lim muassasalari soni (turlari bo'yicha) Jami: 161"
                    },
                }
            },
        });
    </script>
@endpush
