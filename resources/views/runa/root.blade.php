<!DOCTYPE html>
<html>

    @include('lte.htmlhead')

    <body class="hold-transition skin-yellow sidebar-mini">
        <div id="app">
            <div class="wrapper">
                @include('lte.mainheader', ['logoMini' => "<b>R</b>A", 'logoLg' => "<b>RU</b>NA"])
                @include('lte.sidebar', ['site' => 'runa'])

                <div class="content-wrapper">
                    <section class="content-header">
                        <h1>@stack('headerTitle')</h1>
                    </section>

                    <section class="content container-fluid">
                        @yield('content')
                    </section>
                </div>

                @include('lte.footer')
            </div>
        </div>

        @include('lte.scripts')

    </body>
</html>