<canvas id="chart-ak-2" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ak-2').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Қорақалпоғистон Республикаси', 'Андижон вилояти', 'Бухоро вилояти',
                    'Жиззах вилояти', 'Қашқадарё вилояти', 'Навоий вилояти',
                    'Наманган вилояти', 'Самарқанд вилояти', 'Сирдарё вилояти',
                    'Сурхондарё вилояти', 'Тошкент вилояти', 'Фарғона вилояти', 'Хоразм вилояти', '	Тошкент шаҳри'
                ],
                datasets: [{
                    label: "қувати",
                    data: [35850, 55930, 32000, 23460, 46175, 16342, 54750, 58240, 16462, 39552, 43090, 64947, 30045, 26325],
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
                        text: 'қувати'
                    },
                }
            },
        });
    </script>
@endpush
