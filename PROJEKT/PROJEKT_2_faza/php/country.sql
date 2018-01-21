-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Stu 10, 2015 u 07:22 PM
-- Verzija poslužitelja: 5.1.41
-- PHP verzija: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `test`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cc_fips` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `cc_iso` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `country_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cc_fips`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Izbacivanje podataka za tablicu `country`
--

INSERT INTO `country` (`cc_fips`, `cc_iso`, `country_name`) VALUES
('AA', 'AW', 'Aruba'),
('AC', 'AG', 'Antigua and Barbuda'),
('AE', 'AE', 'United Arab Emirates'),
('AF', 'AF', 'Afghanistan'),
('AG', 'DZ', 'Algeria'),
('AJ', 'AZ', 'Azerbaijan'),
('AL', 'AL', 'Albania'),
('AM', 'AM', 'Armenia'),
('AN', 'AD', 'Andorra'),
('AO', 'AO', 'Angola'),
('AQ', 'AS', 'American Samoa'),
('AR', 'AR', 'Argentina'),
('AS', 'AU', 'Australia'),
('AT', '-', 'Ashmore and Cartier Islands'),
('AU', 'AT', 'Austria'),
('AV', 'AI', 'Anguilla'),
('AX', 'AX', 'Åland Islands'),
('AY', 'AQ', 'Antarctica'),
('BA', 'BH', 'Bahrain'),
('BB', 'BB', 'Barbados'),
('BC', 'BW', 'Botswana'),
('BD', 'BM', 'Bermuda'),
('BE', 'BE', 'Belgium'),
('BF', 'BS', 'Bahamas, The'),
('BG', 'BD', 'Bangladesh'),
('BH', 'BZ', 'Belize'),
('BK', 'BA', 'Bosnia and Herzegovina'),
('BL', 'BO', 'Bolivia'),
('BM', 'MM', 'Myanmar'),
('BN', 'BJ', 'Benin'),
('BO', 'BY', 'Belarus'),
('BP', 'SB', 'Solomon Islands'),
('BQ', '-', 'Navassa Island'),
('BR', 'BR', 'Brazil'),
('BS', '-', 'Bassas da India'),
('BT', 'BT', 'Bhutan'),
('BU', 'BG', 'Bulgaria'),
('BV', 'BV', 'Bouvet Island'),
('BX', 'BN', 'Brunei'),
('BY', 'BI', 'Burundi'),
('CA', 'CA', 'Canada'),
('CB', 'KH', 'Cambodia'),
('CD', 'TD', 'Chad'),
('CE', 'LK', 'Sri Lanka'),
('CF', 'CG', 'Congo, Republic of the'),
('CG', 'CD', 'Congo, Democratic Republic of the'),
('CH', 'CN', 'China'),
('CI', 'CL', 'Chile'),
('CJ', 'KY', 'Cayman Islands'),
('CK', 'CC', 'Cocos (Keeling) Islands'),
('CM', 'CM', 'Cameroon'),
('CN', 'KM', 'Comoros'),
('CO', 'CO', 'Colombia'),
('CQ', 'MP', 'Northern Mariana Islands'),
('CR', '-', 'Coral Sea Islands'),
('CS', 'CR', 'Costa Rica'),
('CT', 'CF', 'Central African Republic'),
('CU', 'CU', 'Cuba'),
('CV', 'CV', 'Cape Verde'),
('CW', 'CK', 'Cook Islands'),
('CY', 'CY', 'Cyprus'),
('DA', 'DK', 'Denmark'),
('DJ', 'DJ', 'Djibouti'),
('DO', 'DM', 'Dominica'),
('DQ', 'UM', 'Jarvis Island'),
('DR', 'DO', 'Dominican Republic'),
('DX', '-', 'Dhekelia Sovereign Base Area'),
('EC', 'EC', 'Ecuador'),
('EG', 'EG', 'Egypt'),
('EI', 'IE', 'Ireland'),
('EK', 'GQ', 'Equatorial Guinea'),
('EN', 'EE', 'Estonia'),
('ER', 'ER', 'Eritrea'),
('ES', 'SV', 'El Salvador'),
('ET', 'ET', 'Ethiopia'),
('EU', '-', 'Europa Island'),
('EZ', 'CZ', 'Czech Republic'),
('FG', 'GF', 'French Guiana'),
('FI', 'FI', 'Finland'),
('FJ', 'FJ', 'Fiji'),
('FK', 'FK', 'Falkland Islands (Islas Malvinas)'),
('FM', 'FM', 'Micronesia, Federated States of'),
('FO', 'FO', 'Faroe Islands'),
('FP', 'PF', 'French Polynesia'),
('FQ', 'UM', 'Baker Island'),
('FR', 'FR', 'France'),
('FS', 'TF', 'French Southern and Antarctic Lands'),
('GA', 'GM', 'Gambia, The'),
('GB', 'GA', 'Gabon'),
('GG', 'GE', 'Georgia'),
('GH', 'GH', 'Ghana'),
('GI', 'GI', 'Gibraltar'),
('GJ', 'GD', 'Grenada'),
('GK', '-', 'Guernsey'),
('GL', 'GL', 'Greenland'),
('GM', 'DE', 'Germany'),
('GO', '-', 'Glorioso Islands'),
('GP', 'GP', 'Guadeloupe'),
('GQ', 'GU', 'Guam'),
('GR', 'GR', 'Greece'),
('GT', 'GT', 'Guatemala'),
('GV', 'GN', 'Guinea'),
('GY', 'GY', 'Guyana'),
('GZ', '-', 'Gaza Strip'),
('HA', 'HT', 'Haiti'),
('HK', 'HK', 'Hong Kong'),
('HM', 'HM', 'Heard Island and McDonald Islands'),
('HO', 'HN', 'Honduras'),
('HQ', 'UM', 'Howland Island'),
('HR', 'HR', 'Croatia'),
('HU', 'HU', 'Hungary'),
('IC', 'IS', 'Iceland'),
('ID', 'ID', 'Indonesia'),
('IM', 'IM', 'Isle of Man'),
('IN', 'IN', 'India'),
('IO', 'IO', 'British Indian Ocean Territory'),
('IP', '-', 'Clipperton Island'),
('IR', 'IR', 'Iran'),
('IS', 'IL', 'Israel'),
('IT', 'IT', 'Italy'),
('IV', 'CI', 'Cote d''Ivoire'),
('IZ', 'IQ', 'Iraq'),
('JA', 'JP', 'Japan'),
('JE', 'JE', 'Jersey'),
('JM', 'JM', 'Jamaica'),
('JN', 'SJ', 'Jan Mayen'),
('JO', 'JO', 'Jordan'),
('JQ', 'UM', 'Johnston Atoll'),
('JU', '-', 'Juan de Nova Island'),
('KE', 'KE', 'Kenya'),
('KG', 'KG', 'Kyrgyzstan'),
('KN', 'KP', 'Korea, North'),
('KQ', 'UM', 'Kingman Reef'),
('KR', 'KI', 'Kiribati'),
('KS', 'KR', 'Korea, South'),
('KT', 'CX', 'Christmas Island'),
('KU', 'KW', 'Kuwait'),
('KV', 'KV', 'Kosovo'),
('KZ', 'KZ', 'Kazakhstan'),
('LA', 'LA', 'Laos'),
('LE', 'LB', 'Lebanon'),
('LG', 'LV', 'Latvia'),
('LH', 'LT', 'Lithuania'),
('LI', 'LR', 'Liberia'),
('LO', 'SK', 'Slovakia'),
('LQ', 'UM', 'Palmyra Atoll'),
('LS', 'LI', 'Liechtenstein'),
('LT', 'LS', 'Lesotho'),
('LU', 'LU', 'Luxembourg'),
('LY', 'LY', 'Libyan Arab'),
('MA', 'MG', 'Madagascar'),
('MB', 'MQ', 'Martinique'),
('MC', 'MO', 'Macau'),
('MD', 'MD', 'Moldova, Republic of'),
('MF', 'YT', 'Mayotte'),
('MG', 'MN', 'Mongolia'),
('MH', 'MS', 'Montserrat'),
('MI', 'MW', 'Malawi'),
('MJ', 'ME', 'Montenegro'),
('MK', 'MK', 'The Former Yugoslav Republic of Macedonia'),
('ML', 'ML', 'Mali'),
('MN', 'MC', 'Monaco'),
('MO', 'MA', 'Morocco'),
('MP', 'MU', 'Mauritius'),
('MQ', 'UM', 'Midway Islands'),
('MR', 'MR', 'Mauritania'),
('MT', 'MT', 'Malta'),
('MU', 'OM', 'Oman'),
('MV', 'MV', 'Maldives'),
('MX', 'MX', 'Mexico'),
('MY', 'MY', 'Malaysia'),
('MZ', 'MZ', 'Mozambique'),
('NC', 'NC', 'New Caledonia'),
('NE', 'NU', 'Niue'),
('NF', 'NF', 'Norfolk Island'),
('NG', 'NE', 'Niger'),
('NH', 'VU', 'Vanuatu'),
('NI', 'NG', 'Nigeria'),
('NL', 'NL', 'Netherlands'),
('NM', '', 'No Man''s Land'),
('NO', 'NO', 'Norway'),
('NP', 'NP', 'Nepal'),
('NR', 'NR', 'Nauru'),
('NS', 'SR', 'Suriname'),
('NT', 'AN', 'Netherlands Antilles'),
('NU', 'NI', 'Nicaragua'),
('NZ', 'NZ', 'New Zealand'),
('PA', 'PY', 'Paraguay'),
('PC', 'PN', 'Pitcairn Islands'),
('PE', 'PE', 'Peru'),
('PF', '-', 'Paracel Islands'),
('PG', '-', 'Spratly Islands'),
('PK', 'PK', 'Pakistan'),
('PL', 'PL', 'Poland'),
('PM', 'PA', 'Panama'),
('PO', 'PT', 'Portugal'),
('PP', 'PG', 'Papua New Guinea'),
('PS', 'PW', 'Palau'),
('PU', 'GW', 'Guinea-Bissau'),
('QA', 'QA', 'Qatar'),
('RE', 'RE', 'Reunion'),
('RI', 'RS', 'Serbia'),
('RM', 'MH', 'Marshall Islands'),
('RN', 'MF', 'Saint Martin'),
('RO', 'RO', 'Romania'),
('RP', 'PH', 'Philippines'),
('RQ', 'PR', 'Puerto Rico'),
('RS', 'RU', 'Russia'),
('RW', 'RW', 'Rwanda'),
('SA', 'SA', 'Saudi Arabia'),
('SB', 'PM', 'Saint Pierre and Miquelon'),
('SC', 'KN', 'Saint Kitts and Nevis'),
('SE', 'SC', 'Seychelles'),
('SF', 'ZA', 'South Africa'),
('SG', 'SN', 'Senegal'),
('SH', 'SH', 'Saint Helena'),
('SI', 'SI', 'Slovenia'),
('SL', 'SL', 'Sierra Leone'),
('SM', 'SM', 'San Marino'),
('SN', 'SG', 'Singapore'),
('SO', 'SO', 'Somalia'),
('SP', 'ES', 'Spain'),
('ST', 'LC', 'Saint Lucia'),
('SU', 'SD', 'Sudan'),
('SV', 'SJ', 'Svalbard'),
('SW', 'SE', 'Sweden'),
('SX', 'GS', 'South Georgia and the Islands'),
('SY', 'SY', 'Syrian Arab Republic'),
('SZ', 'CH', 'Switzerland'),
('TD', 'TT', 'Trinidad and Tobago'),
('TE', '-', 'Tromelin Island'),
('TH', 'TH', 'Thailand'),
('TI', 'TJ', 'Tajikistan'),
('TK', 'TC', 'Turks and Caicos Islands'),
('TL', 'TK', 'Tokelau'),
('TN', 'TO', 'Tonga'),
('TO', 'TG', 'Togo'),
('TP', 'ST', 'Sao Tome and Principe'),
('TS', 'TN', 'Tunisia'),
('TT', 'TL', 'East Timor'),
('TU', 'TR', 'Turkey'),
('TV', 'TV', 'Tuvalu'),
('TW', 'TW', 'Taiwan'),
('TX', 'TM', 'Turkmenistan'),
('TZ', 'TZ', 'Tanzania, United Republic of'),
('UG', 'UG', 'Uganda'),
('UK', 'GB', 'United Kingdom'),
('UP', 'UA', 'Ukraine'),
('US', 'US', 'United States'),
('UV', 'BF', 'Burkina Faso'),
('UY', 'UY', 'Uruguay'),
('UZ', 'UZ', 'Uzbekistan'),
('VC', 'VC', 'Saint Vincent and the Grenadines'),
('VE', 'VE', 'Venezuela'),
('VI', 'VG', 'British Virgin Islands'),
('VM', 'VN', 'Vietnam'),
('VQ', 'VI', 'Virgin Islands (US)'),
('VT', 'VA', 'Holy See (Vatican City)'),
('WA', 'NA', 'Namibia'),
('WE', '-', 'West Bank'),
('WF', 'WF', 'Wallis and Futuna'),
('WI', 'EH', 'Western Sahara'),
('WQ', 'UM', 'Wake Island'),
('WS', 'WS', 'Samoa'),
('WZ', 'SZ', 'Swaziland'),
('YI', 'CS', 'Serbia and Montenegro'),
('YM', 'YE', 'Yemen'),
('ZA', 'ZM', 'Zambia'),
('ZI', 'ZW', 'Zimbabwe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;