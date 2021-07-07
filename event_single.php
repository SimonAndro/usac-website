<?php require_once( 'admin/cms.php' ); ?>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Event' clonable='1' commentable='1'>
    <cms:editable name='event_short_title' type='text'>
        Get Together 2018 </cms:editable>
    <cms:editable name='event_short_desc' type='text'>
        Hello everybody Lorem ipsum dolor sit amet, consectetur
        adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim and minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquipv ex ea.1
    </cms:editable>
    <cms:editable name='event_intro' type='text'>
        Usac Needs enables you to harness the power of your Usac network. Whatever may be the
        need </cms:editable>
    <cms:editable name='page_cta' label='Call to action' desc='Enter call to action here' type='text'>
        Let&apos;s See
    </cms:editable>
    <cms:editable name='event_date' desc='As sample format' type='text'>
        <cms:date format='Y-m-d' />
    </cms:editable>
    
    <cms:editable name='event_image' crop='1' width='700' height='390' type='image' />

</cms:template>


<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">
                        <cms:show event_short_title />
                    </h1>
                    <p>
                        <cms:show event_intro />
                    </p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">
                        <cms:show page_cta /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Gallery Page Content Start ==-->
<section id="page-content-wrap">
    <div class="single-event-page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-event-details">
                        <div class="event-thumbnails">
                            <div class="event-thumbnail-carousel owl-carousel">
                                <div class="event-thumb-item event-thumb-img-1"
                                    style="background-image:url(<cms:show event_image />)">
                                    <div class="event-meta">
                                        <cms:editable name='event_meta' type='richtext'>
                                            <h3>Recently we are going to arrange a awesome get together!</h3>
                                            <a class="event-address" href="#"><i class="fa fa-map-marker"></i>
                                                Sayidan
                                                Street, Gondomanan, 8993, San Francisco, CA</a>
                                        </cms:editable>
                                    </div>
                                </div>
                            </div>
                            <div class="event-countdown">
                                <div class="event-countdown-counter"
                                    data-date="<cms:date  event_date format='Y/m/d' />"></div>
                                <p>Remaining</p>
                            </div>
                        </div>
                        <cms:editable name='event_details' type='richtext'>
                            <h2>Details all Thing About This Event</h2>
                            <p>Aenean viverra rhoncus pede. Phasellus leo dolor, tempus non, auctor endrerit quis,
                                nisi.
                                Fusce neque. Donec vitae orci sed dolor rutrum auctor. Sed ngilla mauris sit amet
                                nibhr,
                                tempus non, auctor endrerit quis, nisi..</p>

                            <p>Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu.
                                Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque
                                rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras
                                risus
                                ipsum, faucibus ut, ullamcorper id, varius ac, leo.Ut a nisl id
                                Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec ante
                                tempus
                                hendrerit. Curabitur at lacus ac velit ornare lobortis. Donec pede justo, fringilla
                                vel,
                                aliquet nec, vulputate eget, arcu. In turpis. Quisque id mi.</p>
                        </cms:editable>
                        <div class="event-schedul">
                            <cms:editable name='event_schedule' type='richtext'>
                                <h3>Event Schedule</h3>
                                <div class="row">
                                    <div class="col-lg-10 m-auto">
                                        <div class="event-schedul-accordion">
                                            <div class="accordion" id="event-schedul-accor">
                                                <!-- Single Event Schedule Start -->
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 data-toggle="collapse" data-target="#eventschedulOne"
                                                            aria-expanded="false" aria-controls="eventschedulOne">
                                                            <span class="event-time">8am - 10am</span> Grand Opening
                                                            Speech of Our Event And Re Introductory episode
                                                            <span class="open-close-icon pull-right">
                                                                <i class="fa fa-angle-up"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </span>
                                                        </h5>
                                                    </div>

                                                    <div id="eventschedulOne" class="collapse"
                                                        aria-labelledby="headingOne" data-parent="#event-schedul-accor">
                                                        <div class="card-body">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high
                                                                life accusamus terry richardson ad squid. 3 wolf
                                                                moon
                                                                officia aute, non cupidatat skateboard dolor brunch.
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                                                                wolf moon tempor, sunt aliqua put a bird on it squid
                                                                single-origin coffee nulla assumenda shoreditch et.
                                                                Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                anderson cred nesciunt sapiente ea proident.</p>
                                                            <p>Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat
                                                                craft beer farm-to-table, raw denim aesthetic synth
                                                                nesciunt you probably haven&apos;t heard of them
                                                                accusamus labore sustainable VHS.</p>
                                                            <h4 class="speaker-name"><strong>Speaker:</strong> Adam
                                                                Watshon, <span class="speaker-deg">Crish
                                                                    Joshef</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Event Schedule End -->

                                                <!-- Single Event Schedule Start -->
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 data-toggle="collapse" data-target="#eventschedulTwo"
                                                            aria-expanded="true" aria-controls="eventschedulTwo">
                                                            <span class="event-time">8am - 10am</span> Grand Opening
                                                            Speech of Our Event And Re Introductory episode
                                                            <span class="open-close-icon pull-right">
                                                                <i class="fa fa-angle-up"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </span>
                                                        </h5>
                                                    </div>

                                                    <div id="eventschedulTwo" class="collapse show"
                                                        aria-labelledby="headingTwo" data-parent="#event-schedul-accor">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high
                                                            life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                            tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice
                                                            lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven&apos;t heard
                                                            of
                                                            them accusamus labore sustainable VHS.
                                                            <h4 class="speaker-name"><strong>Speaker:</strong> Adam
                                                                Watshon, <span class="speaker-deg">Crish
                                                                    Joshef</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Event Schedule End -->

                                                <!-- Single Event Schedule Start -->
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 data-toggle="collapse" data-target="#eventschedulThree"
                                                            aria-expanded="false" aria-controls="eventschedulThree">
                                                            <span class="event-time">8am - 10am</span> Grand Opening
                                                            Speech of Our Event And Re Introductory episode
                                                            <span class="open-close-icon pull-right">
                                                                <i class="fa fa-angle-up"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </span>
                                                        </h5>
                                                    </div>

                                                    <div id="eventschedulThree" class="collapse"
                                                        aria-labelledby="headingThree"
                                                        data-parent="#event-schedul-accor">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high
                                                            life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                            tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice
                                                            lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven&apos;t heard
                                                            of
                                                            them accusamus labore sustainable VHS.
                                                            <h4 class="speaker-name"><strong>Speaker:</strong> Adam
                                                                Watshon, <span class="speaker-deg">Crish
                                                                    Joshef</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Event Schedule End -->

                                                <!-- Single Event Schedule Start -->
                                                <div class="card">
                                                    <div class="card-header" id="headingFour">
                                                        <h5 data-toggle="collapse" data-target="#eventschedulFour"
                                                            aria-expanded="false" aria-controls="eventschedulFour">
                                                            <span class="event-time">8am - 10am</span> Grand Opening
                                                            Speech of Our Event And Re Introductory episode
                                                            <span class="open-close-icon pull-right">
                                                                <i class="fa fa-angle-up"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </span>
                                                        </h5>
                                                    </div>

                                                    <div id="eventschedulFour" class="collapse"
                                                        aria-labelledby="headingFour"
                                                        data-parent="#event-schedul-accor">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high
                                                            life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                            tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident. Ad vegan excepteur butcher vice
                                                            lomo.
                                                            Leggings occaecat craft beer farm-to-table, raw denim
                                                            aesthetic synth nesciunt you probably haven&apos;t heard
                                                            of
                                                            them accusamus labore sustainable VHS.
                                                            <h4 class="speaker-name"><strong>Speaker:</strong> Adam
                                                                Watshon, <span class="speaker-deg">Crish
                                                                    Joshef</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Event Schedule End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </cms:editable>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Gallery Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>