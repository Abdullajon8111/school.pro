<canvas id="chart-3" height="400"></canvas>

@push('after_scripts')
<script>
    const ctx3 = document.getElementById('chart-3').getContext('2d');
    const chart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: [
                'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                'Namangan viloyati', 'Samarqand viloyati', 'Surxondaryo viloyati',
                'Sirdaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', 'Toshkent shahri'
            ],
            datasets: [{
                type: 'line',
                label: 'O‘zbek tilida',
                data: [346, 758, 520, 534, 1187, 300, 705, 1266, 1266, 316, 813, 934, 536, 306],
                backgroundColor: '#4dc9f6',
                borderColor: '#4dc9f6',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Qoraqalpoq tilida',
                data: [374, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: '#f67019',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Rus tilida',
                data: [77, 69, 34, 27, 37, 22, 62, 105, 24, 33, 159, 80, 23, 251],
                backgroundColor: '#f53794',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Tojik tilida',
                data: [0, 0, 1, 6, 49, 5, 12, 36, 79, 6, 28, 32, 0, 0],
                backgroundColor: '#acc236',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1,
            }, {
                label: 'Qozoq tilida',
                data: [153, 0, 10, 3, 0, 66, 0, 0, 0, 2, 123, 0, 1, 3],
                backgroundColor: '#166a8f',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Qirg‘iz tilida',
                data: [0, 22, 0, 15, 0, 0, 3, 0, 0, 0, 5, 4, 0, 0],
                backgroundColor: '#00a950',
                borderColor: 'rgba(151, 187, 205, 0)',
                highlightFill: 'rgba(151, 187, 205, 0)',
                highlightStroke: 'rgba(151, 187, 205, 0)',
                borderWidth: 1
            }, {
                label: 'Turkman tilida',
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
                        return !item.text.includes('O‘zbek');
                    }
                },
                title: {
                    display: true,
                    text: 'Umumiy o‘rta ta’lim maktablarining ta’lim tillari (Hududlar kesimida)'
                }
            },
            responsive: true,
            maintainAspectRatio: false
        },
    });
</script>
@endpush
