<?php
/**
 * Created by PhpStorm.
 * User: Vaggelis Kotrotsios
 * Date: 10/24/2017
 * Time: 7:06 PM
 */
namespace Classes\Various;

class International
{
    /**
     * International constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return array
     */
    public static function getCountries()
    {
        return array(
            'AF' => 'Afghanistan',
            'AX' => 'Aland Islands',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua And Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia And Herzegovina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo',
            'CD' => 'Congo, Democratic Republic',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Cote D\'Ivoire',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands (Malvinas)',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard Island & Mcdonald Islands',
            'VA' => 'Holy See (Vatican City State)',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran, Islamic Republic Of',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle Of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KR' => 'Korea',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Lao People\'s Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao',
            'MK' => 'Macedonia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia, Federated States Of',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territory, Occupied',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'BL' => 'Saint Barthelemy',
            'SH' => 'Saint Helena',
            'KN' => 'Saint Kitts And Nevis',
            'LC' => 'Saint Lucia',
            'MF' => 'Saint Martin',
            'PM' => 'Saint Pierre And Miquelon',
            'VC' => 'Saint Vincent And Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome And Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia And Sandwich Isl.',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard And Jan Mayen',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad And Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks And Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UM' => 'United States Outlying Islands',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Viet Nam',
            'VG' => 'Virgin Islands, British',
            'VI' => 'Virgin Islands, U.S.',
            'WF' => 'Wallis And Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe'
        );
    }

    public static function getStates()
    {
        return array(
            1 => "Έβρου",
            2 => "Ροδόπης",
            3 => "Ξάνθης",
            4 => "Δράμας",
            5 => "Καβάλας",
            6 => "Θεσσαλονίκης",
            7 => "Χαλκιδικής",
            8 => "Άγιο Όρος",
            9 => "Ημαθίας",
            10 => "Κιλκίς",
            11 => "Πέλλας",
            12 => "Πιερίας",
            13 => "Σερρών",
            14 => "Κοζάνης",
            15 => "Φλώρινας",
            16 => "Γρεβενών",
            17 => "Καστοριάς",
            18 => "Ιωαννίνων",
            19 => "Άρτας",
            20 => "Πρέβεζας",
            21 => "Θεσπρωτίας",
            22 => "Λάρισας",
            23 => "Καρδίτσας",
            24 => "Μαγνησίας",
            25 => "Τρικάλων",
            26 => "Βοιωτίας",
            27 => "Ευβοίας",
            28 => "Ευρυτανίας",
            29 => "Φωκίδας",
            30 => "Φθιώτιδας",
            31 => "Κεφαλληνίας",
            32 => "Κέρκυρας",
            33 => "Λευκάδας",
            34 => "Ζακύνθου",
            35 => "Αχαΐας",
            36 => "Ηλείας",
            37 => "Αιτωλοακαρνανίας",
            38 => "Αρκαδίας",
            39 => "Αργολίδας",
            40 => "Κορινθίας",
            41 => "Λακωνίας",
            42 => "Μεσσηνίας",
            43 => "Αθηνών",
            44 => "Ανατολικής Αττικής",
            45 => "Πειραιώς",
            46 => "Δυτικής Αττικής",
            47 => "Χίου",
            48 => "Λέσβου",
            49 => "Σάμου",
            50 => "Κυκλάδων",
            51 => "Δωδεκανήσου",
            52 => "Ηρακλείου",
            53 => "Χανίων",
            54 => "Λασιθίου",
            55 => "Ρεθύμνης"

        );
    }

    public static function get_values_for_key($selectedValue)
    {
        $array1=array(
            1 => "Έβρου",
            2 => "Ροδόπης",
            3 => "Ξάνθης",
            4 => "Δράμας",
            5 => "Καβάλας",
            6 => "Θεσσαλονίκης",
            7 => "Χαλκιδικής",
            8 => "Άγιο Όρος",
            9 => "Ημαθίας",
            10 => "Κιλκίς",
            11 => "Πέλλας",
            12 => "Πιερίας",
            13 => "Σερρών",
            14 => "Κοζάνης",
            15 => "Φλώρινας",
            16 => "Γρεβενών",
            17 => "Καστοριάς",
            18 => "Ιωαννίνων",
            19 => "Άρτας",
            20 => "Πρέβεζας",
            21 => "Θεσπρωτίας",
            22 => "Λάρισας",
            23 => "Καρδίτσας",
            24 => "Μαγνησίας",
            25 => "Τρικάλων",
            26 => "Βοιωτίας",
            27 => "Ευβοίας",
            28 => "Ευρυτανίας",
            29 => "Φωκίδας",
            30 => "Φθιώτιδας",
            31 => "Κεφαλληνίας",
            32 => "Κέρκυρας",
            33 => "Λευκάδας",
            34 => "Ζακύνθου",
            35 => "Αχαΐας",
            36 => "Ηλείας",
            37 => "Αιτωλοακαρνανίας",
            38 => "Αρκαδίας",
            39 => "Αργολίδας",
            40 => "Κορινθίας",
            41 => "Λακωνίας",
            42 => "Μεσσηνίας",
            43 => "Αθηνών",
            44 => "Ανατολικής Αττικής",
            45 => "Πειραιώς",
            46 => "Δυτικής Αττικής",
            47 => "Χίου",
            48 => "Λέσβου",
            49 => "Σάμου",
            50 => "Κυκλάδων",
            51 => "Δωδεκανήσου",
            52 => "Ηρακλείου",
            53 => "Χανίων",
            54 => "Λασιθίου",
            55 => "Ρεθύμνης"

        );
        $response = array();
        $lenght=count($array1);

        for($i=$selectedValue-2; $i<$lenght; $i++) {
            $response = $array1[$i];}
            return $response;

   }

}

