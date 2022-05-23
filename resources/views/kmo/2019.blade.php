<canvas id="chart-2019-1" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-2019-1').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Attestatsiyaga jalb qilingan malaka oshirish yoʻnalishlari soni',
                    'Attestatsiyadan oʻtganlari soni',
                    'Attestatsiyadan oʻtmaganlari soni',
                    'Attestatsiyaga jalb qilingan qayta tayyorlash yoʻnalishlari soni',
                    'Attestatsiyadan oʻtganlari soni',
                    'Attestatsiyadan oʻtmaganlari soni',
                    // 'Malaka oshirish va qayta tayyorlash taʼlim muassasasi (ordinatura)ning attestatsiyadan oʻtganligi'
                ],
                datasets: [{
                    label: 'soni',
                    data: [178,128,50,3,0,3],
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
                        text: '2019'
                    },
                }
            },
        });
    </script>
@endpush
