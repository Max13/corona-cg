<!-- Gov communications -->
<div id="statements" class="product-area bg-dark-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="prevention-text text-center">
                    <h3>Communications officielles</h3>
                    <p>Retrouvez ici les communications officielles du gouvernement de la République du Congo</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-item">
                <!-- Start Product column Area -->
                @foreach ($page->official_statements->take(4) as $statement)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{ $statement->filepath }}" target="_blank">
                                <img class="first-img" src="{{ $statement->icon }}" alt="{{ $statement->name }}">
                            </a>
                            <div class="product-summary">
                                <div class="product-details">
                                    <div class="add-cart">
                                        <a href="{{ $statement->filepath }}" target="_blank">Voir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-name">
                                <h4><a href="#">{{ $statement->name }}</a></h4>
                            </div>
                            <div class="retail">
                                <div class="category">
                                     <span>{{ $statement->date->formatLocalized('%A %d %B %Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Product column Area -->
            </div>
        </div>
    </div>
</div>
<!-- End Product End -->
