<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3039">
  <div class="kswr-heading-container kswr-theelement">
    <div class="kswr-heading-title kswr-shortcode-element">Get Started With Your Device Repair</div>
    <div class="kswr-heading-content kswr-shortcode-element">
      <p></p>
      <p>&nbsp;Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis sed ipsum nostrud ipsum lorem<br>
      amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquat.</p>
      <p></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-3 col-sm-3">
        <div class="service-item">
          <div class="service-item-image">
            <a href="//fixar.templines.org/services/stationery-lobtyun/">
              <div class="img-hover-effect">
                <img loading="lazy" src="images/service01-350x233.jpg" alt="">
              </div>
            </a>
          </div>
          <div class="service-item-footer">
            <h4>Phone Repair</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam ...</p>
            <a class="btn btn-style-global" href="//fixar.templines.org/services/stationery-lobtyun/">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-3">
        <div class="service-item">
          <div class="service-item-image">
            <a href="//fixar.templines.org/services/business-delivery/">
              <div class="img-hover-effect">
                <img loading="lazy" src="images/repair04-350x233.png" alt="">
              </div>
            </a>
          </div>
          <div class="service-item-footer">
            <h4>Tablets Repair</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</p>
            <a class="btn btn-style-global" href="//fixar.templines.org/services/business-delivery/">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-3">
        <div class="service-item">
          <div class="service-item-image">
            <a href="//fixar.templines.org/services/stationery/">
              <div class="img-hover-effect">
                <img loading="lazy" src="images/tfnchBFIlhgNqeA-350x233.jpeg" alt="">
              </div>
            </a>
          </div>
          <div class="service-item-footer">
            <h4>Laptop Repair</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam ...</p>
            <a class="btn btn-style-global" href="//fixar.templines.org/services/stationery/">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-3 col-sm-3">
        <div class="service-item">
          <div class="service-item-image">
            <a href="//fixar.templines.org/services/lobortis-euismod/">
              <div class="img-hover-effect">
                <img loading="lazy" src="images/Motherboard-Repair-350x233.jpg" alt="">
              </div>
            </a>
          </div>
          <div class="service-item-footer">
            <h4>Computer Repair</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam ...</p>
            <a class="btn btn-style-global" href="//fixar.templines.org/services/lobortis-euismod/">READ MORE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>