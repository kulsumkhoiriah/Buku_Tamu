<?php if ($this->session->userdata('level') == 1) { ?>
    <section class="content-header">
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-dashboard text-black-50"></i> Dashboard</a></li> 
        </li>
</ol>

        <br>
        
    <div class="row">
        <!-- count data masuk -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-90 py-3 bg-primer radius">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-3">
                            <div class="text-s font-weight-bold text-secondary mb-1">
                                Data Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_datamasuk() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-90 py-3 bg-kuning radius">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-l font-weight-bold text-secondary mb-1">
                                Perlu Persetujuan</div>
                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_persetujuan() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-90 py-3 bg-hijau radius">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-l font-weight-bold text-secondary mb-1">
                                Visitor Diizinkan</div>
                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_diizinkan() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-smile fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-90 py-3 bg-merah radius">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold  text-secondary mb-1">
                                Visitor Ditolak</div>
                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_ditolak() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-frown fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="h3 mb-2 text-gray-800">Charts</h1>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-6 col-lg-7 ">
            <!-- Area Chart -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3 bg-navy">
                    <h6 class="m-0 font-weight-bold text-white">Diagram Pengunjung Data Center</h6>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                <script type="text/javascript">
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                                <?php
                                if (count($graph) > 0) {
                                    foreach ($graph as $data) {
                                        echo "'" . $data->tanggal . "',";
                                    }
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'Jumlah Visitor',
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1,
                                data: [
                                    <?php
                                    if (count($graph) > 0) {
                                        foreach ($graph as $data) {
                                            echo $data->status . ", ";
                                        }
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
                <hr>
            </div>

        </div>
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-8">
                <div class="card-header py-3 bg-navy">
                    <h6 class="m-0 font-weight-bold text-white">Pie Chart</h6>
                </div>
                <div class="card-body">
                    <canvas id="iChart"></canvas>

                    <script>
                        var xValues = ["Disetujui", "Ditolak"];
                        var yValues = [<?= $this->fungsi->count_diizinkan() ?>, <?= $this->fungsi->count_ditolak() ?>];
                        var barColors = [
                            "#00aba9",
                            "#b91d47",
                        ];
                        new Chart("iChart", {
                            type: "pie",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                title: {
                                    display: true,
                                    text: ""
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div></div>
    <?php } else if ($this->session->userdata('level') == 2) { ?>
        <section class="content-header">
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-dashboard text-black-50"></i> Dashoard</a></li>
       
        </li>
</ol>
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-90 bg-primer py-3 radius">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-3">
                                <div class="text-s font-weight-bold text-secondary mb-1">
                                    Data Masuk</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_datamasuk_kasek() ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-90 py-3 bg-kuning radius">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-secondary  mb-1">
                                    Perlu Peretujuan </div>
                                <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_persetujuan_kasek() ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-90 py-3 bg-hijau radius">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-4">
                                <div class="text-l font-weight-bold text-secondary mb-1">
                                    Visitor Diizinkan</div>
                                <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_diizinkan_kasek() ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-smile fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2 bg-merah radius">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-4">
                                <div class="text-s font-weight-bold text-secondary mb-1">
                                    Visitor Ditolak</div>
                                <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_ditolak_kasek() ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-frown fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="h3 mb-2 text-gray-800">Charts</h1>

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-navy">
                        <h6 class="m-0 font-weight-bold text-white">Diagram Pengunjung Data Center</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [
                                    <?php
                                    if (count($grafik) > 0) {
                                        foreach ($grafik as $data) {
                                            echo "'" . $data->tanggal . "',";
                                        }
                                    }
                                    ?>
                                ],
                                datasets: [{
                                    label: 'Jumlah Visitor',
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)'
                                    ],
                                    borderWidth: 1,
                                    data: [
                                        <?php
                                        if (count($grafik) > 0) {
                                            foreach ($grafik as $data) {
                                                echo $data->status_kasek . ", ";
                                            }
                                        }
                                        ?>
                                    ]
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="card shadow mb-8">
                    <div class="card-header py-3 bg-navy">
                        <h6 class="m-0 font-weight-bold text-white">Pie Chart</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="Chart"></canvas>
                    </div>


                    <script>
                        var xValues = ["Disetujui", "Ditolak"];
                        var yValues = [<?= $this->fungsi->count_diizinkan_kasek() ?>, <?= $this->fungsi->count_ditolak_kasek() ?>];
                        var barColors = [
                            "#00aba9",
                            "#b91d47",
                        ];

                        new Chart("Chart", {
                            type: "pie",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                title: {
                                    display: true,
                                    text: ""
                                }
                            }
                        });
                    </script>



                <?php } else if ($this->session->userdata('level') == 3) { ?>
                    <section class="content-header">
    <ol class="bg-white breadcrumb rounded-pill">
        <li><a href="#" class="radius"><i class="fa fa-dashboard text-black-50"></i> Dashboard</a></li>
       
        </li>
</ol>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-90 py-2 radius bg-primer">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-secondary  mb-1">
                                                Perlu Peretujuan Kasek</div>
                                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_persetujuan_kasek() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-90 py-2 radius bg-kuning">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-secondary  mb-1">
                                                Perlu Persetujuan Kadep</div>
                                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_persetujuan() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 radius bg-hijau">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-4">
                                            <div class="text-s font-weight-bold text-secondary  mb-1">
                                                Visitor di izinkan</div>
                                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_diizinkan() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-smile fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2 radius bg-merah">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-4">
                                            <div class="text-s font-weight-bold text-secondary  mb-1">
                                                Visitor Ditolak</div>
                                            <div class="h5 mb-0 font-weight-bold text-secondary"><?= $this->fungsi->count_ditolak() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-frown fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="h3 mb-2 text-gray-800">Charts</h1>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 bg-navy">
                                    <h6 class="m-0 font-weight-bold text-white">Diagram Pengunjung Data Center</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart"></canvas>
                                </div>

                                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                                <script type="text/javascript">
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var chart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [
                                                <?php
                                                if (count($graph) > 0) {
                                                    foreach ($graph as $data) {
                                                        echo "'" . $data->tanggal . "',";
                                                    }
                                                }
                                                ?>
                                            ],
                                            datasets: [{
                                                label: 'Jumlah Visitor',
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)'
                                                ],
                                                borderWidth: 1,
                                                data: [
                                                    <?php
                                                    if (count($graph) > 0) {
                                                        foreach ($graph as $data) {
                                                            echo $data->status . ", ";
                                                        }
                                                    }
                                                    ?>
                                                ]
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-8">
                                <div class="card-header py-3 bg-navy">
                                    <h6 class="m-0 font-weight-bold text-white">Pie Chart</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="iChart"></canvas>

                                    <script>
                                        var xValues = ["Disetujui", "Ditolak"];
                                        var yValues = [<?= $this->fungsi->count_diizinkan() ?>, <?= $this->fungsi->count_ditolak() ?>];
                                        var barColors = [
                                            "#00aba9",
                                            "#b91d47",
                                        ];
                                        new Chart("iChart", {
                                            type: "pie",
                                            data: {
                                                labels: xValues,
                                                datasets: [{
                                                    backgroundColor: barColors,
                                                    data: yValues
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: ""
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div><?php } ?>