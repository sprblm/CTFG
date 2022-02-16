<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<style type="text/css">
    *,::after,::before{
        box-sizing: border-box;
    }
    ul{
        padding-left: 2rem;
    }
    ul{
        margin-top: 0;
        margin-bottom: 1rem;
    }
    ul ul{
        margin-bottom: 0;
    }
    .small{
        font-size: .875em;
    }
    a {
        text-decoration: none !important;
        color: inherit;
    }
    a:hover{
        color: #f91942 !important;
    }
    ::-moz-focus-inner{
        padding: 0;
        border-style: none;
    }
    .collapse:not(.show){
        display: none;
    }
    .nav{
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }
    .nav-link{
        display: block;
        padding: .5rem 1rem;
        text-decoration: none;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
    }
    @media (prefers-reduced-motion:reduce){
        .nav-link{
            transition: none;
        }
    }
    .card{
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    .flex-column{
        flex-direction: column!important;
    }
    .mb-4{
        margin-bottom: 1.5rem!important;
    }
    .py-2{
        padding-top: .5rem!important;
        padding-bottom: .5rem!important;
    }
    /*! CSS Used from: https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css */
    [class*=" bi-"]::before{
        display: inline-block;
        font-family: bootstrap-icons!important;
        font-style: normal;
        font-weight: normal!important;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        vertical-align: -.125em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .bi-caret-down-fill::before{
        content: "\f229";
    }
    /*! CSS Used from: Embedded */
    .sidebar li .subtag{
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .sidebar .nav-link{
        font-size: 15px;
        font-weight: 500;
        font-family: raleway, helveticaneue, helvetica neue, Helvetica, Arial, sans-serif !important;
    }
    .sidebar .nav-link:hover{
        color:var(--bs-primary);
    }
    .sidebar .nav-link{
        display: inline-block;
    }
    .sidebar .tag-open{
        color: #f91942
    }
    .sidebar .tag-open svg{
        margin: 0 !important;
        transform: rotate(90deg);
    }
    .sidebar .has-subtag.active {
        color: #fff !important;
        border-radius: 25px;
        background-color: #f91942;
    }

    /*! CSS Used fontfaces */
    @font-face{
        font-family:"bootstrap-icons";
        src:url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff2?8bd4575acf83c7696dc7a14a966660a3") format("woff2"), url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff?8bd4575acf83c7696dc7a14a966660a3") format("woff");
    }
</style>

<nav class="sidebar card py-2 mb-4">
    <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Issue" title="Issue">
                    <span class="text-sm cat-wrap ">
                        Issue
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/agriculture" title="agriculture">
        <span class="text-sm cat-wrap ">
            agriculture
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/air quality" title="air quality">
        <span class="text-sm cat-wrap ">
            air quality
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/animals" title="animals">
        <span class="text-sm cat-wrap ">
            animals
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/anti-harassment" title="anti-harassment">
        <span class="text-sm cat-wrap ">
            anti-harassment
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/banking" title="banking">
        <span class="text-sm cat-wrap ">
            banking
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/biome" title="biome">
        <span class="text-sm cat-wrap ">
            biome
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/buildings" title="buildings">
        <span class="text-sm cat-wrap ">
            buildings
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/census" title="census">
        <span class="text-sm cat-wrap ">
            census
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/coral" title="coral">
        <span class="text-sm cat-wrap ">
            coral
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/corruption" title="corruption">
        <span class="text-sm cat-wrap ">
            corruption
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/crime" title="crime">
        <span class="text-sm cat-wrap ">
            crime
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/criminal justice" title="criminal justice">
        <span class="text-sm cat-wrap ">
            criminal justice
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/criminal justice reform" title="criminal justice reform">
        <span class="text-sm cat-wrap ">
            criminal justice reform
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/crisis" title="crisis">
        <span class="text-sm cat-wrap ">
            crisis
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/culture" title="culture">
        <span class="text-sm cat-wrap ">
            culture
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/cyberwar" title="cyberwar">
        <span class="text-sm cat-wrap ">
            cyberwar
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/cycling" title="cycling">
        <span class="text-sm cat-wrap ">
            cycling
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/debt" title="debt">
        <span class="text-sm cat-wrap ">
            debt
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/deepfakes" title="deepfakes">
        <span class="text-sm cat-wrap ">
            deepfakes
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/democracy" title="democracy">
        <span class="text-sm cat-wrap ">
            democracy
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/development" title="development">
        <span class="text-sm cat-wrap ">
            development
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/diabetes" title="diabetes">
        <span class="text-sm cat-wrap ">
            diabetes
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/disasters" title="disasters">
        <span class="text-sm cat-wrap ">
            disasters
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/DNA" title="DNA">
        <span class="text-sm cat-wrap ">
            DNA
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/domestic violence" title="domestic violence">
        <span class="text-sm cat-wrap ">
            domestic violence
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/domestic work" title="domestic work">
        <span class="text-sm cat-wrap ">
            domestic work
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/earthquakes" title="earthquakes">
        <span class="text-sm cat-wrap ">
            earthquakes
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/employee organizing" title="employee organizing">
        <span class="text-sm cat-wrap ">
            employee organizing
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/extremism" title="extremism">
        <span class="text-sm cat-wrap ">
            extremism
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/fintech" title="fintech">
        <span class="text-sm cat-wrap ">
            fintech
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/fires" title="fires">
        <span class="text-sm cat-wrap ">
            fires
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/floods" title="floods">
        <span class="text-sm cat-wrap ">
            floods
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/food" title="food">
        <span class="text-sm cat-wrap ">
            food
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/forests" title="forests">
        <span class="text-sm cat-wrap ">
            forests
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/fraud detection" title="fraud detection">
        <span class="text-sm cat-wrap ">
            fraud detection
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/free speech" title="free speech">
        <span class="text-sm cat-wrap ">
            free speech
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/gig economy" title="gig economy">
        <span class="text-sm cat-wrap ">
            gig economy
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/gun safety" title="gun safety">
        <span class="text-sm cat-wrap ">
            gun safety
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/harassment" title="harassment">
        <span class="text-sm cat-wrap ">
            harassment
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/hate speech" title="hate speech">
        <span class="text-sm cat-wrap ">
            hate speech
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/health" title="health">
        <span class="text-sm cat-wrap ">
            health
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/history" title="history">
        <span class="text-sm cat-wrap ">
            history
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/homelessness" title="homelessness">
        <span class="text-sm cat-wrap ">
            homelessness
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/housing" title="housing">
        <span class="text-sm cat-wrap ">
            housing
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/human rights" title="human rights">
        <span class="text-sm cat-wrap ">
            human rights
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/humanitarian" title="humanitarian">
        <span class="text-sm cat-wrap ">
            humanitarian
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/immigration" title="immigration">
        <span class="text-sm cat-wrap ">
            immigration
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Justice" title="Justice">
        <span class="text-sm cat-wrap ">
            Justice
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/labor" title="labor">
        <span class="text-sm cat-wrap ">
            labor
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/land" title="land">
        <span class="text-sm cat-wrap ">
            land
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/landlord" title="landlord">
        <span class="text-sm cat-wrap ">
            landlord
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/learning difficulties" title="learning difficulties">
        <span class="text-sm cat-wrap ">
            learning difficulties
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/libraries" title="libraries">
        <span class="text-sm cat-wrap ">
            libraries
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/literacy" title="literacy">
        <span class="text-sm cat-wrap ">
            literacy
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/lobbying" title="lobbying">
        <span class="text-sm cat-wrap ">
            lobbying
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/masks" title="masks">
        <span class="text-sm cat-wrap ">
            masks
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/mass transit" title="mass transit">
        <span class="text-sm cat-wrap ">
            mass transit
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/maternal health" title="maternal health">
        <span class="text-sm cat-wrap ">
            maternal health
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/mental health" title="mental health">
        <span class="text-sm cat-wrap ">
            mental health
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/migration" title="migration">
        <span class="text-sm cat-wrap ">
            migration
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/mobility" title="mobility">
        <span class="text-sm cat-wrap ">
            mobility
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/museums" title="museums">
        <span class="text-sm cat-wrap ">
            museums
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/noise" title="noise">
        <span class="text-sm cat-wrap ">
            noise
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/opioids" title="opioids">
        <span class="text-sm cat-wrap ">
            opioids
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/parks" title="parks">
        <span class="text-sm cat-wrap ">
            parks
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/peace" title="peace">
        <span class="text-sm cat-wrap ">
            peace
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/permits" title="permits">
        <span class="text-sm cat-wrap ">
            permits
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/place-based" title="place-based">
        <span class="text-sm cat-wrap ">
            place-based
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/planning" title="planning">
        <span class="text-sm cat-wrap ">
            planning
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/police violence" title="police violence">
        <span class="text-sm cat-wrap ">
            police violence
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/policing" title="policing">
        <span class="text-sm cat-wrap ">
            policing
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/private data public good" title="private data public good">
        <span class="text-sm cat-wrap ">
            private data public good
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/racial equity" title="racial equity">
        <span class="text-sm cat-wrap ">
            racial equity
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/radiation" title="radiation">
        <span class="text-sm cat-wrap ">
            radiation
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/re-entry" title="re-entry">
        <span class="text-sm cat-wrap ">
            re-entry
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/real estate" title="real estate">
        <span class="text-sm cat-wrap ">
            real estate
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/recidivism" title="recidivism">
        <span class="text-sm cat-wrap ">
            recidivism
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/recycling" title="recycling">
        <span class="text-sm cat-wrap ">
            recycling
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/resilience" title="resilience">
        <span class="text-sm cat-wrap ">
            resilience
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/reuse" title="reuse">
        <span class="text-sm cat-wrap ">
            reuse
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/road safety" title="road safety">
        <span class="text-sm cat-wrap ">
            road safety
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/seniors" title="seniors">
        <span class="text-sm cat-wrap ">
            seniors
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/social isolation" title="social isolation">
        <span class="text-sm cat-wrap ">
            social isolation
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/speeding" title="speeding">
        <span class="text-sm cat-wrap ">
            speeding
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/STEM" title="STEM">
        <span class="text-sm cat-wrap ">
            STEM
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/streetscape" title="streetscape">
        <span class="text-sm cat-wrap ">
            streetscape
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/suicide prevention" title="suicide prevention">
        <span class="text-sm cat-wrap ">
            suicide prevention
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/supply chain" title="supply chain">
        <span class="text-sm cat-wrap ">
            supply chain
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/surveillance" title="surveillance">
        <span class="text-sm cat-wrap ">
            surveillance
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/taxes" title="taxes">
        <span class="text-sm cat-wrap ">
            taxes
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/time credits" title="time credits">
        <span class="text-sm cat-wrap ">
            time credits
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/trees" title="trees">
        <span class="text-sm cat-wrap ">
            trees
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/universities" title="universities">
        <span class="text-sm cat-wrap ">
            universities
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/urban planning" title="urban planning">
        <span class="text-sm cat-wrap ">
            urban planning
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/vaccines" title="vaccines">
        <span class="text-sm cat-wrap ">
            vaccines
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Vision Zero" title="Vision Zero">
        <span class="text-sm cat-wrap ">
            Vision Zero
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Format" title="Format">
                    <span class="text-sm cat-wrap ">
                        Format
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/APIs" title="APIs">
        <span class="text-sm cat-wrap ">
            APIs
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/apps" title="apps">
        <span class="text-sm cat-wrap ">
            apps
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/books" title="books">
        <span class="text-sm cat-wrap ">
            books
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/campaigns" title="campaigns">
        <span class="text-sm cat-wrap ">
            campaigns
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/case studies" title="case studies">
        <span class="text-sm cat-wrap ">
            case studies
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/civic features" title="civic features">
        <span class="text-sm cat-wrap ">
            civic features
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/courses" title="courses">
        <span class="text-sm cat-wrap ">
            courses
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/curricula" title="curricula">
        <span class="text-sm cat-wrap ">
            curricula
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/desktop-apps" title="desktop-apps">
        <span class="text-sm cat-wrap ">
            desktop-apps
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/experiments" title="experiments">
        <span class="text-sm cat-wrap ">
            experiments
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/extensions" title="extensions">
        <span class="text-sm cat-wrap ">
            extensions
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/films" title="films">
        <span class="text-sm cat-wrap ">
            films
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/framework" title="framework">
        <span class="text-sm cat-wrap ">
            framework
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/glossary" title="glossary">
        <span class="text-sm cat-wrap ">
            glossary
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/guerilla" title="guerilla">
        <span class="text-sm cat-wrap ">
            guerilla
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/guides" title="guides">
        <span class="text-sm cat-wrap ">
            guides
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/handbooks" title="handbooks">
        <span class="text-sm cat-wrap ">
            handbooks
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/lists" title="lists">
        <span class="text-sm cat-wrap ">
            lists
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/manifestos" title="manifestos">
        <span class="text-sm cat-wrap ">
            manifestos
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/methodology" title="methodology">
        <span class="text-sm cat-wrap ">
            methodology
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/MOOCs" title="MOOCs">
        <span class="text-sm cat-wrap ">
            MOOCs
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/newsletters" title="newsletters">
        <span class="text-sm cat-wrap ">
            newsletters
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/podcasts" title="podcasts">
        <span class="text-sm cat-wrap ">
            podcasts
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/print resources" title="print resources">
        <span class="text-sm cat-wrap ">
            print resources
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/reports" title="reports">
        <span class="text-sm cat-wrap ">
            reports
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/research" title="research">
        <span class="text-sm cat-wrap ">
            research
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/resources" title="resources">
        <span class="text-sm cat-wrap ">
            resources
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/toolkits" title="toolkits">
        <span class="text-sm cat-wrap ">
            toolkits
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/trainings" title="trainings">
        <span class="text-sm cat-wrap ">
            trainings
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/videos" title="videos">
        <span class="text-sm cat-wrap ">
            videos
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/web app" title="web app">
        <span class="text-sm cat-wrap ">
            web app
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/widgets" title="widgets">
        <span class="text-sm cat-wrap ">
            widgets
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/wikis" title="wikis">
        <span class="text-sm cat-wrap ">
            wikis
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/workbook" title="workbook">
        <span class="text-sm cat-wrap ">
            workbook
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/workshops" title="workshops">
        <span class="text-sm cat-wrap ">
            workshops
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Community" title="Community">
                    <span class="text-sm cat-wrap ">
                        Community
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/coop" title="coop">
        <span class="text-sm cat-wrap ">
            coop
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Deaf" title="Deaf">
        <span class="text-sm cat-wrap ">
            Deaf
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/indigenous" title="indigenous">
        <span class="text-sm cat-wrap ">
            indigenous
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/LGBTQI" title="LGBTQI">
        <span class="text-sm cat-wrap ">
            LGBTQI
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/refugees" title="refugees">
        <span class="text-sm cat-wrap ">
            refugees
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/students" title="students">
        <span class="text-sm cat-wrap ">
            students
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/women" title="women">
        <span class="text-sm cat-wrap ">
            women
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/youth" title="youth">
        <span class="text-sm cat-wrap ">
            youth
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Current event" title="Current event">
                    <span class="text-sm cat-wrap ">
                        Current event
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/2020 US election" title="2020 US election">
        <span class="text-sm cat-wrap ">
            2020 US election
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Brexit" title="Brexit">
        <span class="text-sm cat-wrap ">
            Brexit
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/COVID-19" title="COVID-19">
        <span class="text-sm cat-wrap ">
            COVID-19
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Hong Kong protests" title="Hong Kong protests">
        <span class="text-sm cat-wrap ">
            Hong Kong protests
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Sustainable Development Goals" title="Sustainable Development Goals">
                    <span class="text-sm cat-wrap ">
                        Sustainable Development Goals
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/No poverty" title="No poverty">
        <span class="text-sm cat-wrap ">
            No poverty
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Zero hunger" title="Zero hunger">
        <span class="text-sm cat-wrap ">
            Zero hunger
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Good health and well-being" title="Good health and well-being">
        <span class="text-sm cat-wrap ">
            Good health and well-being
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Quality education" title="Quality education">
        <span class="text-sm cat-wrap ">
            Quality education
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Gender Equality" title="Gender Equality">
        <span class="text-sm cat-wrap ">
            Gender Equality
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Clean water and sanitation" title="Clean water and sanitation">
        <span class="text-sm cat-wrap ">
            Clean water and sanitation
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Affordable and clean energy" title="Affordable and clean energy">
        <span class="text-sm cat-wrap ">
            Affordable and clean energy
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Decent work and economic growth" title="Decent work and economic growth">
        <span class="text-sm cat-wrap ">
            Decent work and economic growth
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Industry, innovation, and infrastructure" title="Industry, innovation, and infrastructure">
        <span class="text-sm cat-wrap ">
            Industry, innovation, and infrastructure
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Reduced inequalities" title="Reduced inequalities">
        <span class="text-sm cat-wrap ">
            Reduced inequalities
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Sustainable cities and communities" title="Sustainable cities and communities">
        <span class="text-sm cat-wrap ">
            Sustainable cities and communities
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Responsible consumption and production" title="Responsible consumption and production">
        <span class="text-sm cat-wrap ">
            Responsible consumption and production
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Climate action" title="Climate action">
        <span class="text-sm cat-wrap ">
            Climate action
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Life below water" title="Life below water">
        <span class="text-sm cat-wrap ">
            Life below water
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Life on land" title="Life on land">
        <span class="text-sm cat-wrap ">
            Life on land
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Peace, justice, and strong institutions" title="Peace, justice, and strong institutions">
        <span class="text-sm cat-wrap ">
            Peace, justice, and strong institutions
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Partnerships for the Goals" title="Partnerships for the Goals">
        <span class="text-sm cat-wrap ">
            Partnerships for the Goals
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Political unit" title="Political unit">
                    <span class="text-sm cat-wrap ">
                        Political unit
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/neighborhoods" title="neighborhoods">
        <span class="text-sm cat-wrap ">
            neighborhoods
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/local" title="local">
        <span class="text-sm cat-wrap ">
            local
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/towns" title="towns">
        <span class="text-sm cat-wrap ">
            towns
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/cities" title="cities">
        <span class="text-sm cat-wrap ">
            cities
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/rural" title="rural">
        <span class="text-sm cat-wrap ">
            rural
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/public space" title="public space">
        <span class="text-sm cat-wrap ">
            public space
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/European Union" title="European Union">
        <span class="text-sm cat-wrap ">
            European Union
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/United Nations" title="United Nations">
        <span class="text-sm cat-wrap ">
            United Nations
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Arctic" title="Arctic">
        <span class="text-sm cat-wrap ">
            Arctic
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Platform" title="Platform">
                    <span class="text-sm cat-wrap ">
                        Platform
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Amazon" title="Amazon">
        <span class="text-sm cat-wrap ">
            Amazon
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Android" title="Android">
        <span class="text-sm cat-wrap ">
            Android
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/commercial" title="commercial">
        <span class="text-sm cat-wrap ">
            commercial
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/CONSUL" title="CONSUL">
        <span class="text-sm cat-wrap ">
            CONSUL
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Github" title="Github">
        <span class="text-sm cat-wrap ">
            Github
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Google" title="Google">
        <span class="text-sm cat-wrap ">
            Google
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/IBM" title="IBM">
        <span class="text-sm cat-wrap ">
            IBM
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Line" title="Line">
        <span class="text-sm cat-wrap ">
            Line
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Microsoft" title="Microsoft">
        <span class="text-sm cat-wrap ">
            Microsoft
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/OpenStreetMap" title="OpenStreetMap">
        <span class="text-sm cat-wrap ">
            OpenStreetMap
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Reddit" title="Reddit">
        <span class="text-sm cat-wrap ">
            Reddit
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Snap" title="Snap">
        <span class="text-sm cat-wrap ">
            Snap
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Uber" title="Uber">
        <span class="text-sm cat-wrap ">
            Uber
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Waze" title="Waze">
        <span class="text-sm cat-wrap ">
            Waze
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/WhatsApp" title="WhatsApp">
        <span class="text-sm cat-wrap ">
            WhatsApp
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/Wordpress" title="Wordpress">
        <span class="text-sm cat-wrap ">
            Wordpress
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/YouTube" title="YouTube">
        <span class="text-sm cat-wrap ">
            YouTube
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Feature" title="Feature">
                    <span class="text-sm cat-wrap ">
                        Feature
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/contracts" title="contracts">
        <span class="text-sm cat-wrap ">
            contracts
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/GIS" title="GIS">
        <span class="text-sm cat-wrap ">
            GIS
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/project tracking" title="project tracking">
        <span class="text-sm cat-wrap ">
            project tracking
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/translation" title="translation">
        <span class="text-sm cat-wrap ">
            translation
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/VPNs" title="VPNs">
        <span class="text-sm cat-wrap ">
            VPNs
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-subtag">
                <a class="nav-link" href="/listing-tag/Other" title="Other">
                    <span class="text-sm cat-wrap ">
                        Other
                    </span>
                </a>
                <a class="nav-link subtag-button">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="subtag collapse ">
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/partisan" title="partisan">
        <span class="text-sm cat-wrap ">
            partisan
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-subtag ">
    <a class="nav-link overlay" href="/listing-tag/celebrities" title="celebrities">
        <span class="text-sm cat-wrap ">
            celebrities
        </span>
    </a>
                <ul class="subtag collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
            </ul>
</nav>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll('.sidebar .subtag-button').forEach(function(element){
            element.addEventListener('click', function (e) {
                let nextEl = element.nextElementSibling;
                let parentEl  = element.parentElement;
                element.classList.add('tag-open');

                if(nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if(nextEl.classList.contains('show')){
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        var opened_subtag = parentEl.parentElement.querySelector('.subtag.show');

                        if(opened_subtag){
                            new bootstrap.Collapse(opened_subtag);
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
        document.querySelectorAll('.subtag.show').forEach((el) => {
            el.previousElementSibling.classList.add('tag-open');
        });
    }

    // On Menu hide remove class
    var myCollapsible = document.getElementById('nav_accordion')
    myCollapsible.addEventListener('hide.bs.collapse', function (element) {
        element.target.previousElementSibling.classList.remove('tag-open');
    })
</script>
