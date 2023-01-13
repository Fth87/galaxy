@extends('templates.main')

@section('container')
 <section class="page-title-section overlay" data-background="assets/images/galaxy_4.0/Background.jpg">
   <div class="container">
     <div class="row">
       <div class="col-md-8">
         <ul class="list-inline custom-breadcrumb">
           <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Kontak</a></li>
           <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
         </ul>
         <p class="text-lighten">Kontak MA Istimewa Amanatul Ummah</p>
       </div>
     </div>
   </div>
 </section>
 <section class="section bg-gray">
   <div class="container">
     <div class="row">
       <div class="col-lg-12">
         <h2 class="section-title">Hubungi Kami</h2>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-7 mb-4 mb-lg-0">
         <p class="text-color h5 d-block"><i class="	fa fa-volume-control-phone">&nbsp;&nbsp;</i>MAI Amanatul Ummah - 085157748815</p>
         <p class="text-color h5 d-block"><i class="	fa fa-phone">&nbsp;&nbsp;</i>Admin Galaxy - (WA) 081252834688</p>
         <!--<p class="text-color h5 d-block"><i class="	fa fa-phone">&nbsp;&nbsp;</i>Pak Mirza - (WA) 087751655141</p>-->
         <p class="text-color h5 d-block"><i class="fa fa-envelope">&nbsp;&nbsp;</i>galaxy.maistimewa@gmail.com</p>
         <!--<p class="mb-5 text-color h5 d-block"><i class="fa fa-money">&nbsp;&nbsp;</i>Bank Mandiri - 1410021677653 a.n Mirza Romi Setiawan</p>-->
         <p><i class="fa fa-map-pin">&nbsp;&nbsp;&nbsp;</i>Jl. KH. Abdul Chalim 1 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ds. Kembang Belor Kec. Pacet Kab. Mojokerto - Jawa timur</p>

       </div>
       <!-- <div class="col-lg-5">
           </div> -->
     </div>
   </div>
 </section>
 <section class="section pt-0" style="padding: 0px">
   <!--<div id="map_canvas" data-latitude="-7.6512546" data-longitude="112.5564518"></div>-->
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.306512827686!2d112.55557868759158!3d-7.650152803841111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877101304c0e5%3A0x77d4428ba98578ab!2sMA+CI-EXC+AMANATUL+UMMAH!5e0!3m2!1sid!2sid!4v1547969708390" width="100%" height="300" frameborder="0" style="border: 0px;">
   </iframe>
 </section>


@endsection