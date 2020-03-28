<!-- Start Prevention area -->
<div id="preventions" class="prevention-area bg-dark-color area-padding-2 fix">
    <div class="container">
       <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="prevention-text text-center">
                    <h3>Mesures de prévention</h3>
                    <p>La COVID-19 est transmise par des personnes porteuses du virus après de simples contacts étroits. À ce jour, le meilleur moyen de se protéger de la maladie est le respect des mesures barrière.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all-prevention">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4 class="text-center">À faire</h4>
                    <div class="prevention-inner left-prevention">
                        <div class="prevention-content">
                            @foreach ($page->preventions->do as $do)
                            <div class="single-prevention do-prevention">
                                <div class="pre-img">
                                    <img src="{{ $do->picto }}" alt="{{ $do->title }}">
                                </div>
                                <div class="pre-text">
                                    <h4>{{ $do->title }}</h4>
                                    <p>{{ $do->text }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                 <!-- End Column area -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4 class="text-center">À ne pas faire</h4>
                    <div class="prevention-inner right-prevention">
                        <div class="prevention-content">
                            @foreach ($page->preventions->dont as $dont)
                            <div class="single-prevention dont-prevention">
                                <div class="pre-img">
                                    <img src="{{ $dont->picto }}" alt="{{ $dont->title }}">
                                </div>
                                <div class="pre-text">
                                    <h4>{{ $dont->title }}</h4>
                                    <p>{{ $dont->text }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Prevention area -->
