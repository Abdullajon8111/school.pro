<canvas id="chart-sheet-2" width="529" height="400"></canvas>

@push('after_scripts')
    <script>
        new Chart(document.getElementById('chart-sheet-2').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    'Toshkent viloyati', 'Qashqadaryo viloyati', 'Qoraqalpog‘iston Respublikasi', 'Andijon viloyati',
                    'Farg‘ona viloyati', 'Samarqand viloyati', 'Namangan viloyati', 'Xorazm viloyati',
                    'Sirdaryo viloyati', 'Navoiy viloyati', 'Surxondaryo viloyati', 'Jizzax viloyati',
                    'Buxoro viloyati', 'Toshkent shahri'
                ],
                datasets: [{
                    label: "Jami imzolangan bitimlar",
                    data: [62, 168, 148, 198, 155, 151, 74, 156, 68, 87, 0, 218, 137, 0],
                    backgroundColor: ['#4dc9f6'],
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
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Respublikada davlat-hususiy sherikchilik doirasida nodavlat maktabgacha taʼlim tashkilotlarini tashkil etish holati'
                    },
                }
            },
        });
    </script>
@endpush
