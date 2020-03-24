@extends('_layouts.master')

@section('body')

<!-- Header slide -->
<div class="slide-area fix" data-stellar-background-ratio="0.6" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                <h2 class="title2">Situation du Coronavirus (COVID-19) en République&nbsp;du&nbsp;Congo</h2>
                <h4 class="subtitle">Site d'information non officiel</h4>
            </div>
        </div>

        <!-- Start Counter area -->
        <div class="row counters">
            @foreach ($page->counters as $counter)
            <div class="col-xs-3">
                <div class="fun_text">
                   <span class="counter-icon">
                        <img src="{{ $counter->iconpath }}" alt="{{ $counter->text }}">
                    </span>
                    <span class="counter">{{ $counter->n }}</span>
                    <h4>{{ $counter->text }}</h4>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Counter area -->
    </div>
</div>
<!-- /Header slide -->

<!-- Gov communications -->
<div class="product-area area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Communications officielles</h3>
                    <p>Retrouvez ici les communications officielles du gouvernement de la République du Congo</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-item">
                <!-- Start Product column Area -->
                @foreach ($page->official_statements as $statement)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{ $statement->filepath }}" target="_blank">
                                <img class="first-img" src="/assets/build/img/coa-cg.svg" alt="Armoiries de la République du Congo">
                            </a>
                            <div class="product-summary">
                                <div class="product-details">
                                    <div class="add-cart">
                                        <a href="{{ $statement->filepath }}" target="_blank">Télécharger</a>
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
                                     <span>{{ $statement->date }}</span>
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

<!-- Measures -->
<div class="product-area bg-color area-padding">
    <div class="container">
        <h3 class="section-headline text-center">Mesures prises par le gouvernement</h3>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <ul>
                    <li>Les écoles, les crèches et les universités seront fermées à partir du  x mars 2020</li>
                    <li>les rassemblements de plus de 100 personnes sont interdits</li>
                    <li>la fermeture des lieux de culte, bar, restaurant vip</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Measures -->

@endsection
