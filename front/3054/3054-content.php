<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3054">
    <div class="content bg-color">
        <div class="bg-call">
            <div class="table">
                <div class="display padding-call-us">
                    <h2 class="h4 font-weight text-color">CALL US TO GET A FREE QUOTE NOW</h2>
                    <a href="#">
                        <div class="btn-call-us">> CALL US</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="table padding-top-content">
            <div class="display text-color">
                <div class="column">
                    <div class="display phone-repair">
                        <i class="icon-p-repair fas fa-tools fa-2x"></i>
                        <h3 class="h5 font-weight">PHONE REPAIR</h3>
                    </div>
                    <p class="small line-height-p">
                        In nulla nibh, malesuada sit amet purus id, mollis auctor ex. In sit amet venenatis eros.
                        Curabitur sed convallis mauris. Nam eget volutpat purus, ut egestas nulla. Nunc scelerisque
                        eros vitae lacus dictum dictum. Donec luctus ligula lectus, eu auctor sem sollicitudin sit
                        amet.
                    </p>
                </div>
                <div class="column">
                    <h4 class="h6 font-weight margin-title">COMPANY</h4>
                    <div class="list">
                        <div class="list-column">
                            <ul class="list-style small">
                                <li>Home</li>
                                <li>Services</li>
                                <li>Blog</li>
                            </ul>
                        </div>
                        <div class="list-column">
                            <ul class="list-style small">
                                <li>About us</li>
                                <li>Shop</li>
                                <li>Contacts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <h4 class="h6 font-weight margin-title margin-title">CONTACTS</h4>
                    <ul class="list-style small">
                        <li><i class="fas fa-phone-alt me-2"></i> 1-888-777-55555</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> 131 Lonsdale St, Melbourne VIC 3000, Australia</li>
                        <li><i class="fas fa-envelope me-2"></i> phone-repair@example.com</li>
                    </ul>
                    <h4 class="h6 font-weight margin-title">FOLLOW US</h4>
                    <div class="margin-title display gap">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-flickr"></i>
                        <i class="fab fa-tumblr"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="table">
            <p class="small text-color">Phone Repair WordPress Theme by BrothersTheme © 2016</p>
        </div>
    </footer>
</div>

