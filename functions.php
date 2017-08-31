<?php
/**
 * Neat functions and definitions
 *
 * @package Neat
 */

/**
 * Paths
 *
 * @since  1.0
 */
if ( !defined( 'AA_THEME_DIR' ) ){
    define('AA_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}

if ( ! function_exists( 'neat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function neat_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'neat' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'neat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // neat_setup
add_action( 'after_setup_theme', 'neat_setup' );



/**
 * Styles and scripts
 *
 * @since 1.0.0
 */

/**
 *
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
 *
 * @since  1.0.0
 *
 */
add_action('wp_enqueue_scripts', 'aa_scripts');
function aa_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	wp_enqueue_script('jquery'); // Enqueue it!
        //wp_deregister_script('jquery'); // Deregister WordPress jQuery
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');


        /**
         *
         * Minified and concatenated scripts
         *
         *     @vendors     plugins.min,js
         *     @custom      scripts.min.js
         *
         *     Order is important
         *
         */
        wp_register_script('aa_vendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js'); // Custom scripts
        wp_enqueue_script('aa_vendorsJs'); // Enqueue it!

        wp_register_script('aa_customJs', get_template_directory_uri() . '/assets/js/custom.min.js'); // Custom scripts
        wp_enqueue_script('aa_customJs'); // Enqueue it!

    }

}


/**
 *
 * Styles: Frontend with no conditions, Add Custom styles to wp_head
 *
 * @since  1.0
 *
 */
add_action('wp_enqueue_scripts', 'aa_styles'); // Add Theme Stylesheet
function aa_styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
    // wp_register_style('aa_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_register_style('aa_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
    wp_enqueue_style('aa_style'); // Enqueue it!

}

/**
 *
 * Comment Reply js to load only when thread_comments is active
 *
 * @since  1.0.0
 *
 */
add_action( 'wp_enqueue_scripts', 'aa_enqueue_comments_reply' );
function aa_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $ewords = explode(' ',$excerpt);
  $last_word = array_pop($ewords);
  $excerpt = implode($ewords,' ').'...';
  return $excerpt;
}

function scrapeImage($text) {
    $pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
    preg_match($pattern, $text, $link);
    $link = $link[1];
    $link = urldecode($link);
    return $link;

}
/**
 * Tweet Quote Box on Post Page shortcode
 *
 * @since 1.0.0
 */
function tweet_quote_func($atts) {
   extract(shortcode_atts(array(
      'quote'  => 'Place an interesting quote in this section. It should highlight an important point.',
      'author' => 'Name Here'
   ), $atts));
   
$tweet = 'https://twitter.com/home?status='.$quote.' -'.$author.'';
return '<a href="'.$tweet.'" class="tweet-quote" target="popup" onclick="window.open(\''.$tweet.'\',\'popup\',\'width=600,height=600\'); return false;"><blockquote><p>"'. $quote . '"</p><p class="author">- ' . $author . '</p><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></blockquote></a>';
}

add_shortcode('tweetquote', 'tweet_quote_func');


/**
 *
 * Get the free white paper form shortcode
 * [tl_free_whitepaper_form target="https://dev.truthlab.com/p/api/v2/form/handler/" redirect="https://dev.truthlab.com/p/gated/customer-experience-advantage" download=""]
 *
 * @since 1.0.0
 *
 */
