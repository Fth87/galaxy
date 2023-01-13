@extends('templates.main')

@section('container')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- @if ($type == 'penyisihan')
                        @include('registerPenyisihan')
                    @elseif($type == 'seperempat')
                        @include('registerSeperempat');
                    @endif --}}
                    @include('registernew')
                </div>
            </div>
        </div>
    </section>
@endsection
