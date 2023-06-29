@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <h1>Home</h1>

    <section class="presentacion">
        <div class="container">
            <div class="caja caja1">
                <img src="{{ asset('img/carmen.jpeg') }}" alt="">
            </div>
            <div class="caja caja2">
                <div class="datos">
                    <h1>Carmen Padilla Fernandez de Saro</h1>
                    <h2>Integradora Social</h2>
                    <h3>Teléfono</h3>
                    <p>696 95 70 45</p>
                    <h3>Email</h3>
                    <p>carmenpadillafdesaro@gmail.com</p>
                    <h3>Dirección</h3>
                    <p>Calle Campo de Borja, 24</p>
                    <h3>Cumpleaños</h3>
                    <p>18 de Julio de 1998</p>
                </div>
            </div>
        </div>
    </section>
    <section class="icons">
        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-tiktok"></i></a>
        <a href=""><i class="fa-brands fa-linkedin"></i></a>

    </section>
    <section class="sobremi">
        <h1 class="sobremi-title">Hola soy Carmen</h1>
        <p class="sobremi-parrafo">Somos una integradora social comprometida en empoderar a mujeres inmigrantes.
            Brindamos apoyo integral, capacitación y herramientas para fomentar su inclusión, autonomía y desarrollo personal.
            Trabajamos en colaboración con las comunidades para derribar barreras y promover la igualdad de oportunidades.
            Juntas construimos un futuro de empoderamiento y superación.</p>
    </section>
    <section class="experiencia">
        <a name="experiencia"></a>
        <h1 class="title-experience">EXPERIENCIA</h1>
        <div class="container experience-body">
            <div>
                <h2>2021-2022</h2>
            </div>
            <div>
                <h3>Mujer emancipada</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
    </section>

    <section class="experiencia">
        <a name="formacion"></a>
        <h1 class="title-formation">FORMACIÓN</h1>
        <div class="container formacion-body">
            <div>
                <h2>2019-2021</h2>
            </div>
            <div>
                <h3>instituto</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
    </section>

    <section class="habilidades">
        <a name="habilidades"></a>
        <h1 class="title-habilidades">HABILIDADES</h1>

        <div class="wrap-circles">
            <div>
                <div class="circle per-100">
                    <div class="inner">0%</div>
                </div>
                <h3 class="circle-title">Una</h3>
            </div>
            <div>
                <div class="circle per-100">
                    <div class="inner">25%</div>
                </div>
                <h3>Dos</h3>
            </div>
            <div>
                <div class="circle per-100">
                    <div class="inner">50%</div>
                </div>
                <h3>Coñazo</h3>
            </div>
            <div>
                <div class="circle per-100">
                    <div class="inner">75%</div>
                </div>
                <h3>Toca pelotas</h3>
            </div>
            <div>
                <div class="circle per-100">
                    <div class="inner">100%</div>
                </div>
                <h3>Timidez</h3>
            </div>
        </div>
    </section>

    <section class="contacto">
        <a name="contacto"></a>
        <h1 class="tittle-contact">CONTACTO</h1>
        <div class="container">
            <form>
                <ul>
                    <li class="form-name">
                        <label for="name"><span>Name <span class="required-star">*</span></span></label>
                        <input type="text" id="name" name="user_name">
                    </li>
                    <li class="form-mail">
                        <label for="mail"><span>Email <span class="required-star">*</span></span></label>
                        <input type="email" id="mail" name="user_email">
                    </li>
                    <li class="form-message">
                        <label for="msg"><span>Message</span></label>
                        <textarea rows="4" cols="50"></textarea>
                    </li>
                    <li class="form-submit">
                        <input type="submit">
                    </li>
                </ul>
            </form>
        </div>
    </section>
@endsection
