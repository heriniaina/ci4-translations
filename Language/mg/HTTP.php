<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl' => 'Mila manana CURL vao afaka mampiasa ny kilasy CURLRequest.',
    'invalidSSLKey' => 'Tsy afaka mametraka ny fanalahidy SSL. Tsy fichier manara-dalàna ny {0}.',
    'sslCertNotFound' => 'Tsy hita ao amin\'ny {0} ny fanamarinana ny SSL',
    'curlError' => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => 'Tsy karazana fifanarahana manara-dalàna ny {0}. Mila ny iray amin\ireto: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Tsy ara-dalàna ny version HTTP Protocole. Mila ny iray amin\ireto: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Ny valiny andrasana dia array avy amin\'ireo négotiations rehetra ilaina.',

    // RedirectResponse
    'invalidRoute' => 'Tsy hita ny route "{0}".',

    // DownloadResponse
    'cannotSetBinary' => 'When setting filepath cannot set binary.',
    'cannotSetFilepath' => 'When setting binary cannot set filepath: {0}',
    'notFoundDownloadSource' => 'Tsy hita ny vatan\ny fichier download fiaingana.',
    'cannotSetCache' => 'Tsy afaka mampiasa cache rehefa mampiasa download.',
    'cannotSetStatusCode' => 'Tsy afaka manova status code rehefa mampiasa doanload. code: {0}, antony: {1}',

    // Response
    'missingResponseStatus' => 'Tsy misy valiny HTTP ao amin\'ny status code',
    'invalidStatusCode' => '{0} dia tsy status code ara-dalana amin\'ny HTTP',
    'unknownStatusCode' => 'HTTP status code tsy fantatra miaraka amin\'ny valiny: {0}',

    // URI
    'cannotParseURI' => 'Tsy afaka mamaka URI: {0}',
    'segmentOutOfRange' => 'Tsy ao anatin\'ny lisitra ny segment-n\'ny Request URI: {0}',
    'invalidPort' => 'Tsy maintsy eo anelanelan\'ny 0 sy 65535 ny ports. Ny hita: {0}',
    'malformedQueryString' => 'Tsy tokony hisy singana URI ao anatin\'ny Query strings.',

    // Page Not Found
    'pageNotFound' => 'Tsy hita ny takelaka',
    'emptyController' => 'Tsy nisy Controller nofinidy.',
    'controllerNotFound' => 'Tsy hita ny Controller na method niaraka taminy: {0}::{1}',
    'methodNotFound' => 'Tsy hita ny methode amin\'ny Controller: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Tsy azo ekena ny asa notakianao.',

    // Uploaded file moving
    'alreadyMoved' => 'Efa nifindra ny fichier nampidirinao.',
    'invalidFile' => 'Tsy fichier ara-dalàna ny nampidirinao.',
    'moveFailed' => 'Tsy voafindra avy ao amin\'ny {0} mankao amin\'ny {1} ny fichier ({2})',

    'uploadErrOk' => 'Tafiditra soa amantsara ny fichier.',
    'uploadErrIniSize' => 'Ny fichier "%s" nampidirinao dia mihoatra ny habe voafaritra ao amin\'ny  upload_max_filesize ao amin\'ny fichier ini.',
    'uploadErrFormSize' => 'Ny fichier "%s" nampidirinao dia mihoatra ny habe voafaritra ao amin\'ny fampidirana.',
    'uploadErrPartial' => 'Ampahany amin\'ny fichier "%s" fotsiny no tafiditra.',
    'uploadErrNoFile' => 'Tsy nisy fichier tafiditra mihitsy.',
    'uploadErrCantWrite' => 'Tsy afaka nosoratana tao amin\'ny diska fitehirizana ny fichier "%s".',
    'uploadErrNoTmpDir' => 'Tsy tafiditra ny fichier : tsy misy répertoire temporaire.',
    'uploadErrExtension' => 'Nosakanana extension PHP iray ny fampidirana ny fichier.',
    'uploadErrUnknown' => 'Tsy tafiditra ny fichier "%s" noho ny hadisoana izay tsy fantatra.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Mila iray amin\'ireto ny safidy SameSite: None, Lax, Strict, na elanelana fotsiny. Ny hita: {0}',
];