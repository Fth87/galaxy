<section class="section-sm bg-gray">
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
  <div class="container">
    <div class="confirm-div"></div>
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
          <input type="password" name="password" class="form-control mb-3 <?php echo form_error('password') ? 'invalid' : '' ?> " placeholder="Password" value="<?php echo set_value('password') ?>" required />
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
            <input type="radio" class="option-input radio" name="jk" value="laki-laki" checked />
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
            <input type="radio" class="option-input radio" name="type" value="1" checked />
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
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <h5 class="control-label">Upload screenshot bukti twibbon</h5>
                <div class="preview-zone hidden">
                  <div class="box box-solid">
                    <div class="box-header with-border">
                      <div><b>Pratinjau</b></div>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                          Reset Pratinjau
                        </button>
                      </div>
                    </div>
                    <div class="box-body"></div>
                  </div>
                </div>
                <div class="dropzone-wrapper">
                  <div class="dropzone-desc">
                    <p>Pilih file gambar atau seret disini.</p>
                  </div>
                  <input type="file" name="foto" id="" accept="image/png, image/jpeg, image/jpg, image/gif" class="dropzone" required>
                </div>
              </div>
            </div>
          </div>

          <?php if (isset($error)) : ?>
            <div class="invalid-feedback"><?= $error ?></div>
          <?php endif; ?>
          <br>
          <br>
          <input type="checkbox" name="isPenyisihan" value="true" class="d-none" readonly checked>
          <button name="save" type="submit" value="send" class="btn btn-primary">DAFTAR</button>
          <!-- <button type="submit" value="send" class="btn btn-primary" alt="alert" id="sa-success">DAFTAR</button> -->
        </div>



        <!-- </form> -->
        <?php echo form_close(); ?>
      </div>

      <div class="col-lg-5">
        <h3 style="font-family: unset; font-size: 30px; font-weight: 500; margin-bottom:10px;">Cara Pendaftaran Online</h2>
          <ol class="list cara-daftar">
            <li style="margin-bottom:5px;">peserta mengisi formulir yang telah disediakan dengan baik dan benar.</li>
            <li style="margin-bottom:5px;">link twibbon : <a href="http://twb.nz/olimpiadegalaxy">http://twb.nz/olimpiadegalaxy</a></li>
            <li style="margin-bottom:5px;">Password akan digunakan pada saat log in website ujian online</li>
            <li style="margin-bottom:5px;">untuk bagian nomor telepon peserta diharapkan memberikan nomor Whatsapp yang aktif atau masih digunakan.
            <li style="margin-bottom:5px;">setelah mendaftar peserta akan diberikan link yang berupa grup untuk masuk grup whatsapp.</li>
            <li style="margin-bottom:5px;">Untuk info atau perubahan akan disampaikan melalui grub whatsapp Galaxy.</li>
          </ol>
      </div>
    </div>
  </div>
</section>

<script>
  // Upload Gambar
  $("#success")
    .fadeTo(2000, 500)
    .slideUp(500, function() {
      $("#success").slideUp(500);
    });

  function readFile(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        var htmlPreview =
          '<img width="200" src="' +
          e.target.result +
          '" />' +
          "<p>" +
          input.files[0].name +
          "</p>";
        var wrapperZone = $(input).parent();
        var previewZone = $(input).parent().parent().find(".preview-zone");
        var boxZone = $(input)
          .parent()
          .parent()
          .find(".preview-zone")
          .find(".box")
          .find(".box-body");

        wrapperZone.removeClass("dragover");
        previewZone.removeClass("hidden");
        boxZone.empty();
        boxZone.append(htmlPreview);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

  function reset(e) {
    e.wrap("<form>").closest("form").get(0).reset();
    e.unwrap();
  }

  $(".dropzone").change(function() {
    readFile(this);
  });

  $(".dropzone-wrapper").on("dragover", function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass("dragover");
  });

  $(".dropzone-wrapper").on("dragleave", function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass("dragover");
  });

  $(".remove-preview").on("click", function() {
    var boxZone = $(this).parents(".preview-zone").find(".box-body");
    var previewZone = $(this).parents(".preview-zone");
    var dropzone = $(this).parents(".form-group").find(".dropzone");
    boxZone.empty();
    previewZone.addClass("hidden");
    reset(dropzone);
  });
  // Upload Gambar end
</script>