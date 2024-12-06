@extends('../layout/side-menu')

@section('subhead')
    <title>Dashboard</title>
@endsection

@section('subcontent')
    <div class="loader"></div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5"></h2>
                        @guest
                            <h3>Guest</h3>
                        @endguest
                    </div>
                    @foreach ($result as $dash)
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                                <a href="">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-lucide="phone-call" class="report-box__icon text-primary"></i>
                                                <div class="ml-auto">
                                                </div>
                                            </div>
                                            <div class="text-3xl font-medium leading-8 mt-6">10
                                            </div>
                                            <div class="text-base text-slate-500 mt-1">Call Request</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                                <a href="">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">

                                            <div class="flex">
                                                <i data-lucide="message-square" class="report-box__icon text-pending"></i>
                                                <div class="ml-auto">

                                                </div>
                                            </div>

                                            <div class="text-3xl font-medium leading-8 mt-6">5
                                            </div>
                                            <div class="text-base text-slate-500 mt-1">Chat Request</div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                                <a href="">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="file-text" class="report-box__icon text-warning"></i>

                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">
                                           8
                                        </div>
                                        <div class="text-base text-slate-500 mt-1">Report Request</div>
                                    </div>
                                </div>
                                </a>
                            </div>

                        </div>
                </div>
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Monthly Earning Report</h2>

                    </div>
                    <h6>Last 12 Months</h6>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="report-chart">
                            <div class="h-[275px]">
                                <canvas id="myChart" height="100px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Monthly Request</h2>

                    </div>
                    <h6>Last 12 Months</h6>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="report-chart">
                            <div class="h-[275px]">
                                <canvas id="requestChart" height="100px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endforeach
        <!-- END: Weekly Top Products -->
    </div>

    </div>

    </div>
@endsection

