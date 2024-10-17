<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3038">
    <div class="table-device">
        <div class="column">
            <div class="bg-title text-color fw-bold">SELECT YOUR DEVICE</div>
            <ul class="nav flex-column device-tabs" id="deviceTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="iphone-4-tab" data-bs-toggle="tab" href="#iphone-4" role="tab"
                        aria-controls="iphone-4" aria-selected="true">
                        iPhone 4 <i class="fas fa-arrow-right text-danger"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-4s-tab" data-bs-toggle="tab" href="#iphone-4s" role="tab"
                        aria-controls="iphone-4s" aria-selected="false">
                        iPhone 4S <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-5-tab" data-bs-toggle="tab" href="#iphone-5" role="tab"
                        aria-controls="iphone-5" aria-selected="false">
                        iPhone 5 <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-5c-tab" data-bs-toggle="tab" href="#iphone-5c" role="tab"
                        aria-controls="iphone-5c" aria-selected="false">
                        iPhone 5C <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-5s-tab" data-bs-toggle="tab" href="#iphone-5s" role="tab"
                        aria-controls="iphone-5s" aria-selected="false">
                        iPhone 5S <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-6-tab" data-bs-toggle="tab" href="#iphone-6" role="tab"
                        aria-controls="iphone-6" aria-selected="false">
                        iPhone 6 <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-6-plus-tab" data-bs-toggle="tab" href="#iphone-6-plus" role="tab"
                        aria-controls="iphone-6-plus" aria-selected="false">
                        iPhone 6 Plus <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-6s-tab" data-bs-toggle="tab" href="#iphone-6s" role="tab"
                        aria-controls="iphone-6s" aria-selected="false">
                        iPhone 6S <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-7-tab" data-bs-toggle="tab" href="#iphone-7" role="tab"
                        aria-controls="iphone-7" aria-selected="false">
                        iPhone 7 <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iphone-x-tab" data-bs-toggle="tab" href="#iphone-x" role="tab"
                        aria-controls="iphone-x" aria-selected="false">
                        iPhone X <i class="fas fa-arrow-right text-danger d-none"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="column">
            <div class="bg-title text-color p-2 fw-bold">SELECT BREAKAGE</div>
            <div class="tab-content mt-2" id="deviceTabContent">
                <div class="tab-pane fade show active" id="iphone-4" role="tabpanel" aria-labelledby="iphone-4-tab">
                    <ul class="list-style">
                        <li>Broken display</li>
                        <li>Not working camera</li>
                        <li>Not working button</li>
                        <li>Sound problems</li>
                        <li>Not working WI-FI</li>
                        <li>No screen light</li>
                        <li>Discharged battery</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>

                </div>
                <div class="tab-pane fade" id="iphone-4s" role="tabpanel" aria-labelledby="iphone-4s-tab">
                    <ul class="list-style">
                        <li>Not working camera</li>
                        <li>Not working WI-FI</li>
                        <li>Not working button</li>
                        <li>Discharged battery</li>
                        <li>Sound problems</li>
                        <li>No screen light</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>

                </div>
                <div class="tab-pane fade" id="iphone-5" role="tabpanel" aria-labelledby="iphone-5-tab">
                    <ul class="list-style">
                        <li>Broken display</li>
                        <li>Not working camera</li>
                        <li>Not working button</li>
                        <li>Sound problems</li>
                        <li>Not working WI-FI</li>
                        <li>No screen light</li>
                        <li>Discharged battery</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-5c" role="tabpanel" aria-labelledby="iphone-5c-tab">
                    <ul class="list-style">
                        <li>Not working WI-FI</li>
                        <li>Not working button</li>
                        <li>Replacement camera</li>
                        <li>Replacement housing</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-5s" role="tabpanel" aria-labelledby="iphone-5s-tab">
                    <ul class="list-style">
                        <li>Sound problems</li>
                        <li>Replacement housing</li>
                        <li>Not working WI-FI</li>
                        <li>Replacement camera</li>
                        <li>Broken display</li>
                        <li>Discharged battery</li>
                        <li>No screen light</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-6" role="tabpanel" aria-labelledby="iphone-6-tab">
                    <ul class="list-style">
                        <li>Not working camera</li>
                        <li>Not working WI-FI</li>
                        <li>Not working button</li>
                        <li>Discharged battery</li>
                        <li>Sound problems</li>
                        <li>No screen light</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-6s" role="tabpanel" aria-labelledby="iphone-6s-tab">
                    <ul class="list-style">
                        <li>Sound problems</li>
                        <li>Not working WI-FI</li>
                        <li>Not working button</li>
                        <li>No screen light</li>
                        <li>Not working camera</li>
                        <li>Discharged battery</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-6-plus" role="tabpanel" aria-labelledby="iphone-6-plus-tab">
                    <ul class="list-style">
                        <li>Not working camera</li>
                        <li>Not working WI-FI</li>
                        <li>Not working button</li>
                        <li>Discharged battery</li>
                        <li>Sound problems</li>
                        <li>No screen light</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-7" role="tabpanel" aria-labelledby="iphone-7-tab">
                    <ul class="list-style">
                        <li>Broken display</li>
                        <li>Not working camera</li>
                        <li>Not working button</li>
                        <li>Sound problems</li>
                        <li>Not working WI-FI</li>
                        <li>No screen light</li>
                        <li>Discharged battery</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="iphone-x" role="tabpanel" aria-labelledby="iphone-x-tab">
                    <ul class="list-style">
                        <li>Not working camera</li>
                        <li>Not working WI-FI</li>
                        <li>Not working button</li>
                        <li>Discharged battery</li>
                        <li>Sound problems</li>
                        <li>No screen light</li>
                        <li>Replacement housing</li>
                        <li>Replacement camera</li>
                        <li>Protective glass</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Cột 3: Nội dung Not Working WI-FI -->
        <div class="column">
            <div class="bg-title text-color fw-bold">NOT WORKING WI-FI</div>
            <div class="mt-2 small">
                <p>After stars heaven divided. Made let can't our divide a beast saw, is one open under cattle.
                    Whose own a. Replenish creepeth our shall fifth, together above one place forth he moved, day
                    man days our Air. He earth days. Deep is.</p>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Replacement Flex cable power button with the volume buttons, vibrate switch and flash.
                        </td>
                        <td>$110</td>
                        <td>2 hours</td>
                        <td><a href="#" class="text-order">ORDER</a></td>
                    </tr>
                    <tr>
                        <td>Replacement Home button (no Touch ID)</td>
                        <td>$450</td>
                        <td>1 hour</td>
                        <td><a href="#" class="text-order">ORDER</a></td>
                    </tr>
                    <tr>
                        <td>Replacement dust mesh voice dynamics</td>
                        <td>$211</td>
                        <td>3 hour</td>
                        <td><a href="#" class="text-order">ORDER</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
