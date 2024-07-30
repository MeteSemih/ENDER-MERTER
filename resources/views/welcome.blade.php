<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Jul 19 2024 20:18:51 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="66992f84f769ff68039aea74" data-wf-site="66992f84f769ff68039aea1a">
<head>
    @include('.css/indexcss')

</head>
<body>

<section id="hero" class="section hero">
    <div class="container" id="welcome">
        <div id="w-node-_1c3f5317-6978-f762-5d5e-11f9b38a1988-039aea74 "
             class="w-layout-layout hero-layout wf-layout-layout">
            <div id="w-node-_1c3f5317-6978-f762-5d5e-11f9b38a1989-039aea74" class="w-layout-cell cell">
                <div class="embed-logo w-embed">
                    <h1 style="font-family: 'Arial', sans-serif">Ender MERTER</h1>
                </div>
            </div>
            <div id="w-node-_9c45ac14-2f20-bee2-1046-42e8bb04c83c-039aea74" class="w-layout-cell">
                <div style="font-size: xx-large; font-weight: bold;height: min-content">
                    <h1>
                        Geçmişi yaşatan,
                        gençlere, yol açan
                    </h1>

                </div>
            </div>
            <div id="w-node-_0e444812-5834-3be4-ce4d-3f61c340088f-039aea74" class="w-layout-cell">

                <img style="justify-content: center;align-items: center" loading="lazy"
                     src="{{asset('/images/mainPageSlider.jpg')}}" alt="Portrait of Japanese man on subway"
                     class="image hero">


            </div>


            <div id="w-node-eb9393a2-0e57-4b98-1980-bc458aa2caa3-039aea74" class="w-layout-cell cell-center">
                <div class="embed-logo full-width w-embed">


                </div>
                <a href="#hakkında" class="button dark w-inline-block">
                    <div class="u-d-inline-block">Devamı</div>
                    <img src="images/Arrow-down.svg" loading="lazy" alt="Down arrow" class="button-icon_right">
                </a>
            </div>

            <div id="w-node-_492200a9-901b-b252-ab6b-6380f192735d-039aea74" class="w-layout-cell cell-bottom">
                <div style="font-size: 1em">Bir derdiniz olsun bu hayatta. Anlatmak istediğiniz bir şey olduğunda
                    muhakkak bir yolunu bulursunuz. Derdinizi sonuçlandırmaya bakın. Hayal kurun, çabalayın, yazın
                    anlatın, aktarın.
                </div>
            </div>
        </div>
    </div>
</section>
@include('about')
@include('uyelıkler')
@include('reklamarkasi')
@include('footer.books')
@include('footer')
@include('.js/indexjs')
</body>
</html>
