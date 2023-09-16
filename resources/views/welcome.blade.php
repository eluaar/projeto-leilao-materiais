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
            <h3 class="section-subheading text-muted">Pode ser usada em eventos sequenciais</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/images/exemplos/1.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/images/exemplos/2.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/images/exemplos/3.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2015</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/images/exemplos/4.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2020</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
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
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/andreqbs" target="_blank" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/andreqbs/" target="_blank" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/ana.jpeg')}}" alt="..." />
                    <h4>Ana Clara Obregon Dias</h4>
                   <!-- <p class="text-muted">Técnica em Informática</p> -->
                    <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-brands fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/exemplos/3.jpg')}}" alt="..." />
                    <h4>Érica Torres</h4>
                  <!--  <p class="text-muted">Técnica em Informática</p>-->
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/eluaar" target="_blank" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-member">
                    <img class="" src="{{asset('assets/images/exemplos/3.jpg')}}" alt="..." />
                    <h4>Aurélio Ramos Junior</h4>
                   <!-- <p class="text-muted">Cientista de computação</p>-->
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/aurelio-ramos" target="_blank" aria-label="Larry Parker Facebook Profile"><i class="fab fa-brands fa-github"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/ramos-junior/" target="_blank" aria-label="Larry Parker Twitter Profile"><i class="fab fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
        </div>
    </div>
</section>
<!-- mapa-->
<section class="page-section" id="mapa">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contate Nos</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
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
                    <a href="https://startbootstrap.com/solution/mapa-forms">https://startbootstrap.com/solution/mapa-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
        </form>
    </div>
</section>

@endsection

