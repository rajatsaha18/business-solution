<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\GalleryController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Admin\AboutAdminController;
use App\Http\Controllers\Admin\GalleryAdminController;
use App\Http\Controllers\Hospital\HospitalFrontendController;
use App\Http\Controllers\Hospital\HospitalFrontendShopController;
use App\Http\Controllers\Hospital\HospitalFrontendContactController;
use App\Http\Controllers\Hospital\HospitalFrontendBlogController;
use App\Http\Controllers\Home\SiteSettingController;
use App\Http\Controllers\Hospital\HospitalTagController;

Route::get('/sitemap.xml', 'SitemapController@index');



Route::get('/clear_cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::group(['namespace' => 'App\Http\Controllers\Shop'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', 'HomeController@business_contact')->name('business-contact');
});
Route::group(['namespace' => 'App\Http\Controllers\Shop', 'prefix' => 'business-insight-solution'], function () {
    //login
    Route::get('/info/user/login', 'HomeController@login')->name('info-login');
    Route::post('/info/user/login-save', 'HomeController@info_user_login')->name('info-user-login');

    Route::get('/', 'HomeController@home')->name('info');



    Route::get('refresh-captcha', 'CaptchaController@refresh_captcha')->name('refresh');
    Route::get('shop/alphabetic-subcategory/{a}', 'HomeController@alpha_category')->name('alphabetic-subcategory');
    Route::get('/subcategory/{slug}', 'HomeController@shop_sub_category')->name('info-sc');
    Route::get('/product', 'HomeController@product')->name('info-product');
    Route::get('/category/{slug}', 'HomeController@category_all')->name('info-category-all');
    Route::get('/sub-category/{slug}', 'HomeController@sub_category')->name('info-sub-category');
    Route::get('/search', 'HomeController@info_search')->name('info-search');
    Route::get('/contact', 'HomeController@contact')->name('info-contact');

    // Route::post('/contact-add', 'HomeController@contactAdd')->name('contact.add');
    Route::post('newsellter/store/submit', 'HomeController@newsletterStore')->name('newsletter.store.submit');


    Route::get('/advance-search', 'HomeController@advance_search')->name('advance-search');
    Route::get('/get-advance-search-result', 'HomeController@get_advance_search_result')->name('advance.search.result');
    Route::get('/find-state', 'HomeController@find_state')->name('find.state');
    //finding ajax call
    Route::get('/find-city', 'HomeController@find_city')->name('find.city');
    Route::get('/find-district', 'HomeController@find_district')->name('find.district');
    Route::get('/find-buysell-category', 'HomeController@findBuySellCategory')->name('find.buysell.category');

    Route::get('/advance-search-result', 'HomeController@advance_search_result')->name('advance.search.result');
    //find payment method
    Route::get('get-payment-method', 'HomeController@paymentMethod')->name('payment.method');

    //Advertise Package
    Route::get('/packages', 'HomeController@showPackage')->name('show.package');
    Route::get('/package/order/{id}', 'HomeController@packageOrder')->name('package.order');
    Route::post('/package/order', 'HomeController@packageOrderSubmit')->name('package.order.submit');


    //add post
    Route::get('/add-buysell-post', 'HomeController@addBuySellPost')->name('add.buysell.post');
    //show buysell post buy category

    //product search
    Route::get('/product-search', 'HomeController@productSearch')->name('product.search');




    //all country
    Route::get('/all-countries', 'HomeController@allCountries')->name('all.countries');
    //all companines
    Route::get('/all-companies', 'HomeController@allCompanies')->name('all.companies');
    //blogs
    Route::get('/blogs', 'HomeController@blogs')->name('all.blogs');
    //blogs search
    Route::get('/search-country-blog', 'HomeController@searchBlog')->name('search.country.blog');
    //Country Product
    Route::get('/country-post/{name}', 'HomeController@getCountryProduct')->name('get.country.product');
    //country blog
    Route::get('/country-blog/{name}', 'HomeController@getCountryBlog')->name('get.country.blog');
    Route::get('/blog/{slug}', 'HomeController@singleBlog')->name('single.country.blog');
    //product by company
    Route::get('/product-by-company', 'HomeController@productByCompany')->name('product.by.company');
    Route::get('/product-by-company/{name}', 'HomeController@singleCompany')->name('single.company');
    //company
    Route::get('company/{slug}', 'HomeController@companyShow')->name('company.show');
    Route::get('company-details/{slug}', 'HomeController@companyDetial')->name('company.detail');


    Route::get('/product/{slug}', 'HomeController@sub_category_product')->name('info-sub-cat-product');
    Route::get('/product-details/{slug}', 'HomeController@product_details')->name('info-product-details');
    Route::get('/products/{id}', 'HomeController@visitStore')->name('visit.store');
    Route::get('/info-category/{slug}', 'HomeController@category')->name('info-category');
    Route::get('/add-your-company', 'AddCompanyController@index')->name('add-your-company');
    Route::get('/admin/add-your-company-request', 'AddCompanyController@adminIndex')->name('add-your-company-request');
    Route::get('/admin/add-your-company-update/{id}', 'AddCompanyController@adminUpdateCompany')->name('admin.update.company');
    Route::post('/admin/add-your-company-store', 'AddCompanyController@adminStoreCompanyToPost')->name('admin.store.company.to.post');
    //new route
    Route::get('product-category/{slug}', 'HomeController@showProductByCategory')->name('show.product.by.category');

    Route::post('/add-your-company-submit', 'AddCompanyController@store')->name('add-your-company.store');
    Route::get('/advertise-with-us', 'AddCompanyController@advertise_with_us')->name('advertise-with-us');
    Route::get('company-list/{a}', 'AddCompanyController@company_list')->name('company-list');
    Route::get('company-detail/{slug}', 'AddCompanyController@company')->name('company');


    Route::get('page-details/{slug}', 'HomeController@pageDetails')->name('page-details');

    //send email
    Route::get('/send-email/{id}', 'EmailController@index')->name('info-send-email');
    Route::post('/save-mail', 'EmailController@save_email')->name('info-save-mail');

    //buy-sell
    Route::get('/registration', 'HomeController@buySellRegister')->name('buy-sell-register')->middleware('buyselluser.redirect');
    Route::post('/registration', 'HomeController@registerStore')->name('register.store');

    route::get('buy-sell/user/login', 'HomeController@buySellLogin')->name('buy-sell.login')->middleware('buyselluser.redirect');
    route::post('buy-sell/user/login', 'HomeController@buySellLoginStore')->name('login.store');
    //show all add
    Route::get('ads', 'HomeController@allAds')->name('all.ads');
    Route::get('sort-by', 'HomeController@sortBy')->name('sort.by');

    //show buysell post by category
    Route::get('/buysell/category/{slug}', 'HomeController@buysellCategoryShowPost')->name('buysell.category.showpost');
    //show buysell post by subcategory
    Route::get('/buysell/subcategory/{slug}', 'HomeController@buysellSubCategoryShowPost')->name('buysell.subcategory.showpost');
    //get buysell product search
    Route::get('/buysell/search', 'HomeController@buysellItemSearch')->name('buysell.item.search');
    //single ad show in details
    Route::get('/buysell/ad/{slug}', 'HomeController@singleAdDetail')->name('single.ad.detail');
    //founder stories
    Route::get('founder-stories', 'HomeController@founderStories')->name('founder.stories');
    //single founder story
    Route::get('founder-story/{slug}', 'HomeController@founderSingleStory')->name('founder.single.story');
    //founder stories interview
    Route::get('founder-startup-interview', 'HomeController@founderStartupIn')->name('founder.startup.interview');
    //single founder stories interview
    Route::get('founder-startup-interview/{slug}', 'HomeController@founderStartupSingleInterview')->name('founder.startup.single.interview');
    //startups story
    Route::get('business-stories', 'HomeController@businessStory')->name('business.story');
    //startups single
    Route::get('business-single-story/{slug}', 'HomeController@businessSingleStory')->name('business.single.story');
    //founder storeis search
    Route::get('founder-stories-search', 'HomeController@FounderStoriesSearch')->name('founder.stories.search');
    //fs interview search
    Route::get('fs-interview-search', 'HomeController@FsInterviewSearch')->name('fs.interview.search');
    //business stories search
    Route::get('business-story-search', 'HomeController@BusinessStorySearch')->name('business.story.search');
});


