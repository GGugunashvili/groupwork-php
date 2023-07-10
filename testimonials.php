<?php

function testimonials() : void {
    $testiparts = [
        [
            'title' => 'Morijorch',
            'text' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various'
        ],
        [
            'title' => 'Rochak',
            'text' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy.'
        ],
        [
            'title' => 'Brad Johns',
            'text' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various'
        ],
    ];

    foreach ($testiparts as $index => $testipart) {
      $activeclass = ($index == 0) ? 'active' : '';
        echo '<div class="carousel-item ' . $activeclass . '">
        <div class="box">
          <div class="client_info">
            <div class="client_name">
              <h5>' . $testipart['title'] . '</h5>
              <h6>
                Default model text
              </h6>
            </div>
            <i class="fa fa-quote-left" aria-hidden="true"></i>
          </div>
          <p>' . $testipart['text'] . '</p>
        </div>
      </div>';
    }
}

?>

<!-- require "C:/xampp/htdocs/axaligroup/testimonials.php";
require "C:/xampp/htdocs/axaligroup/slider.php";  -->

