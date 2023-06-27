<?php
include('barra-lateral.php');
require('../includes/config/database.php');
$db = conectarDB();

?>
<!-- contenido -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Profile Views</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Followers</h6>
                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Following</h6>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                <div class="GraficaBarras">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ["Distrito", "Cantidad", {
                                    role: "style"
                                }],
                                <?php
                                $SQL = "SELECT dp_distrito.Nombre, dp_distrito.color, COUNT(*) AS Total FROM dp_cliente INNER JOIN dp_distrito ON dp_cliente.IdDistrito=dp_distrito.idDistrito GROUP BY dp_cliente.IdDistrito HAVING COUNT(*) >0";
                                $consultita = mysqli_query($db, $SQL);
                                while ($resultado1 = mysqli_fetch_assoc($consultita)) {
                                    echo "['" . $resultado1['Nombre'] . "', " . $resultado1['Total'] . ", '" . $resultado1['color'] . "' ],";
                                }
                                ?>
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 1,
                                {
                                    calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation"
                                },
                                2
                            ]);

                            var options = {
                                title: "Distritos Por Cliente",
                                titleTextStyle: {
                                    color: '#25396f',
                                    fontSize: 20,
                                    bold: true
                                },
                                width: 600,
                                height: 400,
                                bar: {
                                    groupWidth: "80%"
                                },
                                legend: {
                                    position: "none"
                                },
                            };
                            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                            chart.draw(view, options);
                        }
                    </script>
                    <div id="columnchart_values"></div>
                </div>

                <div class="GraficaBarras2">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Especie', 'Cantidad'],
                                <?php
                                $SQL2 = "SELECT dp_especie.nombreEspe, COUNT(*) AS Total FROM dp_mascota INNER JOIN dp_especie ON dp_mascota.idEspecie=dp_especie.idEspecie GROUP BY dp_especie.nombreEspe HAVING COUNT(*) >0";
                                $consultita2 = mysqli_query($db, $SQL2);
                                while ($resultado2 = mysqli_fetch_assoc($consultita2)) {
                                    echo "['" . $resultado2['nombreEspe'] . "', " . $resultado2['Total'] . "],";
                                }
                                ?>
                            ]);

                            var options = {
                                title: 'Cantidad de especies',
                                is3D: true,
                                pieHole: 0.01964436917866215,
                                fontSize: 15,
                                width: 600,
                                height: 400,
                                titleTextStyle: {
                                    color: '#25396f',
                                    fontSize: 20,
                                    bold: true
                                },
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart_3d"></div>
                </div>

                <div class="GraficaBarras3">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Género', 'Cantidad'],
                                <?php
                                $SQL3 = "SELECT dp_mascota.SexoMasc, COUNT(*) AS Total FROM dp_mascota INNER JOIN dp_especie ON dp_mascota.idEspecie=dp_especie.idEspecie GROUP BY dp_mascota.SexoMasc HAVING COUNT(*) >0";
                                $consultita3 = mysqli_query($db, $SQL3);
                                while ($resultado3 = mysqli_fetch_assoc($consultita3)) {
                                    echo "['" . $resultado3['SexoMasc'] . "', " . $resultado3['Total'] . "],";
                                }
                                ?>
                            ]);

                            var options = {
                                title: 'Género de mascota',
                                is3D: true,
                                pieHole: 0.01964436917866215,
                                fontSize: 15,
                                width: 600,
                                height: 400,
                                colors: ["#4dc152", "#4832d1", "#e0921d", "#c8d626", "#dd35dd"],
                                titleTextStyle: {
                                    color: '#25396f',
                                    fontSize: 20,
                                    bold: true
                                },
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart_3d2"></div>
                </div>

                <div class="GraficaBarras4">
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ["Cargo", "Cantidad", {
                                    role: "style"
                                }],
                                <?php
                                $SQL4 = "SELECT dp_distrito.color, CargoPers, COUNT(*) AS Total FROM dp_personal INNER JOIN dp_distrito ON dp_personal.IdDistrito=dp_distrito.idDistrito GROUP BY CargoPers HAVING COUNT(*) >0";
                                $consultita4 = mysqli_query($db, $SQL4);
                                while ($resultado4 = mysqli_fetch_assoc($consultita4)) {
                                    echo "['" . $resultado4['CargoPers'] . "', " . $resultado4['Total'] . ", '" . $resultado4['color'] . "' ],";
                                }
                                ?>
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 1,
                                {
                                    calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation"
                                },
                                2
                            ]);

                            var options = {
                                title: "Cargos de Personal",
                                width: 600,
                                height: 400,
                                bar: {
                                    groupWidth: "80%"
                                },
                                legend: {
                                    position: "none"
                                },
                                titleTextStyle: {
                                    color: '#25396f',
                                    fontSize: 20,
                                    bold: true
                                },

                            };
                            var chart = new google.visualization.BarChart(document.getElementById("barchart_values2"));
                            chart.draw(view, options);
                        }
                    </script>
                    <div id="barchart_values2"></div>
                </div>

                <div class="GraficaBarras5">
                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Especialidad', 'Cantidad', {
                                    role: "style"
                                }],
                                <?php
                                $SQL5 = "SELECT color, especialidad, COUNT(*) AS Total FROM dp_veterinarios INNER JOIN dp_distrito ON dp_veterinarios.idHorario=dp_distrito.idDistrito GROUP BY especialidad HAVING COUNT(*) >0";
                                $consultita5 = mysqli_query($db, $SQL5);
                                while ($resultado5 = mysqli_fetch_assoc($consultita5)) {
                                    echo "['" . $resultado5['especialidad'] . "', " . $resultado5['Total'] . ", '" . $resultado5['color'] . "' ],";
                                }
                                ?>
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 1,
                                {
                                    calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation"
                                },
                                2
                            ]);

                            var options = {
                                title: "Especialidad de Veterinarios",
                                width: 600,
                                height: 400,
                                bar: {
                                    groupWidth: "80%"
                                },
                                legend: {
                                    position: "none"
                                },
                                titleTextStyle: {
                                    color: '#25396f',
                                    fontSize: 20,
                                    bold: true
                                },

                            };
                            var chart = new google.visualization.BarChart(document.getElementById("barchart_values3"));
                            chart.draw(view, options);
                        }
                    </script>
                    <div id="barchart_values3"></div>
                </div>
                <br>


                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Mascotas registradas</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                // Conexión a la base de datos
                                $conn = new mysqli("localhost", "root", "", "bddoctorpet");
                                // Comprobar la conexión
                                if ($conn->connect_error) {
                                    die("Conexión fallida: " . $conn->connect_error);
                                }
                                // Consulta para obtener la cantidad de mascotas en total
                                $query_total = "SELECT COUNT(*) AS total FROM dp_mascota";
                                $result_total = $conn->query($query_total);
                                $total_mascotas = $result_total->fetch_assoc()["total"];
                                ?>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Total</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0"><?php echo $total_mascotas; ?></h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-total"></div>
                                    </div>
                                </div>
                                <?php
                                // Cerrar la conexión a la base de datos
                                $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a class="dropdown-item btn btn-info rounded text-white bg-info d-flex align-items-center w-75" href="/Config/Salir.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Salir</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Recent Messages</h4>
                    </div>
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Hank Schrader</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/5.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Dean Winchester</h5>
                                <h6 class="text-muted mb-0">@imdean</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/1.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">John Dodol</h5>
                                <h6 class="text-muted mb-0">@dodoljohn</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                Conversation</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?php
    include('footer-lateral.php');
    ?>