Route::group(['namespace' => 'App\Http\Controllers\Shop', 'prefix' => 'halal-investment-solution'], function () {
    //halal investment index
    Route::get('/', 'HomeHalalInvestmentController@index')->name('halal.investment.index');
    //halal investment shariah
    Route::get('halal-investment/shariah', 'HomeHalalInvestmentController@shariah')->name('halal.investment.shariah');
    //halal investment who we are
    Route::get('halal-investment/who-are-we', 'HomeHalalInvestmentController@whoAreWe')->name('halal.investment.who.are.we');
    // halal investment contact
    Route::get('halal-investment/contact', 'HomeHalalInvestmentController@contact')->name('halal.investment.contact');
    //halal investment blog
    Route::get('halal-investment/blog', 'HomeHalalInvestmentController@blog')->name('halal.investment.blog');
    Route::get('halal-investment/blog-search', 'HomeHalalInvestmentController@blogSearch')->name('halal.blog.search');
    //halal investment blog details
    Route::get('halal-investment/blog/{slug}', 'HomeHalalInvestmentController@blogDetail')->name('halal.investment.blog.detail');
    //halal investment login for investment seeker
    Route::get('halal-investment/login/investment-seeker', 'HomeHalalInvestmentController@loginForInvestmentSeeker')->name('login.for.investment.seeker')->middleware('investmentseeker.redirect');
    //halal investment login submit for investment seeker
    Route::post('halal-investment/login/investment-seeker/submit', 'HomeHalalInvestmentController@loginForInvestmentSeekerSubmit')->name('login.for.investment.seeker.submit');

    //halal investment register for investment seeker
    Route::get('halal-investment/register/investment-seeker', 'HomeHalalInvestmentController@registerForInvestmentSeeker')->name('register.for.investment.seeker')->middleware('investmentseeker.redirect');
    //halal investment registration submit for investment seeker
    Route::post('halal-investment/register/investment-seeker/submit', 'HomeHalalInvestmentController@registerForInvestmentSeekerSubmit')->name('register.for.investment.seeker.submit');

    //halal investmenhalal-investmentt login for investor
    Route::get('halal-investment/login/investor', 'HomeHalalInvestmentController@loginForInvestor')->name('login.for.investor')->middleware('investor.redirect');
    //halal investmenhalal-investmentt login for investor from investestment form
    Route::get('halal-investment/login/form/investor', 'HomeHalalInvestmentController@loginFormForInvestor')->name('login.form.for.investor')->middleware('investor.redirect');
    //halal investment login submit for investor
    Route::post('halal-investment/login/investor/submit', 'HomeHalalInvestmentController@loginForInvestorSubmit')->name('login.for.investor.submit');
    //halal investment login submit for investor from investestment form
    Route::post('halal-investment/login/form/investor/submit', 'HomeHalalInvestmentController@loginFormForInvestorSubmit')->name('login.form.for.investor.submit');
    //halal investment register for investor
    Route::get('halal-investment/register/investor', 'HomeHalalInvestmentController@registerForInvestor')->name('register.for.investor')->middleware('investor.redirect');
    //halal investment register submit for investor
    Route::post('halal-investment/register/investor/submit', 'HomeHalalInvestmentController@registerForInvestorSubmit')->name('register.for.investor.submit');
    //halal investment find team
    Route::get('halalinvestment/team', 'HomeHalalInvestmentController@findTeam')->name('find.team');
    //user message
    Route::resource('halal-investment-user-message', 'HalalInvestmentUserMessageController');
    //investment company detail
    Route::get('halal-investment/company/{slug}', 'HomeHalalInvestmentController@investmentCompany')->name('halal.investment.investment.company');
    //terms of use halal investment
    Route::get('halal-investment/terms-of-use', 'HomeHalalInvestmentController@termsOfUse')->name('halal.investment.terms.of.use');
    //privacy halal investment
    Route::get('halal-investment/privacy-policy', 'HomeHalalInvestmentController@privacyPolicy')->name('halal.investment.privacy.policy');
    //halal investment investment options
    Route::get('halal-investment/invesment-options', 'HomeHalalInvestmentController@investmentOption')->name('halal.investment.option');
    // halal investment order
    Route::post('halal-investment-order', 'HomeHalalInvestmentController@halalInvestmentOrder')->name('halal.investment.order');
});
//halal investment investment seeker

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Auth::user()->role_id == 1) {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::user()->role_id == 3) {
        return redirect()->route('buyselluser.dashboard');
    } elseif (Auth::user()->role_id == 4) {
        return redirect()->route('investmentseeker.dashboard');
    } elseif (Auth::user()->role_id == 5) {
        return redirect()->route('investor.dashboard');
    }
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    if (Auth::user()->role_id == 2) {
        return redirect()->route('info-profile');
    }
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/buy-sell/user', function () {
//     if(Auth::user()->role_id == 3){
//         return redirect()->route('buy-sell.user.dashboard');
//     }
// });
Route::group(['as' => 'buyselluser.', 'prefix' => 'buyselluser', 'namespace' => 'App\Http\Controllers\Shop', 'middleware' => 'buyselluser'], function () {
    route::get('dashboard', 'HomeController@buySellUserDashboard')->name('dashboard');

    Route::get('/buysell/user/setting', 'HomeController@buysellUserSetting')->name('buysell.user.setting');
    Route::post('/buysell/user/update/{id}', 'HomeController@buysellUserUpdate')->name('buysell.user.update');
    Route::get('/buysell/post-ad', 'HomeController@buysellPostAd')->name('post.add');
    Route::get('/buysell/item/{id}', 'HomeController@buysellItem')->name('item');
    Route::post('/buysell/item/submit', 'HomeController@buysellItemSubmit')->name('item.submit');
    Route::get('/buysell/my-ads', 'HomeController@buysellUserMyAds')->name('user.myads');
    //edit post
    Route::get('/buysell/user/edit-ad/{slug}', 'HomeController@buysellUserAdEdit')->name('user.ad.edit');
    //update post
    Route::post('/buysell/user/update-ad/ad/{id}', 'HomeController@buysellUserAdUpdate')->name('user.ad.update');
    //delete ad confirm
    Route::get('/buysell/user/ad/delete/confirm/{slug}', 'HomeController@buysellUserAdConfirmDelete')->name('user.ad.confirm.delete');
    //delete ad
    Route::get('/buysell/user/ad/delete/{slug}', 'HomeController@buysellUserAdDelete')->name('user.ad.delete');

    //deletet image of ad
    Route::get('/buysell/user/ad-image/delete/{id}', 'HomeController@buysellUserAdImageDelete')->name('user.ad.iamge.delete');
    //payment page
    Route::get('/buysell/user/payment/{slug}', 'HomeController@buysellUserAdPayment')->name('user.ad.payment');
    //update ad payment page
    Route::get('/buysell/user/update/payment/{slug}', 'HomeController@buysellUserAdUpdatePayment')->name('user.ad.update.payment');
    //update ad payment page e
    Route::post('/buysell/user/update/payment/{id}', 'HomeController@buysellUserUpdateAdPayment')->name('user.ad.update.payment.id');

    //ad show type
    Route::get('/buysell/ad/show/type', 'HomeController@adShowType')->name('ad.show.type');
    //ad payment
    Route::post('/buysell/ad/payment/submit', 'HomeController@adPaymentSubmit')->name('ad.payment.submit');
});