add_shortcode('tl_free_whitepaper_form', 'tl_free_whitepaper_form_func');
function tl_free_whitepaper_form_func($atts){
  $a = shortcode_atts( array(
        'target' => 'https://dev.truthlab.com/p/api/v2/form/handler/',
        'redirect' => 'https://dev.truthlab.com/p/gated/customer-experience-advantage',
        'download' => '',
    ), $atts );
  ob_start();
  ?>
<form class="whitepaper_form" action="<?php echo $a['target']; ?>" id="gated_content" method="POST">
  <small><div id="form-notes" style="color:red;"></div><small>
  <input style="" id="fname" type="text" class="not-blank-value" name="fname" placeholder="First Name"><br>
  <input style="" id="lname" type="text" class="not-blank-value" name="lname" placeholder="Last Name"><br>
  <input style="" id="contact_email" type="email" name="email" placeholder="Company Email Address"><br>
  <input style="" id="company" type="text" class="not-blank-value" name="company" placeholder="Company Name"><br>
  <input type="hidden" name="tl_free_whitepaper_form" value="<?php echo $a['redirect']; ?>" id="tl_free_whitepaper_form">
  <div style=""><input name="blog" type="checkbox" checked><span style="margin-left:5px">Sign me up for the Truthlab Blog Subscription</span></div>
  <button type="submit" value="Download Now">Download Now <i class="fa fa-lg fa-angle-right"></i></button>
</form>
<style>
input.invalid, textarea.invalid{border: 2px solid red !important;}
input.valid, textarea.valid{border: 2px solid green !important;}
</style>
<script>
(function( $ ) {
  
$(document).ready(function() {
  $('.not-blank-value').on('blur', function() {
  	var input=$(this);
  	var is_name=input.val();
  	if(is_name){input.removeClass("invalid").addClass("valid");}
  	else{input.removeClass("valid").addClass("invalid");}
  });
  $('#contact_email').on('blur', function() {
  	var input=$(this);
  	var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(?!hitmail)(?!rxdoc)(?!cox)(?!126)(?!126)(?!comast)(?!comast)(?!yandex)(?!wegas)(?!twc)(?!charter)(?!outlook)(?!gmx)(?!1033edge)(?!11mail)(?!123)(?!123box)(?!123india)(?!123mail)(?!150ml)(?!15meg4free)(?!163)(?!1coolplace)(?!1freeemail)(?!1funplace)(?!1internetdrive)(?!1mail)(?!1me)(?!1mum)(?!1musicrow)(?!1netdrive)(?!1nsyncfan)(?!1under)(?!1webave)(?!1webhighway)(?!212)(?!24horas)(?!2911)(?!2d2i)(?!2die4)(?!3000)(?!321media)(?!37)(?!3ammagazine)(?!3dmail)(?!3email)(?!3xl)(?!444)(?!4email)(?!4email)(?!4mg)(?!4newyork)(?!4x4man)(?!5iron)(?!5star)(?!88)(?!8848)(?!888)(?!97rock)(?!aamail)(?!aaronkwok)(?!abcflash)(?!abdulnour)(?!aberystwyth)(?!abolition-now)(?!about)(?!academycougars)(?!access4less)(?!accessgcc)(?!ace-of-base)(?!acmecity)(?!acmemail)(?!acninc)(?!activatormail)(?!address)(?!adelphia)(?!adexec)(?!adfarrow)(?!adios)(?!adoption)(?!ados)(?!adrenalinefreak)(?!advalvas)(?!aeiou)(?!aemail4u)(?!aeneasmail)(?!afreeinternet)(?!africamail)(?!agoodmail)(?!ahaa)(?!aichi)(?!aim)(?!airforce)(?!AirForceEmail)(?!airforceemail)(?!airpost)(?!ajacied)(?!ak47)(?!aknet)(?!albawaba)(?!alecsmail)(?!alex4all)(?!alexandria)(?!algeria)(?!alhilal)(?!alibaba)(?!alive)(?!allmail)(?!alloymail)(?!allracing)(?!allsaintsfan)(?!alltel)(?!alskens)(?!altavista)(?!altavista)(?!altavista)(?!alternativagratis)(?!alumnidirector)(?!alvilag)(?!amele)(?!america)(?!ameritech)(?!amnetsal)(?!amrer)(?!amuro)(?!amuromail)(?!ancestry)(?!andylau)(?!anfmail)(?!angelfan)(?!angelfire)(?!animail)(?!animal)(?!animalhouse)(?!animalwoman)(?!anjungcafe)(?!annsmail)(?!anote)(?!another)(?!anotherwin95)(?!anti-social)(?!antisocial)(?!antongijsen)(?!antwerpen)(?!anymoment)(?!anytimenow)(?!aol)(?!apexmail)(?!apmail)(?!apollo)(?!approvers)(?!arabia)(?!arabtop)(?!arcademaster)(?!archaeologist)(?!arcor)(?!arcotronics)(?!argentina)(?!aristotle)(?!army)(?!artlover)(?!as-if)(?!asean-mail)(?!asean-mail)(?!asheville)(?!asia-links)(?!asia)(?!asiafind)(?!asianavenue)(?!asiancityweb)(?!asiansonly)(?!asianwired)(?!asiapoint)(?!assala)(?!assamesemail)(?!astroboymail)(?!astrolover)(?!astrosfan)(?!astrosfan)(?!asurfer)(?!athenachu)(?!atina)(?!atl)(?!atlaswebmail)(?!atlink)(?!atozasia)(?!att)(?!attglobal)(?!attymail)(?!au)(?!ausi)(?!australia)(?!australiamail)(?!austrosearch)(?!autoescuelanerja)(?!automotiveauthority)(?!avh)(?!awsom)(?!axoskate)(?!ayna)(?!azimiweb)(?!bachelorboy)(?!bachelorgal)(?!backpackers)(?!backstreet-boys)(?!backstreetboysclub)(?!backwards)(?!bagherpour)(?!bahrainmail)(?!bangkok)(?!bangkok2000)(?!bannertown)(?!baptistmail)(?!baptized)(?!barcelona)(?!baseballmail)(?!basketballmail)(?!batuta)(?!baudoinconsulting)(?!bcvibes)(?!beeebank)(?!beenhad)(?!beep)(?!beer)(?!beethoven)(?!belice)(?!belizehome)(?!bellsouth)(?!berkscounty)(?!berlin)(?!berlin)(?!berlinexpo)(?!bestmail)(?!bettergolf)(?!bharatmail)(?!bigassweb)(?!bigboab)(?!bigfoot)(?!bigfoot)(?!bigger)(?!biggerbadder)(?!bigmailbox)(?!bigpond)(?!bigramp)(?!bikemechanics)(?!bikeracer)(?!bikeracers)(?!bikerider)(?!billsfan)(?!billsfan)(?!bimamail)(?!bimla)(?!birdowner)(?!bisons)(?!bitmail)(?!bitpage)(?!bizhosting)(?!bla-bla)(?!blackburnmail)(?!blackplanet)(?!blazemail)(?!bluehyppo)(?!bluemail)(?!bluemail)(?!bluesfan)(?!blushmail)(?!bmlsports)(?!boardermail)(?!boatracers)(?!bolando)(?!bollywoodz)(?!bolt)(?!boltonfans)(?!bombdiggity)(?!bonbon)(?!BonBon)(?!boom)(?!bootmail)(?!bornnaked)(?!bossofthemoss)(?!bostonoffice)(?!bounce)(?!box)(?!boxbg)(?!boxemail)(?!boxfrog)(?!boyzoneclub)(?!bradfordfans)(?!brasilia)(?!breathe)(?!bresnan)(?!bright)(?!britneyclub)(?!brittonsign)(?!broadcast)(?!buffymail)(?!bullsfan)(?!bullsgame)(?!bumerang)(?!bumrap)(?!bunko)(?!buryfans)(?!business-man)(?!businessman)(?!businessweekmail)(?!busta-rhymes)(?!busymail)(?!buyersusa)(?!bvimailbox)(?!byteme)(?!c2i)(?!c3)(?!c4)(?!cabacabana)(?!cableone)(?!caere)(?!cairomail)(?!callnetuk)(?!callsign)(?!caltanet)(?!camidge)(?!canada-11)(?!canada)(?!canadianmail)(?!canoemail)(?!canwetalk)(?!caramail)(?!care2)(?!careerbuildermail)(?!carioca)(?!cartestraina)(?!casablancaresort)(?!casino)(?!catcha)(?!catchamail)(?!catholic)(?!catlover)(?!ccnmail)(?!cd2)(?!celineclub)(?!celtic)(?!centoper)(?!centralpets)(?!centrum)(?!centrum)(?!centurytel)(?!certifiedmail)(?!cgac)(?!chaiyomail)(?!chance2mail)(?!chandrasekar)(?!charmedmail)(?!charter)(?!chat)(?!chattown)(?!chauhanweb)(?!check)(?!check)(?!check1check)(?!cheerful)(?!chek)(?!chemist)(?!chequemail)(?!cheyenneweb)(?!chez)(?!chickmail)(?!childrens)(?!chinalook)(?!chirk)(?!christianmail)(?!churchusa)(?!cia-agent)(?!cia)(?!ciaoweb)(?!cicciociccio)(?!cincinow)(?!citeweb)(?!citlink)(?!city-of-bath)(?!city-of-birmingham)(?!city-of-brighton)(?!city-of-cambridge)(?!city-of-coventry)(?!city-of-edinburgh)(?!city-of-lichfield)(?!city-of-lincoln)(?!city-of-liverpool)(?!city-of-manchester)(?!city-of-nottingham)(?!city-of-oxford)(?!city-of-swansea)(?!city-of-westminster)(?!city-of-westminster)(?!city-of-york)(?!city2city)(?!cityofcardiff)(?!cityoflondon)(?!claramail)(?!classicalfan)(?!clerk)(?!cliffhanger)(?!close2you)(?!close2you)(?!club4x4)(?!clubalfa)(?!clubbers)(?!clubducati)(?!clubhonda)(?!clubnetnoir)(?!clubvdo)(?!cluemail)(?!cmpmail)(?!cnnsimail)(?!codec)(?!coder)(?!coid)(?!coldmail)(?!collectiblesuperstore)(?!collegebeat)(?!collegeclub)(?!collegemail)(?!colleges)(?!columbusrr)(?!columnist)(?!comcast)(?!comic)(?!communityconnect)(?!comprendemail)(?!compuserve)(?!computer-freak)(?!computermail)(?!conexcol)(?!conk)(?!connect4free)(?!connectbox)(?!conok)(?!consultant)(?!cookiemonster)(?!cool)(?!coolgoose)(?!coolgoose)(?!coolkiwi)(?!coollist)(?!coolmail)(?!coolmail)(?!coolsend)(?!cooooool)(?!cooperation)(?!cooperationtogo)(?!copacabana)(?!cornells)(?!cornerpub)(?!corporatedirtbag)(?!cortinet)(?!cotas)(?!counsellor)(?!countrylover)(?!cox)(?!coxinet)(?!CPAonline)(?!cpaonline)(?!cracker)(?!crazedanddazed)(?!crazysexycool)(?!cristianemail)(?!critterpost)(?!croeso)(?!crosshairs)(?!crosswinds)(?!crwmail)(?!cry4helponline)(?!cs)(?!csinibaba)(?!cuemail)(?!curio-city)(?!curtsmail)(?!cute-girl)(?!cuteandcuddly)(?!cutey)(?!cww)(?!cyber-africa)(?!cyber4all)(?!cyberbabies)(?!CyberCafeMaui)(?!cybercafemaui)(?!cyberdude)(?!cyberforeplay)(?!cybergal)(?!cybergrrl)(?!cyberinbox)(?!cyberleports)(?!cybermail)(?!cybernet)(?!cyberspace-asia)(?!cybertrains)(?!cyclefanz)(?!cynetcity)(?!dabsol)(?!dadacasa)(?!daha)(?!dailypioneer)(?!dangerous-minds)(?!dansegulvet)(?!data54)(?!davegracey)(?!dawnsonmail)(?!dawsonmail)(?!dazedandconfused)(?!dbzmail)(?!DCemail)(?!dcemail)(?!deadlymob)(?!deal-maker)(?!dearriba)(?!death-star)(?!dejanews)(?!deliveryman)(?!deneg)(?!depechemode)(?!deseretmail)(?!desertmail)(?!desilota)(?!deskmail)(?!deskpilot)(?!destin)(?!detik)(?!deutschland-net)(?!devotedcouples)(?!dfwatson)(?!di-ve)(?!digibel)(?!diplomats)(?!dirtracer)(?!dirtracers)(?!discofan)(?!discovery)(?!discoverymail)(?!disinfo)(?!dmailman)(?!dnsmadeeasy)(?!doctor)(?!dog)(?!doglover)(?!dogsnob)(?!doityourself)(?!doneasy)(?!donjuan)(?!dontgotmail)(?!dontmesswithtexas)(?!doramail)(?!dostmail)(?!dotcom)(?!dott)(?!dplanet)(?!dr)(?!dragoncon)(?!dragracer)(?!dropzone)(?!drotposta)(?!dubaimail)(?!dublin)(?!dublin)(?!dunlopdriver)(?!dunloprider)(?!duno)(?!dwp)(?!dygo)(?!dynamitemail)(?!e-apollo)(?!e-mail)(?!e-mail)(?!e-mailanywhere)(?!e-mails)(?!e-tapaal)(?!earthalliance)(?!earthcam)(?!EarthCam)(?!earthdome)(?!earthling)(?!earthlink)(?!earthonline)(?!eastmail)(?!easy)(?!easypost)(?!eatmydirt)(?!ecardmail)(?!ecbsolutions)(?!echina)(?!ecompare)(?!edmail)(?!ednatx)(?!edtnmail)(?!educastmail)(?!ehmail)(?!eircom)(?!elsitio)(?!elvis)(?!email)(?!email)(?!email)(?!email)(?!email)(?!email)(?!email)(?!email)(?!email)(?!email2me)(?!emailacc)(?!emailaccount)(?!emailchoice)(?!emailcorner)(?!emailem)(?!emailengine)(?!emailforyou)(?!emailgroups)(?!emailit)(?!emailpinoy)(?!emailplanet)(?!emails)(?!emailuser)(?!emailx)(?!ematic)(?!embarqmail)(?!eml)(?!emumail)(?!end-war)(?!enel)(?!engineer)(?!england)(?!england)(?!epatra)(?!epix)(?!epost)(?!eposta)(?!eqqu)(?!eresmas)(?!eriga)(?!estranet)(?!ethos)(?!etoast)(?!etrademail)(?!eudoramail)(?!europe)(?!euroseek)(?!eurosport)(?!every1)(?!everyone)(?!examnotes)(?!excite)(?!excite)(?!execs)(?!expressasia)(?!extenda)(?!extended)(?!eyou)(?!ezcybersearch)(?!ezmail)(?!ezrs)(?!f1fans)(?!fan)(?!fansonlymail)(?!fantasticmail)(?!farang)(?!faroweb)(?!fastem)(?!fastemail)(?!fastemailer)(?!fastermail)(?!fastimap)(?!fastmail)(?!fastmail)(?!fastmailbox)(?!fastmessaging)(?!fatcock)(?!fathersrightsne)(?!fbi-agent)(?!fbi)(?!federalcontractors)(?!felicity)(?!felicitymail)(?!femenino)(?!fetchmail)(?!feyenoorder)(?!ffanet)(?!fiberia)(?!filipinolinks)(?!financemail)(?!financier)(?!findmail)(?!finebody)(?!finfin)(?!fire-brigade)(?!fishburne)(?!flashemail)(?!flashmail)(?!flashmail)(?!flipcode)(?!fmailbox)(?!fmgirl)(?!fmguy)(?!fnmail)(?!folkfan)(?!foodmail)(?!footballmail)(?!for-president)(?!forfree)(?!forpresident)(?!fortuncity)(?!fortunecity)(?!forum)(?!free-org)(?!free)(?!freeaccess)(?!freeaccount)(?!freeandsingle)(?!freebox)(?!freedomlover)(?!freegates)(?!freeghana)(?!freeler)(?!freemail)(?!freemail)(?!freemail)(?!freemail)(?!freemail)(?!freemail)(?!freemail)(?!freenet)(?!freenet)(?!freeola)(?!freeola)(?!freestamp)(?!freestart)(?!freesurf)(?!freesurf)(?!freeuk)(?!freeuk)(?!freeweb)(?!freewebemail)(?!freeyellow)(?!fresnomail)(?!friends-cafe)(?!friendsfan)(?!from-africa)(?!from-america)(?!from-argentina)(?!from-asia)(?!from-australia)(?!from-belgium)(?!from-brazil)(?!from-canada)(?!from-china)(?!from-england)(?!from-europe)(?!from-france)(?!from-germany)(?!from-holland)(?!from-israel)(?!from-italy)(?!from-japan)(?!from-korea)(?!from-mexico)(?!from-outerspace)(?!from-russia)(?!from-spain)(?!fromalabama)(?!fromalaska)(?!fromarizona)(?!fromarkansas)(?!fromcalifornia)(?!fromcolorado)(?!fromconnecticut)(?!fromdelaware)(?!fromflorida)(?!fromgeorgia)(?!fromhawaii)(?!fromidaho)(?!fromillinois)(?!fromindiana)(?!fromiowa)(?!fromjupiter)(?!fromkansas)(?!fromkentucky)(?!fromlouisiana)(?!frommaine)(?!frommaryland)(?!frommassachusetts)(?!frommiami)(?!frommichigan)(?!fromminnesota)(?!frommississippi)(?!frommissouri)(?!frommontana)(?!fromnebraska)(?!fromnevada)(?!fromnewhampshire)(?!fromnewjersey)(?!fromnewmexico)(?!fromnewyork)(?!fromnorthcarolina)(?!fromnorthdakota)(?!fromohio)(?!fromoklahoma)(?!fromoregon)(?!frompennsylvania)(?!fromrhodeisland)(?!fromru)(?!fromsouthcarolina)(?!fromsouthdakota)(?!fromtennessee)(?!fromtexas)(?!fromthestates)(?!fromutah)(?!fromvermont)(?!fromvirginia)(?!fromwashington)(?!fromwashingtondc)(?!fromwestvirginia)(?!fromwisconsin)(?!fromwyoming)(?!front)(?!frontier)(?!frontiernet)(?!fsmail)(?!ftml)(?!fullmail)(?!funkfan)(?!funky4)(?!fuorissimo)(?!furnitureprovider)(?!fuse)(?!fut)(?!fwnb)(?!fxsmails)(?!galamb)(?!galaxy5)(?!gamebox)(?!gamegeek)(?!gamespotmail)(?!garbage)(?!gardener)(?!gawab)(?!gaza)(?!gazeta)(?!gazibooks)(?!gci)(?!gee-wiz)(?!geecities)(?!geek)(?!geek)(?!geeklife)(?!general-hospital)(?!geocities)(?!geography)(?!geologist)(?!geopia)(?!gh2000)(?!ghanamail)(?!ghostmail)(?!giantsfan)(?!giga4u)(?!gigileung)(?!girl4god)(?!givepeaceachance)(?!glay)(?!glendale)(?!globalfree)(?!globalpagan)(?!gmail)(?!gmx)(?!gmx)(?!gmx)(?!gmx)(?!gnwmail)(?!go)(?!go)(?!go)(?!go2net)(?!gocollege)(?!gocubs)(?!goldenmail)(?!goldmail)(?!golfemail)(?!golfmail)(?!gonavy)(?!goodnewsmail)(?!goodstick)(?!googlemail)(?!goplay)(?!gorontalo)(?!gospelfan)(?!gotmail)(?!gotomy)(?!govolsfan)(?!gportal)(?!grabmail)(?!graffiti)(?!gramszu)(?!grapplers)(?!gratisweb)(?!grungecafe)(?!gtemail)(?!gtmc)(?!gua)(?!guessmail)(?!guju)(?!gurlmail)(?!guy)(?!guy2)(?!guyanafriends)(?!gyorsposta)(?!gyorsposta)(?!hackermail)(?!hailmail)(?!hairdresser)(?!hamptonroads)(?!handbag)(?!handleit)(?!hang-ten)(?!hanmail)(?!happemail)(?!happycounsel)(?!happypuppy)(?!hardcorefreak)(?!hawaiiantel)(?!headbone)(?!heartthrob)(?!heerschap)(?!heesun)(?!hehe)(?!hello)(?!hello)(?!helter-skelter)(?!hempseed)(?!herediano)(?!heremail)(?!herono1)(?!hey)(?!hhdevel)(?!highmilton)(?!highquality)(?!hiphopfan)(?!hispavista)(?!hitthe)(?!hkg)(?!hkstarphoto)(?!hockeymail)(?!hollywoodkids)(?!home-email)(?!home)(?!home)(?!homeart)(?!homelocator)(?!homemail)(?!homestead)(?!homeworkcentral)(?!honduras)(?!hongkong)(?!hookup)(?!hoopsmail)(?!horrormail)(?!hot-shot)(?!hot)(?!hotbot)(?!hotbrev)(?!hotepmail)(?!hotfire)(?!hotletter)(?!hotmail)(?!hotmail)(?!hotmail)(?!hotmail)(?!hotmail)(?!hotmail)(?!hotpop)(?!HotPOP)(?!hotpop3)(?!hotvoice)(?!housefancom)(?!housemail)(?!hsuchi)(?!hughes)(?!hunsa)(?!hurting)(?!hushmail)(?!hypernautica)(?!i-connect)(?!i-france)(?!i-mailbox)(?!i-p)(?!i)(?!i12)(?!iamawoman)(?!iamwaiting)(?!iamwasted)(?!iamyours)(?!icestorm)(?!icloud)(?!icmsconsultants)(?!icq)(?!icqmail)(?!icrazy)(?!icu)(?!ID-base)(?!id-base)(?!ididitmyway)(?!idigjesus)(?!idirect)(?!iespana)(?!ifoward)(?!ignazio)(?!ignmail)(?!ihateclowns)(?!ijustdontcare)(?!ilovechocolate)(?!ilovejesus)(?!ilovethemovies)(?!ilovetocollect)(?!ilse)(?!imaginemail)(?!imail)(?!imail)(?!imailbox)(?!imel)(?!imneverwrong)(?!imstressed)(?!imtoosexy)(?!in-box)(?!in2jesus)(?!iname)(?!inbox)(?!inbox)(?!incamail)(?!includingarabia)(?!incredimail)(?!indexa)(?!india)(?!indiatimes)(?!indo-mail)(?!indocities)(?!indomail)(?!indyracers)(?!info-media)(?!info66)(?!infohq)(?!infomail)(?!infospacemail)(?!inicia)(?!inmail)(?!innocent)(?!inorbit)(?!insidebaltimore)(?!insurer)(?!interburp)(?!interfree)(?!interia)(?!internet-club)(?!internet-police)(?!internetbiz)(?!internetdrive)(?!internetegypt)(?!internetemails)(?!internetmailing)(?!investormail)(?!inwind)(?!iobox)(?!iobox)(?!iol)(?!iowaemail)(?!ip3)(?!iqemail)(?!irangate)(?!iraqmail)(?!ireland)(?!irj)(?!isellcars)(?!iservejesus)(?!islamonline)(?!isleuthmail)(?!ismart)(?!isonfire)(?!isp9)(?!itloox)(?!itmom)(?!ivebeenframed)(?!ivillage)(?!iwan-fals)(?!iwmail)(?!iwon)(?!izadpanah)(?!jahoopa)(?!jakuza)(?!japan)(?!jaydemail)(?!jazzandjava)(?!jazzfan)(?!jazzgame)(?!jerusalemmail)(?!jetemail)(?!jewishmail)(?!jippii)(?!joinme)(?!jokes)(?!jordanmail)(?!journalist)(?!joymail)(?!jpopmail)(?!jubiimail)(?!jump)(?!jumpy)(?!juniormail)(?!juno)(?!justemail)(?!justicemail)(?!kaazoo)(?!kaixo)(?!kalpoint)(?!kansascity)(?!kapoorweb)(?!karachian)(?!karachioye)(?!karbasi)(?!katamail)(?!kbjrmail)(?!kcks)(?!keftamail)(?!keg-party)(?!kellychen)(?!keromail)(?!keyemail)(?!kgb)(?!khosropour)(?!kickassmail)(?!killermail)(?!kimo)(?!kinki-kids)(?!kittymail)(?!kitznet)(?!kiwibox)(?!kiwitown)(?!konx)(?!korea)(?!kozmail)(?!krongthip)(?!krunis)(?!ksanmail)(?!ksee24mail)(?!kube93mail)(?!kukamail)(?!kumarweb)(?!kuwait-mail)(?!la)(?!ladymail)(?!lagerlouts)(?!lahoreoye)(?!lakmail)(?!lamer)(?!land)(?!lankamail)(?!laposte)(?!latemodels)(?!latinmail)(?!latino)(?!law)(?!lawyer)(?!leehom)(?!legalactions)(?!legislator)(?!leonlai)(?!letsgomets)(?!letterbox)(?!levele)(?!levele)(?!lex)(?!lexis-nexis-mail)(?!liberomail)(?!lick101)(?!linkmaster)(?!linktrader)(?!linuxfreemail)(?!linuxmail)(?!liontrucks)(?!liquidinformation)(?!list)(?!littleapple)(?!littleblueroom)(?!live)(?!liverpoolfans)(?!llandudno)(?!llangollen)(?!lmxmail)(?!lobbyist)(?!localbar)(?!locos)(?!london)(?!loobie)(?!looksmart)(?!lopezclub)(?!louiskoo)(?!love)(?!loveable)(?!lovefootball)(?!lovelygirl)(?!lovemail)(?!lover-boy)(?!lovergirl)(?!lovethebroncos)(?!lovethecowboys)(?!lovingjesus)(?!lowandslow)(?!luso)(?!luukku)(?!lycos)(?!lycos)(?!lycos)(?!lycosemail)(?!lycosmail)(?!m-a-i-l)(?!m-hmail)(?!m4)(?!mac)(?!macbox)(?!macfreak)(?!machinecandy)(?!macmail)(?!madcreations)(?!madrid)(?!maffia)(?!mahmoodweb)(?!mail-awu)(?!mail-box)(?!mail-center)(?!mail-central)(?!mail-page)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail)(?!mail15)(?!mail1st)(?!mail2007)(?!mail2aaron)(?!mail2abby)(?!mail2abc)(?!mail2actor)(?!mail2admiral)(?!mail2adorable)(?!mail2adoration)(?!mail2adore)(?!mail2adventure)(?!mail2aeolus)(?!mail2aether)(?!mail2affection)(?!mail2afghanistan)(?!mail2africa)(?!mail2agent)(?!mail2aha)(?!mail2ahoy)(?!mail2aim)(?!mail2air)(?!mail2airbag)(?!mail2airforce)(?!mail2airport)(?!mail2alabama)(?!mail2alan)(?!mail2alaska)(?!mail2albania)(?!mail2alcoholic)(?!mail2alec)(?!mail2alexa)(?!mail2algeria)(?!mail2alicia)(?!mail2alien)(?!mail2allan)(?!mail2allen)(?!mail2allison)(?!mail2alpha)(?!mail2alyssa)(?!mail2amanda)(?!mail2amazing)(?!mail2amber)(?!mail2america)(?!mail2american)(?!mail2andorra)(?!mail2andrea)(?!mail2andy)(?!mail2anesthesiologist)(?!mail2angela)(?!mail2angola)(?!mail2ann)(?!mail2anna)(?!mail2anne)(?!mail2anthony)(?!mail2anything)(?!mail2aphrodite)(?!mail2apollo)(?!mail2april)(?!mail2aquarius)(?!mail2arabia)(?!mail2arabic)(?!mail2architect)(?!mail2ares)(?!mail2argentina)(?!mail2aries)(?!mail2arizona)(?!mail2arkansas)(?!mail2armenia)(?!mail2army)(?!mail2arnold)(?!mail2art)(?!mail2artemus)(?!mail2arthur)(?!mail2artist)(?!mail2ashley)(?!mail2ask)(?!mail2astronomer)(?!mail2athena)(?!mail2athlete)(?!mail2atlas)(?!mail2atom)(?!mail2attitude)(?!mail2auction)(?!mail2aunt)(?!mail2australia)(?!mail2austria)(?!mail2azerbaijan)(?!mail2baby)(?!mail2bahamas)(?!mail2bahrain)(?!mail2ballerina)(?!mail2ballplayer)(?!mail2band)(?!mail2bangladesh)(?!mail2bank)(?!mail2banker)(?!mail2bankrupt)(?!mail2baptist)(?!mail2bar)(?!mail2barbados)(?!mail2barbara)(?!mail2barter)(?!mail2basketball)(?!mail2batter)(?!mail2beach)(?!mail2beast)(?!mail2beatles)(?!mail2beauty)(?!mail2becky)(?!mail2beijing)(?!mail2belgium)(?!mail2belize)(?!mail2ben)(?!mail2bernard)(?!mail2beth)(?!mail2betty)(?!mail2beverly)(?!mail2beyond)(?!mail2biker)(?!mail2bill)(?!mail2billionaire)(?!mail2billy)(?!mail2bio)(?!mail2biologist)(?!mail2black)(?!mail2blackbelt)(?!mail2blake)(?!mail2blind)(?!mail2blonde)(?!mail2blues)(?!mail2bob)(?!mail2bobby)(?!mail2bolivia)(?!mail2bombay)(?!mail2bonn)(?!mail2bookmark)(?!mail2boreas)(?!mail2bosnia)(?!mail2boston)(?!mail2botswana)(?!mail2bradley)(?!mail2brazil)(?!mail2breakfast)(?!mail2brian)(?!mail2bride)(?!mail2brittany)(?!mail2broker)(?!mail2brook)(?!mail2bruce)(?!mail2brunei)(?!mail2brunette)(?!mail2brussels)(?!mail2bryan)(?!mail2bug)(?!mail2bulgaria)(?!mail2business)(?!mail2buy)(?!mail2ca)(?!mail2california)(?!mail2calvin)(?!mail2cambodia)(?!mail2cameroon)(?!mail2canada)(?!mail2cancer)(?!mail2capeverde)(?!mail2capricorn)(?!mail2cardinal)(?!mail2cardiologist)(?!mail2care)(?!mail2caroline)(?!mail2carolyn)(?!mail2casey)(?!mail2cat)(?!mail2caterer)(?!mail2cathy)(?!mail2catlover)(?!mail2catwalk)(?!mail2cell)(?!mail2chad)(?!mail2champaign)(?!mail2charles)(?!mail2chef)(?!mail2chemist)(?!mail2cherry)(?!mail2chicago)(?!mail2chile)(?!mail2china)(?!mail2chinese)(?!mail2chocolate)(?!mail2christian)(?!mail2christie)(?!mail2christmas)(?!mail2christy)(?!mail2chuck)(?!mail2cindy)(?!mail2clark)(?!mail2classifieds)(?!mail2claude)(?!mail2cliff)(?!mail2clinic)(?!mail2clint)(?!mail2close)(?!mail2club)(?!mail2coach)(?!mail2coastguard)(?!mail2colin)(?!mail2college)(?!mail2colombia)(?!mail2color)(?!mail2colorado)(?!mail2columbia)(?!mail2comedian)(?!mail2composer)(?!mail2computer)(?!mail2computers)(?!mail2concert)(?!mail2congo)(?!mail2connect)(?!mail2connecticut)(?!mail2consultant)(?!mail2convict)(?!mail2cook)(?!mail2cool)(?!mail2cory)(?!mail2costarica)(?!mail2country)(?!mail2courtney)(?!mail2cowboy)(?!mail2cowgirl)(?!mail2craig)(?!mail2crave)(?!mail2crazy)(?!mail2create)(?!mail2croatia)(?!mail2cry)(?!mail2crystal)(?!mail2cuba)(?!mail2culture)(?!mail2curt)(?!mail2customs)(?!mail2cute)(?!mail2cutey)(?!mail2cynthia)(?!mail2cyprus)(?!mail2czechrepublic)(?!mail2dad)(?!mail2dale)(?!mail2dallas)(?!mail2dan)(?!mail2dana)(?!mail2dance)(?!mail2dancer)(?!mail2danielle)(?!mail2danny)(?!mail2darlene)(?!mail2darling)(?!mail2darren)(?!mail2daughter)(?!mail2dave)(?!mail2dawn)(?!mail2dc)(?!mail2dealer)(?!mail2deanna)(?!mail2dearest)(?!mail2debbie)(?!mail2debby)(?!mail2deer)(?!mail2delaware)(?!mail2delicious)(?!mail2demeter)(?!mail2democrat)(?!mail2denise)(?!mail2denmark)(?!mail2dennis)(?!mail2dentist)(?!mail2derek)(?!mail2desert)(?!mail2devoted)(?!mail2devotion)(?!mail2diamond)(?!mail2diana)(?!mail2diane)(?!mail2diehard)(?!mail2dilemma)(?!mail2dillon)(?!mail2dinner)(?!mail2dinosaur)(?!mail2dionysos)(?!mail2diplomat)(?!mail2director)(?!mail2dirk)(?!mail2disco)(?!mail2dive)(?!mail2diver)(?!mail2divorced)(?!mail2djibouti)(?!mail2doctor)(?!mail2doglover)(?!mail2dominic)(?!mail2dominica)(?!mail2dominicanrepublic)(?!mail2don)(?!mail2donald)(?!mail2donna)(?!mail2doris)(?!mail2dorothy)(?!mail2doug)(?!mail2dough)(?!mail2douglas)(?!mail2dow)(?!mail2downtown)(?!mail2dream)(?!mail2dreamer)(?!mail2dude)(?!mail2dustin)(?!mail2dyke)(?!mail2dylan)(?!mail2earl)(?!mail2earth)(?!mail2eastend)(?!mail2eat)(?!mail2economist)(?!mail2ecuador)(?!mail2eddie)(?!mail2edgar)(?!mail2edwin)(?!mail2egypt)(?!mail2electron)(?!mail2eli)(?!mail2elizabeth)(?!mail2ellen)(?!mail2elliot)(?!mail2elsalvador)(?!mail2elvis)(?!mail2emergency)(?!mail2emily)(?!mail2engineer)(?!mail2english)(?!mail2environmentalist)(?!mail2eos)(?!mail2eric)(?!mail2erica)(?!mail2erin)(?!mail2erinyes)(?!mail2eris)(?!mail2eritrea)(?!mail2ernie)(?!mail2eros)(?!mail2estonia)(?!mail2ethan)(?!mail2ethiopia)(?!mail2eu)(?!mail2europe)(?!mail2eurus)(?!mail2eva)(?!mail2evan)(?!mail2evelyn)(?!mail2everything)(?!mail2exciting)(?!mail2expert)(?!mail2fairy)(?!mail2faith)(?!mail2fanatic)(?!mail2fancy)(?!mail2fantasy)(?!mail2farm)(?!mail2farmer)(?!mail2fashion)(?!mail2fat)(?!mail2feeling)(?!mail2female)(?!mail2fever)(?!mail2fighter)(?!mail2fiji)(?!mail2filmfestival)(?!mail2films)(?!mail2finance)(?!mail2finland)(?!mail2fireman)(?!mail2firm)(?!mail2fisherman)(?!mail2flexible)(?!mail2florence)(?!mail2florida)(?!mail2floyd)(?!mail2fly)(?!mail2fond)(?!mail2fondness)(?!mail2football)(?!mail2footballfan)(?!mail2found)(?!mail2france)(?!mail2frank)(?!mail2frankfurt)(?!mail2franklin)(?!mail2fred)(?!mail2freddie)(?!mail2free)(?!mail2freedom)(?!mail2french)(?!mail2freudian)(?!mail2friendship)(?!mail2from)(?!mail2fun)(?!mail2gabon)(?!mail2gabriel)(?!mail2gail)(?!mail2galaxy)(?!mail2gambia)(?!mail2games)(?!mail2gary)(?!mail2gavin)(?!mail2gemini)(?!mail2gene)(?!mail2genes)(?!mail2geneva)(?!mail2george)(?!mail2georgia)(?!mail2gerald)(?!mail2german)(?!mail2germany)(?!mail2ghana)(?!mail2gilbert)(?!mail2gina)(?!mail2girl)(?!mail2glen)(?!mail2gloria)(?!mail2goddess)(?!mail2gold)(?!mail2golfclub)(?!mail2golfer)(?!mail2gordon)(?!mail2government)(?!mail2grab)(?!mail2grace)(?!mail2graham)(?!mail2grandma)(?!mail2grandpa)(?!mail2grant)(?!mail2greece)(?!mail2green)(?!mail2greg)(?!mail2grenada)(?!mail2gsm)(?!mail2guard)(?!mail2guatemala)(?!mail2guy)(?!mail2hades)(?!mail2haiti)(?!mail2hal)(?!mail2handhelds)(?!mail2hank)(?!mail2hannah)(?!mail2harold)(?!mail2harry)(?!mail2hawaii)(?!mail2headhunter)(?!mail2heal)(?!mail2heather)(?!mail2heaven)(?!mail2hebe)(?!mail2hecate)(?!mail2heidi)(?!mail2helen)(?!mail2hell)(?!mail2help)(?!mail2helpdesk)(?!mail2henry)(?!mail2hephaestus)(?!mail2hera)(?!mail2hercules)(?!mail2herman)(?!mail2hermes)(?!mail2hespera)(?!mail2hestia)(?!mail2highschool)(?!mail2hindu)(?!mail2hip)(?!mail2hiphop)(?!mail2holland)(?!mail2holly)(?!mail2hollywood)(?!mail2homer)(?!mail2honduras)(?!mail2honey)(?!mail2hongkong)(?!mail2hope)(?!mail2horse)(?!mail2hot)(?!mail2hotel)(?!mail2houston)(?!mail2howard)(?!mail2hugh)(?!mail2human)(?!mail2hungary)(?!mail2hungry)(?!mail2hygeia)(?!mail2hyperspace)(?!mail2hypnos)(?!mail2ian)(?!mail2ice-cream)(?!mail2iceland)(?!mail2idaho)(?!mail2idontknow)(?!mail2illinois)(?!mail2imam)(?!mail2in)(?!mail2india)(?!mail2indian)(?!mail2indiana)(?!mail2indonesia)(?!mail2infinity)(?!mail2intense)(?!mail2iowa)(?!mail2iran)(?!mail2iraq)(?!mail2ireland)(?!mail2irene)(?!mail2iris)(?!mail2irresistible)(?!mail2irving)(?!mail2irwin)(?!mail2isaac)(?!mail2israel)(?!mail2italian)(?!mail2italy)(?!mail2jackie)(?!mail2jacob)(?!mail2jail)(?!mail2jaime)(?!mail2jake)(?!mail2jamaica)(?!mail2james)(?!mail2jamie)(?!mail2jan)(?!mail2jane)(?!mail2janet)(?!mail2janice)(?!mail2japan)(?!mail2japanese)(?!mail2jasmine)(?!mail2jason)(?!mail2java)(?!mail2jay)(?!mail2jazz)(?!mail2jed)(?!mail2jeffrey)(?!mail2jennifer)(?!mail2jenny)(?!mail2jeremy)(?!mail2jerry)(?!mail2jessica)(?!mail2jessie)(?!mail2jesus)(?!mail2jew)(?!mail2jeweler)(?!mail2jim)(?!mail2jimmy)(?!mail2joan)(?!mail2joann)(?!mail2joanna)(?!mail2jody)(?!mail2joe)(?!mail2joel)(?!mail2joey)(?!mail2john)(?!mail2join)(?!mail2jon)(?!mail2jonathan)(?!mail2jones)(?!mail2jordan)(?!mail2joseph)(?!mail2josh)(?!mail2joy)(?!mail2juan)(?!mail2judge)(?!mail2judy)(?!mail2juggler)(?!mail2julian)(?!mail2julie)(?!mail2jumbo)(?!mail2junk)(?!mail2justin)(?!mail2justme)(?!mail2kansas)(?!mail2karate)(?!mail2karen)(?!mail2karl)(?!mail2karma)(?!mail2kathleen)(?!mail2kathy)(?!mail2katie)(?!mail2kay)(?!mail2kazakhstan)(?!mail2keen)(?!mail2keith)(?!mail2kelly)(?!mail2kelsey)(?!mail2ken)(?!mail2kendall)(?!mail2kennedy)(?!mail2kenneth)(?!mail2kenny)(?!mail2kentucky)(?!mail2kenya)(?!mail2kerry)(?!mail2kevin)(?!mail2kim)(?!mail2kimberly)(?!mail2king)(?!mail2kirk)(?!mail2kiss)(?!mail2kosher)(?!mail2kristin)(?!mail2kurt)(?!mail2kuwait)(?!mail2kyle)(?!mail2kyrgyzstan)(?!mail2la)(?!mail2lacrosse)(?!mail2lance)(?!mail2lao)(?!mail2larry)(?!mail2latvia)(?!mail2laugh)(?!mail2laura)(?!mail2lauren)(?!mail2laurie)(?!mail2lawrence)(?!mail2lawyer)(?!mail2lebanon)(?!mail2lee)(?!mail2leo)(?!mail2leon)(?!mail2leonard)(?!mail2leone)(?!mail2leslie)(?!mail2letter)(?!mail2liberia)(?!mail2libertarian)(?!mail2libra)(?!mail2libya)(?!mail2liechtenstein)(?!mail2life)(?!mail2linda)(?!mail2linux)(?!mail2lionel)(?!mail2lipstick)(?!mail2liquid)(?!mail2lisa)(?!mail2lithuania)(?!mail2litigator)(?!mail2liz)(?!mail2lloyd)(?!mail2lois)(?!mail2lola)(?!mail2london)(?!mail2looking)(?!mail2lori)(?!mail2lost)(?!mail2lou)(?!mail2louis)(?!mail2louisiana)(?!mail2lovable)(?!mail2love)(?!mail2lucky)(?!mail2lucy)(?!mail2lunch)(?!mail2lust)(?!mail2luxembourg)(?!mail2luxury)(?!mail2lyle)(?!mail2lynn)(?!mail2madagascar)(?!mail2madison)(?!mail2madrid)(?!mail2maggie)(?!mail2mail4)(?!mail2maine)(?!mail2malawi)(?!mail2malaysia)(?!mail2maldives)(?!mail2mali)(?!mail2malta)(?!mail2mambo)(?!mail2man)(?!mail2mandy)(?!mail2manhunter)(?!mail2mankind)(?!mail2many)(?!mail2marc)(?!mail2marcia)(?!mail2margaret)(?!mail2margie)(?!mail2marhaba)(?!mail2maria)(?!mail2marilyn)(?!mail2marines)(?!mail2mark)(?!mail2marriage)(?!mail2married)(?!mail2marries)(?!mail2mars)(?!mail2marsha)(?!mail2marshallislands)(?!mail2martha)(?!mail2martin)(?!mail2marty)(?!mail2marvin)(?!mail2mary)(?!mail2maryland)(?!mail2mason)(?!mail2massachusetts)(?!mail2matt)(?!mail2matthew)(?!mail2maurice)(?!mail2mauritania)(?!mail2mauritius)(?!mail2max)(?!mail2maxwell)(?!mail2maybe)(?!mail2mba)(?!mail2me4u)(?!mail2mechanic)(?!mail2medieval)(?!mail2megan)(?!mail2mel)(?!mail2melanie)(?!mail2melissa)(?!mail2melody)(?!mail2member)(?!mail2memphis)(?!mail2methodist)(?!mail2mexican)(?!mail2mexico)(?!mail2mgz)(?!mail2miami)(?!mail2michael)(?!mail2michelle)(?!mail2michigan)(?!mail2mike)(?!mail2milan)(?!mail2milano)(?!mail2mildred)(?!mail2milkyway)(?!mail2millennium)(?!mail2millionaire)(?!mail2milton)(?!mail2mime)(?!mail2mindreader)(?!mail2mini)(?!mail2minister)(?!mail2minneapolis)(?!mail2minnesota)(?!mail2miracle)(?!mail2missionary)(?!mail2mississippi)(?!mail2missouri)(?!mail2mitch)(?!mail2model)(?!mail2mom)(?!mail2monaco)(?!mail2money)(?!mail2mongolia)(?!mail2monica)(?!mail2montana)(?!mail2monty)(?!mail2moon)(?!mail2morocco)(?!mail2morpheus)(?!mail2mors)(?!mail2moscow)(?!mail2moslem)(?!mail2mouseketeer)(?!mail2movies)(?!mail2mozambique)(?!mail2mp3)(?!mail2mrright)(?!mail2msright)(?!mail2museum)(?!mail2music)(?!mail2musician)(?!mail2muslim)(?!mail2my)(?!mail2myboat)(?!mail2mycar)(?!mail2mycell)(?!mail2mygsm)(?!mail2mylaptop)(?!mail2mymac)(?!mail2mypager)(?!mail2mypalm)(?!mail2mypc)(?!mail2myphone)(?!mail2myplane)(?!mail2namibia)(?!mail2nancy)(?!mail2nasdaq)(?!mail2nathan)(?!mail2nauru)(?!mail2navy)(?!mail2neal)(?!mail2nebraska)(?!mail2ned)(?!mail2neil)(?!mail2nelson)(?!mail2nemesis)(?!mail2nepal)(?!mail2netherlands)(?!mail2network)(?!mail2nevada)(?!mail2newhampshire)(?!mail2newjersey)(?!mail2newmexico)(?!mail2newyork)(?!mail2newzealand)(?!mail2nicaragua)(?!mail2nick)(?!mail2nicole)(?!mail2niger)(?!mail2nigeria)(?!mail2nike)(?!mail2no)(?!mail2noah)(?!mail2noel)(?!mail2noelle)(?!mail2normal)(?!mail2norman)(?!mail2northamerica)(?!mail2northcarolina)(?!mail2northdakota)(?!mail2northpole)(?!mail2norway)(?!mail2notus)(?!mail2noway)(?!mail2nowhere)(?!mail2nuclear)(?!mail2nun)(?!mail2ny)(?!mail2oasis)(?!mail2oceanographer)(?!mail2ohio)(?!mail2ok)(?!mail2oklahoma)(?!mail2oliver)(?!mail2oman)(?!mail2one)(?!mail2onfire)(?!mail2online)(?!mail2oops)(?!mail2open)(?!mail2ophthalmologist)(?!mail2optometrist)(?!mail2oregon)(?!mail2oscars)(?!mail2oslo)(?!mail2painter)(?!mail2pakistan)(?!mail2palau)(?!mail2pan)(?!mail2panama)(?!mail2paraguay)(?!mail2paralegal)(?!mail2paris)(?!mail2park)(?!mail2parker)(?!mail2party)(?!mail2passion)(?!mail2pat)(?!mail2patricia)(?!mail2patrick)(?!mail2patty)(?!mail2paul)(?!mail2paula)(?!mail2pay)(?!mail2peace)(?!mail2pediatrician)(?!mail2peggy)(?!mail2pennsylvania)(?!mail2perry)(?!mail2persephone)(?!mail2persian)(?!mail2peru)(?!mail2pete)(?!mail2peter)(?!mail2pharmacist)(?!mail2phil)(?!mail2philippines)(?!mail2phoenix)(?!mail2phonecall)(?!mail2phyllis)(?!mail2pickup)(?!mail2pilot)(?!mail2pisces)(?!mail2planet)(?!mail2platinum)(?!mail2plato)(?!mail2pluto)(?!mail2pm)(?!mail2podiatrist)(?!mail2poet)(?!mail2poland)(?!mail2policeman)(?!mail2policewoman)(?!mail2politician)(?!mail2pop)(?!mail2pope)(?!mail2popular)(?!mail2portugal)(?!mail2poseidon)(?!mail2potatohead)(?!mail2power)(?!mail2presbyterian)(?!mail2president)(?!mail2priest)(?!mail2prince)(?!mail2princess)(?!mail2producer)(?!mail2professor)(?!mail2protect)(?!mail2psychiatrist)(?!mail2psycho)(?!mail2psychologist)(?!mail2qatar)(?!mail2queen)(?!mail2rabbi)(?!mail2race)(?!mail2racer)(?!mail2rachel)(?!mail2rage)(?!mail2rainmaker)(?!mail2ralph)(?!mail2randy)(?!mail2rap)(?!mail2rare)(?!mail2rave)(?!mail2ray)(?!mail2raymond)(?!mail2realtor)(?!mail2rebecca)(?!mail2recruiter)(?!mail2recycle)(?!mail2redhead)(?!mail2reed)(?!mail2reggie)(?!mail2register)(?!mail2rent)(?!mail2republican)(?!mail2resort)(?!mail2rex)(?!mail2rhodeisland)(?!mail2rich)(?!mail2richard)(?!mail2ricky)(?!mail2ride)(?!mail2riley)(?!mail2rita)(?!mail2rob)(?!mail2robert)(?!mail2roberta)(?!mail2robin)(?!mail2rock)(?!mail2rocker)(?!mail2rod)(?!mail2rodney)(?!mail2romania)(?!mail2rome)(?!mail2ron)(?!mail2ronald)(?!mail2ronnie)(?!mail2rose)(?!mail2rosie)(?!mail2roy)(?!mail2rudy)(?!mail2rugby)(?!mail2runner)(?!mail2russell)(?!mail2russia)(?!mail2russian)(?!mail2rusty)(?!mail2ruth)(?!mail2rwanda)(?!mail2ryan)(?!mail2sa)(?!mail2sabrina)(?!mail2safe)(?!mail2sagittarius)(?!mail2sail)(?!mail2sailor)(?!mail2sal)(?!mail2salaam)(?!mail2sam)(?!mail2samantha)(?!mail2samoa)(?!mail2samurai)(?!mail2sandra)(?!mail2sandy)(?!mail2sanfrancisco)(?!mail2sanmarino)(?!mail2santa)(?!mail2sara)(?!mail2sarah)(?!mail2sat)(?!mail2saturn)(?!mail2saudi)(?!mail2saudiarabia)(?!mail2save)(?!mail2savings)(?!mail2school)(?!mail2scientist)(?!mail2scorpio)(?!mail2scott)(?!mail2sean)(?!mail2search)(?!mail2seattle)(?!mail2secretagent)(?!mail2senate)(?!mail2senegal)(?!mail2sensual)(?!mail2seth)(?!mail2sevenseas)(?!mail2sexy)(?!mail2seychelles)(?!mail2shane)(?!mail2sharon)(?!mail2shawn)(?!mail2ship)(?!mail2shirley)(?!mail2shoot)(?!mail2shuttle)(?!mail2sierraleone)(?!mail2simon)(?!mail2singapore)(?!mail2single)(?!mail2site)(?!mail2skater)(?!mail2skier)(?!mail2sky)(?!mail2sleek)(?!mail2slim)(?!mail2slovakia)(?!mail2slovenia)(?!mail2smile)(?!mail2smith)(?!mail2smooth)(?!mail2soccer)(?!mail2soccerfan)(?!mail2socialist)(?!mail2soldier)(?!mail2somalia)(?!mail2son)(?!mail2song)(?!mail2sos)(?!mail2sound)(?!mail2southafrica)(?!mail2southamerica)(?!mail2southcarolina)(?!mail2southdakota)(?!mail2southkorea)(?!mail2southpole)(?!mail2spain)(?!mail2spanish)(?!mail2spare)(?!mail2spectrum)(?!mail2splash)(?!mail2sponsor)(?!mail2sports)(?!mail2srilanka)(?!mail2stacy)(?!mail2stan)(?!mail2stanley)(?!mail2star)(?!mail2state)(?!mail2stephanie)(?!mail2steve)(?!mail2steven)(?!mail2stewart)(?!mail2stlouis)(?!mail2stock)(?!mail2stockholm)(?!mail2stockmarket)(?!mail2storage)(?!mail2store)(?!mail2strong)(?!mail2student)(?!mail2studio)(?!mail2studio54)(?!mail2stuntman)(?!mail2subscribe)(?!mail2sudan)(?!mail2superstar)(?!mail2surfer)(?!mail2suriname)(?!mail2susan)(?!mail2suzie)(?!mail2swaziland)(?!mail2sweden)(?!mail2sweetheart)(?!mail2swim)(?!mail2swimmer)(?!mail2swiss)(?!mail2switzerland)(?!mail2sydney)(?!mail2sylvia)(?!mail2syria)(?!mail2taboo)(?!mail2taiwan)(?!mail2tajikistan)(?!mail2tammy)(?!mail2tango)(?!mail2tanya)(?!mail2tanzania)(?!mail2tara)(?!mail2taurus)(?!mail2taxi)(?!mail2taxidermist)(?!mail2taylor)(?!mail2taz)(?!mail2teacher)(?!mail2technician)(?!mail2ted)(?!mail2telephone)(?!mail2teletubbie)(?!mail2tenderness)(?!mail2tennessee)(?!mail2tennis)(?!mail2tennisfan)(?!mail2terri)(?!mail2terry)(?!mail2test)(?!mail2texas)(?!mail2thailand)(?!mail2therapy)(?!mail2think)(?!mail2tickets)(?!mail2tiffany)(?!mail2tim)(?!mail2time)(?!mail2timothy)(?!mail2tina)(?!mail2titanic)(?!mail2toby)(?!mail2todd)(?!mail2togo)(?!mail2tom)(?!mail2tommy)(?!mail2tonga)(?!mail2tony)(?!mail2touch)(?!mail2tourist)(?!mail2tracey)(?!mail2tracy)(?!mail2tramp)(?!mail2travel)(?!mail2traveler)(?!mail2travis)(?!mail2trekkie)(?!mail2trex)(?!mail2triallawyer)(?!mail2trick)(?!mail2trillionaire)(?!mail2troy)(?!mail2truck)(?!mail2trump)(?!mail2try)(?!mail2tunisia)(?!mail2turbo)(?!mail2turkey)(?!mail2turkmenistan)(?!mail2tv)(?!mail2tycoon)(?!mail2tyler)(?!mail2u4me)(?!mail2uae)(?!mail2uganda)(?!mail2uk)(?!mail2ukraine)(?!mail2uncle)(?!mail2unsubscribe)(?!mail2uptown)(?!mail2uruguay)(?!mail2usa)(?!mail2utah)(?!mail2uzbekistan)(?!mail2v)(?!mail2vacation)(?!mail2valentines)(?!mail2valerie)(?!mail2valley)(?!mail2vamoose)(?!mail2vanessa)(?!mail2vanuatu)(?!mail2venezuela)(?!mail2venous)(?!mail2venus)(?!mail2vermont)(?!mail2vickie)(?!mail2victor)(?!mail2victoria)(?!mail2vienna)(?!mail2vietnam)(?!mail2vince)(?!mail2virginia)(?!mail2virgo)(?!mail2visionary)(?!mail2vodka)(?!mail2volleyball)(?!mail2waiter)(?!mail2wallstreet)(?!mail2wally)(?!mail2walter)(?!mail2warren)(?!mail2washington)(?!mail2wave)(?!mail2way)(?!mail2waycool)(?!mail2wayne)(?!mail2webmaster)(?!mail2webtop)(?!mail2webtv)(?!mail2weird)(?!mail2wendell)(?!mail2wendy)(?!mail2westend)(?!mail2westvirginia)(?!mail2whether)(?!mail2whip)(?!mail2white)(?!mail2whitehouse)(?!mail2whitney)(?!mail2why)(?!mail2wilbur)(?!mail2wild)(?!mail2willard)(?!mail2willie)(?!mail2wine)(?!mail2winner)(?!mail2wired)(?!mail2wisconsin)(?!mail2woman)(?!mail2wonder)(?!mail2world)(?!mail2worship)(?!mail2wow)(?!mail2www)(?!mail2wyoming)(?!mail2xfiles)(?!mail2xox)(?!mail2yachtclub)(?!mail2yahalla)(?!mail2yemen)(?!mail2yes)(?!mail2yugoslavia)(?!mail2zack)(?!mail2zambia)(?!mail2zenith)(?!mail2zephir)(?!mail2zeus)(?!mail2zipper)(?!mail2zoo)(?!mail2zoologist)(?!mail2zurich)(?!mail3000)(?!mail333)(?!mailandftp)(?!MailandNews)(?!mailandnews)(?!mailas)(?!mailasia)(?!mailbolt)(?!mailbomb)(?!mailboom)(?!mailbox)(?!mailbox)(?!mailbox)(?!mailc)(?!mailcan)(?!mailcc)(?!mailchoose)(?!mailcity)(?!mailclub)(?!mailclub)(?!mailexcite)(?!mailforce)(?!mailftp)(?!mailgate)(?!mailgenie)(?!mailhaven)(?!mailhood)(?!mailingweb)(?!mailisent)(?!mailite)(?!mailme)(?!mailmight)(?!mailmij)(?!mailnew)(?!mailops)(?!mailoye)(?!mailpanda)(?!mailpokemon)(?!mailpride)(?!mailpuppy)(?!mailroom)(?!mailru)(?!mailsent)(?!mailshuttle)(?!mailstart)(?!mailstartplus)(?!mailsurf)(?!mailtag)(?!mailto)(?!mailup)(?!mailwire)(?!maktoob)(?!malayalamtelevision)(?!maltesemail)(?!manager)(?!mancity)(?!mantrafreenet)(?!mantramail)(?!mantraonline)(?!marchmail)(?!mariahc)(?!marijuana)(?!marijuana)(?!marketing)(?!married-not)(?!marsattack)(?!martindalemail)(?!mash4077)(?!masrawy)(?!matmail)(?!mauimail)(?!mauritius)(?!maxleft)(?!me-mail)(?!me)(?!medmail)(?!medscape)(?!meetingmall)(?!megago)(?!megamail)(?!megapoint)(?!mehrani)(?!mehtaweb)(?!mekhong)(?!melodymail)(?!meloo)(?!message)(?!messages)(?!metacrawler)(?!metalfan)(?!metta)(?!miatadriver)(?!miesto)(?!miho-nakayama)(?!mikrotamanet)(?!millionaireintraining)(?!millionairemail)(?!milmail)(?!milmail)(?!mindless)(?!mindspring)(?!mini-mail)(?!misery)(?!mittalweb)(?!mixmail)(?!mjfrogmail)(?!ml1)(?!mobilbatam)(?!mochamail)(?!mohammed)(?!moldova)(?!moldova)(?!moldovacc)(?!momslife)(?!money)(?!moonman)(?!moose-mail)(?!mortaza)(?!mosaicfx)(?!most-wanted)(?!mostlysunny)(?!motormania)(?!movemail)(?!movieluver)(?!mp4)(?!mr-potatohead)(?!mrpost)(?!mscold)(?!msgbox)(?!msn)(?!mttestdriver)(?!MTtestdriver)(?!MultipleChoices)(?!mundomail)(?!munich)(?!music)(?!music)(?!musician)(?!musicscene)(?!muslimemail)(?!muslimsonline)(?!mutantweb)(?!mybox)(?!mycabin)(?!mycampus)(?!mycity)(?!mycool)(?!mydomain)(?!mydotcomaddress)(?!myfamily)(?!myfastmail)(?!mygo)(?!myiris)(?!mynamedot)(?!mynetaddress)(?!myownemail)(?!myownfriends)(?!mypad)(?!mypersonalemail)(?!myplace)(?!myrealbox)(?!myremarq)(?!myself)(?!mystupidjob)(?!mythirdage)(?!myway)(?!myworldmail)(?!n2)(?!n2baseball)(?!n2business)(?!n2mail)(?!n2soccer)(?!n2software)(?!nabc)(?!nafe)(?!nagpal)(?!nakedgreens)(?!name)(?!nameplanet)(?!nandomail)(?!naplesnews)(?!naseej)(?!nativestar)(?!nativeweb)(?!naui)(?!navigator)(?!navy)(?!naz)(?!nchoicemail)(?!neeva)(?!nemra1)(?!nenter)(?!nervhq)(?!net-pager)(?!net4b)(?!net4you)(?!netbounce)(?!netbroadcaster)(?!netby)(?!netcenter-vn)(?!netcourrier)(?!netexecutive)(?!netexpressway)(?!netgenie)(?!netian)(?!netlane)(?!netlimit)(?!netmanor)(?!netmongol)(?!netnoir)(?!netpiper)(?!netposta)(?!netradiomail)(?!netralink)(?!netscape)(?!netspeedway)(?!netsquare)(?!netster)(?!nettaxi)(?!netzero)(?!netzero)(?!neuro)(?!newmail)(?!newmail)(?!newmail)(?!newsboysmail)(?!newyork)(?!nexxmail)(?!nfmail)(?!nhmail)(?!nicebush)(?!nicegal)(?!nicholastse)(?!nicolastse)(?!nightmail)(?!nikopage)(?!nimail)(?!nirvanafan)(?!noavar)(?!norika-fujiwara)(?!norikomail)(?!northgates)(?!nospammail)(?!ntscan)(?!ny)(?!nyc)(?!nycmail)(?!nzoomail)(?!o-tay)(?!OaklandAs-fan)(?!oaklandas-fan)(?!oceanfree)(?!oddpost)(?!odmail)(?!office-email)(?!officedomain)(?!offroadwarrior)(?!oicexchange)(?!okbank)(?!okhuman)(?!okmad)(?!okmagic)(?!okname)(?!okuk)(?!oldies1041)(?!oldies104mail)(?!ole)(?!olemail)(?!olympist)(?!omaninfo)(?!onebox)(?!onet)(?!oninet)(?!online)(?!onlinewiz)(?!onmilwaukee)(?!onobox)(?!onvillage)(?!operafan)(?!operamail)(?!optician)(?!optonline)(?!orbitel)(?!orgmail)(?!oso)(?!otakumail)(?!our-computer)(?!our-office)(?!our)(?!ourbrisbane)(?!ournet)(?!outel)(?!outgun)(?!over-the-rainbow)(?!ownmail)(?!pacbell)(?!pacific-re)(?!packersfan)(?!pagina)(?!pagons)(?!pakistanmail)(?!pakistanoye)(?!palestinemail)(?!parkjiyoon)(?!parrot)(?!ParsMail)(?!parsmail)(?!partlycloudy)(?!partynight)(?!parvazi)(?!passwordmail)(?!pathfindermail)(?!pconnections)(?!pcpostal)(?!pcsrock)(?!peachworld)(?!pediatrician)(?!pemail)(?!penpen)(?!peoplepc)(?!peopleweb)(?!perfectmail)(?!personal)(?!personales)(?!petml)(?!pettypool)(?!pezeshkpour)(?!phayze)(?!phone)(?!phreaker)(?!Phreaker)(?!pianomail)(?!pickupman)(?!picusnet)(?!pigpig)(?!pinoymail)(?!piracha)(?!pisem)(?!planet-mail)(?!planetaccess)(?!planetall)(?!planetarymotion)(?!planetdirect)(?!planetearthinter)(?!planetout)(?!plasa)(?!playersodds)(?!playful)(?!pmail)(?!pobox)(?!pobox)(?!pochta)(?!poczta)(?!poetic)(?!pokemonpost)(?!pokepost)(?!polbox)(?!policeoffice)(?!pool-sharks)(?!poond)(?!popaccount)(?!popmail)(?!popsmail)(?!popstar)(?!populus)(?!portableoffice)(?!portugalmail)(?!portugalmail)(?!portugalnet)(?!positive-thinking)(?!post)(?!post)(?!post)(?!posta)(?!posta)(?!postaccesslite)(?!postafree)(?!postaweb)(?!postinbox)(?!postino)(?!postmark)(?!postpro)(?!pousa)(?!powerfan)(?!praize)(?!pray247)(?!premiumservice)(?!presidency)(?!priest)(?!primposta)(?!primposta)(?!pro)(?!probemail)(?!prodigy)(?!progetplus)(?!programmer)(?!programozo)(?!proinbox)(?!project2k)(?!prolaunch)(?!promessage)(?!prontomail)(?!psv-supporter)(?!ptd)(?!publicist)(?!pulp-fiction)(?!punkass)(?!PunkAss)(?!purpleturtle)(?!qatarmail)(?!qprfans)(?!qrio)(?!quackquack)(?!quakemail)(?!qudsmail)(?!quepasa)(?!quickhosts)(?!quickwebmail)(?!quiklinks)(?!quikmail)(?!qwest)(?!qwestoffice)(?!r-o-o-t)(?!raakim)(?!racedriver)(?!racefanz)(?!racingmail)(?!radicalz)(?!ragingbull)(?!ranmamail)(?!rastogi)(?!ratt-n-roll)(?!rattle-snake)(?!ravearena)(?!ravemail)(?!razormail)(?!rccgmail)(?!realemail)(?!reallyfast)(?!realradiomail)(?!recycler)(?!recyclermail)(?!rediffmail)(?!rediffmailpro)(?!rednecks)(?!redseven)(?!redsfans)(?!reggafan)(?!regiononline)(?!registerednurses)(?!repairman)(?!reply)(?!representative)(?!rescueteam)(?!resumemail)(?!rezai)(?!richmondhill)(?!rickymail)(?!rin)(?!rn)(?!roadrunner)(?!roanokemail)(?!rock)(?!rocketmail)(?!rockfan)(?!rodrun)(?!rome)(?!romymichele)(?!roosh)(?!rotfl)(?!roughnet)(?!rr)(?!rrohio)(?!rsub)(?!rubyridge)(?!runbox)(?!rushpost)(?!ruttolibero)(?!rvshop)(?!s-mail)(?!sabreshockey)(?!sacbeemail)(?!safarimail)(?!safe-mail)(?!sagra)(?!sailormoon)(?!saintly)(?!saintmail)(?!sale-sale-sale)(?!salehi)(?!samerica)(?!samilan)(?!sammimail)(?!sanfranmail)(?!sanook)(?!sapo)(?!saudia)(?!sayhi)(?!sbcglobal)(?!scandalmail)(?!schizo)(?!schoolemail)(?!schoolmail)(?!schoolsucks)(?!schweiz)(?!sci)(?!scientist)(?!scifianime)(?!scotland)(?!scubadiving)(?!seanet)(?!searchwales)(?!sebil)(?!secret-police)(?!secretservices)(?!seductive)(?!seekstoyboy)(?!send)(?!sendme)(?!sent)(?!sentrismail)(?!servemymail)(?!sesmail)(?!sexmagnet)(?!SexMagnet)(?!seznam)(?!shahweb)(?!shaniastuff)(?!sharewaredevelopers)(?!sharmaweb)(?!she)(?!shootmail)(?!shotgun)(?!shuf)(?!sialkotcity)(?!sialkotian)(?!sialkotoye)(?!sify)(?!silkroad)(?!sinamail)(?!singapore)(?!singles4jesus)(?!singmail)(?!singpost)(?!skafan)(?!skim)(?!skizo)(?!slamdunkfan)(?!slingshot)(?!slo)(?!slotter)(?!smapxsmap)(?!smoothmail)(?!snail-mail)(?!snail-mail)(?!snakemail)(?!sndt)(?!sneakemail)(?!snet)(?!sniper)(?!snoopymail)(?!snowboarding)(?!snowdonia)(?!socamail)(?!soccerAmerica)(?!socceramerica)(?!soccermail)(?!soccermomz)(?!sociologist)(?!softhome)(?!sol)(?!soldier)(?!soon)(?!soulfoodcookbook)(?!sp)(?!space-bank)(?!space-man)(?!space-ship)(?!space-travel)(?!space)(?!spaceart)(?!spacebank)(?!spacemart)(?!spacetowns)(?!spacewar)(?!spamex)(?!spartapiet)(?!spazmail)(?!speedemail)(?!speedpost)(?!speedrules)(?!speedrulz)(?!spils)(?!spinfinder)(?!spl)(?!sportemail)(?!sportsmail)(?!sporttruckdriver)(?!spray)(?!spray)(?!spymac)(?!srilankan)(?!st-davids)(?!stade)(?!stalag13)(?!stargateradio)(?!starmail)(?!starmail)(?!starmedia)(?!starplace)(?!starspath)(?!starting-point)(?!StarTrekMail)(?!startrekmail)(?!stealthmail)(?!stockracer)(?!stoned)(?!stones)(?!stopdropandroll)(?!storksite)(?!stribmail)(?!strompost)(?!strongguy)(?!studentcenter)(?!subnetwork)(?!subram)(?!sudanmail)(?!suhabi)(?!suisse)(?!sukhumvit)(?!sunpoint)(?!sunrise-sunset)(?!sunsgame)(?!sunumail)(?!superdada)(?!supereva)(?!supermail)(?!surat)(?!surf3)(?!surfree)(?!surfy)(?!surimail)(?!survivormail)(?!swbell)(?!sweb)(?!swiftdesk)(?!swingeasyhithard)(?!swingfan)(?!swirve)(?!swissinfo)(?!swissmail)(?!switchboardmail)(?!switzerland)(?!sx172)(?!syom)(?!syriamail)(?!t2mail)(?!takuyakimura)(?!talk21)(?!talkcity)(?!tamil)(?!tankpolice)(?!tatanova)(?!tbwt)(?!tds)(?!teachermail)(?!teamdiscovery)(?!teamtulsa)(?!tech4peace)(?!techemail)(?!techie)(?!technologist)(?!techpointer)(?!techscout)(?!techseek)(?!techspot)(?!teenagedirtbag)(?!telebot)(?!telebot)(?!teleline)(?!telerymd)(?!telinco)(?!telkom)(?!telpage)(?!temtulsa)(?!tenchiclub)(?!tenderkiss)(?!tennismail)(?!terra)(?!terra)(?!terra)(?!tfz)(?!thai)(?!thaimail)(?!thaimail)(?!the-african)(?!the-airforce)(?!the-aliens)(?!the-american)(?!the-animal)(?!the-army)(?!the-astronaut)(?!the-beauty)(?!the-big-apple)(?!the-biker)(?!the-boss)(?!the-brazilian)(?!the-canadian)(?!the-canuck)(?!the-captain)(?!the-chinese)(?!the-country)(?!the-cowboy)(?!the-davis-home)(?!the-dutchman)(?!the-eagles)(?!the-englishman)(?!the-fastest)(?!the-fool)(?!the-frenchman)(?!the-galaxy)(?!the-genius)(?!the-gentleman)(?!the-german)(?!the-gremlin)(?!the-hooligan)(?!the-italian)(?!the-japanese)(?!the-lair)(?!the-madman)(?!the-mailinglist)(?!the-marine)(?!the-master)(?!the-mexican)(?!the-ministry)(?!the-monkey)(?!the-newsletter)(?!the-pentagon)(?!the-police)(?!the-prayer)(?!the-professional)(?!the-quickest)(?!the-russian)(?!the-snake)(?!the-spaceman)(?!the-stock-market)(?!the-student)(?!the-whitehouse)(?!the-wild-west)(?!the18th)(?!thecoolguy)(?!thecriminals)(?!thedoghousemail)(?!thedorm)(?!theend)(?!theglobe)(?!thegolfcourse)(?!thegooner)(?!theheadoffice)(?!thelanddownunder)(?!themail)(?!themillionare)(?!theoffice)(?!thepokerface)(?!thepostmaster)(?!theraces)(?!theracetrack)(?!thestreetfighter)(?!theteebox)(?!thewatercooler)(?!thewizzard)(?!thewizzkid)(?!thezhangs)(?!thirdage)(?!thisgirl)(?!thoic)(?!thundermail)(?!tidni)(?!timein)(?!tiscali)(?!tiscali)(?!tiscali)(?!tiscali)(?!tkcity)(?!toast)(?!toolsource)(?!topchat)(?!topletter)(?!topsurf)(?!topteam)(?!torchmail)(?!totalmusic)(?!ToughGuy)(?!toughguy)(?!travel)(?!trialbytrivia)(?!tritium)(?!trmailbox)(?!tropicalstorm)(?!truckers)(?!truckerz)(?!truckracer)(?!truckracers)(?!trust-me)(?!truth247)(?!truthmail)(?!tunisiamail)(?!turkey)(?!twinstarsmail)(?!tycoonmail)(?!typemail)(?!u2club)(?!uae)(?!uaemail)(?!ubbi)(?!uboot)(?!uk2k)(?!uk2net)(?!uk7)(?!uk8)(?!ukbuilder)(?!ukcool)(?!ukdreamcast)(?!ukmail)(?!ukmax)(?!ukr)(?!ultapulta)(?!ultrapostman)(?!ummah)(?!umpire)(?!unbounded)(?!unforgettable)(?!uni)(?!unican)(?!unihome)(?!universal)(?!uno)(?!uno)(?!unofree)(?!unomail)(?!uole)(?!uolmail)(?!uomail)(?!upf)(?!ureach)(?!urgentmail)(?!usa)(?!usa)(?!usaaccess)(?!usanetmail)(?!usermail)(?!usma)(?!usmc)(?!uswestmail)(?!uymail)(?!uyuyuy)(?!v-sexi)(?!vahoo)(?!vampirehunter)(?!varbizmail)(?!vcmail)(?!velocall)(?!verizon)(?!verizonmail)(?!veryfast)(?!veryspeedy)(?!vip)(?!vipmail)(?!virgilio)(?!virgin)(?!virtual-mail)(?!virtualactive)(?!virtualmail)(?!visitmail)(?!visitweb)(?!visto)(?!visualcities)(?!vivavelocity)(?!vivianhsu)(?!vjmail)(?!vjtimail)(?!vlmail)(?!vnn)(?!volcanomail)(?!vote-democrats)(?!vote-hillary)(?!vote-republicans)(?!vote4gop)(?!votenet)(?!vr9)(?!w3)(?!wahoye)(?!wales2000)(?!wanadoo)(?!warmmail)(?!warpmail)(?!warrior)(?!waumail)(?!wbdet)(?!wearab)(?!web-police)(?!web)(?!webave)(?!WebCamMail)(?!webcammail)(?!webcity)(?!webdream)(?!webinbox)(?!webindia123)(?!webjump)(?!webmail)(?!webmails)(?!webprogramming)(?!webstation)(?!webtopmail)(?!weedmail)(?!weekmail)(?!weekonline)(?!wehshee)(?!welsh-lady)(?!whale-mail)(?!whartontx)(?!wheelweb)(?!whipmail)(?!whoever)(?!whoopymail)(?!wickedmail)(?!wideopenwest)(?!wildmail)(?!windrivers)(?!windstream)(?!wingnutz)(?!winning)(?!witty)(?!wiz)(?!wkbwmail)(?!wolf-web)(?!wombles)(?!wonder-net)(?!wongfaye)(?!wooow)(?!workmail)(?!worldemail)(?!worldmailer)(?!wosaddict)(?!wouldilie)(?!wowgirl)(?!wowmail)(?!wowway)(?!wp)(?!wptamail)(?!wrestlingpages)(?!wrexham)(?!writeme)(?!writemeback)(?!wrongmail)(?!wtvhmail)(?!wwdg)(?!www)(?!www2000)(?!wx88)(?!wxs)(?!x-mail)(?!x-networks)(?!x5g)(?!xmail)(?!xmastime)(?!xmsg)(?!xoom)(?!xoommail)(?!xsmail)(?!xuno)(?!xzapmail)(?!yada-yada)(?!yaho)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoo)(?!yahoofs)(?!yalla)(?!yalook)(?!yam)(?!yandex)(?!yapost)(?!yawmail)(?!yclub)(?!yebox)(?!yehaa)(?!yehey)(?!yemenmail)(?!yepmail)(?!yesbox)(?!yifan)(?!ymail)(?!ynnmail)(?!yogotemail)(?!yopolis)(?!youareadork)(?!youpy)(?!your-house)(?!yourinbox)(?!yourlover)(?!yournightmare)(?!yours)(?!yourssincerely)(?!yourteacher)(?!yourwap)(?!youvegotmail)(?!yuuhuu)(?!yyhmail)(?!zahadum)(?!zcities)(?!zdnetmail)(?!zeeks)(?!zeepost)(?!zensearch)(?!zhaowei)(?!zionweb)(?!zip)(?!zipido)(?!ziplip)(?!zipmail)(?!zipmax)(?!zmail)(?!zonnet)(?!zoominternet)(?!zubee)(?!zuvio)(?!zuzzurello)(?!zwallet)(?!zybermail)(?!zydecofan)(?!zzn)[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  	//var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(?!gmail)([\w-]+.)+(?:\.[a-zA-Z0-9-]{2,4}+)*$/;
    //var re = /^\w+([\.-])
    var is_email=re.test(input.val());
  	if(is_email){input.removeClass("invalid").addClass("valid");}
  	else{input.removeClass("valid").addClass("invalid");}
  });
  $('#contact_website').on('blur', function() {
  	var input=$(this);
  	if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
  	var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])?/;
  	var is_url=re.test(input.val());
  	if(is_url){input.removeClass("invalid").addClass("valid");}
  	else{input.removeClass("valid").addClass("invalid");}
  });
  $("#gated_content").submit(function(event){
  	var error_free=true;

    if (!($("#fname").hasClass("valid"))) {
      $("#form-notes").text("Please input your first name");
      error_free=false;
      $("#fname").removeClass("valid").addClass("invalid");
    };
    if (!($("#lname").hasClass("valid"))) {
      $("#form-notes").text("Please input your last name");
      error_free=false;
      $("#lname").removeClass("valid").addClass("invalid");
    };
    if (!($("#contact_email").hasClass("valid"))) {
      $("#form-notes").text("Please input a business email");
      error_free=false;
      $("#contact_email").removeClass("valid").addClass("invalid");
    };
    if (!($("#company").hasClass("valid"))) {
      $("#form-notes").text("Please input a business name");
      error_free=false;
      $("#company").removeClass("valid").addClass("invalid");
    };
    console.log('error_free',error_free);
  
  	if (!error_free){
  		event.preventDefault();
  	} else {
      /*
      let custom_a = document.createElement('a');
       custom_a.href = '<?php echo $a['download']; ?>';
       if(custom_a.href == ""){$("#gated_content").submit(); return;}
       custom_a.download = true;
       var custom_event = document.createEvent('Event');
       custom_event.initEvent('click', true, true);
       custom_a.dispatchEvent(event);
       */
       var win = window.open('<?php echo $a['download']; ?>', '_blank');
      $("#gated_content").submit()
    }
  });
});


})(jQuery.noConflict());
</script>
  <?php
  return ob_get_clean();
}