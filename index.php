<!DOCTYPE html>
<html>
  <head>
    <title>Haecksen Events</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="web haecksen">
    <meta name="keywords" content="haecksen">
    <meta name="description" content="haecksen events">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@idotj/mastodon-embed-timeline@4.4.2/dist/mastodon-timeline.min.css" integrity="sha256-1UGgxsonaMCfOEnVOL89aMKSo3GEAmaRP0ISbsWa6lU=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@idotj/mastodon-embed-timeline@4.4.2/dist/mastodon-timeline.umd.js" integrity="sha256-E6WPG6iq+qQIzvu3HPJJxoAeRdum5siq13x4ITjyxu8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/haecksen-default.css">
    <script type="text/javascript">
      window.addEventListener("load", () => {
        const myTimeline = new MastodonTimeline.Init({
          instanceUrl: "https://chaos.social",
          timelineType: "profile",
          userId: "125218",
          profileName: "@haecksen",
          maxNbPostShow: "4",
        });
      });
    </script>

  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="search" xmlns="http://www.w3.org/2000/symbolsvg" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
          d="M11.5 2.75a8.75 8.75 0 1 0 0 17.5a8.75 8.75 0 0 0 0-17.5M1.25 11.5c0-5.66 4.59-10.25 10.25-10.25S21.75 5.84 21.75 11.5c0 2.56-.939 4.902-2.491 6.698l3.271 3.272a.75.75 0 1 1-1.06 1.06l-3.272-3.271A10.21 10.21 0 0 1 11.5 21.75c-5.66 0-10.25-4.59-10.25-10.25"
          clip-rule="evenodd" />
      </symbol>
      <symbol id="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
          d="M12 1.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5M8.75 6a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0M12 12.25c-2.313 0-4.445.526-6.024 1.414C4.42 14.54 3.25 15.866 3.25 17.5v.102c-.001 1.162-.002 2.62 1.277 3.662c.629.512 1.51.877 2.7 1.117c1.192.242 2.747.369 4.773.369s3.58-.127 4.774-.369c1.19-.24 2.07-.605 2.7-1.117c1.279-1.042 1.277-2.5 1.276-3.662V17.5c0-1.634-1.17-2.96-2.725-3.836c-1.58-.888-3.711-1.414-6.025-1.414M4.75 17.5c0-.851.622-1.775 1.961-2.528c1.316-.74 3.184-1.222 5.29-1.222c2.104 0 3.972.482 5.288 1.222c1.34.753 1.961 1.677 1.961 2.528c0 1.308-.04 2.044-.724 2.6c-.37.302-.99.597-2.05.811c-1.057.214-2.502.339-4.476.339c-1.974 0-3.42-.125-4.476-.339c-1.06-.214-1.68-.509-2.05-.81c-.684-.557-.724-1.293-.724-2.601"
          clip-rule="evenodd" />
      </symbol>
      <symbol id="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
          d="M5.624 4.424C3.965 5.182 2.75 6.986 2.75 9.137c0 2.197.9 3.891 2.188 5.343c1.063 1.196 2.349 2.188 3.603 3.154c.298.23.594.459.885.688c.526.415.995.778 1.448 1.043c.452.264.816.385 1.126.385c.31 0 .674-.12 1.126-.385c.453-.265.922-.628 1.448-1.043c.29-.23.587-.458.885-.687c1.254-.968 2.54-1.959 3.603-3.155c1.289-1.452 2.188-3.146 2.188-5.343c0-2.15-1.215-3.955-2.874-4.713c-1.612-.737-3.778-.542-5.836 1.597a.75.75 0 0 1-1.08 0C9.402 3.882 7.236 3.687 5.624 4.424M12 4.46C9.688 2.39 7.099 2.1 5 3.059C2.786 4.074 1.25 6.426 1.25 9.138c0 2.665 1.11 4.699 2.567 6.339c1.166 1.313 2.593 2.412 3.854 3.382c.286.22.563.434.826.642c.513.404 1.063.834 1.62 1.16c.557.325 1.193.59 1.883.59s1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16a78.6 78.6 0 0 1 .826-.642c1.26-.97 2.688-2.07 3.854-3.382c1.457-1.64 2.567-3.674 2.567-6.339c0-2.712-1.535-5.064-3.75-6.077c-2.099-.96-4.688-.67-7 1.399"
          clip-rule="evenodd" />
      </symbol>
      <symbol id="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
          d="M2.249 2.292a.75.75 0 1 0-.498 1.416l.262.091c.667.235 1.106.39 1.429.549c.303.149.437.27.525.398c.09.132.16.314.2.677c.04.38.041.875.041 1.615V9.76c0 1.453.014 2.5.151 3.3c.146.854.438 1.466.985 2.042c.594.627 1.346.9 2.243 1.026c.858.122 1.948.122 3.293.122h5.406c.742 0 1.366 0 1.87-.062c.537-.065 1.025-.209 1.452-.556c.426-.348.665-.797.837-1.309c.163-.482.289-1.093.439-1.82l.508-2.469l.002-.005l.01-.052c.165-.825.303-1.519.338-2.077c.036-.586-.031-1.164-.413-1.66c-.235-.306-.565-.479-.866-.584a4.617 4.617 0 0 0-1.002-.21c-.687-.076-1.522-.076-2.34-.076H5.667a5.932 5.932 0 0 0-.01-.108c-.054-.497-.17-.95-.453-1.362c-.284-.416-.662-.682-1.102-.899c-.412-.202-.936-.386-1.553-.603zm3.46 4.578h11.38c.856 0 1.61.001 2.205.067c.296.034.517.08.672.134a.56.56 0 0 1 .176.086c.062.082.128.23.102.651c-.027.444-.143 1.036-.321 1.926v.002l-.5 2.42c-.16.783-.27 1.303-.399 1.688c-.123.366-.239.523-.364.625c-.125.102-.303.184-.685.23c-.404.05-.935.051-1.734.051h-5.303c-1.417 0-2.4-.002-3.14-.107c-.716-.101-1.093-.285-1.366-.573c-.32-.338-.493-.668-.595-1.263c-.11-.65-.129-1.558-.129-3.047zM7.5 21.75a2.25 2.25 0 1 1 0-4.5a2.25 2.25 0 0 1 0 4.5m-.75-2.25a.75.75 0 1 0 1.5 0a.75.75 0 0 0-1.5 0m9.75 2.25a2.25 2.25 0 1 1 0-4.5a2.25 2.25 0 0 1 0 4.5m-.75-2.25a.75.75 0 1 0 1.5 0a.75.75 0 0 0-1.5 0"
          clip-rule="evenodd" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="alt-arrow-right-outline" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
          d="M8.512 4.43a.75.75 0 0 1 1.057.082l6 7a.75.75 0 0 1 0 .976l-6 7a.75.75 0 0 1-1.138-.976L14.012 12L8.431 5.488a.75.75 0 0 1 .08-1.057"
          clip-rule="evenodd" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="alt-arrow-left-outline" viewBox="0 0 24 24">
        <path fill="currentColor" fill-rule="evenodd"
          d="M15.488 4.43a.75.75 0 0 1 .081 1.058L9.988 12l5.581 6.512a.75.75 0 1 1-1.138.976l-6-7a.75.75 0 0 1 0-.976l6-7a.75.75 0 0 1 1.057-.081"
          clip-rule="evenodd" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart-outline" viewBox="0 0 16 16">
        <path
          d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="quality" viewBox="0 0 16 16">
        <path
          d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="price-tag" viewBox="0 0 16 16">
        <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
        <path
          d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shield-plus" viewBox="0 0 16 16">
        <path
          d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
        <path
          d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M9.153 5.408C10.42 3.136 11.053 2 12 2c.947 0 1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182c.28.213.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506c-.766.582-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452c-.347 0-.674.15-1.328.452l-.596.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882c.293-.941 1.523-1.22 3.983-1.776l.636-.144c.699-.158 1.048-.237 1.329-.45c.28-.213.46-.536.82-1.182z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-empty" viewBox="0 0 16 16">
        <path
          d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-half" viewBox="0 0 16 16">
        <path
          d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 24 24">
        <path fill="currentColor" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
        <path fill="currentColor"
          d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
        <path fill="currentColor"
          d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
        <path fill="currentColor"
          d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
        <path
          d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
        <path
          d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
        <path
          d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
    </svg>

    <div id="preloader" class="preloader-container">
      <div class="book">
        <div class="inner">
          <div class="left"></div>
          <div class="middle"></div>
          <div class="right"></div>
        </div>
        <ul>
          <li>bla</li>
          <li>foo</li>
          <li>bar</li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>

    <header id="header" class="site-header">

      <div class="top-info border-bottom d-none d-md-block ">
        <div class="container-fluid">
          <div class="row g-0">
            <div class="col-md-4">
              <p class="fs-6 my-2 text-center"><a href="https://www.haecksen.org/spenden/" target="_blank">Du möchtest uns Unterstützen? </a></p>
            </div>
            <div class="col-md-4 border-start border-end">
              <p class="fs-6 my-2 text-center">Wer wir sind? <a class="text-decoration-underline"
                  href="https://www.haecksen.org/wer-sind-die-haecksen/" target="_blank">FAQ</a></p>
            </div>
            <div class="col-md-4">
              <p class="fs-6 my-2 text-center">Nächstes Event: 38C3</p>
            </div>
          </div>
        </div>
      </div>

      <nav id="header-nav" class="navbar navbar-expand-lg py-3">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="images/haecksen/haecksen-logo-pfad.svg" class="logo">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand active" aria-current="true" href="#">
                <img src="images/haecksen/haecksen-logo-gruenblau.png" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"
                data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar"
                class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
                <li class="nav-item">
                  <a class="nav-link me-4 active" aria-current="true" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Aktuell</a>
                  <ul class="dropdown-menu animate slide border">
                    <!-- <li><a href="202eh22.html" class="dropdown-item">EH22</a></li> -->
                    <li><a class="dropdown-item" href="cfc25/index.html">CFC25</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="https://media.ccc.de/search/?q=haecksen" target="_blank">Videos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="https://www.breenbuedel.de/haecksen/" target="_blank">Merch</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">Archiv</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                      <a class="dropdown-item" href="#">
                        2024 &raquo;
                      </a>
                      <ul class="dropdown-menu dropdown-submenu">
                        <li><a href="2024/38c3.html" class="dropdown-item">38C3</a></li>
                        <li>
                          <a class="dropdown-item" href="2024/geekend2024.html">Geekend 2024</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        2023 &raquo;
                      </a>
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="2023/37c3.html">37C3</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="2023/cccamp2023.html">CCCamp 2023</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        2022 &raquo;
                      </a>
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="2022/rc3-fireshonks.html">rC3 Fireshonks</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="2022/geekend2022.html">Geekend 2022</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        2021 &raquo;
                      </a>
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="2021/rc3-jadip.html">rC3 JADIP</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="2021/geekend2021.html">Geekend 2021</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="2021/r2r-reboot2respawn.html">Reboot to respawn</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        2020 &raquo;
                      </a>
                      <ul class="dropdown-menu dropdown-submenu">
                        <li>
                          <a class="dropdown-item" href="2020/rc3-2020.html">rC3 2020</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="https://di.c3voc.de/sessions-liste" target="_blank">Hidden Service</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="https://www.haecksen.org/kontakt/" target="_blank">Kontakt</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    </header>

    <!-- Countdown -->
    <!-- uncomment if required
    <section id="limited-offer" class="padding-large"
      style="background: rgb(56,28,71);
