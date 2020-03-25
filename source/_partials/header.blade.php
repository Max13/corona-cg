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
            <div class="col-xs-4 col-md-3">
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
