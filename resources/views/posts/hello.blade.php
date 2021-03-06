@extends('layouts.main')

@section('content')
<section class="section pt-8">
  <div class="container">
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <h2>आइए देखते हैं हमारा <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">काम</mark></h2>
          <p class="lead">यदि आप हमारे साथ काम करना चाह रहे हैं तो संपर्क पृष्ठ के माध्यम से हमसे संपर्क करने में संकोच न करें।</p>
      </div>
      <div class="row">
          <div class="col-sm-12">

              <div class="cbp-l-center">
                  <div id="js-filters-agency" class="cbp-l-filters-text">
                      <div class="cbp-l-filters-text-sort">के द्वारा छनित:</div>
                      <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                          सब <div class="cbp-filter-counter"></div>
                      </div> |
                      <div data-filter=".identity" class="cbp-filter-item">
                          पहचान <div class="cbp-filter-counter"></div>
                      </div> |
                      <div data-filter=".web-design" class="cbp-filter-item">
                          वेब डिजाइन <div class="cbp-filter-counter"></div>
                      </div> |
                      <div data-filter=".graphic" class="cbp-filter-item">
                          ग्राफिक <div class="cbp-filter-counter"></div>
                      </div> |
                      <div data-filter=".logos" class="cbp-filter-item">
                          ्रतीक चिन्ह <div class="cbp-filter-counter"></div>
                      </div>
                  </div>
                  <div id="js-sort-agency" class="cbp-l-sort cbp-l-sort--simple">
                      <div class="cbp-l-text-sort">इसके अनुसार क्रमबद्ध करें: </div>
                      <div class="cbp-l-dropdown">
                          <div class="cbp-l-dropdown-wrap">
                              <div class="cbp-l-dropdown-header">मूल आदेश</div>
                              <div class="cbp-l-dropdown-list">
                                  <div class="cbp-l-dropdown-item cbp-sort-item cbp-l-dropdown-item--active" data-sort="" data-sortBy="">मूल आदेश</div>
                                  <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-title" data-sortBy="string:asc">शीर्षक - चढ़ते क्रम</div>
                                  <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-title" data-sortBy="string:desc">शीर्षक - उतरते क्रम</div>
                                  <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-desc" data-sortBy="string:asc">विवरण - चढ़ते क्रम</div>
                                  <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-desc" data-sortBy="string:desc">विवरण - उतरते क्रम</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="cbp cbp-l-grid-agency mb-8"
                   data-filters="#js-filters-agency"
                   data-layout-mode="grid"
                   data-animation-type='slideLeft'
                   data-caption='zoom'
                   data-display-type='fadeIn'
                   data-display-type-speed="100"
                   data-gap-horizontal="35"
                   data-gap-vertical="15"
                   data-plugin-sort-element="#js-sort-agency"
                   data-media-queries='[
                      {"width": 1500, "cols": 4},
                      {"width": 1100, "cols": 4},
                      {"width": 800, "cols": 3},
                      {"width": 480, "cols": 2},
                      {"width": 300, "cols": 1}
                    ]'>
                  <div class="cbp-item graphic">
                      <a href="/images/portfolio-1.jpg" target="_blank">
                          <div class="cbp-caption">
                              <div class="cbp-caption-defaultWrap">
                                  <img src="/images/portfolio-1.jpg" data-cbp-src="/images/portfolio-1.jpg" alt="" width="380" height="320">
                              </div>
                          </div>
                          <div class="cbp-l-grid-agency-title">डैशबोर्ड</div>
                          <div class="cbp-l-grid-agency-desc">वेब डिजाइन / ग्राफिक</div>
                      </a>
                  </div>
                  <div class="cbp-item web-design logos">
                      <a href="/images/portfolio-2.jpg" target="_blank">
                          <div class="cbp-caption">
                              <div class="cbp-caption-defaultWrap">
                                  <img src="/images/portfolio-2.jpg" data-cbp-src="/images/portfolio-2.jpg" alt="" width="380" height="320">
                              </div>
                          </div>
                          <div class="cbp-l-grid-agency-title">विश्व घड़ी</div>
                          <div class="cbp-l-grid-agency-desc">लोगो / वेब डिज़ाइन</div>
                      </a>
                  </div>
                  <div class="cbp-item graphic logos">
                      <a href="/images/portfolio-3.jpg" target="_blank">
                          <div class="cbp-caption">
                              <div class="cbp-caption-defaultWrap">
                                  <img src="/images/portfolio-3.jpg" data-cbp-src="/images/portfolio-3.jpg" alt="" width="380" height="320">
                              </div>
                          </div>
                          <div class="cbp-l-grid-agency-title">करने के लिए डैशबोर्ड</div>
                          <div class="cbp-l-grid-agency-desc">ग्राफिक / लोगो</div>
                      </a>
                  </div>
                  <div class="cbp-item web-design graphic">
                      <a href="/images/portfolio-4.jpg" target="_blank">
                          <div class="cbp-caption">
                              <div class="cbp-caption-defaultWrap">
                                  <img src="/images/portfolio-4.jpg" data-cbp-src="/images/portfolio-4.jpg" alt="" width="380" height="320">
                              </div>
                          </div>
                          <div class="cbp-l-grid-agency-title">घटनाक्रम और अधिक</div>
                          <div class="cbp-l-grid-agency-desc">वेब डिजाइन / ग्राफिक</div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row text-center">
          <div class="col-sm-12">
              <a class="btn btn-sleek-primary transition-hover pr-5 pl-5" href="#" target="_self">
                  सभी परियोजना देखें
              </a>
          </div>
      </div>
  </div>
