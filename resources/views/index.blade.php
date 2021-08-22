@extends('layout.app')
@section('content')

    <body id="top">
        <header class="d-print-none">
            <div class="container text-center text-lg-left">
                <div class="clearfix py-3">
                    <h1 class="mb-0 site-title">David Christian Cosmas</h1>
                    <div class="site-nav">
                        <nav role="navigation">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="https://twitter.com/chrisdavid32"
                                        title="Twitter"><i class="fab fa-twitter"></i><span
                                            class="sr-only menu-title">Twitter</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="https://linkedin.com/in/chrisdavid32"
                                        title="Instagram"><i class="fab fa-linkedin-in"></i><span
                                            class="sr-only menu-title">Linkedln</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="https://github.com/chrisdavid32"
                                        title="Github"><i class="fab fa-github"></i><span
                                            class="sr-only menu-title">Github</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-content">
            <div class="container">
                <div class="bg-white shadow-lg cover">
                    <div class="p-3 text-white cover-bg p-lg-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="p-1 bg-white shadow-sm avatar hover-effect"><img
                                        src="{{ asset('images/chris.jpg') }}" width="200" height="200" /></div>
                            </div>
                            <div class="text-center col-lg-8 col-md-7 text-md-start">
                                <h2 class="mt-2 h1" data-aos="fade-left" data-aos-delay="0">David Christian Cosmas</h2>
                                <p data-aos="fade-left" data-aos-delay="100">Backend Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 pt-4 mt-1 about-section px-lg-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="mb-3 h3">About Me</h2>
                                <p>Software Developer with a year plus of experience building complex project. Though most
                                    of
                                    my
                                    experiences lie in PHP/ Laravel development. I have come to understand the importance of
                                    open communication, proper time management and clean code.</p>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="mt-2 row">
                                    <div class="col-sm-4">
                                        <div class="pb-1">Email</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="pb-1 text-secondary">chrisdavid3271@gmail.com</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="pb-1">Phone</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="pb-1 text-secondary">+234 7035202925</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="pb-1">Address</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="pb-1 text-secondary">Ilupeju, Lagos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="d-print-none" />
                    <div class="px-3 skills-section px-lg-4">
                        <h2 class="mb-3 h3">Professional Skills</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2"><span>HTML</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-2"><span>CSS</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 40%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-2"><span>JavaScript</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 60%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-2"><span>Tailwind</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 50%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2"><span>PHP</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 60%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-2"><span>Git</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 80%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-2"><span>Laravel</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 50%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-2"><span>Database</span>
                                    <div class="my-1 progress">
                                        <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                            data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 85%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="d-print-none" />
                    <div class="px-3 work-experience-section px-lg-4">
                        <h2 class="mb-4 h3">Work Experience</h2>
                        <div class="timeline">
                            <div class="shadow-sm timeline-card timeline-card-primary card">
                                <div class="card-body">
                                    <a href="https://internship.zuri.team/"><img src="{{ asset('images/hng.png') }}"
                                            width="50" height="50">
                                    </a>
                                    <div class="mb-1 h5">Backend Developer - Intern at HNGi8 x I4G</div>
                                    <div class="mb-2 text-muted text-small">August, 2021 - Present</div>
                                    <div>A Remote Internship Program</div>
                                </div>
                            </div>
                            <div class="shadow-sm timeline-card timeline-card-primary card">
                                <div class="card-body">
                                    <div class="mb-1 h5">Tall Stack Developer - Naitrons Limited (UK)</div>
                                    <div class="mb-2 text-muted text-small">July, 2021 - Present</div>
                                    <div>Building Application with Laravel, Alpine Js, Livewire and Tailwind CSS</div>
                                </div>
                            </div>
                            <div class="shadow-sm timeline-card timeline-card-primary card">
                                <div class="card-body">
                                    <div class="mb-1 h5">Backend Developer - Keyla Technologies</div>
                                    <div class="mb-2 text-muted text-small">February, 2021 - July</div>
                                    <div>Build RESTful API endpoints with Laravel framework</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="d-print-none" />
                    <div class="page-break"></div>
                    <div class="px-3 pb-4 education-section px-lg-4">
                        <h2 class="mb-4 h3">Education</h2>
                        <div class="timeline">
                            <div class="shadow-sm timeline-card timeline-card-success card">
                                <div class="card-body">
                                    <div class="mb-1 h5">Computer Science <span class="text-muted h6">from
                                            Federal Polytechnic Mubi</span></div>
                                    <div class="mb-2 text-muted text-small">2012 - 2017</div>
                                    <div>HND in computer Science</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="d-print-none" />
                    <div class="px-3 pb-4 contant-section px-lg-4">
                        <h2 class="mb-3 h3 text">Contact</h2>
                        <div class="row">
                            <div class="col-md-7 d-print-none">
                                <div class="my-2">
                                    <form action="{{ Route('mail') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-2 col-6">
                                                <input class="form-control" type="text" name="name" placeholder="Your Name">
                                            </div>
                                            @if ($errors->first('name'))
                                                <div class="p-1 alert alert-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                            <div class="mb-2 col-6">
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Your E-mail">
                                            </div>
                                            @if ($errors->first('email'))
                                                <div class="p-1 alert alert-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="my-2 form-group">
                                            <textarea class="form-control" style="resize: none;" name="message" rows="4"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                        @if ($errors->first('message'))
                                            <div class="p-1 alert alert-danger">{{ $errors->first('message') }}</div>
                                        @endif
                                        <button class="mt-2 btn btn-primary" type="submit" name="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-2">
                                    <h3 class="h6">Address</h3>
                                    <div class="pb-2 text-secondary">Ilupeju, Lagos</div>
                                    <h3 class="h6">Phone</h3>
                                    <div class="pb-2 text-secondary">+234 7035202925</div>
                                    <h3 class="h6">Email</h3>
                                    <div class="pb-2 text-secondary">chrisdavid3271@gmail.com</div>
                                </div>
                            </div>
                            <div class="col d-none d-print-block">
                                <div class="mt-2">
                                    <div>
                                        <div class="mb-2">
                                            <div class="text-dark"><i
                                                    class="mr-1 fab fa-twitter"></i><span>https://twitter.com/chrisdavid32</span>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <div class="text-dark"><i
                                                    class="mr-1 fab fa-linkedin-in"></i><span>https://linkedin.com/in/chrisdavid32</span>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <div class="text-dark"><i
                                                    class="mr-1 fab fa-github"></i><span>https://github.com/chrisdavid32</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
