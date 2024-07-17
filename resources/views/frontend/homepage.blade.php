@extends('frontend.layout')

@section('content')

<div class="hero">
  <div class="hero-slide">
    @foreach($sliders as $slider)
    <div class="img overlay" style="background-image: url('{{ Storage::url($slider->banner) }}')"></div>
    @endforeach

  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center">
        <h1 class="heading" data-aos="fade-up">
          Cara Mudah Mencari Kost dari Rumah
        </h1>
        <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
          <input type="text" class="form-control px-4" placeholder="Cari jenis kost mu" />
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="font-weight-bold text-primary heading">
          Kost Populer
        </h2>
      </div>
      <div class="col-lg-6 text-lg-end">
        <p>
          <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Lihat Semua</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="property-slider-wrap">
          <div class="property-slider">
            <div class="property-item">
              <a href="property-single.html" class="img">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>Rp 1.200.000 </span></div>
                <div>
                  <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                  <span class="city d-block mb-3">Kost Kosong Kamar Mandi Dalam</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bed me-2"></span>
                      <span class="caption">-</span>
                    </span>
                    <span class="d-block d-flex align-items-center">
                      <span class="icon-bath me-2"></span>
                      <span class="caption">1 Kamar Mandi</span>
                    </span>
                  </div>

                  <a href="property-single.html" class="btn btn-primary py-2 px-3">Lihat Details</a>
                </div>
              </div>
            </div>
            <!-- .item -->

            <div class="property-item">
              <a href="property-single.html" class="img">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>Rp 1.800.000 </span></div>
                <div>
                  <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                  <span class="city d-block mb-3">Kost Isian Kamar Mandi Dalam</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bed me-2"></span>
                      <span class="caption"> 1 Kasur </span>
                    </span>
                    <span class="d-block d-flex align-items-center">
                      <span class="icon-bath me-2"></span>
                      <span class="caption">1 Kamar Mandi</span>
                    </span>
                  </div>

                  <a href="property-single.html" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                </div>
              </div>
            </div>
            <!-- .item -->

            <div class="property-item">
              <a href="property-single.html" class="img">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>Rp 2.000.000 </span></div>
                <div>
                  <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                  <span class="city d-block mb-3">Kost Exclusive </span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bed me-2"></span>
                      <span class="caption">2 Kasur</span>
                    </span>
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bath me-2"></span>
                      <span class="caption"> 1 Kamar Mandi </span>
                    </span>
                    <span class="d-block d-flex align-items-center">
                      <span class="icon-bath me-2"></span>
                      <span class="caption"> 1 Dapur </span>
                    </span>
                  </div>

                  <a href="property-single.html" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                </div>
              </div>
            </div>
            <!-- .item -->

            <div class="property-item">
              <a href="property-single.html" class="img">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>Rp 2.500.000</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                  <span class="city d-block mb-3">Kontrakan Keluarga</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bed me-2"></span>
                      <span class="caption">2 Kasur</span>
                    </span>
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bath me-2"></span>
                      <span class="caption">1 Kamar Mandi</span>
                    </span>
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="icon-bath me-2"></span>
                      <span class="caption"> 1 Dapur </span>
                    </span>
                    <span class="d-block d-flex align-items-center">
                      <span class="icon-bath me-2"></span>
                      <span class="caption"> 2 Ruang </span>
                    </span>
                  </div>

                  <a href="property-single.html" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                </div>
              </div>
            </div>

          </div>

          <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="features-1">
  <div class="container">
    <div class="row">
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="box-feature">
          <span class="flaticon-house"></span>
          <h3 class="mb-3">Our Properties</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptates, accusamus.
          </p>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
        <div class="box-feature">
          <span class="flaticon-building"></span>
          <h3 class="mb-3">Property for Sale</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptates, accusamus.
          </p>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <div class="box-feature">
          <span class="flaticon-house-3"></span>
          <h3 class="mb-3">Real Estate Agent</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptates, accusamus.
          </p>
        </div>
      </div>
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
        <div class="box-feature">
          <span class="flaticon-house-1"></span>
          <h3 class="mb-3">House for Sale</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptates, accusamus.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section sec-testimonials">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-6">
        <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
          Customer Says
        </h2>
      </div>
      <div class="col-md-6 text-md-end">
        <div id="testimonial-nav">
          <span class="prev" data-controls="prev">Prev</span>

          <span class="next" data-controls="next">Next</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4"></div>
    </div>
    <div class="testimonial-slider-wrap">
      <div class="testimonial-slider">
        @foreach($testimoni as $testi)
        <div class="item">
          <div class="testimonial">
            <img src="{{ Storage::url($testi->photo) }}" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
            <div class="rate">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
            </div>
            <h3 class="h5 text-primary mb-4">{{ $testi->name }}</h3>
            <blockquote>
              <p>
                &ldquo;{{ $testi->message }}.&rdquo;
              </p>
            </blockquote>
            <p class="text-black-50">{{ $testi->job_title }}</p>
          </div>
        </div>
        @endforeach

        <div class="testimonial">
          <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
          <div class="rate">
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
          </div>
          <h3 class="h5 text-primary mb-4">Dave Smith</h3>
          <blockquote>
            <p>
              &ldquo;Far far away, behind the word mountains, far from the
              countries Vokalia and Consonantia, there live the blind
              texts. Separated they live in Bookmarksgrove right at the
              coast of the Semantics, a large language ocean.&rdquo;
            </p>
          </blockquote>
          <p class="text-black-50">Designer, Co-founder</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="section">
  <div class="row justify-content-center footer-cta" data-aos="fade-up">
    <div class="col-lg-7 mx-auto text-center">
      <h2 class="mb-4">Be a part of our growing real state agents</h2>
      <p>
        <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Apply for Real Estate agent</a>
      </p>
    </div>
    <!-- /.col-lg-7 -->
  </div>
  <!-- /.row -->
</div>

<div class="section section-5 bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6 mb-5">
        <h2 class="font-weight-bold heading text-primary mb-4">
          Our Agents
        </h2>
        <p class="text-black-50">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
          enim pariatur similique debitis vel nisi qui reprehenderit totam?
          Quod maiores.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="h-100 person">
          <img src="images/person_1-min.jpg" alt="Image" class="img-fluid" />

          <div class="person-contents">
            <h2 class="mb-0"><a href="#">James Doe</a></h2>
            <span class="meta d-block mb-3">Real Estate Agent</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Facere officiis inventore cumque tenetur laboriosam, minus
              culpa doloremque odio, neque molestias?
            </p>

            <ul class="social list-unstyled list-inline dark-hover">
              <li class="list-inline-item">
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="h-100 person">
          <img src="images/person_2-min.jpg" alt="Image" class="img-fluid" />

          <div class="person-contents">
            <h2 class="mb-0"><a href="#">Jean Smith</a></h2>
            <span class="meta d-block mb-3">Real Estate Agent</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Facere officiis inventore cumque tenetur laboriosam, minus
              culpa doloremque odio, neque molestias?
            </p>

            <ul class="social list-unstyled list-inline dark-hover">
              <li class="list-inline-item">
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="h-100 person">
          <img src="images/person_3-min.jpg" alt="Image" class="img-fluid" />

          <div class="person-contents">
            <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
            <span class="meta d-block mb-3">Real Estate Agent</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Facere officiis inventore cumque tenetur laboriosam, minus
              culpa doloremque odio, neque molestias?
            </p>

            <ul class="social list-unstyled list-inline dark-hover">
              <li class="list-inline-item">
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection