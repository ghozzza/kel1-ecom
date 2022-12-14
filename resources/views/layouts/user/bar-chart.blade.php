<div class="card">
    <div class="card-body">
        <h5 class="card-title">Bar CHart</h5>

        <!-- Bar Chart -->
        <canvas id="barChart" style="max-height: 400px;"></canvas>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                        labels: ['TK', 'KB', 'SPS', 'PKBM', 'SKB', 'SD', 'SMP', 'SMA', 'SMK', 'SLB'],
                        datasets: [{
                            label: 'Bar Chart',
                            data: [{{ $data->tk }}, {{ $data->kb }}, {{ $data->sps }},
                                {{ $data->pkbm }}, {{ $data->skb }}, {{ $data->sd }},
                                {{ $data->smp }}, {{ $data->sma }}, {{ $data->smk }},
                                {{ $data->slb }}
                            ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
        <!-- End Bar CHart -->

    </div>
</div>