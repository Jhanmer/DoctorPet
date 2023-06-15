<?php
include('barra-lateral.php');

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Registrar Alimento</h3>
                    
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
           
                
                   
            
        </section>
        <!-- // Basic Horizontal form layout section end -->

        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="precio">Precio</label>
                                                    <input type="number" id="precio" class="form-control" name="precio" placeholder="S/0.00" min="0">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="imagen" >Imagen</label>
                                                    <input type="file" id="imagen" class="form-control" name="imagen">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="descripcion">Descripción</label>
                                                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Agrega una descripción" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="stock">Stock</label>
                                                    <input type="number" id="stock" class="form-control" name="stock" min="0">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"  class="btn btn-outline-warning btn-lg btn-block">Agregar</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Nuestras Marcas:</h4>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title"><i class="fa-solid fa-shield-dog" style="color: blue;"></i> RICO CAN </h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-dog" style="color: blue;"></i> THOR</h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-dog" style="color: blue;"></i> CANBO</h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-dog" style="color: blue;"></i> PROPLAN</h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-dog" style="color: blue;"></i> PEDIGREE</h4>
                        </div>

                        <div class="card-header">
                            <h4 class="card-title"><i class="fa-solid fa-shield-cat" style="color: yellowgreen;"></i> RICO CAT </h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-cat" style="color: yellowgreen;"></i> CAT CHOW</h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-cat" style="color: yellowgreen;"></i> PURINA</h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-cat" style="color: yellowgreen;"></i> EQUILIBRIO</h4>
                            <h4 class="card-title"><i class="fa-solid fa-shield-cat" style="color: yellowgreen;"></i> ROYAL CANIN</h4>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
include('footer-lateral.php');
?>
        </section>
        <!-- // Basic Vertical form layout section end -->


        
        <!-- // Basic multiple Column Form section end -->
    </div>

</div>

