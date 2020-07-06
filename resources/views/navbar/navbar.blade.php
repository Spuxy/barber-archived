<nav class="navbar is-primary is-transparent is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
                <div class="p-t-m has-text-black has-text-weight-bold	">
                    Barber
            </div>
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample" @click="showMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu is-transparent">
        <div class="navbar-start ">
            <a @click="pricingScroll()" class="navbar-item has-text-black">
                Pricing
            </a>
            <a @click="aboutScroll()" class="navbar-item has-text-black">
                About Us
            </a>
            <a @click="hoursScroll()" class="navbar-item has-text-black">
                Hours
            </a>
            <a href="/contact" class="navbar-item {{Request::is('contact') ? 'has-text-danger' : 'has-text-black'}}">
                Contact
            </a>
            <a href="/reservation" class="navbar-item {{Request::is('contact') ? 'has-text-danger' : 'has-text-black'}}">
                Reservation
            </a>
            @can('upload-photo')
            <a href="/photo/create" class="navbar-item {{Request::is('photo/create') ? 'has-text-danger' : 'has-text-black'}}">
                Photo upload
            </a>
            @endcan
{{--            <div class="navbar-item has-dropdown is-hoverable">--}}
{{--                <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">--}}
{{--                    Docs--}}
{{--                </a>--}}
{{--                <div class="navbar-dropdown is-boxed">--}}
{{--                    <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">--}}
{{--                        Overview--}}
{{--                    </a>--}}
{{--                    <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">--}}
{{--                        Modifiers--}}
{{--                    </a>--}}
{{--                    <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">--}}
{{--                        Columns--}}
{{--                    </a>--}}
{{--                    <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">--}}
{{--                        Layout--}}
{{--                    </a>--}}
{{--                    <a class="navbar-item" href="https://bulma.io/documentation/form/general/">--}}
{{--                        Form--}}
{{--                    </a>--}}
{{--                    <hr class="navbar-divider">--}}
{{--                    <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">--}}
{{--                        Elements--}}
{{--                    </a>--}}
{{--                    <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">--}}
{{--                        Components--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</nav>
