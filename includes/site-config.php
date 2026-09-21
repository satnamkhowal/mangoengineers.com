<?php
declare(strict_types=1);

const MANGO_SITE_NAME = 'Mango Engineers';
const MANGO_SITE_URL = 'https://mangoengineers.com';
const MANGO_PHONE_DISPLAY = '+91 9649695189';
const MANGO_PHONE_HREF = '+919649695189';
const MANGO_CONTACT_EMAIL = 'info@mangoengineers.com';

function mango_site(): array
{
    return [
        'name' => MANGO_SITE_NAME,
        'url' => MANGO_SITE_URL,
        'phone_display' => MANGO_PHONE_DISPLAY,
        'phone_href' => MANGO_PHONE_HREF,
        'email' => MANGO_CONTACT_EMAIL,
        'social' => [
            'linkedin' => 'https://www.linkedin.com/company/MangoEngineers/',
            'facebook' => 'https://www.facebook.com/MangoEngineers/',
            'instagram' => 'https://www.instagram.com/MangoEngineers',
            'youtube' => 'https://www.youtube.com/@MangoEngineers/',
            'pinterest' => 'https://in.pinterest.com/mangoengineers/',
            'x' => 'https://x.com/MangoEngineers',
        ],
        'branches' => [
            [
                'name' => 'Mango Engineers - Tonk Phatak',
                'street' => '17, Manav Ashram Colony, Vasundhara Colony, Tonk Phatak',
                'postal_code' => '302018',
                'full_address' => '17, Manav Ashram Colony, Vasundhara Colony, Tonk Phatak, Jaipur, Jaipur Nagar Nigam Area, Rajasthan 302018',
                'map' => 'https://maps.app.goo.gl/AMShHkXtQjArXSBv7',
            ],
            [
                'name' => 'Mango Engineers - Shri Kishanpura',
                'street' => 'LGF-07, R-tech Capital Hi Street Mall, Shri Kishanpura',
                'postal_code' => '302017',
                'full_address' => 'LGF-07, R-tech Capital Hi Street Mall, Shri Kishanpura, Jaipur, Rajasthan 302017',
                'map' => 'https://maps.app.goo.gl/bgBMwYurGWbjV8xr9',
            ],
        ],
    ];
}

function mango_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
