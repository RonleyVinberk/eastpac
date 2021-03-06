'use strict'

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Http routes are entry points to your web application. You can create
| routes for different URLs and bind Controller actions to them.
|
| A complete guide on routing is available here.
| http://adonisjs.com/docs/4.0/routing
|
*/

/** @type {typeof import('@adonisjs/framework/src/Route/Manager')} */
const Route = use('Route')

Route.get('/', () => {
  return { greeting: 'Hello world in JSON' }
});

Route.get('create-wallet','WalletController.CreateWallet').prefix('api');
Route.get('send-transaction','WalletController.SendTransaction').prefix('api');

/*##### Etherscan #####*/
Route.post('users/etherBalanceStore', '/etherscan/account/EtherBalanceController.etherBalanceStore').prefix('api')
Route.post('users/tokenAccountStore', '/etherscan/token/AccountBalanceController.tokenAccountStore').prefix('api')  

/*##### Etherium(Local Server) #####*/
Route.post('users/accountStore', '/etherium/AccountController.accountStore').prefix('api')
Route.post('users/balanceStore', '/etherium/BalanceController.balanceStore').prefix('api')
