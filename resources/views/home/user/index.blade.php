@extends('home.user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- Start Features Area -->
                <section class="features-area saas-features ptb-100">
                    <div class="container">
                        <div class="section-title">
                            <h2>به خونه خوش آمدی</h2>
                            <div class="bar"></div>
                            <p>تو این قسمت دسترسی داری به همه صفحات مربوط به خودت</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <a href="" class="single-features text-dark card-link " >
                                    <div class="icon shadow">
                                        <i class="icofont-lock "></i>
                                    </div>
                                    <h3>لیست نمرات</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="{{ route('user.edit',$user->id,'edit') }}" class="single-features text-dark card-link">
                                    <div class="icon shadow">
                                        <i class="icofont-heart-eyes"></i>
                                    </div>
                                    <h3>تکمیل پروفایل</h3>
                                    <p>جهت شرکت در آزمون نیاز هست یه سری موارد تکمیل گردد</p>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="{{ route('tests.index') }}" class="single-features text-dark card-link">
                                    <div class="icon shadow">
                                        <i class="icofont-papers"></i>
                                    </div>
                                    <h3>امتحانات</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="" class="single-features text-dark card-link">
                                    <div class="icon shadow">
                                        <i class="icofont-hand"></i>
                                    </div>
                                    <h3>در دست تکمیل</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="" class="single-features text-dark card-link">
                                    <div class="icon shadow">
                                        <i class="icofont-hand"></i>
                                    </div>
                                    <h3>در دست تکمیل</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک
                                        است. </p>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <a href="" class="single-features text-dark card-link">
                                    <div class="icon shadow">
                                        <i class="icofont-hand"></i>
                                    </div>
                                    <h3>در دست تکمیل</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک
                                        است. </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="shape7"><img src="{{ asset('Home/img/shape7.png')}}" alt="shape"></div>
                    <div class="shape3"><img src="{{ asset('Home/img/shape3.png')}}" alt="img"></div>
                    <div class="bg-gray shape-1"></div>
                    <div class="shape6"><img src="{{ asset('Home/img/shape6.png')}}" alt="img"></div>
                    <div class="shape8 rotateme"><img src="{{ asset('Home/img/shape8.svg')}}" alt="shape"></div>
                    <div class="shape9"><img src="{{ asset('Home/img/shape9.svg')}}" alt="shape"></div>
                    <div class="shape10"><img src="{{ asset('Home/img/shape10.svg')}}" alt="shape"></div>
                    <div class="shape11 rotateme"><img src="{{ asset('Home/img/shape11.svg')}}" alt="shape"></div>
                </section>
                <!-- End Features Area -->
            </div>
        </div>
    </div>
</div>

@endsection

