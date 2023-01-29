
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>@yield("title")</title>
    
    <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">


    <style>
        /* stylelint-disable selector-list-comma-newline-after */

        .blog-header {
        border-bottom: 1px solid #e5e5e5;
        }

        .blog-header-logo {
        font-family: Amiri, Georgia, "Times New Roman", serif;
        font-size: 2.25rem;
        }

        .blog-header-logo:hover {
        text-decoration: none;
        }

        h1, h2, h3, h4, h5, h6 {
        font-family: Amiri, Georgia, "Times New Roman", serif;
        }

        .display-4 {
        font-size: 2.5rem;
        }
        @media (min-width: 768px) {
        .display-4 {
            font-size: 3rem;
        }
        }

        .flex-auto {
        flex: 0 0 auto;
        }

        .h-250 { height: 250px; }
        @media (min-width: 768px) {
        .h-md-250 { height: 250px; }
        }

        /* Pagination */
        .blog-pagination {
        margin-bottom: 4rem;
        }

        /*
        * Blog posts
        */
        .blog-post {
        margin-bottom: 4rem;
        }
        .blog-post-title {
        font-size: 2.5rem;
        }
        .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #727272;
        }

        /*
        * Footer
        */
        .blog-footer {
        padding: 2.5rem 0;
        color: #727272;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
        }
        .blog-footer p:last-child {
        margin-bottom: 0;
        }
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
            a {
              text-decoration: none !important ;
            }
    </style>

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<body>
    
    <div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">الإشتراك في النشرة البريدية</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">كبير</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="بحث">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>بحث</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">إنشاء حساب</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">العالم</a>
      <a class="p-2 link-secondary" href="#">الولايات المتحدة</a>
      <a class="p-2 link-secondary" href="#">التقنية</a>
      <a class="p-2 link-secondary" href="#">التصميم</a>
      <a class="p-2 link-secondary" href="#">الحضارة</a>
      <a class="p-2 link-secondary" href="#">المال والأعمال</a>
      <a class="p-2 link-secondary" href="#">السياسة</a>
      <a class="p-2 link-secondary" href="#">الرأي العام</a>
      <a class="p-2 link-secondary" href="#">العلوم</a>
      <a class="p-2 link-secondary" href="#">الصحة</a>
      <a class="p-2 link-secondary" href="#">الموضة</a>
      <a class="p-2 link-secondary" href="#">السفر</a>
    </nav>
  </div>
    </div>
    {{$slot}}
    <footer class="blog-footer">
        <p>تم تصميم نموذج المدونة لـ <a href="https://getbootstrap.com/">Bootstrap</a> بواسطة <a href="https://twitter.com/mdo"><bdi lang="en" dir="ltr">@mdo</bdi></a>.</p>
        <p>
          <a href="#">عد إلى الأعلى</a>
        </p>
          </footer>
      </body>
      </html>