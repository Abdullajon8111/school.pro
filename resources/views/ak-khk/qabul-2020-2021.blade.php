<canvas id="chart-ak-4" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-ak-4').getContext('2d'), {
            type: 'line',
            data: {
                labels: [
                    'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati', 'Buxoro viloyati',
                    'Jizzax viloyati', 'Qashqadaryo viloyati', 'Navoiy viloyati',
                    'Namangan viloyati', 'Samarqand viloyati', 'Sirdaryo viloyati',
                    'Surxondaryo viloyati', 'Toshkent viloyati', 'Farg‘ona viloyati', 'Xorazm viloyati', '	Toshkent shahri'
                ],
                datasets: [{
                    label: "amalda",
                    data: [14007, 20455, 10428, 8152, 16228, 6379, 15683, 23093, 5211, 12826, 16063, 21174, 11391, 11210],
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
                    data: [17549, 22236, 11230, 10960, 16657, 5976, 18125, 26073, 6560, 15428, 15407, 24805, 13030, 13110],
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
