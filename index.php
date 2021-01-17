<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="#" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">        
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
</head>
<body>
    <header>
        <h2 class="text-center text-dark"><span class="badge badge-success">Alberto Juncal</span></h2>
    </header>    
    
    <div id="appMoviles">               
        <div class="container">                
            <div class="row">       
                <div class="col">        
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                </div>
                <div class="col text-right">                        
                    <h5>Stock Total: <span class="badge badge-success">{{totalStock}}</span></h5>
                </div>    
            </div>                
            <div class="row mt-5">
                <div class="col-lg-12">                    
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>ID</th>                                    
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>    
                                <th>Acciones</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr v-for="(movil,indice) of moviles">                                
                                <td>{{movil.id}}</td>                                
                                <td>{{movil.marca}}</td>
                                <td>{{movil.modelo}}</td>
                                <td>
                                    <div class="col-md-8">
                                        <input type="number" v-model.number="movil.stock" class="form-control text-right" disabled>      
                                    </div>    
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id, movil.marca, movil.modelo, movil.stock)"><i class="fas fa-pencil-alt"></i></button>    
                                        <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)"><i class="fas fa-trash-alt"></i></button>      
                                    </div>
                                </td>
                            </tr>    
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>        
    </div>        
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>              
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script> 
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
    <script src="main.js"></script>         
</body>
</html>