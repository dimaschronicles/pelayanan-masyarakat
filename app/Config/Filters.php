<?php

namespace Config;

use App\Filters\AuthFilter;
use App\Filters\ResetFilter;
use App\Filters\SuratFilter;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'isLoggedIn' => AuthFilter::class,
        'isAdmin' => SuratFilter::class,
        'isNik' => ResetFilter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        'isLoggedIn' => [
            'before' => [
                'dashboard',
                'dashboard/*',
                'profil',
                'profil/*',
                'changepassword',
                'changepassword/*',
                'user',
                'user/*',
                'surat',
                'surat/*',
                'ktp',
                'ktp/*',
                'kk',
                'kk/*',
                'sktm',
                'sktm/*',
                'pengantarnikah',
                'pengantarnikah/*',
                'pengantarpindah',
                'pengantarpindah/*',
                'kelahiran',
                'kelahiran/*',
                'kematian',
                'kematian/*',
                'keterangan',
                'keterangan/*',
                'waris',
                'waris/*',
                'surat_ktp',
                'surat_ktp/*',
                'surat_kk',
                'surat_kk/*',
                'surat_sktm',
                'surat_sktm/*',
                'surat_pindah',
                'surat_pindah/*',
                'surat_nikah',
                'surat_nikah/*',
                'surat_kelahiran',
                'surat_kelahiran/*',
                'surat_kematian',
                'surat_kematian/*',
                'surat_keterangan',
                'surat_keterangan/*',
                'surat_waris',
                'surat_waris/*',
            ]
        ],
        // 'isAdmin' => [
        //     'after' => [
        //         'surat',
        //         'surat/*',
        //     ]
        // ]
    ];
}
