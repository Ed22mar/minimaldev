@extends('layout.app')
@section('title','Home')
@section('content')
        <main>
        <section class="hero" style="text-align: center; padding: 4rem 1rem;">
            <h1>Bem-vindo ao Amanhã Digital</h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 1.5rem auto;">Uma plataforma minimalista desenvolvida com foco em performance, elegância e legibilidade noturna.</p>
            <div style="display: flex; gap: 1rem; justify-content: center;">
                <a href="posts.html" class="btn">Explorar Posts</a>
                <a href="loginpage.html" class="btn btn-secondary">Começar Agora</a>
            </div>
        </section>

        <h2>Destaques da Plataforma</h2>
        <div class="grid">
            <div class="card">
                <h3 style="color: #50FA7B;">Clean Architecture</h3>
                <p>Código limpo, estruturado e focado na experiência do utilizador final sem distrações visuais.</p>
            </div>
            <div class="card">
                <h3 style="color: #F1FA8C;">Modo Escuro Nativo</h3>
                <p>Paleta baseada em tons grafite e menta, otimizada para longas sessões de leitura e navegação.</p>
            </div>
            <div class="card">
                <h3>Totalmente Responsivo</h3>
                <p>Interface fluida que se adapta perfeitamente a qualquer tamanho de ecrã ou dispositivo móvel.</p>
            </div>
        </div>
    </main>
@endsection
