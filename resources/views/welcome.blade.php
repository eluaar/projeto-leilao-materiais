@extends('layouts.app')

@section('conteudo')

<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">
           {{setting('')}}
         Sistema de Comercialização de Materiais para Construção Civil
        </div>
        <div class="masthead-heading text-uppercase">
            {{setting('')}} Web leilão
        </div>
        <a class="btn btn-outline-light btn-xl text-uppercase" href="#services">
            {{$botao ?? 'Serviços disponibilizados'}}
        </a>
    </div>
</header>

<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Serviços</h2>
            <h3 class="section-subheading text-muted">.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">E-Commerce</h4>
                <p class="text-muted">O e-commerce funciona como uma loja virtual e representa um excelente canal de venda online para as empresas. Seguindo essa prática que vem ocupando cada vez mais espaço nesse mercado, desenvolvemos um sitema prático e acessível.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>

                </span>
                <h4 class="my-3">Desing responsivo</h4>
                <p class="text-muted">Além de um desing responsivo e prático, o sistema busca oferecer comodidade para os usuários.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Segurança</h4>
                <p class="text-muted">Prezamos pela segurança dos usuários e pela confiança deles em nossa equipe.</p>
            </div>
        </div>
    </div>
</section>

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Funcionamento do leilão</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="\assets\images\cadastro.jpeg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Autocadastro</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">O primeiro passo a ser seguido é o autocadastro.<br> Você deverá preencher os campos com seu nome e sobrenome, email, senha e confirma-lá.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="\assets\images\leilão.jpeg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Criar leilão</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Para criar um leilão basta você estar cadastrado como usuário.<br> Ir no menu dashboard, leilão e listar os itens que necessita. Se for de seu interesse, colocar valor minímo ou estabelecer data limite.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="\assets\images\lance.jpeg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Dar lance</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Para dar lance em um leilão você deverá estar cadastrado como usuário.<br> Ir no menu leilão, clicar no botão "Dar lance" e efetuar seu lance.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="\assets\images\martelo.jpeg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Finalizar leilão</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Para finalizar seu leilão você deverá estar cadastrado como usuário.<br> Caso você tenha escolhido um leilão com valor minímo e ele não ter recebido nenhum lance, poderá ser encerrado quando clicar no botão "Encerrar leilão". <br> Se tiver escolhido o leilão sem valor minímo com data limite, precisará esperar pela data-fim ou então clicar no botão "Encerrar leilão".</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="\assets\images\entrega.jpeg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Entrega e acompanhamento</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">O gestor é responsável por acompanhar as entregas dos materiais.</p></div>
                </div>
            </li>

        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Equipe</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/andre.jpeg')}}" alt="..." />
                    <h4>André Quintiliano Bezerra</h4>
                   <!-- <p class="text-muted">Cientista de computação</p> -->
                    <a class="btn btn-dark btn-social mx-2 my-3" href="https://github.com/andreqbs" target="_blank"> <i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2 my-3" href="https://www.linkedin.com/in/andreqbs/" target="_blank"><i class="fab fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/ana.jpeg')}}" alt="..." />
                    <h4>Ana Clara Obregon Dias</h4>
                   <!-- <p class="text-muted">Técnica em Informática</p> -->
                    <a class="btn btn-dark btn-social mx-2 my-3" href="#!" target="_blank"> <i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2 my-3" href="#!" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/erica.jpeg')}}" alt="..." />
                    <h4>Érica Torres</h4>
                  <!--  <p class="text-muted">Técnica em Informática</p>-->
                    <a class="btn btn-dark btn-social mx-2 my-3" href="https://github.com/eluaar" target="_blank"> <i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2 my-3" href="#!" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/foto_aurelio.jpeg')}}" alt="..." />
                    <h4>Aurélio Ramos Junior</h4>
                   <!-- <p class="text-muted">Cientista de computação</p>-->
                    <a class="btn btn-dark btn-social mx-2 my-3" href="https://github.com/aurelio-ramos" target="_blank"> <i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2 my-3" href="https://www.linkedin.com/in/ramos-junior/" target="_blank"> <i class="fab fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Nossa equipe é composta por quatro membros.<br> Profissionais responsáveis pela criação e desenvolvimento do sistema Web Leilão. <br> Esse sistema foi planejado e desenvolvido nos anos de 2022 e 2023 pela equipe, com o intuito de facilitar cada vez mais a vida das pessoas que precisam vender ou comprar materiais de construção. <br> Nós agradecemos a todos os usuários do sistema.</p></div>
        </div>
    </div>
</section>
<!-- mapa-->
<section class="page-section" id="">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contate-nos</h2>
            <h3 class="section-subheading text-muted">Algo deu errado? Nos informe. <br>
                Nos envie seu feedback!</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms mapa Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/mapa-forms-->
        <!-- to get an API token!-->
        <form id="mapaForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Nome" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">É necessário um nome.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">É necessário um e-mail.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">E-mail inválido.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Telefone" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">É necessário um número de telefone.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Deixe uma mensagem" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required"></div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="">https://startbootstrap.com/solution/mapa-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div></div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-dark btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensagem</button></div>
        </form>
    </div>
</section>

@endsection

