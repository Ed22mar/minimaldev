@extends('layout.app')
@section('title','Meu Perfil')
@section('content')
    <main>
        <div class="card" style="display: flex; align-items: center; justify-content: space-between; gap: 2rem; margin-bottom: 2rem; padding: 2.5rem;">
            <div style="display: flex; align-items: center; gap: 2rem;">
                <div style="width: 100px; height: 100px; background-color: #333; border-radius: 50%; border: 3px solid #50FA7B; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; font-weight: bold; color: #50FA7B;">
                    JD
                </div>
                <div>
                    <h2 style="margin-bottom: 0.25rem;">John Doe</h2>
                    <p style="color: #777; margin-bottom: 0.5rem;">@johndoe_dev</p>
                    <span class="badge-warning">Membro Fullstack</span>
                </div>
            </div>

            <div>
                <a href="editar_perfil.html" class="btn btn-secondary" style="padding: 0.6rem 1.2rem; font-size: 0.9rem;">Editar Perfil</a>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem;">

            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div class="card">
                    <h3 style="border-bottom: 1px solid #2A2A35; padding-bottom: 0.5rem; margin-bottom: 1rem; font-size: 1.1rem; color: #50FA7B;">Sobre Mim</h3>
                    <p style="font-size: 0.95rem; margin-bottom: 1rem;">Desenvolvedor focado em arquiteturas limpas e performance no ecossistema PHP/Laravel.</p>

                    <div style="font-size: 0.9rem; color: #CCCCCC;">
                        <div style="margin-bottom: 0.5rem;"><strong>E-mail:</strong> john.doe@exemplo.com</div>
                        <div style="margin-bottom: 0.5rem;"><strong>Stack:</strong> Ubuntu Linux / VS Code</div>
                        <div><strong>Entrou em:</strong> Junho de 2026</div>
                    </div>
                </div>

                <div class="card" style="text-align: center;">
                    <h3 style="font-size: 1.1rem; margin-bottom: 1rem;">Estatísticas</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div style="background-color: #1A1A22; padding: 1rem; border-radius: 4px;">
                            <div style="font-size: 1.8rem; font-weight: bold; color: #50FA7B;">2</div>
                            <div style="font-size: 0.8rem; color: #777;">Artigos</div>
                        </div>
                        <div style="background-color: #1A1A22; padding: 1rem; border-radius: 4px;">
                            <div style="font-size: 1.8rem; font-weight: bold; color: #F1FA8C;">142</div>
                            <div style="font-size: 0.8rem; color: #777;">Leituras</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #2A2A35; padding-bottom: 0.75rem; margin-bottom: 1.5rem;">
                        <h3 style="margin-bottom: 0; font-size: 1.3rem;">Minhas Publicações Recentes</h3>
                        <a href="gerenciar_posts.html" style="color: #50FA7B; text-decoration: none; font-size: 0.9rem; font-weight: bold;">Gerenciar Tudo &rarr;</a>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="background-color: #1A1A22; padding: 1rem; border-radius: 4px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h4 style="margin-bottom: 0.25rem;"><a href="detalhes_post.html" style="color: #EAEAEA; text-decoration: none;">Introdução ao Laravel e o Padrão MVC</a></h4>
                                <span style="font-size: 0.8rem; color: #777;">Publicado em 25 Jun, 2026</span>
                            </div>
                            <span class="badge-warning">Backend</span>
                        </div>

                        <div style="background-color: #1A1A22; padding: 1rem; border-radius: 4px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h4 style="margin-bottom: 0.25rem;"><a href="detalhes_post.html" style="color: #EAEAEA; text-decoration: none;">Dominando CSS Grid e Flexbox</a></h4>
                                <span style="font-size: 0.8rem; color: #777;">Publicado em 18 Jun, 2026</span>
                            </div>
                            <span class="badge-warning" style="background-color: #50FA7B; color: #1E1E24;">Frontend</span>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 2rem; border-top: 1px solid #2A2A35; padding-top: 1.25rem; text-align: right;">
                    <a href="criar_post.html" class="btn" style="font-size: 0.9rem;">+ Escrever Novo Artigo</a>
                </div>
            </div>

        </div>
    </main>
@endsection
