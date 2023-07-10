<?php 

function slider() : void {
    $slides = [
        [
            'image' => 'images/slider-img.jpg',
            'text' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'
        ],
        [
            'image' => 'images/slider-img.jpg',
            'text' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'
        ],
    ];

    foreach ($slides as $slide) {
        echo '<div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="play_btn">
                  <button>
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </button>
                </div>
                <h1>
                  Mico <br>
                  <span>
                    Hospital
                  </span>
                </h1>
                <p>
                    ' . $slide['text'] . '
                </p>
                <a href="">
                  Contact Us
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="' . $slide['image'] . '" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>';
    }

    }