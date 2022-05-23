<canvas id="chart-dashboard-8" width="400" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-dashboard-8').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    'Қорақалпоғистон Республикаси', 'Андижон вилояти', 'Бухоро вилояти',
                    'Жиззах вилояти', 'Қашқадарё вилояти', 'Навоий вилояти',
                    'Наманган вилояти', 'Самарқанд вилояти', 'Сурхондарё вилояти',
                    'Сирдарё вилояти', 'Тошкент вилояти', 'Фарғона вилояти', 'Хоразм вилояти', 'Тошкент шаҳри'
                ],
                datasets: [{
                    label: 'maktablar',
                    data: [
                        351320, 570282, 321919, 258906,
                        638900, 181532, 509387, 744206, 511905,
                        155146, 503617, 671909, 357230, 470232
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
