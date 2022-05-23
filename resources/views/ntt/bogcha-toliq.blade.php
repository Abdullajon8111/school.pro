<canvas id="chart-ntt-4" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ntt-4').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Қорақалпоғистон Республикаси', 'Андижон вилояти', 'Бухоро вилояти',
                    'Жиззах вилояти', 'Қашқадарё вилояти', 'Навоий вилояти',
                    'Наманган вилояти', 'Самарқанд вилояти', 'Сирдарё вилояти',
                    'Сурхондарё вилояти', 'Тошкент вилояти', 'Фарғона вилояти', 'Хоразм вилояти', '	Тошкент шаҳри'
                ],
                datasets: [{
                    label: "Toʻliq bogʻchalar",
                    data: [88, 170, 111, 71, 165, 78, 111, 183, 30, 149, 148, 167, 99, 266],
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
                        text: 'Toʻliq bogʻchalar'
                    },
                }
            },
        });
    </script>
@endpush
