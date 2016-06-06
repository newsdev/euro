<?php
//
// THIS STOLEN STRAIGHT FROM OPTA
// USE THIS TO MAKE SURE OUR THINGS WORK
//

//set xml request
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
<!-- Copyright 2001-2015 Opta Sportsdata Ltd. All rights reserved. -->

<!-- PRODUCTION HEADER
     produced on:        valde-jobq-a03.nexus.opta.net
     production time:    20150414T230725,519Z
     production module:  Opta::Feed::XML::Soccer::F7
-->
<SoccerFeed TimeStamp="20150415T000723+0100">
  <SoccerDocument Type="Latest" uID="f790722">
    <Competition uID="c420">
      <Country>Copa Libertadores</Country>
      <Name>Copa Libertadores</Name>
      <Round>
        <Name>Round</Name>
        <Pool>3</Pool>
        <RoundNumber>2</RoundNumber>
      </Round>
      <Stat Type="season_id">2014</Stat>
      <Stat Type="season_name">Season 2014/2015</Stat>
      <Stat Type="symid">SUD_CL</Stat>
      <Stat Type="matchday">7</Stat>
    </Competition>
    <MatchData>
      <MatchInfo MatchType="Regular" Period="SecondHalf" TimeStamp="20150415T000515+0100">
        <Date>20150414T230000+0100</Date>
      </MatchInfo>
      <MatchOfficial uID="o42817">
        <OfficialData>
          <OfficialRef Type="Main" />
        </OfficialData>
        <OfficialName>
          <First>Patricio</First>
          <Last>Polic</Last>
        </OfficialName>
      </MatchOfficial>
      <Stat Type="match_time">48</Stat>
      <Stat Type="first_half_start">20151504T230039</Stat>
      <Stat Type="first_half_time">49</Stat>
      <Stat Type="first_half_stop">20151504T234841</Stat>
      <Stat Type="second_half_start">20151604T000515</Stat>
      <TeamData Score="2" Side="Home" TeamRef="t2578">
        <Goal EventID="336245350" EventNumber="1151" Period="FirstHalf" PlayerRef="p169785" Time="15" TimeStamp="20150414T231449+0100" Type="Goal" uID="g2578-1">
          <Assist PlayerRef="p170798">p170798</Assist>
        </Goal>
        <Goal EventID="629124152" EventNumber="1262" Period="FirstHalf" PlayerRef="p169785" Time="26" TimeStamp="20150414T232554+0100" Type="Goal" uID="g2578-2">
          <Assist PlayerRef="p151542">p151542</Assist>
        </Goal>
        <PlayerLineUp>
          <MatchPlayer PlayerRef="p59933" Position="Goalkeeper" ShirtNumber="1" Status="Start" />
          <MatchPlayer PlayerRef="p86267" Position="Defender" ShirtNumber="15" Status="Start" />
          <MatchPlayer PlayerRef="p103287" Position="Defender" ShirtNumber="2" Status="Start" />
          <MatchPlayer Captain="1" PlayerRef="p52479" Position="Defender" ShirtNumber="25" Status="Start" />
          <MatchPlayer PlayerRef="p60636" Position="Defender" ShirtNumber="21" Status="Start" />
          <MatchPlayer PlayerRef="p170798" Position="Midfielder" ShirtNumber="8" Status="Start" />
          <MatchPlayer PlayerRef="p54765" Position="Midfielder" ShirtNumber="18" Status="Start" />
          <MatchPlayer PlayerRef="p76735" Position="Midfielder" ShirtNumber="5" Status="Start" />
          <MatchPlayer PlayerRef="p170782" Position="Midfielder" ShirtNumber="10" Status="Start" />
          <MatchPlayer PlayerRef="p151542" Position="Midfielder" ShirtNumber="27" Status="Start" />
          <MatchPlayer PlayerRef="p169785" Position="Striker" ShirtNumber="9" Status="Start" />
          <MatchPlayer PlayerRef="p85988" Position="Substitute" ShirtNumber="11" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p55628" Position="Substitute" ShirtNumber="16" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p86021" Position="Substitute" ShirtNumber="22" Status="Sub" SubPosition="Goalkeeper" />
          <MatchPlayer PlayerRef="p169938" Position="Substitute" ShirtNumber="19" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p179353" Position="Substitute" ShirtNumber="14" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p205137" Position="Substitute" ShirtNumber="28" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p6259" Position="Substitute" ShirtNumber="30" Status="Sub" SubPosition="Midfielder" />
        </PlayerLineUp>
      </TeamData>
      <TeamData Score="0" Side="Away" TeamRef="t764">
        <PlayerLineUp>
          <MatchPlayer Captain="1" PlayerRef="p53408" Position="Goalkeeper" ShirtNumber="1" Status="Start" />
          <MatchPlayer PlayerRef="p37733" Position="Defender" ShirtNumber="26" Status="Start" />
          <MatchPlayer PlayerRef="p50037" Position="Defender" ShirtNumber="3" Status="Start" />
          <MatchPlayer PlayerRef="p122779" Position="Defender" ShirtNumber="21" Status="Start" />
          <MatchPlayer PlayerRef="p134317" Position="Defender" ShirtNumber="22" Status="Start" />
          <MatchPlayer PlayerRef="p53394" Position="Midfielder" ShirtNumber="8" Status="Start" />
          <MatchPlayer PlayerRef="p53649" Position="Midfielder" ShirtNumber="25" Status="Start" />
          <MatchPlayer PlayerRef="p148034" Position="Midfielder" ShirtNumber="10" Status="Start" />
          <MatchPlayer PlayerRef="p61081" Position="Midfielder" ShirtNumber="15" Status="Start" />
          <MatchPlayer PlayerRef="p61289" Position="Midfielder" ShirtNumber="5" Status="Start" />
          <MatchPlayer PlayerRef="p91993" Position="Striker" ShirtNumber="9" Status="Start" />
          <MatchPlayer PlayerRef="p179163" Position="Substitute" ShirtNumber="29" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p61846" Position="Substitute" ShirtNumber="27" Status="Sub" SubPosition="Defender" />
          <MatchPlayer PlayerRef="p53409" Position="Substitute" ShirtNumber="12" Status="Sub" SubPosition="Goalkeeper" />
          <MatchPlayer PlayerRef="p95712" Position="Substitute" ShirtNumber="17" Status="Sub" SubPosition="Midfielder" />
          <MatchPlayer PlayerRef="p102458" Position="Substitute" ShirtNumber="20" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p162760" Position="Substitute" ShirtNumber="19" Status="Sub" SubPosition="Forward" />
          <MatchPlayer PlayerRef="p168786" Position="Substitute" ShirtNumber="18" Status="Sub" SubPosition="Midfielder" />
        </PlayerLineUp>
        <Substitution EventID="758385181" EventNumber="2455" Period="2" Reason="Tactical" SubOff="p61289" SubOn="p168786" SubstitutePosition="3" Time="45" TimeStamp="20150415T000511+0100" uID="s764-1" />
      </TeamData>
    </MatchData>
    <Team uID="t2578">
      <Country>Argentina</Country>
      <Name>Huracán</Name>
      <Player Position="Goalkeeper" uID="p59933">
        <PersonName>
          <First>Marcos</First>
          <Last>Díaz</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p86267">
        <PersonName>
          <First>Luciano</First>
          <Last>Balbi</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p103287">
        <PersonName>
          <First>Federico</First>
          <Last>Mancinelli</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p52479">
        <PersonName>
          <First>Eduardo</First>
          <Last>Domínguez</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p60636">
        <PersonName>
          <First>Hugo</First>
          <Last>Nervo</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p170798">
        <PersonName>
          <First>Lucas</First>
          <Last>Villarruel</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p54765">
        <PersonName>
          <First>Patricio</First>
          <Last>Toranzo</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p76735">
        <PersonName>
          <First>Federico</First>
          <Last>Vismara</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p170782">
        <PersonName>
          <First>Alejandro</First>
          <Last>Romero Gamarra</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p151542">
        <PersonName>
          <First>Edson</First>
          <Last>Puch</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p169785">
        <PersonName>
          <First>Ramon</First>
          <Last>Ábila</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p85988">
        <PersonName>
          <First>Agustín</First>
          <Last>Torassa</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p55628">
        <PersonName>
          <First>Iván</First>
          <Last>Moreno y Fabianesi</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p86021">
        <PersonName>
          <First>Matías</First>
          <Last>Giordano</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p169938">
        <PersonName>
          <First>Santiago</First>
          <Last>Echeverría</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p179353">
        <PersonName>
          <First>Ezequiel</First>
          <Last>Gallegos</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p205137">
        <PersonName>
          <First>Lucas</First>
          <Last>Campana</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p6259">
        <PersonName>
          <First>Daniel</First>
          <Last>Montenegro</Last>
        </PersonName>
      </Player>
      <TeamOfficial Type="Manager" uID="man43344">
        <PersonName>
          <First>Néstor</First>
          <Last>Apuzzo</Last>
        </PersonName>
      </TeamOfficial>
    </Team>
    <Team uID="t764">
      <Country>Brazil</Country>
      <Name>Cruzeiro</Name>
      <Player Position="Goalkeeper" uID="p53408">
        <PersonName>
          <First>Fábio Deivson</First>
          <Known>Fábio</Known>
          <Last>Lopes Maciel</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p37733">
        <PersonName>
          <First>Paulo André</First>
          <Known>Paulo André</Known>
          <Last>Cren Benini</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p50037">
        <PersonName>
          <First>Leonardo Renan</First>
          <Known>Léo</Known>
          <Last>Simões de Lacerda</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p122779">
        <PersonName>
          <First>Eugenio</First>
          <Last>Mena</Last>
        </PersonName>
      </Player>
      <Player Position="Defender" uID="p134317">
        <PersonName>
          <First>Mayke</First>
          <Known>Mayke</Known>
          <Last>Rocha de Oliveira</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p53394">
        <PersonName>
          <First>Henrique</First>
          <Known>Henrique</Known>
          <Last>Pacheco Lima</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p53649">
        <PersonName>
          <First>Willian</First>
          <Known>Willian</Known>
          <Last>Gomes de Siqueira</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p148034">
        <PersonName>
          <First>Giorgian</First>
          <Last>de Arrascaeta</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p61081">
        <PersonName>
          <First>Willian Roberto</First>
          <Known>Willian Farias</Known>
          <Last>Farias</Last>
        </PersonName>
      </Player>
      <Player Position="Midfielder" uID="p61289">
        <PersonName>
          <First>Willians</First>
          <Known>Willians</Known>
          <Last>Domingos Fernandes</Last>
        </PersonName>
      </Player>
      <Player Position="Striker" uID="p91993">
        <PersonName>
          <First>Leandro Damião</First>
          <Known>Leandro Damião</Known>
          <Last>da Silva dos Santos</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p179163">
        <PersonName>
          <First>Anderson</First>
          <Known>Pará</Known>
          <Last>Ferreira da Silva</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p61846">
        <PersonName>
          <First>Manoel Messias</First>
          <Known>Manoel</Known>
          <Last>Silva Carvalho</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p53409">
        <PersonName>
          <First>Rafael</First>
          <Known>Rafael</Known>
          <Last>Pires Monteiro</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p95712">
        <PersonName>
          <First>Felipe</First>
          <Last>Seymour</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p102458">
        <PersonName>
          <First>Duvier</First>
          <Last>Riascos</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p162760">
        <PersonName>
          <First>Jose Henrique</First>
          <Known>Henrique Dourado</Known>
          <Last>da Silva Dourado</Last>
        </PersonName>
      </Player>
      <Player Position="Substitute" uID="p168786">
        <PersonName>
          <First>Gabriel Augusto</First>
          <Known>Gabriel Xavier</Known>
          <Last>Xavier</Last>
        </PersonName>
      </Player>
      <TeamOfficial Type="Manager" uID="man40846">
        <PersonName>
          <First>Marcelo</First>
          <Last>Oliveira</Last>
        </PersonName>
      </TeamOfficial>
    </Team>
    <Venue uID="v3703">
      <Country>Copa Libertadores</Country>
      <Name>Tomás Adolfo Ducó</Name>
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