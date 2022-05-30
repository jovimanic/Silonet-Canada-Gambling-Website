<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/coinpayment/make' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coinpayment.make.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coinpayment/ajax/payload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coinpayment.encrypt.payload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coinpayment/ajax/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coinpayment.create.transaction',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coinpayment/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coinpayment.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4aRnxn1ACAoeFLch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jd0h7vuBonouJWT5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L7JHPXOPyOrMaZXv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sJeCInmOfyCEINmD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6DM3b1AfDoz3gSfo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L0J9CaR8SfzyWPeL',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me/details/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C6PBubAcVOyJQ8Lt',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me/avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j3JFE0dHK8EOpPK9',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJCqres08H9jcI5M',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me/avatar/external' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QvCBPtO2BnrHEBr5',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndMsamfhyPuCKqxp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/me/return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bKtP5WkKjf2PtAoW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/games' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fhezSDSY3pqXgPC7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1UnfvkuGI8dneoQf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/jackpots' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qe0c8dZHm0QMm8DF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ACZOIX771klQM9tW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stats/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bqs9avCefwABaB9l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stats/game' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wRnKPQuJjbiRpGwB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stats/bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XoA1wOwdUYDdYAIj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stats/shop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z1S5kRVxwoQi9Kvj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/stats/shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VaZZKcPciphCy2gI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shifts/start' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LEmmDRskLBb6yt42',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shifts/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UL1ce9YwOelvM4VT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bn6Drv5d4EvRj7FU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BH7ZLTGdiN0rcK9y',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/unblock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Eu2W1Yrk3AUq7nO',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dHQXfLZIEwf5s1AZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w1omJjnEw3CsWvmU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BKbNBUbyWFQ75vmt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.register.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/deposit/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.deposit.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/gigadat/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LdFoK9TebzcbgaCi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/gigadat/fail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0Wjs11dMWf3NYX8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bonus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::buN1SUQiMGXbeAog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bonus/term' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HeZLA9Ue7mDWNBng',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/promotions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2VRhcRFdjYKzZHDj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subsession' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.subsession',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.history.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/history/bet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.history.bet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/history/bonus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.history.bonus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.activity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.balance.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/balance/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.balance.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/balance/fail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.balance.fail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/details/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.update.details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.update.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/avatar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.update.avatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/avatar/update/external' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.update.avatar-external',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/exchange' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.exchange',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/login-details/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.update.login-details',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/two-factor/enable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.two-factor.enable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/two-factor/disable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.sessions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/returns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.returns',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/jackpots' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.jackpots',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/pincode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.pincode',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setpage.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.category.setpage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/game_stat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game_stat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/loadmore/game' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.loadmore.game',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/balance/cashout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.balance.cashout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.auth.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/game_stat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game_stat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/game_stat/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game_stat.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/bank_stat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.bank_stat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shop_stat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop_stat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shift_stat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shift_stat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/live' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.live_stat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/start_shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.start_shift',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.country',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.currency',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.withdraw.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.activity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/details/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.update.details',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/avatar/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.update.avatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/avatar/update/external' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.update.avatar-external',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/login-details/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.update.login-details',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/two-factor/enable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.two-factor.enable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/two-factor/disable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.sessions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/setshop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.setshop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.tree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.statistics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/balance/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.balance.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/user/mass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.massadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/game' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/games.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.list.json',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/game/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/game/update/mass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.mass',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/gamebanks_add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.gamebanks_add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/gamebanks_clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.gamebanks_clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops/admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.admin_create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.admin_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/pincodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/pincodes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/pincodes/mass/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.massadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/pincodes/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/happyhours' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.happyhour.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/happyhours/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.happyhour.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.happyhour.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/info/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/info/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/api/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/api/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/api/json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.json',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/api/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/returns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.returns.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/returns/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.returns.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.returns.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/jpgame' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.jpgame.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/jpgame/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.jpgame.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.jpgame.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/jpgame/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.jpgame.balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/role/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/permission/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/permission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/permission/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.general.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.auth.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.generator',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.generator.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.shop_block',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops/unblock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.shop_unblock',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.sync',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.activity.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/activity/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.activity.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/c(?|oinpayment/(?|make/([^/]++)(*:39)|ajax/rates/([^/]++)(*:65))|ategories/([^/]++)(?|(*:94)|/([^/]++)(*:110)))|/api/(?|game(?|s/([^/]++)(*:145)|/([^/]++)/server(*:169))|s(?|hops/balance/([^/]++)(*:203)|essions/([^/]++)(?|(*:230)))|users/([^/]++)(?|(*:257)|/(?|edit(*:273)|a(?|vatar(?|(*:293)|/external(*:310)|(*:318))|ctivity(*:334))|sessions(*:351)|balance/([^/]++)(*:375))|(*:384)))|/launcher/([^/]++)/([^/]++)/([^/]++)(*:430)|/register/confirmation/([^/]++)(*:469)|/profile/sessions/([^/]++)/invalidate(*:514)|/setlang/([^/]++)(*:539)|/game/([^/]++)(?|/(?|([^/]++)(*:576)|server(*:590))|(*:599))|/backend/(?|withdraw/reject/([^/]++)(*:644)|p(?|rofile/sessions/([^/]++)/invalidate(*:691)|incodes/([^/]++)/(?|edit(*:723)|update(*:737)|delete(*:751))|ermission/([^/]++)/(?|edit(*:786)|update(*:800)|delete(*:814)))|user/(?|([^/]++)/(?|s(?|tat(*:851)|how(*:862)|essions(?|(*:880)|/([^/]++)/invalidate(*:908)))|profile(*:925)|update/(?|details(*:950)|login\\-details(*:972)|avatar(?|(*:989)|/external(*:1006)))|delete(*:1023)|hard_delete(*:1043)|two\\-factor/(?|enable(*:1073)|disable(*:1089)))|action/([^/]++)(*:1115))|game/(?|([^/]++)(?|/(?|s(?|how(*:1155)|erver(*:1169))|edit(*:1183)|update(*:1198)|delete(*:1213))|(*:1223))|categories(*:1243))|category/([^/]++)/(?|edit(*:1278)|update(*:1293)|delete(*:1308))|shops/([^/]++)/(?|edit(*:1340)|update(*:1355)|delete(*:1370)|hard_delete(*:1390)|action/([^/]++)(*:1414))|happyhours/([^/]++)/(?|edit(*:1451)|update(*:1466)|delete(*:1481))|info/([^/]++)/(?|edit(*:1512)|update(*:1527)|delete(*:1542))|a(?|pi/([^/]++)/(?|edit(*:1575)|update(*:1590)|delete(*:1605))|ctivity/user/([^/]++)/log(*:1640))|r(?|eturns/([^/]++)/(?|edit(*:1677)|update(*:1692)|delete(*:1707))|ole/([^/]++)/(?|edit(*:1737)|update(*:1752)|delete(*:1767)))|jpgame/([^/]++)/(?|edit(*:1801)|update(*:1816))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coinpayment.make.show',
          ),
          1 => 
          array (
            0 => 'make',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coinpayment.rates',
          ),
          1 => 
          array (
            0 => 'usd',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      94 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.list.category',
          ),
          1 => 
          array (
            0 => 'category1',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.list.category_level2',
          ),
          1 => 
          array (
            0 => 'category1',
            1 => 'category2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XBA8mrJqgj3eaqaz',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EPTOpjbnWur4t4fr',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OxL7LWYQga42mdnO',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ROTupORUa8C20Yh1',
          ),
          1 => 
          array (
            0 => 'session',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8D8PM7u7GWYOA5QK',
          ),
          1 => 
          array (
            0 => 'session',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OaIanIvGwG97mAfb',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N4p28QBCcCFqDMT4',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jpzHxajs6O7CIcN6',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KUwh2QLXlO2pD4T8',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N253VfNTvTD87YnZ',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::By7orfiISxU53bpT',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'type',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H5uLMyCkGyUpT4aT',
          ),
          1 => 
          array (
            0 => 'game',
            1 => 'token',
            2 => 'mode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.register.confirm-email',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.profile.sessions.invalidate',
          ),
          1 => 
          array (
            0 => 'session',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.setlang',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.go.prego',
          ),
          1 => 
          array (
            0 => 'game',
            1 => 'prego',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.server',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.game.go',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.reject.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.sessions.invalidate',
          ),
          1 => 
          array (
            0 => 'session',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.edit',
          ),
          1 => 
          array (
            0 => 'pincode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.update',
          ),
          1 => 
          array (
            0 => 'pincode',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.pincode.delete',
          ),
          1 => 
          array (
            0 => 'pincode',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.permission.delete',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.stat',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.sessions',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.sessions.invalidate',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'session',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.update.details',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.update.login-details',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.update.avatar',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.update.avatar.external',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.delete',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.hard_delete',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.two-factor.enable',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.two-factor.disable',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.user.action',
          ),
          1 => 
          array (
            0 => 'action',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.show',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.server',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.edit',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.update',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.delete',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.go',
          ),
          1 => 
          array (
            0 => 'game',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.game.categories',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.delete',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.edit',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.update',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.delete',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.hard_delete',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.action',
          ),
          1 => 
          array (
            0 => 'shop',
            1 => 'action',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.happyhour.edit',
          ),
          1 => 
          array (
            0 => 'happyhour',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.happyhour.update',
          ),
          1 => 
          array (
            0 => 'happyhour',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.happyhour.delete',
          ),
          1 => 
          array (
            0 => 'happyhour',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.edit',
          ),
          1 => 
          array (
            0 => 'info',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.update',
          ),
          1 => 
          array (
            0 => 'info',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.info.delete',
          ),
          1 => 
          array (
            0 => 'info',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.edit',
          ),
          1 => 
          array (
            0 => 'api',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.update',
          ),
          1 => 
          array (
            0 => 'api',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.api.delete',
          ),
          1 => 
          array (
            0 => 'api',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.activity.user',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.returns.edit',
          ),
          1 => 
          array (
            0 => 'return',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.returns.update',
          ),
          1 => 
          array (
            0 => 'return',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.returns.delete',
          ),
          1 => 
          array (
            0 => 'return',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.role.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.role.delete',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.jpgame.edit',
          ),
          1 => 
          array (
            0 => 'jackpot',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.jpgame.update',
          ),
          1 => 
          array (
            0 => 'jackpot',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'coinpayment.make.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coinpayment/make',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'coinpayment.make.store',
        'uses' => 'Hexters\\CoinPayment\\Http\\Controllers\\MakeTransactionController@store',
        'controller' => 'Hexters\\CoinPayment\\Http\\Controllers\\MakeTransactionController@store',
        'namespace' => 'Hexters\\CoinPayment\\Http\\Controllers',
        'prefix' => 'coinpayment/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coinpayment.make.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coinpayment/make/{make}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'coinpayment.make.show',
        'uses' => 'Hexters\\CoinPayment\\Http\\Controllers\\MakeTransactionController@show',
        'controller' => 'Hexters\\CoinPayment\\Http\\Controllers\\MakeTransactionController@show',
        'namespace' => 'Hexters\\CoinPayment\\Http\\Controllers',
        'prefix' => 'coinpayment/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coinpayment.rates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coinpayment/ajax/rates/{usd}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Hexters\\CoinPayment\\Http\\Controllers\\AjaxController@rates',
        'controller' => 'Hexters\\CoinPayment\\Http\\Controllers\\AjaxController@rates',
        'as' => 'coinpayment.rates',
        'namespace' => 'Hexters\\CoinPayment\\Http\\Controllers',
        'prefix' => 'coinpayment/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coinpayment.encrypt.payload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coinpayment/ajax/payload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Hexters\\CoinPayment\\Http\\Controllers\\AjaxController@encrypt_payload',
        'controller' => 'Hexters\\CoinPayment\\Http\\Controllers\\AjaxController@encrypt_payload',
        'as' => 'coinpayment.encrypt.payload',
        'namespace' => 'Hexters\\CoinPayment\\Http\\Controllers',
        'prefix' => 'coinpayment/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coinpayment.create.transaction' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coinpayment/ajax/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Hexters\\CoinPayment\\Http\\Controllers\\AjaxController@create_transaction',
        'controller' => 'Hexters\\CoinPayment\\Http\\Controllers\\AjaxController@create_transaction',
        'as' => 'coinpayment.create.transaction',
        'namespace' => 'Hexters\\CoinPayment\\Http\\Controllers',
        'prefix' => 'coinpayment/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coinpayment.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coinpayment/ipn',
      'action' => 
      array (
        'uses' => 'Hexters\\CoinPayment\\Http\\Controllers\\IPNController@__invoke',
        'controller' => 'Hexters\\CoinPayment\\Http\\Controllers\\IPNController',
        'as' => 'coinpayment.ipn',
        'namespace' => 'Hexters\\CoinPayment\\Http\\Controllers',
        'prefix' => '/coinpayment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4aRnxn1ACAoeFLch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Auth\\AuthController@login',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Auth\\AuthController@login',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4aRnxn1ACAoeFLch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jd0h7vuBonouJWT5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Auth\\AuthController@logout',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Auth\\AuthController@logout',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jd0h7vuBonouJWT5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L7JHPXOPyOrMaZXv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Auth\\RegistrationController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Auth\\RegistrationController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::L7JHPXOPyOrMaZXv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sJeCInmOfyCEINmD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\StatsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\StatsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sJeCInmOfyCEINmD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6DM3b1AfDoz3gSfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\DetailsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\DetailsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6DM3b1AfDoz3gSfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L0J9CaR8SfzyWPeL' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/me/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\DetailsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\DetailsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::L0J9CaR8SfzyWPeL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::C6PBubAcVOyJQ8Lt' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/me/details/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AuthDetailsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AuthDetailsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::C6PBubAcVOyJQ8Lt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::j3JFE0dHK8EOpPK9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/me/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AvatarController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AvatarController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::j3JFE0dHK8EOpPK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PJCqres08H9jcI5M' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/me/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AvatarController@destroy',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AvatarController@destroy',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PJCqres08H9jcI5M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QvCBPtO2BnrHEBr5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/me/avatar/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AvatarController@updateExternal',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\AvatarController@updateExternal',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QvCBPtO2BnrHEBr5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ndMsamfhyPuCKqxp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/me/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\SessionsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\SessionsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ndMsamfhyPuCKqxp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bKtP5WkKjf2PtAoW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/me/return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\DetailsController@returns',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Profile\\DetailsController@returns',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bKtP5WkKjf2PtAoW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fhezSDSY3pqXgPC7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/games',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Games\\GamesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Games\\GamesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fhezSDSY3pqXgPC7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XBA8mrJqgj3eaqaz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/games/{game}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Games\\GamesController@go',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Games\\GamesController@go',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XBA8mrJqgj3eaqaz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EPTOpjbnWur4t4fr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/game/{game}/server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Games\\GamesController@server',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Games\\GamesController@server',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EPTOpjbnWur4t4fr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1UnfvkuGI8dneoQf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Categories\\CategoriesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Categories\\CategoriesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1UnfvkuGI8dneoQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qe0c8dZHm0QMm8DF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/jackpots',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Jackpots\\JackpotsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Jackpots\\JackpotsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qe0c8dZHm0QMm8DF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ACZOIX771klQM9tW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Transactions\\TransactionsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Transactions\\TransactionsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ACZOIX771klQM9tW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bqs9avCefwABaB9l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stats/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@pay',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@pay',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bqs9avCefwABaB9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wRnKPQuJjbiRpGwB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stats/game',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@game',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@game',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wRnKPQuJjbiRpGwB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XoA1wOwdUYDdYAIj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stats/bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@bank',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@bank',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XoA1wOwdUYDdYAIj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z1S5kRVxwoQi9Kvj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stats/shop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@shop',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@shop',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z1S5kRVxwoQi9Kvj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VaZZKcPciphCy2gI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stats/shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@shift',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\GameStats\\GameStatsController@shift',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VaZZKcPciphCy2gI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LEmmDRskLBb6yt42' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/shifts/start',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\OpenShiftController@start_shift',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\OpenShiftController@start_shift',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LEmmDRskLBb6yt42',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UL1ce9YwOelvM4VT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shifts/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\OpenShiftController@info',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\OpenShiftController@info',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UL1ce9YwOelvM4VT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Bn6Drv5d4EvRj7FU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@currency',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@currency',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Bn6Drv5d4EvRj7FU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OxL7LWYQga42mdnO' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/shops/balance/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OxL7LWYQga42mdnO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BH7ZLTGdiN0rcK9y' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/shops/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@shop_block',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@shop_block',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BH7ZLTGdiN0rcK9y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1Eu2W1Yrk3AUq7nO' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/shops/unblock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@shop_unblock',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@shop_unblock',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1Eu2W1Yrk3AUq7nO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dHQXfLZIEwf5s1AZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@shop',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\ShopController@shop',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dHQXfLZIEwf5s1AZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'as' => 'users.index',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'as' => 'users.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'as' => 'users.show',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@show',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@show',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'as' => 'users.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'as' => 'users.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'as' => 'users.destroy',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@destroy',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\UsersController@destroy',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OaIanIvGwG97mAfb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/users/{user}/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\AvatarController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\AvatarController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OaIanIvGwG97mAfb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N4p28QBCcCFqDMT4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/users/{user}/avatar/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\AvatarController@updateExternal',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\AvatarController@updateExternal',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::N4p28QBCcCFqDMT4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jpzHxajs6O7CIcN6' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/users/{user}/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\AvatarController@destroy',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\AvatarController@destroy',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jpzHxajs6O7CIcN6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KUwh2QLXlO2pD4T8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\ActivityController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\ActivityController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KUwh2QLXlO2pD4T8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N253VfNTvTD87YnZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\SessionsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\SessionsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::N253VfNTvTD87YnZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::By7orfiISxU53bpT' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/users/{user}/balance/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\BalanceController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\Users\\BalanceController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::By7orfiISxU53bpT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ROTupORUa8C20Yh1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sessions/{session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\SessionsController@show',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\SessionsController@show',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ROTupORUa8C20Yh1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8D8PM7u7GWYOA5QK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sessions/{session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\SessionsController@destroy',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\SessionsController@destroy',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8D8PM7u7GWYOA5QK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w1omJjnEw3CsWvmU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\ActivityController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\ActivityController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::w1omJjnEw3CsWvmU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BKbNBUbyWFQ75vmt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'ipcheck',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Api\\SettingsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Api\\SettingsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BKbNBUbyWFQ75vmt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.auth.login',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@getLogin',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@getLogin',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.auth.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.auth.login.post',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@postLogin',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@postLogin',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.auth.logout',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@getLogout',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@getLogout',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H5uLMyCkGyUpT4aT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'launcher/{game}/{token}/{mode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@apiLogin',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@apiLogin',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::H5uLMyCkGyUpT4aT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.register',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@getRegister',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@getRegister',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.register.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.register.post',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@postRegister',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@postRegister',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.register.confirm-email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/confirmation/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.register.confirm-email',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@confirmEmail',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\Auth\\AuthController@confirmEmail',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.deposit.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'deposit/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.deposit.payment',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PaymentController@gigadat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PaymentController@gigadat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => '/deposit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LdFoK9TebzcbgaCi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment/gigadat/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PaymentController@gigadatsuccess',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PaymentController@gigadatsuccess',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => '/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::LdFoK9TebzcbgaCi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c0Wjs11dMWf3NYX8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment/gigadat/fail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PaymentController@gigadatfail',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PaymentController@gigadatfail',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => '/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::c0Wjs11dMWf3NYX8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::buN1SUQiMGXbeAog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'bonus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\BonusController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\BonusController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::buN1SUQiMGXbeAog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HeZLA9Ue7mDWNBng' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'bonus/term',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\BonusController@term',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\BonusController@term',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::HeZLA9Ue7mDWNBng',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2VRhcRFdjYKzZHDj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'promotions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PromotionsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\PromotionsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2VRhcRFdjYKzZHDj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.subsession' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subsession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.subsession',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@subsession',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@subsession',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.info',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.history.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.history.payment',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@payment_history',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@payment_history',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.history.bet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/history/bet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.history.bet',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@bet_history',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@bet_history',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.history.bonus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/history/bonus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.history.bonus',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@payment_history',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@payment_history',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.activity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.activity',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@activity',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@activity',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.balance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.balance',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.balance.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.balance.post',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@balanceAdd',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@balanceAdd',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.balance.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/balance/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.balance.success',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@success',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@success',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.balance.fail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/balance/fail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.balance.fail',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@fail',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@fail',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.update.details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/details/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.update.details',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateDetails',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateDetails',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.update.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.update.password',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updatePassword',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updatePassword',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.update.avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/avatar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.update.avatar',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateAvatar',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateAvatar',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.update.avatar-external' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/avatar/update/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.update.avatar-external',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateAvatarExternal',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateAvatarExternal',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.exchange' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/exchange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.exchange',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@exchange',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@exchange',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.update.login-details' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'profile/login-details/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.update.login-details',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateLoginDetails',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@updateLoginDetails',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/two-factor/enable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.two-factor.enable',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@enableTwoFactorAuth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@enableTwoFactorAuth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/two-factor/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.two-factor.disable',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@disableTwoFactorAuth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@disableTwoFactorAuth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.sessions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.sessions',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@sessions',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@sessions',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.sessions.invalidate' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'profile/sessions/{session}/invalidate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.sessions.invalidate',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@invalidateSession',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@invalidateSession',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.returns' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/returns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.returns',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@returns',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@returns',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.jackpots' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/jackpots',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.jackpots',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@jackpots',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@jackpots',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.profile.pincode' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/pincode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.profile.pincode',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@pincode',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@pincode',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.setlang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setlang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.setlang',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@setlang',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@setlang',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.search',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@search',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@search',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.list.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category1}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.list.category',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.list.category_level2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category1}/{category2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.list.category_level2',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.category.setpage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setpage.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.category.setpage',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@setpage',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@setpage',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.go.prego' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'game/{game}/{prego}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.go.prego',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@go',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@go',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.go' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'game/{game}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.go',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@go',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@go',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game.server' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'game/{game}/server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game.server',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@server',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@server',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.game_stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'game_stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.game_stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@game_stat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@game_stat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.loadmore.game' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/loadmore/game',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.loadmore.game',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@loadmore',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\GamesController@loadmore',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.balance.cashout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/balance/cashout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'siteisclosed',
        ),
        'as' => 'frontend.balance.cashout',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@cashout',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend\\ProfileController@cashout',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Frontend',
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/login',
      'action' => 
      array (
        'middleware' => 'web',
        'as' => 'backend.auth.login',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\Auth\\AuthController@getLogin',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\Auth\\AuthController@getLogin',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.auth.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/login',
      'action' => 
      array (
        'middleware' => 'web',
        'as' => 'backend.auth.login.post',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\Auth\\AuthController@postLogin',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\Auth\\AuthController@postLogin',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.auth.logout',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\Auth\\AuthController@getLogout',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\Auth\\AuthController@getLogout',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:full.search',
        ),
        'as' => 'backend.search',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@search',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@search',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.dashboard',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game_stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/game_stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:stats.game',
        ),
        'as' => 'backend.game_stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@game_stat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@game_stat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game_stat.clear' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/game_stat/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game_stat.clear',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@game_stat_clear',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@game_stat_clear',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.bank_stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/bank_stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:stats.bank',
        ),
        'as' => 'backend.bank_stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@bank_stat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@bank_stat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop_stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shop_stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:stats.shop',
        ),
        'as' => 'backend.shop_stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@shop_stat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@shop_stat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shift_stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shift_stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:stats.shift',
        ),
        'as' => 'backend.shift_stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@shift_stat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@shift_stat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.live_stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/live',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:stats.live',
        ),
        'as' => 'backend.live_stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@live_stat',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@live_stat',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.start_shift' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/start_shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.start_shift',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@start_shift',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@start_shift',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.country' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:country.manage',
        ),
        'as' => 'backend.country',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@country',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@country',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.currency' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:currency.manage',
        ),
        'as' => 'backend.currency',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@country',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@country',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.withdraw.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:withdraw.manage',
        ),
        'as' => 'backend.withdraw.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\WithDrawController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\WithDrawController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.reject.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/withdraw/reject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:withdraw.manage',
        ),
        'as' => 'backend.reject.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\WithDrawController@reject',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\WithDrawController@reject',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.activity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/profile/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.activity',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@activity',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@activity',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.update.details' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/profile/details/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.update.details',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateDetails',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateDetails',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.update.avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile/avatar/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.update.avatar',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateAvatar',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateAvatar',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.update.avatar-external' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile/avatar/update/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.update.avatar-external',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateAvatarExternal',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateAvatarExternal',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.update.login-details' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/profile/login-details/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.update.login-details',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateLoginDetails',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@updateLoginDetails',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile/two-factor/enable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.two-factor.enable',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@enableTwoFactorAuth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@enableTwoFactorAuth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile/two-factor/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.two-factor.disable',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@disableTwoFactorAuth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@disableTwoFactorAuth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.sessions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/profile/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.sessions',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@sessions',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@sessions',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.sessions.invalidate' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/profile/sessions/{session}/invalidate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.sessions.invalidate',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@invalidateSession',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@invalidateSession',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.setshop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'backend/profile/setshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.profile.setshop',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@setshop',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ProfileController@setshop',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.manage',
        ),
        'as' => 'backend.user.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.tree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.tree',
        ),
        'as' => 'backend.user.tree',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@tree',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@tree',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.statistics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:stats.pay',
        ),
        'as' => 'backend.statistics',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@statistics',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\DashboardController@statistics',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.balance.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile/balance/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.balance.manage',
        ),
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateBalance',
        'as' => 'backend.user.balance.update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateBalance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.add',
        ),
        'as' => 'backend.user.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.add',
        ),
        'as' => 'backend.user.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.stat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/user/{user}/stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.stat',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@statistics',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@statistics',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.massadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/user/mass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.add',
        ),
        'as' => 'backend.user.massadd',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@massadd',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@massadd',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/user/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.show',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@view',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@view',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/user/{user}/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.update.details' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/user/{user}/update/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.update.details',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateDetails',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateDetails',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.update.login-details' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/user/{user}/update/login-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.update.login-details',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateLoginDetails',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateLoginDetails',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/user/{user}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.delete',
        ),
        'as' => 'backend.user.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.hard_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/user/{user}/hard_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.delete',
        ),
        'as' => 'backend.user.hard_delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@hard_delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@hard_delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.update.avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/user/{user}/update/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.update.avatar',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateAvatar',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateAvatar',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.update.avatar.external' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/user/{user}/update/avatar/external',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.update.avatar.external',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateAvatarExternal',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@updateAvatarExternal',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.sessions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/user/{user}/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.sessions',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@sessions',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@sessions',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.sessions.invalidate' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/user/{user}/sessions/{session}/invalidate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.sessions.invalidate',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@invalidateSession',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@invalidateSession',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/user/{user}/two-factor/enable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.two-factor.enable',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@enableTwoFactorAuth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@enableTwoFactorAuth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/user/{user}/two-factor/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.two-factor.disable',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@disableTwoFactorAuth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@disableTwoFactorAuth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.user.action' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/user/action/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.user.action',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@action',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\UsersController@action',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/game',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:games.manage',
        ),
        'as' => 'backend.game.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.list.json' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/games.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.list.json',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@index_json',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@index_json',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/game/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:games.add',
        ),
        'as' => 'backend.game.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/game/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:games.add',
        ),
        'as' => 'backend.game.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/game/{game}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.show',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@view',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@view',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.go' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/game/{game}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.go',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@go',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@go',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.server' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/game/{game}/server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.server',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@server',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@server',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/game/{game}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:games.edit',
        ),
        'as' => 'backend.game.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/game/{game}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/game/{game}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:games.delete',
        ),
        'as' => 'backend.game.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.categories' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/game/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.categories',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@categories',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@categories',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.mass' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/game/update/mass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:games.edit',
        ),
        'as' => 'backend.game.mass',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@mass',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@mass',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.gamebanks_add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/gamebanks_add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.gamebanks_add',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@gamebanks_add',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@gamebanks_add',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.game.gamebanks_clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/gamebanks_clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.game.gamebanks_clear',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@gamebanks_clear',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\GamesController@gamebanks_clear',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:categories.manage',
        ),
        'as' => 'backend.category.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:categories.add',
        ),
        'as' => 'backend.category.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:categories.add',
        ),
        'as' => 'backend.category.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/category/{category}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/category/{category}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:categories.delete',
        ),
        'as' => 'backend.category.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\CategoriesController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.admin_create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.admin_create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@admin_create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@admin_create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.admin_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shops/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.admin_store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@admin_store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@admin_store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops/{shop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shops/{shop}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shops/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.balance',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/shops/{shop}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.hard_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/shops/{shop}/hard_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.hard_delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@hard_delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@hard_delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.action' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/shops/{shop}/action/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.manage',
        ),
        'as' => 'backend.shop.action',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@action',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ShopsController@action',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/pincodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:pincodes.manage',
        ),
        'as' => 'backend.pincode.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/pincodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:pincodes.add',
        ),
        'as' => 'backend.pincode.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/pincodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:pincodes.add',
        ),
        'as' => 'backend.pincode.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.massadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/pincodes/mass/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:pincodes.add',
        ),
        'as' => 'backend.pincode.massadd',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@massadd',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@massadd',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/pincodes/{pincode}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.pincode.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/pincodes/{pincode}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.pincode.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/pincodes/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.pincode.balance',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.pincode.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/pincodes/{pincode}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:pincodes.delete',
        ),
        'as' => 'backend.pincode.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PincodeController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.happyhour.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/happyhours',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:happyhours.manage',
        ),
        'as' => 'backend.happyhour.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.happyhour.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/happyhours/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:happyhours.add',
        ),
        'as' => 'backend.happyhour.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.happyhour.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/happyhours/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:happyhours.add',
        ),
        'as' => 'backend.happyhour.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.happyhour.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/happyhours/{happyhour}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.happyhour.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.happyhour.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/happyhours/{happyhour}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.happyhour.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.happyhour.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/happyhours/{happyhour}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:happyhours.delete',
        ),
        'as' => 'backend.happyhour.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\HappyHourController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:helpers.manage',
        ),
        'as' => 'backend.info.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/info/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:helpers.add',
        ),
        'as' => 'backend.info.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/info/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:helpers.add',
        ),
        'as' => 'backend.info.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/info/{info}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.info.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/info/{info}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.info.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/info/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.info.balance',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.info.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/info/{info}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:helpers.delete',
        ),
        'as' => 'backend.info.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\InfoController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:api.manage',
        ),
        'as' => 'backend.api.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/api/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:api.add',
        ),
        'as' => 'backend.api.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/api/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:api.add',
        ),
        'as' => 'backend.api.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.generate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/api/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.api.generate',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@generate',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@generate',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.json' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/api/json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.api.json',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@json',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@json',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/api/{api}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.api.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/api/{api}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.api.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/api/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.api.balance',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.api.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/api/{api}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:api.delete',
        ),
        'as' => 'backend.api.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ApiController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.returns.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/returns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:returns.manage',
        ),
        'as' => 'backend.returns.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.returns.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/returns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:returns.add',
        ),
        'as' => 'backend.returns.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.returns.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/returns/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:returns.add',
        ),
        'as' => 'backend.returns.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.returns.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/returns/{return}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.returns.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.returns.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/returns/{return}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.returns.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.returns.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/returns/{return}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:returns.delete',
        ),
        'as' => 'backend.returns.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ReturnsController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.jpgame.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/jpgame',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.jpgame.list',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.jpgame.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/jpgame/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.jpgame.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.jpgame.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/jpgame/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.jpgame.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.jpgame.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/jpgame/{jackpot}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.jpgame.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.jpgame.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/jpgame/{jackpot}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.jpgame.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.jpgame.balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/jpgame/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.jpgame.balance',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@balance',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\JPGController@balance',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:roles.manage',
        ),
        'as' => 'backend.role.index',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.role.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/role/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.role.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/role/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.role.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/role/{role}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.role.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.role.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/role/{role}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.role.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\RolesController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/permission/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.permission.save',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@saveRolePermissions',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@saveRolePermissions',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:permissions.manage',
        ),
        'as' => 'backend.permission.index',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/permission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:permissions.add',
        ),
        'as' => 'backend.permission.create',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@create',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@create',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/permission/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:permissions.add',
        ),
        'as' => 'backend.permission.store',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@store',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@store',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/permission/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.permission.edit',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@edit',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@edit',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/permission/{permission}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.permission.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.permission.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/permission/{permission}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.permission.delete',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@delete',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\PermissionsController@delete',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:settings.general',
        ),
        'as' => 'backend.settings.general',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@general',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@general',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.general.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:settings.general',
        ),
        'as' => 'backend.settings.general.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/settings/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:settings.auth',
        ),
        'as' => 'backend.settings.auth',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@auth',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@auth',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.auth.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/settings/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:settings.auth',
        ),
        'as' => 'backend.settings.auth.update',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@update',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@update',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.generator' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:settings.generator',
        ),
        'as' => 'backend.settings.generator',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@generator',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@generator',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.generator.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:settings.generator',
        ),
        'as' => 'backend.settings.generator.post',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@generator',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@generator',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.shop_block' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/shops/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.block',
        ),
        'as' => 'backend.settings.shop_block',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@shop_block',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@shop_block',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.shop_unblock' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/shops/unblock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:shops.unblock',
        ),
        'as' => 'backend.settings.shop_unblock',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@shop_unblock',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@shop_unblock',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.sync' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'backend/settings/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.settings.sync',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@sync',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\SettingsController@sync',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.activity.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'permission:users.activity',
        ),
        'as' => 'backend.activity.index',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ActivityController@index',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ActivityController@index',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.activity.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/activity/user/{user}/log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.activity.user',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ActivityController@userActivity',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ActivityController@userActivity',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.activity.clear' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/activity/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.activity.clear',
        'uses' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ActivityController@clear',
        'controller' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend\\ActivityController@clear',
        'namespace' => 'VanguardLTE\\Http\\Controllers\\Web\\Backend',
        'prefix' => '/backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
