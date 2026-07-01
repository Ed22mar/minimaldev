@extends('layout.app')
@section('title','Posts')
@section('content')
    <main>
        <h1>Feed de Artigos</h1>
        <p>Explora os nossos últimos artigos sobre desenvolvimento, design e arquitetura web.</p>

        <div class="grid">
            <div class="card">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <span style="color: #777; font-size: 0.85rem;">25 Jun, 2026</span>
                    <span class="badge-warning">Novo</span>
                </div>
                <h3>Introdução ao Laravel e Padrão MVC</h3>
                <p>Descobre como o Laravel estrutura aplicações robustas separando as responsabilidades de forma clara e profissional.</p>
                <a href="#">Ler mais &rarr;</a>
            </div>

            <div class="card">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <span style="color: #777; font-size: 0.85rem;">18 Jun, 2026</span>
                </div>
                <h3>Dominando CSS Grid e Flexbox</h3>
                <p>Guia definitivo para alinhar elementos e criar layouts complexos e totalmente responsivos sem mistérios.</p>
                <a href="#">Ler mais &rarr;</a>
            </div>

            <div class="card">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <span style="color: #777; font-size: 0.85rem;">10 Jun, 2026</span>
                </div>
                <h3>Boas Práticas com Conventional Commits</h3>
                <p>Como padronizar as mensagens de commits no Git para facilitar a automação de changelogs e revisões.</p>
                <a href="#">Ler mais &rarr;</a>
            </div>
            @foreach ($posts as $post )
            <div class="card">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <span style="color: #777; font-size: 0.85rem;">{{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->isoFormat('D MMM, YYYY') }}
                    </span>
                </div>
                <h3>{{ $post->nome }}</h3>
                <p>{{ $post->conteudo }}.</p>
                <a href="#">Ler mais &rarr;</a>
            </div>
            @endforeach
        </div>
    </main>
@endsection
