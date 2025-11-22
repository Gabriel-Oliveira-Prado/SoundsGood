@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Atividades.css') }}">
    <link rel="stylesheet" href="{{ asset('css/StylePaginas.css') }}">
@endpush

@section('content')
    <!-- Navbar -->
    @include('layouts.partials.navbar')

    <!-- Conteúdo Principal -->
    <main class="container my-5 pt-5">
        @yield('main-content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Script de Reveal Animation -->
    @push('scripts')
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>
    @endpush
@endsection
