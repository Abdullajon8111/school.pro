<canvas id="chart-8" height="400"></canvas>

@push('after_scripts')
    <script>
        const ctx8 = document.getElementById('chart-8').getContext('2d');
        const chart8 = new Chart(ctx8, {
            type: 'bar',
            data: {
                labels: [
                    'Қорақалпоғистон Республикаси', 'Андижон вилояти', 'Бухоро вилояти',
                    'Жиззах вилояти', 'Қашқадарё вилояти', 'Навоий вилояти',
                    'Наманган вилояти', 'Самарқанд вилояти', 'Сурхондарё вилояти',
                    'Сирдарё вилояти', 'Тошкент вилояти', 'Фарғона вилояти', 'Хоразм вилояти', 'Тошкент шаҳри'
                ],
                datasets: [{
                    label: 'инглиз тили',
                    data: [719, 637, 503, 544, 1185, 340, 711, 1206, 887, 316, 877, 946, 531, 328],
                    backgroundColor: '#4dc9f6',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1
                }, {
                    label: 'немис тили',
                    data: [25, 71, 61, 20, 203, 41, 65, 160, 85, 7, 32, 91, 112, 7],
                    backgroundColor: '#f53794',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    hidden: true
                }, {
                    label: 'француз тили',
                    data: [13, 56, 75, 18, 73, 31, 50, 128, 42, 11, 26, 32, 137, 12],
                    backgroundColor: '#acc236',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    hidden: true
                }, {
                    label: 'бошқа тиллар*',
                    data: [1, 3, 4, 1, 0, 2, 0, 1, 1, 0, 2, 0, 3, 11],
                    backgroundColor: '#8549ba',
                    borderColor: 'rgba(151, 187, 205, 0.8)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1,
                    hidden: true
                },]
            },

            options: {
                indexAxis: 'x',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'чет тили'
                    }
                }
            },
        });
    </script>
@endpush
