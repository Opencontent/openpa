<?php

if (OpenPAINI::variable('Seo', 'EnableRobots') == 'enabled') {
    $result = OpenPAINI::variable('Seo', 'RobotsText', '');
    if (empty($result)) {
        $result = OpenPAINI::variable('Seo', 'DefaultRobotsText', false);
    }

    $result .= "\n#\n";
    $currentIdentifier = OpenPABase::getCurrentSiteaccessIdentifier();
    $hostUriIniList = eZINI::instance()->variableArray('SiteAccessSettings', 'HostUriMatchMapItems');
    foreach ($hostUriIniList as $hostUriIni){
        if (strpos($hostUriIni[2], $currentIdentifier . '_') === 0){
            $accessSuffix = empty($hostUriIni[1]) ? '' : '/' . $hostUriIni[1];
            $result .= "
Disallow: {$accessSuffix}/Media
Disallow: {$accessSuffix}/user
Disallow: {$accessSuffix}/opendata
Disallow: {$accessSuffix}/api/opendata
Disallow: {$accessSuffix}/content/advancedsearch
Disallow: {$accessSuffix}/content/search
Disallow: {$accessSuffix}/content/view
Disallow: {$accessSuffix}/layout";
        }
    }

    $result .="
Request-rate: 1/10
Crawl-delay: 10
Visit-time: 0000-0600
";

    $resultArray = explode("\n", $result);
    $resultArray = array_map(function($value) {
        $trimmed = trim($value);
        return empty($trimmed) ? '#' : $trimmed;
    }, $resultArray);
    $resultArray = array_unique($resultArray);

    //@see https://github.com/mitchellkrogza/apache-ultimate-bad-bot-blocker/blob/master/robots.txt/robots.txt
    $disallowUserAgents = ['360Spider', '404checker', '404enemy', '80legs', 'Abonti', 'Aboundex', 'Aboundexbot', 'Acunetix', 'ADmantX', 'AfD-Verbotsverfahren', 'AhrefsBot', 'AIBOT', 'AiHitBot', 'Aipbot', 'Alexibot', 'Alligator', 'AllSubmitter', 'AlphaBot', 'Anarchie', 'Apexoo', 'archive.org_bot', 'arquivo.pt', 'arquivo-web-crawler', 'ASPSeek', 'Asterias', 'Attach', 'autoemailspider', 'AwarioRssBot', 'AwarioSmartBot', 'BackDoorBot', 'Backlink-Ceck', 'backlink-check', 'BacklinkCrawler', 'BackStreet', 'BackWeb', 'Badass', 'Bandit', 'Barkrowler', 'BatchFTP', 'Battleztar Bazinga', 'BBBike', 'BDCbot', 'BDFetch', 'BetaBot', 'Bigfoot', 'Bitacle', 'Blackboard', 'Black Hole', 'BlackWidow', 'BLEXBot', 'Blow', 'BlowFish', 'Boardreader', 'Bolt', 'BotALot', 'Brandprotect', 'Brandwatch', 'Buddy', 'BuiltBotTough', 'BuiltWith', 'Bullseye', 'BunnySlippers', 'BuzzSumo', 'Calculon', 'CATExplorador', 'CazoodleBot', 'CCBot', 'Cegbfeieh', 'CheeseBot', 'CherryPicker', 'CheTeam', 'ChinaClaw', 'Chlooe', 'Claritybot', 'Cliqzbot', 'Cloud mapping', 'coccocbot-web', 'Cogentbot', 'cognitiveseo', 'Collector', 'com.plumanalytics', 'Copier', 'CopyRightCheck', 'Copyscape', 'Cosmos', 'Craftbot', 'crawler4j', 'crawler.feedback', 'crawl.sogou.com', 'CrazyWebCrawler', 'Crescent', 'CrunchBot', 'CSHttp', 'Curious', 'Custo', 'DatabaseDriverMysqli', 'DataCha0s', 'DBLBot', 'demandbase-bot', 'Demon', 'Deusu', 'Devil', 'Digincore', 'DigitalPebble', 'DIIbot', 'Dirbuster', 'Disco', 'Discobot', 'Discoverybot', 'Dispatch', 'DittoSpyder', 'DnyzBot', 'DomainAppender', 'DomainCrawler', 'DomainSigmaCrawler', 'DomainStatsBot', 'Dotbot', 'Download Wonder', 'Dragonfly', 'Drip', 'DSearch', 'DTS Agent', 'EasyDL', 'Ebingbong', 'eCatch', 'ECCP/1.0', 'Ecxi', 'EirGrabber', 'EMail Siphon', 'EMail Wolf', 'EroCrawler', 'evc-batch', 'Evil', 'Exabot', 'Express WebPictures', 'ExtLinksBot', 'Extractor', 'ExtractorPro', 'Extreme Picture Finder', 'EyeNetIE', 'Ezooms', 'facebookscraper', 'FDM', 'FemtosearchBot', 'FHscan', 'Fimap', 'Firefox/7.0', 'FlashGet', 'Flunky', 'Foobot', 'Freeuploader', 'FrontPage', 'FyberSpider', 'Fyrebot', 'GalaxyBot', 'Genieo', 'GermCrawler', 'Getintent', 'GetRight', 'GetWeb', 'Gigablast', 'Gigabot', 'G-i-g-a-b-o-t', 'Go-Ahead-Got-It', 'Gotit', 'GoZilla', 'Go!Zilla', 'Grabber', 'GrabNet', 'Grafula', 'GrapeFX', 'GrapeshotCrawler', 'GridBot', 'GT::WWW', 'Haansoft', 'HaosouSpider', 'Harvest', 'Havij', 'HEADMasterSEO', 'heritrix', 'Heritrix', 'Hloader', 'HMView', 'HTMLparser', 'HTTP::Lite', 'HTTrack', 'Humanlinks', 'HybridBot', 'Iblog', 'IDBot', 'Id-search', 'IlseBot', 'Image Fetch', 'Image Sucker', 'IndeedBot', 'Indy Library', 'InfoNaviRobot', 'InfoTekies', 'instabid', 'Intelliseek', 'InterGET', 'Internet Ninja', 'InternetSeer', 'internetVista monitor', 'ips-agent', 'Iria', 'IRLbot', 'Iskanie', 'IstellaBot', 'JamesBOT', 'Jbrofuzz', 'JennyBot', 'JetCar', 'Jetty', 'JikeSpider', 'JOC Web Spider', 'Joomla', 'Jorgee', 'JustView', 'Jyxobot', 'Kenjin Spider', 'Keyword Density', 'Kozmosbot', 'Lanshanbot', 'Larbin', 'LeechFTP', 'LeechGet', 'LexiBot', 'Lftp', 'LibWeb', 'Libwhisker', 'Lightspeedsystems', 'Likse', 'Linkdexbot', 'LinkextractorPro', 'LinkpadBot', 'LinkScan', 'LinksManager', 'LinkWalker', 'LinqiaMetadataDownloaderBot', 'LinqiaRSSBot', 'LinqiaScrapeBot', 'Lipperhey', 'Lipperhey Spider', 'Litemage_walker', 'Lmspider', 'LNSpiderguy', 'Ltx71', 'lwp-request', 'LWP::Simple', 'lwp-trivial', 'Magnet', 'Mag-Net', 'magpie-crawler', 'Mail.RU_Bot', 'Majestic12', 'Majestic SEO', 'Majestic-SEO', 'MarkMonitor', 'MarkWatch', 'Masscan', 'Mass Downloader', 'Mata Hari', 'MauiBot', 'meanpathbot', 'Meanpathbot', 'MeanPath Bot', 'Mediatoolkitbot', 'mediawords', 'MegaIndex.ru', 'Metauri', 'MFC_Tear_Sample', 'Microsoft Data Access', 'Microsoft URL Control', 'MIDown tool', 'MIIxpc', 'Mister PiX', 'MJ12bot', 'Mojeek', 'Mojolicious', 'Morfeus Fucking Scanner', 'Mr.4x3', 'MSFrontPage', 'MSIECrawler', 'Msrabot', 'muhstik-scan', 'Musobot', 'Name Intelligence', 'Nameprotect', 'Navroad', 'NearSite', 'Needle', 'Nessus', 'NetAnts', 'Netcraft', 'netEstate NE Crawler', 'NetLyzer', 'NetMechanic', 'NetSpider', 'Nettrack', 'Net Vampire', 'Netvibes', 'NetZIP', 'NextGenSearchBot', 'Nibbler', 'NICErsPRO', 'Niki-bot', 'Nikto', 'NimbleCrawler', 'Nimbostratus', 'Ninja', 'Nmap', 'NPbot', 'Nutch', 'oBot', 'Octopus', 'Offline Explorer', 'Offline Navigator', 'OnCrawl', 'Openfind', 'OpenLinkProfiler', 'Openvas', 'OpenVAS', 'OrangeBot', 'OrangeSpider', 'OutclicksBot', 'OutfoxBot', 'PageAnalyzer', 'Page Analyzer', 'PageGrabber', 'page scorer', 'PageScorer', 'Pandalytics', 'Panscient', 'Papa Foto', 'Pavuk', 'pcBrowser', 'PECL::HTTP', 'PeoplePal', 'PHPCrawl', 'Picscout', 'Picsearch', 'PictureFinder', 'Pimonster', 'Pi-Monster', 'Pixray', 'PleaseCrawl', 'plumanalytics', 'Pockey', 'POE-Component-Client-HTTP', 'Probethenet', 'ProPowerBot', 'ProWebWalker', 'Psbot', 'Pump', 'PxBroker', 'PyCurl', 'QueryN Metasearch', 'Quick-Crawler', 'RankActive', 'RankActiveLinkBot', 'RankFlex', 'RankingBot', 'RankingBot2', 'Rankivabot', 'RankurBot', 'RealDownload', 'Reaper', 'RebelMouse', 'Recorder', 'RedesScrapy', 'ReGet', 'RepoMonkey', 'Ripper', 'RocketCrawler', 'Rogerbot', 'RSSingBot', 's1z.ru', 'SalesIntelligent', 'SBIder', 'ScanAlert', 'Scanbot', 'scan.lol', 'ScoutJet', 'Scrapy', 'Screaming', 'ScreenerBot', 'Searchestate', 'SearchmetricsBot', 'Semrush', 'SemrushBot', 'SEOkicks', 'SEOkicks-Robot', 'SEOlyticsCrawler', 'Seomoz', 'SEOprofiler', 'seoscanners', 'SeoSiteCheckup', 'SEOstats', 'serpstatbot', 'sexsearcher', 'Shodan', 'Siphon', 'SISTRIX', 'Sitebeam', 'SiteExplorer', 'Siteimprove', 'SiteLockSpider', 'SiteSnagger', 'SiteSucker', 'Site Sucker', 'Sitevigil', 'SlySearch', 'SmartDownload', 'SMTBot', 'Snake', 'Snapbot', 'Snoopy', 'SocialRankIOBot', 'Sociscraper', 'sogouspider', 'Sogou web spider', 'Sosospider', 'Sottopop', 'SpaceBison', 'Spammen', 'SpankBot', 'Spanner', 'sp_auditbot', 'Spbot', 'Spinn3r', 'SputnikBot', 'spyfu', 'Sqlmap', 'Sqlworm', 'Sqworm', 'Steeler', 'Stripper', 'Sucker', 'Sucuri', 'SuperBot', 'SuperHTTP', 'Surfbot', 'SurveyBot', 'Suzuran', 'Swiftbot', 'sysscan', 'Szukacz', 'T0PHackTeam', 'T8Abot', 'tAkeOut', 'Teleport', 'TeleportPro', 'Telesoft', 'Telesphoreo', 'Telesphorep', 'The Intraformant', 'TheNomad', 'Thumbor', 'TightTwatBot', 'Titan', 'Toata', 'Toweyabot', 'Tracemyfile', 'Trendiction', 'Trendictionbot', 'trendiction.com', 'trendiction.de', 'True_Robot', 'Turingos', 'Turnitin', 'TurnitinBot', 'TwengaBot', 'Twice', 'Typhoeus', 'UnisterBot', 'Upflow', 'URLy Warning', 'URLy.Warning', 'Vacuum', 'Vagabondo', 'VB Project', 'VCI', 'VeriCiteCrawler', 'VidibleScraper', 'Virusdie', 'VoidEYE', 'Voil', 'Voltron', 'Wallpapers/3.0', 'WallpapersHD', 'WASALive-Bot', 'WBSearchBot', 'Webalta', 'WebAuto', 'Web Auto', 'WebBandit', 'WebCollage', 'Web Collage', 'WebCopier', 'WEBDAV', 'WebEnhancer', 'Web Enhancer', 'WebFetch', 'Web Fetch', 'WebFuck', 'Web Fuck', 'WebGo IS', 'WebImageCollector', 'WebLeacher', 'WebmasterWorldForumBot', 'webmeup-crawler', 'WebPix', 'Web Pix', 'WebReaper', 'WebSauger', 'Web Sauger', 'Webshag', 'WebsiteExtractor', 'WebsiteQuester', 'Website Quester', 'Webster', 'WebStripper', 'WebSucker', 'Web Sucker', 'WebWhacker', 'WebZIP', 'WeSEE', 'Whack', 'Whacker', 'Whatweb', 'Who.is Bot', 'Widow', 'WinHTTrack', 'WiseGuys Robot', 'WISENutbot', 'Wonderbot', 'Woobot', 'Wotbox', 'Wprecon', 'WPScan', 'WWW-Collector-E', 'WWW-Mechanize', 'WWW::Mechanize', 'WWWOFFLE', 'x09Mozilla', 'x22Mozilla', 'Xaldon WebSpider', 'Xaldon_WebSpider', 'Xenu', 'xpymep1.exe', 'YoudaoBot', 'Zade', 'Zauba', 'zauba.io', 'Zermelo', 'Zeus', 'zgrab', 'Zitebot', 'ZmEu', 'ZumBot', 'ZyBorg'];
    $resultArray[] = "# The Ultimate robots.txt Bot and User-Agent Blocker Version: V3.2019.12.1186";
    $resultArray[] = "# Copyright: https://github.com/mitchellkrogza/apache-ultimate-bad-bot-blocker";
    foreach ($disallowUserAgents as $disallowUserAgent){
        $resultArray[] = "User-agent: $disallowUserAgent";
        $resultArray[] = "Disallow:/";
    }

    $result = implode("\n", $resultArray);

}else{
    $result = "User-agent: * \nDisallow: /";
}

header('Content-Type: text/plain');
echo $result;
eZExecution::cleanExit();
