<?php
//
// THIS STOLEN STRAIGHT FROM OPTA
// USE THIS TO MAKE SURE OUR THINGS WORK
//

//set xml request
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
<!-- Copyright 2001-2013 Opta Sportsdata Ltd. All rights reserved. -->

<!-- PRODUCTION HEADER
     produced on:        valde-jobq-a04.nexus.opta.net
     production time:    20131029T223021,807Z
     production module:  Opta::Feed::XML::Soccer::F7
-->
<SoccerFeed TimeStamp="20131029T223019+0000">
  <SoccerDocument Type="Result" uID="f730670">
    <Competition uID="c2">
      <Country>England</Country>
      <Name>English League Cup</Name>
      <Round>
        <Name>Round</Name>
        <RoundNumber>4</RoundNumber>
      </Round>
      <Stat Type="season_id">2013</Stat>
      <Stat Type="season_name">Season 2013/2014</Stat>
      <Stat Type="symid">EN_LC</Stat>
      <Stat></Stat>
    </Competition>
    <MatchData>
      <MatchInfo MatchType="Cup" Period="FullTime" TimeStamp="20131029T222802+0000" Weather="Clear">
        <Attendance>13436</Attendance>
        <Date>20131029T194500+0000</Date>
        <Result Type="PenaltyShootout" Winner="t110" />
      </MatchInfo>
      <MatchOfficial uID="o41055">
        <OfficialData>
          <OfficialRef Type="Main" />
        </OfficialData>
        <OfficialName>
          <First>Simon</First>
          <Last>Hooper</Last>
        </OfficialName>
      </MatchOfficial>
      <AssistantOfficials>
        <AssistantOfficial FirstName="Geoff" LastName="Law" Type="Lineman 1" uID="o43356" />
        <AssistantOfficial FirstName="Timothy" LastName="Wood" Type="Lineman 2" uID="o43485" />
        <AssistantOfficial FirstName="Andy" LastName="Haines" Type="Fourth official" uID="o41017" />
      </AssistantOfficials>
      <Stat Type="match_time">123</Stat>
      <Stat Type="second_half_extra_time">18</Stat>
      <Stat Type="first_half_extra_time">17</Stat>
      <Stat Type="second_half_time">51</Stat>
      <Stat Type="first_half_time">49</Stat>
      <TeamData Score="4" ShootOutScore="2" Side="Home" TeamRef="t41">
        <Booking Card="Red" CardType="StraightRed" EventID="885759627" EventNumber="1471" Period="FirstHalf" PlayerRef="p3735" Reason="Fight" Time="47" TimeStamp="20131029T203127+0000" uID="b41-1" />
        <Goal EventID="1472650759" EventNumber="12810" Period="FirstHalf" PlayerRef="p60488" Time="28" TimeStamp="20131029T201209+0000" Type="Goal" uID="g41-1">
          <Assist PlayerRef="p59606">p59606</Assist>
        </Goal>
        <Goal EventID="1263054258" EventNumber="28511" Period="SecondHalf" PlayerRef="p4454" Time="85" TimeStamp="20131029T212840+0000" Type="Goal" uID="g41-2">
          <Assist PlayerRef="p110692">p110692</Assist>
        </Goal>
        <Goal EventID="1685135987" EventNumber="29312" Period="SecondHalf" PlayerRef="p4454" Time="93" TimeStamp="20131029T213639+0000" Type="Goal" uID="g41-3">
          <Assist PlayerRef="p172632">p172632</Assist>
        </Goal>
        <Goal EventID="171433986" EventNumber="411813" Period="ExtraSecondHalf" PlayerRef="p70762" Time="118" TimeStamp="20131029T221335+0000" Type="Goal" uID="g41-4" />
        <PlayerLineUp>
          <MatchPlayer PlayerRef="p18004" Position="Goalkeeper" ShirtNumber="13" Status="Start" />
          <MatchPlayer PlayerRef="p78916" Position="Defender" ShirtNumber="6" Status="Start" />
          <MatchPlayer PlayerRef="p111608" Position="Defender" ShirtNumber="18" Status="Start" />
          <MatchPlayer PlayerRef="p42460" Position="Defender" ShirtNumber="31" Status="Start" />
          <MatchPlayer Captain="1" PlayerRef="p2004" Position="Defender" ShirtNumber="4" Status="Start" />
          <MatchPlayer PlayerRef="p61944" Position="Midfielder" ShirtNumber="27" Status="Start" />
          <MatchPlayer PlayerRef="p60488" Position="Midfielder" ShirtNumber="24" Status="Start" />
          <MatchPlayer PlayerRef="p59606" Position="Midfielder" ShirtNumber="12" Status="Start" />
          <MatchPlayer PlayerRef="p3735" Position="Midfielder" ShirtNumber="15" Status="Start" />
          <MatchPlayer PlayerRef="p110692" Position="Midfielder" ShirtNumber="17" Status="Start" />
          <MatchPlayer PlayerRef="p26883" Position="Striker" ShirtNumber="19" Status="Start" />
          <MatchPlayer PlayerRef="p70762" Position="Substitute" ShirtNumber="20" Status="Sub" />
          <MatchPlayer PlayerRef="p1532" Position="Substitute" ShirtNumber="8" Status="Sub" />
          <MatchPlayer PlayerRef="p172632" Position="Substitute" ShirtNumber="33" Status="Sub" />
          <MatchPlayer PlayerRef="p41332" Position="Substitute" ShirtNumber="22" Status="Sub" />
          <MatchPlayer PlayerRef="p151418" Position="Substitute" ShirtNumber="30" Status="Sub" />
          <MatchPlayer PlayerRef="p59940" Position="Substitute" ShirtNumber="5" Status="Sub" />
          <MatchPlayer PlayerRef="p4454" Position="Substitute" ShirtNumber="11" Status="Sub" />
        </PlayerLineUp>
        <ShootOut FirstPenalty="0">
          <PenaltyShot EventID="575398016" EventNumber="512117" Outcome="Missed" PlayerRef="p111608" TimeStamp="20131029T222329+0000" uID="pen41-1" />
          <PenaltyShot EventID="1662077758" EventNumber="512118" Outcome="Missed" PlayerRef="p110692" TimeStamp="20131029T222505+0000" uID="pen41-2" />
          <PenaltyShot EventID="850778755" EventNumber="512119" Outcome="Scored" PlayerRef="p4454" TimeStamp="20131029T222559+0000" uID="pen41-3" />
          <PenaltyShot EventID="513993739" EventNumber="512120" Outcome="Scored" PlayerRef="p70762" TimeStamp="20131029T222707+0000" uID="pen41-4" />
        </ShootOut>
        <Substitution EventID="1265461517" EventNumber="26814" Period="2" Reason="Tactical" SubOff="p61944" SubOn="p172632" SubstitutePosition="4" Time="68" TimeStamp="20131029T211119+0000" uID="s41-1" />
        <Substitution EventID="519754465" EventNumber="27915" Period="2" Reason="Tactical" SubOff="p60488" SubOn="p70762" SubstitutePosition="3" Time="79" TimeStamp="20131029T212236+0000" uID="s41-2" />
        <Substitution EventID="1025148615" EventNumber="27916" Period="2" Reason="Tactical" SubOff="p26883" SubOn="p4454" SubstitutePosition="4" Time="79" TimeStamp="20131029T212242+0000" uID="s41-3" />
      </TeamData>
      <TeamData Score="4" ShootOutScore="4" Side="Away" TeamRef="t110">
        <Booking Card="Yellow" CardType="Yellow" EventID="1787721085" EventNumber="14721" Period="FirstHalf" PlayerRef="p41464" Reason="Unsporting behaviour" Time="47" TimeStamp="20131029T203108+0000" uID="b110-1" />
        <Booking Card="Yellow" CardType="Yellow" EventID="243321734" EventNumber="28822" Period="SecondHalf" PlayerRef="p50067" Reason="Unsporting behaviour" Time="88" TimeStamp="20131029T213129+0000" uID="b110-2" />
        <Booking Card="Yellow" CardType="Yellow" EventID="989964398" EventNumber="411223" Period="ExtraSecondHalf" PlayerRef="p32318" Reason="Unsporting behaviour" Time="112" TimeStamp="20131029T220727+0000" uID="b110-3" />
        <Goal EventID="1431179062" EventNumber="11030" Period="FirstHalf" PlayerRef="p77305" Time="10" TimeStamp="20131029T195420+0000" Type="Goal" uID="g110-1" />
        <Goal EventID="1487864515" EventNumber="25531" Period="SecondHalf" PlayerRef="p3773" Time="55" TimeStamp="20131029T205800+0000" Type="Goal" uID="g110-2">
          <Assist PlayerRef="p61595">p61595</Assist>
        </Goal>
        <Goal EventID="179263330" EventNumber="27132" Period="SecondHalf" PlayerRef="p41464" Time="71" TimeStamp="20131029T211402+0000" Type="Goal" uID="g110-3">
          <Assist PlayerRef="p49323">p49323</Assist>
        </Goal>
        <Goal EventID="1670623649" EventNumber="39433" Period="ExtraFirstHalf" PlayerRef="p18215" Time="94" TimeStamp="20131029T214622+0000" Type="Goal" uID="g110-4" />
        <PlayerLineUp>
          <MatchPlayer PlayerRef="p1945" Position="Goalkeeper" ShirtNumber="29" Status="Start" />
          <MatchPlayer PlayerRef="p12413" Position="Defender" ShirtNumber="4" Status="Start" />
          <MatchPlayer PlayerRef="p61595" Position="Defender" ShirtNumber="5" Status="Start" />
          <MatchPlayer PlayerRef="p32318" Position="Defender" ShirtNumber="12" Status="Start" />
          <MatchPlayer Captain="1" PlayerRef="p37869" Position="Defender" ShirtNumber="17" Status="Start" />
          <MatchPlayer PlayerRef="p77305" Position="Midfielder" ShirtNumber="24" Status="Start" />
          <MatchPlayer PlayerRef="p34296" Position="Midfielder" ShirtNumber="8" Status="Start" />
          <MatchPlayer PlayerRef="p3658" Position="Midfielder" ShirtNumber="7" Status="Start" />
          <MatchPlayer PlayerRef="p49323" Position="Midfielder" ShirtNumber="15" Status="Start" />
          <MatchPlayer PlayerRef="p41464" Position="Striker" ShirtNumber="10" Status="Start" />
          <MatchPlayer PlayerRef="p3773" Position="Striker" ShirtNumber="25" Status="Start" />
          <MatchPlayer PlayerRef="p20481" Position="Substitute" ShirtNumber="32" Status="Sub" />
          <MatchPlayer PlayerRef="p20208" Position="Substitute" ShirtNumber="16" Status="Sub" />
          <MatchPlayer PlayerRef="p40349" Position="Substitute" ShirtNumber="1" Status="Sub" />
          <MatchPlayer PlayerRef="p18215" Position="Substitute" ShirtNumber="9" Status="Sub" />
          <MatchPlayer PlayerRef="p50067" Position="Substitute" ShirtNumber="11" Status="Sub" />
          <MatchPlayer PlayerRef="p12813" Position="Substitute" ShirtNumber="19" Status="Sub" />
          <MatchPlayer PlayerRef="p39487" Position="Substitute" ShirtNumber="3" Status="Sub" />
        </PlayerLineUp>
        <ShootOut FirstPenalty="1">
          <PenaltyShot EventID="1193134603" EventNumber="512137" Outcome="Scored" PlayerRef="p18215" TimeStamp="20131029T222423+0000" uID="pen110-1" />
          <PenaltyShot EventID="451124373" EventNumber="512138" Outcome="Scored" PlayerRef="p37869" TimeStamp="20131029T222535+0000" uID="pen110-2" />
          <PenaltyShot EventID="744758053" EventNumber="512139" Outcome="Scored" PlayerRef="p61595" TimeStamp="20131029T222635+0000" uID="pen110-3" />
          <PenaltyShot EventID="660530340" EventNumber="512140" Outcome="Scored" PlayerRef="p49323" TimeStamp="20131029T222739+0000" uID="pen110-4" />
        </ShootOut>
        <Substitution EventID="1342458363" EventNumber="27134" Period="2" Reason="Tactical" SubOff="p41464" SubOn="p20481" SubstitutePosition="3" Time="71" TimeStamp="20131029T211442+0000" uID="s110-1" />
        <Substitution EventID="2005859768" EventNumber="27635" Period="2" Reason="Tactical" SubOff="p3658" SubOn="p50067" SubstitutePosition="3" Time="76" TimeStamp="20131029T211944+0000" uID="s110-2" />
        <Substitution EventID="46858267" EventNumber="28136" Period="2" Reason="Tactical" SubOff="p3773" SubOn="p18215" SubstitutePosition="4" Time="81" TimeStamp="20131029T212439+0000" uID="s110-3" />
      </TeamData>
    </MatchData>
    <Team uID="t41">
      <Country>England</Country>
      <Name>Birmingham City</Name>
      <Player Position="Goalkeeper" uID="p18004">
        <PersonName>
          <First>Colin</First>
          <Last>Doyle</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p78916">
        <PersonName>
          <First>Dan</First>
          <Last>Burn</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p111608">
        <PersonName>
          <First>Mitch</First>
          <Last>Hancox</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p42460">
        <PersonName>
          <First>Paul</First>
          <Last>Caddis</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p2004">
        <PersonName>
          <First>Paul</First>
          <Last>Robinson</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p61944">
        <PersonName>
          <First>Shane</First>
          <Last>Ferguson</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p60488">
        <PersonName>
          <First>Tom</First>
          <Last>Adeyemi</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p59606">
        <PersonName>
          <First>Lee</First>
          <Last>Novak</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p3735">
        <PersonName>
          <First>Wade</First>
          <Last>Elliott</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p110692">
        <PersonName>
          <First>Callum</First>
          <Last>Reilly</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p26883">
        <PersonName>
          <First>Nikola</First>
          <Last>Zigic</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p70762">
        <PersonName>
          <First>Oliver</First>
          <Last>Lee</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p1532">
        <PersonName>
          <First>Hayden</First>
          <Last>Mullins</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p172632">
        <PersonName>
          <First>Demarai</First>
          <Last>Gray</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p41332">
        <PersonName>
          <First>Andrew</First>
          <Last>Shinnie</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p151418">
        <PersonName>
          <First>Nick</First>
          <Last>Townsend</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p59940">
        <PersonName>
          <First>Kyle</First>
          <Last>Bartley</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p4454">
        <PersonName>
          <First>Peter</First>
          <Last>Løvenkrands</Last>
        </PersonName>
      </Player>
      <TeamOfficial Type="Manager" uID="man38200">
        <PersonName>
          <First>Lee</First>
          <Last>Clark</Last>
        </PersonName>
      </TeamOfficial>
    </Team>
    <Team uID="t110">
      <Country>England</Country>
      <Name>Stoke City</Name>
      <Player Position="Goalkeeper" uID="p1945">
        <PersonName>
          <First>Thomas</First>
          <Last>Sørensen</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p12413">
        <PersonName>
          <First>Robert</First>
          <Last>Huth</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p61595">
        <PersonName>
          <First>Marc</First>
          <Last>Muniesa</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p32318">
        <PersonName>
          <First>Marc</First>
          <Last>Wilson</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p37869">
        <PersonName>
          <First>Ryan</First>
          <Last>Shawcross</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p77305">
        <PersonName>
          <First>Oussama</First>
          <Last>Assaidi</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p34296">
        <PersonName>
          <First>Wilson</First>
          <Last>Palacios</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p3658">
        <PersonName>
          <First>Jermaine</First>
          <Last>Pennant</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p49323">
        <PersonName>
          <First>Steven</First>
          <Last>N\'Zonzi</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p41464">
        <PersonName>
          <First>Marko</First>
          <Last>Arnautovic</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p3773">
        <PersonName>
          <First>Peter</First>
          <Last>Crouch</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p20481">
        <PersonName>
          <First>Stephen</First>
          <Last>Ireland</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p20208">
        <PersonName>
          <First>Charlie</First>
          <Last>Adam</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p40349">
        <PersonName>
          <First>Asmir</First>
          <Last>Begovic</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p18215">
        <PersonName>
          <First>Kenwyne</First>
          <Last>Jones</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p50067">
        <PersonName>
          <First>Brek</First>
          <Last>Shea</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p12813">
        <PersonName>
          <First>Jonathan</First>
          <Last>Walters</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p39487">
        <PersonName>
          <First>Erik</First>
          <Last>Pieters</Last>
        </PersonName>
      </Player>
      <TeamOfficial Type="Manager" uID="man163">
        <PersonName>
          <First>Mark</First>
          <Last>Hughes</Last>
        </PersonName>
      </TeamOfficial>
    </Team>
    <Venue uID="v57">
      <Country>England</Country>
      <Name>St. Andrew\'s Stadium</Name>
    </Venue>
  </SoccerDocument>
