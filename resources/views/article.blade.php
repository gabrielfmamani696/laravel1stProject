@extends('layouts.blog')

@section('content')
<main class="container mt-4 d-flex justify-content-center">
    <section class="col-md-8">
        <div class="card shadow-sm rounded-lg p-4">
            <h1 class="card-title fs-3 fw-bold mb-3">Blog Post Title</h1>
            <img src="{{ asset('images/placeholder-800x400.png') }}" alt="Post Image" class="img-fluid rounded mb-4">
            <p class="text-muted mb-4">Published on <span class="fw-semibold">March 2, 2025</span></p>
            <div class="text-dark space-y-4"> 
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit, sapien eget euismod
                    convallis, augue elit ultrices augue, eget egestas metus ipsum eu odio.</p>
                <p class="mb-3">Vestibulum in libero euismod, luctus velit id, sollicitudin lacus. Sed sagittis tristique justo nec
                    interdum. Fusce auctor purus non massa hendrerit, in vehicula tortor pharetra.</p>
                <p class="mb-3">Curabitur sit amet nunc ac odio accumsan malesuada. Proin sit amet magna vitae eros convallis
                    bibendum ac et libero. Sed scelerisque erat et mauris cursus, eget tincidunt nulla blandit.</p>
            </div>
        </div>
    </section>
</main>
@endsection