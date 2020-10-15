  <section class="about-section bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>{!!$page->title!!}</h2>
                           <!--  <p>{!!$page->abstract!!}</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-block description">
                            <p>{!!$page->content!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {!!Block::get()!!}