@extends('layout.app')
@section('title','Contato')
@section('content')
    <main>
        <h1>Entre em Contato</h1>
        <p>Tens alguma dúvida, sugestão ou proposta de projeto? Envia-nos uma mensagem direta.</p>

        <div style="max-width: 600px; background-color: #141419; padding: 2rem; border-radius: 6px; border: 1px solid #2A2A35; margin-top: 2rem;">
            <form action="#" method="POST" onsubmit="event.preventDefault();">
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" placeholder="Ex: João Silva" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="joao@exemplo.com" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea id="message" rows="5" placeholder="Escreve aqui a tua mensagem..." required></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%;">Enviar Mensagem</button>
            </form>
        </div>
    </main>

@endsection
