@extends('layouts.app')

@section('content')

<div class="banner-wrapper has_background">
    <img src="assets/images/hero/contacto.png"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">¡Ponte en contacto con nosotros!</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Inicio</span></a></li>
                <li class="trail-item trail-end active"><span>Contacto</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main main-container no-sidebar">
    <div class="section-041">
        <div class="container">
            <div class="google-map">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.8301931664278!2d-103.34246768527488!3d20.676486286190226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1f23ef0a8bd%3A0xf6a25c6fa5df3784!2sMagno%20Centro%20Joyero%20San%20Juan%20de%20Dios!5e0!3m2!1ses-419!2smx!4v1639076906407!5m2!1ses-419!2smx" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="section-042">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-xl-1 col-xl-10 col-lg-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="az_custom_heading">Magno Centro Joyero</h4>
                            
                            <p>
                            Calle Paseos del <br>
                            Hospicio #22 San Juan de Dios <br>
                            C.P. 44360 Guadalajara, Jal. <br>
                            Edificio Magno Centro Joyero San Juan de Dios, Nivel 3, locales #3021, <br>#3126, #3115
                            </p>

                            <h4 class="az_custom_heading">HORARIOS</h4>
                            <p>Lunes–Sábado 10:00–19:00 hrs
                                
                                <br>
                                Domingos permanecemos cerrados</p>
                                <h4 class="az_custom_heading">Contacto</h4>
                                <p><strong>Línea 1 de WhatsApp: </strong><a href="https://wa.link/6g1hrq">33 1924 4450</a> <br>
                                    <strong>Línea 2 de WhatsApp: </strong> <a href="https://wa.link/6g1hrq">33 2485 9230</a> </p>
                        </div>
                        <div class="col-md-8">
                            <div role="form" class="wpcf7">
                                <form class="wpcf7-form">

                                    <div class="alert alert-danger text-center" style="background-color: #fc202d;border-color: #fc202d; color:white; font-size:20px;">
                                        <p>¿Quisieras ser mayorista, hacer alguna una colaboración con Prisma ®, surgio alguna duda o aclaración?</p>

                                        <p>¡Contáctanos!</p>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p><label> Nombre  <br>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input name="your-name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        type="text" id="nombre"></span>
                                            </label></p>
                                        </div>
                                        <div class="col">
                                            <p><label> Telefono  <br>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input name="your-email" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                        type="text" id="telefono"></span>
                                            </label></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p><label> Ciudad  <br>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input name="your-name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        type="text" id="ciudad"></span>
                                            </label></p>
                                        </div>
                                        <div class="col">
                                            <p><label> Email  <br>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input name="your-email" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                        type="email" id="email"></span>
                                            </label></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p><label> Presupuesto  <br>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input name="your-name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        type="text" id="presupuesto"></span>
                                            </label></p>
                                        </div>
                                        <div class="col">
                                            <p><label> Materiales  <br>
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input name="your-email" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                        type="text" id="materiales"></span>
                                            </label></p>
                                        </div>
                                    </div>
                                    
                                    <p><label> Tu Mensaje  <br>
                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea name="your-message"
                                                      cols="40" rows="10"
                                                      class="wpcf7-form-control wpcf7-textarea" id="mensaje"></textarea></span>
                                    </label></p>
                                    <p><input value="¡QUIERO FORMAR PARTE DE PRISMA JOYERÍA!" class="wpcf7-form-control wpcf7-submit" type="button" id="enviar"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection