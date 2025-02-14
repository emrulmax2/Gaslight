<?php

namespace App\Http\Controllers;

use App\Fakers\Achievements;
use App\Fakers\Cafe;
use App\Fakers\Categories;
use App\Fakers\Countries;
use App\Fakers\Ecommerce;
use App\Fakers\Events;
use App\Fakers\Files;
use App\Fakers\Hotel;
use App\Fakers\Languages;
use App\Fakers\Mails;
use App\Fakers\Messages;
use App\Fakers\Posts;
use App\Fakers\ProjectDetails;
use App\Fakers\Projects;
use App\Fakers\RecentDevices;
use App\Fakers\Reviews;
use App\Fakers\Timezones;
use App\Fakers\TransactionStatus;
use App\Fakers\Transactions;

use Illuminate\View\View;

class PageController extends Controller
{
    public function dashboardOverview1(): View
    {
        return view('pages/dashboard-overview-1', [
            'ecommerce' => Ecommerce::fakePerformanceInsights(),
            'transactions' => Transactions::fakeTransactions(),
        ]);
    }

    public function dashboardOverview2(): View
    {
        return view('pages/dashboard-overview-2', [
            'projects' => Projects::fakeProjects(),
            'projectDetails' => ProjectDetails::fakeProjectDetails(),
        ]);
    }

    public function dashboardOverview3(): View
    {
        return view('pages/dashboard-overview-3');
    }

    public function dashboardOverview4(): View
    {
        return view('pages/dashboard-overview-4', [
            'countries' => Countries::fakeCountries()
        ]);
    }

    public function dashboardOverview5(): View
    {
        return view('pages/dashboard-overview-5');
    }

    public function dashboardOverview6(): View
    {
        return view('pages/dashboard-overview-6', [
            'cafe' => Cafe::fakeCafe()
        ]);
    }

    public function dashboardOverview7(): View
    {
        return view('pages/dashboard-overview-7');
    }

    public function dashboardOverview8(): View
    {
        return view('pages/dashboard-overview-8', [
            'hotel' => [
                'activityStream' => Hotel::fakeActivityStream(),
                'performanceInsight' => Hotel::fakePerformanceInsight()
            ]
        ]);
    }

    public function users(): View
    {
        return view('pages/users');
    }

    public function departments(): View
    {
        return view('pages/departments');
    }

    public function addUser(): View
    {
        return view('pages/add-user');
    }

    public function profileOverview(): View
    {
        return view('pages/profile-overview', [
            'messages' => Messages::fakeMessages(),
            'events' => Events::fakeEvents(),
            'projectDetails' => ProjectDetails::fakeProjectDetails(),
            'achievements' => Achievements::fakeAchievements(),
        ]);
    }

    public function settings(): View
    {
        return view('pages/settings', [
            'countries' => Countries::fakeCountries(),
            'languages' => Languages::fakeLanguages(),
            'timezones' => Timezones::fakeTimezones(),
            'recentDevices' => RecentDevices::fakeRecentDevices()
        ]);
    }

    public function billing(): View
    {
        return view('pages/billing', [
            'transactions' => Transactions::fakeTransactions()
        ]);
    }

    public function invoice(): View
    {
        return view('pages/invoice', [
            'transactions' => Transactions::fakeTransactions()
        ]);
    }

    public function categories(): View
    {
        return view('pages/categories', [
            'categories' => Categories::fakeCategories()
        ]);
    }

    public function addProduct(): View
    {
        return view('pages/add-product', [
            'categories' => Categories::fakeCategories()
        ]);
    }

    public function productList(): View
    {
        return view('pages/product-list');
    }

    public function productGrid(): View
    {
        return view('pages/product-grid', [
            'reviews' => Reviews::fakeReviews()
        ]);
    }

    public function transactionList(): View
    {
        return view('pages/transaction-list', [
            'transactionStatus' => TransactionStatus::fakeTransactionStatus(),
            'transactions' => Transactions::fakeTransactions()
        ]);
    }

