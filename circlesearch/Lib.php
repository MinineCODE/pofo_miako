<?php

function ShowGoogleTag(){
    echo (
    "<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P2BLH8\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2BLH8');</script>
<!-- End Google Tag Manager -->"
    );
}

function ApplyGoogleAnalytics(){
  echo (
    "<script type=\"text/javascript\">
        var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-39155375-1']);
       _gaq.push(['_trackPageview']);

        (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    HOGEHOGE"
  );
}
