<footer class="section-footer">
    <div class="container">
        <div class="horizontal-divider"></div>
        <div class="footer-lower-wrapper">
            <div>Ender MERTER</div>
        </div>
        <!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  -->
        <!--  Last Published: Fri Jul 19 2024 20:18:51 GMT+0000 (Coordinated Universal Time)  -->
        <html data-wf-page="66992f84f769ff68039aea74" data-wf-site="66992f84f769ff68039aea1a">
        <head>
            @include('css/footercss')
        </head>
        <body>
        <!--İhap Hulusi -->
        @include('.footer/ihap-hulusi')
        <!--Köşe Yazıları -->
        @include('footer.koseyazilari')
        <!-- Etklinlikler -->
        @include('footer.events')

        <!-- Medya -->
      @include('footer/medya')



        <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66992f84f769ff68039aea1a"
            type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
        <script src="{{asset('js/webflow.js')}}" type="text/javascript"></script>

        @include('footer.contact')
        </body>
        </html>

    </div>
</footer>
