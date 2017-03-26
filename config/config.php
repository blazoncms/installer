<?php

return [
    'dependencies' => [
        'factories' => [
            \BlazonCms\Installer\Action\Welcome::class      => \BlazonCms\Installer\Action\WelcomeFactory::class,
            \BlazonCms\Installer\Config\Config::class       => \BlazonCms\Installer\Config\ConfigFactory::class,
            \BlazonCms\Installer\Service\SystemCheck::class => \BlazonCms\Installer\Config\SystemCheckFactory::class,
        ],
    ],

    'routes' => [
        'welcome' => [
            'name'            => 'installer:welcome',
            'path'            => '/install[/{action:system-check|counties-languages}]',
            'middleware'      => \BlazonCms\Installer\Action\Welcome::class,
            'allowed_methods' => ['GET'],
        ],
    ],

    'templates' => [
        'layout' => 'layout/installer',
        'map' => [
            'layout/installer' => __DIR__.'/../templates/layout/installer.phtml',
            'error/error'      => __DIR__.'/../templates/error/error.phtml',
            'error/404'        => __DIR__.'/../templates/error/404.phtml',
        ],

        'paths' => [
            'installer'    => [__DIR__.'/../templates/installer'],
            'layout'       => [__DIR__.'/../templates/layout'],
            'error'        => [__DIR__.'/../templates/error'],
        ],
    ],

    'BlazonCms\Installer\Config' => [
        'required' => [
            'folders' => [
                'data',
                'data/cache',
                'public/modules',
            ]
        ],
        
        'fixtures' => [
            'Rcm\Install\Fixture\Countries',
            'Rcm\Install\Fixture\Languages',
        ],
        
        'countries' => [
            // iso3, iso2, name //
            ['ABW','AW','Aruba'],
            ['AFG','AF','Afghanistan'],
            ['AGO','AO','Angola'],
            ['AIA','AI','Anguilla'],
            ['ALB','AL','Albania'],
            ['AND','AD','Andorra'],
            ['ANT','AN','Netherlands Antilles'],
            ['ARE','AE','United Arab Emirates'],
            ['ARG','AR','Argentina'],
            ['ARM','AM','Armenia'],
            ['ASM','AS','American Samoa'],
            ['ATA','AQ','Antarctica'],
            ['ATF','TF','French Southern Territories'],
            ['ATG','AG','Antigua and Barbuda'],
            ['AUS','AU','Australia'],
            ['AUT','AT','Austria'],
            ['AZE','AZ','Azerbaijan'],
            ['BDI','BI','Burundi'],
            ['BEL','BE','Belgium'],
            ['BEN','BJ','Benin'],
            ['BFA','BF','Burkina Faso'],
            ['BGD','BD','Bangladesh'],
            ['BGR','BG','Bulgaria'],
            ['BHR','BH','Bahrain'],
            ['BHS','BS','Bahamas'],
            ['BIH','BA','Bosnia and Herzegovina'],
            ['BLR','BY','Belarus'],
            ['BLZ','BZ','Belize'],
            ['BMU','BM','Bermuda'],
            ['BOL','BO','Bolivia, Plurinational State of'],
            ['BRA','BR','Brazil'],
            ['BRB','BB','Barbados'],
            ['BRN','BN','Brunei Darussalam'],
            ['BTN','BT','Bhutan'],
            ['BVT','BV','Bouvet Island'],
            ['BWA','BW','Botswana'],
            ['CAF','CF','Central African Republic'],
            ['CAN','CA','Canada'],
            ['CCK','CC','Cocos [Keeling] Islands'],
            ['CHE','CH','Switzerland'],
            ['CHL','CL','Chile'],
            ['CHN','CN','China'],
            ['CIV','CI','CÃ´te d\'Ivoire'],
            ['CMR','CM','Cameroon'],
            ['COD','CD','Congo, the Democratic Republic of the'],
            ['COG','CG','Congo'],
            ['COK','CK','Cook Islands'],
            ['COL','CO','Colombia'],
            ['COM','KM','Comoros'],
            ['CPV','CV','Cape Verde'],
            ['CRI','CR','Costa Rica'],
            ['CUB','CU','Cuba'],
            ['CXR','CX','Christmas Island'],
            ['CYM','KY','Cayman Islands'],
            ['CYP','CY','Cyprus'],
            ['CZE','CZ','Czech Republic'],
            ['DEU','DE','Germany'],
            ['DJI','DJ','Djibouti'],
            ['DMA','DM','Dominica'],
            ['DNK','DK','Denmark'],
            ['DOM','DO','Dominican Republic'],
            ['DZA','DZ','Algeria'],
            ['ECU','EC','Ecuador'],
            ['EGY','EG','Egypt'],
            ['ERI','ER','Eritrea'],
            ['ESH','EH','Western Sahara'],
            ['ESP','ES','Spain'],
            ['EST','EE','Estonia'],
            ['ETH','ET','Ethiopia'],
            ['FIN','FI','Finland'],
            ['FJI','FJ','Fiji'],
            ['FLK','FK','Falkland Islands [Malvinas]'],
            ['FRA','FR','France'],
            ['FRO','FO','Faroe Islands'],
            ['FSM','FM','Micronesia, Federated States of'],
            ['GAB','GA','Gabon'],
            ['GBR','GB','United Kingdom'],
            ['GEO','GE','Georgia'],
            ['GGY','GG','Guernsey'],
            ['GHA','GH','Ghana'],
            ['GIB','GI','Gibraltar'],
            ['GIN','GN','Guinea'],
            ['GLP','GP','Guadeloupe'],
            ['GMB','GM','Gambia'],
            ['GNB','GW','Guinea-Bissau'],
            ['GNQ','GQ','Equatorial Guinea'],
            ['GRC','GR','Greece'],
            ['GRD','GD','Grenada'],
            ['GRL','GL','Greenland'],
            ['GTM','GT','Guatemala'],
            ['GUF','GF','French Guiana'],
            ['GUM','GU','Guam'],
            ['GUY','GY','Guyana'],
            ['HKG','HK','Hong Kong'],
            ['HMD','HM','Heard Island and McDonald Islands'],
            ['HND','HN','Honduras'],
            ['HRV','HR','Croatia'],
            ['HTI','HT','Haiti'],
            ['HUN','HU','Hungary'],
            ['IDN','ID','Indonesia'],
            ['IMN','IM','Isle of Man'],
            ['IND','IN','India'],
            ['IOT','IO','British Indian Ocean Territory'],
            ['IRL','IE','Ireland'],
            ['IRN','IR','Iran, Islamic Republic of'],
            ['IRQ','IQ','Iraq'],
            ['ISL','IS','Iceland'],
            ['ISR','IL','Israel'],
            ['ITA','IT','Italy'],
            ['JAM','JM','Jamaica'],
            ['JEY','JE','Jersey'],
            ['JOR','JO','Jordan'],
            ['JPN','JP','Japan'],
            ['KAZ','KZ','Kazakhstan'],
            ['KEN','KE','Kenya'],
            ['KGZ','KG','Kyrgyzstan'],
            ['KHM','KH','Cambodia'],
            ['KIR','KI','Kiribati'],
            ['KNA','KN','Saint Kitts and Nevis'],
            ['KOR','KR','Korea, Republic of'],
            ['KWT','KW','Kuwait'],
            ['LAO','LA','Lao People\'s Democratic Republic'],
            ['LBN','LB','Lebanon'],
            ['LBR','LR','Liberia'],
            ['LBY','LY','Libyan Arab Jamahiriya'],
            ['LCA','LC','Saint Lucia'],
            ['LIE','LI','Liechtenstein'],
            ['LKA','LK','Sri Lanka'],
            ['LSO','LS','Lesotho'],
            ['LTU','LT','Lithuania'],
            ['LUX','LU','Luxembourg'],
            ['LVA','LV','Latvia'],
            ['MAC','MO','Macao'],
            ['MAR','MA','Morocco'],
            ['MCO','MC','Monaco'],
            ['MDA','MD','Moldova, Republic of'],
            ['MDG','MG','Madagascar'],
            ['MDV','MV','Maldives'],
            ['MEX','MX','Mexico'],
            ['MHL','MH','Marshall Islands'],
            ['MKD','MK','Macedonia, the former Yugoslav Republic of'],
            ['MLI','ML','Mali'],
            ['MLT','MT','Malta'],
            ['MMR','MM','Myanmar'],
            ['MNE','ME','Montenegro'],
            ['MNG','MN','Mongolia'],
            ['MNP','MP','Northern Mariana Islands'],
            ['MOZ','MZ','Mozambique'],
            ['MRT','MR','Mauritania'],
            ['MSR','MS','Montserrat'],
            ['MTQ','MQ','Martinique'],
            ['MUS','MU','Mauritius'],
            ['MWI','MW','Malawi'],
            ['MYS','MY','Malaysia'],
            ['MYT','YT','Mayotte'],
            ['NAM','NA','Namibia'],
            ['NCL','NC','New Caledonia'],
            ['NER','NE','Niger'],
            ['NFK','NF','Norfolk Island'],
            ['NGA','NG','Nigeria'],
            ['NIC','NI','Nicaragua'],
            ['NIU','NU','Niue'],
            ['NLD','NL','Netherlands'],
            ['NOR','NO','Norway'],
            ['NPL','NP','Nepal'],
            ['NRU','NR','Nauru'],
            ['NZL','NZ','New Zealand'],
            ['OMN','OM','Oman'],
            ['PAK','PK','Pakistan'],
            ['PAN','PA','Panama'],
            ['PCN','PN','Pitcairn'],
            ['PER','PE','Peru'],
            ['PHL','PH','Philippines'],
            ['PLW','PW','Palau'],
            ['PNG','PG','Papua New Guinea'],
            ['POL','PL','Poland'],
            ['PRI','PR','Puerto Rico'],
            ['PRK','KP','Korea, Democratic People\'s Republic of'],
            ['PRT','PT','Portugal'],
            ['PRY','PY','Paraguay'],
            ['PSE','PS','Palestinian Territory, Occupied'],
            ['PYF','PF','French Polynesia'],
            ['QAT','QA','Qatar'],
            ['REU','RE','RÃ©union'],
            ['ROU','RO','Romania'],
            ['RUS','RU','Russian Federation'],
            ['RWA','RW','Rwanda'],
            ['SAU','SA','Saudi Arabia'],
            ['SDN','SD','Sudan'],
            ['SEN','SN','Senegal'],
            ['SGP','SG','Singapore'],
            ['SGS','GS','South Georgia and the South Sandwich Islands'],
            ['SHN','SH','Saint Helena, Ascension and Tristan da Cunha'],
            ['SJM','SJ','Svalbard and Jan Mayen'],
            ['SLB','SB','Solomon Islands'],
            ['SLE','SL','Sierra Leone'],
            ['SLV','SV','El Salvador'],
            ['SMR','SM','San Marino'],
            ['SOM','SO','Somalia'],
            ['SPM','PM','Saint Pierre and Miquelon'],
            ['SRB','RS','Serbia'],
            ['STP','ST','Sao Tome and Principe'],
            ['SUR','SR','Suriname'],
            ['SVK','SK','Slovakia'],
            ['SVN','SI','Slovenia'],
            ['SWE','SE','Sweden'],
            ['SWZ','SZ','Swaziland'],
            ['SYC','SC','Seychelles'],
            ['SYR','SY','Syrian Arab Republic'],
            ['TCA','TC','Turks and Caicos Islands'],
            ['TCD','TD','Chad'],
            ['TGO','TG','Togo'],
            ['THA','TH','Thailand'],
            ['TJK','TJ','Tajikistan'],
            ['TKL','TK','Tokelau'],
            ['TKM','TM','Turkmenistan'],
            ['TLS','TL','Timor-Leste'],
            ['TON','TO','Tonga'],
            ['TTO','TT','Trinidad and Tobago'],
            ['TUN','TN','Tunisia'],
            ['TUR','TR','Turkey'],
            ['TUV','TV','Tuvalu'],
            ['TWN','TW','Taiwan, Province of China'],
            ['TZA','TZ','Tanzania, United Republic of'],
            ['UGA','UG','Uganda'],
            ['UKR','UA','Ukraine'],
            ['UMI','UM','United States Minor Outlying Islands'],
            ['URY','UY','Uruguay'],
            ['USA','US','United States'],
            ['UZB','UZ','Uzbekistan'],
            ['VAT','VA','Holy See [Vatican City State]'],
            ['VCT','VC','Saint Vincent and the Grenadines'],
            ['VEN','VE','Venezuela, Bolivarian Republic of'],
            ['VGB','VG','Virgin Islands, British'],
            ['VIR','VI','Virgin Islands, U.S.'],
            ['VNM','VN','Viet Nam'],
            ['VUT','VU','Vanuatu'],
            ['WLF','WF','Wallis and Futuna'],
            ['WSM','WS','Samoa'],
            ['YEM','YE','Yemen'],
            ['ZAF','ZA','South Africa'],
            ['ZMB','ZM','Zambia'],
            ['ZWE','ZW','Zimbabwe'],
        ],

        'languages' => [
            // Name, iso639_1, iso639_2b, iso639_2t //
            ['Afar','aa','aar','aar'],
            ['Abkhazian','ab','abk','abk'],
            ['Achinese',null,'ace','ace'],
            ['Acoli',null,'ach','ach'],
            ['Adangme',null,'ada','ada'],
            ['Adyghe; Adygei',null,'ady','ady'],
            ['Afro-Asiatic languages',null,'afa','afa'],
            ['Afrihili',null,'afh','afh'],
            ['Afrikaans','af','afr','afr'],
            ['Ainu',null,'ain','ain'],
            ['Akan','ak','aka','aka'],
            ['Akkadian',null,'akk','akk'],
            ['Albanian','sq','alb','sqi'],
            ['Aleut',null,'ale','ale'],
            ['Algonquian languages',null,'alg','alg'],
            ['Southern Altai',null,'alt','alt'],
            ['Amharic','am','amh','amh'],
            ['English, Old [ca.450-1100]',null,'ang','ang'],
            ['Angika',null,'anp','anp'],
            ['Apache languages',null,'apa','apa'],
            ['Arabic','ar','ara','ara'],
            ['Official Aramaic [700-300 BCE]; Imperial Aramaic [700-300 BCE]',null,'arc','arc'],
            ['Aragonese','an','arg','arg'],
            ['Armenian','hy','arm','hye'],
            ['Mapudungun; Mapuche',null,'arn','arn'],
            ['Arapaho',null,'arp','arp'],
            ['Artificial languages',null,'art','art'],
            ['Arawak',null,'arw','arw'],
            ['Assamese','as','asm','asm'],
            ['Asturian; Bable; Leonese; Asturleonese',null,'ast','ast'],
            ['Athapascan languages',null,'ath','ath'],
            ['Australian languages',null,'aus','aus'],
            ['Avaric','av','ava','ava'],
            ['Avestan','ae','ave','ave'],
            ['Awadhi',null,'awa','awa'],
            ['Aymara','ay','aym','aym'],
            ['Azerbaijani','az','aze','aze'],
            ['Banda languages',null,'bad','bad'],
            ['Bamileke languages',null,'bai','bai'],
            ['Bashkir','ba','bak','bak'],
            ['Baluchi',null,'bal','bal'],
            ['Bambara','bm','bam','bam'],
            ['Balinese',null,'ban','ban'],
            ['Basque','eu','baq','eus'],
            ['Basa',null,'bas','bas'],
            ['Baltic languages',null,'bat','bat'],
            ['Beja; Bedawiyet',null,'bej','bej'],
            ['Belarusian','be','bel','bel'],
            ['Bemba',null,'bem','bem'],
            ['Bengali','bn','ben','ben'],
            ['Berber languages',null,'ber','ber'],
            ['Bhojpuri',null,'bho','bho'],
            ['Bihari languages','bh','bih','bih'],
            ['Bikol',null,'bik','bik'],
            ['Bini; Edo',null,'bin','bin'],
            ['Bislama','bi','bis','bis'],
            ['Siksika',null,'bla','bla'],
            ['Bantu [Other]',null,'bnt','bnt'],
            ['Bosnian','bs','bos','bos'],
            ['Braj',null,'bra','bra'],
            ['Breton','br','bre','bre'],
            ['Batak languages',null,'btk','btk'],
            ['Buriat',null,'bua','bua'],
            ['Buginese',null,'bug','bug'],
            ['Bulgarian','bg','bul','bul'],
            ['Burmese','my','bur','mya'],
            ['Blin; Bilin',null,'byn','byn'],
            ['Caddo',null,'cad','cad'],
            ['Central American Indian languages',null,'cai','cai'],
            ['Galibi Carib',null,'car','car'],
            ['Catalan; Valencian','ca','cat','cat'],
            ['Caucasian languages',null,'cau','cau'],
            ['Cebuano',null,'ceb','ceb'],
            ['Celtic languages',null,'cel','cel'],
            ['Chamorro','ch','cha','cha'],
            ['Chibcha',null,'chb','chb'],
            ['Chechen','ce','che','che'],
            ['Chagatai',null,'chg','chg'],
            ['Chinese','zh','chi','zho','CH'],
            ['Chuukese',null,'chk','chk'],
            ['Mari',null,'chm','chm'],
            ['Chinook jargon',null,'chn','chn'],
            ['Choctaw',null,'cho','cho'],
            ['Chipewyan; Dene Suline',null,'chp','chp'],
            ['Cherokee',null,'chr','chr'],
            ['Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic','cu','chu','chu'],
            ['Chuvash','cv','chv','chv'],
            ['Cheyenne',null,'chy','chy'],
            ['Chamic languages',null,'cmc','cmc'],
            ['Coptic',null,'cop','cop'],
            ['Cornish','kw','cor','cor'],
            ['Corsican','co','cos','cos'],
            ['Creoles and pidgins, English based',null,'cpe','cpe'],
            ['Creoles and pidgins, French-based',null,'cpf','cpf'],
            ['Creoles and pidgins, Portuguese-based',null,'cpp','cpp'],
            ['Cree','cr','cre','cre'],
            ['Crimean Tatar; Crimean Turkish',null,'crh','crh'],
            ['Creoles and pidgins',null,'crp','crp'],
            ['Kashubian',null,'csb','csb'],
            ['Cushitic languages',null,'cus','cus'],
            ['Czech','cs','cze','ces'],
            ['Dakota',null,'dak','dak'],
            ['Danish','da','dan','dan'],
            ['Dargwa',null,'dar','dar'],
            ['Land Dayak languages',null,'day','day'],
            ['Delaware',null,'del','del'],
            ['Slave [Athapascan]',null,'den','den'],
            ['Dogrib',null,'dgr','dgr'],
            ['Dinka',null,'din','din'],
            ['Divehi; Dhivehi; Maldivian','dv','div','div'],
            ['Dogri',null,'doi','doi'],
            ['Dravidian languages',null,'dra','dra'],
            ['Lower Sorbian',null,'dsb','dsb'],
            ['Duala',null,'dua','dua'],
            ['Dutch, Middle [ca.1050-1350]',null,'dum','dum'],
            ['Dutch; Flemish','nl','dut','nld'],
            ['Dyula',null,'dyu','dyu'],
            ['Dzongkha','dz','dzo','dzo'],
            ['Efik',null,'efi','efi'],
            ['Egyptian [Ancient]',null,'egy','egy'],
            ['Ekajuk',null,'eka','eka'],
            ['Elamite',null,'elx','elx'],
            ['English','en','eng','eng','EN'],
            ['English, Middle [1100-1500]',null,'enm','enm'],
            ['Esperanto','eo','epo','epo'],
            ['Estonian','et','est','est'],
            ['Ewe','ee','ewe','ewe'],
            ['Ewondo',null,'ewo','ewo'],
            ['Fang',null,'fan','fan'],
            ['Faroese','fo','fao','fao'],
            ['Fanti',null,'fat','fat'],
            ['Fijian','fj','fij','fij'],
            ['Filipino; Pilipino',null,'fil','fil'],
            ['Finnish','fi','fin','fin'],
            ['Finno-Ugrian languages',null,'fiu','fiu'],
            ['Fon',null,'fon','fon'],
            ['French','fr','fre','fra','FR'],
            ['French, Middle [ca.1400-1600]',null,'frm','frm'],
            ['French, Old [842-ca.1400]',null,'fro','fro'],
            ['Northern Frisian',null,'frr','frr'],
            ['Eastern Frisian',null,'frs','frs'],
            ['Western Frisian','fy','fry','fry'],
            ['Fulah','ff','ful','ful'],
            ['Friulian',null,'fur','fur'],
            ['Ga',null,'gaa','gaa'],
            ['Gayo',null,'gay','gay'],
            ['Gbaya',null,'gba','gba'],
            ['Germanic languages',null,'gem','gem'],
            ['Georgian','ka','geo','kat'],
            ['German','de','ger','deu','DE'],
            ['Geez',null,'gez','gez'],
            ['Gilbertese',null,'gil','gil'],
            ['Gaelic; Scottish Gaelic','gd','gla','gla'],
            ['Irish','ga','gle','gle'],
            ['Galician','gl','glg','glg'],
            ['Manx','gv','glv','glv'],
            ['German, Middle High [ca.1050-1500]',null,'gmh','gmh'],
            ['German, Old High [ca.750-1050]',null,'goh','goh'],
            ['Gondi',null,'gon','gon'],
            ['Gorontalo',null,'gor','gor'],
            ['Gothic',null,'got','got'],
            ['Grebo',null,'grb','grb'],
            ['Greek, Ancient [to 1453]',null,'grc','grc'],
            ['Greek, Modern [1453-]','el','gre','ell'],
            ['Guarani','gn','grn','grn'],
            ['Swiss German; Alemannic; Alsatian',null,'gsw','gsw'],
            ['Gujarati','gu','guj','guj'],
            ['Gwich\'in',null,'gwi','gwi'],
            ['Haida',null,'hai','hai'],
            ['Haitian; Haitian Creole','ht','hat','hat'],
            ['Hausa','ha','hau','hau'],
            ['Hawaiian',null,'haw','haw'],
            ['Hebrew','he','heb','heb'],
            ['Herero','hz','her','her'],
            ['Hiligaynon',null,'hil','hil'],
            ['Himachali languages; Western Pahari languages',null,'him','him'],
            ['Hindi','hi','hin','hin'],
            ['Hittite',null,'hit','hit'],
            ['Hmong; Mong',null,'hmn','hmn'],
            ['Hiri Motu','ho','hmo','hmo'],
            ['Croatian','hr','hrv','hrv'],
            ['Upper Sorbian',null,'hsb','hsb'],
            ['Hungarian','hu','hun','hun'],
            ['Hupa',null,'hup','hup'],
            ['Iban',null,'iba','iba'],
            ['Igbo','ig','ibo','ibo'],
            ['Icelandic','is','ice','isl'],
            ['Ido','io','ido','ido'],
            ['Sichuan Yi; Nuosu','ii','iii','iii'],
            ['Ijo languages',null,'ijo','ijo'],
            ['Inuktitut','iu','iku','iku'],
            ['Interlingue; Occidental','ie','ile','ile'],
            ['Iloko',null,'ilo','ilo'],
            ['Interlingua [International Auxiliary Language Association]','ia','ina','ina'],
            ['Indic languages',null,'inc','inc'],
            ['Indonesian','id','ind','ind','ID'],
            ['Indo-European languages',null,'ine','ine'],
            ['Ingush',null,'inh','inh'],
            ['Inupiaq','ik','ipk','ipk'],
            ['Iranian languages',null,'ira','ira'],
            ['Iroquoian languages',null,'iro','iro'],
            ['Italian','it','ita','ita'],
            ['Javanese','jv','jav','jav'],
            ['Lojban',null,'jbo','jbo'],
            ['Japanese','ja','jpn','jpn'],
            ['Judeo-Persian',null,'jpr','jpr'],
            ['Judeo-Arabic',null,'jrb','jrb'],
            ['Kara-Kalpak',null,'kaa','kaa'],
            ['Kabyle',null,'kab','kab'],
            ['Kachin; Jingpho',null,'kac','kac'],
            ['Kalaallisut; Greenlandic','kl','kal','kal'],
            ['Kamba',null,'kam','kam'],
            ['Kannada','kn','kan','kan'],
            ['Karen languages',null,'kar','kar'],
            ['Kashmiri','ks','kas','kas'],
            ['Kanuri','kr','kau','kau'],
            ['Kawi',null,'kaw','kaw'],
            ['Kazakh','kk','kaz','kaz'],
            ['Kabardian',null,'kbd','kbd'],
            ['Khasi',null,'kha','kha'],
            ['Khoisan languages',null,'khi','khi'],
            ['Central Khmer','km','khm','khm'],
            ['Khotanese; Sakan',null,'kho','kho'],
            ['Kikuyu; Gikuyu','ki','kik','kik'],
            ['Kinyarwanda','rw','kin','kin'],
            ['Kirghiz; Kyrgyz','ky','kir','kir'],
            ['Kimbundu',null,'kmb','kmb'],
            ['Konkani',null,'kok','kok'],
            ['Komi','kv','kom','kom'],
            ['Kongo','kg','kon','kon'],
            ['Korean','ko','kor','kor'],
            ['Kosraean',null,'kos','kos'],
            ['Kpelle',null,'kpe','kpe'],
            ['Karachay-Balkar',null,'krc','krc'],
            ['Karelian',null,'krl','krl'],
            ['Kru languages',null,'kro','kro'],
            ['Kurukh',null,'kru','kru'],
            ['Kuanyama; Kwanyama','kj','kua','kua'],
            ['Kumyk',null,'kum','kum'],
            ['Kurdish','ku','kur','kur'],
            ['Kutenai',null,'kut','kut'],
            ['Ladino',null,'lad','lad'],
            ['Lahnda',null,'lah','lah'],
            ['Lamba',null,'lam','lam'],
            ['Lao','lo','lao','lao'],
            ['Latin','la','lat','lat'],
            ['Latvian','lv','lav','lav'],
            ['Lezghian',null,'lez','lez'],
            ['Limburgan; Limburger; Limburgish','li','lim','lim'],
            ['Lingala','ln','lin','lin'],
            ['Lithuanian','lt','lit','lit'],
            ['Mongo',null,'lol','lol'],
            ['Lozi',null,'loz','loz'],
            ['Luxembourgish; Letzeburgesch','lb','ltz','ltz'],
            ['Luba-Lulua',null,'lua','lua'],
            ['Luba-Katanga','lu','lub','lub'],
            ['Ganda','lg','lug','lug'],
            ['Luiseno',null,'lui','lui'],
            ['Lunda',null,'lun','lun'],
            ['Luo [Kenya and Tanzania]',null,'luo','luo'],
            ['Lushai',null,'lus','lus'],
            ['Macedonian','mk','mac','mkd'],
            ['Madurese',null,'mad','mad'],
            ['Magahi',null,'mag','mag'],
            ['Marshallese','mh','mah','mah'],
            ['Maithili',null,'mai','mai'],
            ['Makasar',null,'mak','mak'],
            ['Malayalam','ml','mal','mal'],
            ['Mandingo',null,'man','man'],
            ['Maori','mi','mao','mri'],
            ['Austronesian languages',null,'map','map'],
            ['Marathi','mr','mar','mar'],
            ['Masai',null,'mas','mas'],
            ['Malay','ms','may','msa'],
            ['Moksha',null,'mdf','mdf'],
            ['Mandar',null,'mdr','mdr'],
            ['Mende',null,'men','men'],
            ['Irish, Middle [900-1200]',null,'mga','mga'],
            ['Mi\'kmaq; Micmac',null,'mic','mic'],
            ['Minangkabau',null,'min','min'],
            ['Uncoded languages',null,'mis','mis'],
            ['Mon-Khmer languages',null,'mkh','mkh'],
            ['Malagasy','mg','mlg','mlg'],
            ['Maltese','mt','mlt','mlt'],
            ['Manchu',null,'mnc','mnc'],
            ['Manipuri',null,'mni','mni'],
            ['Manobo languages',null,'mno','mno'],
            ['Mohawk',null,'moh','moh'],
            ['Mongolian','mn','mon','mon'],
            ['Mossi',null,'mos','mos'],
            ['Multiple languages',null,'mul','mul'],
            ['Munda languages',null,'mun','mun'],
            ['Creek',null,'mus','mus'],
            ['Mirandese',null,'mwl','mwl'],
            ['Marwari',null,'mwr','mwr'],
            ['Mayan languages',null,'myn','myn'],
            ['Erzya',null,'myv','myv'],
            ['Nahuatl languages',null,'nah','nah'],
            ['North American Indian languages',null,'nai','nai'],
            ['Neapolitan',null,'nap','nap'],
            ['Nauru','na','nau','nau'],
            ['Navajo; Navaho','nv','nav','nav'],
            ['Ndebele, South; South Ndebele','nr','nbl','nbl'],
            ['Ndebele, North; North Ndebele','nd','nde','nde'],
            ['Ndonga','ng','ndo','ndo'],
            ['Low German; Low Saxon; German, Low; Saxon, Low',null,'nds','nds'],
            ['Nepali','ne','nep','nep'],
            ['Nepal Bhasa; Newari',null,'new','new'],
            ['Nias',null,'nia','nia'],
            ['Niger-Kordofanian languages',null,'nic','nic'],
            ['Niuean',null,'niu','niu'],
            ['Norwegian Nynorsk; Nynorsk, Norwegian','nn','nno','nno'],
            ['Bokmål, Norwegian; Norwegian Bokmål','nb','nob','nob'],
            ['Nogai',null,'nog','nog'],
            ['Norse, Old',null,'non','non'],
            ['Norwegian','no','nor','nor'],
            ['N\'Ko',null,'nqo','nqo'],
            ['Pedi; Sepedi; Northern Sotho',null,'nso','nso'],
            ['Nubian languages',null,'nub','nub'],
            ['Classical Newari; Old Newari; Classical Nepal Bhasa',null,'nwc','nwc'],
            ['Chichewa; Chewa; Nyanja','ny','nya','nya'],
            ['Nyamwezi',null,'nym','nym'],
            ['Nyankole',null,'nyn','nyn'],
            ['Nyoro',null,'nyo','nyo'],
            ['Nzima',null,'nzi','nzi'],
            ['Occitan [post 1500]; Provençal','oc','oci','oci'],
            ['Ojibwa','oj','oji','oji'],
            ['Oriya','or','ori','ori'],
            ['Oromo','om','orm','orm'],
            ['Osage',null,'osa','osa'],
            ['Ossetian; Ossetic','os','oss','oss'],
            ['Turkish, Ottoman [1500-1928]',null,'ota','ota'],
            ['Otomian languages',null,'oto','oto'],
            ['Papuan languages',null,'paa','paa'],
            ['Pangasinan',null,'pag','pag'],
            ['Pahlavi',null,'pal','pal'],
            ['Pampanga; Kapampangan',null,'pam','pam'],
            ['Panjabi; Punjabi','pa','pan','pan'],
            ['Papiamento',null,'pap','pap'],
            ['Palauan',null,'pau','pau'],
            ['Persian, Old [ca.600-400 B.C.]',null,'peo','peo'],
            ['Persian','fa','per','fas'],
            ['Philippine languages',null,'phi','phi'],
            ['Phoenician',null,'phn','phn'],
            ['Pali','pi','pli','pli'],
            ['Polish','pl','pol','pol'],
            ['Pohnpeian',null,'pon','pon'],
            ['Portuguese','pt','por','por'],
            ['Prakrit languages',null,'pra','pra'],
            ['Provençal, Old [to 1500]',null,'pro','pro'],
            ['Pushto; Pashto','ps','pus','pus'],
            ['Reserved for local use',null,'qaa','qaa'],
            ['Quechua','qu','que','que'],
            ['Rajasthani',null,'raj','raj'],
            ['Rapanui',null,'rap','rap'],
            ['Rarotongan; Cook Islands Maori',null,'rar','rar'],
            ['Romance languages',null,'roa','roa'],
            ['Romansh','rm','roh','roh'],
            ['Romany',null,'rom','rom'],
            ['Romanian; Moldavian; Moldovan','ro','rum','ron'],
            ['Rundi','rn','run','run'],
            ['Aromanian; Arumanian; Macedo-Romanian',null,'rup','rup'],
            ['Russian','ru','rus','rus'],
            ['Sandawe',null,'sad','sad'],
            ['Sango','sg','sag','sag'],
            ['Yakut',null,'sah','sah'],
            ['South American Indian [Other]',null,'sai','sai'],
            ['Salishan languages',null,'sal','sal'],
            ['Samaritan Aramaic',null,'sam','sam'],
            ['Sanskrit','sa','san','san'],
            ['Sasak',null,'sas','sas'],
            ['Santali',null,'sat','sat'],
            ['Sicilian',null,'scn','scn'],
            ['Scots',null,'sco','sco'],
            ['Selkup',null,'sel','sel'],
            ['Semitic languages',null,'sem','sem'],
            ['Irish, Old [to 900]',null,'sga','sga'],
            ['Sign Languages',null,'sgn','sgn'],
            ['Shan',null,'shn','shn'],
            ['Sidamo',null,'sid','sid'],
            ['Sinhala; Sinhalese','si','sin','sin'],
            ['Siouan languages',null,'sio','sio'],
            ['Sino-Tibetan languages',null,'sit','sit'],
            ['Slavic languages',null,'sla','sla'],
            ['Slovak','sk','slo','slk'],
            ['Slovenian','sl','slv','slv'],
            ['Southern Sami',null,'sma','sma'],
            ['Northern Sami','se','sme','sme'],
            ['Sami languages',null,'smi','smi'],
            ['Lule Sami',null,'smj','smj'],
            ['Inari Sami',null,'smn','smn'],
            ['Samoan','sm','smo','smo'],
            ['Skolt Sami',null,'sms','sms'],
            ['Shona','sn','sna','sna'],
            ['Sindhi','sd','snd','snd'],
            ['Soninke',null,'snk','snk'],
            ['Sogdian',null,'sog','sog'],
            ['Somali','so','som','som'],
            ['Songhai languages',null,'son','son'],
            ['Sotho, Southern','st','sot','sot'],
            ['Spanish; Castilian','es','spa','spa','SP'],
            ['Sardinian','sc','srd','srd'],
            ['Sranan Tongo',null,'srn','srn'],
            ['Serbian','sr','srp','srp'],
            ['Serer',null,'srr','srr'],
            ['Nilo-Saharan languages',null,'ssa','ssa'],
            ['Swati','ss','ssw','ssw'],
            ['Sukuma',null,'suk','suk'],
            ['Sundanese','su','sun','sun'],
            ['Susu',null,'sus','sus'],
            ['Sumerian',null,'sux','sux'],
            ['Swahili','sw','swa','swa'],
            ['Swedish','sv','swe','swe'],
            ['Classical Syriac',null,'syc','syc'],
            ['Syriac',null,'syr','syr'],
            ['Tahitian','ty','tah','tah'],
            ['Tai languages',null,'tai','tai'],
            ['Tamil','ta','tam','tam'],
            ['Tatar','tt','tat','tat'],
            ['Telugu','te','tel','tel'],
            ['Timne',null,'tem','tem'],
            ['Tereno',null,'ter','ter'],
            ['Tetum',null,'tet','tet'],
            ['Tajik','tg','tgk','tgk'],
            ['Tagalog','tl','tgl','tgl'],
            ['Thai','th','tha','tha'],
            ['Tibetan','bo','tib','bod'],
            ['Tigre',null,'tig','tig'],
            ['Tigrinya','ti','tir','tir'],
            ['Tiv',null,'tiv','tiv'],
            ['Tokelau',null,'tkl','tkl'],
            ['Klingon; tlhIngan-Hol',null,'tlh','tlh'],
            ['Tlingit',null,'tli','tli'],
            ['Tamashek',null,'tmh','tmh'],
            ['Tonga [Nyasa]',null,'tog','tog'],
            ['Tonga [Tonga Islands]','to','ton','ton'],
            ['Tok Pisin',null,'tpi','tpi'],
            ['Tsimshian',null,'tsi','tsi'],
            ['Tswana','tn','tsn','tsn'],
            ['Tsonga','ts','tso','tso'],
            ['Turkmen','tk','tuk','tuk'],
            ['Tumbuka',null,'tum','tum'],
            ['Tupi languages',null,'tup','tup'],
            ['Turkish','tr','tur','tur'],
            ['Altaic languages',null,'tut','tut'],
            ['Tuvalu',null,'tvl','tvl'],
            ['Twi','tw','twi','twi'],
            ['Tuvinian',null,'tyv','tyv'],
            ['Udmurt',null,'udm','udm'],
            ['Ugaritic',null,'uga','uga'],
            ['Uighur; Uyghur','ug','uig','uig'],
            ['Ukrainian','uk','ukr','ukr'],
            ['Umbundu',null,'umb','umb'],
            ['Undetermined',null,'und','und'],
            ['Urdu','ur','urd','urd'],
            ['Uzbek','uz','uzb','uzb'],
            ['Vai',null,'vai','vai'],
            ['Venda','ve','ven','ven'],
            ['Vietnamese','vi','vie','vie'],
            ['Volapük','vo','vol','vol'],
            ['Votic',null,'vot','vot'],
            ['Wakashan languages',null,'wak','wak'],
            ['Walamo',null,'wal','wal'],
            ['Waray',null,'war','war'],
            ['Washo',null,'was','was'],
            ['Welsh','cy','wel','cym'],
            ['Sorbian languages',null,'wen','wen'],
            ['Walloon','wa','wln','wln'],
            ['Wolof','wo','wol','wol'],
            ['Kalmyk; Oirat',null,'xal','xal'],
            ['Xhosa','xh','xho','xho'],
            ['Yao',null,'yao','yao'],
            ['Yapese',null,'yap','yap'],
            ['Yiddish','yi','yid','yid'],
            ['Yoruba','yo','yor','yor'],
            ['Yupik languages',null,'ypk','ypk'],
            ['Zapotec',null,'zap','zap'],
            ['Blissymbols; Blissymbolics; Bliss',null,'zbl','zbl'],
            ['Zenaga',null,'zen','zen'],
            ['Zhuang; Chuang','za','zha','zha'],
            ['Zande languages',null,'znd','znd'],
            ['Zulu','zu','zul','zul'],
            ['Zuni',null,'zun','zun'],
            ['No linguistic content; Not applicable',null,'zxx','zxx'],
            ['Zaza; Dimili; Dimli; Kirdki; Kirmanjki; Zazaki',null,'zza','zza'],
        ]
    ],
];
