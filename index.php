
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Profibus Australia...</title>
   <link href="style.css" rel="stylesheet">
   <link rel="stylesheet" href="css/stylesheet-expoform.css" />
   <link href="navMenu.css" rel="stylesheet">
   <link href="http://www.profibusaustralia.com.au/lib/flexslider/flexslider.css" rel="stylesheet">
   <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
   <style type="text/css" media="screen">
     .tc{text-align:center;}
     .normal_ul{padding:0 0 0 15px;margin:15px 0;list-style:disc outside;}
     .normal_ol{padding:0 0 0 15px;margin:15px 0;list-style:decimal outside;}
     .clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}
   </style>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script src="rotatingBnner.js"></script>
   <script type="text/javascript" src="http://www.profibusaustralia.com.au/js/Registration.js"></script>
  <script type="text/javascript" src="http://www.profibusaustralia.com.au/js/jquery.validate.js"></script>
  <script type="text/javascript" src="http://www.profibusaustralia.com.au/lib/flexslider/jquery.flexslider-min.js"></script>
<?php if((isset($_GET['src']) && $_GET['src'] != 'pi_2015') || !isset($_GET['src']) || $_GET['src'] == ""){?>
<script>
  var banners = [ 
       {img: 'images/training_masthead.jpg?v=<?php echo time();?>', url: ''},
    {img: 'images/dinosaur_masthead.jpg?v=<?php echo time();?>', url: ''},
      
      /*
    {img: 'images/pi_2016_banner.jpg', url: 'index.php?src=pi_2015'}*/
  ];
  var current_banner = 0;
  $(function(){
    setInterval(function(){
      var a = $('#top_banner').parent(),
          b = $('#top_banner')
          c = banners.length;
      if(current_banner == (c-1)){
        current_banner = 0;
      }else{
        current_banner++;
      }
      a.prop('href', banners[current_banner].url);
      b.prop('src', banners[current_banner].img);
      /*
          b = $('#top_banner').data('imgUrl'),
          d = $('#top_banner').prop('src'),
          c = $('<img/>').prop({"id": "top_banner", "src": b}).attr('data-img-url', d);
          c.load(function(){
            $('#top_banner').remove();
            a.append(c);
          });
      */
    }, 5000)
  })
</script>
<?php }?> 
   <script type="text/javascript">
       var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-36794201-1']);
       _gaq.push(['_setDomainName', 'profibusaustralia.com.au']);
       _gaq.push(['_trackPageview']);
       (function() {
           var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
           ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
           var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
       })();
       //window.onload = rotateBanners;
</script>
</head>
<body style="margin: 0px 0px 0px 0px;">
   <center>
      <br/>
    <table border="0" cellpadding="0px" cellspacing="0px" style="width:1117px;">
          <tr>
            <td colspan="3" height="30">
        <table border="0" cellpadding="0px" cellspacing="0px">
          <td colspan="2" width="600"></td>
          <td colspan="2" width="500">
            <ul class="main_nav">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="index.php?src=course">Training</a>
              </li>
              <li class="no_border">
                <a href="index.php?src=contact">Contact Us</a>
              </li>
            </ul>
          </td>
        </table>
            </td>
         </tr>
    </table>
      <table  border='0' cellpadding="0px" cellspacing="0px" style="background:#fff;width:1117px; border-left:#BFBFBF 1px solid; border-top: #BFBFBF 1px solid;border-right:#BFBFBF 1px solid" >
         <tr>
           <td  align="center" colspan="3" valign="middle" bgcolor="#ffffff"><?php
            /*      error_reporting(0);
          if (($_GET['src'] == "Technical_Exhibitions"))
                  {
           echo "<a href=\"index.php?src=course\"><img  src=\"http://www.profibusaustralia.com.au/images/masthead2014.jpg\" border=\"0px\"/></a>";
                  }
          else if(($_GET['src'] == "course"))
                  {
           echo "<a href=\"index.php?src=course\"><img  src=\"http://www.profibusaustralia.com.au/images/masthead2014.jpg\" border=\"0px\"/></a>";
                  }
                  else
                  {
                     echo "<a href=\"index.php?src=course\"><img  src=\"http://www.profibusaustralia.com.au/images/masthead2014.jpg\" border=\"0px\"/></a>";
                  }
               */?>
               <p style="margin:0;padding:0;text-align:center;"><img src="img/top01.jpg" /></p>
               <div style="max-height: 300px;">
               <p style="margin:0;padding:0;text-align:center;">
               <?php 
