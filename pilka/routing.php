<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('personList',    'PersonListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('personNew',     'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personSave',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl',	['admin']);

Utils::addRoute('home',    'HomeCtrl');

Utils::addRoute('registerShow',    'RegisterCtrl');
Utils::addRoute('register',    'RegisterCtrl');

Utils::addRoute('browse',    'BrowseCtrl');

Utils::addRoute('userPanel',     'UserPCtrl', ['user','admin']);
Utils::addRoute('userSave',      'UserPCtrl', ['user','admin']);

Utils::addRoute('leagueList',     'LeagueListCtrl', ['admin']);
Utils::addRoute('leagueNew',      'LeagueEditCtrl', ['admin']);
Utils::addRoute('leagueEdit',     'LeagueEditCtrl', ['admin']);
Utils::addRoute('leagueSave',     'LeagueEditCtrl', ['admin']);
Utils::addRoute('leagueDelete',   'LeagueEditCtrl', ['admin']);

Utils::addRoute('clubList',       'ClubListCtrl', ['admin']);
Utils::addRoute('clubNew',        'ClubEditCtrl', ['admin']);
Utils::addRoute('clubEdit',       'ClubEditCtrl', ['admin']);
Utils::addRoute('clubSave',       'ClubEditCtrl', ['admin']);
Utils::addRoute('clubDelete',     'ClubEditCtrl', ['admin']);

Utils::addRoute('playerList',     'PlayerListCtrl', ['admin']);
Utils::addRoute('playerNew',      'PlayerEditCtrl', ['admin']);
Utils::addRoute('playerEdit',     'PlayerEditCtrl', ['admin']);
Utils::addRoute('playerSave',     'PlayerEditCtrl', ['admin']);
Utils::addRoute('playerDelete',   'PlayerEditCtrl', ['admin']);
Utils::addRoute('matchList', 'MatchListCtrl', ['admin']);
Utils::addRoute('simulateMatches', 'MatchListCtrl', ['admin']);
Utils::addRoute('resetMatches', 'MatchListCtrl', ['admin']);