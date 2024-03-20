@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
    <h1>
        Terms and Conditions
    </h1>
    <div>

        <p>
            Welcome to Ideas!
        </p>
        <p>
            These terms and conditions outline the rules and regulations for the use of Ideas's Website, located at
            https://ideas.com.
        </p>
        <p>
            By accessing this website we assume you accept these terms and conditions. Do not continue to use Ideas if you
            do not agree to take all of the terms and conditions stated on this page.
        </p>
        <p>
            The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and
            all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the
            Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company.
            "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer,
            acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in
            the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of
            the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of
            the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken
            as interchangeable and therefore as referring to same.
        </p>
        <h2>
            Cookies
        </h2>
        <p>
            We employ the use of cookies. By accessing Ideas, you agreed to use cookies in agreement with the Ideas's
            Privacy Policy.
        </p>
        <p>
            Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used
            by our website to enable the functionality of certain areas to make it easier for people visiting our website.
            Some of our affiliate/advertising partners may also use cookies.
        </p>
        <h2>
            Licenses
        </h2>
        <p>
            Unless otherwise stated, Ideas and/or its licensors own the intellectual property rights for all material on
            Ideas. All intellectual property rights are reserved. You may access this from Ideas for your own personal use
            subjected to restrictions set in these terms and conditions.
        </p>
        <p>
            You must not: Republish material from Ideas; Sell, rent or sub-license material from Ideas; Reproduce,
            duplicate or copy material from Ideas; Redistribute content from Ideas; This Agreement shall begin on the
            date hereof.
        </p>
        </div>
    </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
