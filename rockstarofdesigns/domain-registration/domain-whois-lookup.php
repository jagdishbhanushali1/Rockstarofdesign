<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="keywords" content="domain, domain name registration, web hosting, website builder, email hosting, com,net, org domain names, website design," />
    <meta name="description" content="Domain names & web hosting company offers domain name registration, web hosting, web design and website builder tools cheap." />
     
<title>Domain Whois lookup</title> 
    
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/superdupersite.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/stylev4.css">

    <link media="handheld, only screen and (max-width: 580px), only screen and (max-device-width: 580px)" 
        href="../css/mobile.css" type="text/css" rel="stylesheet" />
    
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	
	

</head>

<body class="">

 

<?php
include 'header.php';
?>
<div id="page-container">
	<div id="page-wrapper">
<div class="row-indent">
    
    <h2 class="ui-heading">Search for Whois</h2>
    
    
    <div class="error" id="chk_dom" style="display:none;">
        Error(s):
        <ul>
            <li>Please enter a phrase to search for!!! </li>
        </ul>
    </div>
    
    
    <br>
    <div id="dname-sug">
        <form name="domainsuggest" method="get" action="domain.php?&amp;goto=metarefresh">
        <input type="hidden" name="formaction" value="domain-name-registration.php">
        <input type="hidden" name="action" value="dom_suggest_check_avail">
            
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="data-form">
              <tbody><tr>
                <td width="150" valign="top"><label class="frm-label" for="Name On Card">Search</label></td>
                <td><input class="frm-field" type="text" name="txtdomainName">
                    <div class="info-small">Eg: www.google.com</div>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="Checkout" type="button" class="uiButton" value="Go" onclick="javascript:chk_domainname(); checkandsubmit(this,document.domainsuggest);">
                </td>
              </tr>
        </tbody></table>

        </form>
    </div>
    
</div>

    <div class="div-spacer">&nbsp;</div>
    <div class="shadow-div">&nbsp;</div>
    <!-- Features -->
    <div class="row-indent">
            <h2 class="ui-heading"><span class="lite-green">FREE</span> Add-ons with every Domain Name!</h2>
    <p class="fea-heading">Get over $100 worth of Free Services with every Domain you Register</p>

        <div class="feature-blurb">
           
            <ul class="frb">
                
                    <li class="ic-1">
                        <span class="title">Free Email Account</span>
                        <div class="list-info">
                            Receive 2 personalized Email Addresses such as mail@yourdomain.com with free fraud, spam and virus protection.
                        </div>
                    </li>
                
                <li class="ic-3">
                    <span class="title">DNS Management</span>                    
                    <div class="list-info">
                        Free lifetime DNS service which allows you to manage your DNS records on our globally
                        distributed and highly redundant DNS infrastructure. 
                    </div>                    
                </li>
                <li class="ic-5">
                    <span class="title">Free Mail Forwards</span>
                    <div class="list-info">
                        Create free email forwards and automatically redirect your email to existing email accounts.
                    </div>                    
                </li>
                <li class="ic-7">
                    <span class="title">Bulk Tools</span>                    
                    <div class="list-info">
                        Easy-to-use bulk tools to help you Register, Renew, Transfer and make other changes to several
                        Domain Names in a single step.
                    </div>                    
                </li>
            </ul>
            <ul class="frb">
                <li class="ic-2">
                    <span class="title">Privacy Protection</span>                    
                    <div class="list-info">
                        Get access to free Privacy Protection with every Domain Name you register. 
                        Maintain your privacy and prevent email spam by masking your public WHOIS details.
                    </div>                    
                </li>
                
                <li class="ic-4">
                    <span class="title">Domain Forwarding</span>                    
                    <div class="list-info">
                         Point your domain name to another website for free! Redirect users when they type your
                        domain name into a browser (with/without domain masking &amp; SEO)
                    </div>                    
                </li>
                                           
                <li class="ic-6">
                    <span class="title">Domain Theft Protection</span>                    
                    <div class="list-info">
                        Protect your Domain from being transferred out accidentally or without your permission
                        with our free Domain Theft Protection.
                    </div>                    
                </li>
                
                <li class="ic-8">                
                    <span class="title">Easy to use Control Panel</span>                    
                    <div class="list-info">
                        Use our intuitive Control Panel to manage your domain name, configure email accounts,
                        renew your domain name and buy more services.
                    </div>
                    
                </li>
            </ul>   
            <div class="clear"></div>
        </div>        
  
    </div>    

<?php
include '../footer.php';

?>