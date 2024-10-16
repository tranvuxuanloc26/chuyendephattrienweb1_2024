<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3023">
  <section class="categories-area">
    <div class="container">
      <div class="sec-title text-center">
        <h1>Categories</h1>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="icon-holder">
              <div class="icon-box">
                <div class="icon"><span class="fa fa-apple"></span></div>
              </div>
            </div>
            <div class="text-holder">
              <h5>APPLE IPHONE</h5>
              <p>Disassembly &amp; replacement guides for the original iPhone, iPhone 3GS, iPhone 4...</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="icon-holder">
              <div class="icon-box">
                <div class="icon"><span class="fa fa-android"></span></div>
              </div>
            </div>
            <div class="text-holder">
              <h5>ANDROID PHONE</h5>
              <p>We are pleased to offer a wide range of Android repairs services we can repair..android</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="icon-holder">
              <div class="icon-box">
                <div class="icon"><span class="fa fa-windows"></span></div>
              </div>
            </div>
            <div class="text-holder">
              <h5>WINDOWS PHONE</h5>
              <p>Repair guides and teardowns for many Windows cell phones, a of manufacturers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="icon-holder">
              <div class="icon-box">
                <div class="icon"><span class="fa fa-phone"></span></div>
              </div>
            </div>
            <div class="text-holder">
              <h5>BLACKBERRY PHONE</h5>
              <p>Are you looking for Blackberry repair? We carry out large number repairs every day...</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="icon-holder">
              <div class="icon-box">
                <div class="icon"><span class="fa fa-headphones"></span></div>
              </div>
            </div>
            <div class="text-holder">
              <h5>PHONE ACCESSORY</h5>
              <p>If you have any problems in your phone accessories don't worry, we will repair...</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-item">
            <div class="icon-holder">
              <div class="icon-box">
                <div class="icon"><span class="fa fa-desktop"></span></div>
              </div>
            </div>
            <div class="text-holder">
              <h5>DESKTOP LAPTOP</h5>
              <p>Also we do all types of desktop repair, we have experienced technicians...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
       