    public function transactionDetail(): View
    {
        return view('pages/transaction-detail', [
            'transactions' => Transactions::fakeTransactions()
        ]);
    }

    public function sellerList(): View
    {
        return view('pages/seller-list');
    }

    public function sellerDetail(): View
    {
        return view('pages/seller-detail', [
            'transactions' => Transactions::fakeTransactions()
        ]);
    }

    public function reviews(): View
    {
        return view('pages/reviews', [
            'reviews' => Reviews::fakeReviews()
        ]);
    }

    public function inbox(): View
    {
        return view('pages/inbox', [
            'mails' => Mails::fakeMails()
        ]);
    }

    public function fileManagerList(): View
    {
        return view('pages/file-manager-list', [
            'files' => Files::fakeFiles()
        ]);
    }

    public function fileManagerGrid(): View
    {
        return view('pages/file-manager-grid', [
            'files' => Files::fakeFiles()
        ]);
    }

    public function chat(): View
    {
        return view('pages/chat', [
            'messages' => Messages::fakeMessages(),
            'projectDetails' => ProjectDetails::fakeProjectDetails()
        ]);
    }

    public function calendar(): View
    {
        return view('pages/calendar', [
            'events' => Events::fakeEvents()
        ]);
    }

    public function pointOfSale(): View
    {
        return view('pages/point-of-sale', [
            'categories' => Countries::fakeCountries()
        ]);
    }

    public function creative(): View
    {
        return view('pages/creative', [
            'events' => Events::fakeEvents(),
            'posts' => Posts::fakePosts(),
            'categories' => Categories::fakeCategories(),
        ]);
    }

    public function dynamic(): View
    {
        return view('pages/dynamic', [
            'events' => Events::fakeEvents(),
            'messages' => Messages::fakeMessages(),
            'categories' => Categories::fakeCategories(),
            'projectDetails' => ProjectDetails::fakeProjectDetails(),
        ]);
    }

    public function interactive(): View
    {
        return view('pages/interactive', [
            'projects' => Projects::fakeProjects(),
            'projectDetails' => ProjectDetails::fakeProjectDetails(),
            'categories' => Categories::fakeCategories(),
            'events' => Events::fakeEvents(),
        ]);
    }

    public function regularTable(): View
    {
        return view('pages/regular-table');
    }

    public function tabulator(): View
    {
        return view('pages/tabulator');
    }

    public function modal(): View
    {
        return view('pages/modal');
    }

    public function slideover(): View
    {
        return view('pages/slideover');
    }

    public function notification(): View
    {
        return view('pages/notification');
    }

    public function tab(): View
    {
        return view('pages/tab');
    }

    public function accordion(): View
    {
        return view('pages/accordion');
    }

    public function button(): View
    {
        return view('pages/button');
    }

    public function alert(): View
    {
        return view('pages/alert');
    }

    public function progressBar(): View
    {
        return view('pages/progress-bar');
    }

    public function tooltip(): View
    {
        return view('pages/tooltip');
    }

    public function dropdown(): View
    {
        return view('pages/dropdown');
    }

    public function typography(): View
    {
        return view('pages/typography');
    }

    public function icon(): View
    {
        return view('pages/icon');
    }

    public function loadingIcon(): View
    {
        return view('pages/loading-icon');
    }

    public function regularForm(): View
    {
        return view('pages/regular-form');
    }

    public function datepicker(): View
    {
        return view('pages/datepicker');
    }

    public function tomSelect(): View
    {
        return view('pages/tom-select');
    }

    public function fileUpload(): View
    {
        return view('pages/file-upload');
    }

    public function wysiwygEditor(): View
    {
        return view('pages/wysiwyg-editor');
    }

    public function validation(): View
    {
        return view('pages/validation');
    }