//investment seeker
Route::group(['as' => 'investmentseeker.', 'prefix' => 'investmentseeker', 'namespace' => 'App\Http\Controllers\Shop', 'middleware' => 'halalinvestmentseeker'], function () {
    route::get('dashboard', 'HomeHalalInvestmentController@investmetnSeekerDashboard')->name('dashboard');
    route::get('business-seeker-investment', 'HomeHalalInvestmentController@businessSeekerInvestment')->name('business.seeker.investment');
    route::get('profile', 'HomeHalalInvestmentController@investmentSeekerProfile')->name('investment.seeker.profile');
    route::post('update-profile', 'HomeHalalInvestmentController@investmentUpdateProfile')->name('investment.update.profile');
    route::get('account-detail', 'HomeHalalInvestmentController@investmentSeekerAccountDetail')->name('investment.seeker.account.detail');
    route::get('receive-payment', 'HomeHalalInvestmentController@investmentSeekerReceivePaymentAll')->name('investment.seeker.receive.payment');
    route::post('account-detail-update', 'HomeHalalInvestmentController@investmentSeekerAccountDetailUpdate')->name('investment.seeker.account.detail.update');

    Route::post('investment-seeker-business-profile-store', 'HomeHalalInvestmentController@businessProfileSubmit')->name('investment.seeker.business-profile.store');
});

