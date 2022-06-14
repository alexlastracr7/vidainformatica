<?php require_once "config/conexion.php";
require_once "config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <?php 

require("navegador.php");

?>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Car</h1>
                <p class="lead fw-normal text-white-50 mb-0">Your selected products</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">

                            </tbody>
                        </table>
                    </div>
                </div>

        
            <form action="" class="pago">

                
                <!--Prueba -->

                
                <div class="col-md-12">  
                
                <span><h4>Payment Method</h4></span>
                <div class="card">

                  <div class="accordion" id="accordionExample">
                    
                    <div class="card">
                      <div class="card-header p-0" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="d-flex align-items-center justify-content-between">

                                <span>Paypal</span>
                                <img src="https://i.imgur.com/7kQEsHU.png" width="30">
                              
                            </div>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <input type="text" class="form-control" placeholder="Paypal email">
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header p-0">
                        <h2 class="mb-0">
                          <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="d-flex align-items-center justify-content-between">

                              <span>Credit card</span>
                              <div class="icons">
                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                <img src="https://i.imgur.com/35tC99g.png" width="30">
                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                              </div>
                              
                            </div>
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body payment-card-body">
                          
                          <span class="font-weight-normal card-text">Card Number</span>
                          <div class="input">

                            <i class="fa fa-credit-card"></i>
                            <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                            
                          </div> 

                          <div class="row mt-3 mb-3">

                            <div class="col-md-6">

                              <span class="font-weight-normal card-text">Expiry Date</span>
                              <div class="input">

                                <i class="fa fa-calendar"></i>
                                <input type="text" class="form-control" placeholder="MM/YY">
                                
                              </div> 
                              
                            </div>


                            <div class="col-md-6">

                              <span class="font-weight-normal card-text">CVC/CVV</span>
                              <div class="input">

                                <i class="fa fa-lock"></i>
                                <input type="text" class="form-control" placeholder="000">
                                
                              </div> 
                              
                            </div>
                            

                          </div>

                          <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                         
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>

                 
                <!-- Informacion personal -->

            <div class="col-md-12">  
                
                <span><h4>Information of the client</h4></span>
                <div class="card">

                    <div class="accordion" id="accordionExample">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body payment-card-body">
                          
                            <span class="font-weight-normal card-text">First Name</span>
                            <div class="input">

                                <i class="fa fa-credit-card"></i>
                                <input type="text" class="form-control" placeholder="">



                                <span class="font-weight-normal card-text">Last Name</span>
                            <div class="input">

                                <i class="fa fa-credit-card"></i>
                                <input type="text" class="form-control" placeholder="">


                                <span class="font-weight-normal card-text">E-mail</span>
                            <div class="input">

                                <i class="fa fa-credit-card"></i>
                                <input type="mail" class="form-control" placeholder="example@example">

                                <span class="font-weight-normal card-text">Direction</span>
                            <div class="input">

                                <i class="fa fa-credit-card"></i>
                                <input type="mail" class="form-control" placeholder="street example">


                                <span class="font-weight-normal card-text">Telefon Number</span>
                            <div class="input">

                                <i class="fa fa-credit-card"></i>
                                <input type="mail" class="form-control" placeholder="+00000000000">
                            </div>
                            
                        </div> 

                     
                      </div>
                    </div>
                    
                </div>
                  
            </div> 

       
           
            


                <!--Prueba -->

                <div class="col-md-5 ms-auto">
                    <h4>Total a Pagar: <span id="total_pagar">0.00</span></h4>
                    <div class="d-grid gap-2">
                        <div id="paypal-button-container"></div>
                        <button class="btn btn-warning" type="button" id="paypal-button-container">Go to pay</button>
                        <button class="btn btn-warning" type="button" id="btnVaciar">Vaciar Carrito</button>
                    </div>
                </div>
            </div>
        </div>
      
        </section>

        </form>  



 
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&locale=<?php echo LOCALE; ?>"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        mostrarCarrito();

        function mostrarCarrito() {
            if (localStorage.getItem("productos") != null) {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        async: true,
                        data: {
                            action: 'buscar',
                            data: array
                        },
                        success: function(response) {
                            console.log(response);
                            const res = JSON.parse(response);
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.id}</td>
                                <td>${element.nombre}</td>
                                <td>${element.precio}</td>
                                <td>1</td>
                                <td>${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                            paypal.Buttons({
                                style: {
                                    color: 'blue',
                                    shape: 'pill',
                                    label: 'pay'
                                },
                                createOrder: function(data, actions) {
                                    // This function sets up the details of the transaction, including the amount and line item details.
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: res.total
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    // This function captures the funds from the transaction.
                                    return actions.order.capture().then(function(details) {
                                        // This function shows a transaction success message to your buyer.
                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                    });
                                }
                            }).render('#paypal-button-container');
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
            }
        }
    </script>
</body>

</html>