background: linear-gradient(180deg, rgba(56,28,71,1) 0%, rgba(116,36,127,1) 15%, rgba(162,73,89,1) 30%, rgba(241,141,24,1) 45%, rgba(250,223,27,1) 100%);">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 text-center">
            <div class="image-holder">
              <img src="images/haecksen/38C3-Haecksen_2.png" class="img-fluid" alt="haecksen logo 38c3">
            </div>
          </div>
         
          <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
            <h2 style="color: #FF5053;">Chaos<br> Feminist<br> Convention</h2>
           
            <div id="countdown-clock" class="d-flex align-items-center my-3" style="color: #B2AAFF;">
              <div class="time d-grid pe-3">
                <span class="days fs-1 fw-normal"></span>
                <small>Tage</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="hours fs-1 fw-normal"></span>
                <small>Std.</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="minutes fs-1 fw-normal"></span>
                <small>Min.</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid ps-3">
                <span class="seconds fs-1 fw-normal"></span>
                <small>Sek.</small>
              </div>
            </div>
            
            <a href="2024/38c3.html" class="btn mt-3" style="background-color: #6A5FDB;">Ankündigung</a>
          </div> 
        </div>
      </div>
      </div>
    </section>
    -->
    <!-- End countdown -->

    <!-- Slider -->
    <section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray">
      <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper main-swiper">
        <div class="swiper-wrapper d-flex align-items-center">

          <!-- CFC25 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>CFC25</h2>
                    <p>Chaos Feminist Convention</p>
                    <a href="cfc25/index.html" class="btn mt-3">Ankündigung</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="cfc25/cfc25-q.png" class="img-fluid" alt="haecksenhut Logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- CFC25 -->

          <!-- 38C3 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>38C3 Haecksen Assembly</h2>
                    <p>Workshops</p>
                    <a href="2024/38c3.html" class="btn mt-3">Programm</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/haecksen/38C3-Haecksen_2.png" class="img-fluid" alt="haecksenhut Logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 38C3 -->

          <!-- Geekend 2024 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>Geekend 2024</h2>
                    <p>in Dresden</p>
                    <a href="events/geekend2024.html" class="btn mt-3">Event Archiv</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/Haecksen/Lagerfeuer.png" class="img-fluid" alt="Haecksen Lagerfeuer">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END 2 -->

          <!-- 37C3 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>Haecksen Assembly</h2>
                    <p>Workshops auf dem 37C3</p>
                    <a href="events/37C3.html" class="btn mt-3">Event Archiv</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/haecksen/eventsseite-workshoplogo37c3.jpg" class="img-fluid" alt="Haecksenhut und 37C3 workshops">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END 3 -->

          <!-- CCCamp 2023 -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>Haecksen Village</h2>
                    <p>auf dem CCCamp 2023</p>
                    <a href="events/37C3.html" class="btn mt-3">Event Archiv</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/haecksen/Haeckse-Camp2023.png" class="img-fluid" alt="Haecksenhut und CCCamp 2023">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END 4 -->

          <!-- Fireshonks -->
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>Fireshonks</h2>
                    <p>rc3 2022</p>
                    <a href="events/rc3-fireshonks.html" class="btn mt-3">Event Archiv</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/haecksen/Haeckse-Camp2023.png" class="img-fluid" alt="Haecksenhut und CCCamp 2023">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END 4 -->

        </div>
      </div>
    </section>
    <!--  End slider -->

    <!-- feature -->
    <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="text-center mb-4 pb-3">
            <h3>Unsere Themen</h3>
          </div>
        </div>
        <div class="row">
          <!-- feature 1 -->
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <img src="images/icons/ausrustung.png">
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Unser Space</h4>
                <p>Eine Gruppe von technologie- interessierten FLINTA</p>
              </div>
            </div>
          </div>
          <!-- end feature 1 -->

          <!-- feature 2 -->
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <img src="images/icons/frauentag.png">
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Feminismus</h4>
                <p>Wir setzen uns für Feminismus ein, in MINT-Berufen und der Hacker*<br> innenszene.</p>
              </div>
            </div>
          </div>
          <!-- end feature 2 -->

          <!-- feature 3 -->
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <img src="images/icons/analysieren.png">
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Technik</h4>
                <p>Austausch und Wissentransfer, Workshops und digitale Projekte</p>
              </div>
            </div>
          </div>
          <!-- end feature 3 -->

          <!-- feature 4 -->
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <img src="images/icons/buch.png">
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Kunst & Kultur</h4>
                <p>Literatur, Ausstellungen, Podcast rund um unsere Themen und Werte</p>
              </div>
            </div>
          </div>
          <!-- end feature 4 -->

        </div>
      </div>
    </section>
    <!-- End feature -->

    <!-- Posts -->
    <section id="latest-posts" class="padding-large">
      <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
          <h3 class="d-flex align-items-center">Posts</h3>
          <a href="https://chaos.social/@haecksen" class="btn" target="_blank">zum Fedi</a>
        </div>
        <div class="row">
          <div id="mt-container" class="mt-container">
            <div class="mt-body" role="feed">
              <div class="mt-loading-spinner"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Posts -->

    <!-- END categories -->
    <section id="categories" class="padding-large">
      <div class="container">
        <div class="text-center mb-4 pb-3">
          <h3>Remote Räume</h3>
        </div>
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-4 border-0 rounded-3 position-relative">
              <a href="https://meeten.statt-drosseln.de/b/rooms/auy-5rh-al2-utx/join" target="_blank">
                <img src="images/haecksen/512px-Ada_Lovelace.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class="bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Awesome Ada</a></h6>
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
              <a href="https://meeten.statt-drosseln.de/b/rooms/pzf-4mi-7jk-7wk/join" target="_blank">
                <img src="images/haecksen/512px-Grace_Hopper.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class="bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Genuine Grace</a></h6>
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
              <a href="https://meeten.statt-drosseln.de/b/rooms/udt-t9c-asa-yko/join" target="_blank">
                <img src="images/haecksen/512px-Margaret_Hamilton.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class="bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Magic Margaret</a></h6>
              </a>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
              <a href="https://meeten.statt-drosseln.de/b/rooms/azs-xhm-rb2-lt9/join" target="_blank">
                <img src="images/haecksen/512px-Mary_Jackson.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Mighty Mary</a></h6>
              </a>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
              <a href="https://meeten.statt-drosseln.de/b/rooms/cri-ldu-xxg-xjj/join" target="_blank">
                <img src="images/haecksen/512px-Silvia_Torres.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class="bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Sparkling Silvia</a></h6>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- END categories -->

    <!-- Impressionen  -->
    <section id="instagram">
      <div class="container">
        <div class="text-center mb-4">
          <h3>Impressionen</h3>
        </div>
        <div class="row">
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="#" class="image-link position-relative">
                <img src="images/haecksen/microcontroller.jpg" alt="Foto eines microcontroller" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="#" class="image-link position-relative">
                <img src="images/haecksen/sticker.jpg" alt="Foto von Stickern" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="#" class="image-link position-relative">
                <img src="images/haecksen/goodie-bag.jpg" alt="Foto vom Goodiebag Inhalt" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="#" class="image-link position-relative">
                <img src="images/haecksen/buchhuelle.jpg" alt="Foto einer Stoffhülle mit queeren Hexenhüten" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="#" class="image-link position-relative">
                <img src="images/haecksen/brandschutz.png" alt="Screenshot der Workadventure mit Brandschutz Schildchen" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
          <div class="col-md-2">
            <figure class="instagram-item position-relative rounded-3">
              <a href="https://www.haecksen.org/podcast/" class="image-link position-relative" target="_blank">
                <img src="images/haecksen/haecksenwerk_500x.jpg" alt="Haecksenwerk Podcast Logo" class="img-fluid rounded-3 insta-image">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- END Impressionen -->

    <footer id="footer" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <img src="images/haecksen/haecksen-logo-gruenblau.png" alt="logo" class="img-fluid mb-2" style="max-height: 100px;">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu text-capitalize">
                  <h5 class="widget-title pb-2">Quick Links</h5>
                  <ul class="menu-list list-unstyled text-capitalize">
                    <li class="menu-item mb-1">
                      <a href="#">Home</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="https://www.haecksen.org/datenschutz/" target="_blank">Datenschutz</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="impressum.html">Impressum</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu text-capitalize">
                  <h5 class="widget-title pb-2">Infos</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item mb-1">
                      <a href="https://www.haecksen.org/en/wer-sind-die-haecksen/" target="_blank">Über uns</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="https://www.haecksen.org/spenden/" target="_blank">Spenden</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="https://www.haecksen.org/haeckse-werden/" target="_blank">Haeckse werden</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-capitalize pb-2">Kontakt</h5>
                  <p>
                    Schreib uns gerne an <br> <u>info ät haecksen.org</u>
                  </p>
                  <p class="social">Folge uns auf:</p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                         <a href="https://bsky.app/profile/haecksen.bsky.social" target="_blank">
                            <img src="../images/haecksen/Bluesky_Logo.svg">
                        </a>
                      </li>
                      <li>
                        <a href="https://chaos.social/@haecksen" target="_blank">
                          <img src="../images/haecksen/Mastodon_Logo.svg"> 
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <hr>
    <div id="footer-bottom" class="mb-2">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
            
          <div class="copyright" style="opacity: 0.3;">
            <p>© Copyright 2024 Bookly. HTML Template by <a href="https://templatesjungle.com/"
                target="_blank">TemplatesJungle</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>