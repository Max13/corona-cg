<!--Start Team Area-->
<div class="team-area area-padding-2">

    <div class="container">
       <!-- Start counter Area -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Congo Tech</h3>
                    <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                </div>
            </div>
        </div>

        <!-- Team row -->
        <div class="row">
            <div class="team-member">
                @foreach ($page->team as $member)
                <!-- team member-->
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4">
                    <div class="single-member">
                        <div class="team-img">
                            <img src="{{ $member->avatar }}" alt="Portrait {{ $member->name }}">
                        </div>
                        <div class="team-content text-center">
                            <h4>{{ $member->name }}</h4>
                            {{-- <p>doctor sergeant</p> --}}
                            <ul class="social-icon">
                                @foreach ($member->links as $platform => $link)
                                <li><a class="{{ $platform }}" href="{{ $link }}"><i class="fa fa-{{ $platform }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /team member-->
                @endforeach
            </div>
        </div>
        <!-- End row -->

    </div>
</div>
<!-- End Team Area-->
