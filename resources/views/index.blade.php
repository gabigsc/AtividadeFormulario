<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bootstrap w/ Vite</title>

        <!-- Styles -->
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/css/bootstrap.bundle.js',
            ])
            

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

         <!-- JavaScript (Opcional) -->
         <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </head>
        <body>  
    <div class="bg-light position-relative bd-example-toasts">
          <!-- Gride 1 da Página-->
            <div class="container">
                <div class="row">
                  <div class="col">

                        <!-- Menu - NavBar -->
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                          <a class="navbar-brand" href="#">SISTEMA WEB</a>
                          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link" href="#">Cadastrar <span class="sr-only">(página atual)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">Consultar</a>
                              </li>
                            </ul>
                          </div>
                        </nav>
                  </div>
                  </div>
                
                  <div class="card">
                <!-- Informações do Formulário -->
                <form class="spider-border m-4">
                  <h5 class="fw-bolder">Cadastrar - Agendamento de Potenciais Clientes</h5>
                  <p>Sistema utilizado para agendamento de serviços.</p>

                  <div class="form-group">
                    <label for="FormControlInputName">Nome:</label>
                    <input type="name" class="form-control">
                  </div>
               
                    <div class="form-group">
                      <label for="FormControlInputTelefone">Telefone:</label>
                      <input type="tel" class="form-control" placeholder="(XX)xxxxx-xxxx">
                    </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelectDate">Origem:</label>
                    <select class="form-control">
                      <option>Celular</option>
                      <option>Outros</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="FormControlInputDate">Data de Contato:</label>
                    <input type="date" class="form-control">
                  </div>
              
                  <div class="form-group">
                    <label for="exampleFormControlTextareaObservacao">Observação</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                
                  <div class="form-group"></div>
                    <button type="button" class="btn btn-primary">Cadastrar</button><br>
                  </div>
                </form>
    
                </div>
              </div> 
        </body>
        </html>