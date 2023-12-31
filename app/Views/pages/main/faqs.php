<?= $this->extend('layouts/default') ?>
<?= $this->section('mainContent') ?>
    <div class="container">
        <div class="row">
            <div class="col-lx-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-4">
                            <div class="col-xl-5 col-lg-8">
                                <div class="text-center">
                                    <h3>Frequently Asked Questions?</h3>
                                    <p class="text-muted">ILorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at elementum mi. Donec hendrerit massa sed placerat vulputate. Fusce ipsum arcu, egestas nec purus et, accumsan lobortis odio.</p>
                                    <div>
                                        <a href="https://twitter.com/nscricket" target="_blank"><button type="button" class="btn btn-primary me-2">Send us a tweet</button></a>
                                        <a href="mailto:testadmin@cricketnovascotia.ca"><button type="button" class="btn btn-success">Email Us</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row justify-content-center mt-5">
                            <div class="col-9">
                                <ul class="nav nav-tabs  nav-tabs-custom nav-justified justify-content-center faq-tab-box" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-genarel-tab" data-bs-toggle="pill" data-bs-target="#pills-genarel" type="button" role="tab" aria-controls="pills-genarel" aria-selected="true">
                                            <span class="font-size-16">General Questions</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-privacy_policy-tab" data-bs-toggle="pill" data-bs-target="#pills-privacy_policy" type="button" role="tab" aria-controls="pills-privacy_policy" aria-selected="false">
                                            <span class="font-size-16">Privacy Policy</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content pt-3" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-genarel" role="tabpanel" aria-labelledby="pills-genarel-tab">
                                        <div class="row g-4 mt-2">
                                            <div class="col-lg-6">
                                                <h5>What is Cricket Nova Scotia ?</h5>
                                                <p class="text-muted">Ut tincidunt finibus risus, et volutpat metus blandit sed. Mauris quis tortor tristique, vulputate nisl et, malesuada nisi.
                                                    Ut tincidunt finibus risus, et volutpat metus blandit sed. Mauris quis tortor tristique, vulputate nisl et, malesuada nisi.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Why do we use it ?</h5>
                                                <p class="text-muted">Their separate existence is a myth. For science, music, sport, etc,
                                                    Europe uses the same vocabulary.</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Where does it come from ?</h5>
                                                <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple
                                                    and regular than that of the individual languages. The new common language will be more simple and
                                                    regular than the existing
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Where can I get some?</h5>
                                                <p class="lg-base">If several languages coalesce, the grammar of the resulting language is more
                                                    simple and regular than that of the individual languages. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-privacy_policy" role="tabpanel" aria-labelledby="pills-privacy_policy-tab">
                                        <div class="row g-4 mt-2">
                                            <div class="col-lg-6">
                                                <h5>Where can I get some ?</h5>
                                                <p class="lg-base">If several languages coalesce, the grammar of the resulting language is more simple
                                                    and regular than that of the individual languages. The new common language will be more
                                                    simple and regular than the existing</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Where does it come from ?</h5>
                                                <p class="lg-base">If several languages coalesce, the grammar of the resulting language is more simple
                                                    and regular than that of the individual languages. The new common language will be more
                                                    simple and regular than the existing</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Why do we use it ?</h5>
                                                <p class="lg-base">If several languages coalesce, the grammar of the resulting language is more simple
                                                    and regular than that of the individual languages. The new common language will be more
                                                    simple and regular than the existing</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>What is Genius privacy policy</h5>
                                                <p class="lg-base">If several languages coalesce, the grammar of the resulting language is more simple
                                                    and regular than that of the individual languages. The new common language will be more
                                                    simple and regular than the existing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>