<x-app-layout>
    @include('translate.en.header.header')
    <main>
    
    <div class="slider-area">
    <div class="slider-height2 slider-bg6 hero-overly02 d-flex align-items-center">
    <div class="container">
    <div class="row">
    <div class="col-xl-5 col-lg-6 col-md-8">
    <div class="hero-caption hero-caption2">
    <h2>Publications</h2>
    <p>In this section, we highlight the publications of Maître Rachid Rethmani as well as other relevant legal articles and books on a national and international scale
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <!-- <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Publications by Maître Rethmani</h3>
                    <p>
                    Since the establishment of the law firm in 1989, Maître Rethmani has contributed to numerous legal publications. His writings cover a wide range of subjects, from business law and commercial law to in-depth analyses of Moroccan legislation and international legal developments. These publications, often featured in specialized journals and legal newspapers, reflect his expertise and commitment to advancing the field of law.                
                    </p>
                    
                    <h3>National and International Publications</h3>
                    <p>
                    In addition to Maître Rethmani's contributions, we offer a selection of articles and books written by recognized experts in the legal field. These publications cover various aspects of law and provide valuable insights into current trends and significant development…             
                    </p>
                    
                        <h3>Access and Resources</h3>
                    <p>
                        We strongly believe in the importance of continuous information and education. That's why we have created this library of resources for our clients and visitors. You can access these publications directly on our website or through links to platforms where they are available. This section is regularly updated to include the latest contributions and relevant publications.
                    </p>
                    
                    <h3>Commitment to Legal Excellence</h3>
                    <p>
                        By sharing these publications, our aim is to promote a deeper understanding of the law and contribute to legal discourse, both nationally and internationally. We hope you find these resources useful and informative, enhancing your understanding of the complexities of law. Explore this section to discover the contributions of Maître Rethmani's law firm in Tangier and other legal experts, and stay informed about the latest and most relevant developments in the legal world.
                    </p>
                </div>
            </div>
        </div>
    </section> -->
    
    
    <section class="blog_area section-padding" style="display: flex; justify-content: center; align-items: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="blog_left_sidebar d-flex flex-wrap justify-content-between">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="https://cdnl.iconscout.com/lottie/premium/thumb/download-pdf-file-5583425-4655744.gif" alt="">
                                <a href="{{url('Jurisprudence')}}" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('/Jurisprudence')}}">
                                    <h2 class="blog-head">PDF ONE</h2>
                                </a>
                                <p>PDF DESCRIPTION</p>
                                <ul class="blog-info-link">
                                </ul>
                            </div>
                        </article>
    
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="https://cdnl.iconscout.com/lottie/premium/thumb/download-pdf-file-5583425-4655744.gif" alt="">
                                <a href="{{url('Jurisprudence')}}" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('/Jurisprudence')}}">
                                    <h2 class="blog-head">PDF TWO</h2>
                                </a>
                                <p>PDF DESCRIPTION</p>
                                <ul class="blog-info-link">
                                </ul>
                            </div>
                        </article>
    
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="https://cdnl.iconscout.com/lottie/premium/thumb/download-pdf-file-5583425-4655744.gif" alt="">
                                <a href="{{url('Jurisprudence')}}" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('/Jurisprudence')}}">
                                    <h2 class="blog-head">PDF THREE</h2>
                                </a>
                                <p>PDF DESCRIPTION</p>
                                <ul class="blog-info-link">
                                </ul>
                            </div>
                        </article>
    
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="https://cdnl.iconscout.com/lottie/premium/thumb/download-pdf-file-5583425-4655744.gif" alt="">
                                <a href="{{url('Jurisprudence')}}" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('/Jurisprudence')}}">
                                    <h2 class="blog-head">PDF FOUR</h2>
                                </a>
                                <p>PDF DESCRIPTION</p>
                                <ul class="blog-info-link">
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <!-- Right Sidebar Content Goes Here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </main>
    @include('translate.en.footer.footer')
    
    <div id="back-top">
    <a title="Go to Top" href="{{url('Jurisprudence')}}"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    
</x-app-layout>