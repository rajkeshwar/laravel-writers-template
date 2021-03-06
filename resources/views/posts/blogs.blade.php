@extends('layouts.main')

@section('content')

<section id="read-all" class="section bg-light">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-4">

              <div class="mb-9">
                  <div class="px-6 py-7 rounded text-white custom-section-4">
                      <h3 class="h5 mb-4">Subscribe to the best creative feed.</h3>
                      <form class="input-round" novalidate="novalidate">
                          <div class="form-group input-group bg-white shadow-4">
                              <input type="text" class="form-control form-control-sm height-inherit pl-4" placeholder="Enter your email">
                              <div class="input-group-append">
                                  <button class="btn btn-primary" type="button">Join</button>
                              </div>
                          </div>
                      </form>
                      <p class="small">Don't worry, we don't <a class="m-link-light" href="#">spam</a> </p>
                  </div>
              </div>

              <div class="mb-9">
                  <div class="clearfix d-flex">
                      <div class="media align-items-center w-50">
                          <div class="mr-1">
                              <a href="#" class="btn btn-facebook btn-sm pl-3 pr-3"><i class="fab fa-facebook"></i></a>
                          </div>
                          <div class="media-body line-height-1">
                              <a class="text-dark clearfix" href="#">Follow</a>
                              <span class="time small text-muted">on Facebook</span>
                          </div>
                      </div>

                      <div class="media align-items-center w-50">
                          <div class="mr-1">
                              <a href="#" class="btn btn-twitter btn-sm pl-3 pr-3"><i class="fab fa-twitter"></i></a>
                          </div>
                          <div class="media-body line-height-1">
                              <a class="text-dark clearfix" href="#">Follow</a>
                              <span class="time small text-muted">on Twitter</span>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="mb-9">
                  <h3 class="h5 mb-4">Categories</h3>

                  <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          <a class="text-dark anim-link-2" href="#">Design</a>
                          <span class="badge badge-primary badge-pill">14</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          <a class="text-dark anim-link-2" href="#">Graphic</a>
                          <span class="badge badge-primary badge-pill">5</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          <a class="text-dark anim-link-2" href="#">WordPress</a>
                          <span class="badge badge-primary badge-pill">24</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          <a class="text-dark anim-link-2" href="#">HTML/CSS</a>
                          <span class="badge badge-primary badge-pill">1</span>
                      </li>
                  </ul>
              </div>

              <div class="mb-9">
                  <h3 class="h5 mb-4">Trending Posts</h3>
                  <div class="clearfix">
                      <div class="media mb-4">
                          <div class="w-60px mr-3">
                              <img class="pi-img-round" src="/assets/images/bls1.jpg" />
                          </div>
                          <div class="media-body">
                              <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="#">Tourism in Dubai is booming by international tourist</a>
                              <span class="time small text-muted">Dec 17, 2019</span>
                          </div>
                      </div>

                      <div class="media mb-4">
                          <div class="w-60px mr-3">
                              <img class="pi-img-round" src="/assets/images/bls3.jpg" />
                          </div>
                          <div class="media-body">
                              <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="#">3 Ways to Boost Online Sales off Season</a>
                              <span class="time small text-muted">May 28, 2019</span>
                          </div>
                      </div>

                      <div class="media mb-4">
                          <div class="w-60px mr-3">
                              <img class="pi-img-round" src="/assets/images/bls2.jpg" />
                          </div>
                          <div class="media-body">
                              <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="#">Google Play Warns Users It Doesn’t Carry Fortnite</a>
                              <span class="time small text-muted">Jun 14, 2019</span>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="mb-9">
                  <h3 class="h5 mb-4">Don't Miss</h3>
                  <div class="clearfix">
                      <div class="media align-items-center mb-4">
                          <div class="w-60px mr-3 text-center">
                              <i class="icon-bubble-conversation-2 fs-35"></i>
                          </div>
                          <div class="media-body">
                              <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="#">Instant coffee was invented by a brilliant man</a>
                              <span><a href="#" class="text-dark small anim-link-2">Sophia Green</a> <span class="small">-</span> </span>
                              <span class="time small text-muted">Dec 17, 2019</span>
                          </div>
                      </div>

                      <div class="media align-items-center mb-4">
                          <div class="w-60px mr-3 text-center">
                              <i class="icon-bubble-conversation-2 fs-35"></i>
                          </div>
                          <div class="media-body">
                              <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="#">The world consumes close to 2.25B cups of coffee daily</a>
                              <span><a href="#" class="text-dark small anim-link-2">Sophia Green</a> <span class="small">-</span> </span>
                              <span class="time small text-muted">Dec 17, 2019</span>
                          </div>
                      </div>

                      <div class="media align-items-center mb-4">
                          <div class="w-60px mr-3 text-center">
                              <i class="icon-bubble-conversation-2 fs-35"></i>
                          </div>
                          <div class="media-body">
                              <a class="mt-0 mb-2 text-dark anim-link-2 clearfix" href="#">Coffee beans aren’t beans at all, they are just fruit pits</a>
                              <span><a href="#" class="text-dark small anim-link-2">Sophia Green</a> <span class="small">-</span> </span>
                              <span class="time small text-muted">Dec 17, 2019</span>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="mb-9">
                  <h3 class="h5 mb-4">Recent Comments</h3>
                  <div class="clearfix">
                      <div class="media align-items-center mb-4">
                          <div class="w-60px mr-3 text-center">
                              <i class="icon-bubble-conversation-2 fs-35"></i>
                          </div>
                          <div class="media-body fs-15">
                              <span><a href="#" class="text-dark anim-link-2 text-style-italic">Sophia Green</a> <span class="text-muted">on</span> </span>
                              <a class="mt-0 mb-2 text-dark anim-link-2 text-style-italic" href="#">Five reasons why in-form Leicester City will finish the job and stay up</a>
                          </div>
                      </div>

                      <div class="media align-items-center mb-4">
                          <div class="w-60px mr-3 text-center">
                              <i class="icon-bubble-conversation-2 fs-35"></i>
                          </div>
                          <div class="media-body fs-15">
                              <span><a href="#" class="text-dark anim-link-2 text-style-italic">John Doe</a> <span class="text-muted">on</span> </span>
                              <a class="mt-0 mb-2 text-dark anim-link-2 text-style-italic" href="#">Pasta with caramelised onions and yogurt recipe</a>
                          </div>
                      </div>

                      <div class="media align-items-center mb-4">
                          <div class="w-60px mr-3 text-center">
                              <i class="icon-bubble-conversation-2 fs-35"></i>
                          </div>
                          <div class="media-body fs-15">
                              <span><a href="#" class="text-dark anim-link-2 text-style-italic">Sophia Green</a> <span class="text-muted">on</span> </span>
                              <a class="mt-0 mb-2 text-dark anim-link-2 text-style-italic" href="#">Pasta with caramelised onions and yogurt recipe</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-8">
              <p class="mnt-5 ml-3">
                  Vertex has more than one blog styles, <a href="../feature/blog.html" class="anim-link">click to see <span class="icon-arrow-right ml-1"></span></a>
              </p>
              <div class="cbp"
                   data-layout-mode="grid"
                   data-animation-type='slideDelay'
                   data-caption='overlayBottomAlong'
                   data-display-type='bottomToTop'
                   data-display-type-speed="100"
                   data-gap-horizontal="1"
                   data-gap-vertical="0"
                   data-media-queries='[
                  {"width": 1500, "cols": 2},
                  {"width": 1100, "cols": 2},
                  {"width": 800, "cols": 2},
                  {"width": 480, "cols": 2},
                  {"width": 300, "cols": 1}
                ]'>
                  <div class="cbp-item identity">
                      <div class="p-3">
                          <div class="card shadow-1 hover-shadow-6 transition-hover">
                              <div class="card-body bg-white p-5">
                                  <div class="fs-14 mb-3">Article <time class="text-light mb-3">May 25, 2019</time></div>
                                  <h2 class="h5 mb-2">
                                      <a href="#" class="fs-18 anim-link-2 anim-link-2-primary" tabindex="0">The Great Divide</a>
                                  </h2>
                                  <p>Master is the innovation platform for business..</p>
                              </div>
                              <div class="card-footer bg-white border-top-0 pb-4 pr-5 pl-5">
                                  <div class="media align-items-center">
                                      <div class="avatar-sm mr-3">
                                          <img class="img-fluid rounded-circle" src="/assets/images/avatar2.jpg" alt="Image Description">
                                      </div>
                                      <div class="media-body fs-14">
                                          <div class="text-light">
                                              Author
                                          </div>
                                          <div>
                                              <a href="../blog/single-article-classic.html" class="anim-link-2 anim-link-2-primary" tabindex="0">Peter Parker</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="custom-tags mt-4 mb-3">
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Design</a>
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Marketing</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="cbp-item identity">
                      <div class="p-3">
                          <div class="card shadow-1 hover-shadow-6 transition-hover">
                              <div class="card-body bg-white p-5">
                                  <div class="fs-14 mb-3">Article <time class="text-light mb-3">May 25, 2019</time></div>
                                  <h2 class="h5 mb-2">
                                      <a href="#" class="fs-18 anim-link-2 anim-link-2-primary" tabindex="0">Internet advertising what went wrong.</a>
                                  </h2>
                                  <p>Master is the innovation platform for business..</p>
                              </div>
                              <div class="card-footer bg-white border-top-0 pb-4 pr-5 pl-5">
                                  <div class="media align-items-center">
                                      <div class="avatar-sm mr-3">
                                          <img class="img-fluid rounded-circle" src="/assets/images/avatar3.jpg" alt="Image Description">
                                      </div>
                                      <div class="media-body fs-14">
                                          <div class="text-light">
                                              Author
                                          </div>
                                          <div>
                                              <a href="../blog/single-article-classic.html" class="anim-link-2 anim-link-2-primary" tabindex="0">Wade Wilson</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="custom-tags mt-4 mb-3">
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Design</a>
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Marketing</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="cbp-item web-design">
                      <div class="p-3">
                          <div class="card shadow-1 hover-shadow-6 transition-hover">
                              <div class="card-body bg-white p-5">
                                  <div class="fs-14 mb-3">Article <time class="text-light mb-3">May 25, 2019</time></div>
                                  <h2 class="h5 mb-2">
                                      <a href="#" class="fs-18 anim-link-2 anim-link-2-primary" tabindex="0">New ES2019 Features Every JavaScript Developer Should Know</a>
                                  </h2>
                                  <p class="mb-0">Master is the for business..</p>
                              </div>
                              <div class="card-footer bg-white border-top-0 pb-4 pr-5 pl-5">
                                  <div class="media align-items-center">
                                      <div class="avatar-sm mr-3">
                                          <img class="img-fluid rounded-circle" src="/assets/images/avatar1.jpg" alt="Image Description">
                                      </div>
                                      <div class="media-body fs-14">
                                          <div class="text-light">
                                              Author
                                          </div>
                                          <div>
                                              <a href="../blog/single-article-classic.html" class="anim-link-2 anim-link-2-primary" tabindex="0">Jessica Jones</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="custom-tags mt-4 mb-3">
                                      <a href="#" rel="tag" class="label label--sm label--secondary">front developer</a>
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Marketing</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="cbp-item graphic identity">
                      <div class="p-3">
                          <div class="card shadow-1 hover-shadow-6 transition-hover">
                              <div class="card-body bg-white p-5">
                                  <div class="fs-14 mb-3">Article <time class="text-light mb-3">May 25, 2019</time></div>
                                  <h2 class="h5 mb-2">
                                      <a href="#" class="fs-18 anim-link-2 anim-link-2-primary" tabindex="0">Internet advertising what went wrong.</a>
                                  </h2>
                                  <p>Master is the innovation platform for business..</p>
                              </div>
                              <div class="card-footer bg-white border-top-0 pb-4 pr-5 pl-5">
                                  <div class="media align-items-center">
                                      <div class="avatar-sm mr-3">
                                          <img class="img-fluid rounded-circle" src="/assets/images/avatar3.jpg" alt="Image Description">
                                      </div>
                                      <div class="media-body fs-14">
                                          <div class="text-light">
                                              Author
                                          </div>
                                          <div>
                                              <a href="../blog/single-article-classic.html" class="anim-link-2 anim-link-2-primary" tabindex="0">Wade Wilson</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="custom-tags mt-4 mb-3">
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Design</a>
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Marketing</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="cbp-item identity">
                      <div class="p-3">
                          <div class="card shadow-1 hover-shadow-6 transition-hover">
                              <div class="card-body bg-white p-5">
                                  <div class="fs-14 mb-3">Article <time class="text-light mb-3">May 25, 2019</time></div>
                                  <h2 class="h5 mb-2">
                                      <a href="#" class="fs-18 anim-link-2 anim-link-2-primary" tabindex="0">Internet advertising what went wrong.</a>
                                  </h2>
                                  <p>Master is the innovation platform for business..</p>
                              </div>
                              <div class="card-footer bg-white border-top-0 pb-4 pr-5 pl-5">
                                  <div class="media align-items-center">
                                      <div class="avatar-sm mr-3">
                                          <img class="img-fluid rounded-circle" src="/assets/images/avatar3.jpg" alt="Image Description">
                                      </div>
                                      <div class="media-body fs-14">
                                          <div class="text-light">
                                              Author
                                          </div>
                                          <div>
                                              <a href="../blog/single-article-classic.html" class="anim-link-2 anim-link-2-primary" tabindex="0">Wade Wilson</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="custom-tags mt-4 mb-3">
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Design</a>
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Marketing</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="cbp-item web-design">
                      <div class="p-3">
                          <div class="card shadow-1 hover-shadow-6 transition-hover">
                              <div class="card-body bg-white p-5">
                                  <div class="fs-14 mb-3">Article <time class="text-light mb-3">May 25, 2019</time></div>
                                  <h2 class="h5 mb-2">
                                      <a href="#" class="fs-18 anim-link-2 anim-link-2-primary" tabindex="0">New ES2019 Features Every JavaScript Developer Should Know</a>
                                  </h2>
                                  <p class="mb-0">Master is the for business..</p>
                              </div>
                              <div class="card-footer bg-white border-top-0 pb-4 pr-5 pl-5">
                                  <div class="media align-items-center">
                                      <div class="avatar-sm mr-3">
                                          <img class="img-fluid rounded-circle" src="/assets/images/avatar1.jpg" alt="Image Description">
                                      </div>
                                      <div class="media-body fs-14">
                                          <div class="text-light">
                                              Author
                                          </div>
                                          <div>
                                              <a href="../blog/single-article-classic.html" class="anim-link-2 anim-link-2-primary" tabindex="0">Jessica Jones</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="custom-tags mt-4 mb-3">
                                      <a href="#" rel="tag" class="label label--sm label--secondary">front developer</a>
                                      <a href="#" rel="tag" class="label label--sm label--secondary">Marketing</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="mb-9"></div>
              <nav aria-label="Page navigation">
                  <ul class="pagination">
                      <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">«</span>
                              <span class="sr-only">Previous</span>
                          </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                      <li class="page-item"><a class="page-link" href="#">12</a></li>
                      <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">»</span>
                              <span class="sr-only">Next</span>
                          </a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </div>
</section>

@endsection