</SoccerFeed>';

//set headers
    $data = array('x-meta-feed-type: F7', 'x-meta-feed-parameters: feed params', 'x-meta-default-filename: filename.xml', 'x-meta-game-id: 1', 'x-meta-competition-id: 1', 'x-meta-season-id: 2010', 'x-meta-game-id: ', 'x-meta-gamesystem-id: 1', 'x-meta-matchday: 1', 'x-meta-away-team-id: 1', 'x-meta-home-team-id: 1', 'x-meta-game-status: 11', 'x-meta-language: en', 'x-meta-production-server: server', 'x-meta-production-server-timestamp: 1', 'x-meta-production-server-module: 1', 'x-meta-mime-type: text/xml', 'encoding: UTF-8'); 

//set URL 
    $url = 'http://campfin.newsdev.net/euro/2016/create/'; 

// Get the curl session object
    $session = curl_init($url); 

// set url to post to 
    curl_setopt($session, CURLOPT_URL,$url); 

// Tell curl to use HTTP POST; 
    curl_setopt ($session, CURLOPT_POST, true); 
    curl_setopt($session, CURLOPT_HTTPHEADER, $data); 

// Tell curl that this is the body of the POST
    curl_setopt ($session, CURLOPT_POSTFIELDS, $xml); 

// Tell curl not to return headers, and return the response
    curl_setopt($session, CURLOPT_HEADER, true); 
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($session, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

// allow redirects 
    curl_setopt($session, CURLOPT_FOLLOWLOCATION, true);

    $response = curl_exec($session); if (curl_errno($session)) { 
        print "Error: " . curl_error($session); 
    } else { 
        var_dump($response);
        curl_close($session);
    }

    print_r ($response); 

?>