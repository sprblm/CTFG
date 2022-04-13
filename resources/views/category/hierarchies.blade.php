@extends('layouts.template')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<style type="text/css">
*,::after,::before{box-sizing:border-box;}
ul{padding-left:2rem;}
ul{margin-top:0;margin-bottom:1rem;}
ul ul{margin-bottom:0;}
.small{font-size: .875em;}

a {
    text-decoration: none !important;
    color: inherit;
}

a:hover{color: #EA0630 !important;}

::-moz-focus-inner{padding:0;border-style:none;}
.collapse:not(.show){display:none;}
.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
.nav-link{display:block;padding:.5rem 1rem;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
    .nav-link{transition:none;}
}
.card{position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem;}
.flex-column{flex-direction:column!important;}
.mb-4{margin-bottom:1.5rem!important;}
.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important;}
/*! CSS Used from: https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css */
[class*=" bi-"]::before{display:inline-block;font-family:bootstrap-icons!important;font-style:normal;font-weight:normal!important;font-variant:normal;text-transform:none;line-height:1;vertical-align:-.125em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.bi-caret-down-fill::before{content:"\f229";}
/*! CSS Used from: Embedded */
.sidebar li .submenu{list-style:none;margin:0;padding:0;padding-left:1rem;padding-right:1rem;}
.sidebar .nav-link{
    font-size: 15px;
    font-weight:500;
    font-family: raleway, helveticaneue, helvetica neue, Helvetica, Arial, sans-serif !important;
}
.sidebar .nav-link:hover{color:var(--bs-primary);}
.sidebar .nav-link{display:inline-block;}
.sidebar .menu-open{color: #EA0630}
.sidebar .menu-open svg{margin: 0 !important; transform: rotate(90deg)}
.sidebar .has-submenu.active {color: #fff !important;border-radius: 25px;background-color: #EA0630;}
/*! CSS Used fontfaces */
@font-face{font-family:"bootstrap-icons";src:url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff2?8bd4575acf83c7696dc7a14a966660a3") format("woff2"), url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff?8bd4575acf83c7696dc7a14a966660a3") format("woff");}
</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 padding-right-30">
            <div class="row">
                @if(count($items) > 0)
                    @foreach ($items as $item)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="listings-container list-layout">
                                <h3 class="margin-top-0 margin-bottom-30" style="font-size: 2rem">{{ @$item->name }}</h3>
                                <nav class="sidebar py-2 mb-4">
                                    <ul class="nav flex-column" id="nav_accordion">
                                        @if(count($item->childItems))
                                            @foreach ($item->childItems as $childItems)
                                                @include('partials.sub_categories', ['sub_items' => $childItems])
                                            @endforeach
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            document.querySelectorAll('.sidebar .submenu-button').forEach(function(element){
                element.addEventListener('click', function (e) {
                    let nextEl = element.nextElementSibling;
                    let parentEl  = element.parentElement;
                    element.classList.add('menu-open');

                    if(nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);

                        if(nextEl.classList.contains('show')){
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');

                            if(opened_submenu){
                                new bootstrap.Collapse(opened_submenu);
                            }

                        }
                    }
                });
            });
            // Function called on page reload
            openMenu();
        });

        function openMenu() {
            $('.sidebar ul.show').parents('ul').addClass('show');
            document.querySelectorAll('.submenu.show').forEach((el) => {
                el.previousElementSibling.classList.add('menu-open');
            });
        }

        // On Menu hide remove class
        var myCollapsible = document.getElementById('nav_accordion')
        myCollapsible.addEventListener('hide.bs.collapse', function (element) {
            element.target.previousElementSibling.classList.remove('menu-open');
        })
    </script>
@endsection
