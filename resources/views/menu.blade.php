 {{-- @include('header'); --}}

 @extends('templates.main')

 @section('container')
     <section class="page-title-section overlay" data-background="{{ url("assets/images/galaxy_4.0/Background.jpg") }}">
         <div class="container">
             <div class="row">
                 <div class="col-md-8">
                     <ul class="list-inline custom-breadcrumb">
                         <li class="list-inline-item h2 text-primary font-secondary">Kompetisi</li>
                         <li class="list-inline-item text-white h3 font-secondary nasted"><?php echo $type; ?></li>
                     </ul>
                     <?php if ($type != 'olimpiade') { ?>
                     <p class="text-lighten">Kompetisi <?php echo $type;
                     ?> untuk umum</p>

                     <?php }
          if ($type == 'olimpiade') { ?>
                     <p class="text-lighten">Olimpiade MIPA, PAI, IPS dan Bahasa Inggris SMP/MTs tingkat nasional </p>
                     <a href="register/type/penyisihan/" class="btn btn-primary" data-animation-out="fadeOutRight"
                         data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Daftar
                         Sekarang</a>
                     <?php } ?>
                 </div>
             </div>
         </div>
     </section>
     <!-- /page title -->

     <!-- about -->
     <section class="section">
         <div class="container">
             <div class="row">
                 <div class="col-12">

                     @if ($type == 'olimpiade')
                         @include('content.olimpiade_content');
                     @elseif($type == 'podcast')
                         @include('content.podcast');
                     @elseif($type == 'fotografi')
                         @include('content.fotografi_content');
                     @elseif($type == 'poster')
                         @include('content.poster_content');
                     @elseif ($type == 'videografi')
                         @include('content.videografi_content');
                     @elseif ($type == 'tiktok')
                         @include('content.tiktok_content');
                     @endif

                 </div>
             </div>
         </div>
     </section>
     <!-- /about -->


     {{-- @include('footer'); --}}
 @endsection
