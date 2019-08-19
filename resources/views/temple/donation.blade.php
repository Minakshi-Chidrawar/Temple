@extends('master.layout')

@section('content')
<div class="back-color">
    <div class="container pt-4 pb-4">
        <h1>Donation</h1>
        <div class="bs-callout">                            
            <p>
                There is a saying - <b>There is no better donation than feeding a soul.</b> You can help us by donating money and/or your volunteering service in temple, in office administration, collection of charitable donations and spreading the word about our mission.
            </p>
            <p>
                As the <a href="images/Proposed_Temple_Plan.jpg" target="_blank">extension of the temple</a> is being finalised we are looking for funding and sponsorships. Charity begins at home but should not stop there. An extension means more space opening doors to more activities for the elderly and children. Our music classes, language classes, singing classes and yoga sessions will be more comfortable. We will be able to accommodate more people during the festive season, thus moving forward. We are actively raising funds to ensure we can do all we can for the less fortunate and the elderly.
            </p>
            <p>
                The day after Navratri, that is the 10th day after Ashwina, is Dussera when we celebrate the victory of Lord Rama over Ravana. Ravana is burnt in his effigy; often, giant dummies of Ravana stuffed with fireworks are shot with arrows until they blow up before a large, applauding audience.
            </p>
            <p>
                Working together for the community, we should encourage young and old to ensure community bonds and togetherness. &nbsp;Traditions are beginning to fade and involving the younger generations will ensure the continuity of our traditions. We ought to work together as a family. Everyone has something to contribute and working together we can build on the strength of the community. We are actively looking for volunteers to help us run this charity. Together we make great things happen, even the unexpected. Shared experiences are a great way to build closer relationships. Resolve to get involved now, start with a small commitment, Share your time, skills and abilities and follow through to make a difference.
            </p>
            <p>
                By your donations and in any help to the Mandir, you will obtain blessings in disguise. Here are the options for donation to the Mandir.
            </p>
            <p>
                <b>1) Check Payment: </b>Please make check payable to “Adhya Shakti Mataji Temple” and post it to our registered charity address or temple address as mentioned in <a href="{{route('contact')}}">Contact Us</a> page. 
            </p>
            <p>
                <b>2) Standing Order: </b>You can setup a standing order of &#163;10 per month (or any other amount). Please download attached <a href="docs/Standing%20Order%202.pdf"  target="_blank">Standing Order Form</a> and post it to our registered charity address or temple address as mentioned in Contact Us page. 
            </p>
            <p>
                <b>3) Online Donation: </b>
            </p>
            <p>
                <ul>
                    <li type="a" style="margin-bottom: 25px;">You can now make 100% Secure Online Donation to Mataji’s Temple via PayPal.
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="YLGA5RJYSERJA">
                            <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal — The safer, easier way to pay online.">
                            <img alt="" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </li>
                    <li type="a">easyfundraising: <a href="{{route('easyFundRaising')}}" title="easyfundraising"><b><u>Procedure</u></b></a></li>
                </ul>
            </p>
            <p>
                <img src="images/giftaid.png" width="112" height="48" alt="Gift Aid" class="giftaid">Gift Aid it and make your donation worth more to Mataji&#39;s Temple at no extra cost to yourself! Download <a href="wpdocs/Gift_Aid.pdf"  target="_blank">Gift Aid Declaration Form</a> and send it to us along with your donation.
            </p>
            <p>
                Our Registered Charity can claim back the tax paid on donations from the HMRC. The money that you donate to the charity is money that you have already paid tax on, so by Gift- Aiding it, we can reclaim that tax. Gift Aid is calculated at the basic- rate taxpayer’s pay, which is currently 20%.
            </p>
            <p>
                To donate under the Gift Aid scheme you must be a UK taxpayer and have paid sufficient tax (as income tax and/or capital gains tax) to cover the amount that will be claimed by the charity in each tax year.
            </p>
            <p>
                Using Gift Aid means that for every &#163;1 you give, the charity can claim an extra 25p. So, for every &#163;100 you donate to Mataji&#39;s Temple we will be able to reclaim a further &#163;25 from HMRC.
            </p>
            <p>
                <b>4) &nbsp;Following items are currently required for Temple:</b>
            </p>
            <p>
                <ul type="disc">
                    <li>Items required for temple: <a href="wpdocs/Mandir Requirements.pdf"  target="_blank">List</a></li>
                    <li>Temple's extension - <a  class="btn-service" href="{{route('templeExtension')}}">Details of extension</a></li>
                </ul>
            </p>
            <p class="thank-you">
                Thank you very much for your kind support. <br>|| Jai Mataji ||
            </p>
        </div>
    </div>
</div>
@endsection