//investor
Route::group(['as' => 'investor.', 'prefix' => 'investor', 'namespace' => 'App\Http\Controllers\Shop', 'middleware' => 'halalinvestmentinvestor'], function () {
    route::get('dashboard', 'HomeHalalInvestmentController@investmentInvestorDashboard')->name('dashboard');
    route::get('profile', 'HomeHalalInvestmentController@investorProfile')->name('profile');
    route::post('update-profile', 'HomeHalalInvestmentController@investorUpdateProfile')->name('update.profile');
    route::get('account-detail', 'HomeHalalInvestmentController@investorAccountDetail')->name('account.detail');
    route::post('account-detail-update', 'HomeHalalInvestmentController@investorAccountDetailUpdate')->name('account.detail.update');
    route::get('investor-checkout', 'HomeHalalInvestmentController@investorCheckout')->name('checkout');
    Route::post('investor-order-submit', 'HomeHalalInvestmentController@investorOrderSubmit')->name('order.store');
    //investor orders
    Route::get('investor-orders', 'HomeHalalInvestmentController@investorOrders')->name('orders.investor');
    Route::get('investor-order/{id}', 'HomeHalalInvestmentController@investorOrder')->name('order.investor');
    Route::get('investor/order/edit/{id}', 'HomeHalalInvestmentController@investorOrderEdit')->name('order.edit');
    Route::post('investor/order/update/{id}', 'HomeHalalInvestmentController@investorOrderUpdate')->name('order.update');
    Route::get('investor/get/payment', 'HomeHalalInvestmentController@investorGetPayment')->name('get.payment');
});