/*if (isset($_GET['src']) && $_GET['src'] == 'course') { ?>
                	<img src="images/290116_Training.jpg" data-img-url="images/290116_Training.jpg" id="" />
                <?php } else if((isset($_GET['src']) && $_GET['src'] != 'pi_2015') || (isset($_GET['src']) && $_GET['src'] == "")){?>
                	<a href="/global_forum"><img src="images/Forward_thinking.jpg" data-img-url="images/Forward_thinking.jpg" id="top_banner" /></a>
                <?php } else { ?>
                	<a href="/course"><img src="images/ProfibusEngineerBannerad1.jpg" data-img-url="images/ProfibusEngineerBannerad1.jpg" id="top_banner" /></a>
                <?php }
                   */?>
                    <a href="index.php?src=course">
                        <img src="images/dinosaur_masthead.jpg" data-img-url="images/dinosaur_masthead.jpg" id="top_banner" /></a>
               </p>
               </div>
			   <p class="Text tc">
                   For further information on 2017 PROFIBUS & PROFINET Training – 
                   <a href="index.php?src=course">Click here</a>
            </p>
               <!--p class="Text tc">28<sup>th</sup> PI Meeting: <a href="index.php?src=pi_2015"><strong>Click here</strong></a> 2016 Global Forum: 
			   <a href="global_forum"><strong>Click here</strong></a>  Automation Innovation Summit: <a href="global_forum"><strong>Click here</strong></a></p-->
               <p style="margin:0;padding:0;text-align:center;"><img src="img/top02.jpg" /></p>
           </td>
         </tr>
           <tr>
             <td colspan="3" valign="top" height="5px"></td>
           </tr>
          <tr>
           <td colspan="3" valign="top"><ul id="nav">
              <li><a href="index.php"><strong>Home</strong><br/><span class="navsubHeading">Australia wide <br/>Industry Support</span></a></li>
                <li><a href="index.php?src=course"><strong>Training</strong><br/><span class="navsubHeading">
                    Certified PROFIBUS &<br/>PROFINET Training</span></a></li>
                <li><a href="http://www.profibusaustralia.com.au/newsletter/"><strong>Newsletter</strong><br/>
                    <span class="navsubHeading">Current News from <br/>PAA &amp; Members</span></a></li>
                <li id="nav180"><a href="index.php?src=Technical_Exhibitions"><strong>Industry Promotion</strong><br/>
                    <span class="navsubHeading">Summits, Seminars &amp;<br/>Exhibitions</span></a>
                    <ul>
                      <li><a href="global_forum" style="font-size:12px; line-height:14px;">2016 Profibus &amp; Profinet<br/>Global Forum</a></li>
                      <li><a href="global_forum" style="font-size:12px; line-height:14px;">2016 Automation Innovation Summit</a></li>
                       <!--  <li><a href="index.php?src=ProfiTechSeminar"><span style="font-size:12px; line-height:14px;">PROFINET Workshop<br />Sydney 25 March 2014</span></a></li>
                        <li><a href="index.php?src=Technical_Exhibitions"><span style="font-size:12px; line-height:14px;">Profinet & Profibus EXPO<br />
                        Brisbane, 6 November 2013</span>
                        </a></li>
                       <li><a href="index.php?src=Luncheons"><span style="font-size:12px; line-height:14px;">Profinet & Profibus<br />Business Luncheons</span>
            </a></li> -->
                    </ul>
                    </li>
               <li><a href="index.php?src=certification"><strong>Honour Roll</strong><br/>
                   <span class="navsubHeading">Certified Profibus <br/>Training Graduates</span></a></li>
                <li><a href="index.php?src=support"><strong>Technical Support</strong><br/>
                    <span class="navsubHeading">Phone & Onsite <br/>Troubleshooting Support</span></a></li>
                    <li><a href="index.php?src=news"><strong>News Centre</strong><br/>
                    <span class="navsubHeading">News, Videos & <br/>Product Information</span></a></li>
                     <li><a href="index.php?src=contact"><strong>Contact Us</strong><br/>
                    <span class="navsubHeading">Contact Us <br/>PAA Admnistration</span></a></li>
        </ul>
      </td>
         </tr>
         <tr>
           <td width="260" colspan="6" height="25" valign="top" style="border-bottom: 1px dashed #bfbfbf;">           </td>
         </tr>
      <tr>
           <td width="260" colspan="6" height="35" valign="top" >           </td>
         </tr>
      </table>
