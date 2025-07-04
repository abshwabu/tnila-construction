@extends('layouts.app')

@section('title', 'Contact Us | Tnila Construction')

@section('content')
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.360742840089!2d38.8755468758143!3d9.030818991030536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b91002180f819%3A0x64d6c66649d1f0d3!2sTNT%20Construction%20and%20Trading!5e0!3m2!1sen!2set!4v1745004497006!5m2!1sen!2set"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://www.emojilib.com/"></a></div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 350px;
                width: 100%;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 350px;
                width: 100%;
            }
        </style>
    </div>
    <section class="contact-section bg-grey padding">
        <div class="dots"></div>
        <div class="container">
            <div class="contact-wrap d-flex align-items-center row">
                <div class="col-md-6 padding-15">
                    <div class="contact-info">
                        <h2>Get in touch with us & <br>send us message today!</h2>
                        <p>Redison is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an
                            employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
                        <h3>198 West 21th Street, Suite 721 <br>New York, NY 10010</h3>
                        <h4><span>Email:</span> Dynamiclayers.Net <br> <span>Phone:</span> +88 (0) 101 0000 000 <br>
                            <span>Fax:</span> +88 (0) 202 0000 001</h4>
                    </div>
                </div>
                <div class="col-md-6 padding-15">
                    <div class="contact-form">
                        <form action="https://formsubmit.co/Miradanpalon@gmail.com" method="post"
                            class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @endsection
