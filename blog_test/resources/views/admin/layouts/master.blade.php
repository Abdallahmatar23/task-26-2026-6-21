<!DOCTYPE html>
<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->
<html lang="en">
@include('admin.layouts.head')

<body>
    @include('admin.layouts.nav')

    <div class="header-logo py-5 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
        </div>
    </div>

    @yield('content')


    @include('client.layouts.footer')


</body>

</html>