<table cellpadding="0px" cellspacing="0px" style="width:1117px; background-color:#ffffff; border-left:#BFBFBF 1px solid; border-bottom: #BFBFBF 1px solid;
      border-right:#BFBFBF 1px solid">
     <tr>
           <td class="left-panel" valign="top" style="width:250px; border-right:#BFBFBF 1px solid">
                <?php
                   if (isset($_GET['src']) && ($_GET['src'] == "news"))
                   {
                      echo "<table cellpadding=\"0px\" cellspacing=\"0px\" style=\"width:260px\">";
                   }
                   else
                   {
                      echo "<table cellpadding=\"0px\" cellspacing=\"0px\" style=\"width:250px\">";
                   }
                ?>
    <tr>
                      <td class="Text" style="height:60px;"></td>
    </tr>
                   <tr>
                      <td><ul id="menu">
                         <li>
                         <a href="index.php?src=about">
                     Who we are
                         </a></li></ul>
                      </td>
                   </tr>
                   <tr>
                      <td height="1"/>
                   </tr>
                   <tr>
                      <td><ul id="menu">
                         <li><a href="index.php?src=support">
                            Technical Support
                         </a></li></ul>
                      </td>
                   </tr>
                   <tr>
                      <td height="1"/>
                   </tr>
           <tr>
                      <td><ul id="menu">
                        <li> <a href="index.php?src=course">
                            Training
                         </a></li></ul>
                      </td>
                   </tr>
                   <tr>
                      <td height="1"/>
                   </tr>
                   <tr>
                      <td><ul id="menu">
                        <li> <a href="index.php?src=members">
                            Association Members
                         </a></li></ul>
                      </td>
                   </tr>
                   <tr>
                      <td height="1"/>
                   </tr>
                   <tr>
                      <td><ul id="menu">
                         <li><a href="index.php?src=paa_membership">
                            PAA Membership
                         </a></li></ul>
                      </td>
                   </tr>
                   <tr>
                     <td height="1"/>
                   </tr>
                   <tr>
                      <td><ul id="menu">
                        <li> <a href="index.php?src=contact">
                            Home
                         </a></li></ul>
                      </td>
                   </tr>
                   <tr>
                      <td align="center" valign="top">
                         <br/>
                         <br/>
