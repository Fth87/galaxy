$(document).ready(function(){
  //semua element dengan class text-warning akan di sembunyikan saat load
  $('.text-warning').hide();
  //untuk mengecek bahwa semua textbox tidak boleh kosong
  $('input').each(function(){ 
      $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
        if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
          return get_error_text(this); //function get_error_text ada di bawah
        } else {
          $(this).removeClass('no-valid'); 
          $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
          $(this).closest('div').removeClass('has-warning');
          $(this).closest('div').addClass('has-success');
          $(this).parent().find('.form-control').removeClass('glyphicon glyphicon-warning-sign');
          $(this).parent().find('.form-control').addClass('glyphicon glyphicon-ok');
        }
      });
  });
  //mengecek textbox Nama Valid Atau Tidak
  $('#name').blur(function(){
      var nama= $(this).val();
      var len= nama.length;
      if(len>0){ //jika ada isinya
        if(!valid_nama(nama)){ //jika nama tidak valid
            $(this).parent().find('.text-warning').text("");
            $(this).parent().find('.text-warning').text("Nama Tidak Valid");
            return apply_feedback_error(this);
        } else {
          if (len>30){ //jika karakter >30
            $(this).parent().find('.text-warning').text("");
            $(this).parent().find('.text-warning').text("Maximal Karakter 30");
            return apply_feedback_error(this);
          }
        }
      } 
  });
  //mengecek text box email
  $('#email').blur(function(){
      var email= $(this).val();
      var len= email.length;
      if(len>0){ 
        if(!valid_email(email)){ 
          $(this).parent().find('.text-warning').text("");
          $(this).parent().find('.text-warning').text("E-mail tidak valid (ex: aaaa@yahoo.co.id)");
          return apply_feedback_error(this);
        } else {
          if (len>30){ 
            $(this).parent().find('.text-warning').text("");
            $(this).parent().find('.text-warning').text("Maximal karakter 30");
            return apply_feedback_error(this);
          } else {
            var valid = false;
          }
        }
      } 
  });

  //mengecek nomer hp
  $('#telp').blur(function(){
    var hp=$(this).val();
    var len=hp.length;
    if (len>0 && len<=10){
      $(this).parent().find('.text-warning').text("");
      $(this).parent().find('.text-warning').text("Nomor HP terlalu pendek");
      return apply_feedback_error(this);
    } else {
      if(!valid_hp(hp)){
        $(this).parent().find('.text-warning').text("");
        $(this).parent().find('.text-warning').text("Format nomer HP tidak valid.(ex: +6285736262623)");
        return apply_feedback_error(this);
      } else {
        if (len >13){
          $(this).parent().find('.text-warning').text("");
          $(this).parent().find('.text-warning').text("Nomer HP terlalu panjang");
          return apply_feedback_error(this);
        }
      }
    }
  });

  //submit form validasi
  $('#formInput').submit(function(e){
      e.preventDefault();
      var valid=true;     
      $(this).find('.textbox').each(function(){
          if (! $(this).val()){
              get_error_text(this);
              valid = false;
              $('html,body').animate({scrollTop: 0},"slow");
          } 
          if ($(this).hasClass('no-valid')){
              valid = false;
              $('html,body').animate({scrollTop: 0},"slow");
          }
      });
      if (valid){
        swal({
          title: "Apakah Kamu Yakin Ingin Mendaftar?",
          text: "Pastikan data yang kamu masukkan benar ya!",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#1da1f2",
          confirmButtonText: "Yakin, dong!",
          closeOnConfirm: false,
          showLoaderOnConfirm: true,
        }, function () { //apabila sweet alert d confirm maka akan mengirim data ke simpan.php melalui proses ajax
        $.ajax({
          url: "/register/postData",
          type: "POST",
          data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
          dataType: "html",
          success: function(){                
              setTimeout(function(){
                swal({
                  title:"Yeay... Pendaftaran Berhasil",
                  text: "Silakan lanjutkan ke proses pembayaran",
                  type: "success"
                }, function(){
                  window.location="/register/index";
                });
              }, 2000);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              setTimeout(function(){
                  swal("Error", "Tolong Cek Koneksi Lalu Ulangi", "error");
              }, 2000);}
          });
        });
      }
  });
});

//fungsi cek nama
function valid_nama(name) {
  var pola= new RegExp(/^[a-z A-Z]+$/);
  return pola.test(name);
}
//fungsi cek email
function valid_email(email){
  var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
  return pola.test(email);
}
//fungsi cek phone 
function valid_hp(telp){
  var pola = new RegExp(/^[0-9-+]+$/);
  return pola.test(telp);
}
//menerapkan gaya validasi form bootstrap saat terjadi eror
function apply_feedback_error(textbox){
  $(textbox).addClass('no-valid'); //menambah class no valid
  $(textbox).parent().find('.text-warning').show();
  $(textbox).closest('div').removeClass('has-success');
  $(textbox).closest('div').addClass('has-warning');
  $(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
  $(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
}

//untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
function get_error_text(textbox){
  $(textbox).parent().find('.text-warning').text("");
  $(textbox).parent().find('.text-warning').text("Text Box Ini Tidak Boleh Kosong");
  return apply_feedback_error(textbox);
}