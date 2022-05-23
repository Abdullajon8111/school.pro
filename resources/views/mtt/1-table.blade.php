<canvas id="chart-mtt-1" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-mtt-1').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    'Toshkent viloyati', 'Qashqadaryo viloyati', 'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati',
                    'Farg‘ona viloyati', 'Samarqand viloyati', 'Namangan viloyati', 'Xorazm viloyati',
                    'Sirdaryo viloyati', 'Navoiy viloyati', 'Surxondaryo viloyati', 'Jizzax viloyati',
                    'Buxoro viloyati', 'Toshkent shahri'
                ],
                datasets: [{
                    label: "3-7 yoshli bolalar soni",
                    data: [218609, 296449, 153464, 265481, 303619, 340974, 242389, 152421, 68153, 80671, 0, 120008, 148507, 185282],
                    backgroundColor: ['#4dc9f6'],
                    borderColor: 'rgba(151, 187, 205, 0)',
                    highlightFill: 'rgba(151, 187, 205, 0.75)',
                    highlightStroke: 'rgba(151, 187, 205, 1)',
                    borderWidth: 1
                }, {
                    label: "6 yoshli bolalar soni",
                    data: [55699, 70142, 39506, 66216, 75089, 85559, 60968, 39235, 16882, 19925, 0, 29055, 37122, 45558],
                    backgroundColor: ['#f67019'],
                    borderColor: 'rgba(151, 187, 205, 0)',
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
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: '2021 bolalar soni'
                    },
                }
            },
        });
    </script>
@endpush
