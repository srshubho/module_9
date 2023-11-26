<section id="contact" class="contact">
    <div class="section-heading text-center">
        <h2>contact me</h2>
    </div>
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <div class="single-contact-box">
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Name*" name="name">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email*" name="email">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject" name="subject">
                                            @error('subject')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="8" id="comment" placeholder="Message" name="message"></textarea>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">

                                        <input type="submit" value="submit" class="btn">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <div class="single-contact-box">
                        <div class="contact-adress">
                            <div class="contact-add-head">
                                <h3>Muhammad Shihab Rahman</h3>
                                <p>Fullstack Web Developer</p>
                            </div>
                            <div class="contact-add-info">
                                <div class="single-contact-add-info">
                                    <h3>phone</h3>
                                    <p>01832804534</p>
                                </div>
                                <div class="single-contact-add-info">
                                    <h3>email</h3>
                                    <p>shihabshubho.com</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