<?php if(!in_array($_GET['src'], array('global_forum_2016', 'pi_2015'))):?>  
                         <img src="images/20YearLogo.gif"/>
                           <br />                    
                          <span style="text-align:center; border:#999 1px solid; font-size:16px; font-weight:bold;padding:5px; border:0px;">PAA Members
                          </span>
                          <p>
                         <a href="http://endress.com.au" target="_blank">
                          <!-- <img src="images/Logo_Endress.jpg" border="0px"/> -->
                          <img src="images/endress_logo_2014.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://tycoflowcontrol.com.au" target="_blank">
                            <img src="images/Pentair-logo.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.siemens.com.au" target="_blank">
                            <img src="images/Logo_Siemens.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.abbaustralia.com.au" target="_blank">
                            <img src="images/ABB_logo.jpg" border="0px"/>
                         </a>
						 <br/>
                         <br/>
                         <br/>
                          <a href="http://www.riotinto.com/" target="_blank">
                            <img src="images/rio tinto.jpg" border="0px"/>
						 <br/>
                         <br/>
                         <br/>
                         <a href="http://www.besstengineering.com.au" target="_blank">
                            <img src="images/besst.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://burkert.com.au" target="_blank">
                            <img src="images/Logo_Burkert.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.balluff.com.au" target="_blank">
                            <img src="images/baluff2014.jpg" width="170" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <!--a href="http://www.fivesgroup.com/" target="_blank"-->
                            <img src="images/fives.jpg" width="130" border="0px"/>
                        
                         <br/>
                         <br/>
                         <br/>
                              <a href="http://www.real-time.com.au" target="_blank">
                            <img src="images/real_time_consultant.jpg" width="250" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.crisptech.com.au" target="_blank">
                            <img src="images/ethernet_logo.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         
                         <img src="images/Fortescue.jpg" border="0px"/>
                         <br/>
                         <br/>
                         <br/>
                        
                         <a href="http://ghd.com/Australia/" target="_blank">
                            <img src="images/Logo_GHD.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://hawk.com.au" target="_blank">
                            <img src="images/2809_hawk_logo.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         
                         <a href="http://www.ifmefector.com.au" target="_blank">
                            <img src="img/ifm_2015.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.issystems.com.au" target="_blank">
                            <img src="images/Logo_IS_Systems.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>                        
                        <a href="http://www.ge-ip.com/" target="_blank">
                            <img src="images/GE-Logo.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                              
                         <a href="http://www.spinau.com.au/" target="_blank">
                            <img src="images/Logo1.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                        
                        <a href="http://mendishanna.com.au" target="_blank">
                            <img src="/images/MHA-logo.jpg" border="0px"/>
                              </a>
                            <br>                               
                         <br/>
                         <br/>
                              
                         <a href="http://www.norgren.com.au" target="_blank">
                            <img src="images/2205_Norgren.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.newmont.com" target="_blank">
                            <img src="images/newmont.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                        <!-- <a href="http://www.micromaxsa.com.au" target="_blank">
                            <img src="images/micromax.jpg" border="0px" width="170"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>-->
                         <a href="http://www.pca-aus.com.au" target="_blank">
                            <img src="img/pca.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.pepperl-fuchs.com" target="_blank">
                            <img src="images/Pepperl_Fuchs.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.phoenixcontact.com.au" target="_blank">
                            <img src="images/2205_Phoenix.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.proconel.com" target="_blank">
                            <img src="images/2205_Procon.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.psnwater.com.au/CompanyProfile.html" target="_blank">
                            <img src="images/Aroona.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.sageautomation.com.au" target="_blank">
                            <img src="images/2205_Sage.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.samson.de/esamson.htm" target="_blank">
                            <img src="images/Logo_Samson.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.schneider-electric.com.au" target="_blank">
                            <img src="images/Schneider.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="https://www.sick.com/au/en/w/sick/" target="_blank">
                         <img src="images/logo_SICK.jpg" />
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.smcworld.com" target="_blank"><img src="images/smc.jpg"/></a>
                         <br/>
                         <br/>
                         <br/>
                         <img src="images/Sydney_water.jpg"/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.watersure.com.au" target="_blank"><img src="images/logo_watersure.jpg"/></a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://ti2.com.au" target="_blank"><img src="images/TI2.jpg" border="0px"/></a>
                         <br/>
                         <br/>
                         <br/>
                         <img src="images/Water_Corporation.jpg"/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.wika.com.au" target="_blank"><img src="images/Logo_WIKA.jpg"/></a><br/>
                         <br/>
                         <br/>
                         <a href="http://www.weidmuller.com.au" target="_blank">
                            <img src="newsletter7/images/Weidmuller_142px.jpg?v=20151005" border="0px"/><br/>
                         </a>
                         <br/>
                         <br/>
                            <a href="http://www.aucom.com/" target="_blank">
                            <img src="images/aucom-logo.jpg" border="0px"/><br/>
                         </a>
                         <br/>
                         <br/>
                             <a href="http://www.logicamms.com.au" target="_blank">
                            <img src="images/0908LogiCamms.jpg" border="0px"/>
                         </a>
                         <!-- <br/>
                         <br/>
                            <img src="images/Polytechnic-logo.jpg" border="0px"/><br/>
                            -->                        
                         <br/>
                         <br/>
                         <a href="http://www.profibuscentre.com.au" target="_blank">
                            <img src="images/PICC ad.gif" border="0px"/><br/>
                            <font color="#000000">
                               PROFIBUS Technical Support<br/>
                               click here...<br/>
                            </font>
                         </a>
                         <br/>
                         <br/>
                         <a href="http://www.profibusaustralia.com.au/index.php?src=PROFIBUS_PA_book_is_now_available">
                            <img src="images/Book.gif" border="0px"/><br/>
                            <font color="#000000">
                               PROFIBUS PA<br/>
                               In-depth information about PROFIBUS<br/>in process industries<br/>
                               Now available... Click here<br/>
                            </font>
                         </a>
                              <br/>
                         <br/>
                         
                      
