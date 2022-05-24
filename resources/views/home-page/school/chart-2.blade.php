<canvas id="chart-2" width="529" height="400"></canvas>

@push('after_scripts')
<script>
    const ctx2 = document.getElementById('chart-2').getContext('2d');
    const chart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: [
                'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                'Namangan viloyati', 'Samarqand viloyati', 'Surxondaryo viloyati',
                'Sirdaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', '	Toshkent shahri'
            ],
            datasets: [{
                label: 'maktablar',
                data: [351320, 570282, 321919, 258906, 638900, 181532, 509387, 744206, 511905, 155146, 503617, 671909, 357230, 470232],
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
                borderColor: 'rgba(151, 187, 205, 0.8)',
                highlightFill: 'rgba(151, 187, 205, 0.75)',
                highlightStroke: 'rgba(151, 187, 205, 1)',
                borderWidth: 1
            }]
        },

        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                    position: 'left',
                },
                title: {
                    display: true,
                    text: 'Umumiy o‘rta ta’lim maktab o‘quvchilari soni (Hududlar kesimida)'
                },
            }
        },
    });
</script>
@endpush
