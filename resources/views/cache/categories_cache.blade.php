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
        margin-top: 0; margin-bottom: 1rem;
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
    a:hover {
        color: #EA0630 !important;
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
        .nav-link{transition:none;}
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
        padding-bottom:.5rem!important;
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
    .sidebar li .submenu{
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .sidebar .nav-link{
        font-size: 15px;
        font-weight:500;
        font-family: raleway, helveticaneue, helvetica neue, Helvetica, Arial, sans-serif !important;
    }
    .sidebar .nav-link:hover{
        color: var(--bs-primary);
    }
    .sidebar .nav-link{
        display: inline-block;
    }
    .sidebar .menu-open{
        color: #EA0630
    }
    .sidebar .menu-open svg{
        margin: 0 !important;
        transform: rotate(90deg) !important;
    }
    .sidebar .has-submenu.active {
        color: #fff !important;
        border-radius: 25px;
        background-color: #EA0630;
    }
    .sidebar li.nav-item a.nav-link:hover{
        color: #747674 !important;
        text-decoration: underline;
    }
    .sidebar .menu-open span {
        color: #747674 !important;
    }

    /*! CSS Used fontfaces */
    @font-face{
        font-family:"bootstrap-icons";
        src:url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff2?8bd4575acf83c7696dc7a14a966660a3") format("woff2"), url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff?8bd4575acf83c7696dc7a14a966660a3") format("woff");
    }
</style>

<nav class="sidebar card py-2 mb-4">
    <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item has-submenu ">
                <a class="nav-link overlay" href="/listing-category/the-tech" title="The Tech">
                    <span class="text-sm cat-wrap ">
                        The Tech
                    </span>
                </a>
                <a class="nav-link submenu-button ">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="submenu collapse ">
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/engagement-tech" title="Engagement tech">
        <span class="text-sm cat-wrap ">
            Engagement tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/debate" title="Debate">
        <span class="text-sm cat-wrap ">
            Debate
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/kiosks" title="Kiosks">
        <span class="text-sm cat-wrap ">
            Kiosks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/sentiment-analysis" title="Sentiment analysis">
        <span class="text-sm cat-wrap ">
            Sentiment analysis
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/polling" title="Polling">
        <span class="text-sm cat-wrap ">
            Polling
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/get-social-benefits" title="Get social benefits">
        <span class="text-sm cat-wrap ">
            Get social benefits
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/meeting-tech" title="Meeting tech">
        <span class="text-sm cat-wrap ">
            Meeting tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/hotlines" title="Hotlines">
        <span class="text-sm cat-wrap ">
            Hotlines
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/urban-planning" title="Urban planning">
        <span class="text-sm cat-wrap ">
            Urban planning
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/participatory-democracy" title="Participatory democracy">
        <span class="text-sm cat-wrap ">
            Participatory democracy
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/soliciting-new-ideas" title="Soliciting new ideas">
        <span class="text-sm cat-wrap ">
            Soliciting new ideas
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/ideation" title="Ideation">
        <span class="text-sm cat-wrap ">
            Ideation
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/public-input-and-engagement-tools" title="Public input and engagement tools">
        <span class="text-sm cat-wrap ">
            Public input and engagement tools
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/surveys" title="Surveys">
        <span class="text-sm cat-wrap ">
            Surveys
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/interactive-voice-response" title="Interactive Voice Response">
        <span class="text-sm cat-wrap ">
            Interactive Voice Response
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/group-decision-making" title="Group decision making">
        <span class="text-sm cat-wrap ">
            Group decision making
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-crowdfunding" title="Civic crowdfunding">
        <span class="text-sm cat-wrap ">
            Civic crowdfunding
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/democratic-innovation" title="Democratic innovation">
        <span class="text-sm cat-wrap ">
            Democratic innovation
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/legistech" title="Legistech">
        <span class="text-sm cat-wrap ">
            Legistech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/crowdlaw" title="Crowdlaw">
        <span class="text-sm cat-wrap ">
            Crowdlaw
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/constitutions" title="Constitutions">
        <span class="text-sm cat-wrap ">
            Constitutions
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/public-finance-and-participatory-budgeting" title="Public finance and participatory budgeting">
        <span class="text-sm cat-wrap ">
            Public finance and participatory budgeting
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/resource-matching-and-sharing" title="Resource matching and sharing">
        <span class="text-sm cat-wrap ">
            Resource matching and sharing
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/labor-platform" title="Labor platform">
        <span class="text-sm cat-wrap ">
            Labor platform
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/online-forums" title="Online forums">
        <span class="text-sm cat-wrap ">
            Online forums
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/neighborhood-forums" title="Neighborhood forums">
        <span class="text-sm cat-wrap ">
            Neighborhood forums
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-forums" title="Civic forums">
        <span class="text-sm cat-wrap ">
            Civic forums
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/social-networks" title="Social networks">
        <span class="text-sm cat-wrap ">
            Social networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-crowdfunding-platforms" title="Civic crowdfunding platforms">
        <span class="text-sm cat-wrap ">
            Civic crowdfunding platforms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/voting-and-elections" title="Voting and elections">
        <span class="text-sm cat-wrap ">
            Voting and elections
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/election-observation" title="Election observation">
        <span class="text-sm cat-wrap ">
            Election observation
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/ballot-information" title="Ballot information">
        <span class="text-sm cat-wrap ">
            Ballot information
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/election-administration" title="Election administration">
        <span class="text-sm cat-wrap ">
            Election administration
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/vote-by-mail" title="Vote by Mail">
        <span class="text-sm cat-wrap ">
            Vote by Mail
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/voter-outreach" title="Voter outreach">
        <span class="text-sm cat-wrap ">
            Voter outreach
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/ranked-choice-voting" title="Ranked Choice Voting">
        <span class="text-sm cat-wrap ">
            Ranked Choice Voting
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/voter-registration" title="Voter registration">
        <span class="text-sm cat-wrap ">
            Voter registration
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/getting-to-the-polls" title="Getting to the polls">
        <span class="text-sm cat-wrap ">
            Getting to the polls
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/voter-assistance-tech" title="Voter assistance tech">
        <span class="text-sm cat-wrap ">
            Voter assistance tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/voter-assistance" title="Voter assistance">
        <span class="text-sm cat-wrap ">
            Voter assistance
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/2020-election-admin" title="2020-election-admin">
        <span class="text-sm cat-wrap ">
            2020-election-admin
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/find-your-polling-place" title="Find your polling place">
        <span class="text-sm cat-wrap ">
            Find your polling place
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/election-oversight" title="Election oversight">
        <span class="text-sm cat-wrap ">
            Election oversight
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/make-sure-votes-are-counted" title="Make sure votes are counted">
        <span class="text-sm cat-wrap ">
            Make sure votes are counted
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/make-a-plan-to-vote" title="Make a plan to vote">
        <span class="text-sm cat-wrap ">
            Make a plan to vote
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/work-the-polls" title="Work the polls">
        <span class="text-sm cat-wrap ">
            Work the polls
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tactical-voting" title="Tactical voting">
        <span class="text-sm cat-wrap ">
            Tactical voting
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/matching-views-to-votes" title="Matching views to votes">
        <span class="text-sm cat-wrap ">
            Matching views to votes
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/send-food-to-poll-lines" title="Send food to poll lines">
        <span class="text-sm cat-wrap ">
            Send food to poll lines
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/peaceful-transition-of-power" title="Peaceful transition of power">
        <span class="text-sm cat-wrap ">
            Peaceful transition of power
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/e-voting" title="E-voting">
        <span class="text-sm cat-wrap ">
            E-voting
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/advocacy-tech" title="Advocacy tech">
        <span class="text-sm cat-wrap ">
            Advocacy tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/organize-campaigns" title="Organize campaigns">
        <span class="text-sm cat-wrap ">
            Organize campaigns
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/direct-action" title="Direct action">
        <span class="text-sm cat-wrap ">
            Direct action
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/internal-communication-and-coordination" title="Internal communication and coordination">
        <span class="text-sm cat-wrap ">
            Internal communication and coordination
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/targeting" title="Targeting">
        <span class="text-sm cat-wrap ">
            Targeting
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/sms-campaign-tools" title="SMS campaign tools">
        <span class="text-sm cat-wrap ">
            SMS campaign tools
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/call-campaign-tools" title="Call campaign tools">
        <span class="text-sm cat-wrap ">
            Call campaign tools
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/manage-volunteers" title="Manage volunteers">
        <span class="text-sm cat-wrap ">
            Manage volunteers
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/check-in-tools" title="Check-in tools">
        <span class="text-sm cat-wrap ">
            Check-in tools
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/official-campaign-apps" title="Official campaign apps">
        <span class="text-sm cat-wrap ">
            Official campaign apps
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/boycott-or-buycott" title="Boycott or buycott">
        <span class="text-sm cat-wrap ">
            Boycott or buycott
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/find-out-how-to-take-action" title="Find out how to take action">
        <span class="text-sm cat-wrap ">
            Find out how to take action
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/relational-organizing" title="Relational organizing">
        <span class="text-sm cat-wrap ">
            Relational organizing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/watchdogging-and-transparency" title="Watchdogging and transparency">
        <span class="text-sm cat-wrap ">
            Watchdogging and transparency
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/consumer-watchdogging" title="Consumer watchdogging">
        <span class="text-sm cat-wrap ">
            Consumer watchdogging
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/lobbying" title="Lobbying">
        <span class="text-sm cat-wrap ">
            Lobbying
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/social-and-financial-connections" title="Social and financial connections">
        <span class="text-sm cat-wrap ">
            Social and financial connections
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/promise-trackers" title="Promise trackers">
        <span class="text-sm cat-wrap ">
            Promise trackers
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/whistleblowing" title="Whistleblowing">
        <span class="text-sm cat-wrap ">
            Whistleblowing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/procurement-oversight" title="Procurement oversight">
        <span class="text-sm cat-wrap ">
            Procurement oversight
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/freedom-of-information" title="Freedom of Information">
        <span class="text-sm cat-wrap ">
            Freedom of Information
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-philanthropy" title="Open philanthropy">
        <span class="text-sm cat-wrap ">
            Open philanthropy
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/budget-explorers" title="Budget explorers">
        <span class="text-sm cat-wrap ">
            Budget explorers
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/report-cards-and-audits" title="Report cards and audits">
        <span class="text-sm cat-wrap ">
            Report cards and audits
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/activism-aggregators" title="Activism aggregators">
        <span class="text-sm cat-wrap ">
            Activism aggregators
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/advocate-to-government" title="Advocate to government">
        <span class="text-sm cat-wrap ">
            Advocate to government
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/help-more-people-run-for-office" title="Help more people run for office">
        <span class="text-sm cat-wrap ">
            Help more people run for office
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/campaigns" title="Campaigns">
        <span class="text-sm cat-wrap ">
            Campaigns
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/distributed-campaigns" title="Distributed campaigns">
        <span class="text-sm cat-wrap ">
            Distributed campaigns
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-activism" title="Data activism">
        <span class="text-sm cat-wrap ">
            Data activism
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/brand-organizing" title="Brand organizing">
        <span class="text-sm cat-wrap ">
            Brand organizing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/artistic-interventions" title="Artistic interventions">
        <span class="text-sm cat-wrap ">
            Artistic interventions
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/group-communication-tools" title="Group communication tools">
        <span class="text-sm cat-wrap ">
            Group communication tools
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/campaign-tools" title="Campaign tools">
        <span class="text-sm cat-wrap ">
            Campaign tools
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/canvassing" title="Canvassing">
        <span class="text-sm cat-wrap ">
            Canvassing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/email-campaign-tools" title="Email campaign tools">
        <span class="text-sm cat-wrap ">
            Email campaign tools
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/peer-to-peer-email" title="Peer to peer email">
        <span class="text-sm cat-wrap ">
            Peer to peer email
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/petitions" title="Petitions">
        <span class="text-sm cat-wrap ">
            Petitions
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/sms" title="SMS">
        <span class="text-sm cat-wrap ">
            SMS
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/peer-to-peer-sms" title="Peer to peer SMS">
        <span class="text-sm cat-wrap ">
            Peer to peer SMS
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/organize-events" title="Organize events">
        <span class="text-sm cat-wrap ">
            Organize events
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/high-tech-civic-tech" title="High-tech civic tech">
        <span class="text-sm cat-wrap ">
            High-tech civic tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/hardware" title="Hardware">
        <span class="text-sm cat-wrap ">
            Hardware
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/ict4d" title="ICT4D">
        <span class="text-sm cat-wrap ">
            ICT4D
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-fabrication" title="Digital fabrication">
        <span class="text-sm cat-wrap ">
            Digital fabrication
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/smartphones" title="Smartphones">
        <span class="text-sm cat-wrap ">
            Smartphones
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/radio" title="Radio">
        <span class="text-sm cat-wrap ">
            Radio
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/drones" title="Drones">
        <span class="text-sm cat-wrap ">
            Drones
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/satellites" title="Satellites">
        <span class="text-sm cat-wrap ">
            Satellites
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/sensors" title="Sensors">
        <span class="text-sm cat-wrap ">
            Sensors
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/chat" title="Chat">
        <span class="text-sm cat-wrap ">
            Chat
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/ubiquitous-computing" title="Ubiquitous computing">
        <span class="text-sm cat-wrap ">
            Ubiquitous computing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/cameras" title="Cameras">
        <span class="text-sm cat-wrap ">
            Cameras
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emtech" title="Emtech">
        <span class="text-sm cat-wrap ">
            Emtech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emerging-tech-conferences" title="Emerging Tech Conferences">
        <span class="text-sm cat-wrap ">
            Emerging Tech Conferences
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emerging-tech-tools" title="Emerging Tech Tools">
        <span class="text-sm cat-wrap ">
            Emerging Tech Tools
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emerging-tech-fellowships" title="Emerging Tech Fellowships">
        <span class="text-sm cat-wrap ">
            Emerging Tech Fellowships
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emerging-tech-organizations" title="Emerging Tech Organizations">
        <span class="text-sm cat-wrap ">
            Emerging Tech Organizations
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emerging-tech-projects" title="Emerging Tech Projects">
        <span class="text-sm cat-wrap ">
            Emerging Tech Projects
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/blockchain" title="Blockchain">
        <span class="text-sm cat-wrap ">
            Blockchain
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/virtual-and-augmented-reality" title="Virtual and augmented reality">
        <span class="text-sm cat-wrap ">
            Virtual and augmented reality
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/robotics" title="Robotics">
        <span class="text-sm cat-wrap ">
            Robotics
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/soft-robotics" title="Soft robotics">
        <span class="text-sm cat-wrap ">
            Soft robotics
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/artificial-intelligence" title="Artificial Intelligence">
        <span class="text-sm cat-wrap ">
            Artificial Intelligence
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/natural-language-processing" title="Natural Language Processing">
        <span class="text-sm cat-wrap ">
            Natural Language Processing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/bots" title="Bots">
        <span class="text-sm cat-wrap ">
            Bots
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/machine-vision" title="Machine vision">
        <span class="text-sm cat-wrap ">
            Machine vision
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/deepfakes" title="Deepfakes">
        <span class="text-sm cat-wrap ">
            Deepfakes
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/algorithmic-transparency" title="Algorithmic transparency">
        <span class="text-sm cat-wrap ">
            Algorithmic transparency
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/machine-learning" title="Machine learning">
        <span class="text-sm cat-wrap ">
            Machine learning
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/deep-learning" title="Deep learning">
        <span class="text-sm cat-wrap ">
            Deep learning
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/machine-learning-analytics" title="Machine learning analytics">
        <span class="text-sm cat-wrap ">
            Machine learning analytics
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/rules-based-solutions" title="Rules-based solutions">
        <span class="text-sm cat-wrap ">
            Rules-based solutions
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/audio-processing" title="Audio processing">
        <span class="text-sm cat-wrap ">
            Audio processing
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/speech-recognition" title="Speech recognition">
        <span class="text-sm cat-wrap ">
            Speech recognition
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/government-ai-strategies" title="Government AI strategies">
        <span class="text-sm cat-wrap ">
            Government AI strategies
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/media" title="Media">
        <span class="text-sm cat-wrap ">
            Media
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/media-and-social-media-analysis" title="Media and social media analysis">
        <span class="text-sm cat-wrap ">
            Media and social media analysis
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/fight-disinformation" title="Fight disinformation">
        <span class="text-sm cat-wrap ">
            Fight disinformation
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/trustmarks" title="Trustmarks">
        <span class="text-sm cat-wrap ">
            Trustmarks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/factchecking" title="Factchecking">
        <span class="text-sm cat-wrap ">
            Factchecking
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/filter-bubble-poppers" title="Filter bubble poppers">
        <span class="text-sm cat-wrap ">
            Filter bubble poppers
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/engagement-journalism" title="Engagement journalism">
        <span class="text-sm cat-wrap ">
            Engagement journalism
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/solutions-journalism" title="Solutions journalism">
        <span class="text-sm cat-wrap ">
            Solutions journalism
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/news-to-action" title="News to action">
        <span class="text-sm cat-wrap ">
            News to action
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/nonprofit-newsrooms" title="Nonprofit newsrooms">
        <span class="text-sm cat-wrap ">
            Nonprofit newsrooms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/opinion-matching" title="Opinion matching">
        <span class="text-sm cat-wrap ">
            Opinion matching
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/hyperlocal-news-and-citizen-media" title="Hyperlocal news and citizen media">
        <span class="text-sm cat-wrap ">
            Hyperlocal news and citizen media
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/participatory-memorials" title="Participatory memorials">
        <span class="text-sm cat-wrap ">
            Participatory memorials
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/newsletter-tech" title="Newsletter tech">
        <span class="text-sm cat-wrap ">
            Newsletter tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/advertising" title="Advertising">
        <span class="text-sm cat-wrap ">
            Advertising
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/games-and-gamification" title="Games and gamification">
        <span class="text-sm cat-wrap ">
            Games and gamification
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/narrative-tech" title="Narrative tech">
        <span class="text-sm cat-wrap ">
            Narrative tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/big-listening" title="Big listening">
        <span class="text-sm cat-wrap ">
            Big listening
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/listening" title="Listening">
        <span class="text-sm cat-wrap ">
            Listening
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/narrative-tech-organizing" title="Narrative tech organizing">
        <span class="text-sm cat-wrap ">
            Narrative tech organizing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/story-based-campaigns" title="Story-based campaigns">
        <span class="text-sm cat-wrap ">
            Story-based campaigns
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/story-tech" title="Story tech">
        <span class="text-sm cat-wrap ">
            Story tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/translation-and-linguistic-representation" title="Translation and linguistic representation">
        <span class="text-sm cat-wrap ">
            Translation and linguistic representation
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/govtech" title="Govtech">
        <span class="text-sm cat-wrap ">
            Govtech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/judicial" title="Judicial">
        <span class="text-sm cat-wrap ">
            Judicial
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/innovation-capacity" title="Innovation capacity">
        <span class="text-sm cat-wrap ">
            Innovation capacity
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/monitoring-services" title="Monitoring services">
        <span class="text-sm cat-wrap ">
            Monitoring services
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/communicating-with-the-people" title="Communicating with the people">
        <span class="text-sm cat-wrap ">
            Communicating with the people
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/public-project-trackers" title="Public project trackers">
        <span class="text-sm cat-wrap ">
            Public project trackers
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/public-sentiment-tools" title="Public sentiment tools">
        <span class="text-sm cat-wrap ">
            Public sentiment tools
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/service-alerts" title="Service alerts">
        <span class="text-sm cat-wrap ">
            Service alerts
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/remote-government" title="Remote government">
        <span class="text-sm cat-wrap ">
            Remote government
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/communicating-with-the-government" title="Communicating with the government">
        <span class="text-sm cat-wrap ">
            Communicating with the government
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/issue-reporting" title="Issue reporting">
        <span class="text-sm cat-wrap ">
            Issue reporting
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/government-trainings" title="Government trainings">
        <span class="text-sm cat-wrap ">
            Government trainings
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/behavioral-economics-programs" title="Behavioral economics programs">
        <span class="text-sm cat-wrap ">
            Behavioral economics programs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/government-innovation-units" title="Government innovation units">
        <span class="text-sm cat-wrap ">
            Government innovation units
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/marketplaces-and-clearinghouses" title="Marketplaces and clearinghouses">
        <span class="text-sm cat-wrap ">
            Marketplaces and clearinghouses
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-standards" title="Digital standards">
        <span class="text-sm cat-wrap ">
            Digital standards
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/justice-tech" title="Justice tech">
        <span class="text-sm cat-wrap ">
            Justice tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/govtech-vendors" title="Govtech vendors">
        <span class="text-sm cat-wrap ">
            Govtech vendors
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/bureaucracy-tech" title="Bureaucracy tech">
        <span class="text-sm cat-wrap ">
            Bureaucracy tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/forms" title="Forms">
        <span class="text-sm cat-wrap ">
            Forms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/emergency-services" title="Emergency services">
        <span class="text-sm cat-wrap ">
            Emergency services
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/regulation" title="Regulation">
        <span class="text-sm cat-wrap ">
            Regulation
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/public-records" title="Public records">
        <span class="text-sm cat-wrap ">
            Public records
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/service-delivery" title="Service delivery">
        <span class="text-sm cat-wrap ">
            Service delivery
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/procurement" title="Procurement">
        <span class="text-sm cat-wrap ">
            Procurement
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-governance-initiatives" title="Open governance initiatives">
        <span class="text-sm cat-wrap ">
            Open governance initiatives
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tech-policy" title="Tech Policy">
        <span class="text-sm cat-wrap ">
            Tech Policy
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-transition" title="Digital transition">
        <span class="text-sm cat-wrap ">
            Digital transition
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/state-and-regional-government-technology" title="State and regional government technology">
        <span class="text-sm cat-wrap ">
            State and regional government technology
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/identity" title="Identity">
        <span class="text-sm cat-wrap ">
            Identity
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-data" title="Civic data">
        <span class="text-sm cat-wrap ">
            Civic data
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-analysis" title="Data analysis">
        <span class="text-sm cat-wrap ">
            Data analysis
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-data-apis" title="Civic data APIs">
        <span class="text-sm cat-wrap ">
            Civic data APIs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-visualization-tools-and-platforms" title="Data visualization tools and platforms">
        <span class="text-sm cat-wrap ">
            Data visualization tools and platforms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/archives" title="Archives">
        <span class="text-sm cat-wrap ">
            Archives
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-data-publishing-portals" title="Open data publishing portals">
        <span class="text-sm cat-wrap ">
            Open data publishing portals
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-government-data" title="Open government data">
        <span class="text-sm cat-wrap ">
            Open government data
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-data-platforms" title="Open data platforms">
        <span class="text-sm cat-wrap ">
            Open data platforms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-science-for-social-good" title="Data science for social good">
        <span class="text-sm cat-wrap ">
            Data science for social good
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-schemas-and-standards" title="Data schemas and standards">
        <span class="text-sm cat-wrap ">
            Data schemas and standards
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/crowdsourced-data-collection" title="Crowdsourced data collection">
        <span class="text-sm cat-wrap ">
            Crowdsourced data collection
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-data-publishing-platforms" title="Open data publishing platforms">
        <span class="text-sm cat-wrap ">
            Open data publishing platforms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-visualization" title="Data visualization">
        <span class="text-sm cat-wrap ">
            Data visualization
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/carbon-calculators" title="Carbon calculators">
        <span class="text-sm cat-wrap ">
            Carbon calculators
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/dashboards" title="Dashboards">
        <span class="text-sm cat-wrap ">
            Dashboards
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/network-visualizations" title="Network visualizations">
        <span class="text-sm cat-wrap ">
            Network visualizations
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/mapping" title="Mapping">
        <span class="text-sm cat-wrap ">
            Mapping
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-maps" title="Civic maps">
        <span class="text-sm cat-wrap ">
            Civic maps
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/mapping-tools" title="Mapping tools">
        <span class="text-sm cat-wrap ">
            Mapping tools
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/location" title="Location">
        <span class="text-sm cat-wrap ">
            Location
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/mapping-platforms" title="Mapping platforms">
        <span class="text-sm cat-wrap ">
            Mapping platforms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/data-sourcing" title="Data sourcing">
        <span class="text-sm cat-wrap ">
            Data sourcing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-submenu ">
                <a class="nav-link overlay" href="/listing-category/the-people" title="The People">
                    <span class="text-sm cat-wrap ">
                        The People
                    </span>
                </a>
                <a class="nav-link submenu-button ">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="submenu collapse ">
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/evaluate-impact" title="Evaluate impact">
        <span class="text-sm cat-wrap ">
            Evaluate impact
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/benchmarks" title="Benchmarks">
        <span class="text-sm cat-wrap ">
            Benchmarks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/indicators" title="Indicators">
        <span class="text-sm cat-wrap ">
            Indicators
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/certifications" title="Certifications">
        <span class="text-sm cat-wrap ">
            Certifications
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/needs-assessment" title="Needs assessment">
        <span class="text-sm cat-wrap ">
            Needs assessment
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/externalities-of-tech" title="Externalities of tech">
        <span class="text-sm cat-wrap ">
            Externalities of tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/responsible-tech" title="Responsible tech">
        <span class="text-sm cat-wrap ">
            Responsible tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/get-funding" title="Get funding">
        <span class="text-sm cat-wrap ">
            Get funding
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/funders-donors" title="Funders &amp; donors">
        <span class="text-sm cat-wrap ">
            Funders &amp; donors
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/challenges" title="Challenges">
        <span class="text-sm cat-wrap ">
            Challenges
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/funder-initiatives" title="Funder initiatives">
        <span class="text-sm cat-wrap ">
            Funder initiatives
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/grants" title="Grants">
        <span class="text-sm cat-wrap ">
            Grants
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/competitions" title="Competitions">
        <span class="text-sm cat-wrap ">
            Competitions
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/fundraising" title="Fundraising">
        <span class="text-sm cat-wrap ">
            Fundraising
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/foundation-initiatives" title="Foundation initiatives">
        <span class="text-sm cat-wrap ">
            Foundation initiatives
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/build-something" title="Build something">
        <span class="text-sm cat-wrap ">
            Build something
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/user-research" title="User research">
        <span class="text-sm cat-wrap ">
            User research
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/user-research-groups" title="User research groups">
        <span class="text-sm cat-wrap ">
            User research groups
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/social-impact-design-firms" title="Social impact design firms">
        <span class="text-sm cat-wrap ">
            Social impact design firms
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/co-design" title="Co-design">
        <span class="text-sm cat-wrap ">
            Co-design
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tech-companies-with-civic-teams" title="Tech companies with civic teams">
        <span class="text-sm cat-wrap ">
            Tech companies with civic teams
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-features" title="Civic features">
        <span class="text-sm cat-wrap ">
            Civic features
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/accelerators" title="Accelerators">
        <span class="text-sm cat-wrap ">
            Accelerators
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tech-roadmaps" title="Tech roadmaps">
        <span class="text-sm cat-wrap ">
            Tech roadmaps
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/toolkits" title="Toolkits">
        <span class="text-sm cat-wrap ">
            Toolkits
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/innovation-teams-labs" title="Innovation teams &amp; Labs">
        <span class="text-sm cat-wrap ">
            Innovation teams &amp; Labs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/public-private-partnerships" title="Public Private Partnerships">
        <span class="text-sm cat-wrap ">
            Public Private Partnerships
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-hackathons" title="Civic hackathons">
        <span class="text-sm cat-wrap ">
            Civic hackathons
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/playbooks-and-design-principles" title="Playbooks and design principles">
        <span class="text-sm cat-wrap ">
            Playbooks and design principles
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/building-inside-government" title="Building inside government">
        <span class="text-sm cat-wrap ">
            Building inside government
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/incubators" title="Incubators">
        <span class="text-sm cat-wrap ">
            Incubators
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/design" title="Design">
        <span class="text-sm cat-wrap ">
            Design
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/user-experience" title="User experience">
        <span class="text-sm cat-wrap ">
            User experience
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/campaign-organizations" title="Campaign organizations">
        <span class="text-sm cat-wrap ">
            Campaign organizations
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/building-in-the-private-sector" title="Building in the private sector">
        <span class="text-sm cat-wrap ">
            Building in the private sector
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-and-social-impact-companies" title="Civic and social impact companies">
        <span class="text-sm cat-wrap ">
            Civic and social impact companies
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/supporting-specific-public-sector-efforts-from-outside-government" title="Supporting specific public sector efforts from outside government">
        <span class="text-sm cat-wrap ">
            Supporting specific public sector efforts from outside government
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/innovation-teams-and-labs" title="Innovation teams and labs">
        <span class="text-sm cat-wrap ">
            Innovation teams and labs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/fieldwide-resources" title="Fieldwide resources">
        <span class="text-sm cat-wrap ">
            Fieldwide resources
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/holidays" title="Holidays">
        <span class="text-sm cat-wrap ">
            Holidays
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/awards-and-prizes" title="Awards and prizes">
        <span class="text-sm cat-wrap ">
            Awards and prizes
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-tech-community-surveys" title="Civic tech community surveys">
        <span class="text-sm cat-wrap ">
            Civic tech community surveys
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/active-battles" title="Active battles">
        <span class="text-sm cat-wrap ">
            Active battles
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/net-neutrality" title="Net neutrality">
        <span class="text-sm cat-wrap ">
            Net neutrality
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/manifestos" title="Manifestos">
        <span class="text-sm cat-wrap ">
            Manifestos
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tech-ethics" title="Tech ethics">
        <span class="text-sm cat-wrap ">
            Tech ethics
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/information-security" title="Information security">
        <span class="text-sm cat-wrap ">
            Information security
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-rights" title="Digital rights">
        <span class="text-sm cat-wrap ">
            Digital rights
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/government-tech-capacity" title="Government tech capacity">
        <span class="text-sm cat-wrap ">
            Government tech capacity
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/computer-assisted-gerrymandering" title="Computer-assisted gerrymandering">
        <span class="text-sm cat-wrap ">
            Computer-assisted gerrymandering
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/government-transparency" title="Government transparency">
        <span class="text-sm cat-wrap ">
            Government transparency
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-tech-legislation" title="Civic tech legislation">
        <span class="text-sm cat-wrap ">
            Civic tech legislation
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/help-out" title="Help out">
        <span class="text-sm cat-wrap ">
            Help out
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-source-developer-networks" title="Open source developer networks">
        <span class="text-sm cat-wrap ">
            Open source developer networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/pro-bono-and-volunteer" title="Pro bono and volunteer">
        <span class="text-sm cat-wrap ">
            Pro bono and volunteer
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/mutual-aid" title="Mutual aid">
        <span class="text-sm cat-wrap ">
            Mutual aid
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tech-translators-and-intermediaries" title="Tech translators and intermediaries">
        <span class="text-sm cat-wrap ">
            Tech translators and intermediaries
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/support-civic-projects-with-tech" title="Support civic projects with tech">
        <span class="text-sm cat-wrap ">
            Support civic projects with tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/meet-the-others" title="Meet the others">
        <span class="text-sm cat-wrap ">
            Meet the others
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-hacking-meetups" title="Civic hacking meetups">
        <span class="text-sm cat-wrap ">
            Civic hacking meetups
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/in-person" title="In person">
        <span class="text-sm cat-wrap ">
            In person
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/workshops" title="Workshops">
        <span class="text-sm cat-wrap ">
            Workshops
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/roundtables" title="Roundtables">
        <span class="text-sm cat-wrap ">
            Roundtables
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/working-groups" title="Working groups">
        <span class="text-sm cat-wrap ">
            Working groups
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/in-person-meetings" title="In-person meetings">
        <span class="text-sm cat-wrap ">
            In-person meetings
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/conferences" title="Conferences">
        <span class="text-sm cat-wrap ">
            Conferences
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/hubs" title="Hubs">
        <span class="text-sm cat-wrap ">
            Hubs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/socialize-online" title="Socialize online">
        <span class="text-sm cat-wrap ">
            Socialize online
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/peer-networks" title="Peer networks">
        <span class="text-sm cat-wrap ">
            Peer networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-source-networks" title="Open source networks">
        <span class="text-sm cat-wrap ">
            Open source networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/partner-networks" title="Partner networks">
        <span class="text-sm cat-wrap ">
            Partner networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/backchannels" title="Backchannels">
        <span class="text-sm cat-wrap ">
            Backchannels
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/listservs" title="Listservs">
        <span class="text-sm cat-wrap ">
            Listservs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/and-slacks" title="and Slacks">
        <span class="text-sm cat-wrap ">
            and Slacks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-tech-forums" title="Civic tech forums">
        <span class="text-sm cat-wrap ">
            Civic tech forums
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/solidarity-networks" title="Solidarity networks">
        <span class="text-sm cat-wrap ">
            Solidarity networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/alliances" title="Alliances">
        <span class="text-sm cat-wrap ">
            Alliances
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/learn-about-civic-tech" title="Learn about civic tech">
        <span class="text-sm cat-wrap ">
            Learn about civic tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/glossaries" title="Glossaries">
        <span class="text-sm cat-wrap ">
            Glossaries
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-imagination" title="Civic imagination">
        <span class="text-sm cat-wrap ">
            Civic imagination
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-tech-catalogs" title="Civic tech catalogs">
        <span class="text-sm cat-wrap ">
            Civic tech catalogs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/courses" title="Courses">
        <span class="text-sm cat-wrap ">
            Courses
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/applied-learning" title="Applied Learning">
        <span class="text-sm cat-wrap ">
            Applied Learning
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/trade-groups" title="Trade groups">
        <span class="text-sm cat-wrap ">
            Trade groups
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-fiction" title="Civic fiction">
        <span class="text-sm cat-wrap ">
            Civic fiction
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/reading-lists" title="Reading lists">
        <span class="text-sm cat-wrap ">
            Reading lists
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/defining-the-field" title="Defining the field">
        <span class="text-sm cat-wrap ">
            Defining the field
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/newsletters" title="Newsletters">
        <span class="text-sm cat-wrap ">
            Newsletters
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/podcasts" title="Podcasts">
        <span class="text-sm cat-wrap ">
            Podcasts
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/news-and-blogs" title="News and blogs">
        <span class="text-sm cat-wrap ">
            News and blogs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/books" title="Books">
        <span class="text-sm cat-wrap ">
            Books
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-tech-media-coverage" title="Civic tech media coverage">
        <span class="text-sm cat-wrap ">
            Civic tech media coverage
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/academic-programs" title="Academic programs">
        <span class="text-sm cat-wrap ">
            Academic programs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/peer-reviewed-research" title="Peer-reviewed research">
        <span class="text-sm cat-wrap ">
            Peer-reviewed research
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/research-and-policy-centers" title="Research and policy centers">
        <span class="text-sm cat-wrap ">
            Research and policy centers
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/journals" title="Journals">
        <span class="text-sm cat-wrap ">
            Journals
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/walking-tours" title="Walking tours">
        <span class="text-sm cat-wrap ">
            Walking tours
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/reports" title="Reports">
        <span class="text-sm cat-wrap ">
            Reports
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/phd-program" title="Phd Program">
        <span class="text-sm cat-wrap ">
            Phd Program
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/degree-programs" title="Degree programs">
        <span class="text-sm cat-wrap ">
            Degree programs
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/shows-and-films" title="Shows and films">
        <span class="text-sm cat-wrap ">
            Shows and films
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/find-a-job-or-hire-someone" title="Find a job or hire someone">
        <span class="text-sm cat-wrap ">
            Find a job or hire someone
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/fellowships" title="Fellowships">
        <span class="text-sm cat-wrap ">
            Fellowships
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/recruitment-campaigns" title="Recruitment campaigns">
        <span class="text-sm cat-wrap ">
            Recruitment campaigns
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/keywords" title="Keywords">
        <span class="text-sm cat-wrap ">
            Keywords
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/job-boards" title="Job boards">
        <span class="text-sm cat-wrap ">
            Job boards
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/job-board" title="Job Board">
        <span class="text-sm cat-wrap ">
            Job Board
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-submenu ">
                <a class="nav-link overlay" href="/listing-category/adjacent-fields" title="Adjacent Fields">
                    <span class="text-sm cat-wrap ">
                        Adjacent Fields
                    </span>
                </a>
                <a class="nav-link submenu-button ">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="submenu collapse ">
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/foundational-layers" title="Foundational layers">
        <span class="text-sm cat-wrap ">
            Foundational layers
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/internet-governance" title="Internet governance">
        <span class="text-sm cat-wrap ">
            Internet governance
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-internet" title="Open internet">
        <span class="text-sm cat-wrap ">
            Open internet
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/diversity-inclusion" title="Diversity &amp; Inclusion">
        <span class="text-sm cat-wrap ">
            Diversity &amp; Inclusion
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/connectivity" title="Connectivity">
        <span class="text-sm cat-wrap ">
            Connectivity
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/community-wifi" title="Community wifi">
        <span class="text-sm cat-wrap ">
            Community wifi
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/civic-literacy" title="Civic literacy">
        <span class="text-sm cat-wrap ">
            Civic literacy
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/assistive-and-accessible-tech" title="Assistive and Accessible Tech">
        <span class="text-sm cat-wrap ">
            Assistive and Accessible Tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/inclusivity" title="Inclusivity">
        <span class="text-sm cat-wrap ">
            Inclusivity
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-literacy" title="Digital literacy">
        <span class="text-sm cat-wrap ">
            Digital literacy
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/related-tech-for-public-good" title="Related tech for public good">
        <span class="text-sm cat-wrap ">
            Related tech for public good
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/fintech-for-low-income-communities" title="Fintech for low income communities">
        <span class="text-sm cat-wrap ">
            Fintech for low income communities
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/information-and-communication-technologies-for-development-ict4d" title="Information and Communication Technologies for Development (ICT4D)">
        <span class="text-sm cat-wrap ">
            Information and Communication Technologies for Development (ICT4D)
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-security-and-privacy" title="Digital security and privacy">
        <span class="text-sm cat-wrap ">
            Digital security and privacy
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/circumvention-tech" title="Circumvention tech">
        <span class="text-sm cat-wrap ">
            Circumvention tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/ethical-tech" title="Ethical tech">
        <span class="text-sm cat-wrap ">
            Ethical tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/digital-public-infrastructure" title="Digital Public Infrastructure">
        <span class="text-sm cat-wrap ">
            Digital Public Infrastructure
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/decentralized-web" title="Decentralized web">
        <span class="text-sm cat-wrap ">
            Decentralized web
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/decentralization" title="Decentralization">
        <span class="text-sm cat-wrap ">
            Decentralization
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/tech-for-public-challenges" title="Tech for public challenges">
        <span class="text-sm cat-wrap ">
            Tech for public challenges
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/legal-tech" title="Legal tech">
        <span class="text-sm cat-wrap ">
            Legal tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/housing" title="Housing">
        <span class="text-sm cat-wrap ">
            Housing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/disaster-response-and-humanitarian-tech" title="Disaster response and humanitarian tech">
        <span class="text-sm cat-wrap ">
            Disaster response and humanitarian tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/participatory-aid" title="Participatory aid">
        <span class="text-sm cat-wrap ">
            Participatory aid
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/job-matching" title="Job-matching">
        <span class="text-sm cat-wrap ">
            Job-matching
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/open-innovation" title="Open innovation">
        <span class="text-sm cat-wrap ">
            Open innovation
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/crowdsourcing" title="Crowdsourcing">
        <span class="text-sm cat-wrap ">
            Crowdsourcing
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/expert-networks" title="Expert networks">
        <span class="text-sm cat-wrap ">
            Expert networks
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/nonprofit-tech" title="Nonprofit tech">
        <span class="text-sm cat-wrap ">
            Nonprofit tech
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/crm" title="CRM">
        <span class="text-sm cat-wrap ">
            CRM
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/citizen-science" title="Citizen science">
        <span class="text-sm cat-wrap ">
            Citizen science
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/platform-coops" title="Platform coops">
        <span class="text-sm cat-wrap ">
            Platform coops
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                            </ul>
                            </li>
                    <li class="nav-item has-submenu ">
                <a class="nav-link overlay" href="/listing-category/more" title="More">
                    <span class="text-sm cat-wrap ">
                        More
                    </span>
                </a>
                <a class="nav-link submenu-button ">
                    <span class="text-sm" style="margin-top: -15px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
                </a>
                                    <ul class="submenu collapse ">
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/active-battles-in-civic-tech" title="Active battles in civic tech">
        <span class="text-sm cat-wrap ">
            Active battles in civic tech
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/special-coverage" title="Special coverage">
        <span class="text-sm cat-wrap ">
            Special coverage
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/predecessors" title="Predecessors">
        <span class="text-sm cat-wrap ">
            Predecessors
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/views-to-votes-us" title="Views to votes US">
        <span class="text-sm cat-wrap ">
            Views to votes US
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/coronavirus" title="Coronavirus">
        <span class="text-sm cat-wrap ">
            Coronavirus
        </span>
    </a>
            <a class="nav-link submenu-button ">
            <span class="text-sm" style="margin-top: -15px !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"  style="margin-top: -15px !important;">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
                <ul class="submenu collapse ">
                                                <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/coronavirus-data-projects" title="Coronavirus Data Projects">
        <span class="text-sm cat-wrap ">
            Coronavirus Data Projects
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/coronavirus-government-projects" title="Coronavirus Government Projects">
        <span class="text-sm cat-wrap ">
            Coronavirus Government Projects
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/coronavirus-organizing-projects" title="Coronavirus Organizing Projects">
        <span class="text-sm cat-wrap ">
            Coronavirus Organizing Projects
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/high-tech-coronavirus-interventions" title="High-tech Coronavirus Interventions">
        <span class="text-sm cat-wrap ">
            High-tech Coronavirus Interventions
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/coronavirus-media-projects" title="Coronavirus Media Projects">
        <span class="text-sm cat-wrap ">
            Coronavirus Media Projects
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/coronavirus-engagement-projects" title="Coronavirus Engagement Projects">
        <span class="text-sm cat-wrap ">
            Coronavirus Engagement Projects
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/narrative-tech-featured" title="Narrative tech featured">
        <span class="text-sm cat-wrap ">
            Narrative tech featured
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/voter-registration-us" title="Voter-registration-US">
        <span class="text-sm cat-wrap ">
            Voter-registration-US
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/graveyard" title="Graveyard">
        <span class="text-sm cat-wrap ">
            Graveyard
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                                    <li class="nav-item has-submenu ">
    <a class="nav-link overlay" href="/listing-category/engagement" title="Engagement">
        <span class="text-sm cat-wrap ">
            Engagement
        </span>
    </a>
                <ul class="submenu collapse ">
                    </ul>
    </li>
                                            </ul>
                            </li>
            </ul>
</nav>

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

