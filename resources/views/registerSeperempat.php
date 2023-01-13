<section class="section-sm bg-gray">
  <div class="container">
    <style>
      .invalid {
        border: 2px solid rgb(153, 16, 16);
      }

      .invalid::placeholder {
        color: rgb(153, 16, 16);
      }

      .invalid-feedback:empty {
        display: none;
      }

      .invalid-feedback {
        font-size: smaller;
        color: rgb(153, 16, 16);
      }
    </style>
    <!-- <div class="row">
          <div class="col-lg-12">
            <h2 class="section-title">Pendaftaran Olimpiade</h2>
          </div>
        </div> -->
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">

        <?php if ($this->session->flashdata('success')) { ?>
          <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php } ?>


        <h3 style="font-family: unset; font-size: 30px; font-weight: 500; margin-bottom:10px;">Formulir Pendaftaran</h3>
        <!-- <br> -->
        <!-- <form method="post" id="formInput" action="/register/postData " 
              enctype="multipart/form-data"> -->
        <?php echo form_open_multipart('/register/postData'); ?>
        <!--<form method="post" id="formInput" action="#">-->
        <div div class="form-group form-group-lg has-feedback">
          <!-- <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nama"> -->
          <input type="text" type="text" name="name" class="form-control mb-3 <?php echo form_error('name') ? 'invalid' : '' ?> " placeholder="Nama" value="<?php echo set_value('name') ?>" id="name" class="form-control mb-3" required />
          <div class=""><?php echo form_error('name') ?></div>
          <i class="form-control-feedback"></i>
          <span class="text-warning"></span>
        </div>
        <div div class="form-group form-group-lg has-feedback">
          <!-- <input type="text" class="form-control mb-3" id="school" name="school" placeholder="Asal Sekolah" required> -->
          <input type="text" name="school" class="form-control mb-3 <?php echo form_error('school') ? 'invalid' : '' ?> " placeholder="Sekolah" value="<?php echo set_value('school') ?>" required />
          <div class=""><?php echo form_error('school') ?></div>
          <i class="form-control-feedback"></i>
          <span class="text-warning"></span>
        </div>
        <div div class="form-group form-group-lg has-feedback">
          <!-- <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email" pattern=".+@gmail.com" size="30" autocomplete="username" required> -->
          <input type="email" name="email" class="form-control mb-3 <?php echo form_error('email') ? 'invalid' : '' ?> " placeholder="Email" value="<?php echo set_value('email') ?>" required />
          <div class=""><?php echo form_error('email') ?></div>
          <i class="form-control-feedback"></i>
          <span class="text-warning"></span>
        </div>
        <div div class="form-group form-group-lg has-feedback">
          <!-- <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password" size="30" autocomplete="current-password" required> -->
          <input type="text" name="password" class="form-control mb-3 <?php echo form_error('password') ? 'invalid' : '' ?> " placeholder="Nomor urut" value="<?php echo set_value('password') ?>" required />
          <div class=""><?php echo form_error('password') ?></div>
          <i class="form-control-feedback"></i>
          <span class="text-warning"></span>
        </div>
        <div div class="form-group form-group-lg has-feedback">
          <!-- <input type="number" class="form-control mb-3" id="telp" name="telp" placeholder="Telepon" required> -->
          <input type="number" name="telp" class="form-control mb-3 <?php echo form_error('telp') ? 'invalid' : '' ?> " placeholder="Nomor Telpon" value="<?php echo set_value('telp') ?>" required />
          <div class=""><?php echo form_error('telp') ?></div>
          <i class="form-control-feedback"></i>
          <span class="text-warning"></span>
        </div>
        <div div class="form-group form-group-lg has-feedback">
          <!-- <input type="number" class="form-control mb-3" id="nisn" name="nisn" placeholder="NISN" required> -->
          <input type="number" name="nisn" class="form-control mb-3 <?php echo form_error('nisn') ? 'invalid' : '' ?> " placeholder="NISN" value="<?php echo set_value('nisn') ?>" required />
          <div class=""><?php echo form_error('nisn') ?></div>
          <i class="form-control-feedback"></i>
          <span class="text-warning"></span>
        </div>
        <div>
          <label>
            <input type="radio" class="option-input radio" name="jk" value="laki-laki" checked required />
            Laki-laki
          </label>
          <label>
            <input type="radio" class="option-input radio" name="jk" value="perempuan" />
            Perempuan
          </label>
        </div>
        <p>*pilih jenis kelamin</p>
        <div>
          <label>
            <input type="radio" class="option-input radio" name="type" value="1" checked required />
            Olimpiade MIPA
          </label>
          <label>
            <input type="radio" class="option-input radio" name="type" value="2" />
            Olimpiade PAI
          </label>
          <br>
          <label class="mt-1">
            <input type="radio" class="option-input radio" name="type" value="3" />
            Olimpiade IPS
          </label>
          <label>
            <input type="radio" class="option-input radio" name="type" value="4" />
            Olimpiade Bahasa Inggris
          </label>

        </div>
        <p>*pilih jenis kompetisi</p>

        <div class="content ">
          <input type="file" name="foto" id="" accept="image/png, image/jpeg, image/jpg, image/gif" class="dropzone">




          <?php if (isset($error)) : ?>
            <div class="invalid-feedback"><?= $error ?></div>
          <?php endif; ?>
          <br>
          <br>
          <button name="save" type="submit" value="send" class="btn btn-primary">DAFTAR</button>
          <!-- <button type="submit" value="send" class="btn btn-primary" alt="alert" id="sa-success">DAFTAR</button> -->
        </div>



        <!-- </form> -->
        <?php echo form_close(); ?>
      </div>

      <div class="col-lg-5">
        <h3 style="font-family: unset; font-size: 30px; font-weight: 500; margin-bottom:10px;">Cara Pendaftaran Online</h2>
          <ol class="list cara-daftar">
            <li style="margin-bottom:5px;">Isilah formulir pendaftaran dengan baik dan benar!</li>
            <li style="margin-bottom:5px;">Setelah mengisi form pendaftaran, kamu akan mendapatkan
              kode untuk ditambahkan saat pembayaran.<br>
              Contoh kode yang kamu dapatkan adalah 021. Maka, untuk mempermudah pelacakan data, uang pendaftaran yang harus kamu bayarkan menjadi Rp 40.021,-</li>
            <li style="margin-bottom:5px;">Lakukan pembayaran melalui transfer ke rekening Bank Mandiri - 13600165557271 atas nama Noer Syoim
            <li style="margin-bottom:5px;">Setelah melakukan pembayaran, harap lakukan konfirmasi melalui contact person yang tercantum pada website.</li>
            <li style="margin-bottom:5px;">Password digunakan pada saat log in website ujian online</li>
          </ol>
      </div>
    </div>
  </div>
</section>

<blockquote class="twitter-tweet">
  <p lang="in" dir="ltr">⚠️ <br><br>mvs Koleksi film aku guys buat nemenin taun baruan 😋<br>ada yang mau nambahin? <a href="https://t.co/t1MqCn60NX">pic.twitter.com/t1MqCn60NX</a></p>&mdash; Movie Menfess (@moviemenfes) <a href="https://twitter.com/moviemenfes/status/1608827755755634691?ref_src=twsrc%5Etfw">December 30, 2022</a>
</blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>