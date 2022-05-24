<!--<div class="cadlivro">

<h2 class="h2titulo">CADASTRO DE LIVRO</h2>

<form method="POST" action="cadastro_livro">

  <div class="mb-3">
    
    <input type="text" required="required"  name="titulo" placeholder="Titulo">
    <input type="text" required="required"  name="codigo" placeholder="Codigo">
    <input type="text" name="data_publicacao" placeholder="Data Publicacao">
    
  </div>

  <button type="submit" value="" name="cadastro">Cadastrar</button>

</form>

</div>-->
<br>
<br>
    <div class="container">
        <div class="text">Reserva Livro</div>

        <form method="POST" action="cadastro_livro"> 
           

              <div class="input-data">
                 <input type="date" required name="data_reserva">
                 <div class="underline"></div>
                 <label for="" style="margin-bottom: 20px;">Data Reserva</label>
              </div>
            </div>
                 
              <div class="input-data">
                 <input type="date" required name="data_entrega">
                 <div class="underline"></div>
                 <label for="" style="margin-bottom: 20px;">Data Entrega</label>
              </div>
           </div>

           <div class="form-row">
           <div class="input-data">
                 <input type="text" required name="cliente_reserva">
                 <div class="underline"></div>
                 <label for="">Cliente</label>
              </div>

                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Reservar" name="reservar">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>

