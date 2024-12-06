<!-- BEGIN: Top Bar -->
<div
    class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <a href="/admin/dashboard" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img alt="AstroGuru image" class="logo__image w-6" src="storage/images/rispl.png"
                style="height: 50px;width: 100%; max-width: 50px;border-radius:50%">
            <span class="logo__text text-white text-lg ml-5 mt-2.5" style="vertical-align: center">
                RISPLE
            </span>
        </a>
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item">
                    <a href="/admin/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">
                    Section 1
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">
                    Subsection A
                </li>
            </ol>
        </nav>
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img class="rounded-full" src="storage/images/person.png" alt="Admin Profile" />

            </div>



            <div class="dropdown-menu w-56">
                <ul
                    class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">Admin User</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="/admin/profile/edit" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Edit Profile
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-item hover:bg-white/5" data-tw-toggle="modal"
                            data-tw-target="#change-modal">
                            <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Change Password
                        </a>
                    </li>
                    <li>
                        <a href="/admin/logout" class="dropdown-item hover:bg-white/5">
                            <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="change-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">Change Password</h2>
            </div>
            <form method="POST" enctype="multipart/form-data" id="change-password">
                <div id="input" class="p-5">
                    <div class="input">
                        <div>
                            <label for="name" class="form-label">Old Password</label>
                            <input id="old" name="old" type="text" class="form-control"
                                placeholder="Old Password" required>
                            <div class="text-danger print-oldPassword-error-msg mb-2" style="display:none">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="input mt-3">
                        <div>
                            <label for="name" class="form-label">New Password</label>
                            <input id="new" name="new" type="password" class="form-control"
                                placeholder="New Password" required>
                            <div class="text-danger print-newpassword-error-msg mb-2" style="display:none">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary shadow-md mr-2">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
    <script type="text/javascript">
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        jQuery("#change-password").submit(function(e) {
            e.preventDefault();
            jQuery.ajax({
                type: 'POST',
                url: "/admin/change-password",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(data) {
                    if (jQuery.isEmptyObject(data.error)) {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        }
                        location.href = "/admin/login"
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });

        });

        function printErrorMsg(msg) {
            jQuery(".print-oldPassword-error-msg").find("ul").html('');
            jQuery.each(msg, function(key, value) {
                if (!key) {
                    jQuery(".print-oldPassword-error-msg").css('display', 'block');
                    jQuery(".print-oldPassword-error-msg").find("ul").append('<li>' + value + '</li>');
                }
            });
        }
    </script>
@endsection
<!-- END: Top Bar -->
