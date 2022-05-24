<canvas id="chart-ntt-2" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ntt-2').getContext('2d'), {
            type: 'line',
            data: {
                labels: [
                    'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                    'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                    'Namangan viloyati', 'Samarqand viloyati', 'Sirdaryo viloyati',
                    'Surxondaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', '	Toshkent shahri'
                ],
                datasets: [{
                    label: "Maktabgacha taʼlim",
                    data: [90, 171, 117, 72, 173, 79, 121, 195, 32, 149, 165, 171, 102, 510,],
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
                    data: [5, 23, 16, 8, 10, 2, 25, 27, 3, 4, 11, 53, 14, 98,],
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
                    data: [13, 35, 12, 26, 14, 20, 48, 18, 13, 5, 42, 39, 25, 313,],
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
                    data: [23, 30, 26, 7, 28, 22, 29, 53, 14, 24, 49, 24, 29, 495,],
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
                    data: [0, 2, 1, 1, 0, 0, 1, 0, 0, 0, 1, 3, 3, 24,],
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
                        text: 'Respublika miqyosida nodavlat taʼlim sohasida faoliyat koʻrsatayotgan yuridik shaxslar toʻgʻrisida maʼlumot (Filial bilan)'
                    },
                }
            },
        });
    </script>
@endpush