</section>

<!--
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
| Parallax video
|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
!-->
<section class="section text-white text-center ml-0 mr-0 ml-lg-5 mr-lg-5" data-video="mp4:/video/video_space_cover.mp4">
  <div class="container">
      <header class="section-header mb-3">
          <img src="/images/MounGoonjLogo.png" width="50"/>
      </header>

      <p class="white-color fs-24 fw-100">
          हमारी थीम पूरे विश्व में <b class="fsx">24,000</b> <br />
          से अधिक वेबसाइटों की शक्ति है
      </p>

      <a class="btn btn-sleek-white transition-hover mt-4 btn-wide mb-5 common-Link--arrow" href="#" target="_self">
        हमारे बारे में अधिक
      </a>
  </div>
  <figure class="position-absolute right-0 bottom-0 left-0 z-index-2 mb-0">
      <img class="js-svg-injector" src="./svgs/divider-bottom.svg" alt="Image Description">
  </figure>
</section>

<section class="section">
  <div class="container">
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <h2>तेज और आसान <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">डिज़ाइन</mark></h2>
          <p class="lead">अंतिम और भयानक अनुभव में शामिल हों</p>
      </div>

      <div class="row justify-content-lg-center">
          <div class="col-md-6 col-lg-5 mb-7">
              <div class="media pr-lg-5">
                  <div class="w-60px mr-4">
                    {{ Html::image('/svgs/bulb-1.svg', 'Icon', ['class' => 'icon bg-primary', 'data-inject-svg']) }}
                  </div>
                  <div class="media-body">
                      <h3 class="h5 mt-0 mb-2">तुरंत आरंभ करें</h3>
                      <p class="mb-1"> लडस में सैड क्विस डोलर ullamcorper euismod nec et nibh। <a href="#" class="anim-link-2 anim-link-2-primary">मोरबी</a>  मोलिस, एनिम विटे। </p>
                      <a href="#" class="anim-link-2 anim-link-2-primary  common-Link--arrow common-BodyText">अब अन्वेषण करें </a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-5 mb-7">
              <div class="media pl-lg-5">
                  <div class="w-60px mr-4">
                    <img class="icon bg-primary" src="/svgs/crop.svg" alt="Icon" data-inject-svg />
                  </div>
                  <div class="media-body">
                      <h3 class="h5 mt-0 mb-2">पूर्ण उत्तरदायी <span class="badge bg-secondary font-weight-normal">अद्वितीय</span></h3>
                      <p class="mb-1"> लडस में सैड क्विस डोलर <span class="m-link-muted">ullamcorper</span> euismod nec et nibh। मोरबी मोलिस एनिम विटे यूरोप। </p>
                      <a href="#" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">अब अन्वेषण करें  </a>
                  </div>
              </div>
          </div>
          <div class="w-100"></div>
          <div class="col-md-6 col-lg-5 mb-7">
              <div class="media pr-lg-5">
                  <div class="w-60px mr-4">
                      <img class="icon bg-primary" src="/svgs/brush.svg" alt="Icon" data-inject-svg />
                  </div>
                  <div class="media-body">
                      <h3 class="h5 mt-0 mb-2">अनुकूलित करने के लिए आसान है</h3>
                      <p class="mb-1"> लडस में सैड क्विस डोलर ullamcorper euismod nec et nibh। मोरबी मोलिस यूरोपिज़म ।। </p>
                      <a href="#" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">अब अन्वेषण करें </a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-5 mb-7">
              <div class="media pl-lg-5">
                  <div class="w-60px mr-4">
                      <img class="icon bg-primary" src="/svgs/couch.svg" alt="sketch icon" data-inject-svg />
                  </div>
                  <div class="media-body">
                      <h3 class="h5 mt-0 mb-2">स्वच्छ और आधुनिक</h3>
                      <p class="mb-1"> लडस में सैड क्विस डोलर ullamcorper euismod nec et nibh। मोरबी मोलिस, एनिम विटे रटरु। </p>
                      <a href="#" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">अब अन्वेषण करें </a>
                  </div>
              </div>
          </div>
      </div>

      <div class="row text-center">
          <div class="col-sm-12 mt-2">
              <a class="btn btn-sleek-primary transition-hover pr-5 pl-5" href="#" target="_self">
                 आइए देखें हमारी विशेषताएं
              </a>
          </div>
      </div>
  </div>