<?php else: ?>
                          <span style="text-align:center; border:#999 1px solid; font-size:16px; font-weight:bold;padding:5px; border:0px;">2016 Global Forum<br/>Platinum Sponsor
                          </span>
                      <p>
                         <br/>
                         <br/>
                         <a href="javascript:;">
                            <img src="images/PI_Logo.jpg" border="0px"/><br/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.siemens.com.au">
                            <img src="images/Logo_Siemens.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <img src="images/divider_main.jpg" width="220" height="7">
                         <br/>
                         <br/>
                          <span style="text-align:center; border:#999 1px solid; font-size:16px; font-weight:bold;padding:5px; border:0px;">2016 Global Forum<br/>Gold Sponsor
                          </span>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.weidmuller.com.au">
                            <img src="newsletter7/images/Weidmuller_142px.jpg?v=20151005" border="0px"/><br/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.phoenixcontact.com.au">
                            <img src="images/2205_Phoenix.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://tycoflowcontrol.com.au">
                            <img src="images/Pentair-logo.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <img src="images/divider_main.jpg" width="220" height="7">
                         <br/>
                         <br/>
                          <span style="text-align:center; border:#999 1px solid; font-size:16px; font-weight:bold;padding:5px; border:0px;">2016 Global Forum<br/>Silver Sponsor
                          </span>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.balluff.com.au">
                            <img src="images/baluff2014.jpg" width="170" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                         <br/>
                         <a href="http://www.ifmefector.com.au">
                            <img src="img/ifm_2015.jpg" border="0px"/>
                         </a>
                         <br/>
                         <br/>
                         <br/>
                      </p>