Route::group(['as' => 'user.', 'namespace' => 'App\Http\Controllers\Shop', 'middleware' => ['auth', 'user']], function () {

    Route::get('/user/profile', 'HomeController@profile')->name('info-profile');
    Route::get('/user/edit-profile', 'HomeController@edit_profile')->name('info-edit-profile');
    Route::post('/user/update-profile', 'HomeController@update_profile')->name('info-update-profile');
    Route::get('/user/company-detail', 'HomeController@CompanyDetail')->name('company-detail');
    Route::post('/user/company-detail/submit/{id}', 'HomeController@CompanyDetailSubmit')->name('company-detail-submit');
    Route::get('/user/change-password', 'HomeController@change_password')->name('info-change-password');
    Route::post('/user/save-chnage-password', 'HomeController@save_chnage_password')->name('save-chnage-password');
    //product
    Route::resource('product-info', 'Product\ProductController');
    //user my package
    Route::get('/my-package', 'HomeController@myPackage')->name('my.package');
});


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //profile
    Route::get('profile', 'SettingController@profile')->name('profile');
    Route::post('slug/create', 'SlugController@create')->name('slug.create');
    Route::post('update-profile', 'SettingController@update_profile')->name('update-profile');
    //page
    Route::resource('page-categories', 'PageCategoryController');

    // BusinessServiceController
    Route::resource('business-service', 'BusinessServiceController');




    // 
    Route::resource('pages', 'PageController');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Shop', 'middleware' => ['auth', 'admin']], function () {

    //bdshop
    Route::resource('categories', 'CategoryController');
    Route::resource('brand', 'BrandController');
    Route::resource('product-type', 'ProductTypeController');
    Route::resource('sub-categories', 'SubCategoryController');
    Route::resource('shop-area', 'AreaController');
    //admin add company
    // Route::resource('admin-add-company','AdminAddCompanyController');
    //product
    //user Package expire
    Route::get('user-package-expire', 'UserPackageExpireController@UserPackageExpire')->name('user-package-expire');
    Route::get('buysell-post-expire', 'HomeController@buysellPostExpire')->name('buysell.post.expire');
    Route::post('buysell-ad-expire-delete', 'HomeController@buysellAdExpireDelete')->name('buysell.ad.expire.delete');
    Route::post('user-product-inactive', 'UserPackageExpireController@UserProductInactive')->name('user-product-inactive');
    Route::resource('product-categories', 'ProductCategoryController');
    Route::resource('product-subcategories', 'ProductSubCategoryController');
    Route::resource('product', 'ProductController');
    Route::post('get-product-sub-category', 'ProductController@get_sub_category')->name('product-get-sub-category');

    Route::get('division', 'AreaController@division')->name('shop-division');
    Route::get('district', 'AreaController@district')->name('shop-district');
    Route::get('settings', 'GeneralSettingController@index')->name('shop-setting');
    //shop setting
    // Route::get('shop-logo','ShopController@index')->name('shop-logo');
    Route::get('site-setting', 'ShopController@index')->name('site-setting.index');
    Route::post('setting-site', 'ShopController@siteSetting')->name('sitesettingupdate');
    Route::post('site-setting', 'ShopController@update')->name('site-setting.update');
    Route::post('social-link', 'ShopController@save_social')->name('social-link.update');
    Route::post('shop-logo', 'ShopController@store')->name('shop-store');
    Route::get('shop/customer-email', 'ShopController@customer_email')->name('shop.customer-email');
    Route::get('shop/social-link', 'ShopController@social_link')->name('shop-social-link');
    Route::post('shop/shop-save-social', 'ShopController@save_social')->name('shop-save-social');

    //payment method
    Route::resource('payment-method', 'PaymentMethodController');
    Route::get('newsletter', 'PaymentMethodController@newsletterCreate')->name('newsletter.create');
    Route::post('newsletter/store', 'PaymentMethodController@newsletterStore')->name('newsletter.store');

    //contact us
    Route::get('shop-contact-us', 'ContactUsController@index')->name('shop-contact-us');
    Route::post('shop-save-contact', 'ContactUsController@shop_save_contact')->name('shop-save-contact');


    //user
    Route::resource('user', 'UserController');
    //advertise rate
    Route::resource('shop-advertise', 'AdvertiseController');
    Route::resource('advertise-rate', 'RateController');
    Route::resource('advertise-post', 'AdvertisePostController');
    // Route::resource('advertise-placement','AdvertisePlacementController');
    Route::post('get-sub-category', 'AdvertisePostController@get_sub_category')->name('shop.advertise-get-sub-category');
    Route::resource('advertise-banner', 'AdvertiseBannerController');
    Route::get('advertise-request', 'AdvertiseController@advertise_request')->name('shop.advertise-request');
    Route::get('advertise-request/edit/{id}', 'AdvertiseController@edit_advertise_request')->name('advertise-request-edit');
    Route::resource('advertise-modal', 'AdvertiseModalController');
    //Advertise Package
    Route::resource('advertise-package', 'AdvertisePackageController');
    //user package order
    Route::resource('userpackage-order', 'UserPackageOrderController');
    //Country Blog
    Route::resource('country-blog', 'CountryBlogController');
    //country Product
    Route::resource('country-product', 'CountryProductController');
    //buysell category
    Route::resource('buy-sell-category', 'AdminbuysellcategoryController');
    //buysell sub category
    Route::resource('buy-sell-subcategory', 'BuySellSubCategoryController');
    //buysell item
    Route::resource('buy-sell-item', 'AdminBuySellItemHandleController');
    //buysell item price
    Route::resource('buy-sell-ad-price', 'BuySellAdPriceController');
    //Admin handle ad payment
    Route::resource('admin-handle-buy-sell-ad-payment', 'AdminHandleAdPaymentController');

    //future founders
    Route::resource('founder-stories', 'FounderStoryController');
    //startup storeis
    Route::resource('startup', 'StartupController');
    //future startup interview
    Route::resource('fs-interview', 'FSInterviewController');
    //halal investment slider
    Route::resource('halal-investment-slider', 'HalalInvestmentSliderController');
    //halal investment faq
    Route::resource('halal-investment-faq', 'HalalInvestmentFaqController');
    //halal investment shariah advisor
    Route::resource('halal-investment-shariah-advisor', 'HalalInvestmentShariahAdvisorController');
    //halal investment team category
    Route::resource('halal-investment-team-category', 'HalalInvestmentTeamCategoryController');
    //halal investment team
    Route::resource('halal-investment-team', 'HalalInvestmentTeamController');
    //halal investment blog category
    Route::resource('halal-investment-blog-category', 'HalalInvestmentBlogCategoryController');
    //halal investment blog
    Route::resource('halal-investment-blog', 'HalalInvestmentBlogController');
    //halal investment setting
    Route::resource('halal-investment-setting', 'HalalInvestmentSettingController');
    //halal investment matured
    Route::resource('halal-investment-matured', 'HalalInvestmentMaturedController');
    //halal investment company
    Route::resource('halal-investment-company', 'HalalInvestmentCompanyController');
    //
    Route::resource('investment-profile-manage', 'AdminManageInvestmentCompanycontroller');
    //investor order handle
    Route::resource('investor-order-handle', 'InvestorOrderHandleController');
    //investor get payment
    Route::resource('investor-get-payment', 'InvestorGetPaymentController');

    //About Us

    Route::get('about', [AboutAdminController::class, 'index'])->name('about.index');
    Route::get('about-create', [AboutAdminController::class, 'create'])->name('about.create');
    Route::post('about-new', [AboutAdminController::class, 'aboutNew'])->name('about.new');
    Route::get('about-edit/{id}', [AboutAdminController::class, 'edit'])->name('about.edit');
    Route::post('about-update/{id}', [AboutAdminController::class, 'update'])->name('about.update');
    Route::get('about-delete/{id}', [AboutAdminController::class, 'delete'])->name('about.delete');

    // Admin Gallery
    Route::get('gallery', [GalleryAdminController::class, 'index'])->name('gallery.index');
    Route::get('gallery-create', [GalleryAdminController::class, 'create'])->name('gallery.create');
    Route::post('gallery-new', [GalleryAdminController::class, 'galleryAdd'])->name('gallery.new');
    Route::get('gallery-edit/{id}', [GalleryAdminController::class, 'edit'])->name('gallery.edit');
    Route::post('gallery-update/{id}', [GalleryAdminController::class, 'update'])->name('gallery.update');
    Route::get('gallery-delete/{id}', [GalleryAdminController::class, 'delete'])->name('gallery.delete');
});








// Sara software


// //Clear Cache facade value:
// Route::get('/clear-cache', function () {
//     $exitCode = Artisan::call('cache:clear');
//     return '<h1>Cache facade value cleared</h1>';
// });
// //Clear View cache:
// Route::get('/view-clear', function () {
//     $exitCode = Artisan::call('view:clear');
//     return '<h1>View cache cleared</h1>';
// });
// //Clear Config cache:
// Route::get('/config-cache', function () {
//     $exitCode = Artisan::call('config:cache');
//     return '<h1>Clear Config cleared</h1>';
// });

// Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::group(['prefix' => 'software-solution', 'namespace' => 'App\Http\Controllers\Software'], function () {
    Route::get('/home', 'SoftwareController@index')->name('software');
    Route::get('/', 'SoftwareController@encrypt_url')->name('encrypt-url');
    Route::get('/contact-us', 'SoftwareController@contact_us')->name('contact-us');
    Route::get('/product-contact', 'SoftwareController@product_contact')->name('product-contact');
    Route::get('/career', 'SoftwareController@career')->name('career');
    Route::get('/campus-ambassador', 'SoftwareController@campusAmbassador')->name('campus.ambassador');
    Route::post('/create-campus', 'SoftwareController@createCampus')->name('create.campus');
    Route::post('/newsletter', 'SoftwareController@newsletter')->name('newsletter');
    Route::get('/services', 'SoftwareController@services')->name('services');
    Route::get('/about-us', 'SoftwareController@about_us')->name('about-us');
    Route::get('/portfolio', 'SoftwareController@portfolio')->name('portfolio');
    Route::get('/team', 'SoftwareController@team')->name('team');
    Route::get('/pricing', 'SoftwareController@pricing')->name('pricing');
    Route::get('/product-details/{slug}', 'SoftwareController@pageDetails')->name('page-details');
    Route::get('/blog', 'SoftwareController@blog')->name('blog');
    Route::get('/search-blog-software', 'SoftwareController@blogSearchSoftware')->name('blog.search.software');
    Route::get('/blog-details/{slug}', 'SoftwareController@blogDetails')->name('blog-details');
    Route::get('/project-details/{slug}', 'SoftwareController@porjectDetails')->name('project-details');
    Route::get('/job-details/{slug}', 'SoftwareController@jobDetails')->name('job-details');
    Route::post('/submit-contact', 'SoftwareController@submit_contact')->name('submit-contact');
    Route::post('/product-submit-contact', 'SoftwareController@product_submit_contact')->name('product-submit-contact');
    Route::get('/job-apply/{slug}', 'SoftwareController@job_apply')->name('job-apply');
    Route::post('/save-apply-job', 'SoftwareController@save_apply_job')->name('save-apply-job');
    Route::get('/find-state', 'SoftwareController@find_price')->name('find.price');
    Route::get('/privacy', 'SoftwareController@privacy')->name('frontend.privacy');
    Route::get('/term', 'SoftwareController@term')->name('frontend.term');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     if (Auth::user()->role_id == 1) {
//         return redirect()->route('admin.dashboard');
//     } else {
//         return redirect()->route('login');
//     }
// })->name('dashboard');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Software\Admin', 'middleware' => ['auth', 'admin']], function () {

    // Route::get('dashboard', 'SoftwareDashboardController@index')->name('dashboard');
    Route::get('contact', 'SoftwareDashboardController@contact')->name('contact.index');
    Route::get('product-contact', 'SoftwareDashboardController@product_contact')->name('product-contact.index');
    Route::get('/newsletter', 'SoftwareDashboardController@index')->name('newsletter.index');
    Route::resource('site-setting-banner', 'SoftwareSiteSettingBannerController');

    Route::get('/newsletter/send', 'SoftwareDashboardController@newsletterSend')->name('newsletter.send');
    Route::post('/newsletter/send/submit', 'SoftwareDashboardController@newsletterSendSubmit')->name('newsletter.send.submit');
    Route::get('/campus', 'SoftwareCampusController@index')->name('campus.index');
    Route::get('/campus-delete/{id}', 'SoftwareCampusController@destroy')->name('campus.delete');


    //profile
    // Route::get('profile', 'SoftwareSettingController@profile')->name('profile');
    Route::post('update-profile', 'SoftwareSettingController@update_profile')->name('update-profile');
    Route::get('change-password', 'SoftwareSettingController@change_password')->name('change-password');
    Route::post('update-password', 'SoftwareSettingController@update_password')->name('update-password');
    Route::get('page-setup', 'SoftwareSettingController@page_setup')->name('page-setup');
    Route::post('page-setup', 'SoftwareSettingController@home_setup_store')->name('home-setup.store');
    Route::post('contact/store', 'SoftwareSettingController@contact_store')->name('contact.store');
    Route::post('seo-setting.store', 'SoftwareSettingController@seo_store')->name('seo-setting.store');
    Route::get('applied-job', 'JobController@applied_job')->name('applied-job.index');
    
    //slider
    Route::get('/slider-index', 'SoftwareSliderController@index')->name('slider.index');
    Route::get('/slider-create', 'SoftwareSliderController@create')->name('slider.create');
    Route::post('/slider-store', 'SoftwareSliderController@store')->name('slider.store');
    Route::get('/slider-edit-software/{id}', 'SoftwareSliderController@editSlider')->name('slider.edit');
    Route::post('/update-slider/{id}', 'SoftwareSliderController@updateSlider')->name('slider.update');
    Route::get('/delete-slider/{id}', 'SoftwareSliderController@deleteSlider')->name('slider.delete');

    //blog
    Route::resource('blog-categories', SoftwareBlogCategoryController::class);
    Route::resource('blog', SoftwareBlogController::class);

    Route::resource('footer-categories', SoftwarePageCategoryController::class);
    Route::resource('page', SoftwarePageController::class);
    Route::resource('team', SoftwareTeamController::class);
    Route::resource('service', SoftwareServiceController::class);
    Route::resource('client-review', SoftwareClientReviewController::class);
    Route::resource('frequently-ask-qn', SoftwareFrequentyAskQnController::class);
    Route::resource('what-we-do', SoftwareWhatWeDoController::class);
    Route::resource('what-we-are', SoftwareWhatWeAreController::class);
    Route::resource('who-desc', SoftwareAboutWhoDescController::class);
    Route::resource('social', SoftwareSocialController::class);
    Route::resource('footer-abouts', SoftwareFooterAboutController::class);
    Route::resource('key-feature', SoftwareKeyFetauresController::class);
    Route::resource('pricing-plan', SoftwarePricingController::class);
    Route::resource('client-logo', SoftwareClientLogoController::class);
    //project
    Route::resource('project-categories', SoftwareProjectCategoryController::class);
    Route::resource('project', SoftwareProjectController::class);
    Route::get('/project-img-delete/{id}', 'ProjectController@projectImgDelete')->name('project-img-delete');
    //job
    Route::resource('job', SoftwareJobController::class);
    Route::resource('user', SoftwareUserController::class);

    //home page setup
    Route::resource('home-what-do', SoftwareHomeWhatWeDoController::class);
    Route::resource('home-who-we', SoftwareHomePageWhoWeController::class);
    Route::resource('home-fast', SoftwareHomeFastController::class);
    Route::resource('about-feature', SoftwareAboutPageFeatureController::class);
    Route::resource('pro-team', SoftwareTeamPageProTeamController::class);
    //about page seo
    Route::resource('about-page-seo', SoftwareAboutPageSetupController::class);
    //portfolio page seo
    Route::resource('portfolio-page-seo', SoftwarePortfolioPageSeoController::class);
    //service page seo
    Route::resource('service-page-seo', SoftwareServicePageSeoController::class);
    //pricing page seo
    Route::resource('pricing-page-seo', SoftwarePricingPageSeoController::class);
    //product page seo
    Route::resource('product-page-seo', SoftwareProductPageSeoController::class);
    //team page seo
    Route::resource('team-page-seo', SoftwareTeamPageSeoController::class);
    //contact page seo
    Route::resource('contact-page-seo', SoftwareContactPageSeoController::class);
    //career page seo
    Route::resource('career-page-seo', SoftwareCareerPageSeoController::class);
    //about page
    Route::resource('about-page', SoftwareAboutPageController::class);

    //Who we (about page)
    Route::resource('who-we', SoftwareWhoWeController::class);
    // Counters (about page)
    Route::resource('counters', SoftwareCounterController::class);
    // Route::get('admin/who-we', [WhoWeController::class, 'index']);

    // privacy
    Route::resource('privacies', SoftwarePrivacyController::class);


    //terms page
    Route::resource('terms', SoftwareTermController::class);


    //pricing category
    Route::resource('pricing-category', SoftwarePricingCategoryController::class);
    //product features
    Route::resource('product-features', SoftwareProductFeatureController::class);
    Route::resource('doctor', SoftwareDoctorController::class);


    // top-product section
    Route::resource('top-products', SoftwareTopProductController::class);
});

