@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('content')

<!-- Navbar End -->

    <!-- Hero Start -->
    <section class="relative pt-32 pb-32 overflow-x-hidden from-slate-500/10 bg-[url(/public/images/home/bg-1.png)] bg-no-repeat bg-cover" id="home">
        <div class="container">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 items-center">
                <div class="text-sm py-20 px-10">
                    <span
                        class="inline-flex py-2 text-lg text-black font-medium items-center justify-center rounded-full">
                        <i data-lucide="minus"></i>Novidade para você</span>
                    <h1 class="md:text-6xl/tight text-4xl text-dark tracking-normal leading-normal font-bold mb-4 mt-6 capitalize">
                        Seu <span class="text-primary">bem estar</span> em suas mãos</h1>
                    <p class="text-base font-medium text-muted leading-7 mt-5 capitalize">Acesse seus beneficios de saúde de forma rapida e facil. Consultas, exames, descontos e muito mais em um só lugar.</p>
                    <div class="flex flex-wrap items-center justify-center gap-3 lg:justify-normal mt-9">
                        <a href="https://apps.apple.com/br/app/betel-sa%C3%BAde/id6742192639"><img src="{{ asset('images/store.png') }}" class="h-14" alt="apple image"></a>
                        <a href="https://play.google.com/store/apps/details?id=com.betelsaude.appsaude&pcampaignid=web_share"><img src="{{ asset('images/google.png') }}" class="h-14" alt="google image"></a>
                    </div>
                </div>

                <div class="mt-4 pt-2 sm:mt-0 sm:pt-0 relative">
                    <img src="{{ asset('images/furniture.png') }}" alt="" class="h-[600px] max-w-full mx-auto">

                    <div class="absolute bottom-3/4 -end-14 2xl:end-8 hidden xl:block">
                        <div class="flex items-center gap-2 p-2 pe-6 rounded-full bg-white shadow-2xl">
                            <div class="rounded-full bg-primary h-9 w-9 items-center justify-center flex">
                                <i data-lucide="alarm-clock-off" class="h-6 w-6 text-white"></i>
                            </div>
                            <div class="">
                                <h6 class="text-base font-medium text-default-900">Sem Carencia ou Burocracia</h6>
                            </div>
                        </div>
                    </div>


                    <div class="absolute bottom-28 start-6 hidden xl:block">
                        <div class="flex items-center gap-2 p-2 pe-6 rounded-full bg-white shadow-2xl">
                            <div class="rounded-full bg-primary h-9 w-9 items-center justify-center flex">
                                <i data-lucide="hand-coins" class="h-6 w-6 text-white"></i>
                            </div>
                            <div class="">
                                <h6 class="text-base font-medium text-default-900">Descontos em Consultas e Exames</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Hero End -->

    <!-- Services Start -->
    <section id="services" class="py-20">
        <div class="container">
            <div class="max-w-2xl mx-auto text-center">
                <span class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Serviços</span>
                <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Descubra Todos os Benefícios de Saúde que Você Tem na Palma da Mão</h2>
                <p class="text-base font-medium mt-4 text-muted">Tudo o Que Você Precisa Para Cuidar da Sua Saúde em um Só Lugar