</section>

<section class="section">
  <div class="container">
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <h2>हमारी <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">टीम</mark> से मिलें </h2>
          <p class="lead">अंतिम और भयानक अनुभव में शामिल हों</p>
      </div>

      <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">

              <div class="team-member">
                  <div class="position-relative">
                      <img class="img-fluid w-100 rounded" src="/images/t1.jpg" alt="Roberto Willis">
                      <div class="member-social">
                          <div class="member-social-inner">
                              <ul class="list-inline">
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                          <i class="fab fa-facebook"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Twitter">
                                          <i class="fab fa-twitter"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card border-0">
                      <div class="card-body text-center p-3">
                          <h3 class="h5 mb-0">रॉबर्टो विलिस</h3>
                          <p class="font-weight-light mb-0 small">सह-संस्थापक</p>
                      </div>
                  </div>
              </div>

          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">

              <div class="team-member">
                  <div class="position-relative">
                      <img class="img-fluid w-100 rounded" src="/images/t5.jpg" alt="Roberto Willis">
                      <div class="member-social">
                          <div class="member-social-inner">
                              <ul class="list-inline">
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                          <i class="fab fa-facebook"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Twitter">
                                          <i class="fab fa-twitter"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card border-0">
                      <div class="card-body text-center p-3">
                          <h3 class="h5 mb-0">विक्टोरिया लॉडा</h3>
                          <p class="font-weight-light mb-0 small">वेब डेवलपर</p>
                      </div>
                  </div>
              </div>

          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">

              <div class="team-member">
                  <div class="position-relative">
                      <img class="img-fluid w-100 rounded" src="/images/t2.jpg" alt="Roberto Willis">
                      <div class="member-social">
                          <div class="member-social-inner">
                              <ul class="list-inline">
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                          <i class="fab fa-facebook"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Twitter">
                                          <i class="fab fa-twitter"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card border-0">
                      <div class="card-body text-center p-3">
                          <h3 class="h5 mb-0">जॉन डो</h3>
                          <p class="font-weight-light mb-0 small">डिजाइनर</p>
                      </div>
                  </div>
              </div>

          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">

              <div class="team-member">
                  <div class="position-relative">
                      <img class="img-fluid w-100 rounded" src="/images/t4.jpg" alt="Roberto Willis">
                      <div class="member-social">
                          <div class="member-social-inner">
                              <ul class="list-inline">
                                  <li>
                                      <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                          <i class="fab fa-facebook"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card border-0">
                      <div class="card-body text-center p-3">
                          <h3 class="h5 mb-0">जॉन स्मिथ</h3>
                          <p class="font-weight-light mb-0 small">सॉफ्टवेयर डेवलपर</p>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
