@extends('layout.app')
@section('title','Destalhes do Post')
@section('content')

    <main>
        <div style="margin-bottom: 1.5rem;">
            <a href="{{ Route('posts.index') }}" style="text-decoration: none; color: #777;">&larr; Voltar para o feed</a>
        </div>

        <article class="card" style="padding: 2.5rem; border-color: #2A2A35;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <div style="display: flex; gap: 1rem; align-items: center;">
                    <span class="badge-warning">{{ $post->categoria }}</span>
                    <span style="color: #777; font-size: 0.9rem;">Publicado em {{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->isoFormat('D MMM, YYYY') }} por <a href="user.html" style="color: #50FA7B;">John Doe</a></span>
                </div>
                <span style="color: #777; font-size: 0.9rem;">⏱️ 5 min de leitura</span>
            </div>

            <h1 style="border-left: none; padding-left: 0; font-size: 3rem; margin-bottom: 1.5rem;">{{$post->nome }}</h1>

            <div class="post-content" style="color: #CCCCCC; font-size: 1.1rem; line-height: 1.8;">
                <p>{{ $post->conteudo }}</p>

                <h2 style="margin-top: 2rem; color: #50FA7B;">O que é a Arquitetura MVC?</h2>
                <p>MVC significa <strong>Model-View-Controller</strong> (Modelo-Visão-Controlador). É um padrão de arquitetura de software que divide a aplicação em três componentes lógicos principais:</p>

                <ul style="margin-left: 1.5rem; margin-bottom: 1.5rem; list-style-type: square;">
                    <li style="margin-bottom: 0.5rem;"><strong>Model (Modelo):</strong> Gere os dados, a lógica de negócios e as regras de integridade com a base de dados (MySQL).</li>
                    <li style="margin-bottom: 0.5rem;"><strong>View (Visão):</strong> A interface do utilizador final. No Laravel, usamos arquivos Blade (HTML + CSS) para renderizar o ecrã.</li>
                    <li style="margin-bottom: 0.5rem;"><strong>Controller (Controlador):</strong> O intermediário. Ele recebe a requisição da Rota, pede os dados ao Model e entrega-os à View correspondente.</li>
                </ul>

                <p>Ao separar estas responsabilidades, o teu projeto mantém-se limpo, fácil de testar e perfeitamente alinhado com as boas práticas do mercado internacional.</p>
            </div>
        </article>
    </main>

@endsection
