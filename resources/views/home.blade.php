@extends('master')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4">CareSync</h1>
            <p class="lead">Em prol de sua saúde.</p>
            <a href="https://www.canva.com/design/DAGYLazLvPE/OpZ7GBCKR7EvHRArB407LA/edit?utm_content=DAGYLazLvPE&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" class="btn btn-primary btn-lg" target="_blank">Saiba Mais</a>

        </div>
    </section>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide my-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/c1.jpg') }}" class="d-block w-100" alt="Carousel Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: blue">Centralização de Dados</h5>
                    <p style="color: blue">Todos os seus dados médicos em uma única plataforma integrada.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/c2.jpg') }}" class="d-block w-100" alt="Carousel Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: white">Gestão Eficiente</h5>
                    <p style="color: white">Otimize o atendimento e reduza erros médicos com CareSync.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/c3.jpg') }}" class="d-block w-100" alt="Carousel Image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: green">Segurança e Privacidade</h5>
                    <p style="color: green">Seus dados protegidos de acordo com as normas de privacidade.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Marketing Section -->
    <section class="marketing-section text-center">
        <div class="container">
            <h2 class="mb-5">Por que escolher o CareSync?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/p1.jpg') }}" class="card-img-top" alt="Centralização de Dados">
                        <div class="card-body">
                            <h5 class="card-title">Centralização de Dados</h5>
                            <p class="card-text">O CareSync centraliza informações de pacientes, consultas e históricos
                                médicos em uma única plataforma, facilitando a continuidade do atendimento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/p2.jpg') }}" class="card-img-top" alt="Atendimento Eficiente">
                        <div class="card-body">
                            <h5 class="card-title">Atendimento Eficiente</h5>
                            <p class="card-text">Com o CareSync, os profissionais de saúde têm acesso rápido e fácil a todas
                                as informações necessárias, otimizando o tempo e a qualidade do atendimento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/p3.jpg') }}" class="card-img-top" alt="Segurança de Dados">
                        <div class="card-body">
                            <h5 class="card-title">Segurança de Dados</h5>
                            <p class="card-text">Os dados são armazenados de forma segura e protegida, garantindo
                                conformidade com as regulamentações de privacidade e segurança da informação.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabela de Benefícios -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Principais Benefícios</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Benefício</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Integração Completa</td>
                    <td>Conexão entre pacientes, médicos e enfermeiros, promovendo uma comunicação mais clara e eficaz.</td>
                </tr>
                <tr>
                    <td>Otimização do Tempo</td>
                    <td>Reduz o tempo de triagens e consultas, permitindo um atendimento mais rápido e preciso.</td>
                </tr>
                <tr>
                    <td>Acessibilidade</td>
                    <td>Plataforma acessível de qualquer dispositivo, facilitando o acompanhamento médico a qualquer hora e
                        lugar.</td>
                </tr>
                <tr>
                    <td>Redução de Erros</td>
                    <td>Minimiza erros médicos através da centralização de dados e acompanhamento detalhado do histórico do
                        paciente.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 CareSync. Todos os direitos reservados.</p>
        </div>
    </footer>
@endsection
