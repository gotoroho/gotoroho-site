@extends('layouts.default')

@section('content')
    <div class="home">
        <div class="home__intro wrapper">
            <h1>Web Dev</h1>
        </div>

        <div class="home__black">
            <div class="wrapper">
                {{--TODO: replace to some data--}}
                <div class="brands">
                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-telegram" title="telegram"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-youtube" title="youtube"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-vk" title="vk"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-stackoverflow" title="stackoverflow"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-w3c" title="w3c"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-opencart" title="opencart"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-wordpress" title="wordpress"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-brave" title="brave"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-googlechrome" title="googlechrome"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-mozillafirefox" title="mozillafirefox"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-tor" title="tor"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-duckduckgo" title="duckduckgo"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-android" title="android"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-google" title="google"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-googleplay" title="googleplay"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-ubuntu" title="ubuntu"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-linux" title="linux"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-docker" title="docker"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-mysql" title="mysql"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-apache" title="apache"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-nginx" title="nginx"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-bitbucket" title="bitbucket"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-git" title="git"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-filezilla" title="filezilla"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-powershell" title="powershell"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-github" title="github"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-notion" title="notion"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-codepen" title="codepen"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-codesandbox" title="codesandbox"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-atlassian" title="atlassian"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-cloudflare" title="cloudflare"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-dev-dot-to" title="dev-dot-to"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-css3" title="css3"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-html5" title="html5"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-javascript" title="javascript"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-php" title="php"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-sass" title="sass"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-jest" title="jest"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-node-dot-js" title="node-dot-js"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-npm" title="npm"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-webpack" title="webpack"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-laravel" title="laravel"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-redux" title="redux"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-react" title="react"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-vue-dot-js" title="vue-dot-js"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-nuxt-dot-js" title="nuxt-dot-js"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-visualstudiocode" title="visualstudiocode"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-sublimetext" title="sublimetext"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-jetbrains" title="jetbrains"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-figma" title="figma"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-gimp" title="gimp"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-inkscape" title="inkscape"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-icomoon" title="icomoon"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-fa" title="fa"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-bootstrap" title="bootstrap"></span>
                        </div>
                    </div>

                    <div class="brands__container brands-slider js-brands-slider">
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-playstation" title="playstation"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_2 js-brands-slider-item">
                            <span class="brands__icon icon-gamepad" title="gamepad"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_3 js-brands-slider-item">
                            <span class="brands__icon icon-playstation4" title="playstation4"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_4 js-brands-slider-item">
                            <span class="brands__icon icon-xbox" title="xbox"></span>
                        </div>
                        <div class="brands-slider__item brands-slider__item_1 js-brands-slider-item">
                            <span class="brands__icon icon-steam" title="steam"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <h2 class="home__title">Список проектов</h2>

            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>

        <div class="home__black">
            <div class="wrapper">
                <h2 class="home__title">lorem</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi consectetur consequuntur cumque dolore earum ratione rem suscipit. Aspernatur at blanditiis eos expedita iusto nemo quidem sint tempora temporibus veritatis?</p>
            </div>
        </div>

        <div class="wrapper">
            <h2 class="home__title">lorem</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad aliquid fugit impedit laudantium maiores officia qui quisquam rerum sequi? Architecto dolor, sunt. Accusamus aliquid exercitationem magni minima tempore totam.</p>
        </div>
    </div>
@endsection
