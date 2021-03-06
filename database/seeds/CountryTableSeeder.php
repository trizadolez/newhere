<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('country' => 'Afghanistan','iso3166_alpha2' => 'AF','iso3166_alpha3' => 'AFG','iso3166_numeric' => '004'),
            array('country' => 'Aland Islands','iso3166_alpha2' => 'AX','iso3166_alpha3' => 'ALA','iso3166_numeric' => '248'),
            array('country' => 'Albania','iso3166_alpha2' => 'AL','iso3166_alpha3' => 'ALB','iso3166_numeric' => '008'),
            array('country' => 'Algeria','iso3166_alpha2' => 'DZ','iso3166_alpha3' => 'DZA','iso3166_numeric' => '012'),
            array('country' => 'American Samoa','iso3166_alpha2' => 'AS','iso3166_alpha3' => 'ASM','iso3166_numeric' => '016'),
            array('country' => 'Andorra','iso3166_alpha2' => 'AD','iso3166_alpha3' => 'AND','iso3166_numeric' => '020'),
            array('country' => 'Angola','iso3166_alpha2' => 'AO','iso3166_alpha3' => 'AGO','iso3166_numeric' => '024'),
            array('country' => 'Anguilla','iso3166_alpha2' => 'AI','iso3166_alpha3' => 'AIA','iso3166_numeric' => '660'),
            array('country' => 'Antarctica','iso3166_alpha2' => 'AQ','iso3166_alpha3' => 'ATA','iso3166_numeric' => '010'),
            array('country' => 'Antigua And Barbuda','iso3166_alpha2' => 'AG','iso3166_alpha3' => 'ATG','iso3166_numeric' => '028'),
            array('country' => 'Argentina','iso3166_alpha2' => 'AR','iso3166_alpha3' => 'ARG','iso3166_numeric' => '032'),
            array('country' => 'Armenia','iso3166_alpha2' => 'AM','iso3166_alpha3' => 'ARM','iso3166_numeric' => '051'),
            array('country' => 'Aruba','iso3166_alpha2' => 'AW','iso3166_alpha3' => 'ABW','iso3166_numeric' => '533'),
            array('country' => 'Australia','iso3166_alpha2' => 'AU','iso3166_alpha3' => 'AUS','iso3166_numeric' => '036'),
            array('country' => 'Austria','iso3166_alpha2' => 'AT','iso3166_alpha3' => 'AUT','iso3166_numeric' => '040'),
            array('country' => 'Azerbaijan','iso3166_alpha2' => 'AZ','iso3166_alpha3' => 'AZE','iso3166_numeric' => '031'),
            array('country' => 'Bahamas','iso3166_alpha2' => 'BS','iso3166_alpha3' => 'BHS','iso3166_numeric' => '044'),
            array('country' => 'Bahrain','iso3166_alpha2' => 'BH','iso3166_alpha3' => 'BHR','iso3166_numeric' => '048'),
            array('country' => 'Bangladesh','iso3166_alpha2' => 'BD','iso3166_alpha3' => 'BGD','iso3166_numeric' => '050'),
            array('country' => 'Barbados','iso3166_alpha2' => 'BB','iso3166_alpha3' => 'BRB','iso3166_numeric' => '052'),
            array('country' => 'Belarus','iso3166_alpha2' => 'BY','iso3166_alpha3' => 'BLR','iso3166_numeric' => '112'),
            array('country' => 'Belgium','iso3166_alpha2' => 'BE','iso3166_alpha3' => 'BEL','iso3166_numeric' => '056'),
            array('country' => 'Belize','iso3166_alpha2' => 'BZ','iso3166_alpha3' => 'BLZ','iso3166_numeric' => '084'),
            array('country' => 'Benin','iso3166_alpha2' => 'BJ','iso3166_alpha3' => 'BEN','iso3166_numeric' => '204'),
            array('country' => 'Bermuda','iso3166_alpha2' => 'BM','iso3166_alpha3' => 'BMU','iso3166_numeric' => '060'),
            array('country' => 'Bhutan','iso3166_alpha2' => 'BT','iso3166_alpha3' => 'BTN','iso3166_numeric' => '064'),
            array('country' => 'Bolivia, Plurinational State Of','iso3166_alpha2' => 'BO','iso3166_alpha3' => 'BOL','iso3166_numeric' => '068'),
            array('country' => 'Bonaire, Sint Eustatius And Saba','iso3166_alpha2' => 'BQ','iso3166_alpha3' => 'BES','iso3166_numeric' => '535'),
            array('country' => 'Bosnia And Herzegovina','iso3166_alpha2' => 'BA','iso3166_alpha3' => 'BIH','iso3166_numeric' => '070'),
            array('country' => 'Botswana','iso3166_alpha2' => 'BW','iso3166_alpha3' => 'BWA','iso3166_numeric' => '072'),
            array('country' => 'Bouvet Island','iso3166_alpha2' => 'BV','iso3166_alpha3' => 'BVT','iso3166_numeric' => '074'),
            array('country' => 'Brazil','iso3166_alpha2' => 'BR','iso3166_alpha3' => 'BRA','iso3166_numeric' => '076'),
            array('country' => 'British Indian Ocean Territory','iso3166_alpha2' => 'IO','iso3166_alpha3' => 'IOT','iso3166_numeric' => '086'),
            array('country' => 'Brunei Darussalam','iso3166_alpha2' => 'BN','iso3166_alpha3' => 'BRN','iso3166_numeric' => '096'),
            array('country' => 'Bulgaria','iso3166_alpha2' => 'BG','iso3166_alpha3' => 'BGR','iso3166_numeric' => '100'),
            array('country' => 'Burkina Faso','iso3166_alpha2' => 'BF','iso3166_alpha3' => 'BFA','iso3166_numeric' => '854'),
            array('country' => 'Burundi','iso3166_alpha2' => 'BI','iso3166_alpha3' => 'BDI','iso3166_numeric' => '108'),
            array('country' => 'Cambodia','iso3166_alpha2' => 'KH','iso3166_alpha3' => 'KHM','iso3166_numeric' => '116'),
            array('country' => 'Cameroon','iso3166_alpha2' => 'CM','iso3166_alpha3' => 'CMR','iso3166_numeric' => '120'),
            array('country' => 'Canada','iso3166_alpha2' => 'CA','iso3166_alpha3' => 'CAN','iso3166_numeric' => '124'),
            array('country' => 'Cape Verde','iso3166_alpha2' => 'CV','iso3166_alpha3' => 'CPV','iso3166_numeric' => '132'),
            array('country' => 'Cayman Islands','iso3166_alpha2' => 'KY','iso3166_alpha3' => 'CYM','iso3166_numeric' => '136'),
            array('country' => 'Central African Republic','iso3166_alpha2' => 'CF','iso3166_alpha3' => 'CAF','iso3166_numeric' => '140'),
            array('country' => 'Chad','iso3166_alpha2' => 'TD','iso3166_alpha3' => 'TCD','iso3166_numeric' => '148'),
            array('country' => 'Chile','iso3166_alpha2' => 'CL','iso3166_alpha3' => 'CHL','iso3166_numeric' => '152'),
            array('country' => 'China','iso3166_alpha2' => 'CN','iso3166_alpha3' => 'CHN','iso3166_numeric' => '156'),
            array('country' => 'Christmas Island','iso3166_alpha2' => 'CX','iso3166_alpha3' => 'CXR','iso3166_numeric' => '162'),
            array('country' => 'Cocos (keeling) Islands','iso3166_alpha2' => 'CC','iso3166_alpha3' => 'CCK','iso3166_numeric' => '166'),
            array('country' => 'Colombia','iso3166_alpha2' => 'CO','iso3166_alpha3' => 'COL','iso3166_numeric' => '170'),
            array('country' => 'Comoros','iso3166_alpha2' => 'KM','iso3166_alpha3' => 'COM','iso3166_numeric' => '174'),
            array('country' => 'Congo','iso3166_alpha2' => 'CG','iso3166_alpha3' => 'COG','iso3166_numeric' => '178'),
            array('country' => 'Congo, The Democratic Republic Of The','iso3166_alpha2' => 'CD','iso3166_alpha3' => 'COD','iso3166_numeric' => '180'),
            array('country' => 'Cook Islands','iso3166_alpha2' => 'CK','iso3166_alpha3' => 'COK','iso3166_numeric' => '184'),
            array('country' => 'Costa Rica','iso3166_alpha2' => 'CR','iso3166_alpha3' => 'CRI','iso3166_numeric' => '188'),
            array('country' => 'Cote D\'\'ivoire','iso3166_alpha2' => 'CI','iso3166_alpha3' => 'CIV','iso3166_numeric' => '384'),
            array('country' => 'Croatia','iso3166_alpha2' => 'HR','iso3166_alpha3' => 'HRV','iso3166_numeric' => '191'),
            array('country' => 'Cuba','iso3166_alpha2' => 'CU','iso3166_alpha3' => 'CUB','iso3166_numeric' => '192'),
            array('country' => 'Curacao','iso3166_alpha2' => 'CW','iso3166_alpha3' => 'CUW','iso3166_numeric' => '531'),
            array('country' => 'Cyprus','iso3166_alpha2' => 'CY','iso3166_alpha3' => 'CYP','iso3166_numeric' => '196'),
            array('country' => 'Czech Republic','iso3166_alpha2' => 'CZ','iso3166_alpha3' => 'CZE','iso3166_numeric' => '203'),
            array('country' => 'Denmark','iso3166_alpha2' => 'DK','iso3166_alpha3' => 'DNK','iso3166_numeric' => '208'),
            array('country' => 'Djibouti','iso3166_alpha2' => 'DJ','iso3166_alpha3' => 'DJI','iso3166_numeric' => '262'),
            array('country' => 'Dominica','iso3166_alpha2' => 'DM','iso3166_alpha3' => 'DMA','iso3166_numeric' => '212'),
            array('country' => 'Dominican Republic','iso3166_alpha2' => 'DO','iso3166_alpha3' => 'DOM','iso3166_numeric' => '214'),
            array('country' => 'Ecuador','iso3166_alpha2' => 'EC','iso3166_alpha3' => 'ECU','iso3166_numeric' => '218'),
            array('country' => 'Egypt','iso3166_alpha2' => 'EG','iso3166_alpha3' => 'EGY','iso3166_numeric' => '818'),
            array('country' => 'El Salvador','iso3166_alpha2' => 'SV','iso3166_alpha3' => 'SLV','iso3166_numeric' => '222'),
            array('country' => 'Equatorial Guinea','iso3166_alpha2' => 'GQ','iso3166_alpha3' => 'GNQ','iso3166_numeric' => '226'),
            array('country' => 'Eritrea','iso3166_alpha2' => 'ER','iso3166_alpha3' => 'ERI','iso3166_numeric' => '232'),
            array('country' => 'Estonia','iso3166_alpha2' => 'EE','iso3166_alpha3' => 'EST','iso3166_numeric' => '233'),
            array('country' => 'Ethiopia','iso3166_alpha2' => 'ET','iso3166_alpha3' => 'ETH','iso3166_numeric' => '231'),
            array('country' => 'Falkland Islands (malvinas)','iso3166_alpha2' => 'FK','iso3166_alpha3' => 'FLK','iso3166_numeric' => '238'),
            array('country' => 'Faroe Islands','iso3166_alpha2' => 'FO','iso3166_alpha3' => 'FRO','iso3166_numeric' => '234'),
            array('country' => 'Fiji','iso3166_alpha2' => 'FJ','iso3166_alpha3' => 'FJI','iso3166_numeric' => '242'),
            array('country' => 'Finland','iso3166_alpha2' => 'FI','iso3166_alpha3' => 'FIN','iso3166_numeric' => '246'),
            array('country' => 'France','iso3166_alpha2' => 'FR','iso3166_alpha3' => 'FRA','iso3166_numeric' => '250'),
            array('country' => 'French Guiana','iso3166_alpha2' => 'GF','iso3166_alpha3' => 'GUF','iso3166_numeric' => '254'),
            array('country' => 'French Polynesia','iso3166_alpha2' => 'PF','iso3166_alpha3' => 'PYF','iso3166_numeric' => '258'),
            array('country' => 'French Southern Territories','iso3166_alpha2' => 'TF','iso3166_alpha3' => 'ATF','iso3166_numeric' => '260'),
            array('country' => 'Gabon','iso3166_alpha2' => 'GA','iso3166_alpha3' => 'GAB','iso3166_numeric' => '266'),
            array('country' => 'Gambia','iso3166_alpha2' => 'GM','iso3166_alpha3' => 'GMB','iso3166_numeric' => '270'),
            array('country' => 'Georgia','iso3166_alpha2' => 'GE','iso3166_alpha3' => 'GEO','iso3166_numeric' => '268'),
            array('country' => 'Germany','iso3166_alpha2' => 'DE','iso3166_alpha3' => 'DEU','iso3166_numeric' => '276'),
            array('country' => 'Ghana','iso3166_alpha2' => 'GH','iso3166_alpha3' => 'GHA','iso3166_numeric' => '288'),
            array('country' => 'Gibraltar','iso3166_alpha2' => 'GI','iso3166_alpha3' => 'GIB','iso3166_numeric' => '292'),
            array('country' => 'Greece','iso3166_alpha2' => 'GR','iso3166_alpha3' => 'GRC','iso3166_numeric' => '300'),
            array('country' => 'Greenland','iso3166_alpha2' => 'GL','iso3166_alpha3' => 'GRL','iso3166_numeric' => '304'),
            array('country' => 'Grenada','iso3166_alpha2' => 'GD','iso3166_alpha3' => 'GRD','iso3166_numeric' => '308'),
            array('country' => 'Guadeloupe','iso3166_alpha2' => 'GP','iso3166_alpha3' => 'GLP','iso3166_numeric' => '312'),
            array('country' => 'Guam','iso3166_alpha2' => 'GU','iso3166_alpha3' => 'GUM','iso3166_numeric' => '316'),
            array('country' => 'Guatemala','iso3166_alpha2' => 'GT','iso3166_alpha3' => 'GTM','iso3166_numeric' => '320'),
            array('country' => 'Guernsey','iso3166_alpha2' => 'GG','iso3166_alpha3' => 'GGY','iso3166_numeric' => '831'),
            array('country' => 'Guinea','iso3166_alpha2' => 'GN','iso3166_alpha3' => 'GIN','iso3166_numeric' => '324'),
            array('country' => 'Guinea-bissau','iso3166_alpha2' => 'GW','iso3166_alpha3' => 'GNB','iso3166_numeric' => '624'),
            array('country' => 'Guyana','iso3166_alpha2' => 'GY','iso3166_alpha3' => 'GUY','iso3166_numeric' => '328'),
            array('country' => 'Haiti','iso3166_alpha2' => 'HT','iso3166_alpha3' => 'HTI','iso3166_numeric' => '332'),
            array('country' => 'Heard Island And Mcdonald Islands','iso3166_alpha2' => 'HM','iso3166_alpha3' => 'HMD','iso3166_numeric' => '334'),
            array('country' => 'Holy See (vatican City State)','iso3166_alpha2' => 'VA','iso3166_alpha3' => 'VAT','iso3166_numeric' => '336'),
            array('country' => 'Honduras','iso3166_alpha2' => 'HN','iso3166_alpha3' => 'HND','iso3166_numeric' => '340'),
            array('country' => 'Hong Kong','iso3166_alpha2' => 'HK','iso3166_alpha3' => 'HKG','iso3166_numeric' => '344'),
            array('country' => 'Hungary','iso3166_alpha2' => 'HU','iso3166_alpha3' => 'HUN','iso3166_numeric' => '348'),
            array('country' => 'Iceland','iso3166_alpha2' => 'IS','iso3166_alpha3' => 'ISL','iso3166_numeric' => '352'),
            array('country' => 'India','iso3166_alpha2' => 'IN','iso3166_alpha3' => 'IND','iso3166_numeric' => '356'),
            array('country' => 'Indonesia','iso3166_alpha2' => 'ID','iso3166_alpha3' => 'IDN','iso3166_numeric' => '360'),
            array('country' => 'Iran (islamic Republic Of)','iso3166_alpha2' => 'IR','iso3166_alpha3' => 'IRN','iso3166_numeric' => '364'),
            array('country' => 'Iraq','iso3166_alpha2' => 'IQ','iso3166_alpha3' => 'IRQ','iso3166_numeric' => '368'),
            array('country' => 'Ireland','iso3166_alpha2' => 'IE','iso3166_alpha3' => 'IRL','iso3166_numeric' => '372'),
            array('country' => 'Isle Of Man','iso3166_alpha2' => 'IM','iso3166_alpha3' => 'IMM','iso3166_numeric' => '833'),
            array('country' => 'Israel','iso3166_alpha2' => 'IL','iso3166_alpha3' => 'ISR','iso3166_numeric' => '376'),
            array('country' => 'Italy','iso3166_alpha2' => 'IT','iso3166_alpha3' => 'ITA','iso3166_numeric' => '380'),
            array('country' => 'Jamaica','iso3166_alpha2' => 'JM','iso3166_alpha3' => 'JAM','iso3166_numeric' => '388'),
            array('country' => 'Japan','iso3166_alpha2' => 'JP','iso3166_alpha3' => 'JPN','iso3166_numeric' => '392'),
            array('country' => 'Jersey','iso3166_alpha2' => 'JE','iso3166_alpha3' => 'JEY','iso3166_numeric' => '832'),
            array('country' => 'Jordan','iso3166_alpha2' => 'JO','iso3166_alpha3' => 'JOR','iso3166_numeric' => '400'),
            array('country' => 'Kazakhstan','iso3166_alpha2' => 'KZ','iso3166_alpha3' => 'KAZ','iso3166_numeric' => '398'),
            array('country' => 'Kenya','iso3166_alpha2' => 'KE','iso3166_alpha3' => 'KEN','iso3166_numeric' => '404'),
            array('country' => 'Kiribati','iso3166_alpha2' => 'KI','iso3166_alpha3' => 'KIR','iso3166_numeric' => '296'),
            array('country' => 'Korea, Democratic People\\\'s Republic Of','iso3166_alpha2' => 'KP','iso3166_alpha3' => 'PRK','iso3166_numeric' => '408'),
            array('country' => 'Korea, Republic Of','iso3166_alpha2' => 'KR','iso3166_alpha3' => 'KOR','iso3166_numeric' => '410'),
            array('country' => 'Kuwait','iso3166_alpha2' => 'KW','iso3166_alpha3' => 'KWT','iso3166_numeric' => '414'),
            array('country' => 'Kyrgyzstan','iso3166_alpha2' => 'KG','iso3166_alpha3' => 'KGZ','iso3166_numeric' => '417'),
            array('country' => 'Lao People\\\'s Democratic Republic','iso3166_alpha2' => 'LA','iso3166_alpha3' => 'LAO','iso3166_numeric' => '418'),
            array('country' => 'Latvia','iso3166_alpha2' => 'LV','iso3166_alpha3' => 'LVA','iso3166_numeric' => '428'),
            array('country' => 'Lebanon','iso3166_alpha2' => 'LB','iso3166_alpha3' => 'LBN','iso3166_numeric' => '422'),
            array('country' => 'Lesotho','iso3166_alpha2' => 'LS','iso3166_alpha3' => 'LSO','iso3166_numeric' => '426'),
            array('country' => 'Liberia','iso3166_alpha2' => 'LR','iso3166_alpha3' => 'LBR','iso3166_numeric' => '430'),
            array('country' => 'Libya','iso3166_alpha2' => 'LY','iso3166_alpha3' => 'LBY','iso3166_numeric' => '434'),
            array('country' => 'Liechtenstein','iso3166_alpha2' => 'LI','iso3166_alpha3' => 'LIE','iso3166_numeric' => '438'),
            array('country' => 'Lithuania','iso3166_alpha2' => 'LT','iso3166_alpha3' => 'LTU','iso3166_numeric' => '440'),
            array('country' => 'Luxembourg','iso3166_alpha2' => 'LU','iso3166_alpha3' => 'LUX','iso3166_numeric' => '442'),
            array('country' => 'Macao','iso3166_alpha2' => 'MO','iso3166_alpha3' => 'MAC','iso3166_numeric' => '446'),
            array('country' => 'Macedonia, The Former Yugoslav Republic Of','iso3166_alpha2' => 'MK','iso3166_alpha3' => 'MKD','iso3166_numeric' => '807'),
            array('country' => 'Madagascar','iso3166_alpha2' => 'MG','iso3166_alpha3' => 'MDG','iso3166_numeric' => '450'),
            array('country' => 'Malawi','iso3166_alpha2' => 'MW','iso3166_alpha3' => 'MWI','iso3166_numeric' => '454'),
            array('country' => 'Malaysia','iso3166_alpha2' => 'MY','iso3166_alpha3' => 'MYS','iso3166_numeric' => '458'),
            array('country' => 'Maldives','iso3166_alpha2' => 'MV','iso3166_alpha3' => 'MDV','iso3166_numeric' => '462'),
            array('country' => 'Mali','iso3166_alpha2' => 'ML','iso3166_alpha3' => 'MLI','iso3166_numeric' => '466'),
            array('country' => 'Malta','iso3166_alpha2' => 'MT','iso3166_alpha3' => 'MLT','iso3166_numeric' => '470'),
            array('country' => 'Marshall Islands','iso3166_alpha2' => 'MH','iso3166_alpha3' => 'MHL','iso3166_numeric' => '584'),
            array('country' => 'Martinique','iso3166_alpha2' => 'MQ','iso3166_alpha3' => 'MTQ','iso3166_numeric' => '474'),
            array('country' => 'Mauritania','iso3166_alpha2' => 'MR','iso3166_alpha3' => 'MRT','iso3166_numeric' => '478'),
            array('country' => 'Mauritius','iso3166_alpha2' => 'MU','iso3166_alpha3' => 'MUS','iso3166_numeric' => '480'),
            array('country' => 'Mayotte','iso3166_alpha2' => 'YT','iso3166_alpha3' => 'MYT','iso3166_numeric' => '175'),
            array('country' => 'Mexico','iso3166_alpha2' => 'MX','iso3166_alpha3' => 'MEX','iso3166_numeric' => '484'),
            array('country' => 'Micronesia, Federated States Of','iso3166_alpha2' => 'FM','iso3166_alpha3' => 'FSM','iso3166_numeric' => '583'),
            array('country' => 'Moldova, Republic Of','iso3166_alpha2' => 'MD','iso3166_alpha3' => 'MDA','iso3166_numeric' => '498'),
            array('country' => 'Monaco','iso3166_alpha2' => 'MC','iso3166_alpha3' => 'MCO','iso3166_numeric' => '492'),
            array('country' => 'Mongolia','iso3166_alpha2' => 'MN','iso3166_alpha3' => 'MNG','iso3166_numeric' => '496'),
            array('country' => 'Montenegro','iso3166_alpha2' => 'ME','iso3166_alpha3' => 'MNE','iso3166_numeric' => '499'),
            array('country' => 'Montserrat','iso3166_alpha2' => 'MS','iso3166_alpha3' => 'MSR','iso3166_numeric' => '500'),
            array('country' => 'Morocco','iso3166_alpha2' => 'MA','iso3166_alpha3' => 'MAR','iso3166_numeric' => '504'),
            array('country' => 'Mozambique','iso3166_alpha2' => 'MZ','iso3166_alpha3' => 'MOZ','iso3166_numeric' => '508'),
            array('country' => 'Myanmar','iso3166_alpha2' => 'MM','iso3166_alpha3' => 'MMR','iso3166_numeric' => '104'),
            array('country' => 'Namibia','iso3166_alpha2' => 'NA','iso3166_alpha3' => 'NAM','iso3166_numeric' => '516'),
            array('country' => 'Nauru','iso3166_alpha2' => 'NR','iso3166_alpha3' => 'NRU','iso3166_numeric' => '520'),
            array('country' => 'Nepal','iso3166_alpha2' => 'NP','iso3166_alpha3' => 'NPL','iso3166_numeric' => '524'),
            array('country' => 'Netherlands','iso3166_alpha2' => 'NL','iso3166_alpha3' => 'NLD','iso3166_numeric' => '528'),
            array('country' => 'New Caledonia','iso3166_alpha2' => 'NC','iso3166_alpha3' => 'NCL','iso3166_numeric' => '540'),
            array('country' => 'New Zealand','iso3166_alpha2' => 'NZ','iso3166_alpha3' => 'NZL','iso3166_numeric' => '554'),
            array('country' => 'Nicaragua','iso3166_alpha2' => 'NI','iso3166_alpha3' => 'NIC','iso3166_numeric' => '558'),
            array('country' => 'Niger','iso3166_alpha2' => 'NE','iso3166_alpha3' => 'NER','iso3166_numeric' => '562'),
            array('country' => 'Nigeria','iso3166_alpha2' => 'NG','iso3166_alpha3' => 'NGA','iso3166_numeric' => '566'),
            array('country' => 'Niue','iso3166_alpha2' => 'NU','iso3166_alpha3' => 'NIU','iso3166_numeric' => '570'),
            array('country' => 'Norfolk Island','iso3166_alpha2' => 'NF','iso3166_alpha3' => 'NFK','iso3166_numeric' => '574'),
            array('country' => 'Northern Mariana Islands','iso3166_alpha2' => 'MP','iso3166_alpha3' => 'MNP','iso3166_numeric' => '580'),
            array('country' => 'Norway','iso3166_alpha2' => 'NO','iso3166_alpha3' => 'NOR','iso3166_numeric' => '578'),
            array('country' => 'Oman','iso3166_alpha2' => 'OM','iso3166_alpha3' => 'OMN','iso3166_numeric' => '512'),
            array('country' => 'Pakistan','iso3166_alpha2' => 'PK','iso3166_alpha3' => 'PAK','iso3166_numeric' => '586'),
            array('country' => 'Palau','iso3166_alpha2' => 'PW','iso3166_alpha3' => 'PLW','iso3166_numeric' => '585'),
            array('country' => 'Palestinian Territory, Occupied','iso3166_alpha2' => 'PS','iso3166_alpha3' => 'PSE','iso3166_numeric' => '275'),
            array('country' => 'Panama','iso3166_alpha2' => 'PA','iso3166_alpha3' => 'PAN','iso3166_numeric' => '591'),
            array('country' => 'Papua New Guinea','iso3166_alpha2' => 'PG','iso3166_alpha3' => 'PNG','iso3166_numeric' => '598'),
            array('country' => 'Paraguay','iso3166_alpha2' => 'PY','iso3166_alpha3' => 'PRY','iso3166_numeric' => '600'),
            array('country' => 'Peru','iso3166_alpha2' => 'PE','iso3166_alpha3' => 'PER','iso3166_numeric' => '604'),
            array('country' => 'Philippines','iso3166_alpha2' => 'PH','iso3166_alpha3' => 'PHL','iso3166_numeric' => '608'),
            array('country' => 'Pitcairn','iso3166_alpha2' => 'PN','iso3166_alpha3' => 'PCN','iso3166_numeric' => '612'),
            array('country' => 'Poland','iso3166_alpha2' => 'PL','iso3166_alpha3' => 'POL','iso3166_numeric' => '616'),
            array('country' => 'Portugal','iso3166_alpha2' => 'PT','iso3166_alpha3' => 'PRT','iso3166_numeric' => '620'),
            array('country' => 'Puerto Rico','iso3166_alpha2' => 'PR','iso3166_alpha3' => 'PRI','iso3166_numeric' => '630'),
            array('country' => 'Qatar','iso3166_alpha2' => 'QA','iso3166_alpha3' => 'QAT','iso3166_numeric' => '634'),
            array('country' => 'Reunion','iso3166_alpha2' => 'RE','iso3166_alpha3' => 'REU','iso3166_numeric' => '638'),
            array('country' => 'Romania','iso3166_alpha2' => 'RO','iso3166_alpha3' => 'ROU','iso3166_numeric' => '642'),
            array('country' => 'Russian Federation','iso3166_alpha2' => 'RU','iso3166_alpha3' => 'RUS','iso3166_numeric' => '643'),
            array('country' => 'Rwanda','iso3166_alpha2' => 'RW','iso3166_alpha3' => 'RWA','iso3166_numeric' => '646'),
            array('country' => 'Saint Barthelemy','iso3166_alpha2' => 'BL','iso3166_alpha3' => 'BLM','iso3166_numeric' => '652'),
            array('country' => 'Saint Helena, Ascension And Tristan Da Cunha','iso3166_alpha2' => 'SH','iso3166_alpha3' => 'SHN','iso3166_numeric' => '654'),
            array('country' => 'Saint Kitts And Nevis','iso3166_alpha2' => 'KN','iso3166_alpha3' => 'KNA','iso3166_numeric' => '659'),
            array('country' => 'Saint Lucia','iso3166_alpha2' => 'LC','iso3166_alpha3' => 'LCA','iso3166_numeric' => '662'),
            array('country' => 'Saint Martin (french Part)','iso3166_alpha2' => 'MT','iso3166_alpha3' => 'MAF','iso3166_numeric' => '663'),
            array('country' => 'Saint Pierre And Miquelon','iso3166_alpha2' => 'PM','iso3166_alpha3' => 'SPM','iso3166_numeric' => '666'),
            array('country' => 'Saint Vincent And The Grenadines','iso3166_alpha2' => 'VC','iso3166_alpha3' => 'VCT','iso3166_numeric' => '670'),
            array('country' => 'Samoa','iso3166_alpha2' => 'WS','iso3166_alpha3' => 'WSM','iso3166_numeric' => '882'),
            array('country' => 'San Marino','iso3166_alpha2' => 'SM','iso3166_alpha3' => 'SMR','iso3166_numeric' => '674'),
            array('country' => 'Sao Tome And Principe','iso3166_alpha2' => 'ST','iso3166_alpha3' => 'STP','iso3166_numeric' => '678'),
            array('country' => 'Saudi Arabia','iso3166_alpha2' => 'SA','iso3166_alpha3' => 'SAU','iso3166_numeric' => '682'),
            array('country' => 'Senegal','iso3166_alpha2' => 'SN','iso3166_alpha3' => 'SEN','iso3166_numeric' => '686'),
            array('country' => 'Serbia','iso3166_alpha2' => 'RS','iso3166_alpha3' => 'SRB','iso3166_numeric' => '688'),
            array('country' => 'Seychelles','iso3166_alpha2' => 'SC','iso3166_alpha3' => 'SYC','iso3166_numeric' => '690'),
            array('country' => 'Sierra Leone','iso3166_alpha2' => 'SL','iso3166_alpha3' => 'SLE','iso3166_numeric' => '694'),
            array('country' => 'Singapore','iso3166_alpha2' => 'SG','iso3166_alpha3' => 'SGP','iso3166_numeric' => '702'),
            array('country' => 'Sint Maarten (dutch Part)','iso3166_alpha2' => 'SX','iso3166_alpha3' => 'SXM','iso3166_numeric' => '534'),
            array('country' => 'Slovakia','iso3166_alpha2' => 'SK','iso3166_alpha3' => 'SVK','iso3166_numeric' => '703'),
            array('country' => 'Slovenia','iso3166_alpha2' => 'SI','iso3166_alpha3' => 'SVN','iso3166_numeric' => '705'),
            array('country' => 'Solomon Islands','iso3166_alpha2' => 'SB','iso3166_alpha3' => 'SLB','iso3166_numeric' => '090'),
            array('country' => 'Somalia','iso3166_alpha2' => 'SO','iso3166_alpha3' => 'SOM','iso3166_numeric' => '706'),
            array('country' => 'South Africa','iso3166_alpha2' => 'ZA','iso3166_alpha3' => 'ZAF','iso3166_numeric' => '710'),
            array('country' => 'South Georgia And The South Sandwich Islands','iso3166_alpha2' => 'GS','iso3166_alpha3' => 'SGS','iso3166_numeric' => '239'),
            array('country' => 'South Sudan','iso3166_alpha2' => 'SS','iso3166_alpha3' => 'SSD','iso3166_numeric' => '728'),
            array('country' => 'Spain','iso3166_alpha2' => 'ES','iso3166_alpha3' => 'ESP','iso3166_numeric' => '724'),
            array('country' => 'Sri Lanka','iso3166_alpha2' => 'LK','iso3166_alpha3' => 'LKA','iso3166_numeric' => '144'),
            array('country' => 'Sudan','iso3166_alpha2' => 'SD','iso3166_alpha3' => 'SDN','iso3166_numeric' => '729'),
            array('country' => 'Suriname','iso3166_alpha2' => 'SR','iso3166_alpha3' => 'SUR','iso3166_numeric' => '740'),
            array('country' => 'Svalbard And Jan Mayen','iso3166_alpha2' => 'SJ','iso3166_alpha3' => 'SJM','iso3166_numeric' => '744'),
            array('country' => 'Swaziland','iso3166_alpha2' => 'SZ','iso3166_alpha3' => 'SWZ','iso3166_numeric' => '748'),
            array('country' => 'Sweden','iso3166_alpha2' => 'SE','iso3166_alpha3' => 'SWE','iso3166_numeric' => '752'),
            array('country' => 'Switzerland','iso3166_alpha2' => 'CH','iso3166_alpha3' => 'CHE','iso3166_numeric' => '756'),
            array('country' => 'Syrian Arab Republic','iso3166_alpha2' => 'SY','iso3166_alpha3' => 'SYR','iso3166_numeric' => '760'),
            array('country' => 'Taiwan, Province Of China','iso3166_alpha2' => 'TW','iso3166_alpha3' => 'TWN','iso3166_numeric' => '158'),
            array('country' => 'Tajikistan','iso3166_alpha2' => 'TJ','iso3166_alpha3' => 'TJK','iso3166_numeric' => '762'),
            array('country' => 'Tanzania, United Republic Of','iso3166_alpha2' => 'TZ','iso3166_alpha3' => 'TZA','iso3166_numeric' => '834'),
            array('country' => 'Thailand','iso3166_alpha2' => 'TH','iso3166_alpha3' => 'THA','iso3166_numeric' => '764'),
            array('country' => 'Timor-leste','iso3166_alpha2' => 'TL','iso3166_alpha3' => 'TLS','iso3166_numeric' => '626'),
            array('country' => 'Togo','iso3166_alpha2' => 'TG','iso3166_alpha3' => 'TGO','iso3166_numeric' => '768'),
            array('country' => 'Tokelau','iso3166_alpha2' => 'TK','iso3166_alpha3' => 'TKL','iso3166_numeric' => '772'),
            array('country' => 'Tonga','iso3166_alpha2' => 'TO','iso3166_alpha3' => 'TON','iso3166_numeric' => '776'),
            array('country' => 'Trinidad And Tobago','iso3166_alpha2' => 'TT','iso3166_alpha3' => 'TTO','iso3166_numeric' => '780'),
            array('country' => 'Tunisia','iso3166_alpha2' => 'TN','iso3166_alpha3' => 'TUN','iso3166_numeric' => '788'),
            array('country' => 'Turkey','iso3166_alpha2' => 'TR','iso3166_alpha3' => 'TUR','iso3166_numeric' => '792'),
            array('country' => 'Turkmenistan','iso3166_alpha2' => 'TM','iso3166_alpha3' => 'TKM','iso3166_numeric' => '795'),
            array('country' => 'Turks And Caicos Islands','iso3166_alpha2' => 'TC','iso3166_alpha3' => 'TCA','iso3166_numeric' => '796'),
            array('country' => 'Tuvalu','iso3166_alpha2' => 'TV','iso3166_alpha3' => 'TUV','iso3166_numeric' => '798'),
            array('country' => 'Uganda','iso3166_alpha2' => 'UG','iso3166_alpha3' => 'UGA','iso3166_numeric' => '800'),
            array('country' => 'Ukraine','iso3166_alpha2' => 'UA','iso3166_alpha3' => 'UKR','iso3166_numeric' => '804'),
            array('country' => 'United Arab Emirates','iso3166_alpha2' => 'AE','iso3166_alpha3' => 'ARE','iso3166_numeric' => '784'),
            array('country' => 'United Kingdom','iso3166_alpha2' => 'GB','iso3166_alpha3' => 'GBR','iso3166_numeric' => '826'),
            array('country' => 'United States','iso3166_alpha2' => 'US','iso3166_alpha3' => 'USA','iso3166_numeric' => '840'),
            array('country' => 'United States Minor Outlying Islands','iso3166_alpha2' => 'UM','iso3166_alpha3' => 'UMI','iso3166_numeric' => '581'),
            array('country' => 'Uruguay','iso3166_alpha2' => 'UY','iso3166_alpha3' => 'URY','iso3166_numeric' => '858'),
            array('country' => 'Uzbekistan','iso3166_alpha2' => 'UZ','iso3166_alpha3' => 'UZB','iso3166_numeric' => '860'),
            array('country' => 'Vanuatu','iso3166_alpha2' => 'VU','iso3166_alpha3' => 'VUT','iso3166_numeric' => '548'),
            array('country' => 'Vatican City State (holy See)','iso3166_alpha2' => 'VA','iso3166_alpha3' => 'VAT','iso3166_numeric' => '336'),
            array('country' => 'Venezuela, Bolivarian Republic Of','iso3166_alpha2' => 'VE','iso3166_alpha3' => 'VEN','iso3166_numeric' => '862'),
            array('country' => 'Viet Nam','iso3166_alpha2' => 'VN','iso3166_alpha3' => 'VNM','iso3166_numeric' => '704'),
            array('country' => 'Virgin Islands (british)','iso3166_alpha2' => 'VG','iso3166_alpha3' => 'VGB','iso3166_numeric' => '092'),
            array('country' => 'Virgin Islands (u.s.)','iso3166_alpha2' => 'VI','iso3166_alpha3' => 'VIR','iso3166_numeric' => '850'),
            array('country' => 'Wallis And Futuna','iso3166_alpha2' => 'WF','iso3166_alpha3' => 'WLF','iso3166_numeric' => '876'),
            array('country' => 'Western Sahara','iso3166_alpha2' => 'EH','iso3166_alpha3' => 'ESH','iso3166_numeric' => '732'),
            array('country' => 'Yemen','iso3166_alpha2' => 'YE','iso3166_alpha3' => 'YEM','iso3166_numeric' => '887'),
            array('country' => 'Yugoslavia','iso3166_alpha2' => 'YU','iso3166_alpha3' => 'YUG','iso3166_numeric' => '891'),
            array('country' => 'Zambia','iso3166_alpha2' => 'ZM','iso3166_alpha3' => 'ZMB','iso3166_numeric' => '894'),
            array('country' => 'Zimbabwe','iso3166_alpha2' => 'ZW','iso3166_alpha3' => 'ZWE','iso3166_numeric' => '716')
        );

        foreach ($countries as $country) {
            $obj = new \App\Country();
            $obj->country = $country['country'];
            $obj->iso3166_alpha2 = $country['iso3166_alpha2'];
            $obj->iso3166_alpha3 = $country['iso3166_alpha3'];
            $obj->iso3166_numeric = $country['iso3166_numeric'];
            $obj->enabled = true;
            $obj->save();
        }
    }
}
