<?php
/**
 * 后台专用配置文件-菜单
 */
$menu = [
    //权限
    [
        'top' => ['权限配置' => 'home'], //顶部
        '团队管理' => [//侧边分组
            ['团队列表' => 'team/team/list'], //导航明细
            ['添加成员' => 'team/team/add']
        ],
        '角色管理' => [
            ['角色列表' => 'team/role/list'],
            ['添加角色' => 'team/role/add']
        ],
        '权限管理' => [
            ['权限列表' => 'team/privilege/list'],
            ['添加权限' => 'team/privilege/add'],
            ['分组列表' => 'team/privilege/list-group'],
            ['添加分组' => 'team/privilege/add-group']
        ]
    ],
    //用户
//    [
//        'top' => ['学员管理' => 'home'],
//        '学员管理' => [
//            ['学员列表' => 'user/user/list'],
//        ]
//    ],
    //产品
    $menu[] = [
        'top' => ['学员管理' => 'home'],
        '学员管理' => [
            ['学员列表' => 'product/project/list'],
            ['添加学员' => 'product/project/add'],
        ],
//        '经典案例' => [
//            ['案例列表' => 'product/case/list'],
//            ['添加案例' => 'product/case/add'],
//        ],
//        '产品知识' => [
//            ['知识列表' => 'product/knowledge/list'],
//            ['添加知识' => 'product/knowledge/add'],
//        ],
    ],
    //标签
    [
        'top' => ['课程管理' => 'home'],
        '课程管理' => [
            ['课程列表' => 'tag/tag/list'],
            ['添加课程' => 'tag/tag/add'],
        ],
    ],
    //发帖
//    [
//        'top' => ['发帖管理' => 'home'],
//        '发帖管理' => [
//            ['帖子列表' => 'comment/comment/list'],
//        ],
//    ],
    //内容
//    [
//        'top' => ['内容管理' => 'home'],
//        '内容配置' => [
//            ['配置列表' => 'content/index/content'],
//        ],
//    ],
    //细胞培养
//    [
//        'top' => ['细胞培养' => 'home'],
//        '细胞培养' => [
//            ['细胞列表' => 'cell/cell/list'],
//            ['添加' => 'cell/cell/add'],
//        ],
//    ],

];
return $menu;