<?php endif;?> 
                      </td>
                   </tr>
     </table>
            </td>
     <td id="main-content" class="main-content" valign="top" style="width:607px; padding-left:20px; padding-right:20px; border-right:#BFBFBF 1px solid">
                <?php
                   if (isset($_GET['src']) && (($_GET['src'] == "news") || ($_GET['src'] == "members") || ($_GET['src'] == "course")))
                   {
                      echo "<table cellpadding=\"0px\" cellspacing=\"0px\" style=\"width:100%\">";
                   }
                   else
                   {
                      echo "<table cellpadding=\"0px\" cellspacing=\"0px\" style=\"width:100%\">";
                   }
                ?>
                <?php
                   if (isset($_GET['src']) && (($_GET['src'] == "") || ($_GET['src'] == "home")))
                   {
                   echo"<tr><td style=\"height:192px\"><img src=\"images/ProfibusBanner_new.gif\"/></td></tr>";
                   }
                   else
                   {
                   echo"<tr><td style=\"height:20px\"></td></tr>";
                   }
                   ?>
                   <?php
                      if (!isset($_GET['src']) || $_GET['src'] == "")
                      {
                         $filename = "home.html";//"homeFEB14.html";
                      }
                      else
                      {
                         $banned_schema = array("http://", "ftp://");
                         $filename = str_replace($banned_schema, "", $_GET['src']) . ".html";
                      }
                      $handle = fopen($filename, "r");
                      if ($handle)
                      {
                         $contents = fread($handle, filesize($filename));
                         fclose($handle);
                         echo $contents;
                      }
                      else
                      {
                         die("<b>No such source.</b>");
                      }
                   ?>
                </table>
            </td>
     <td valign="top" width="260px">
        <div id="rightcolumncontent">
                <!--pi-->
           
    <div id="rightcolumnVI clearfix">
        <a href="http://www.burkert.com.au/en/" target="_blank">
            <img src="/img/right_panel/burkert_banner_new.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
        </a>
        <p><img src="images/divider_main.jpg" width="220" height="7"/></p>
    </div>
    
    <div id="rightcolumnVI clearfix">
        <a href="http://www.weidmuller.com.au/int/products/product-innovations/product-overview/neu-16/remote-i/remote-i/o-system-u-remote-in-ip67" target="_blank">
            <img src="/img/right_panel/weildmuller_dec2106.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
        </a>
        <p><img src="images/divider_main.jpg" width="220" height="7"/></p>
    </div>
    
     <div id="rightcolumnVI clearfix">
        <a href="https://www.sick.com/au/en/io-link-the-new-form-of-communication-on-the-sensor-level/w/io-link/" target="_blank">
            <img src="/img/right_panel/sick_banner.png" width="220" height="353" vspace="10" align="left" style="border:0;" />
        </a>
        <p><img src="images/divider_main.jpg" width="220" height="7"/></p>
    </div>
            
    <div class="rightcolumnVI clearfix"> 
        <a href="https://www.siemens.com/au/en/home/company/fairs-events/digitalization-forum.html" target="_blank">
            <img src="/img/right_panel/siemens-portrait-banner.jpg" width="220"  style="border:0;" />
        </a>
        <div class="rightcolumncontent">
            <p>Unlocking the full potential of digital technologies. View the the <strong>Digitalisation Forum</strong> - a Engineers Australia and Siemens presentation (October '16)  <a href="https://www.siemens.com/au/en/home/company/fairs-events/digitalization-forum.html" target="_blank">Click here to view video</a>
            </p>
        </div>
        <p><img src="images/divider_main.jpg" width="220" height="7"/></p>  
    </div>
    
     <div id="rightcolumnVI clearfix">
        <a href="https://procentec.com/" target="_blank">
            <img src="/img/right_panel/procentec-vertical.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
        </a>
        <p><img src="images/divider_main.jpg" width="220" height="7"/></p>
    </div>
    
     <!-- IFM -->
        <div id="rightcolumnVI">          
          <a href="http://www.ifm.com/ifmaus/web/io-link_0.htm" target="_blank">
            <img src="/img/right_panel/8_ifm_p.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
          </a>
        </div>
        <br/>
        <div class="rightcolumncontent">
          For more information on IFM&rsquo;s IO-Link capabilities in Australia &ndash; <a href="http://www.ifm.com/ifmaus/web/io-link_0.htm" target="_blank"><strong>click here</strong></a>
        </div>
            <!--IFM ends-->
    <!-- Balluff -->
        <div id="rightcolumnVI">
          <p><img src="/img/newsletter/divider_main.jpg" width="220" height="7"/></p>
          <a href="newsletter/index.php?src=balluff_video" target="_blank">
            <img src="/img/right_panel/8_balluff_banner_p.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
          </a>
        </div>
        <div class="rightcolumncontent">
          For more information on Balluff&#39;s IO-Link&nbsp;capabilities&nbsp;in Australia -&nbsp;<a href="newsletter/index.php?src=balluff_video" target="_blank"><strong>Click here</strong></a>
        </div>
            <!--end Balluff-->
        <!--Higher intelligence-->
        <div id="rightcolumnVI">
          <p><img src="/img/newsletter/divider_main.jpg" width="220" height="7"/></p>
          <a href="newsletter/index.php?src=local_perspective" target="_blank">
            <img src="/img/right_panel/8_io_banner_p.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
          </a>
        </div>
        <!--End Higher intelligence-->
            
    <!-- Health Check --> 
              <div id="rightcolumnVI">
                <p><img src="images/divider_main.jpg" width="220" height="7"/></p>
                <a href="http://www.profibuscentre.com.au/" target="_blank">
                  <img src="/img/right_panel/hc_banner.jpg" width="220" height="353" vspace="10" align="left" style="border:0;" />
                </a>
              </div>
              <br/>
              <div class="rightcolumncontent">
                Comprehensive System Health Reports now available only from the PICC - <a href="http://www.profibuscentre.com.au/" target="_blank">Click here</a>
              </div>  
        <!-- End Health Check --> 
            
    <div class="rightcolumnVI clearfix"> 
        <p><img src="/img/newsletter/divider_main.jpg" width="220" height="7"/></p>
        <a href="index.php?src=pi_2015"><img src="/img/right_panel/8_pi_banner.jpg" width="220"  style="border:0;" /></a>
        <div class="rightcolumncontent">
            <p>2016 Global Forum: <a href="global_forum"><strong>Click here</strong></a></p>
            <p>Automation Innovation Summit: <a href="global_forum"><strong>Click here</strong></a>
        </div>
          
    </div>
<!--
         <div style="background:rgb(198,198,198);padding:15px;">
             <p style="color:#ffffff"><b>Training & Technical Support</b></p>
             <p><b>Profibus Association<br/>of Australia</b></p>
             <b>W</b>: www.profibusaustralia.com.au<br/>
             <b>E</b>: info@profibusaustralia.com.au<br/>
             <b>P</b>: 02 9555 7899<br/>
             <p><b>Profibus International<br/>Competence Centre</b></p>
             <b>W</b>: www.profibuscentre.com.au<br/>
             <b>P</b>: 02 9794 3500<br/>
          </div>
-->

                <!--facebook-->
<!--
               <div class="rightcolumnVI">   
          <p><img src="images/divider_main.jpg" width="220" height="7"/></p>         
                    <a href="https://www.facebook.com/ProfibusAustralia" target="_blank"><img src="images/fb.jpg" width="220" height="76" vspace="10" align="left" style="border:0;" /></a>
                </div>
-->

      <!-----end of banner---->
                </table>
            </td>
     </tr>
         <tr>
           <td colspan="3" style="background-color:#341b1b; height:55px">
            </td>
         </tr>
      </table>
      <br/>
   </center>
</body>
</html>