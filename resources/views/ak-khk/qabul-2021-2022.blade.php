<canvas id="chart-ak-5" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ak-5').getContext('2d'), {
            type: 'line',
            data: {
                labels: [
                    'Қорақалпоғистон Республикаси', 'Андижон вилояти', 'Бухоро вилояти',
                    'Жиззах вилояти', 'Қашқадарё вилояти', 'Навоий вилояти',
                    'Наманган вилояти', 'Самарқанд вилояти', 'Сирдарё вилояти',
                    'Сурхондарё вилояти', 'Тошкент вилояти', 'Фарғона вилояти', 'Хоразм вилояти', '	Тошкент шаҳри'
                ],
                datasets: [{
                    label: "amalda",
                    data: [12412, 17844, 11546, 8541, 14356, 8127, 15838, 21485, 5391, 11130, 25410, 25125, 16377, 11963],
                    backgroundColor: [
                        'rgba(187, 151, 205, 0.5)',
                        'rgba(151, 187, 205, 0.5)',
                        '#f53794',
                        '#537bc4',
                        '#acc236',
                        '#166a8f',
                        '#00a950',
                        '#58595b',
                        '#8549ba'
                    ],
                    borderColor: 'rgba(151, 187, 205, 0)',
                    highlightFill: 'rgba(187, 151, 205, 0.25)',
                    highlightStroke: 'rgba(151, 187, 205, 0.25)',
                    borderWidth: 1,
                    fill: true,
                }, {
                    label: "reja",
                    data: [19703, 20300, 18772, 11830, 18780, 7425, 24445, 27808, 9560, 17930, 21855, 34305, 13582, 14757],
                    backgroundColor: [
                        'rgba(187, 151, 205, 0.5)',
                        'rgba(151, 187, 205, 0.5)',
                        '#f53794',
                        '#537bc4',
                        '#acc236',
                        '#166a8f',
                        '#00a950',
                        '#58595b',
                        '#8549ba'
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
                        text: '2020-2021 oʻquv yilida'
                    },
                }
            },
        });
    </script>
@endpush
