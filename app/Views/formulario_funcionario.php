<?php include 'cabecalho.php'; ?>

<br>
    <div class="container">
        <div class="text">Cadastro de Funcionário</div>

        <form action="<?= base_url('auth/save') ?>" method="post"> 
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
                 <input type="text"  name="nome_funcionario">
                 <div class="underline"></div>
                 <label for="">Nome Completo</label>
              </div>
              <div class="input-data">
                 <input type="text"  name="cpf_funcionario">
                 <div class="underline"></div>
                 <label for="">CPF</label>
              </div>
           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email_funcionario">
                 <div class="underline"></div>
                 <label for="">Email</label>
              </div>
              <div class="input-data">
                 <input type="text"  name="celular_funcionario">
                 <div class="underline"></div>
                 <label for="">Celular</label>
              </div>
           </div>

           <div class="form-row">
           <div class="input-data">
                 <input type="text" name="cargo">
                 <div class="underline"></div>
                 <label for="">Cargo</label>
              </div>
              <div class="input-data">
                 <input type="date" name="data_admissao">
                 <div class="underline"></div>
                 <label for="" style="margin-left: 100px;">Data de Admissão</label>
              </div>
            </div>
            
           <div class="form-row">
           <div class="input-data">
                 <input type="text"  name="usuario_funcionario">
                 <div class="underline"></div>
                 <label for="">Nome de Usuário</label>
                 <span class="text-danger"><?= isset($validation) ? display_error($validation,'usuario_funcionario') : '' ?></span>
              </div>
              <div class="input-data">
                 <input type="text"  name="senha_funcionario">
                 <div class="underline"></div>
                 <label for="">Senha</label>
              </div>
           </div>

                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Cadastrar" name="">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
