<canvas id="chart-3" height="400"></canvas>

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
                type: 'line',
                label: 'Ўзбек тилида',
                data: [346, 758, 520, 534, 1187, 300, 705, 1266, 1266, 316, 813, 934, 536, 306],
                backgroundColor: '#4dc9f6',
                borderColor: '#4dc9f6',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Қорақалпоқ тилида',
                data: [374, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: '#f67019',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Рус тилида',
                data: [77, 69, 34, 27, 37, 22, 62, 105, 24, 33, 159, 80, 23, 251],
                backgroundColor: '#f53794',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Тожик тилида',
                data: [0, 0, 1, 6, 49, 5, 12, 36, 79, 6, 28, 32, 0, 0],
                backgroundColor: '#acc236',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1,
            }, {
                label: 'Қозоқ тилида',
                data: [153, 0, 10, 3, 0, 66, 0, 0, 0, 2, 123, 0, 1, 3],
                backgroundColor: '#166a8f',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Қирғиз тилида',
                data: [0, 22, 0, 15, 0, 0, 3, 0, 0, 0, 5, 4, 0, 0],
                backgroundColor: '#00a950',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Туркман тилида',
                data: [54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0],
                backgroundColor: '#58595b',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            },]
        },

        options: {
            elements: {
                bar: {
                    borderWidth: 2,
                },
                disable: false
            },
            plugins: {
                labels: {
                    filter: function(item, chart) {
                        return !item.text.includes('Ўзбек');
                    }
                },
                title: {
                    display: true,
                    text: 'талим тили'
                }
            },
            responsive: true,
            maintainAspectRatio: false
        },
    });
</script>
@endpush
