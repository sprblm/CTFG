@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 padding-right-30">
            <div class="listings-container list-layout">
                <h2>About Us</h2>
                <p>
                    The Civic Tech Field Guide is curated by <a href="https://twitter.com/mstem" style="color: #1d9bf0;">Matt Stempeck</a>, <a href="https://twitter.com/mlsif" style="color: #1d9bf0;">Micah Sifry</a>, and <a href="https://civictech.guide/submit-listing/" style="color: #1d9bf0;">people like you</a>. You can learn about <a href="https://blogs.microsoft.com/on-the-issues/2016/04/27/towards-taxonomy-civic-technology/" style="color: #1d9bf0;">the original motivations for this project</a>.
                </p>
                <p>
                    The Field Guide is an independent project supported by <a href="https://knightfoundation.org/" style="color: #1d9bf0;">Knight Foundation</a> and <a href="https://luminategroup.com/" style="color: #1d9bf0;">Luminate</a>. <a href="http://civichall.org/" style="color: #1d9bf0;">Civic Hall</a> is our Founding Organization.
                </p>
                <p>
                    <a href="https://twitter.com/esmpsn?lang=en" style="color: #1d9bf0;">Erin Simpson</a> helped create <a href="https://bit.ly/organizecivictech" style="color: #1d9bf0;">the first version of this guide</a>.
                </p>
                <p>
                    We benefit from expert curators who help us stay apprised of their areas of expertise and domains within civic tech.
                </p>
                <p>
                    They are:<br>
                    Drones for Good: Fatima Sarah Khalid<br>
                    Get social benefits: Greg Bloom<br>
                    Civic data: Deblina Mukherjee<br>
                    Connectivity: Georgia Bullen<br>
                    Promise trackers: Farhad Souzanchi

                </p>
                <p>
                    Colombia: Juliana Uribe Villegas<br>
                    Iran: Feiredoon Bashar and ASL19<br>
                    Chile: Auska Ovando<br>
                    Poland: Aleksandra Kamihska<br>
                    Paris and France: Clémence Pène<br>
                    Australia: The Code for Australia team<br>
                    South Africa: Melissa Zisengwe and Lailah Ryklief<br>
                    Tunisia: Wafa Ben-Hassine<br>
                    United Kingdom: Gemma Humphrys and the mySociety team<br>
                    México: Alma Rangel and the Codeando México team<br>
                    Washington, DC: Meag Doherty<br>
                    Thailand: Opendream<br>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="sidebar">
                <div class="widget margin-bottom-40">
                    <img src="{{ asset('images/about.png') }}" alt="Matt Stempeck bows at the Innovation Alter of 3m Post-It notes">
                </div>
            </div>
        </div>

    </div>
@endsection