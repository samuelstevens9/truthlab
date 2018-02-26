<?php

/**
 * Template Name: About Us
 *
 * @package Truthlab
 */

get_header();
$user_agent = $_SERVER[ 'HTTP_USER_AGENT' ];
$is_ie      = preg_match( '/Edge/i', $user_agent ) || preg_match( '/Trident/i', $user_agent );

?>

    <section id="hero" class="">
        <h1 class="front">JOURNEY</h1>
        <h3 class="back">We're all about the journey</h3>
    </section>

    <div class="angle-shadow"></div>

    <div id="mission">
        <section id="heading">
            <div class="row--padded">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading">
                            <h1>We help B2B companies become Customer Champions</h1>
                            <p>Truthlab’s CXM platform orchestrates the collection and analysis of disparate customer
                                data
                                and instantly transforms it into actionable insights.</p>
                            <p>Our aim is to help companies win in the new Experience Economy by helping them to create
                                better, more profitable customer relationships. Truthlab’s CXM platform enables
                                companies to orchestrate the collection, analysis and storage of structured and
                                unstructured data that is essential to delivering amazing experiences across the entire
                                customer journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="cta">
        <div class="container-fluid">
            <div class="row--padded row cta__blue" style="margin-bottom:0px;">
                <div class="text-center col-xs-12">
                    <h2>A Rising Tide...</h2>
                    <p>Your success is our success. Our team is dedicated to helping you
                        build and deliver extraordinary customer experiences that drive winning brands.</p>
                </div>
            </div>
        </div>
    </section>

    <div id="leadership">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section__title">Leadership</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section id="team-left">
                    <div class="hexagon"
                         data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/about/hexagon.png"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/about/hexagon.png');"></div>
                    <div class="profile-image"
                         data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/about/patrick.png"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/about/patrick.png');"></div>
                    <div class="row profile__wrapper">
                        <div class="col-md-10 col-md-offset-2 profile">
                            <div class="rectangle--red"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h1>Patrick Donnelly</h1>
                                    <h2>CEO &amp; Co-Founder</h2>
                                </div>
                                <div class="col-md-4 col-xs-12 social">
									<?php if ( $is_ie ): ?>
                                        <ul>
                                            <li>
                                                <a href="https://www.linkedin.com/in/patrickdonnelly/"
                                                   target="_blank">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.png"
                                                         height="40" style="height:40px !important;"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/truthlabtech/"
                                                   target="_blank">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png"
                                                         height="40" style="height:40px !important;"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/DonnellyPatrick" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png"
                                                         height="40" style="height:40px !important;"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://plus.google.com/109045923061674684524"
                                                   target="_blank">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/google-plus.png"
                                                         height="40" style="height:40px !important;"/>
                                                </a>
                                            </li>
                                        </ul>
									<?php else: ?>
                                        <ul>
                                            <li>
                                                <a href="https://www.linkedin.com/in/patrickdonnelly/"
                                                   target="_blank">
                                                    <i class="fa fa-linkedin-square fa-2x"
                                                       aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/DonnellyPatrick" target="_blank">
                                                    <i class="fa fa-twitter-square fa-2x"
                                                       aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://plus.google.com/109045923061674684524"
                                                   target="_blank">
                                                    <i class="fa fa-google-plus-square fa-2x"
                                                       aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
									<?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel-group" id="accordion">
                                        <div class="accordion-toggle" data-toggle="collapse"
                                             data-parent="#accordion"
                                             href="#collapseOne">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <div class="accordion-toggle"><?php if ( FALSE ): ?>
                                                                <div class="text-right"><img
                                                                        src="<?php echo get_template_directory_uri() ?>/assets/img/down-triangle.png"
                                                                        height="35"
                                                                        style="height:35px !important;"/>
                                                                </div><?php endif; ?></div>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne"
                                                     class="<?php if ( ! $is_ie ): ?>panel-collapse collapse<?php endif; ?>">
                                                    <div class="panel-body">
                                                        <div class="container">
                                                            <p>A leader with a mean golf swing and a fresh
                                                                perspective, Patrick is a proud dad with coaching
                                                                skills on and off the field. Formerly VP of Sales at
                                                                Marketo, he has more than 20 years of experience in
                                                                software industry leadership. Patrick is dedicated
                                                                to helping Truthlab’s customers create amazing
                                                                customer experiences.</p>
                                                            <p>Patrick is obsessed with making it easier and faster
                                                                for companies to create and actually use customer
                                                                insights. The Truthlab Customer Experience Platform
                                                                enables you to instantly capture and analyze
                                                                customer experience data and integrate the insights
                                                                into every interaction with your customers,
                                                                employees and partners.</p>
                                                            <p>Truthlab is taking a fresh look at nearly every
                                                                aspect of the digital customer experience.
                                                                Currently, it’s too difficult and time consuming to
                                                                transform massive volumes of customer data into
                                                                truly actionable insights. The Truthlab CXM platform
                                                                is fixing this problem.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section id="team-right">
                    <div class="hexagon"
                         data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/about/hexagon-red.png"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/about/hexagon-red.png');"></div>
                    <div class="profile-image"
                         data-background-src="<?php echo get_template_directory_uri() ?>/assets/img/about/scott.png"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/about/scott.png');"></div>
                    <div class="container-fluid">
                        <div class="row profile__wrapper">
                            <div class="col-md-10 profile">
                                <div class="rectangle--blue"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h1>Scott Hutchins</h1>
                                        <h2>Co-Founder</h2>
                                    </div>
                                    <div class="col-md-4 col-xs-12 social">
										<?php if ( $is_ie ): ?>
                                            <ul>
                                                <li><a href="https://www.linkedin.com/in/scott-hutchins-03687739/"
                                                       target="_blank"><img
                                                                src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.png"
                                                                height="40" style="height:40px !important;"/></a></li>
                                                <li><a href="https://twitter.com/sahutchi" target="_blank"><img
                                                                src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png"
                                                                height="40" style="height:40px !important;"/></a></li>
                                                <li><a href="https://plus.google.com/u/0/103787897438509801954"
                                                       target="_blank"><img
                                                                src="<?php echo get_template_directory_uri() ?>/assets/img/google-plus.png"
                                                                height="40" style="height:40px !important;"/></i></a>
                                                </li>
                                            </ul>
										<?php else: ?>
                                            <ul>
                                                <li><a href="https://www.linkedin.com/in/scott-hutchins-03687739/"
                                                       target="_blank"><i
                                                                class="fa fa-linkedin-square fa-2x"
                                                                aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="https://twitter.com/sahutchi" target="_blank"><i
                                                                class="fa fa-twitter-square fa-2x"
                                                                aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="https://plus.google.com/u/0/103787897438509801954"
                                                       target="_blank"><i
                                                                class="fa fa-google-plus-square fa-2x"
                                                                aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
										<?php endif; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="panel-group" id="accordion">
                                            <div class="accordion-toggle" data-toggle="collapse"
                                                 data-parent="#accordion"
                                                 href="#collapseTwo">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <div class="accordion-toggle"><?php if ( FALSE ): ?>
                                                                    <div class="text-right"><img
                                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/down-triangle.png"
                                                                            height="35"
                                                                            style="height:35px !important;"/>
                                                                    </div><?php endif; ?>
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo"
                                                         class="<?php if ( ! $is_ie ): ?>panel-collapse collapse<?php endif; ?>">
                                                        <div class="panel-body">
                                                            <div class="container">
                                                                <p>A technical innovator who is normally in front of a
                                                                    computer terminal or out in the surf, Scott loves
                                                                    building
                                                                    new technologies and working with those excited to
                                                                    do the
                                                                    same. Formerly a naval officer, nuclear engineer,
                                                                    sales
                                                                    engineering leader for applied artificial
                                                                    intelligence, and
                                                                    chief technology officer of a baseball analytics
                                                                    company. He has a BSEE and MSEE in Electrical
                                                                    Engineering
                                                                    from the University of Southern California, graduate
                                                                    certificate in Nuclear Engineering from the Bettis
                                                                    Atomic
                                                                    Power Laboratory, and MS in Finance from George
                                                                    Washington
                                                                    University. Scott is passionate about helping
                                                                    Truthlab’s
                                                                    customers have the best tools to create amazing
                                                                    customer experiences.
                                                                </p>
                                                                <p>Scott is obsessed with solving cross functional
                                                                    problems.
                                                                    From working with the best engineers in the DoD and
                                                                    DoE to
                                                                    the best data scientists and machine learning
                                                                    engineers in
                                                                    Predictive Marketing, Scott realized the toughest
                                                                    challenges
                                                                    for business are those that span orgs, operational
                                                                    processes, and departmental goals. The Truthlab
                                                                    Customer
                                                                    Experience Platform enables you to analyze customer
                                                                    experience across marketing, sales, success, and
                                                                    renewals.
                                                                </p>
                                                                <p>Truthlab is taking a fresh look at nearly every
                                                                    aspect of
                                                                    the digital customer experience. Currently, it’s too
                                                                    difficult and time consuming to transform massive
                                                                    volumes of
                                                                    customer data into truly actionable insights across
                                                                    multiple
                                                                    business units. The Truthlab CXM platform is fixing
                                                                    this
                                                                    problem.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <section id="culture">
        <div class="container-fluid text-center values">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="heading">
                        <h2>Culture &amp; Values</h2>
                        <p>
                            Just one block from the downtown San Mateo CalTrain station, our team helps companies
                            orchestrate amazing customer experiences. We start each day with the goal of providing real
                            value for our customers and each other.
                        </p>
                        <p>
                            Read on to find out what is important to our team.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center values">
            <div class="row" style="padding:0">
                <div class="col-md-6 col-md-push-6 customer-experiences">

                </div>
                <div class="col-md-6 col-md-pull-6 copy">
                    <h3>We Provide Amazing Customer Experiences</h3>
                    <p>Our most important and guiding principal is providing amazing customer experiences.</p>
                </div>

            </div>
            <div class="row" style="padding:0px;">
                <div class="col-md-6 great-product"></div>
                <div class="col-md-6 copy">
                    <h3>We Build Great Product</h3>
                    <p>We build product on a defined roadmap and hold each other accountable.</p>
                </div>
            </div>
            <div class="row" style="padding:0px;">
                <div class="col-md-6 col-md-push-6 large-market"></div>
                <div class="col-md-6 col-md-pull-6 copy">
                    <h3>We Solve a Real Need for a Large Market</h3>
                    <p>We listen to customers and understand what they truly want and need.</p>
                </div>

            </div>
            <div class="row" style="padding:0px;">
                <div class="col-md-6 not-comfort"></div>
                <div class="col-md-6 copy">
                    <h3>We Focus on Growth and Not Comfort</h3>
                    <p>We are building a high growth SaaS company, not running an antique shop.</p>
                </div>
            </div>
            <div class="row" style="padding:0px;">
                <div class="col-md-6 col-md-push-6 believe"></div>
                <div class="col-md-6 col-md-pull-6 copy">
                    <h3>We Believe in Better</h3>
                    <p>We know that there is always another level of greatness that we can achieve together.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-heading">
                        <h2>&amp;</h2>
                        <h2>We surround ourselves with Smart People Who Hate to lose</h2>
                        <p>For those of you who have been on a team like this, you know how great it is.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="careers">
        <div class="container text-center values">
            <div class="row--padded" style="padding-top:3rem;">
                <h2>Careers</h2>
                <div class="red-box">
                    <div class="blue-box">
                        <div class="panel-group" id="accordion">
                            <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                 href="#jobOne">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <div class="accordion-toggle">Back End/Full Stack Engineer</div>
                                        </h4>
                                    </div>
                                    <div id="jobOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="container">
                                                <p>Looking to build an awesome platform with the founding team at one of
                                                    the fastest growing startups in the Bay Area? We’re looking for
                                                    talented engineers with great execution capabilities and passion for
                                                    technology.</p>
                                                <ul type="disc">
                                                    <li>Hands on experience developing and implementing scalable
                                                        software development processes through agile scrum methodologies
                                                    </li>
                                                    <li>Bachelor’s Degree in Computer Science, Engineering, or
                                                        equivalent
                                                    </li>
                                                    <li>A passion for creating powerful customer experiences</li>
                                                    <li>Experience with designing/developing in Django, Flask, React, or
                                                        Angular
                                                    </li>
                                                    <li>Working knowledge in modern languages Python, Node, ES6</li>
                                                    <li>Strong understanding of distributed software design</li>
                                                    <li>Strong experience preferred with: Linux, AWS, Micro-Services,
                                                        RDS
                                                    </li>
                                                    <li>Familiarity with machine learning modeling frameworks</li>
                                                    <li>SQL/No-SQL query and implementation strategies</li>
                                                </ul>
                                                <a href="mailto:careers@truthlab.com?subject=Back End/Full Stack Engineer"
                                                   class="button button--blue-outline">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                 href="#jobTwo">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <div class="accordion-toggle">Front End/Full Stack Engineer</div>
                                        </h4>
                                    </div>
                                    <div id="jobTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="container">
                                                <p>Looking to build an awesome platform with the founding team at one of
                                                    the fastest growing startups in the Bay Area? We’re looking for
                                                    talented engineers with great execution capabilities and passion for
                                                    technology.</p>
                                                <ul type="disc">
                                                    <li>Hands on experience developing and implementing scalable
                                                        software development processes through agile scrum methodologies
                                                    </li>
                                                    <li>Bachelor’s Degree in Computer Science, Engineering, or
                                                        equivalent
                                                    </li>
                                                    <li>A passion for creating powerful customer experiences</li>
                                                    <li>Strong experience with Front-end tech such as Angular / React
                                                    </li>
                                                    <li>Experience implementing and using restful micro-services
                                                        services
                                                    </li>
                                                    <li>An eye for design and delightful customer experience</li>
                                                    <li>Experience with test driven development and advanced API
                                                        implementation (i.e. swagger)
                                                    </li>
                                                </ul>

                                                <a href="mailto:careers@truthlab.com?subject=Front End/Full Stack Engineer"
                                                   class="button button--blue-outline">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                 href="#jobThree">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <div class="accordion-toggle">Sales Development Representative</div>
                                        </h4>
                                    </div>
                                    <div id="jobThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="container">
                                                <p><span style="color: #000000;">Sales Development Representatives (SDRs) are responsible for identifying and creating new qualified sales opportunities in Target Accounts. The SDR manages the inbound lead activity in their territory, qualifying active buying interest and developing opportunity in prospect accounts.</span>
                                                </p>
                                                <p><strong>Responsibilities:<br/> </strong><br/> Prospect, educate,
                                                    qualify, and develop Target Accounts and inbound leads to create
                                                    sales-ready leads and opportunities</p>
                                                <ul>
                                                    <li>Interact with prospects via telephone and email</li>
                                                    <li>Research accounts, identify key players, generate interest and
                                                        develop accounts to stimulate opportunity
                                                    </li>
                                                    <li>Disseminate opportunities to appropriate AE, educating rep as
                                                        necessary about the opportunity
                                                    </li>
                                                    <li>Successfully manage and overcome prospect objections</li>
                                                    <li>Become a trusted resource and develop superior relationships
                                                        with prospects
                                                    </li>
                                                    <li>Update lead scoring and prospect interaction in salesforce.com
                                                        to ensure efficient lead management
                                                    </li>
                                                    <li>Consistently achieve qualified opportunity quotas to ensure
                                                        territory revenue objectives.
                                                    </li>
                                                    <li>Provide closed-loop feedback to ensure continuous process
                                                        optimization
                                                    </li>
                                                </ul>
                                                <p><strong><b>The successful candidate must have</b>:</strong></p>
                                                <ul>
                                                    <li>A self-starter with a track record of successful, credible lead
                                                        follow-up and sales development at multiple executive levels
                                                        within an organization
                                                    </li>
                                                    <li>Opportunity qualification and objection handling</li>
                                                    <li>Call structure and control</li>
                                                    <li>Time and territory management</li>
                                                    <li>Ability to work in a high-energy team environment; team player
                                                    </li>
                                                    <li>Positive and energetic phone skills, excellent listening skills,
                                                        strong writing skills
                                                    </li>
                                                    <li>Sales training and salesforce.com experience a plus</li>
                                                    <li>4-year College degree required</li>
                                                </ul>
                                                <a href="mailto:careers@truthlab.com?subject=Sales Development Representative"
                                                   class="button button--blue-outline">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        </div><!-- end accordions -->
                        <br/>

                    </div>
                    <div class="clear--both"></div>
                </div>
                <div class="clear--both"></div>
            </div>
        </div>
    </section>
    <script>
        var didCareer = false;
        jQuery(window).scroll(function () {
            if (didCareer) {
                return;
            }
            if (jQuery(this).scrollTop() + 500 >= jQuery('#careers').position().top) {
                didCareer = true;
                jQuery('#careers').css('background-image', "url('<?php echo get_template_directory_uri() ?>/assets/img/about/careers.gif')");
            }
        });
    </script>

    <section id="cta">
        <div class="container">
            <div class="row cta__red">
                <div class="col-md-7">
                    <h2>Create Better Customer Experiences</h2>
                    <div class="white"></div>
                    <p>Learn how Truthlab can help you track, measure and improve every aspect of your customers’
                        journey.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 text-right">
                    <a href="#" class="button button--white request-toggle">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();