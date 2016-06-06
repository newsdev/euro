<?php
//
// THIS STOLEN STRAIGHT FROM OPTA
// USE THIS TO MAKE SURE OUR THINGS WORK
//

//set xml request
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
<!-- Copyright 2001-2016 Opta Sportsdata Ltd. All rights reserved. -->

<!-- PRODUCTION HEADER
     produced on:        valde-jobq-a03.nexus.opta.net
     production time:    20160531T223116,532Z
     production module:  Opta::Feed::XML::Soccer::F7
-->
<SoccerFeed TimeStamp="20160531T233112+0100">
  <SoccerDocument Type="Result" uID="f828754">
    <Competition uID="c21">
      <Country>Italy</Country>
      <Name>Italian Serie A</Name>
      <Stat Type="season_id">2015</Stat>
      <Stat Type="season_name">Season 2015/2016</Stat>
      <Stat Type="symid">IT_SA</Stat>
      <Stat Type="matchday">38</Stat>
    </Competition>
    <MatchData>
      <MatchInfo MatchType="Regular" Period="FullTime" TimeStamp="20160514T214412+0100" Weather="Rain">
        <Attendance>14213</Attendance>
        <Date>20160514T194500+0100</Date>
        <Result Type="NormalResult" Winner="t2182" />
      </MatchInfo>
      <MatchOfficial uID="o40663">
        <OfficialData>
          <OfficialRef Type="Main" />
        </OfficialData>
        <OfficialName>
          <First>Andrea</First>
          <Last>Gervasoni</Last>
        </OfficialName>
      </MatchOfficial>
      <AssistantOfficials>
        <AssistantOfficial FirstName="Francesco" LastName="De Luca" Type="Lineman 1" uID="o40682" />
        <AssistantOfficial FirstName="Valentino" LastName="Fiorito" Type="Lineman 2" uID="o42939" />
        <AssistantOfficial FirstName="Salvatore" LastName="Longo" Type="Fourth official" uID="o41547" />
      </AssistantOfficials>
      <Stat Type="match_time">92</Stat>
      <Stat Type="first_half_start">20160514T195113+0100</Stat>
      <Stat Type="first_half_time">47</Stat>
      <Stat Type="first_half_stop">20160514T203726+0100</Stat>
      <Stat Type="second_half_start">20160514T205715+0100</Stat>
      <Stat Type="second_half_time">47</Stat>
      <Stat Type="second_half_stop">20160514T214411+0100</Stat>
      <TeamData Score="3" Side="Home" TeamRef="t2182">
        <Booking Card="Yellow" CardType="Yellow" EventID="108812590" EventNumber="1311" Period="FirstHalf" PlayerRef="p14715" Reason="Foul" Time="31" TimeStamp="20160514T202116+0100" uID="b2182-1" />
        <Booking Card="Yellow" CardType="Yellow" EventID="1717658802" EventNumber="2662" Period="SecondHalf" PlayerRef="p116056" Reason="Off the ball foul" Time="66" TimeStamp="20160514T211813+0100" uID="b2182-2" />
        <Booking Card="Yellow" CardType="Yellow" EventID="567015172" EventNumber="2853" Period="SecondHalf" PlayerRef="p7379" Reason="Foul" Time="85" TimeStamp="20160514T213644+0100" uID="b2182-3" />
        <Goal EventID="1474122762" EventNumber="165" Period="FirstHalf" PlayerRef="p153776" Time="6" TimeStamp="20160514T195649+0100" Type="Goal" uID="g2182-1">
          <Assist PlayerRef="p95215">p95215</Assist>
        </Goal>
        <Goal EventID="2052429062" EventNumber="1266" Period="FirstHalf" PlayerRef="p184441" Time="26" TimeStamp="20160514T201637+0100" Type="Goal" uID="g2182-2">
          <Assist PlayerRef="p116056">p116056</Assist>
          <SecondAssist PlayerRef="p153776">p153776</SecondAssist>
        </Goal>
        <Goal EventID="2080999713" EventNumber="1397" Period="FirstHalf" PlayerRef="p153776" Time="39" TimeStamp="20160514T202926+0100" Type="Goal" uID="g2182-3">
          <Assist PlayerRef="p42886">p42886</Assist>
        </Goal>
        <PlayerLineUp>
          <MatchPlayer PlayerRef="p18500" Position="Goalkeeper" ShirtNumber="47" Status="Start" />
          <MatchPlayer PlayerRef="p38476" Position="Defender" ShirtNumber="13" Status="Start" />
          <MatchPlayer PlayerRef="p42886" Position="Defender" ShirtNumber="23" Status="Start" />
          <MatchPlayer PlayerRef="p7379" Position="Defender" ShirtNumber="28" Status="Start" />
          <MatchPlayer PlayerRef="p84178" Position="Defender" ShirtNumber="15" Status="Start" />
          <MatchPlayer Captain="1" PlayerRef="p14715" Position="Midfielder" ShirtNumber="4" Status="Start" />
          <MatchPlayer PlayerRef="p184441" Position="Midfielder" ShirtNumber="6" Status="Start" />
          <MatchPlayer PlayerRef="p116056" Position="Midfielder" ShirtNumber="32" Status="Start" />
          <MatchPlayer PlayerRef="p153776" Position="Striker" ShirtNumber="16" Status="Start" />
          <MatchPlayer PlayerRef="p95215" Position="Striker" ShirtNumber="92" Status="Start" />
          <MatchPlayer PlayerRef="p81033" Position="Striker" ShirtNumber="17" Status="Start" />
          <MatchPlayer PlayerRef="p53207" Position="Substitute" ShirtNumber="1" Status="Sub" SubPosition="Goalkeeper" />
          <MatchPlayer PlayerRef="p21140" Position="Substitute" ShirtNumber="8" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p87843" Position="Substitute" ShirtNumber="3" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p7485" Position="Substitute" ShirtNumber="79" Status="Sub" SubPosition="Goalkeeper" />
          <MatchPlayer PlayerRef="p19731" Position="Substitute" ShirtNumber="7" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p107853" Position="Substitute" ShirtNumber="29" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p105131" Position="Substitute" ShirtNumber="5" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p76100" Position="Substitute" ShirtNumber="9" Status="Sub" SubPosition="Forward" />
        </PlayerLineUp>
        <Substitution EventID="854682309" EventNumber="2518" Period="2" Reason="Injury" SubOff="p95215" SubOn="p76100" SubstitutePosition="4" Time="51" TimeStamp="20160514T210245+0100" uID="s2182-1" />
        <Substitution EventID="669928781" EventNumber="2749" Period="2" Reason="Tactical" SubOff="p184441" SubOn="p19731" SubstitutePosition="3" Time="74" TimeStamp="20160514T212541+0100" uID="s2182-2" />
        <Substitution EventID="1706413862" EventNumber="28010" Period="2" Reason="Injury" SubOff="p153776" SubOn="p21140" SubstitutePosition="3" Time="80" TimeStamp="20160514T213203+0100" uID="s2182-3" />
      </TeamData>
      <TeamData Score="1" Side="Away" TeamRef="t127">
        <Booking Card="Yellow" CardType="Yellow" EventID="1542223804" EventNumber="12211" Period="FirstHalf" PlayerRef="p152590" Reason="Foul" Time="22" TimeStamp="20160514T201246+0100" uID="b127-1" />
        <Booking Card="Yellow" CardType="Yellow" EventID="948557353" EventNumber="25512" Period="SecondHalf" PlayerRef="p94425" Reason="Dissent" Time="55" TimeStamp="20160514T210647+0100" uID="b127-2" />
        <Booking Card="Yellow" CardType="Yellow" EventID="12709381" EventNumber="25913" Period="SecondHalf" PlayerRef="p107117" Reason="Foul" Time="59" TimeStamp="20160514T211110+0100" uID="b127-3" />
        <Booking Card="Red" CardType="StraightRed" EventID="1687177617" EventNumber="25914" Period="SecondHalf" PlayerRef="p107117" Reason="Foul and Abusive Language" Time="59" TimeStamp="20160514T211113+0100" uID="b127-4" />
        <Booking Card="Yellow" CardType="Yellow" EventID="1011102831" EventNumber="26615" Period="SecondHalf" PlayerRef="p91990" Reason="Foul" Time="66" TimeStamp="20160514T211803+0100" uID="b127-5" />
        <Goal EventID="1534966399" EventNumber="13119" Period="FirstHalf" PlayerRef="p20153" Time="31" TimeStamp="20160514T202210+0100" Type="Goal" uID="g127-1">
          <Assist PlayerRef="p94425">p94425</Assist>
        </Goal>
        <PlayerLineUp>
          <MatchPlayer PlayerRef="p42947" Position="Goalkeeper" ShirtNumber="30" Status="Start" />
          <MatchPlayer PlayerRef="p91990" Position="Defender" ShirtNumber="5" Status="Start" />
          <MatchPlayer PlayerRef="p107117" Position="Defender" ShirtNumber="24" Status="Start" />
          <MatchPlayer PlayerRef="p152590" Position="Defender" ShirtNumber="12" Status="Start" />
          <MatchPlayer PlayerRef="p39826" Position="Defender" ShirtNumber="33" Status="Start" />
          <MatchPlayer PlayerRef="p88754" Position="Midfielder" ShirtNumber="7" Status="Start" />
          <MatchPlayer PlayerRef="p94425" Position="Midfielder" ShirtNumber="77" Status="Start" />
          <MatchPlayer PlayerRef="p19801" Position="Midfielder" ShirtNumber="83" Status="Start" />
          <MatchPlayer Captain="1" PlayerRef="p20153" Position="Striker" ShirtNumber="8" Status="Start" />
          <MatchPlayer PlayerRef="p28502" Position="Striker" ShirtNumber="23" Status="Start" />
          <MatchPlayer PlayerRef="p50442" Position="Striker" ShirtNumber="10" Status="Start" />
          <MatchPlayer PlayerRef="p55604" Position="Substitute" ShirtNumber="21" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p78407" Position="Substitute" ShirtNumber="55" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p173033" Position="Substitute" ShirtNumber="92" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p178885" Position="Substitute" ShirtNumber="28" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p192294" Position="Substitute" ShirtNumber="34" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p194827" Position="Substitute" ShirtNumber="97" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p199829" Position="Substitute" ShirtNumber="27" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p204222" Position="Substitute" ShirtNumber="99" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p41293" Position="Substitute" ShirtNumber="11" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p215531" Position="Substitute" ShirtNumber="98" Status="Sub" SubPosition="Goalkeeper" />
          <MatchPlayer PlayerRef="p220874" Position="Substitute" ShirtNumber="96" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p225776" Position="Substitute" ShirtNumber="29" Status="Sub" SubPosition="Defender" />
        </PlayerLineUp>
        <Substitution EventID="1723691516" EventNumber="27020" Period="2" Reason="Injury" SubOff="p88754" SubOn="p78407" SubstitutePosition="2" Time="70" TimeStamp="20160514T212138+0100" uID="s127-1" />
        <Substitution EventID="124653308" EventNumber="27221" Period="2" Reason="Tactical" SubOff="p42947" SubOn="p215531" SubstitutePosition="1" Time="72" TimeStamp="20160514T212353+0100" uID="s127-2" />
        <Substitution EventID="1315911624" EventNumber="28122" Period="2" Reason="Tactical" SubOff="p20153" SubOn="p178885" SubstitutePosition="2" Time="81" TimeStamp="20160514T213309+0100" uID="s127-3" />
      </TeamData>
    </MatchData>
    <Team uID="t2182">
      <Country>Italy</Country>
      <Name>Sassuolo</Name>
      <Player Position="Goalkeeper" uID="p18500">
        <PersonName>
          <First>Andrea</First>
          <Last>Consigli</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p38476">
        <PersonName>
          <First>Federico</First>
          <Last>Peluso</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p42886">
        <PersonName>
          <First>Marcello</First>
          <Last>Gazzola</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p7379">
        <PersonName>
          <First>Paolo</First>
          <Last>Cannavaro</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p84178">
        <PersonName>
          <First>Francesco</First>
          <Last>Acerbi</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p14715">
        <PersonName>
          <First>Francesco</First>
          <Last>Magnanelli</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p184441">
        <PersonName>
          <First>Lorenzo</First>
          <Last>Pellegrini</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p116056">
        <PersonName>
          <First>Alfred</First>
          <Last>Duncan</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p153776">
        <PersonName>
          <First>Matteo</First>
          <Last>Politano</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p95215">
        <PersonName>
          <First>Gregoire</First>
          <Last>Defrel</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p81033">
        <PersonName>
          <First>Nicola</First>
          <Last>Sansone</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p53207">
        <PersonName>
          <First>Alberto</First>
          <Last>Pomini</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p21140">
        <PersonName>
          <First>Davide</First>
          <Last>Biondini</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p87843">
        <PersonName>
          <First>Alessandro</First>
          <Last>Longhi</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p7485">
        <PersonName>
          <First>Gianluca</First>
          <Last>Pegolo</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p19731">
        <PersonName>
          <First>Simone</First>
          <Last>Missiroli</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p107853">
        <PersonName>
          <First>Marcello</First>
          <Last>Trotta</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p105131">
        <PersonName>
          <First>Luca</First>
          <Last>Antei</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p76100">
        <PersonName>
          <First>Diego</First>
          <Last>Falcinelli</Last>
        </PersonName>
      </Player>
      <TeamOfficial Type="Manager" uID="man38012">
        <PersonName>
          <First>Eusebio</First>
          <Last>Di Francesco</Last>
        </PersonName>
      </TeamOfficial>
    </Team>
    <Team uID="t127">
      <Country>Italy</Country>
      <Name>Internazionale</Name>
      <Player Position="Goalkeeper" uID="p42947">
        <PersonName>
          <First>Juan Pablo</First>
          <Last>Carrizo</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p91990">
        <PersonName>
          <First>Juan Guilherme</First>
          <Known>Juan Jesus</Known>
          <Last>Nunes Jesus</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p107117">
        <PersonName>
          <First>Jeison</First>
          <Last>Murillo</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p152590">
        <PersonName>
          <First>Alex Nicolao</First>
          <Known>Alex Telles</Known>
          <Last>Telles</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p39826">
        <PersonName>
          <First>Danilo</First>
          <Last>D\'Ambrosio</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p88754">
        <PersonName>
          <First>Geoffrey</First>
          <Last>Kondogbia</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p94425">
        <PersonName>
          <First>Marcelo</First>
          <Last>Brozovic</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p19801">
        <PersonName>
          <First>Felipe</First>
          <Last>Melo</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p20153">
        <PersonName>
          <First>Rodrigo</First>
          <Last>Palacio</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p28502">
        <PersonName>
          <First>Éder</First>
          <Known>Éder</Known>
          <Last>Citadin Martins</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p50442">
        <PersonName>
          <First>Stevan</First>
          <Last>Jovetic</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p55604">
        <PersonName>
          <First>Davide</First>
          <Last>Santon</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p78407">
        <PersonName>
          <First>Yuto</First>
          <Last>Nagatomo</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p173033">
        <PersonName>
          <First>Enrico</First>
          <Last>Baldini</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p178885">
        <PersonName>
          <First>Fabio</First>
          <Last>Della Giovanna</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p192294">
        <PersonName>
          <First>Mattia</First>
          <Last>Bonetto</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p194827">
        <PersonName>
          <First>Rey</First>
          <Last>Manaj</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p199829">
        <PersonName>
          <First>Assane Demoya</First>
          <Last>Gnoukouri</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p204222">
        <PersonName>
          <First>José</First>
          <Last>Correia</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p41293">
        <PersonName>
          <First>Jonathan</First>
          <Last>Biabiany</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p215531">
        <PersonName>
          <First>Ionut</First>
          <Last>Radu</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p220874">
        <PersonName>
          <First>Bright</First>
          <Last>Gyamfi</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p225776">
        <PersonName>
          <First>Senna</First>
          <Last>Miangue</Last>
        </PersonName>
      </Player>
      <TeamOfficial Type="Manager" uID="man96">
        <PersonName>
          <First>Roberto</First>
          <Last>Mancini</Last>
        </PersonName>
      </TeamOfficial>
    </Team>
    <Venue uID="v2262">
      <Country>Italy</Country>
      <Name>MAPEI Stadium - Città del Tricolore</Name>
    </Venue>
  </SoccerDocument>
</SoccerFeed>';

//set headers
    $data = array('x-meta-feed-type: F7', 'x-meta-feed-parameters: feed params', 'x-meta-default-filename: filename.xml', 'x-meta-game-id: 1', 'x-meta-competition-id: 1', 'x-meta-season-id: 2010', 'x-meta-game-id: ', 'x-meta-gamesystem-id: 1', 'x-meta-matchday: 1', 'x-meta-away-team-id: 1', 'x-meta-home-team-id: 1', 'x-meta-game-status: 11', 'x-meta-language: en', 'x-meta-production-server: server', 'x-meta-production-server-timestamp: 1', 'x-meta-production-server-module: 1', 'x-meta-mime-type: text/xml', 'encoding: UTF-8'); 

//set URL 
    $url = 'http://campfin.newsdev.net/euro/2016/create/'; 
    // $url = 'http://127.0.0.1:8000/euro/2016/create/'; 

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