// Route::group(['as' => 'dcadmin.', 'prefix' => 'dcadmin', 'namespace' => 'App\Http\Controllers\DC', 'middleware' => ['auth', 'dc']], function () {

//     Route::get('dashboard', 'DashboardController@index')->name('dashboard');
//     //profile
//     Route::get('profile', 'SettingController@profile')->name('profile');
//     Route::post('update-profile', 'SettingController@update_profile')->name('update-profile');
// });



// Hospital solution Frontend
// Hospital solution Frontend
Route::group(['prefix' => 'hospital-solution', 'namespace' => 'App\Http\Controllers\Hospital'], function () {

    Route::get('/', [HospitalFrontendController::class, 'index'])->name('hospital.home.index');
    Route::get('/product/{slug}', [HospitalFrontendController::class, 'singleProductShow'])->name('hospital.home.single.product.show');
    Route::get('/single-service/{slug}', [HospitalFrontendController::class, 'singleServiceShow'])->name('hospital.single.service.show');
    Route::get('/blog-details/{slug}', [HospitalFrontendController::class, 'singleBlogShow'])->name('hospital.home.single.blog.show');
    Route::get('/news/{slug}', [HospitalFrontendController::class, 'singleNewsShow'])->name('hospital.home.single.news.show');
    Route::get('blog', [HospitalFrontendBlogController::class, 'index'])->name('hospital.blog.index');
    Route::get('blog-search-hospital', [HospitalFrontendBlogController::class, 'hospitalSearchBlog'])->name('hospital.blog.search');
    // Route::get('hospital-blog-search', [HospitalFrontendBlogController::class, 'blogSearch'])->name('hospital_blog_search');
    Route::get('design-layouts', [HospitalServiceController::class, 'index'])->name('hospital.design.layout');
    Route::get('service-item', [HospitalServiceController::class, 'serviceItem'])->name('hospital.services');
    Route::get('design-details/{id}', [HospitalServiceController::class, 'details'])->name('hospital.design.details');
    Route::get('medical-software', [HospitalServiceController::class, 'medicalSoftware'])->name('hospital.medical.software');
    Route::get('software-details/{id}', [HospitalServiceController::class, 'softwareDetails'])->name('hospital.software.details');
    // Route::get('news',[HospitalFrontendBlogController::class,'index'])->name('hospital.news');
    Route::get('blog/category/{slug}', [HospitalFrontendBlogController::class, 'showBlogByCategory'])->name('hospital.show.blog.by.category');
    Route::get('product', [HospitalFrontendShopController::class, 'index'])->name('hospital.shop.index');

    Route::get('shop/shop-product-price-low-to-high', [HospitalFrontendShopController::class, 'lowTohigh'])->name('hospital.low.high');

    Route::get('product/sub-category/{slug}', [HospitalFrontendShopController::class, 'showProductbySubCategory'])->name('hospital.show.product.by.subcategory');
    Route::get('product/category/{slug}', [HospitalFrontendShopController::class, 'showProductbyCategory'])->name('hospital.show.product.by.category');
    Route::get('product/sub-sub-category/{slug}', [HospitalFrontendShopController::class, 'showProductbySubSubCategory'])->name('hospital.show.product.by.subsubcategory');

    Route::get('product-search', [HospitalFrontendShopController::class, 'showProductbySearchName'])->name('hospital.show.product.by.search.name');
    Route::get('contact', [HospitalFrontendContactController::class, 'index'])->name('hospital.contact.index');
    Route::post('contact/store', [HospitalFrontendContactController::class, 'store'])->name('hospital.contact.store');
    Route::get('page-details/{slug}', [HospitalFrontendController::class, 'page_details'])->name('hospital.page-details');
    Route::get('gallery', [HospitalFrontendController::class, 'gallery'])->name('hospital.gallery');
    Route::get('team', [HospitalFrontendController::class, 'team'])->name('hospital.team');
    Route::get('find-gallery', [HospitalFrontendController::class, 'findGallery'])->name('hospital.find.gallery');
    Route::get('find-team', [HospitalFrontendController::class, 'findTeam'])->name('hospital.find.team');
    Route::get('images/next/{id}', [HospitalFrontendController::class, 'getNextImage'])->name('hospital.get.next.image');
    Route::get('images/previous/{id}', [HospitalFrontendController::class, 'getPreviousImage'])->name('hospital.get.previous.image');
    Route::get('images/next/team/{id}', [HospitalFrontendController::class, 'getNextImageTeam'])->name('hospital.get.next.image.team');
    Route::get('images/previous/team/{id}', [HospitalFrontendController::class, 'getPreviousImageTeam'])->name('hospital.get.previous.image.team');

    Route::get('video', [HospitalFrontendController::class, 'video'])->name('hospital.video');
    Route::get('branches', [HospitalFrontendController::class, 'branches'])->name('hospital.branches');
    Route::get('find-branch', [HospitalFrontendController::class, 'findBranch'])->name('hospital.find.branch');
});


