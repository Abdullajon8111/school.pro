<canvas id="chart-3" width="400" height="400"></canvas>

@push('after_scripts')
<script>
    const ctx3 = document.getElementById('chart-3').getContext('2d');
    const chart3 = new Chart(ctx3, {
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
                data: [346, 758, 520, 534, 1187, 300, 705, 1266, 1266, 316, 813, 934, 536, 306],
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
