@extends('welcome')
@section('content')
<div id="app">
        @include('parts.svglogo')
        <Flash-Message></Flash-Message>
        <div class="bg" id="top">
        </div>
        <div v-waypoint="{ active: true, callback: onWaypoint }"></div>
        @if(session()->has('reserved_day'))
            <div class="column has-text-weight-bold has-background-success" id="session_reserve">
                <div class="column has-text-centered">
                    {{session()->get('reserved_day')}}
                </div>
            </div>
        @endif
        <button @click="vueF">
            sddsad
        </button>
        <div class="container">
            <section class="columns" id="aboutus">
                <div class="column first ">
                </div>
                <div class="column  p-t-xxl firsttext has-text-justified has-text-weight-leight is-size-5 m-l-xxl has-text-grey" id="here">
                    <h1 class="is-size-4 has-text-black-bis">
                        Kadeřnictví Praha Em Hair
                    </h1>
                    Pokud se rozhodntete navštívit kadeřnictví Em-Hair, ihned zjistíte, že se služby našeho salonu výrazně liší
                    od nabídky běžných kadeřnictví. Preferujeme osobní přístup. Naši klienti se k nám rádi vrací právě proto, že
                    se jim u nás dostane nadstandadní péče jak v oblasti kadeřnických služeb tak i kosmetického poradenství. To
                    vše v příjemné a přátelské atmosféře, díky které alespoň na chvíli zapomenete na starosti běžného dne.
                    Společně se snažíme najít cestu k tomu, abyste se cítili dobře nejenom v novém účesu, ale abyste z našeho
                    salonu odcházeli s dobrou náladou a spokojeni. I přesto, že poskytujeme profesionální a nadstardní péči,
                    jsou ceny našeho kadeřnictví velmi příznivé. V dnešní zrychlené době dokážeme informovat klienty o
                    aktuálních trendech, jsme profesionální tým, který se pravidelně proškoluje na té nejvyšší úrovni. Zajímá
                    nás váš názor, chceme slyšet vaše přání. Navštivte nás, slibujeme, že budete odcházet spokojeni!
                </div>
            </section>
            <section class="columns" id="openHours">
                <div class="column p-t-xxxxl firsttext has-text-justified has-text-weight-leight" id="here">
                    <div class="columns">
                        Pondělí až pátek
                    </div>
                    <div class="columns">
                        08:00 - 20:00
                    </div>
                    <div class="columns">
                        Sobota
                        09:00 - 19:00
                    </div>
                    <div class="columns">
                        Neděle
                        09:00 - 19:00
                    </div>
                </div>
                <div class="column first">
                </div>
            </section>
            <section class="columns" id="pricing">
                <div class="column first">
                </div>
                <div class="column p-t-xxl firsttext has-text-justified has-text-weight-leight">
                    <div class="rows is-full">
                        <div class="columns">
                            <div class="column">Ceník</div>
                            <div class="column"></div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                Pánské stříhání
                            </div>
                            <div class="column">
                                od 389 KČ
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                Dámské stříhání
                            </div>
                            <div class="column">
                                od 789 KČ
                            </div>
                        </div>
                        <v-btn
                                v-show="fab"
                                fab
                                dark
                                fixed
                                bottom
                                right
                                color="primary"
                                @click="scrollUp()"
                        >
                            <v-icon>mdi-arrow-up</v-icon>
                        </v-btn>
                        <div class="columns">
                            <div class="column">
                                Barvení/tónování
                            </div>
                            <div class="column">
                                od 999 KČ
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                Slavnostní účes
                            </div>
                            <div class="column">
                                od 999 KČ
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                Melír
                            </div>
                            <div class="column">
                                od 1099 KČ
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                Trvalá
                            </div>
                            <div class="column">
                                od 999 KČ
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                Panské barvení
                            </div>
                            <div class="column">
                                od 499 KČ
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </div>
</div>
@endsection
<script>
    import DatePicker from "../../js/components/reservation/date-picker";
    export default {
        components: {DatePicker}
    }
</script>