<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets' => 'Tsy nisy fitsipika napetraka ao amin\'ny fampiasana ny  Validation.',
    'ruleNotFound' => 'Tsy fitsipika ara-dalàna ny {0}.',
    'groupNotFound' => 'Tsy sokajina fitsipika ara-dalàna ny {0}.',
    'groupNotArray' => 'Mila atao array ny sokajina fitsipika {0}.',
    'invalidTemplate' => 'Tsy template de validation ara-dalàna ny {0}.',

    // Rule Messages
    'alpha' => 'Litera ihany no tokony ho hita ao amin\'ny {field}.',
    'alpha_dash' => 'Litera, tsipika ambany, tsipi-panohizana ihany no tokony ho hita ao amin\'ny {field}.',
    'alpha_numeric' => 'Litera sy marika  ihany no tokony ho hita ao amin\'ny {field}.',
    'alpha_numeric_punct' => 'Litera, marika, elanelana ary  ~ ! # $ % & * - _ + = | : .  ihany no tokony ho hita ao amin\'ny {field}.',
    'alpha_numeric_space' => 'Litera sy elanelana  ihany no tokony ho hita ao amin\'ny {field}.',
    'alpha_space' => 'Litera, marika sy elanelana  ihany no tokony ho hita ao amin\'ny {field}.',
    'decimal' => 'Mila ahitana marika ao anatin\ny {field}',
    'differs' => 'Mila tsy mitovy amin\'ny {param} ny {field}.',
    'equals' => 'Ny {field} dia tsy maintsy mitovy tanteraka amin\ny: {param}.',
    'exact_length' => 'Ny {field} dia tsy maintsy manana litera miisa {param} katroka.',
    'greater_than' => 'Tsy maintsy lehibe noho ny {param} ny isa eo amin\'ny {field}.',
    'greater_than_equal_to' => 'Tsy maintsy lehibe na mitovy amin\'ny {param} ny isa eo amin\'ny {field}.',
    'hex' => 'Litera hexadecimal ihany no afaka apetraka eo amin\'ny {field}.',
    'in_list' => 'Ny {field} dia tsy maintsy iray amin\'ny: {param}.',
    'integer' => 'Tsy maintsy misy  tarehi-marika ny {field}.',
    'is_natural' => 'Tarehi-marika ihany no azo apetraka eo amin\'ny {field}.',
    'is_natural_no_zero' => 'Tsy maintsy tarehi-marika no azo apetraka eo amin\'ny {field} ary tsy maintsy lehibe noho ny aotra.',
    'is_not_unique' => 'Ny {field} dia tsy maintsy izay efa nisy taloha tao amin\'ny database.',
    'is_unique' => 'Efa nisy nampiasa teo aloha ka tsy mety ampiasaina intsony ny {field}.',
    'less_than' => 'Tsy maintsy tarehimarika kely noho ny {param} no azo apetraka eo amin\'ny {field}.',
    'less_than_equal_to' => 'Tsy maintsy tarehimarika kely na mitovy amin\'ny {param} no azo apetraka eo amin\'ny {field}.',
    'matches' => 'Tsy maintsy mitovy amin\'ny {param} ny {field}.',
    'max_length' => 'Tsy mahazo mihoatra ny {param} litera ny halavan\'ny {field}.',
    'min_length' => 'Tsy maintsy mihoatra ny {param} litera n y halavan\'ny {field}.',
    'not_equals' => 'Tsy azo atao {param} ny {field}.',
    'not_in_list' => 'Tsy azo atao iray amin\'ny {param} ny {field}.',
    'numeric' => 'Tarehi-marika ihany no tsy maintsy hita ao amin\'ny {field}.',
    'regex_match' => 'Tsy ara-dalàna ny endriky ny {field}.',
    'required' => 'Tsy maintsy fenoina ny {field}.',
    'required_with' => 'Tsy maintsy fenoina ny {field} rehefa apetraka ny {param}.',
    'required_without' => 'Tsy maintsy fenoina ny {field} rehefa tsy apetraka ny {param}.',
    'string' => 'Tsy maintsy teny manara-dalàna no apetraka eo amin\'ny {field}.',
    'timezone' => 'Tsy maintsy faritr\'ora (timezone) no apetraka eo amin\'ny {field}.',
    'valid_base64' => 'Tsy maintsy teny base64 no apetraka eo amin\'ny {field}.',
    'valid_email' => 'Tsy maintsy adiresy mailaka no apetraka eo amin\'ny {field}.',
    'valid_emails' => 'Tsy maintsy adiresy mailaka rehetra no apetraka eo amin\'ny {field}.',
    'valid_ip' => 'Tsy maintsy adiresy IP mandeha no azo apetraka eo amin\'ny {field}.',
    'valid_url' => 'Tsy maintsy adiresy URL mandeha no azo apetraka eo amin\'ny {field}.',
    'valid_url_strict' => 'Tsy maintsy adiresy URL no apetraka eo amin\'ny {field}.',
    'valid_date' => 'Tsy maintsy daty no apetraka eo amin\'ny {field}.',

    // Credit Cards
    'valid_cc_num' => 'Jereo fa toa tsy laharana carte de crédit no napetrakao eo amin\'ny {field}.',

    // Files
    'uploaded' => 'Tsy fichier ara-dalàna no napetrakao eo amin\'ny {field}.',
    'max_size' => 'Lehibe loatra ny fichier {field}.',
    'is_image' => 'Tsy fichier sary ara-dalàna no napetrakao eo amin\'ny {field}.',
    'mime_in' => 'Tsy manana mime type ara-dalàna ny {field}.',
    'ext_in' => 'Tsy ara-dalàna ny extension-n\'ny fichier eo amin\'ny {field}.',
    'max_dims' => 'Jereo fa na tsy sary ny {field} na ngeza loatra na lava loatra.',
];