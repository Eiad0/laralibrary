@extends('layouts.app')
@section('content')
<section id="services" class="services">
    <div class="container">
        <div class="row">
@foreach ($books as $book )
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">{{ $book->title }}</a></h4>
                <p style="margin-bottom:20px">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                <span>Added By:{{ $book->user->name }}</span>
                </div>

            </div>

@endforeach
        </div>
    </div>
</section><!-- End Services Section -->
@endsection

