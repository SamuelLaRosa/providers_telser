<?php include('assets/header.php');?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" class="navbar-brand">Telser de Venezuela S.A</a>

    <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0">
        <input type="search" id="search"class="form-control mr-sm-2" placeholder="Por Categoria">
        <button class="btn btn-success my2 my-sm-0" type="submit"> Buscar</button>
        </form>
    </ul>

    </nav>
<h1 class="container">Lista de Proveedores</h1>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                    <input type="hidden" id="taskId">
                        <form id="proveedores-form">
                            <div class="form-group">
                                <input type="text" id="empresa" placeholder="Nombre de empresa" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="categoria" placeholder="Categoria" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="contacto" placeholder="Contacto" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" id="numero" placeholder="Celular" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" id="telefono" placeholder="Telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" id="correo" placeholder="Correo" class="form-control">
                            </div>
                            <div>
                            <textarea id="direccion" cols="10" rows="2,5" class="form-control" placeholder="Dirección"></textarea></div>
                            <button type="submit" class="btn btn-primary btn-block text-center">Listar</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9">
            <div class="card my-4" id="provee-result">
                        <div class="card-body">
                            <ul id="container">

                            </ul>
                        </div>
             </div>   
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="form-group">
                            <td>ID</td>
                            <td>Empresa</td>
                            <td>Categoria</td>
                            <td>Contacto</td>
                            <td>Celular</td>
                            <td>Telefono</td>
                            <td>Correo</td>
                            <td>Direccion</td>
                            <td>Editar/Eliminar</td>
                        </tr>
                    </thead>
                    <tbody id="list_provee"></tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include('assets/footer.php');?>