    public function chart(): View
    {
        return view('pages/chart');
    }

    public function slider(): View
    {
        return view('pages/slider');
    }

    public function imageZoom(): View
    {
        return view('pages/image-zoom');
    }

    public function login(): View
    {
        return view('pages/login');
    }

    public function register(): View
    {
        return view('pages/register');
    }

    public function landingPage(): View
    {
        $groups = [
            [
                'group' => "Dashboards",
                'icon' => "GaugeCircle",
                'pages' => [
                    [
                        'name' => "E-Commerce",
                        'pathname' => "dashboard-overview-1",
                        'image' => "dashboard-overview-1",
                    ],
                    [
                        'name' => "CRM",
                        'pathname' => "dashboard-overview-2",
                        'image' => "dashboard-overview-2",
                    ],
                    [
                        'name' => "Hospital",
                        'pathname' => "dashboard-overview-3",
                        'image' => "dashboard-overview-3",
                    ],
                    [
                        'name' => "Factory",
                        'pathname' => "dashboard-overview-4",
                        'image' => "dashboard-overview-4",
                    ],
                    [
                        'name' => "Banking",
                        'pathname' => "dashboard-overview-5",
                        'image' => "dashboard-overview-5",
                    ],
                    [
                        'name' => "Cafe",
                        'pathname' => "dashboard-overview-6",
                        'image' => "dashboard-overview-6",
                    ],
                    [
                        'name' => "Crypto",
                        'pathname' => "dashboard-overview-7",
                        'image' => "dashboard-overview-7",
                    ],
                    [
                        'name' => "Hotel",
                        'pathname' => "dashboard-overview-8",
                        'image' => "dashboard-overview-8",
                    ],
                ],
            ],
            [
                'group' => "Apps",
                'icon' => "ActivitySquare",
                'pages' => [
                    [
                        'name' => "Inbox",
                        'pathname' => "inbox",
                        'image' => "inbox",
                    ],
                    [
                        'name' => "File Manager List",
                        'pathname' => "file-manager-list",
                        'image' => "file-manager-list",
                    ],
                    [
                        'name' => "File Manager Grid",
                        'pathname' => "file-manager-grid",
                        'image' => "file-manager-grid",
                    ],
                ],
            ],
            [
                'group' => "UI Widgets",
                'icon' => "Album",
                'pages' => [
                    [
                        'name' => "Creative",
                        'pathname' => "creative",
                        'image' => "creative",
                    ],
                    [
                        'name' => "Dynamic",
                        'pathname' => "dynamic",
                        'image' => "dynamic",
                    ],
                    [
                        'name' => "Interactive",
                        'pathname' => "interactive",
                        'image' => "interactive",
                    ],
                ],
            ],
            [
                'group' => "User Management",
                'icon' => "BookMarked",
                'pages' => [
                    [
                        'name' => "Users",
                        'pathname' => "users",
                        'image' => "users",
                    ],
                    [
                        'name' => "Departments",
                        'pathname' => "departments",
                        'image' => "departments",
                    ],
                    [
                        'name' => "Add User",
                        'pathname' => "add-user",
                        'image' => "add-user",
                    ],
                ],
            ],
            [
                'group' => "Personal Dashboard",
                'icon' => "HardDrive",
                'pages' => [
                    [
                        'name' => "Profile Overview",
                        'pathname' => "profile-overview",
                        'image' => "profile-overview",
                    ],
                    [
                        'name' => "Events",
                        'pathname' => "profile-overview-events",
                        'image' => "profile-overview-events",
                    ],
                    [
                        'name' => "Achievements",
                        'pathname' => "profile-overview-achievements",
                        'image' => "profile-overview-achievements",
                    ],
                    [
                        'name' => "Contacts",
                        'pathname' => "profile-overview-contacts",
                        'image' => "profile-overview-contacts",
                    ],
                    [
                        'name' => "Default",
                        'pathname' => "profile-overview-default",
                        'image' => "profile-overview-default",
                    ],
                ],
            ],
            [
                'group' => "General Settings",
                'icon' => "MousePointerSquare",
                'pages' => [
                    [
                        'name' => "Profile Info",
                        'pathname' => "settings",
                        'image' => "settings",
                    ],
                    [
                        'name' => "Email Settings",
                        'pathname' => "settings-email-settings",
                        'image' => "settings-email-settings",
                    ],
                    [
                        'name' => "Security",
                        'pathname' => "settings-security",
                        'image' => "settings-security",
                    ],
                    [
                        'name' => "Preferences",
                        'pathname' => "settings-preferences",
                        'image' => "settings-preferences",
                    ],
                    [
                        'name' => "Two-factor Authentication",
                        'pathname' => "settings-two-factor-authentication",
                        'image' => "settings-two-factor-authentication",
                    ],
                    [
                        'name' => "Device History",
                        'pathname' => "settings-device-history",
                        'image' => "settings-device-history",
                    ],
                    [
                        'name' => "Notification Settings",
                        'pathname' => "settings-notification-settings",
                        'image' => "settings-notification-settings",
                    ],
                    [
                        'name' => "Connected Services",
                        'pathname' => "settings-connected-services",
                        'image' => "settings-connected-services",
                    ],
                    [
                        'name' => "Social Media Links",
                        'pathname' => "settings-social-media-links",
                        'image' => "settings-social-media-links",
                    ],
                    [
                        'name' => "Account Deactivation",
                        'pathname' => "settings-account-deactivation",
                        'image' => "settings-account-deactivation",
                    ],
                ],
            ],
            [
                'group' => "Account",
                'icon' => "ShieldHalf",
                'pages' => [
                    [
                        'name' => "Billing",
                        'pathname' => "billing",
                        'image' => "billing",
                    ],
                    [
                        'name' => "Invoice",
                        'pathname' => "invoice",
                        'image' => "invoice",
                    ],
                ],
            ],
            [
                'group' => "E-Commerce",
                'icon' => "Building",
                'pages' => [
                    [
                        'name' => "Categories",
                        'pathname' => "categories",
                        'image' => "categories",
                    ],
                    [
                        'name' => "Add Product",
                        'pathname' => "add-product",
                        'image' => "add-product",
                    ],
                    [
                        'name' => "Product List",
                        'pathname' => "product-list",
                        'image' => "product-list",
                    ],
                    [
                        'name' => "Product Grid",
                        'pathname' => "product-grid",
                        'image' => "product-grid",
                    ],
                    [
                        'name' => "Transaction List",
                        'pathname' => "transaction-list",
                        'image' => "transaction-list",
                    ],
                    [
                        'name' => "Transaction Detail",
                        'pathname' => "transaction-detail",
                        'image' => "transaction-detail",
                    ],
                    [
                        'name' => "Seller List",
                        'pathname' => "seller-list",
                        'image' => "seller-list",
                    ],
                    [
                        'name' => "Seller Detail",
                        'pathname' => "seller-detail",
                        'image' => "seller-detail",
                    ],
                    [
                        'name' => "Reviews",
                        'pathname' => "reviews",
                        'image' => "reviews",
                    ],
                    [
                        'name' => "Point of Sale",
                        'pathname' => "point-of-sale",
                        'image' => "point-of-sale",
                    ],
                ],
            ],
            [
                'group' => "Authentications",
                'icon' => "PanelRightInactive",
                'pages' => [
                    [
                        'name' => "Login",
                        'pathname' => "login",
                        'image' => "login",
                    ],
                    [
                        'name' => "Register",
                        'pathname' => "register",
                        'image' => "register",
                    ],
                ],
            ],
        ];

        return view('pages/landing-page', [
            'groups' => $groups,
            'messages' => Messages::fakeMessages(),
        ]);
    }
}
