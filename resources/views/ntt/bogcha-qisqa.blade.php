<canvas id="chart-ntt-3" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ntt-3').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                    'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                    'Namangan viloyati', 'Samarqand viloyati', 'Sirdaryo viloyati',
                    'Surxondaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', '	Toshkent shahri'
                ],
                datasets: [{
                    label: "Qisqa muddatli bogʻchalar",
                    data: [1, 1, 5, 1, 7, 0, 1, 8, 1, 0, 14, 2, 3, 181,],
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
                        text: 'Qisqa muddatli bogʻchalar'
                    },
                }
            },
        });
    </script>
@endpush
