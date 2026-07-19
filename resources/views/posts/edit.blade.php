@extends('layouts.app')
@section('title','Criar Post')
@section('content')

    <main>
        <h1>Editar Artigo</h1>
        <p>Partilhe o seu conhecimento com a comunidade.</p>

        <div style="max-width: 800px; background-color: #141419; padding: 2.5rem; border-radius: 6px; border: 1px solid #2A2A35; margin-top: 2rem;">
            <form action="{{ route('posts.update',$post) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="post-title">Título do Artigo</label>
                    <input type="text" id="post-title" placeholder="{{ $post->nome }}" name="nome" required>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div class="form-group">
                        <label for="post-category">Categoria</label>
                        <select id="post-category" name="categoria">
                            <option value="{{ $post->categoria }}">{{ $post->categoria }}</option>
                            <option value="frontend">Frontend</option>
                            <option value="backend">Backend</option>
                            <option value="design">UI/UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post-tags">Tags</label>
                        <input type="text" id="post-tags" placeholder="{{ $post->tag }}" name="tag">
                    </div>
                </div>

                <div class="form-group">
                    <label for="post-content">Conteúdo</label>
                    <textarea id="post-content" rows="10" placeholder="{{ $post->conteudo }}" name="conteudo" required></textarea>
                </div>

                <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn">Actualizar</button>
                </div>
            </form>
        </div>
    </main>

@endsection
