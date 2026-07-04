@extends('layout.app')
@section('title','Criar Post')
@section('content')

    <main>
        <h1>Criar Novo Artigo</h1>
        <p>Partilhe o seu conhecimento com a comunidade.</p>

        <div style="max-width: 800px; background-color: #141419; padding: 2.5rem; border-radius: 6px; border: 1px solid #2A2A35; margin-top: 2rem;">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="post-title">Título do Artigo</label>
                    <input type="text" id="post-title" placeholder="Ex: Dominando Eloquent ORM no Laravel" name="nome" required>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div class="form-group">
                        <label for="post-category">Categoria</label>
                        <select id="post-category" name="categoria">
                            <option value="frontend">Frontend</option>
                            <option value="backend">Backend</option>
                            <option value="design">UI/UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post-tags">Tags</label>
                        <input type="text" id="post-tags" placeholder="php, laravel, backend" name="tag">
                    </div>
                </div>

                <div class="form-group">
                    <label for="post-content">Conteúdo</label>
                    <textarea id="post-content" rows="10" placeholder="Escreve aqui o teu artigo..." name="conteudo" required></textarea>
                </div>

                <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                    <a href="posts.html" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn">Publicar</button>
                </div>
            </form>
        </div>
    </main>

@endsection
