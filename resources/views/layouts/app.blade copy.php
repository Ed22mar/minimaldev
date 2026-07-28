<!doctype html>

<html class="light" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Atrium | @yield('title','name')</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>
    <body class="bg-background text-on-surface min-h-screen">

        <!-- SideNavBar -->
        <aside
            class="h-screen w-64 fixed left-0 top-0 bg-[#f2f4f6] dark:bg-slate-900 flex flex-col py-8 pl-6 z-50"
        >
            <div class="mb-10 px-2">
                                    <a href="Pagina_Inicial.html">
                <div class="flex items-center gap-3">

                        <div
                            class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center"
                        >
                            <span
                                class="material-symbols-outlined text-on-primary"
                                style="
                                    font-variation-settings: &quot;FILL&quot; 1;
                                "
                                >layers</span
                            >
                        </div>
                        <div>
                            <h1
                                class="text-2xl font-black text-[#3525cd] dark:text-indigo-300 tracking-tighter"
                            >
                                Atrium
                            </h1>
                            <p
                                class="text-[10px] font-bold text-on-surface-variant/60 uppercase tracking-widest"
                            >
                                Portal de Gestão
                            </p>
                        </div>
                </div>
                                    </a>
            </div>
            <a href="Crud/Novo_Cadastro.html">
                <button
                    class="mr-6 mb-8 bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold py-3.5 px-4 rounded-xl shadow-lg shadow-primary/20 flex items-center justify-center gap-2 transition-transform active:scale-95"
                >
                    <span class="material-symbols-outlined text-xl"
                        >add_circle</span
                    >
                    <span>Criar Novo</span>
                </button>
            </a>

            <nav class="flex-1 space-y-1">
                <a href="Detalhes_do_Item.html">
                    <div
                        class="text-[#3525cd] dark:text-indigo-300 bg-white dark:bg-slate-800 rounded-l-full shadow-sm flex items-center gap-3 py-3 px-4 translate-x-1 transition-transform duration-300"
                    >
                        <span
                            class="material-symbols-outlined"
                            style="font-variation-settings: &quot;FILL&quot; 1"
                            >dashboard</span
                        >
                        <span
                            class="font-headline text-sm tracking-tight font-medium"
                            >Painel</span
                        >
                    </div>
                </a>
                <div
                    class="text-[#464555] dark:text-slate-400 hover:text-[#191c1e] dark:hover:text-white hover:bg-[#ffffff]/50 dark:hover:bg-slate-800/50 transition-colors duration-200 rounded-l-full flex items-center gap-3 py-3 px-4"
                >
                    <span class="material-symbols-outlined">database</span>
                    <span
                        class="font-headline text-sm tracking-tight font-medium"
                        >Inventário</span
                    >
                </div>
                <div
                    class="text-[#464555] dark:text-slate-400 hover:text-[#191c1e] dark:hover:text-white hover:bg-[#ffffff]/50 dark:hover:bg-slate-800/50 transition-colors duration-200 rounded-l-full flex items-center gap-3 py-3 px-4"
                >
                    <span class="material-symbols-outlined">bar_chart</span>
                    <span
                        class="font-headline text-sm tracking-tight font-medium"
                        >Análise</span
                    >
                </div>
                <div
                    class="text-[#464555] dark:text-slate-400 hover:text-[#191c1e] dark:hover:text-white hover:bg-[#ffffff]/50 dark:hover:bg-slate-800/50 transition-colors duration-200 rounded-l-full flex items-center gap-3 py-3 px-4"
                >
                    <span class="material-symbols-outlined">settings</span>
                    <span
                        class="font-headline text-sm tracking-tight font-medium"
                        ><x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        </span
                    >
                </div>
            </nav>
            <div
                class="mt-auto pt-6 border-t border-outline-variant/10 mr-6 space-y-1"
            >
                <div
                    class="text-[#464555] dark:text-slate-400 hover:text-[#191c1e] dark:hover:text-white flex items-center gap-3 py-3 px-4 transition-colors"
                >
                    <span class="material-symbols-outlined">help_outline</span>
                    <span
                        class="font-headline text-sm tracking-tight font-medium"
                        >Suporte</span
                    >
                </div>
                <div
                    class="text-[#464555] dark:text-slate-400 hover:text-[#191c1e] dark:hover:text-white flex items-center gap-3 py-3 px-4 transition-colors"
                >
                    <span class="material-symbols-outlined">logout</span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                                <span
                        class="font-headline text-sm tracking-tight font-medium"
                        href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}

                        </span>
                        </form>
                </div>
            </div>
        </aside>
        <main class="pl-64 min-h-screen">
            <!-- TopAppBar -->
            <header
                class="fixed top-0 right-0 w-[calc(100%-16rem)] z-40 bg-[#f7f9fb]/80 dark:bg-slate-950/80 backdrop-blur-xl flex justify-between items-center h-20 px-12 shadow-[0_20px_50px_rgba(79,70,229,0.05)]"
            >
                <div class="flex items-center gap-8 flex-1">
                    <div class="relative w-full max-w-md group">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 group-focus-within:text-primary transition-colors"
                            >search</span
                        >
                        <input
                            class="w-full bg-surface-container-high/50 border-none rounded-xl py-2.5 pl-12 pr-4 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all font-body text-sm placeholder:text-on-surface-variant/40"
                            placeholder="Pesquisar recursos, arquivos ou usuários..."
                            type="text"
                        />
                    </div>
                    <nav class="hidden lg:flex items-center gap-8 ml-4">
                        <a
                            class="text-[#3525cd] dark:text-indigo-400 border-b-2 border-[#3525cd] pb-2 font-['Manrope'] font-semibold text-sm"
                            href="#"
                            >Visão Geral</a
                        >
                        <a
                            class="text-[#464555] dark:text-slate-400 hover:text-[#3525cd] transition-all font-['Manrope'] font-semibold text-sm"
                            href="#"
                            >Relatórios</a
                        >
                        <a
                            class="text-[#464555] dark:text-slate-400 hover:text-[#3525cd] transition-all font-['Manrope'] font-semibold text-sm"
                            href="#"
                            >Histórico</a
                        >
                    </nav>
                </div>
                <div class="flex items-center gap-6">
                    <button
                        class="relative text-on-surface-variant hover:text-primary transition-colors"
                    >
                        <span class="material-symbols-outlined text-2xl"
                            >notifications</span
                        >
                        <span
                            class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full ring-2 ring-background"
                        ></span>
                    </button>
                    <button
                        class="text-on-surface-variant hover:text-primary transition-colors"
                    >
                        <span class="material-symbols-outlined text-2xl"
                            >apps</span
                        >
                    </button>
                    <div
                        class="flex items-center gap-3 pl-6 border-l border-outline-variant/20"
                    >
                        <div class="text-right">
                            <p
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                            >
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-[10px] text-on-surface-variant mt-1">
                                Super Admin
                            </p>
                        </div>
                        <img
                            alt="Administrator"
                            class="w-10 h-10 rounded-full object-cover ring-2 ring-primary/10"
                            data-alt="professional portrait of a man with a friendly expression in a modern office environment with soft lighting"
                            src=""
                        />
                    </div>
                </div>
            </header>


            @yield('content')

        </main>

    </body>
</html>
