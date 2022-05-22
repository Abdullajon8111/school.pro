<canvas id="chart-ntt-1" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ntt-1').getContext('2d'), {
            type: 'line',
            data: {
                labels: [
                    'Қорақалпоғистон Республикаси', 'Андижон вилояти', 'Бухоро вилояти',
                    'Жиззах вилояти', 'Қашқадарё вилояти', 'Навоий вилояти',
                    'Наманган вилояти', 'Самарқанд вилояти', 'Сирдарё вилояти',
                    'Сурхондарё вилояти', 'Тошкент вилояти', 'Фарғона вилояти', 'Хоразм вилояти', '	Тошкент шаҳри'
                ],
                datasets: [{
                    label: "Maktabgacha taʼlim",
                    data: [95, 178, 122, 75, 174, 78, 114, 202, 33, 153, 171, 174, 102, 473],
                    backgroundColor: [
                        'rgba(151, 187, 205, 0.75)',
                        'rgba(151, 205, 100, 0.75)',
                        'rgba(205, 100, 100, 0.75)',
                        'rgba(100, 100, 100, 0.75)',
                        'rgba(0, 255, 100, 0.75)',
                    ],
                    borderColor: 'rgba(151, 187, 205, 1)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    fill: true
                }, {
                    label: "Umumiy oʻrta taʼlim",
                    data: [5, 24, 16, 7, 8, 2, 22, 30, 4, 4, 12, 52, 14, 98],
                    backgroundColor: [
                        'rgba(151, 187, 205, 0.75)',
                        'rgba(151, 205, 100, 0.75)',
                        'rgba(205, 100, 100, 0.75)',
                        'rgba(100, 100, 100, 0.75)',
                        'rgba(0, 255, 100, 0.75)',
                    ],
                    borderColor: 'rgba(151, 187, 205, 1)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    fill: true
                }, {
                    label: "Maktabdan tashqari taʼlim",
                    data: [13, 35, 12, 26, 14, 20, 48, 18, 13, 5, 42, 39, 25, 313],
                    backgroundColor: [
                        'rgba(151, 187, 205, 0.75)',
                        'rgba(151, 205, 100, 0.75)',
                        'rgba(205, 100, 100, 0.75)',
                        'rgba(100, 100, 100, 0.75)',
                        'rgba(0, 255, 100, 0.75)',
                    ],
                    borderColor: 'rgba(151, 187, 205, 1)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    fill: true
                }, {
                    label: "Kadrlarni qayta tayyorlash va ularning malakasini oshirish",
                    data: [23, 30, 26, 7, 28, 22, 29, 53, 14, 24, 49, 24, 29, 495],
                    backgroundColor: [
                        'rgba(151, 187, 205, 0.75)',
                        'rgba(151, 205, 100, 0.75)',
                        'rgba(205, 100, 100, 0.75)',
                        'rgba(100, 100, 100, 0.75)',
                        'rgba(0, 255, 100, 0.75)',
                    ],
                    borderColor: 'rgba(151, 187, 205, 1)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    fill: true
                }, {
                    label: "Oliy taʼlim",
                    data: [0, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 3, 3, 24],
                    backgroundColor: [
                        'rgba(151, 187, 205, 0.75)',
                        'rgba(151, 205, 100, 0.75)',
                        'rgba(205, 100, 100, 0.75)',
                        'rgba(100, 100, 100, 0.75)',
                        'rgba(0, 255, 100, 0.75)',
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
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Filialsiz'
                    },
                }
            },
        });
    </script>
@endpush
