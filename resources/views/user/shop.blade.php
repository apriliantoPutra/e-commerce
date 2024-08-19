<!DOCTYPE html>
<html>

<head>
    @include('home.css')
  </head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <section class="shop_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Latest Products
            </h2>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Ring
                    </h6>
                    <h6>
                      Price
                      <span>
                        $200
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Watch
                    </h6>
                    <h6>
                      Price
                      <span>
                        $300
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Teddy Bear
                    </h6>
                    <h6>
                      Price
                      <span>
                        $110
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p4.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Flower Bouquet
                    </h6>
                    <h6>
                      Price
                      <span>
                        $45
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p5.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Teddy Bear
                    </h6>
                    <h6>
                      Price
                      <span>
                        $95
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p6.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Flower Bouquet
                    </h6>
                    <h6>
                      Price
                      <span>
                        $70
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p7.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Watch
                    </h6>
                    <h6>
                      Price
                      <span>
                        $400
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="">
                  <div class="img-box">
                    <img src="images/p8.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Ring
                    </h6>
                    <h6>
                      Price
                      <span>
                        $450
                      </span>
                    </h6>
                  </div>
                  <div class="new">
                    <span>
                      New
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              View All Products
            </a>
          </div>
        </div>
      </section>



  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->


  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
