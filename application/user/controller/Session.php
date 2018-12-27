<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\user\model\User;

use think\facade\Session as SessionFacade;

class Session extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return 'hello';
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   
        // $user = Session::get('user');
        if (SessionFacade::has('user')) {
            $user = Session::get('user');
            return redirect('user/auth/read')->params(['id' => $user->id]);
        } else {
            $token = $this->request->token('__token__', 'sha1');
            $this->assign('token', $token);
            return $this->fetch();
        }

    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $result = $this->validate($request->post(), 'app\user\validate\Session');
        if(true!== $result){
            //失败的话
            return redirect('user\session\create')->with('validate',$result);
        }else{
            //成功的话
            //查找用户
           $user = User::where('email', $request->email)->find();
           if($user !== null && password_verify($request->password, $user->password)){
                // return 'password is valid'
                SessionFacade::set('user', $user);
                return redirect('user/auth/read')->params(['id'=>$user->id]);
           }else{
                // return 'Invalid password'
                return redirect('user/session/create')->with('validate', '邮箱或密码错误！');
           }
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        if (SessionFacade::has('user') && $id === SessionFacade::get('user.id')) {
            SessionFacade::delete('user');
            return redirect('user/session/create')->with('validate','您已退出');
        } else {
            return '非法请求';
        }
    }
}
