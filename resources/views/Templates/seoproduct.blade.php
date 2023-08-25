@include('Templates.Header.header')
<!-- Begin page -->


<div id="wrapper">


    <!-- Topbar Start -->
    @include('Templates.TopBar.topbar');
    <!-- end Topbar -->


    <div class="content-page">
        <div class="content">

            <!-- Start container-fluid -->
            <div class="container-fluid">

                <!-- start  -->
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h4 class="header-title mb-3">Create New Backlink Order</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-8">

                            <div class="row">
                                <div class="col-12">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Domain Authority</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='domain-selector'>
                                                    @if(count($DA) > 0)
                                                        @foreach($DA as $res)
                                                            <option value="{{$res->id}}">{{$res->DA}}+</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="example-email">Anchor Text</label>
                                            <div class="col-md-10">
                                                <input type="text" name="anchor_text" class="form-control" placeholder="Anchor Text" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="example-email">Destination URL</label>
                                            <div class="col-md-10">
                                                <input type="url" name="destination_url" class="form-control" placeholder="Destination URL" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="example-placeholder">Primary Category</label>
                                            <div class="col-md-10">
                                                <select class="form-control">
                                                    <option value="[object Object]">Animals &amp; Pets ($65)</option>
                                                    <option value="[object Object]">Antiques and Collectibles ($230)</option>
                                                    <option value="[object Object]">App and SaaS ($90)</option>
                                                    <option value="[object Object]">Astronomy ($65)</option>
                                                    <option value="[object Object]">Automotive ($190)</option>
                                                    <option value="[object Object]">Betting ($190)</option>
                                                    <option value="[object Object]">Cannabis and CBD ($190)</option>
                                                    <option value="[object Object]">Commercial Services ($90)</option>
                                                    <option value="[object Object]">Construction ($90)</option>
                                                    <option value="[object Object]">crypto ($190)</option>
                                                    <option value="[object Object]">Cyber Security ($190)</option>
                                                    <option value="[object Object]">Dating ($190)</option>
                                                    <option value="[object Object]">Ecommerce ($65)</option>
                                                    <option value="[object Object]">Education ($90)</option>
                                                    <option value="[object Object]">Entertainment &amp; Music ($65)</option>
                                                    <option value="[object Object]">Family and Parenting ($65)</option>
                                                    <option value="[object Object]">Fashion &amp; Lifestyle ($90)</option>
                                                    <option value="[object Object]">Finance ($90)</option>
                                                    <option value="[object Object]">Fitness &amp; Gym ($90)</option>
                                                    <option value="[object Object]">Food &amp; Beverage ($65)</option>
                                                    <option value="[object Object]">Forex ($190)</option>
                                                    <option value="[object Object]">General ($65)</option>
                                                    <option value="[object Object]">Guns and ammunition ($190)</option>
                                                    <option value="[object Object]">Health ($65)</option>
                                                    <option value="[object Object]">Home Improvement and Repairs ($65)</option>
                                                    <option value="[object Object]">Hunting and Survival ($190)</option>
                                                    <option value="[object Object]">HVAC ($65)</option>
                                                    <option value="[object Object]">Industrial Equipment ($90)</option>
                                                    <option value="[object Object]">Insurance ($190)</option>
                                                    <option value="[object Object]">Law ($190)</option>
                                                    <option value="[object Object]">Leadership and Training ($65)</option>
                                                    <option value="[object Object]">Manufacturing ($90)</option>
                                                    <option value="[object Object]">Marketing ($65)</option>
                                                    <option value="[object Object]">Mesothelioma ($65)</option>
                                                    <option value="[object Object]">Moving ($90)</option>
                                                    <option value="[object Object]">Personal Finance ($90)</option>
                                                    <option value="[object Object]">Photography ($90)</option>
                                                    <option value="[object Object]">Plumbing ($65)</option>
                                                    <option value="[object Object]">Real Estate ($190)</option>
                                                    <option value="[object Object]">Renewable Energy ($65)</option>
                                                    <option value="[object Object]">SEO and Digital Marketing ($65)</option>
                                                    <option value="[object Object]">Small Business ($65)</option>
                                                    <option value="[object Object]">Sports ($190)</option>
                                                    <option value="[object Object]">Technology and Gadgets ($65)</option>
                                                    <option value="[object Object]">Tools and Hardware ($190)</option>
                                                    <option value="[object Object]">Travel ($190)</option>
                                                    <option value="[object Object]">Web &amp; Graphic Services ($65)</option>
                                                    <option value="[object Object]">Web Hosting ($90)</option>
                                                    <option value="[object Object]">Wedding ($90)</option>
                                                    <option value="[object Object]">Weight Loss ($90)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="example-textarea">Text area</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                    </div>
                    <!-- end -->

                    <div class="col-lg-4">
                        <form class="form-horizontal mt-4 mt-lg-0">

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Readonly</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Disabled</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled="" value="Disabled value">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Static control</label>
                                <div class="col-md-10">
                                    <p class="form-control-static my-1">email@example.com</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="example-helping">Helping text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Helping text" id="example-helping">
                                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Input Select</label>
                                <div class="col-md-10">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <h6 class="font-13 mt-3">Multiple select</h6>
                                    <select multiple="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
                <!-- end row -->

                <!-- end row -->

            </div>
            <!-- end container-fluid -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2017 - 2020 &copy; Simple theme by <a href="">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <!-- end content -->

    </div>
    <!-- END content-page -->

</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
    </div>
    <div class="slimscroll-menu">

        <div class="p-4">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class="mb-2">
                <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css"
                       data-appStyle="assets/css/app-dark.min.css" />
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
    <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
</a>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js')  }}"></script>

<script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script>
<script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<script>
    $(document).ready(()=>{
        $("#domain-selector").on('change',(event)=>{
            event.preventDefault();
            let selectedValue = $("#domain-selector").val();
            $.ajax({
                url:'/da-plan-finder/',
                method:'GET',
                data:{
                    'da':selectedValue,
                },
                success:(Response)=>{

                }
            });
        });
    });
</script>


</body>
</html>
