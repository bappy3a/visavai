<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title' => 'Visavai - Visa Verification, Air Ticket & Offer Letter Check | Document Verification Service',
            'titleBefore' => false,
            'description' => 'Professional visa verification, air ticket verification, and job offer letter verification services. Verify all your visa-related documents with Visavai. Get authentic reports within 24 hours. Trusted by thousands for secure document verification.',
            'separator' => ' - ',
            'keywords' => ['visa verification', 'air ticket verification', 'job offer letter verification', 'document verification service', 'visa check', 'visa authenticity check'],
            'canonical' => 'current',
            'robots' => 'all',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
            'norton' => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => 'Visavai - Visa Verification, Air Ticket & Offer Letter Check',
            'description' => 'Professional visa verification, air ticket verification, and job offer letter verification services.',
            'url' => null,
            'type' => 'website',
            'site_name' => 'Visavai',
            'images' => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            // 'card'        => 'summary',
            // 'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title' => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url' => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type' => 'WebPage',
            'images' => [],
        ],
    ],
];
