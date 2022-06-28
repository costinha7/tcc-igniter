<?php include 'cabecalho.php'; ?>


<div class="container">
   <div class="text">Cadastro de Livro</div>
   <form action="<?= base_url('livrocontroller/registrolivro') ?>" method="post">

   <?= csrf_field(); ?>
           <?php 
           if(!empty(session()->getFlashdata('fail'))) : ?>
           <div class="alert alert-danger"> <?= session()->getFlashdata('fail'); ?> </div>
           <?php endif ?>

           <?php 
           if(!empty(session()->getFlashdata('success'))) : ?>
           <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div> <!---->
           <?php endif ?>


      <div class="form-row">
         <div class="input-data">
            <input type="text" required name="titulo">
            <div class="underline"></div>
            <label for="">Título</label>
         </div>
         <div class="input-data">
            <input type="text" required name="codigo">
            <div class="underline"></div>
            <label for="">Código</label>
         </div>
      </div>
      <div class="form-row">
         <div class="input-data">
            <input type="text" required name="volume">
            <div class="underline"></div>
            <label for="">Volume</label>
         </div>
         <div class="input-data">
            <input type="text" required name="idioma">
            <div class="underline"></div>
            <label for="">Idioma</label>
         </div>
      </div>
      <div class="form-row">
         <div class="input-data">
            <input type="text" required name="genero">
            <div class="underline"></div>
            <label for="">Genero</label>
         </div>
         <div class="input-data">
            <input type="date" required name="data_publicacao">
            <div class="underline"></div>
            <label for="" style="margin-bottom: 20px;">Data de Publicação</label>
         </div>
      </div>
      <div class="form-row">
         <div class="input-data">
            <input type="text" required name="edicao">
            <div class="underline"></div>
            <label for="">Edição</label>
         </div>
         <div class="input-data">
            <input type="date" required name="data_registro">
            <div class="underline"></div>
            <label for="" style="margin-bottom: 20px;">Data de Registro</label>
         </div>
      </div>
      <div class="form-row">
         <div class="input-data">
            <input type="text" required name="autor">
            <div class="underline"></div>
            <label for="">Autor</label>
         </div>
         <div class="input-data">
            <input type="text" required name="editora">
            <div class="underline"></div>
            <label for="" style="margin-bottom: 20px;">Editora</label>
         </div>
      </div>
      <div class="form-row">
         <div class="input-data">
            <input type="" required name="descricao">
            <div class="underline"></div>
            <label for="">Descrição</label>
         </div>
      </div>
      <div class="form-row submit-btn">
         <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Cadastrar" name="cadastro">
         </div>
      </div>
</div>
</div>
</form>
</div>