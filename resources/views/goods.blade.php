@include ('header')

<br>
<br>
<br>
<div class="style-guide">
            <div class="bg-primary-soft ptb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="style-guide-heading text-center">
                                <h2>Available goods</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--blog section start-->
            <section class="masonary-blog-section ptb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="single-article feature-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-10.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="#" class="d-inline-block text-dark badge bg-primary-soft">Marketing</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">Why product managers must be
                                            strategic about chasing new trends</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Donna Martin</h6>
                                                <span class="small fw-medium text-muted">April 24, 2022</span>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <h1>{{$Heading}}</h1>
                                    @foreach($Trials as $Trial)

                                        
                                        <h3>{{$Trial['name']}}</h3>
                                        <p>{{$Trial['description']}}</p>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="single-article feature-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-11.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">Two tried-and-true frameworks for
                                            achieving product/market fit</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/4.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Donna Martin</h6>
                                                <span class="small fw-medium text-muted">April 24, 2022</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">Do you really understand the concept
                                            of product value?</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Jane Martin</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-2.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Customer</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">Why communities help you build better
                                            products for your business</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Veronica P. Byrd</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-3.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">Why communities help you build better
                                            products</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/3.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Martin Gilbert</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-4.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Marketing</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">The role of product ops in successful
                                            distributed teams</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/4.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Raymond H. Martin</h6>
                                                <span class="small fw-medium text-muted">May 4, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-5.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">UI/UX</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">The modern product manager’s tech
                                            stack</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/5.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Luthar Martin</h6>
                                                <span class="small fw-medium text-muted">Jan 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-6.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Management</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">30 product management thought leaders
                                            to follow</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Donna Martin</h6>
                                                <span class="small fw-medium text-muted">April 24, 2022</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-7.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Design</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">New analyst report: Digital product
                                            management tools and tech</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Donna R. Book</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-8.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Development</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">A frank discussion about diversity,
                                            inclusion, and allyship</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/3.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Donna R. Martin</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="blog-single.html" class="article-img">
                                    <img src="assets/img/blog/blog-9.jpg" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                    </div>
                                    <a href="blog-single.html">
                                        <h2 class="h5 article-title limit-2-line-text">4 steps for measuring the impact of
                                            product discovery</h2>
                                    </a>
                                    <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                        reality, you have infinite upside and opportunity. In the other reality, you’ll
                                        continue to see the gap between your standard of living and those at the top grow
                                        more and more.</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="assets/img/testimonial/2.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">Martin Luthar</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--pagination start-->
                    <div class="row justify-content-center align-items-center mt-5">
                        <div class="col-auto my-1">
                            <a href="#" class="btn btn-soft-primary btn-sm">Previous</a>
                        </div>
                        <div class="col-auto my-1">
                            <nav>
                                <ul class="pagination rounded mb-0">
                                    <li class="page-item"><a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto my-1">
                            <a href="#" class="btn btn-soft-primary btn-sm">Next</a>
                        </div>
                    </div>
                    <!--pagination end-->
                </div>
            </section>
            <!--blog section end-->

        </div>
        <!--style guide block end-->

@include ('footer')