// Hospital solution admin
// Hospital solution admin
Route::group(['as' => 'admin.', 'prefix' => 'superadmin', 'namespace' => 'App\Http\Controllers\Hospital', 'middleware' => ['auth', 'admin']], function () {

    // Route::get('hospital-dashboard', 'HospitalDashboardController@index')->name('hospital-dashboard');
    //profile
    Route::get('hospital-profile', 'HospitalSettingController@profile')->name('profile');
    Route::post('hospital-update-profile', 'HospitalSettingController@update_profile')->name('update-profile');
    Route::get('hospital-change-password', 'HospitalSettingController@change_password')->name('change-password');
    Route::post('hospital-update-password', 'HospitalSettingController@update_password')->name('update-password');
    Route::resource('hospital-page-categories', HospitalPageCategoryController::class);
    Route::resource('hospital-page', HospitalPageController::class);
    Route::resource('hospital-blog-categories', HospitalBlogCategoryController::class);
    Route::resource('hospital-blog', HospitalBlogController::class);
    Route::resource('hospital-categories', HospitalCategoryController::class);
    Route::resource('hospital-sub-categories', HospitalSubCategoryController::class);
    Route::resource('hospital-banner', HospitalBannerController::class);
    Route::post('hospital-banner-update', 'HospitalBannerController@bannerUpdate')->name('hospital-update.banner');
    Route::resource('hospital-color', HospitalColorController::class);
    Route::resource('hospital-brand', HospitalBrandController::class);
    Route::resource('hospital-product', HospitalProductController::class);
    Route::resource('hospital-service', HospitalBackServiceController::class);
    Route::get('hospital-findsubcategory', 'HospitalProductController@findSubCategory')->name('hospital-find.sub.category');
    Route::get('hospital-findsubsubcategory', 'HospitalProductController@findSubSubCategory')->name('hospital-find.sub.sub.category');
    Route::resource('hospital-product-images', HospitalProductimagesController::class);
    Route::resource('hospital-slider', HospitalSliderController::class);
    Route::resource('hospital-sitesetting', HospitalSiteSettingController::class);
    Route::resource('hospital-usercontact', HospitalUserContactHandleController::class);
    Route::resource('hospital-sub-sub-categories', HospitalSubSubCategoryController::class);
    Route::resource('hospital-gallery', HospitalGalleryController::class);
    Route::resource('hospital-client', HospitalClientController::class);
    Route::resource('hospital-software', HospitalSoftwareController::class);
    Route::resource('hospital-design', HospitalDesignController::class);
    Route::resource('hospital-news', HospitalLatestNewsController::class);
    Route::resource('hospital-team', HospitalTeamController::class);
    Route::resource('hospital-video', HospitalVideoController::class);
    //branch
    Route::resource('hospital-branch', HospitalBranchController::class);

    Route::get('hospital-product/product-images/{id}', 'HospitalProductController@delete')->name('hospital-product-images.delete');

    //business home sitesetting
    Route::get('/home-sitesetting', [SiteSettingController::class, 'index'])->name('home.sitesetting.index');
    Route::post('/new-sitesetting', [SiteSettingController::class, 'create'])->name('business.home.create');
    Route::get('/product-tag',[HospitalTagController::class, 'index'])->name('hospital-product.tag');
    Route::post('/product-tag-new',[HospitalTagController::class, 'store'])->name('hospital-product.new');
});
