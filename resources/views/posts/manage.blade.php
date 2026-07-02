@extends('layout.app')
@section('title','Gerenciar Meus Posts')
@section('content')

    <main>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <div>
                <h1>Os Meus Artigos</h1>
                <p style="margin-bottom: 0;">Painel de controle exclusivo para gerir, editar ou eliminar as tuas publicações.</p>
            </div>
            <a href="{{ route('posts.create') }}" class="btn">+ Criar Novo Post</a>
        </div>

        <!-- Tabela/Lista de Controle Profissional -->
        <div class="card" style="padding: 0; overflow: hidden; border-color: #2A2A35;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; background-color: #141419;">
                <thead>
                    <tr style="border-bottom: 2px solid #2A2A35; background-color: #0f0f13;">
                        <th style="padding: 1rem 1.5rem; color: #50FA7B;">Título do Artigo</th>
                        <th style="padding: 1rem 1.5rem;">Categoria</th>
                        <th style="padding: 1rem 1.5rem;">Data</th>
                        <th style="padding: 1rem 1.5rem; text-align: right;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #2A2A35;">
                        <td style="padding: 1.25rem 1.5rem; font-weight: bold;">
                            <a href="detalhes_post.html" style="color: #EAEAEA;">Introdução ao Laravel e o Padrão MVC</a>
                        </td>
                        <td style="padding: 1.25rem 1.5rem;"><span class="badge-warning">Backend</span></td>
                        <td style="padding: 1.25rem 1.5rem; color: #777;">25 Jun, 2026</td>
                        <td style="padding: 1.25rem 1.5rem; text-align: right; display: flex; gap: 0.5rem; justify-content: flex-end;">
                            <a href="editar_perfil.html" class="btn" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">Editar</a>
                            <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem; border-color: #ff5555; color: #ff5555;" onclick="confirm('Tens a certeza que queres eliminar este post?')">Excluir</button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #2A2A35;">
                        <td style="padding: 1.25rem 1.5rem; font-weight: bold;">
                            <a href="detalhes_post.html" style="color: #EAEAEA;">Dominando CSS Grid e Flexbox</a>
                        </td>
                        <td style="padding: 1.25rem 1.5rem;"><span class="badge-warning" style="background-color: #50FA7B; color: #1E1E24;">Frontend</span></td>
                        <td style="padding: 1.25rem 1.5rem; color: #777;">18 Jun, 2026</td>
                        <td style="padding: 1.25rem 1.5rem; text-align: right; display: flex; gap: 0.5rem; justify-content: flex-end;">
                            <a href="#" class="btn" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">Editar</a>
                            <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem; border-color: #ff5555; color: #ff5555;" onclick="confirm('Tens a certeza que queres eliminar este post?')">Excluir</button>
                        </td>
                    </tr>
                    @foreach ($posts as $post )
                        <tr style="border-bottom: 1px solid #2A2A35;">
                            <td style="padding: 1.25rem 1.5rem; font-weight: bold;">
                                <a href="{{ route('posts.show',$post) }}" style="color: #EAEAEA;">{{ $post->nome }}</a>
                            </td>
                            <td style="padding: 1.25rem 1.5rem;"><span class="badge-warning" style="background-color: #50FA7B; color: #1E1E24;">{{ $post->categoria }}</span></td>
                            <td style="padding: 1.25rem 1.5rem; color: #777;">{{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->isoFormat('D MMM, YYYY') }}</td>
                            <td style="padding: 1.25rem 1.5rem; text-align: right; display: flex; gap: 0.5rem; justify-content: flex-end;">
                                <a href="#" class="btn" style="padding: 0.4rem 0.8rem; font-size: 0.85rem;">Editar</a>
                                <button class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.85rem; border-color: #ff5555; color: #ff5555;" onclick="confirm('Tens a certeza que queres eliminar este post?')">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
