<?php
/**
 * Created by PhpStorm.
 * User: wangjh
 * Date: 2018/5/5
 * Time: 14:16
 */

use Illuminate\Routing\Router;

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => 'App\Modules\WorkFlow\Controller',
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    //测试
    $router->get('workflow', 'TestController@index');
    //审批
    $router->get('workflow.approval', 'ApprovalController@index');
    //驳回
    $router->get('workflow.reject', 'RejectController@index');

    //用户升级提交
    $router->get('workflow.upgrade','UserUpgradeController@UserUpgrade');
    //用户升级撤回
    $router->get('workflow.upgradewithdraw','UserUpgradeController@UpgradeWithdraw');
    //用户升级通过
    $router->get('workflow.upgradeadopt','UserUpgradeController@UpgradeAdopt');
    //邀请码用户升级通过
    $router->get('workflow.inviteUpgradeAdopt','UserUpgradeController@inviteUpgradeAdopt');
    //用户升级驳回
    $router->get('workflow.upgradereject','UserUpgradeController@UpgradeReject');

    // 会议审核通过 修改会议状态
    $router->get('workflow.updateState','MeetingController@updateState');
    // 会议审核驳回 修改会议状态
    $router->get('workflow.meetReject','MeetingController@meetReject');

    // 用户发放邀请码
    $router->get('workflow.sendInvCode','UserUpgradeController@SendInvCode');

});