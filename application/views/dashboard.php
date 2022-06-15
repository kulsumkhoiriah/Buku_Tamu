<?php if ($this->session->userdata('level') == 1) { ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-3">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-3">
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                Data Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_datamasuk() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                Perlu Persetujuan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_persetujuan() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-4">
                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                Visitor yang di izinkan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_diizinkan() ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-smile fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-4">
                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                Visitor yang tidak di izinkan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_ditolak() ?></div>
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
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
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
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pie Chart</h6>
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
        </div>
    <?php } else if ($this->session->userdata('level') == 2) { ?>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-3">
                                <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
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
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                    Perlu Peretujuan </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_persetujuan_kasek() ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-4">
                                <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                    Visitor yang di izinkan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_diizinkan_kasek() ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-smile fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-4">
                                <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                    Visitor yang tidak di izinkan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_ditolak_kasek() ?></div>
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
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
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
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pie Chart</h6>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                                Perlu Peretujuan Kepala Seksi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_persetujuan_kasek() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Perlu Persetujuan Kepala Departemen</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_persetujuan() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-4">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Visitor yang di izinkan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_diizinkan() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-smile fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-4">
                                            <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                                Visitor yang tidak di izinkan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_ditolak() ?></div>
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
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
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
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pie Chart</h6>
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