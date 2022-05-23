<canvas id="chart-4" width="400" height="400"></canvas>

@push('after_scripts')
    <script>
        const ctx4 = document.getElementById('chart-4').getContext('2d');
        const chart4 = new Chart(ctx4, {
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
