@extends('layouts.blog')

@section('content')
<main class="container mt-4"> {{-- container mx-auto mt-6 en Tailwind --}}
    <div class="row"> {{-- flex gap-6 en Tailwind se maneja con el sistema de grillas de Bootstrap --}}
        <section class="col-md-9 mb-4"> {{-- w-3/4 en Tailwind es col-md-9 en Bootstrap; mb-4 para espacio inferior --}}
            <div class="card shadow-sm rounded-lg p-4"> {{-- bg-white p-6 shadow-md rounded-lg en Tailwind --}}
                <h2 class="card-title fs-4 fw-semibold mb-4">Latest Posts</h2> {{-- text-xl font-semibold mb-4 en Tailwind --}}
                <div class="space-y-4"> {{-- space-y-6 en Tailwind se reemplaza con márgenes inferiores en los elementos --}}
                    <article class="d-flex pb-3 mb-3 border-bottom"> {{-- flex gap-4 border-b pb-4 en Tailwind --}}
                        <img src="{{ asset('images/placeholder-150x150.png') }}" alt="Post Image" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover;"> {{-- w-32 h-32 object-cover rounded en Tailwind. Ajusto a un tamaño fijo para simplificar, puedes cambiarlo. --}}
                        <div>
                            <h3 class="fs-5 fw-semibold mb-1"><a href="#" class="text-decoration-none text-dark hover:text-primary">Blog Post Title</a></h3> {{-- text-lg font-semibold hover:underline en Tailwind --}}
                            <p class="text-muted">A short description of the blog post goes here...</p> {{-- text-gray-600 en Tailwind --}}
                        </div>
                    </article>
                    <article class="d-flex pb-3 mb-3 border-bottom"> {{-- flex gap-4 border-b pb-4 en Tailwind --}}
                        <img src="{{ asset('images/placeholder-150x150.png') }}" alt="Post Image" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover;">
                        <div>
                            <h3 class="fs-5 fw-semibold mb-1"><a href="#" class="text-decoration-none text-dark hover:text-primary">Another Blog Post</a></h3>
                            <p class="text-muted">Another short description of a blog post...</p>
                        </div>
                    </article>
                    {{-- Puedes añadir más posts aquí --}}
                </div>
            </div>
        </section>
        <aside class="col-md-3 mb-4">
            <div class="card shadow-sm rounded-lg p-4">
                <h2 class="card-title fs-4 fw-semibold mb-4">Categories</h2>
                <ul class="list-unstyled space-y-2">
                    @foreach($categories as $category)
                        <li class="mb-2">
                            <a href="/?category_id={{ $category->id }}"
                                class="text-decoration-none text-secondary hover:text-dark">
                                {{ $category->categories }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</main>
@endsection