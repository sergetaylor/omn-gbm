<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#000000">
  <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
  <link href="<?php echo get_template_directory_uri(); ?>/static/css/main.ltr.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
  <title><?php wp_title(''); ?></title>
  <style>
  .screen-reader-response{
	  display: none;
  }
  </style>

</head>

<body>
  <noscript>
    You need to enable JavaScript to run this app.
  </noscript>


  <!-- Start Header -->
  <div class="widget-header" uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 400">
    <nav class="uk-navbar-container" uk-navbar>

      <!-- Start Mobile Nav -->
      <div class="nav-mob uk-hidden@m">
        <div class="uk-offcanvas-content">
          <!-- toggle-->
          <nav class="uk-navbar uk-navbar-container uk-margin">
            <div class="uk-navbar-left">
              <a href="<?php echo site_url(); ?>" class="tile-brand">
                <svg width="131px" height="32px" viewBox="0 0 131 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
                  <title>gbm_logo</title>
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="01b_GBM_Home_subnav_desktop" transform="translate(-135.000000, -24.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g id="Compounds-/-Header-/-Desktop" transform="translate(-5.000000, 0.000000)">
                        <g id="Nav-menu">
                          <g id="gbm_logo" transform="translate(140.288703, 24.000000)">
                            <rect id="Rectangle-path" x="36.7755925" y="0.789600019" width="4.0181457" height="10.6904003"></rect>
                            <path d="M22.271224,29.1680007 C21.8791704,29.1680007 13.3532154,29.1680007 7.9628822,24.6976006 C7.76685541,24.6000006 3.9447365,21.5872005 4.04315323,15.9504004 C4.14156997,13.0344003 4.72965032,9.82720023 8.74779602,6.71760016 C9.6295132,5.94000014 14.2357392,2.83040007 22.2720307,3.02400007 C22.6640842,3.02400007 31.5828995,2.92640007 35.9922921,7.88320019 L35.9922921,0.788800019 L32.0725631,0.788800019 L32.0725631,1.66320004 C32.0725631,1.66320004 28.3480542,0.691200016 24.2322985,0.302400007 C23.5458014,0.204800005 21.782367,0.204800005 20.7038164,0.204800005 C18.9395753,0.204800005 15.9991736,0.399200009 12.9611618,1.27360003 C7.08116502,3.02320007 0.613087881,7.00720017 0.025007532,15.7552004 C0.025007532,15.7552004 -1.64081678,31.4024007 22.1744206,31.7912008 C22.1744206,31.7912008 29.1321614,31.8880008 33.6399707,30.0408007 L33.6399707,31.0136007 L37.3636729,31.0136007 L37.3636729,24.5008006 C35.6978485,25.8616006 30.7979857,29.0696007 22.5656675,29.0696007 C22.4680574,29.1680007 22.3696407,29.1680007 22.271224,29.1680007"
                              id="Shape"></path>
                            <polygon id="Shape" points="22.4680574 16.9224004 38.1485867 16.9224004 38.1485867 31.1120007 42.2643424 31.1120007 42.2643424 14.2984003 22.4680574 14.2984003"></polygon>
                            <path d="M22.4680574,20.4208005 L33.6407774,20.4208005 L33.6407774,22.3648005 C33.6407774,22.3648005 33.6407774,22.3648005 33.6407774,22.4624005 C30.210712,25.7664006 24.9187956,25.9616006 21.8799771,25.7664006 C21.8799771,25.7664006 21.8799771,25.7664006 21.782367,25.7664006 C19.0387988,25.5720006 8.84540607,24.2120006 8.84540607,16.0480004 C8.84540607,16.0480004 8.55176924,10.6056003 14.7262096,7.88400019 C16.6864774,7.00960017 19.3316289,6.42640015 22.6640842,6.42640015 C22.6640842,6.42640015 29.2305781,6.32960015 32.1701731,9.63360023 L32.1701731,11.4800003 L36.0899021,11.4800003 L36.0899021,9.14720022 C32.2677832,3.70480009 22.4672507,3.80160009 22.3696407,3.80160009 C14.9214296,3.70400009 10.8056739,6.32880015 9.6295132,7.10560017 L9.23745963,7.30000017 C5.21931393,10.3128002 4.82726037,13.3256003 4.82726037,15.9496004 C4.72884363,21.1976005 8.4533525,24.0160006 8.4533525,24.1128006 C13.6476589,28.3896007 22.1744206,28.4872007 22.271224,28.3896007 C22.3696407,28.3896007 22.4672507,28.3896007 22.5656675,28.3896007 C31.6797028,28.3896007 36.5795657,24.3072006 37.3636729,23.6272006 L37.3636729,17.7960004 L22.4680574,17.7960004 L22.4680574,20.4208005 Z"
                              id="Shape"></path>
                            <path d="M81.2696387,14.7848004 C83.915597,12.2576003 83.7195702,9.63360023 83.7195702,9.63360023 C83.9164037,4.0936001 79.1133441,1.95520005 74.9975884,1.27520003 C72.645267,0.886400021 69.9016987,0.886400021 69.9016987,0.886400021 L47.5570656,0.886400021 L47.5570656,3.41280008 L67.4509606,3.41280008 C67.5493773,3.41280008 70.7826092,3.41280008 72.0563799,3.51040008 C73.4293741,3.60800009 74.0166478,3.60800009 74.8991716,3.89920009 C78.0356002,4.58000011 79.7014245,6.42640015 79.7014245,9.14800022 C79.7014245,9.14800022 79.8974513,11.1888003 78.329237,12.9384003 C77.4475198,13.9104003 76.1737491,14.5904003 74.6055348,14.9792004 C77.7419633,15.6600004 81.8577191,17.3112004 81.9561358,21.4912005 C81.9561358,21.5880005 82.1513559,23.6288006 80.4863383,25.5728006 C78.7212906,27.5176007 75.6840855,28.5864007 71.469913,28.5864007 L47.6538689,28.5864007 L47.6538689,31.1128007 L71.5667163,31.1128007 C86.3655284,31.1128007 85.9734748,21.7832005 85.9734748,21.7832005 C85.9734748,16.5336004 81.2696387,14.7848004 81.2696387,14.7848004"
                              id="Shape"></path>
                            <path d="M70.7826092,17.8944004 C70.7826092,17.8944004 73.1349306,17.7968004 74.8007549,18.4776004 C75.8784989,18.9632004 76.7610227,19.7408005 76.9570495,20.9072005 C76.9570495,21.1984005 77.0546596,21.3928005 76.9570495,21.7824005 C76.8586328,22.7544005 76.0745257,25.0864006 70.6849992,25.0864006 L59.1202257,25.0864006 L59.1202257,17.8952004 L70.7826092,17.8952004 L70.7826092,17.8944004 Z M55.0052766,27.7104007 L71.3714963,27.7104007 C75.389642,27.7104007 78.2308203,26.7392006 79.7990345,24.9896006 C81.2696387,23.3376006 81.073612,21.4912005 81.073612,21.4912005 C80.8775852,15.6600004 71.2730795,15.3680004 70.9794427,15.3680004 L55.0052766,15.3680004 L55.0052766,27.7104007 Z"
                              id="Shape"></path>
                            <polygon id="Shape" points="54.2203628 4.1912001 47.5570656 4.1912001 47.5570656 6.81520016 50.104607 6.81520016 50.104607 25.0856006 47.5570656 25.0856006 47.5570656 27.7104007 54.2203628 27.7104007"></polygon>
                            <path d="M59.2186424,11.8688003 L59.2186424,6.71840016 L69.9016987,6.71840016 C69.9016987,6.71840016 71.7635498,6.71840016 73.0373206,7.10720017 C73.9190377,7.49600018 74.8015616,8.17600019 74.8015616,9.24560022 C74.8015616,9.24560022 75.2920319,11.8696003 70.6858059,11.8696003 L59.2186424,11.8696003 L59.2186424,11.8688003 Z M77.6435466,12.3544003 C79.0157341,10.8968003 78.8197073,9.14720022 78.8197073,9.14720022 C78.8197073,6.23120015 76.5658027,5.06480012 74.6055348,4.67680011 C73.7238176,4.48240011 73.2333473,4.3848001 71.8619666,4.3848001 C70.6858059,4.2880001 67.3533505,4.2880001 67.3533505,4.2880001 L55.0052766,4.2880001 L55.0052766,14.5896003 L70.9794427,14.5896003 C74.1150645,14.4928003 76.3689692,13.8128003 77.6435466,12.3544003 Z"
                              id="Shape"></path>
                            <polygon id="Shape" points="119.490021 25.0856006 116.746453 25.0856006 116.746453 27.7104007 122.82167 27.7104007 122.82167 5.16320012 109.101408 25.3784006 95.5771738 5.16320012 95.5771738 27.7104007 101.555587 27.7104007 101.555587 25.0856006 98.9096291 25.0856006 98.9096291 15.8536004 105.96498 26.4472006 109.101408 31.0160007 112.335447 26.4472006 119.490021 15.8536004"></polygon>
                            <rect id="Rectangle-path" x="116.746453" y="28.4880007" width="13.1313744" height="2.62320006"></rect>
                            <polygon id="Shape" points="123.605777 27.7104007 129.877827 27.7104007 129.877827 25.0856006 126.938232 25.0856006 126.938232 6.81520016 129.877827 6.81520016 129.877827 4.1912001 123.605777 4.1912001"></polygon>
                            <polygon id="Shape" points="88.6194331 31.1120007 101.555587 31.0160007 101.555587 28.4880007 88.6194331 28.4880007"></polygon>
                            <polygon id="Shape" points="120.861402 0.789600019 109.101408 18.6720004 97.2438048 0.789600019 88.6194331 0.789600019 88.6194331 3.41360008 95.3819537 3.41360008 95.4795638 3.60800009 109.101408 23.9200006 123.018503 3.41360008 123.116113 3.41360008 123.116113 3.41360008 129.780217 3.41360008 129.780217 0.789600019"></polygon>
                            <polygon id="Shape" points="94.7938734 4.1912001 88.6194331 4.1912001 88.6194331 6.81520016 91.4614181 6.81520016 91.4614181 25.0856006 88.6194331 25.0856006 88.6194331 27.7104007 94.7938734 27.7104007"></polygon>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>

            </div>
            <div class="uk-navbar-right">
              <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .mob-nav-overlay; animation: uk-animation-fade" href="#"></a>
              <a class="uk-navbar-toggle" uk-toggle="target: .mob-sidebar" uk-icon="menu"></a>
            </div>



            <!-- Search Form for mobile -->
            <div class="mob-nav-overlay nav-overlay uk-navbar-left uk-flex-1" hidden>
              <div class="uk-navbar-item uk-width-expand">
                <form action="/search" method="get" class="uk-search uk-search-navbar uk-width-1-1">
                  <input class="uk-search-input" type="search" name="searchtext" placeholder="Search..." autofocus>
                </form>
              </div>
              <a class="uk-navbar-toggle" uk-icon="search" uk-toggle="target: .mob-nav-overlay; animation: uk-animation-fade" href="#"></a>
            </div>
            <!-- END Search Form for mobile -->

          </nav>

          <!-- drawer -->
          <div class="mob-sidebar" id="offcanvas-slide" uk-offcanvas="">
            <div class="uk-offcanvas-bar">

              <div class="uk-grid uk-child-width-1-1" data-uk-grid>
                <div>
                  <a href="<?php echo site_url(); ?>" class="tile-brand">
                    <svg width="131px" height="32px" viewBox="0 0 131 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
                      <title>gbm_logo</title>
                      <desc>Created with Sketch.</desc>
                      <defs></defs>
                      <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="01b_GBM_Home_subnav_desktop" transform="translate(-135.000000, -24.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g id="Compounds-/-Header-/-Desktop" transform="translate(-5.000000, 0.000000)">
                            <g id="Nav-menu">
                              <g id="gbm_logo" transform="translate(140.288703, 24.000000)">
                                <rect id="Rectangle-path" x="36.7755925" y="0.789600019" width="4.0181457" height="10.6904003"></rect>
                                <path d="M22.271224,29.1680007 C21.8791704,29.1680007 13.3532154,29.1680007 7.9628822,24.6976006 C7.76685541,24.6000006 3.9447365,21.5872005 4.04315323,15.9504004 C4.14156997,13.0344003 4.72965032,9.82720023 8.74779602,6.71760016 C9.6295132,5.94000014 14.2357392,2.83040007 22.2720307,3.02400007 C22.6640842,3.02400007 31.5828995,2.92640007 35.9922921,7.88320019 L35.9922921,0.788800019 L32.0725631,0.788800019 L32.0725631,1.66320004 C32.0725631,1.66320004 28.3480542,0.691200016 24.2322985,0.302400007 C23.5458014,0.204800005 21.782367,0.204800005 20.7038164,0.204800005 C18.9395753,0.204800005 15.9991736,0.399200009 12.9611618,1.27360003 C7.08116502,3.02320007 0.613087881,7.00720017 0.025007532,15.7552004 C0.025007532,15.7552004 -1.64081678,31.4024007 22.1744206,31.7912008 C22.1744206,31.7912008 29.1321614,31.8880008 33.6399707,30.0408007 L33.6399707,31.0136007 L37.3636729,31.0136007 L37.3636729,24.5008006 C35.6978485,25.8616006 30.7979857,29.0696007 22.5656675,29.0696007 C22.4680574,29.1680007 22.3696407,29.1680007 22.271224,29.1680007"
                                  id="Shape"></path>
                                <polygon id="Shape" points="22.4680574 16.9224004 38.1485867 16.9224004 38.1485867 31.1120007 42.2643424 31.1120007 42.2643424 14.2984003 22.4680574 14.2984003"></polygon>
                                <path d="M22.4680574,20.4208005 L33.6407774,20.4208005 L33.6407774,22.3648005 C33.6407774,22.3648005 33.6407774,22.3648005 33.6407774,22.4624005 C30.210712,25.7664006 24.9187956,25.9616006 21.8799771,25.7664006 C21.8799771,25.7664006 21.8799771,25.7664006 21.782367,25.7664006 C19.0387988,25.5720006 8.84540607,24.2120006 8.84540607,16.0480004 C8.84540607,16.0480004 8.55176924,10.6056003 14.7262096,7.88400019 C16.6864774,7.00960017 19.3316289,6.42640015 22.6640842,6.42640015 C22.6640842,6.42640015 29.2305781,6.32960015 32.1701731,9.63360023 L32.1701731,11.4800003 L36.0899021,11.4800003 L36.0899021,9.14720022 C32.2677832,3.70480009 22.4672507,3.80160009 22.3696407,3.80160009 C14.9214296,3.70400009 10.8056739,6.32880015 9.6295132,7.10560017 L9.23745963,7.30000017 C5.21931393,10.3128002 4.82726037,13.3256003 4.82726037,15.9496004 C4.72884363,21.1976005 8.4533525,24.0160006 8.4533525,24.1128006 C13.6476589,28.3896007 22.1744206,28.4872007 22.271224,28.3896007 C22.3696407,28.3896007 22.4672507,28.3896007 22.5656675,28.3896007 C31.6797028,28.3896007 36.5795657,24.3072006 37.3636729,23.6272006 L37.3636729,17.7960004 L22.4680574,17.7960004 L22.4680574,20.4208005 Z"
                                  id="Shape"></path>
                                <path d="M81.2696387,14.7848004 C83.915597,12.2576003 83.7195702,9.63360023 83.7195702,9.63360023 C83.9164037,4.0936001 79.1133441,1.95520005 74.9975884,1.27520003 C72.645267,0.886400021 69.9016987,0.886400021 69.9016987,0.886400021 L47.5570656,0.886400021 L47.5570656,3.41280008 L67.4509606,3.41280008 C67.5493773,3.41280008 70.7826092,3.41280008 72.0563799,3.51040008 C73.4293741,3.60800009 74.0166478,3.60800009 74.8991716,3.89920009 C78.0356002,4.58000011 79.7014245,6.42640015 79.7014245,9.14800022 C79.7014245,9.14800022 79.8974513,11.1888003 78.329237,12.9384003 C77.4475198,13.9104003 76.1737491,14.5904003 74.6055348,14.9792004 C77.7419633,15.6600004 81.8577191,17.3112004 81.9561358,21.4912005 C81.9561358,21.5880005 82.1513559,23.6288006 80.4863383,25.5728006 C78.7212906,27.5176007 75.6840855,28.5864007 71.469913,28.5864007 L47.6538689,28.5864007 L47.6538689,31.1128007 L71.5667163,31.1128007 C86.3655284,31.1128007 85.9734748,21.7832005 85.9734748,21.7832005 C85.9734748,16.5336004 81.2696387,14.7848004 81.2696387,14.7848004"
                                  id="Shape"></path>
                                <path d="M70.7826092,17.8944004 C70.7826092,17.8944004 73.1349306,17.7968004 74.8007549,18.4776004 C75.8784989,18.9632004 76.7610227,19.7408005 76.9570495,20.9072005 C76.9570495,21.1984005 77.0546596,21.3928005 76.9570495,21.7824005 C76.8586328,22.7544005 76.0745257,25.0864006 70.6849992,25.0864006 L59.1202257,25.0864006 L59.1202257,17.8952004 L70.7826092,17.8952004 L70.7826092,17.8944004 Z M55.0052766,27.7104007 L71.3714963,27.7104007 C75.389642,27.7104007 78.2308203,26.7392006 79.7990345,24.9896006 C81.2696387,23.3376006 81.073612,21.4912005 81.073612,21.4912005 C80.8775852,15.6600004 71.2730795,15.3680004 70.9794427,15.3680004 L55.0052766,15.3680004 L55.0052766,27.7104007 Z"
                                  id="Shape"></path>
                                <polygon id="Shape" points="54.2203628 4.1912001 47.5570656 4.1912001 47.5570656 6.81520016 50.104607 6.81520016 50.104607 25.0856006 47.5570656 25.0856006 47.5570656 27.7104007 54.2203628 27.7104007"></polygon>
                                <path d="M59.2186424,11.8688003 L59.2186424,6.71840016 L69.9016987,6.71840016 C69.9016987,6.71840016 71.7635498,6.71840016 73.0373206,7.10720017 C73.9190377,7.49600018 74.8015616,8.17600019 74.8015616,9.24560022 C74.8015616,9.24560022 75.2920319,11.8696003 70.6858059,11.8696003 L59.2186424,11.8696003 L59.2186424,11.8688003 Z M77.6435466,12.3544003 C79.0157341,10.8968003 78.8197073,9.14720022 78.8197073,9.14720022 C78.8197073,6.23120015 76.5658027,5.06480012 74.6055348,4.67680011 C73.7238176,4.48240011 73.2333473,4.3848001 71.8619666,4.3848001 C70.6858059,4.2880001 67.3533505,4.2880001 67.3533505,4.2880001 L55.0052766,4.2880001 L55.0052766,14.5896003 L70.9794427,14.5896003 C74.1150645,14.4928003 76.3689692,13.8128003 77.6435466,12.3544003 Z"
                                  id="Shape"></path>
                                <polygon id="Shape" points="119.490021 25.0856006 116.746453 25.0856006 116.746453 27.7104007 122.82167 27.7104007 122.82167 5.16320012 109.101408 25.3784006 95.5771738 5.16320012 95.5771738 27.7104007 101.555587 27.7104007 101.555587 25.0856006 98.9096291 25.0856006 98.9096291 15.8536004 105.96498 26.4472006 109.101408 31.0160007 112.335447 26.4472006 119.490021 15.8536004"></polygon>
                                <rect id="Rectangle-path" x="116.746453" y="28.4880007" width="13.1313744" height="2.62320006"></rect>
                                <polygon id="Shape" points="123.605777 27.7104007 129.877827 27.7104007 129.877827 25.0856006 126.938232 25.0856006 126.938232 6.81520016 129.877827 6.81520016 129.877827 4.1912001 123.605777 4.1912001"></polygon>
                                <polygon id="Shape" points="88.6194331 31.1120007 101.555587 31.0160007 101.555587 28.4880007 88.6194331 28.4880007"></polygon>
                                <polygon id="Shape" points="120.861402 0.789600019 109.101408 18.6720004 97.2438048 0.789600019 88.6194331 0.789600019 88.6194331 3.41360008 95.3819537 3.41360008 95.4795638 3.60800009 109.101408 23.9200006 123.018503 3.41360008 123.116113 3.41360008 123.116113 3.41360008 129.780217 3.41360008 129.780217 0.789600019"></polygon>
                                <polygon id="Shape" points="94.7938734 4.1912001 88.6194331 4.1912001 88.6194331 6.81520016 91.4614181 6.81520016 91.4614181 25.0856006 88.6194331 25.0856006 88.6194331 27.7104007 94.7938734 27.7104007"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </a>
                </div>

                <div>
	  				<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'uk-nav uk-nav-parent-icon',
  							'items_wrap'     => '<ul class="%2$s" uk-nav>%3$s</ul>',
   							'container'      => '',
		 					'walker'         => new themeslug_walker_nav_menu_mobile
						) );
					?>
                </div>

                <div>
  				<?php
					wp_nav_menu( array(

						'theme_location' => 'social',
						'menu_class'     => 'uk-iconnav uk-flex-center uk-margin-top',
						'container'     => '',
	 					'walker'        => new themeslug_walker_nav_menu

					) );
				?>
                </div>
              </div>

            </div>
          </div>


        </div>
      </div>
      <!-- END Mobile Nav -->

      <!-- Start Desktop Nav -->
      <div class="nav-desktop uk-visible@m">
        <div class="uk-container">
          <div class="uk-grid uk-flex uk-flex-center uk-flex-between uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
              <a href="<?php echo site_url(); ?>" class="tile-brand">
                <svg width="131px" height="32px" viewBox="0 0 131 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
                  <title>gbm_logo</title>
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="01b_GBM_Home_subnav_desktop" transform="translate(-135.000000, -24.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g id="Compounds-/-Header-/-Desktop" transform="translate(-5.000000, 0.000000)">
                        <g id="Nav-menu">
                          <g id="gbm_logo" transform="translate(140.288703, 24.000000)">
                            <rect id="Rectangle-path" x="36.7755925" y="0.789600019" width="4.0181457" height="10.6904003"></rect>
                            <path d="M22.271224,29.1680007 C21.8791704,29.1680007 13.3532154,29.1680007 7.9628822,24.6976006 C7.76685541,24.6000006 3.9447365,21.5872005 4.04315323,15.9504004 C4.14156997,13.0344003 4.72965032,9.82720023 8.74779602,6.71760016 C9.6295132,5.94000014 14.2357392,2.83040007 22.2720307,3.02400007 C22.6640842,3.02400007 31.5828995,2.92640007 35.9922921,7.88320019 L35.9922921,0.788800019 L32.0725631,0.788800019 L32.0725631,1.66320004 C32.0725631,1.66320004 28.3480542,0.691200016 24.2322985,0.302400007 C23.5458014,0.204800005 21.782367,0.204800005 20.7038164,0.204800005 C18.9395753,0.204800005 15.9991736,0.399200009 12.9611618,1.27360003 C7.08116502,3.02320007 0.613087881,7.00720017 0.025007532,15.7552004 C0.025007532,15.7552004 -1.64081678,31.4024007 22.1744206,31.7912008 C22.1744206,31.7912008 29.1321614,31.8880008 33.6399707,30.0408007 L33.6399707,31.0136007 L37.3636729,31.0136007 L37.3636729,24.5008006 C35.6978485,25.8616006 30.7979857,29.0696007 22.5656675,29.0696007 C22.4680574,29.1680007 22.3696407,29.1680007 22.271224,29.1680007"
                              id="Shape"></path>
                            <polygon id="Shape" points="22.4680574 16.9224004 38.1485867 16.9224004 38.1485867 31.1120007 42.2643424 31.1120007 42.2643424 14.2984003 22.4680574 14.2984003"></polygon>
                            <path d="M22.4680574,20.4208005 L33.6407774,20.4208005 L33.6407774,22.3648005 C33.6407774,22.3648005 33.6407774,22.3648005 33.6407774,22.4624005 C30.210712,25.7664006 24.9187956,25.9616006 21.8799771,25.7664006 C21.8799771,25.7664006 21.8799771,25.7664006 21.782367,25.7664006 C19.0387988,25.5720006 8.84540607,24.2120006 8.84540607,16.0480004 C8.84540607,16.0480004 8.55176924,10.6056003 14.7262096,7.88400019 C16.6864774,7.00960017 19.3316289,6.42640015 22.6640842,6.42640015 C22.6640842,6.42640015 29.2305781,6.32960015 32.1701731,9.63360023 L32.1701731,11.4800003 L36.0899021,11.4800003 L36.0899021,9.14720022 C32.2677832,3.70480009 22.4672507,3.80160009 22.3696407,3.80160009 C14.9214296,3.70400009 10.8056739,6.32880015 9.6295132,7.10560017 L9.23745963,7.30000017 C5.21931393,10.3128002 4.82726037,13.3256003 4.82726037,15.9496004 C4.72884363,21.1976005 8.4533525,24.0160006 8.4533525,24.1128006 C13.6476589,28.3896007 22.1744206,28.4872007 22.271224,28.3896007 C22.3696407,28.3896007 22.4672507,28.3896007 22.5656675,28.3896007 C31.6797028,28.3896007 36.5795657,24.3072006 37.3636729,23.6272006 L37.3636729,17.7960004 L22.4680574,17.7960004 L22.4680574,20.4208005 Z"
                              id="Shape"></path>
                            <path d="M81.2696387,14.7848004 C83.915597,12.2576003 83.7195702,9.63360023 83.7195702,9.63360023 C83.9164037,4.0936001 79.1133441,1.95520005 74.9975884,1.27520003 C72.645267,0.886400021 69.9016987,0.886400021 69.9016987,0.886400021 L47.5570656,0.886400021 L47.5570656,3.41280008 L67.4509606,3.41280008 C67.5493773,3.41280008 70.7826092,3.41280008 72.0563799,3.51040008 C73.4293741,3.60800009 74.0166478,3.60800009 74.8991716,3.89920009 C78.0356002,4.58000011 79.7014245,6.42640015 79.7014245,9.14800022 C79.7014245,9.14800022 79.8974513,11.1888003 78.329237,12.9384003 C77.4475198,13.9104003 76.1737491,14.5904003 74.6055348,14.9792004 C77.7419633,15.6600004 81.8577191,17.3112004 81.9561358,21.4912005 C81.9561358,21.5880005 82.1513559,23.6288006 80.4863383,25.5728006 C78.7212906,27.5176007 75.6840855,28.5864007 71.469913,28.5864007 L47.6538689,28.5864007 L47.6538689,31.1128007 L71.5667163,31.1128007 C86.3655284,31.1128007 85.9734748,21.7832005 85.9734748,21.7832005 C85.9734748,16.5336004 81.2696387,14.7848004 81.2696387,14.7848004"
                              id="Shape"></path>
                            <path d="M70.7826092,17.8944004 C70.7826092,17.8944004 73.1349306,17.7968004 74.8007549,18.4776004 C75.8784989,18.9632004 76.7610227,19.7408005 76.9570495,20.9072005 C76.9570495,21.1984005 77.0546596,21.3928005 76.9570495,21.7824005 C76.8586328,22.7544005 76.0745257,25.0864006 70.6849992,25.0864006 L59.1202257,25.0864006 L59.1202257,17.8952004 L70.7826092,17.8952004 L70.7826092,17.8944004 Z M55.0052766,27.7104007 L71.3714963,27.7104007 C75.389642,27.7104007 78.2308203,26.7392006 79.7990345,24.9896006 C81.2696387,23.3376006 81.073612,21.4912005 81.073612,21.4912005 C80.8775852,15.6600004 71.2730795,15.3680004 70.9794427,15.3680004 L55.0052766,15.3680004 L55.0052766,27.7104007 Z"
                              id="Shape"></path>
                            <polygon id="Shape" points="54.2203628 4.1912001 47.5570656 4.1912001 47.5570656 6.81520016 50.104607 6.81520016 50.104607 25.0856006 47.5570656 25.0856006 47.5570656 27.7104007 54.2203628 27.7104007"></polygon>
                            <path d="M59.2186424,11.8688003 L59.2186424,6.71840016 L69.9016987,6.71840016 C69.9016987,6.71840016 71.7635498,6.71840016 73.0373206,7.10720017 C73.9190377,7.49600018 74.8015616,8.17600019 74.8015616,9.24560022 C74.8015616,9.24560022 75.2920319,11.8696003 70.6858059,11.8696003 L59.2186424,11.8696003 L59.2186424,11.8688003 Z M77.6435466,12.3544003 C79.0157341,10.8968003 78.8197073,9.14720022 78.8197073,9.14720022 C78.8197073,6.23120015 76.5658027,5.06480012 74.6055348,4.67680011 C73.7238176,4.48240011 73.2333473,4.3848001 71.8619666,4.3848001 C70.6858059,4.2880001 67.3533505,4.2880001 67.3533505,4.2880001 L55.0052766,4.2880001 L55.0052766,14.5896003 L70.9794427,14.5896003 C74.1150645,14.4928003 76.3689692,13.8128003 77.6435466,12.3544003 Z"
                              id="Shape"></path>
                            <polygon id="Shape" points="119.490021 25.0856006 116.746453 25.0856006 116.746453 27.7104007 122.82167 27.7104007 122.82167 5.16320012 109.101408 25.3784006 95.5771738 5.16320012 95.5771738 27.7104007 101.555587 27.7104007 101.555587 25.0856006 98.9096291 25.0856006 98.9096291 15.8536004 105.96498 26.4472006 109.101408 31.0160007 112.335447 26.4472006 119.490021 15.8536004"></polygon>
                            <rect id="Rectangle-path" x="116.746453" y="28.4880007" width="13.1313744" height="2.62320006"></rect>
                            <polygon id="Shape" points="123.605777 27.7104007 129.877827 27.7104007 129.877827 25.0856006 126.938232 25.0856006 126.938232 6.81520016 129.877827 6.81520016 129.877827 4.1912001 123.605777 4.1912001"></polygon>
                            <polygon id="Shape" points="88.6194331 31.1120007 101.555587 31.0160007 101.555587 28.4880007 88.6194331 28.4880007"></polygon>
                            <polygon id="Shape" points="120.861402 0.789600019 109.101408 18.6720004 97.2438048 0.789600019 88.6194331 0.789600019 88.6194331 3.41360008 95.3819537 3.41360008 95.4795638 3.60800009 109.101408 23.9200006 123.018503 3.41360008 123.116113 3.41360008 123.116113 3.41360008 129.780217 3.41360008 129.780217 0.789600019"></polygon>
                            <polygon id="Shape" points="94.7938734 4.1912001 88.6194331 4.1912001 88.6194331 6.81520016 91.4614181 6.81520016 91.4614181 25.0856006 88.6194331 25.0856006 88.6194331 27.7104007 94.7938734 27.7104007"></polygon>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </div>

            <div class="uk-width-expand">
              <div class="uk-grid-collapse uk-child-width-extend" uk-grid>
                <div class="navbar-main">
                  <div class="uk-flex uk-flex-right">
	  				<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'uk-navbar-nav',
							'container'     => '',
		 					'walker'        => new themeslug_walker_nav_menu
						) );
					?>
                    <ul class="uk-navbar-nav">
                      <li class="search-button">
                        <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .desktop-nav-overlay; animation: uk-animation-fade" href="#"></a>

                      </li>
                    </ul>
                  </div>

                  <!-- Search Form for Desktop -->
                  <div class="desktop-nav-overlay uk-navbar-left" hidden>
                    <div class="uk-navbar-item uk-width-expand">
                      <form action="/search" method="get" class="uk-search uk-search-navbar uk-width-1-1">
                        <input name="searchtext" class="uk-search-input" type="search" placeholder="Search..." autofocus>
                      </form>
                    </div>
                    

                  </div>
                  <!-- End Search Form for mobile -->

                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
      <!-- End Desktio Nav-->
    </nav>


  </div>
  <!-- END Header -->