</p>
            </div>

            <div
                class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-x-3 gap-y-6 md:gap-y-12 lg:gap-y-24 md:pt-20 pt-12">

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="hand-coins" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Descontos em Consultas e Exames</h1>
                    <p class="text-base text-gray-600 mt-2">Pode pagar mais barato em consultas médicas, exames laboratoriais e de imagem em clínicas parceiras.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="alarm-clock-off" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Sem Carência e Burocracia</h1>
                    <p class="text-base text-gray-600 mt-2">Diferente de planos de saúde, o uso é imediato, sem tempo de espera ou análise de perfil.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="map" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Acesso a Uma Rede Credenciada</h1>
                    <p class="text-base text-gray-600 mt-2">Clínicas, laboratórios, farmácias, dentistas, psicólogos e outros profissionais de saúde com preços reduzidos.</p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center">
                        <div
                            class="items-center justify-center flex bg-primary/10 rounded-[49%_80%_40%_90%_/_50%_30%_70%_80%] h-20 w-20 border">
                            <i data-lucide="headset" class="h-10 w-10 text-primary"></i>
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold pt-4">Telemedicina e Suporte Online</h1>
                    <p class="text-base text-gray-600 mt-2">Atendimento médico à distância, para urgências ou orientações rápidas.</p>
                </div>

        </div>
    </section>
   
    <section id="about" class="py-20">
        <div class="container">

            <div class="grid lg:grid-cols-2 items-center gap-6">
                <div class="lg:ms-5 ms-8">
                    <div>
                        <span
                            class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950">Como acessar</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold text-black mt-4">Acesse em Instantes: Simples, Rápido e Eficiente</h2>
                    <p class="text-base font-normal text-muted mt-6">Informe seu CPF e em instantes você estará pronto para digitar sua senha e aproveitar o app.</p>

                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-8 mt-9">

                        <div class="">
                            <div class="flex items-center justify-start">
                                <div
                                    class="items-center justify-center flex bg-green-50 rounded-full h-20 w-20 border border-dashed border-green-50">
                                    <i data-lucide="smartphone" class="h-8 w-8 text-black"></i>
                                </div>
                            </div>
                            <h1 class="text-xl font-semibold pt-6">1. Baixar o App</h1>
                            <p class="text-base text-gray-600 font-normal mt-2">Entre na loja de aplicativos do seu celular e baixe o app.</p>
                        </div>

                        <div class="">
                            <div class="flex items-center justify-start">
                                <div
                                    class="items-center justify-center flex bg-red-50 rounded-full h-20 w-20 border border-dashed border-red-50">
                                    <i data-lucide="file-text" class="h-8 w-8 text-black"></i>
                                </div>
                            </div>
                            <h1 class="text-xl font-semibold  pt-6">2. Informe seus dados</h1>
                            <p class="text-base text-gray-600 font-normal mt-2">Coloque seu CPF para iniciar.</p>
                        </div>

                        <div class="">
                            <div class="flex items-center justify-start">
                                <div
                                    class="items-center justify-center flex bg-primary/10 rounded-full h-20 w-20 border border-dashed border-primary/10">
                                    <i data-lucide="rocket" class="h-8 w-8 text-black"></i>
                                </div>
                            </div>
                            <h1 class="text-xl font-semibold pt-6">3. Começar</h1>
                            <p class="text-base text-gray-600 font-normal mt-2">Aproveite seus benefícios.
                                from.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <img src="{{ asset('images/feature-iphone.png') }}" class="h-[600px] rounded-xl mx-auto"
                        alt="feature-image">
                </div>

            </div>
        </div>
    </section>
   
    <!-- Contact Start -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container">
            <div class="grid lg:grid-cols-3 gap-6 items-center">
                <div>
                    <div>
                        <span
                            class="text-sm text-primary uppercase font-semibold tracking-wider text-default-950 mb-6">Contato
                            </span>
                    </div>
                    <h2 class="text-3xl md:text-4xl/tight font-semibold mt-4">Converse com a gente.</h2>

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="map-pin" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">123 King Street, London W60 10250</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">See more</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="mail" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">support@zoyothemes.com</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">Say hello</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-start mt-10">
                        <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="smartphone" class="text-2xl text-primary"></i>
                        </div>
                        <div>
                            <h5 class="text-base text-muted font-medium mb-1">(+01) 1234 5678 00</h5>
                            <a href="#" class="text-xs text-primary font-bold uppercase">call now</a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:ms-24">
                    <div class="p-6 md:p-12 rounded-md shadow-lg bg-white">
                        <form>
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="formFirstName"
                                        class="block text-sm/normal font-semibold text-black mb-2">Nome</label>
                                    <input type="text"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formFirstName" placeholder="Primeiro Nome" required="">
                                </div>

                                <div>
                                    <label for="formLastName"
                                        class="block text-sm/normal font-semibold text-black mb-2">Sobrenome</label>
                                    <input type="text"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formLastName" placeholder="Último Nome" required="">
                                </div>

                                <div>
                                    <label for="formEmail"
                                        class="block text-sm/normal font-semibold text-black mb-2">Endereço de E-mail</label>
                                    <input type="email"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formEmail" placeholder="Seu email..." required="">
                                </div>

                                <div>
                                    <label for="formPhone"
                                        class="block text-sm/normal font-semibold text-black mb-2">Número de telefone</label>
                                    <input type="text"
                                        class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                        id="formPhone" placeholder="(11)91235-5487" required="">
                                </div>

                                <div class="sm:col-span-2">
                                    <div class="mb-4">
                                        <label for="formMessages"
                                            class="block text-sm/normal font-semibold text-black mb-2">Mensagem</label>
                                        <textarea
                                            class="block w-full text-sm rounded-md py-3 px-4 border-gray-200 focus:border-gray-300 focus:ring-transparent"
                                            id="formMessages" rows="4" placeholder="Tipo Mensagem..."
                                            required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="py-2 px-6 rounded-md text-baseitems-center justify-center border border-primary text-white bg-primary hover:bg-primaryDark transition-all duration-500 font-medium">Enviar
                                    Mensagem <i class="mdi mdi-send ms-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->



@endsection

@section('script_bottom')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
@endsection