</section>

<section data-overlay="3" class="m-gab-3" data-parallax="/images/h26.jpg">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-8">
              <div class="clearfix">
                  <h2 class="text-white font-weight-bold fs-40">
                      चलो काम करते हैं
                  </h2>
                  <p class="text-white mt-3 mb-4 lead">
                      हमारे साथ संपर्क में रहें और हमें आपकी मदद करने दें, हम आपकी परियोजना को साकार कर सकते हैं ।
                  </p>
                  <a href="#getStarted" class="btn btn-outline-light">
                      शुरू करते हैं
                  </a>
              </div>
          </div>
          <div class="col-md-4">
              <a href="https://www.youtube.com/watch?v=bmixiVwtDso" class="m-video-link" data-provide="lightbox">
                  <div class="m-video-link--icon"><i class="fas fa-play"></i></div>
                  <div class="m-video-link--text text-white">
                      <div class="font-weight-bold">इंट्रो वीडियो</div>
                      <div>देखें</div>
                  </div>
              </a>
          </div>
      </div>
  </div>
  <div class="oval-divider--top oval-divider--5"></div>
  <div class="oval-divider--bottom oval-divider--5"></div>
</section>

<section class="section">
  <div class="container">
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <h2>हमारी ख़ुश <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">ग्राहकेँ</mark></h2>
          <p class="lead">हमारे ग्राहक हमारे व्यवसाय के जीवन-स्रोत हैं और हमारे नवाचारों के पीछे बल हैं।</p>
      </div>

      <div class="row justify-content-center">
          <div class="col-md-12">
              <div data-provide="slider" data-slides-to-show="7" data-slides-to-scroll="3" data-autoplay="true" data-dots="true">
                  <div><img class="p-4 opacity-04" src="/images/01.png"></div>
                  <div><img class="p-4 opacity-04" src="/images/02.png"></div>
                  <div><img class="p-4 opacity-04" src="/images/03.png"></div>
                  <div><img class="p-4 opacity-04" src="/images/04.png"></div>
                  <div><img class="p-4 opacity-04" src="/images/05.png"></div>
                  <div><img class="p-4 opacity-04" src="/images/04.png"></div>
                  <div><img class="p-4 opacity-04" src="/images/03.png"></div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="section pt-6 pb-8 bg-light">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 text-center text-sm-left">
              <h2 class="h3 primary-color mb-0 fw-400">शुरू करने के लिए?</h2>
              <h3 class="h4 mb-0 fw-400">एक मुफ्त खाता बनाएं या संपर्क करें।</h3>
          </div>
          <div class="col-sm-4">
              <div class="text-center text-lg-right">
                  <a class="btn btn-primary transition-hover mt-3 mb-0 mr-2" target="_blank" href="#"><span>शुरू करें</span></a>
                  <a class="btn btn-secondary transition-hover mt-3 mb-0" href="#" target="_self"><span class="text">संपर्क में रहें</span></a>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
